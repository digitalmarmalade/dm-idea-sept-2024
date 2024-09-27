<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder;

use Illuminate\Support\Facades\Session;
use ErrorException;

class SessionPageLoader extends \DigitalMarmalade\PageBuilder\LoaderAbstract implements \DigitalMarmalade\PageBuilder\PageLoaderInterface
{
    protected $_sessionVariable = 'SessionPageBuilder.pages';
    
    public function load($id)
    {
        $serialized = Session::get($this->_sessionVariable . '.' . $id);
        if ($serialized === null) {
            throw new ErrorException('Cannot find ' . $id . ' in ' . static::class);
        }
        $page = unserialize($serialized);
        $this->setIdOnDeserializedObject($page, $id);
        return $page;
    }

    public function save(\DigitalMarmalade\PageBuilder\PageInterface $page, $id)
    {
        Session::put($this->_sessionVariable . '.' . $id, serialize($page));
        return $id;
    }

    public function create(\DigitalMarmalade\PageBuilder\PageInterface $page)
    {
        Session::push($this->_sessionVariable, serialize($page));
        $id = count(Session::get($this->_sessionVariable)) - 1;
        $this->setIdOnDeserializedObject($page, $id);
        return $id;
    }
        
}
