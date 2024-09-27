<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Seo;

use App\Seos;
use Collective\Html\FormFacade;

/**
 * Interface for manipulating an individual SEO item
 */
class SeoItem implements SeoItemInterface
{
    
    private $_seo;
    
    public function __construct($id)
    {
        $this->_seo = Seos::findOrFail($id);
    }
    
    public function set($title = null, $keywords = null, $description = null)
    {
        return $this->setTitle($title)->setKeywords($keywords)->setDescription($description);
    }
    
    /**
     * Get the ID of the SEO Item
     * @return integer
     */
    public function getId()
    {
        return $this->_seo->id;
    }
    
    /**
     * Get the name of the SEO Item (do not confuse this with the title)
     * @return string
     */
    public function getName()
    {
        return $this->_seo->name;
    }
    
    /**
     * Set the name of the SEO Item (do not confuse this with the title)
     * @param string $name
     * @return \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Seo\SeoItem
     */
    public function setName($name)
    {
        $this->_seo->name = $name;
        return $this;
    }
    
    /**
     * Get the title of the SEO Item
     * @return string
     */
    public function getTitle()
    {
        return $this->_seo->title;
    }
    
    /**
     * Set the title of the SEO Item
     * @param string $title
     * @return \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Seo\SeoItem
     */
    public function setTitle($title)
    {
        $this->_seo->title = $title;
        return $this;
    }
    
    /**
     * Get the description of the SEO Item
     * @return string
     */
    public function getDescription()
    {
        return $this->_seo->description;
    }
    
    /**
     * Set the description of the SEO Item
     * @param string $description
     * @return \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Seo\SeoItem
     */
    public function setDescription($description)
    {
        $this->_seo->description = $description;
        return $this;
    }
    
    /**
     * Get the keywords of the seo item as a comma separated list
     * @return string
     */
    public function getKeywords()
    {
        return $this->_seo->keywords;
    }
    
    /**
     * Set the keywords of the seo item as a commar separated list or array
     * @param string|array $keywords
     * @return \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Seo\SeoItem
     */
    public function setKeywords($keywords)
    {
        if (is_array($keywords)) {
            $keywords = implode(',', $keywords);
        }
        $this->_seo->keywords = $keywords;
        return $this;
    }
    
    /**
     * Outputs the title tag and the description/keywords meta tags as HTML
     * @return string
     */
    public function header()
    {
        return view('vendor.digitalmarmalade.MarmaladeSuite.Seo.header', [
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'keywords' => $this->getKeywords()
        ]);
    }
    
    /**
     * Append some extra string to the page title
     * @param type $appendage
     * @return \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Seo\SeoItem
     */
    public function appendToTitle($appendage)
    {
        $this->_seo->title = $this->_seo->title . ' - ' . $appendage;
        return $this;
    }
    
    /**
     * Preppend some extra string to the page title
     * @param type $prependage
     * @return \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Seo\SeoItem
     */
    public function preppendToTitle($prependage)
    {
        $this->_seo->title = $prependage . ' - ' . $this->_seo->title;
        return $this;
    }
    
    /**
     * Save the SEO item in the database
     */
    public function save()
    {
        $this->_seo->save();
    }
}