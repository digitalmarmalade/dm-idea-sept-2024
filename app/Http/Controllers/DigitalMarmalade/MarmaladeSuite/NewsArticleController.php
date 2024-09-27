<?php

namespace App\Http\Controllers\DigitalMarmalade\MarmaladeSuite;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\NewsArticle;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\News\ArticleStatuses;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Seo\Seo;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\PageBuilderHelper;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\News\ArticlePageLoader;


/**
 * Controller for the news article pages
 */
class NewsArticleController extends MarmaladeSuiteControllerAbstract
{
    use PageBuilderHelper;
    
    protected $_editTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.News.edit';
    protected $_previewTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.News.preview';
    protected $_defaultData = [
        'title' => 'New Article',
        'content' => null,
        'author' => 'Admin',
        'status' => 0
    ];
    protected $_seoPrefix = 'News Article - ';
    
    /**
     * Creates a new news article and redirects the user to the edit route
     * @return Response
     */
    public function create()
    {
        $article = \App\NewsArticle::create($this->_defaultData);
        $seo = Seo::create($this->_getSeoName($this->_defaultData['title']));
        $article->seo = $seo->getId();
        $article->save();
        
        $page = $this->_getPageBuilder(new ArticlePageLoader)->getNewPage(new \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\ItemLoader);
        $page->setId($article->id);
        $richTextItem = new \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\RichTextItem(
            new \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\ItemLoader,
            new \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\Settings\RichTextItemSettings
        );
        $richTextItem->create();
        $page->addItem($richTextItem);
        $page->save();
        
        return redirect(route('msuiteNewsArticleEdit', ['articleId' => $article->id]));
    }
    
    /**
     * Duplicates the article supplied in the route and redirects the user to the edit route
     * @param NewsArticle $article
     * @return Response
     */
    public function duplicate(NewsArticle $article)
    {
        $duplicateArticle = $article->replicate([
            $article->getKeyName(),
            $article->getCreatedAtColumn(),
            $article->getUpdatedAtColumn(),
            'title_translation'
        ]);
        $duplicateArticle->status = 0;
        
        $seoId = Seo::create($this->_getSeoName($duplicateArticle->title))->getId();
        $duplicateArticle->seo = $seoId;
        
        $duplicateArticle->save();
        return redirect(route('msuiteNewsArticleEdit', ['articleId' => $duplicateArticle->id]))->with('success', 'Your article has been duplicated successfully.');
    }
    
    /**
     * Displays the edit news article interface 
     * @param NewsArticle $article
     * @return string
     */
    public function edit(NewsArticle $article)
    {
        $page = $this->_getPageBuilder(new ArticlePageLoader)->getPage($article->id);
        return view($this->_editTemplate, [
            'article' => $article,
            'page' => $page,
            'articleStatuses' => new ArticleStatuses,
            'seo' => Seo::load($article->seo)
        ]);
    }
    
    public function addItem(Request $request, NewsArticle $article, $itemConfigId)
    {
        $this->_validateItemConfigIdAllowed($itemConfigId);
        $itemConfig = $this->_getItemData($itemConfigId, 'The requested article section does not exist');
        
        $page = $this->_getPageBuilder(new ArticlePageLoader)->getPage($article->id);
        $item = $this->_getNewItemInstance($itemConfig['class'], $itemConfig['settingsclass']);
        $item->create();
        $page->additem($item);
        $page->save();
        
        return redirect(route('msuiteNewsArticleEdit', ['articleId' => $article->id]))->with('success', 'The new section has been added');
    }
    
    /**
     * Displays the news article preview page
     * @param NewsArticle $article
     * @return string
     */
    public function preview(NewsArticle $article)
    {
        return view($this->_previewTemplate, ['article' => $article]);
    }
    
    /**
     * Updates a news article and redirects the user to the edit interface
     * @param Request $request
     * @param NewsArticle $article
     * @return Response
     */
    public function update(Request $request, NewsArticle $article)
    {
        $validatedInput = $this->_validateUpdate($request);
                
        $article->update($validatedInput);
        
        $seo = Seo::load($article->seo);
        $seo->setName($this->_getSeoName($article->title))
            ->setTitle($request->get('seo_title'))
            ->setDescription($request->get('seo_description'))
            ->setKeywords($request->get('seo_keywords'))
            ->save();
        
        
        $page = $this->_getPageBuilder(new ArticlePageLoader)->getPage($article->id);
        $allInput = Input::all();
        $settings = collect(isset($allInput['settings']) ? $allInput['settings'] : []);
        
        try {
            foreach ($page->getItems() as $item) {
                if (isset($settings[$item->getId()])) {
                    $item->update(collect($settings[$item->getId()]));
                    $item->save();
                }
            }
        } catch (\Illuminate\Contracts\Validation\ValidationException $ex) {
            return $ex->getResponse();
        }
        $page->reorderItems(array_keys($settings->toArray()));
        $page->save();
        
        
        return redirect(route('msuiteNewsArticleEdit', ['articleId' => $article->id]))->with('success', 'The article has been updated successfully.');
    }
    
    /**
     * Deletes a news article and redirects the user to the news article list page
     * @param NewsArticle $article
     * @return Response
     */
    public function delete(NewsArticle $article)
    {
        $article->delete();
        $seo = Seo::delete($article->seo);
        return redirect(route('msuiteNews'))->with('success', 'The article has been deleted successfully.');
    }
    
    protected function _validateUpdate($request) {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'settings' => 'array',
            'status' => 'required|integer|in:' . implode(',', array_keys(ArticleStatuses::get())),
            'seo_title' => 'string',
            'seo_description' => 'string',
            'seo_keywords' => 'string'
        ]);
        $validatedInput = Input::all();
        return $validatedInput;
    }
    
    protected function _getSeoName($title)
    {
        return $this->_seoPrefix . $title;
    }
    
    protected function _validateItemConfigIdAllowed($itemConfigId)
    {
        if (!in_array($itemConfigId, config('msuite.news.allowed_pagebuilder_items'))) {
            redirect()->back()->with('error', 'The specified article section is not allowed');
        }
    }
    
}
