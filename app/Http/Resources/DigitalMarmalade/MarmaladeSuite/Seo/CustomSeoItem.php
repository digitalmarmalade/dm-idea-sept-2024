<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Seo;

class CustomSeoItem implements SeoItemInterface
{
    private $title;
    private $keywords;
    private $description;
    
    public function set($title = null, $keywords = null, $description = null)
    {
        return $this->setTitle($title)->setKeywords($keywords)->setDescription($description);
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
    
    /**
     * Get the description of the SEO Item
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    
    public function getKeywords()
    {
        return $this->keywords;
    }
    
    public function setKeywords($keywords)
    {
        if (is_array($keywords)) {
            $keywords = implode(',', $keywords);
        }
        $this->keywords = $keywords;
        return $this;
    }
    
    public function appendToTitle($appendage)
    {
        $this->title = $this->title . ' - ' . $appendage;
        return $this;
    }
    
    public function preppendToTitle($prependage)
    {
        $this->title = $prependage . ' - ' . $this->title;
        return $this;
    }
    
}