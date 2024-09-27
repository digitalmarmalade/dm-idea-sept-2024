<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\Settings;

use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\TranslationSettingHelper;

/**
 * @author tom
 */
class FaqItemSettings extends \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\ItemSettings
{
    
    use TranslationSettingHelper;
    
    protected $_rules = [
        'items' => 'required|array',
        'additem' => 'boolean',
        'deleteitem' => 'integer'
    ];
    
    protected $_itemRules = [
        'question' => 'required|string|min:1',
        'answer' => 'required|string|min:1'
    ];
    
    protected $_settings = [
        'items' => [
            [
                'question' => 'Default Question',
                'answer' => 'Default Answer'
            ]
        ]
    ];
    
    public function setFromArray($items) {
        $this->_validate(['items' => $items], $this->_getValidationRules());
        
        foreach ($items as $item) {
            $this->_validate($item, $this->_itemRules);
        }
        $this->set('items', $items);
    }
    
    public function addItem($question = 'New Question?', $answer = 'New Answer')
    {
        $questions = $this->get('items');
        $questions[] = [
            'question' => $question,
            'answer' => $answer
        ];
        $this->set('items', $questions);
    }
    
    public function deleteItem($itemId) {
        $questions = $this->get('items');
        if (isset($questions[$itemId])) {
            unset($questions[$itemId]);
        }
        $this->set('items', $questions);
    }

}