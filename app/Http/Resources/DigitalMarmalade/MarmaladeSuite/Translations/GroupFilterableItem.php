<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Translations;

use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Translations\Groups;
use App\Http\Resources\DigitalMarmalade\Model\FilterableItemAbstract;

class GroupFilterableItem extends FilterableItemAbstract
{
    public function getAvailable()
    {
        $groups = Groups::getGroups();
        $available = ['' => 'All Sections'];
        
        foreach ($groups as $group) {
            $available[$group] = Groups::getDisplayName($group);
        }
        
        return $available;
    }

    public function applyFilter(\Illuminate\Database\Eloquent\Builder $query)
    {
        if (strlen($this->getValue())) {
            $query->where('translator_translations.group', $this->getValue());
        }
    }

    public function getName()
    {
        return 'group';
    }
    
    public function setValue($value)
    {
        parent::setValue($value);
    }

}
