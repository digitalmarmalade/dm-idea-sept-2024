<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\Settings;

use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\TranslationSettingHelper;

/**
 * @author tom
 */
class SnippetItemSettings extends \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\ItemSettings
{
    
    use TranslationSettingHelper;
    
    protected $_rules = [
        'title' => 'required|string|min:1',
        'description' => 'required|string|min:1',
        'type' => 'required|in:none,link,download,email',
        'link' => 'required_if:type,link|url',
        'linknewwindow' => 'boolean',
        'linktext' => 'string|max:11',
        'downloadfilepath' => 'required_if:type,download|string',
        'downloadfilename' => 'required_if:type,download|string',
        'downloadbuttontext' => 'required_if:type,download:max:15',
        'email' => 'required_if:type,email|email',
        'emailtext' => 'required_if:type,email|string|max:15',
    ];
    
    protected $_messages = [
        'title.required' => 'The title field is required for all snippet widgets',
        'description.required' => 'The description field is required for all snippet widgets',
        'link.required_if' => 'The link field is required when the widget type is link for all snippet widgets',
        'linktext.max' => 'The link text must be a maximum of 15 characters on all snippet widgets',
        'downloadbuttontext.required_if' => 'The download button text is required when the widget type is download for all snippet widgets',
        'downloadbuttontext.max' => 'The download button text must be a maximum of 15 characters on all snippet widgets',
        'email.required_if' => 'The email address is required when the widget type is email for all snippet widgets',
        'emailtext.required_if' => 'The email address label is required when the widget type is email for all snippet widgets',
        'emailtext.max' => 'The email address label is required when the widget type is email for all snippet widgets',
    ];
    
    protected $_settings = [
        'title' => 'Default Title',
        'description' => 'Default Description',
        'type' => 'none',
        'link' => null,
        'linknewwindow' => false,
        'linktext' => null,
        'downloadfilepath' => null,
        'downloadfilename' => null,
        'downloadbuttontext' => null,
        'email' => null,
        'emailtext' => null
    ];

}