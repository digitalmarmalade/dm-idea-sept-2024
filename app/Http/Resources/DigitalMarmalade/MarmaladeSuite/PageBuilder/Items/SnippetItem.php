<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items;

use \Illuminate\Support\Collection;

/**
 * @author tom
 */
class SnippetItem extends \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\DownloadItem
{
    protected $_viewTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.Pages.Items.View.snippet';
    protected $_editTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.Pages.Items.Edit.snippet';
    
    protected $_allowDownload = [
        'downloadfilepath'
    ];
    
    public function render()
    {
        return view($this->_viewTemplate, ['item' => $this, 'settings' => $this->getSettings()->get()]);
    }

    public function renderEdit()
    {
        return view($this->_editTemplate, ['item' => $this, 'settings' => $this->getSettings()->get()]);
    }

    public function update(Collection $data)
    {
        $settings = $this->getSettings();
        $settings->set('title', $data->get('title', null));
        $settings->set('description', $data->get('description', null));
        $settings->set('type', $data->get('type', null));
        $settings->set('link', $data->get('link', null));
        $settings->set('linknewwindow', $data->get('linknewwindow', false));
        $settings->set('linktext', $data->get('linktext', false));
        $settings->set('email', $data->get('email', null));
        $settings->set('emailtext', $data->get('emailtext', null));
        
        if ($data->get('downloadfile', null) !== null) {
            $this->_handleFileUpload($data->get('downloadfile'), 'downloadfilepath', 'downloadfilename');
        }
        
        $settings->set('downloadbuttontext', $data->get('downloadbuttontext', false));
        
        if ($settings->get('type') !== 'download') {
            $settings->set('downloadfilepath', null);
            $settings->set('downloadfilename', null);
        }
        
    }

}