<?php

return [
    
    'name' => 'Marmalade Suite',
    
    'version' => '3.1',
    
    'multilingual' => false,
    
    'modules' => [
        //App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Module\PageModule::class,
        //App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Module\NewsModule::class,
        //App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Module\UserModule::class,
        //App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Module\TranslationModule::class,
        //App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Module\ShopModule::class,
    ],
    
    'navigation' => [
        [
            'name' => 'Dashboard',
            'route' => 'msuiteHome',
            'class' => 'nav-dashboard',
            'items' => []
        ],
        [
            'name' => 'Page Builder',
            'route' => 'msuitePages',
            'class' => 'nav-site-content',
            'items' => [],
        ],
        [
            'name' => 'News',
            'route' => 'msuiteNews',
            'class' => 'nav-site-content',
            'items' => [],
        ],
        [
            'name' => 'Translations',
            'class' => 'nav-translations',
            'route' => 'msuiteTranslations',
            'items' => []
        ],
        [
            'name' => 'Users',
            'class' => 'nav-users',
            'route' => 'msuiteUsers',
            'items' => []
        ]
    ],
    
    'pagebuilder' => [
        'items' => [
            'faq' => [
                'name' => 'FAQs',
                'class' => '\App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\FaqItem',
                'settingsclass' => '\App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\Settings\FaqItemSettings',
                'previewimage' => 'vendor/digitalmarmalade/img/pagebuilder/widget-icons/blank.gif'
            ],
            'snippet' => [
                'name' => 'Snippet',
                'class' => '\App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\SnippetItem',
                'settingsclass' => '\App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\Settings\SnippetItemSettings',
                'previewimage' => 'vendor/digitalmarmalade/img/pagebuilder/widget-icons/blank.gif'
            ],
            'richtext' => [
                'name' => 'Rich Text',
                'class' => '\App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\RichTextItem',
                'settingsclass' => '\App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\Settings\RichTextItemSettings',
                'previewimage' => 'vendor/digitalmarmalade/img/pagebuilder/widget-icons/widget-text.gif'
            ],
            'podimages' => [
                'name' => 'Pod Images',
                'class' => '\App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\PodImagesItem',
                'settingsclass' => '\App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\Settings\PodImagesItemSettings',
                'previewimage' => 'vendor/digitalmarmalade/img/pagebuilder/widget-icons/blank.gif'
            ],
            /*'newsarticle' => [
                'name' => 'News Article',
                'class' => '\App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\NewsArticleItem',
                'settingsclass' => '\App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\Settings\NewsArticleItemSettings',
                'previewimage' => 'vendor/digitalmarmalade/img/pagebuilder/widget-icons/blank.gif'
            ]*/
        ],
        
        'translator' => false
        
    ]
    
    
];