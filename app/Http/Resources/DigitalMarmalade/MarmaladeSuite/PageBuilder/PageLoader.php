<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder;

class PageLoader extends \DigitalMarmalade\PageBuilder\LoaderAbstract implements \DigitalMarmalade\PageBuilder\PageLoaderInterface
{
    
    public function load($id)
    {
        $model = \App\Page::findOrFail($id);
        $page = unserialize($model->content);
        $this->setIdOnDeserializedObject($page, $id);
        return $page;
    }

    public function save(\DigitalMarmalade\PageBuilder\PageInterface $page, $id)
    {
        $model = \App\Page::findOrFail($id);
        $this->_updateModelInstance($model, $page);
        $model->save();
        return $model->id;
    }

    public function create(\DigitalMarmalade\PageBuilder\PageInterface $page)
    {
        $model = new \App\Page();
        $this->_updateModelInstance($model, $page);
        $model->save();
        $this->setIdOnDeserializedObject($page, $model->id);
        return $model->id;
    }
    
    public function delete($id)
    {
        $model = \App\Page::findOrFail($id);
        return $model->delete();
    }
    
    protected function _updateModelInstance(\App\Page $model, \DigitalMarmalade\PageBuilder\PageInterface $page) {
        $model->name = $page->getName();
        $model->seo = $page->getSeo();
        $model->content = serialize($page);
        return $model;
    }
    
}
