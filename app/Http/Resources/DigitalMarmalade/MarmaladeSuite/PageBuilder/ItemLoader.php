<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder;

/**
 * @author tom
 */
class ItemLoader extends \DigitalMarmalade\PageBuilder\LoaderAbstract implements \DigitalMarmalade\PageBuilder\ItemLoaderInterface
{
    public function load($id)
    {
        $model = \App\PagesItem::findOrFail($id);
        $item = unserialize($model->content);
        $this->setIdOnDeserializedObject($item, $id);
        return $item;
    }

    public function save(\DigitalMarmalade\PageBuilder\ItemInterface $item, $id)
    {
        $model = \App\PagesItem::findOrFail($id);
        $model->content = serialize($item);
        $model->save();
        $this->setIdOnDeserializedObject($item, $model->id);
        return $model->id;
    }

    public function create(\DigitalMarmalade\PageBuilder\ItemInterface $item)
    {
        $model = new \App\PagesItem();
        $model->content = serialize($item);
        $model->save();
        $this->setIdOnDeserializedObject($item, $model->id);
        return $model->id;
    }

}
