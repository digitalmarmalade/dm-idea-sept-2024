<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\Settings;

use Illuminate\Support\Collection;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\TranslationSettingHelper;

/**
 * @author tom
 */
class PodImagesItemSettings extends \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\ItemSettings
{
    use TranslationSettingHelper;
    
    protected $_rules = [
        'number' => 'integer|between:1,3',
        'pods' => 'required|array'
    ];
    
    protected $_messages = [
        'number.integer' => 'The number of pods must be a number on all pod image widgets',
        'number.between' => 'The number of pods must be between 1 and 3 on all pod image widgets',
        'pods.required' => 'At least 1 pod is required on all pod image widgets'
    ];
    
    protected $_podRules = [
        'title' => 'required|string|max:45',
        'description' => 'required|string',
        'imagefilepath' => 'string',
        'imagefilename' => 'string',
        'includelink' => 'boolean',
        'link' => 'required_if:includelink,1|url',
        'linknewwindow' => 'boolean',
    ];
    
    protected $_podMessages = [
        'title.required' => 'A title is required for all pods',
        'title.max' => 'The title must be a maximum of 45 characters for all pods',
        'description.required' => 'A description is required for all pods',
        'link' => 'A link is required in all pods where include a link has been selected'
    ];
    
    protected $_settings = [
        'number' => 1,
        'pods' => [
            [
                'title' => 'Pod 1',
                'description' => 'Pod Description',
                'imagefilepath' => null,
                'imagefilename' => null,
                'imagealt' => '',
                'includelink' => 0,
                'link' => null,
                'linknewwindow' => 0,
            ]
        ]
    ];
    
    public function setFromArray($pods) {
        $this->_validate(['pods' => $pods], $this->_getValidationRules(), $this->_getValidationMessages());
        
        $existingPods = $this->get('pods');
        
        foreach ($pods as $podId => $pod) {
            
            if (!isset($existingPods[$podId])) {
                continue;
            }
            
            $podCollection = new Collection($pod);
            
            $existingPods[$podId]['title'] = $podCollection->get('title', '');
            $existingPods[$podId]['description'] = $podCollection->get('description', '');
            $existingPods[$podId]['colour'] = $podCollection->get('colour', 'color-1');
            $existingPods[$podId]['link'] = $podCollection->get('link', 0);
            $existingPods[$podId]['includelink'] = $podCollection->get('includelink', 0);
            $existingPods[$podId]['linknewwindow'] = $podCollection->get('linknewwindow', 0);
            $existingPods[$podId]['imagefilepath'] = $podCollection->get('imagefilepath', null);
            $existingPods[$podId]['imagefilename'] = $podCollection->get('imagefilename', null);
            $existingPods[$podId]['imagealt'] = $podCollection->get('imagealt', null);
            $this->_validate($existingPods[$podId], $this->_podRules, $this->_podMessages);
        }
        $this->set('pods', $existingPods);
        //$this->orderArray('pods', array_keys($pods));
    }
    
    public function setPods($number)
    {
        $pods = $this->get('pods');
        $currentNumberPods = count($this->get('pods'));
        
        if ($currentNumberPods > $number) { //there's more pods than required
            while (count($pods) > $number) {
                array_pop($pods);
            }
        } elseif ($currentNumberPods < $number) { //there's not enough pods
            while (count($pods) < $number) {
                $newPod = $pods[0];
                $newPod['title'] = 'New Pod ' . (count($pods) + 1);
                array_push($pods, $newPod);
            }
        }
        
        $pods = $this->_removeAllImages($pods);

        $this->set('pods', $pods);
        $this->set('number', intval($number));
    }
    
    private function _removeAllImages($pods) {
        foreach ($pods as &$pod) {
            $pod['imagefilepath'] = null;
            $pod['imagefilename'] = null;
        }
        return $pods;
    }

}