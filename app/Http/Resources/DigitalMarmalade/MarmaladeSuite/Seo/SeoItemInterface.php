<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Seo;

interface SeoItemInterface
{
    
    /**
     * A short hand method for setTitle, setKeywords and setDescription
     * @param string $title
     * @param string|array $keywords
     * @param string $description
     */
    public function set($title = null, $keywords = null, $description = null);
    
    /**
     * Get the title of the SEO Item
     * @return string
     */
    public function getTitle();
    
    /**
     * Set the title of the SEO Item
     * @param string $title
     * @return SeoItemInterface
     */
    public function setTitle($title);
    
    /**
     * Get the description of the SEO Item
     * @return string
     */
    public function getDescription();
    
    /**
     * Set the description of the SEO Item
     * @param string $description
     * @return SeoItemInterface
     */
    public function setDescription($description);
    
    /**
     * Get the keywords of the seo item as a comma separated list
     * @return string
     */
    public function getKeywords();
    
    /**
     * Set the keywords of the seo item as a commar separated list or array
     * @param string|array $keywords
     * @return SeoItemInterface
     */
    public function setKeywords($keywords);
    
    /**
     * Append some extra string to the page title
     * @param type $appendage
     * @return SeoItemInterface
     */
    public function appendToTitle($appendage);

    /**
     * Preppend some extra string to the page title
     * @param type $prependage
     * @return SeoItemInterface
     */
    public function preppendToTitle($prependage);
    
}