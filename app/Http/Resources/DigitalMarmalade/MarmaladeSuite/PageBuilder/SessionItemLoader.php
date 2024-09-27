<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder;

use Illuminate\Support\Facades\Session;
use ErrorException;

class SessionItemLoader extends \DigitalMarmalade\PageBuilder\LoaderAbstract implements \DigitalMarmalade\PageBuilder\ItemLoaderInterface
{
    
    protected $_sessionVariable = 'SessionPageBuilder.items';
    
    public function load($id)
    {
        $serialized = Session::get($this->_sessionVariable . '.' . $id);
        if ($serialized === null) {
            echo ('Cannot find ' . $id . ' in ' . static::class);
            dd(debug_backtrace());
            dd(Session::all());
            throw new ErrorException('Cannot find ' . $id . ' in ' . static::class);
        }
        $item = unserialize($serialized);
        $this->setIdOnDeserializedObject($item, $id);
        return $item;
    }

    public function save(\DigitalMarmalade\PageBuilder\ItemInterface $item, $id)
    {
        Session::put($this->_sessionVariable . '.' . $id, serialize($item));
        return $id;
    }

    public function create(\DigitalMarmalade\PageBuilder\ItemInterface $item)
    {
        Session::push($this->_sessionVariable, serialize($item));
        $id = count(Session::get($this->_sessionVariable)) - 1;
        $this->setIdOnDeserializedObject($item, $id);
        return $id;
    }

}
