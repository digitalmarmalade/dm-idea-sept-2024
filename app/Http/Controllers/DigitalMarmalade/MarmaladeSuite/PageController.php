<?php

namespace App\Http\Controllers\DigitalMarmalade\MarmaladeSuite;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\PageBuilder;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\PageLoader;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\ItemLoader;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Seo\Seo;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\SessionPageBuilderTrait;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\SessionItemLoader;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\PageBuilderHelper;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\PageUpdateHandlerTrait;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Page;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Exception\PageUpdateValidationException;
use Exception;
use App\Page as PageModel;

/**
 * Controller for the Page Builder list/edit/update functions
 */
class PageController extends MarmaladeSuiteControllerAbstract
{
    
    use SessionPageBuilderTrait, PageBuilderHelper, PageUpdateHandlerTrait;
    
    protected $_listTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.Pages.list';
    protected $_createTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.Pages.create';
    protected $_editTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.Pages.edit';
    
    protected $_seoPrefix = 'Pagebuilder - ';
    
    protected $_rules = [
        'name' => 'required|string|min:1|max:255',
        'seo_title' => 'string',
        'seo_description' => 'string',
        'seo_keywords' => 'string'
    ];
    
    protected $_messages = [
        'name.required' => 'A page name is required',
    ];
    
    /**
     * Displays a list of the current pages
     * @return string
     */
    public function listPages()
    {
        $page = new PageModel;
        $routingData = new \App\Http\Resources\DigitalMarmalade\Model\ListerRouting($page);
        $pages = $page->sortable()->searchable()->paginate(15);
        return view($this->_listTemplate, ['pages' => $pages, 'routingData' => $routingData]);
    }
    
    public function createView()
    {
        $page = $this->getExistingOrNewSessionPage();
        return view($this->_createTemplate, ['page' => $page]);
    }
    
    /**
     * Creates a new page and redirects the user to the edit page
     * @return Response
     */
    public function create(Request $request)
    {
        $page = $this->getExistingOrNewSessionPage();
        try {
            $this->updatePageItems($page);
        } catch (PageUpdateValidationException $ex) {
            return redirect()->back()->withInput()->withErrors($ex->getErrors());
        }
        
        $this->_validateCreateOrUpdateRequest($request);
        $page->setName($request->get('name'));
        $page->transfer($this->getPageLoader(), $this->getItemLoader());
        
        $seo = Seo::create($this->_getSeoName($page->getName()));
        $page->setSeo($seo->getId());
        
        $page->create();
        return redirect(route('msuitePageEdit', ['pageId' => $page->getId()]), 301);
    }
    
    /**
     * Displays a preview of the specified page
     * @param integer $pageId
     * @return string
     */
    public function preview($pageId)
    {
        return view('vendor.digitalmarmalade.MarmaladeSuite.Pages.preview', ['page' => $this->_getPageBuilder()->getPage($pageId)]);
    }
    
    /**
     * Returns a file or image for a specific item which has a download ability
     * @param integer $itemId
     * @param string $settingName
     * @return mixed
     * @throws \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Exception\ItemSettingIsNotDownloadable
     */
    public function download($itemId, $settingName)
    {
        $itemLoader = new \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\ItemLoader;
        $item = $itemLoader->load($itemId);
        if (!$item instanceof \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\DownloadItem) {
            throw new \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Exception\ItemSettingIsNotDownloadable('Cannot download ' . $settingName . ' item is not instance of Downloaditem');
        }
        return $item->downloadFile($settingName);
    }
    
    /**
     * Displays the edit interface for the specified page
     * @param integer $pageId
     * @return string
     */
    public function edit($pageId)
    {
        $page = $this->_getPageBuilder()->getPage($pageId);
        return view($this->_editTemplate, [
            'page' => $page,
            'seo' => Seo::load($page->getSeo())
        ]);
    }
    
    /**
     * Updates the specified pageId using the data supplied in the request then redirects the user to the edit interface
     * @param Request $request
     * @param integer $pageId
     * @return Response
     */
    public function update(Request $request, $pageId)
    {
        $page = $this->_getPageBuilder()->getPage($pageId);
        try {
            $this->updatePageItems($page);
        } catch (PageUpdateValidationException $ex) {
            return redirect()->back()->withInput()->withErrors($ex->getErrors());
        }
        
        $this->_validateCreateOrUpdateRequest($request);
        $page->setName($request->get('name'));
        $page->save();
        $seo = Seo::load($page->getSeo());
        $seo->setName($this->_getSeoName($page->getName()))
            ->setTitle(Input::get('seo_title'))
            ->setDescription(Input::get('seo_description'))
            ->setKeywords(Input::get('seo_keywords'))
            ->save();
        
        return redirect(route('msuitePageEdit', ['pageId' => $pageId]))->with('success', 'The page has been updated successfully');
    }
    
    /**
     * Deletes the specified item for the specified page then redirects the user to the edit page interface
     * @param integer $pageId
     * @param integer $itemId
     * @return Response
     */
    public function deleteItem($pageId, $itemId)
    {
        try {
            $page = $this->_getPageBuilder()->getPage($pageId);
            $page->removeItem($itemId);
            $page->save();

            return [
                'success' => true
            ];
            
        } catch (Exception $ex) {
            return [
                'success' => false
            ];
        }
    }
    
    /**
     * Adds a new item using the index of the item in the config file as an idenfitier to the specified page and redirects the user to the
     * edit page interface
     * @param integer $pageId
     * @param integer $itemConfigId
     * @return Response
     */
    public function addItem($pageId, $itemConfigId)
    {
        try {
            $page = $this->_getPageBuilder()->getPage($pageId);
            $item = $this->_getNewItemInstanceFromItemConfigId($itemConfigId, ItemLoader::class);
            
            $item->create();
            
            $page->addItem($item);
            $page->save();
            
            return [
                'success' => true,
                'renderEdit' => (string)$item->renderEdit(),
                'render' => (string)$item->render(),
                'deleteUrl' => route('msuiteDeletePageItem', ['pageId' => $page->getId(), 'itemId' => $item->getId()])
            ];
            
        } catch (ErrorException $e) {
            return [
                'success' => false
            ];
        }
    }
    
    public function addSessionItem($itemConfigId)
    {
        try {
            $page = $this->getExistingOrNewSessionPage();
            $item = $this->_getNewItemInstanceFromItemConfigId($itemConfigId, SessionItemLoader::class);
            
            $item->create();
            
            $page->addItem($item);
            $page->save();
            
            return [
                'success' => true,
                'renderEdit' => (string)$item->renderEdit(),
                'render' => (string)$item->render(),
                'deleteUrl' => route('msuitePageCreateViewDeleteSessionItem', ['sessionPageId' => $page->getId(), 'itemId' => $item->getId()])
            ];
            
        } catch (ErrorException $e) {
            return [
                'success' => false
            ];
        }
        
    }
    
    public function deleteSessionItem($itemId)
    {
        try {
            $page = $this->getExistingOrNewSessionPage();
            $page->removeItem($itemId);
            $page->save();
            
            
            return [
                'success' => true,
            ];
            
        } catch (ErrorException $e) {
            return [
                'success' => false
            ];
        }
        
    }
    
    /**
     * Deletes a page and redirects the user to the page list interface
     * @param integer $pageId
     * @return Response
     */
    public function deletePage($pageId)
    {
        $pageLoader = new PageLoader;
        $pageLoader->delete($pageId);
        return redirect(route('msuitePages'))->with('success', 'The page was successfully deleted');
    }
    
    protected function _validateCreateOrUpdateRequest(Request $request)
    {
        $this->validate($request, $this->_rules, $this->_messages);
    }
    
    protected function getPageBuilder()
    {
        return new PageBuilder(Page::class, $this->getPageLoader());
    }
    
    protected function getPageLoader()
    {
        return new PageLoader();
    }
    
    protected function getItemLoader()
    {
        return new ItemLoader();
    }
    
    protected function _getSeoName($title)
    {
        return $this->_seoPrefix . $title;
    }

}
