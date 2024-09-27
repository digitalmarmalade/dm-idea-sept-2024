<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Overlay;

class OverlayItem
{
    protected $_containerTemplate;
    
    private $_modal = true;
        
    private $_name = null;
    private $_containerClass = null;
    private $_height = 510;
    private $_width = 440;
    private $_template;
    
    private $_id;
    
    public function __construct()
    {
        $this->_id = $this->_generateOverlayId();
        $this->_containerTemplate = config('msuite.overlay.default_container_template');
    }
    
    public function getId()
    {
        return $this->_id;
    }
        
    /**
     * Outputs the specified template if it has not already been rendered (returns an empty string if the template has already been rendered
     * @param string $template
     * @param array $userData
     * @return string
     */
    public function renderOnce($userData = [])
    {
        return $this->render($userData, false);
    }
    
    /**
     * Outputs the specified template forcing it to be rendered multiple times
     * @param string $template
     * @param array $userData
     * @return string
     */
    public function renderMultiple($userData = [])
    {
        return $this->render($userData, true);
    }
            
    /**
     * Outputs the specifid template, if the template has already been output then it will return an empty string unless $forceRender is true
     * @param string $template
     * @param array $userData
     * @param boolean $forceRender
     * @return string
     */
    public function render($userData = [], $forceRender = false)
    {
        if ($forceRender || !$this->_hasBeenRendered()) {
            $this->_addRendered();
            return view($this->_containerTemplate, $this->_getWrapperData($userData));
        } else {
            return '';
        }
    }
    
    public function setTemplate($template)
    {
        $this->_template = $template;
        return $this;
    }
    
    public function getTemplate()
    {
        return $this->_template;
    }
    
    /**
     * Sets a unique name for the overlay so that we can access it's ID using the name
     * @param type $name
     */
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }
    
    /**
     * Get the name defined by setName
     */
    public function getName()
    {
        return ($this->_name === null ? $this->getId() : $this->_name);
    }
    
    /**
     * Specifies the container template that will wrap the overlay templates
     * @param string $template
     * @return \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Overlay\Overlay
     */
    public function setContainerTemplate($template)
    {
        $this->_containerTemplate = $template;
        return $this;
    }
    
    /**
     * Sets the width of the overlay
     * @param integer $width
     * @return \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Overlay\Overlay
     */
    public function width($width)
    {
        $this->_width = intval($width);
        return $this;
    }
    
    /**
     * Sets the height of the overlay
     * @param type $height
     * @return \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Overlay\Overlay
     */
    public function height($height)
    {
        $this->_height = intval($height);
        return $this;
    }
    
    /**
     * Sets the class(es) that will be applied to the container element, multiple classes should be separated by spaces
     * @param string $class
     * @return \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Overlay\Overlay
     */
    public function containerClass($class)
    {
        $this->_containerClass = $class;
        return $this;
    }
    
    /**
     * Sets whether the overlay should be modal
     * Note that this does not have any affect where the container class has been overridden using containerClass
     * @param boolean $modal
     * @return \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Overlay\Overlay
     */
    public function setModal($modal)
    {
        $this->_containerClass = null;
        $this->_modal = ($modal ? true : false);
        return $this;
    }
    
    private function _hasBeenRendered()
    {
        return Overlay::hasBeenRendered($this);
    }
    
    private function _addRendered()
    {
        return Overlay::addRendered($this);
    }
    
    private function _getWrapperData($userData)
    {
        return [
            'containerId' => $this->getId(),
            'containerClass' => $this->_getContainerClass(),
            'containerHeight' => $this->_height,
            'containerMarginTop' => ($this->_height / 2) * -1,
            'containerWidth' => $this->_width,
            'containerMarginLeft' => ($this->_width / 2) * -1,
            'name' => $this->getName(),
            'userData' => $userData,
            'template' => $this->getTemplate()
        ];
    }
    
    private function _getContainerClass()
    {
        if ($this->_containerClass !== null) {
            return $this->_containerClass;
        } else {
            return $this->_getDefaultOverlayClass();
        }
    }
    
    
    private function _generateOverlayId()
    {
        return 'overlay' . intval(round(microtime(true))) . rand(0, 1000000000);
    }
    
    private function _getDefaultOverlayClass()
    {
        return config('msuite.overlay.default_wrapper_classes.' . ($this->_modal ? 'modal' : 'nonmodal'));
    }
    
}
