<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\News;

class ArticlePageLoader extends \DigitalMarmalade\PageBuilder\LoaderAbstract implements \DigitalMarmalade\PageBuilder\PageLoaderInterface
{
    
    public function load($id)
    {
        $model = \App\NewsArticle::findOrFail($id);
        $page = unserialize($model->content);
        $this->setIdOnDeserializedObject($page, $id);
        return $page;
    }

    public function save(\DigitalMarmalade\PageBuilder\PageInterface $page, $id)
    {
        $model = \App\NewsArticle::findOrFail($id);
        $this->_updateModelInstance($model, $page);
        $model->save();
        return $model->id;
    }

    /**
     * NewsArticles are created and controlled by the controller not by this page loader
     * @param \DigitalMarm\PageBuilder\PageInterface $page
     * @return boolean
     */
    public function create(\DigitalMarmalade\PageBuilder\PageInterface $page)
    {
        return false;
    }
    
    public function delete($id)
    {
        $model = \App\Page::findOrFail($id);
        return $model->delete();
    }
    
    private function _updateModelInstance(\App\NewsArticle $model, \DigitalMarmalade\PageBuilder\PageInterface $page) {
        $model->content = serialize($page);
        return $model;
    }
    
}
