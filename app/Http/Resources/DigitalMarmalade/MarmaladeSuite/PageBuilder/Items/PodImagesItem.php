<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\ItemReusableImageUploadHandlerTrait;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Image\ReusableImage;

/**
 * @author tom
 */
class PodImagesItem extends \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\DownloadItem
{
    
    use ItemReusableImageUploadHandlerTrait;
    
    protected $_viewTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.Pages.Items.View.podImages';
    protected $_editTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.Pages.Items.Edit.podImages';
    
    protected $_allowDownload = [
        'imagefilepath'
    ];
    
    public function render()
    {
        return view($this->_viewTemplate, ['item' => $this, 'settings' => $this->getSettings()->get()]);
    }

    public function renderEdit()
    {
        return view($this->_editTemplate, [
            'item' => $this,
            'settings' => $this->getSettings()->get(),
            'width' => $this->_getAspectRatio()['width'],
            'height' => $this->_getAspectRatio()['height'],
            'aspectRatio' => $this->_getAspectRatio()['width'] / $this->_getAspectRatio()['height'],
            'reusableImages' => ReusableImage::getByWidthAndHeight($this->_getAspectRatio()['width'], $this->_getAspectRatio()['height'])
        ]);
    }
    
    private function _getAspectRatio()
    {
        return ['width' => 570, 'height' => 260];
    }

    public function update(Collection $data)
    {
        if (intval($data->get('number', $this->getSettings()->get('number'))) !== $this->getSettings()->get('number')) {
            $this->getSettings()->setPods($data->get('number'));
        } else {
            $pods = $this->_handlePodImages($data->get('pods'));
            $this->_updatePods($pods);
        }
    }
    
    public function downloadFile($settingName)
    {
        $this->_validateDownloadSettingName($settingName);
        
        $podId = Input::get('podId', null);
        if ($podId === null) {
            throw new Exception\ItemSettingIsNotDownloadable($settingName . ' is not allowed to be downloaded with pod id: ' . $podId);
        }
        
        $pods = $this->getSettings()->get('pods');
        return $this->outputCachedImage(base_path($pods[$podId][$settingName]));
    }
    
    private function _handlePodImages($pods)
    {
        foreach ($pods as $podId => &$pod) {
            $existingPods = $this->getSettings()->get('pods');
            $podCollection = new Collection($pod);
            if (($podCollection->get('imagefile', null) !== null || strlen($podCollection->get('imagereuse', ''))) && isset($existingPods[$podId])) {
                
                $fileSettings = $this->_handleReusableImageFileUpload(
                    $podCollection->get('imagefile', null),
                    $podCollection->get('imagefile_x', null),
                    $podCollection->get('imagefile_y', null),
                    $podCollection->get('imagefile_width', null),
                    $podCollection->get('imagefile_height', null),
                    $this->_getAspectRatio()['width'],
                    $this->_getAspectRatio()['height'],
                    $podCollection->get('imagereuse', null),
                    'imagefilepath',
                    'imagefilename',
                    true
                );
                
                unset($pod['imagefile']);
                
                if ($fileSettings === null) {
                    $pod = array_merge($pod, [
                        'imagefilepath' => $existingPods[$podId]['imagefilepath'],
                        'imagefilename' => $existingPods[$podId]['imagefilename'],
                    ]);
                } else {
                    $fileSettings['imagefilepath'] = relative_path($fileSettings['imagefilepath']);
                    $pod = array_merge($pod, $fileSettings);
                }
            } else {
                $pod = array_merge($pod, [
                    'imagefilepath' => $existingPods[$podId]['imagefilepath'],
                    'imagefilename' => $existingPods[$podId]['imagefilename'],
                ]);
            }
        }
        return $pods;
    }
    
    private function _updatePods($pods) {
        $this->getSettings()->setFromArray($pods);
    }

}