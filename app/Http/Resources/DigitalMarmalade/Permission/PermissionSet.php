<?php

namespace DigitalMarmalade\Permission;

/**
 * MdfPermissionSet is an instance of a set of permissions that will have been created by MdfPermission
 * This class can be used to filter the permission set more specifically or return one particular item as an MdfPermissionItem
 *
 * @author Tom Lindley <tom@digitalmarmalade.co.uk>
 */
class PermissionSet {
    
    private $_setData = array();
    private $_setRef = array();
    private $_metaData = array();
    private $_metaRef = array();
    
    /**
     * 
     * @param mixed $set
     * @param mixed $meta
     * @return \digitalmarmalade\Mdf\Permission\MdfPermissionSet
     */
    public function __construct($set = array(), $meta = array()) {
        $this->_parseSet($set);
        $this->_parseMetaSet($meta);
        return $this;
    }
    
    public function getArray() {
        $setItems = array();
        foreach ($this->_setData as $setDataRow) {
            $setDataRow['meta'] = array();
            foreach ($this->_metaData as $metaDataRow) {
                if ($this->_metaInSet($setDataRow, $metaDataRow) === true) {
                    $setDataRow['meta'][] = $metaDataRow;
                }
            }
            $setItems[] = $setDataRow;
        }
        return $setItems;
    }
    
    /**
     * Filters the existing set by specifying a auth and module, this will only be useful if the module wasn't specified at the time the module was created.
     * This function will not normally be required but would be useful for listing the permissions for a particular user (on a particular module)
     * (i.e it's just an entire auth set probably passed from the cached data)
     * This should be used if you're looking for 1 persons 
     * @param type $auth
     * @param type $module
     * @return \digitalmarmalade\Mdf\Permission\MdfPermissionSet
     * @throws \Exception
     */
    public function getSet($auth, $module = -1, $permission = -1) {
        
        $filteredSet = $this->filter('authid', $auth);
        if ($module !== -1) {
            $filteredSet = $filteredSet->filter('mdfmodulename', $module);
        }
        if ($permission !== -1) {
            $filteredSet = $filteredSet->filter('mdfpermissionname', $permission);
        }
        
        return $filteredSet;
    }
    
    /**
     * Returns an MdfPermissionItem by specifying a particular permission for a particular module for a particular user
     * This should be used when you want to check a specific permission for a user
     * @param string $auth
     * @param string $module
     * @param string $permission
     * @return \digitalmarmalade\Mdf\Permission\MdfPermissionItem
     */
    public function getItem($auth, $module, $permission) {
        
        $filteredSet = $this->filter('authid', $auth)->filter('mdfmodulename', $module)->filter('mdfpermissionname', $permission);
        $filteredSetData = $filteredSet->getSetData();
        
        if ($filteredSet->length() > 1) {
            throw new \Exception('Unexpected number of results in MdfPermissionSet::getItem.');
        } elseif ($filteredSet->length() === 0) {
            return new PermissionItem(false);
        } else {
            return new PermissionItem($filteredSetData[0], $filteredSet->getMetaData());
        }
    }
    
    /**
     * Returns a permission set with all records for a certain role (from the current set
     * this is a shortcut to the filter function
     * @param type $role
     * @return \digitalmarmalade\Mdf\Permission\MdfPermissionSet
     */
    public function getByRole($role) {
        return $this->filter('mdfrolename', $role);
    }
    
    /**
     * Shortcut to filterByMetaValueArray with a single value
     * @param string|int $metaValue
     * @param bool $strict
     * @return \digitalmarmalade\Mdf\Permission\MdfPermissionSet
     */
    public function filterByMetaValue($metaValue, $strict = false) {
        return $this->filterByMetaValueArray(array($metaValue), $strict);
    }
    
    /**
     * This function will filter the set if it matches any of the values in the meta value array, strict is an optional paramater which specifies type matching on the values
     * @param array $metaValue
     * @param bool $strict
     * @return \digitalmarmalade\Mdf\Permission\MdfPermissionSet
     */
    public function filterByMetaValueArray(array $metaValue, $strict = false) {
        $filteredSetItems = array();
        $filteredMetaItems = array();
        foreach ($this->_setData as $setDataRow) {
            $metaCount = count($filteredMetaItems); //count the meta items to see if this setData item adds an additional meta items, if it does then we add the set data item as one of it's meta value matches the metaValue specified
            foreach ($this->_metaData as $metaDataRow) {
                if ( //if the value matches (either strict or non strict) 
                    $this->_metaInSet($setDataRow, $metaDataRow) === true && //this meta item is in this set item and
                    (in_array($metaDataRow['mdfpermissionuserdatavalue'], $metaValue, $strict))
                )
                {
                    $filteredMetaItems[] = $metaDataRow; //add the meta item
                }
            }
            if ( count($filteredMetaItems) > $metaCount ) { //if this setData item added meta data then this setdata item has meta data which matches the value
                $filteredSetItems[] = $setDataRow; //so add it
            }
        }
        return new PermissionSet($filteredSetItems, $filteredMetaItems);
        
    }
    
    /**
     * The number of items in the set data
     * @return int
     */
    public function length() {
        return count($this->_setData);
    }
    
    public function getSetData() {
        return $this->_setData;
    }
    
    public function getMetaData() {
        return $this->_metaData;
    }
    
    /**
     * allows you to filter your data set by a specified field with a specific value, strict is an optional parameter which specifies whether type matching is used
     * available field names:
     *  [authid]
        [mdfmoduleid]
        [mdfroleid]
        [mdfuserroleid]
        [mdfpermissionid] 
        [mdfmodulename]
        [mdfrolename]
        [mdfpermissionname]
        [mdfpermissionvalue]
     * @param string $field
     * @param array|string|int $value
     * @param bool $strict
     * @return \digitalmarmalade\Mdf\Permission\MdfPermissionSet
     */
    public function filter($field, $value, $strict = false) {
        $filteredSetData = array();
        foreach ($this->_setData as $setDataRow) {
            if (!isset($setDataRow[$field])) {
                throw new \Exception('Invalid field name ' . $field . ' in filter in MdfPermissionSet');
            }
            if (is_array($value)) { //filter by array
                foreach ($value as $valueRow) {
                    if ( ($strict === true && $setDataRow[$field] === $valueRow) || ($strict !== true && $setDataRow[$field] == $valueRow) ) {
                        $filteredSetData[] = $setDataRow;
                    }
                }
            } else { //filter by int/string
                if ( ($strict === true && $setDataRow[$field] === $value) || ($strict !== true && $setDataRow[$field] == $value) ) {
                    $filteredSetData[] = $setDataRow;
                }
            }
        }
        $filteredMetaData = $this->_getMetaDataForSet($filteredSetData);
        return new PermissionSet($filteredSetData, $filteredMetaData);
    }
    
    /**
     * When passed an array of setdata (array of arrays) will return an array of meta data
     * useful for when another function has filtered the set data
     * @param mixed $set
     * @return mixed
     */
    private function _getMetaDataForSet($set) {
        $metaItems = array();
        foreach ($set as $setDataRow) {
            foreach ($this->_metaData as $metaDataRow) {
                if ($this->_metaInSet($setDataRow, $metaDataRow) === true) {
                    $metaItems[] = $metaDataRow;
                } else {
                    //echo 'Meta: ' . $metaDataRow['mdfpermissionid'] . ' Set: ' . $setDataRow['mdfpermissionid'] . "\n";
                    //echo 'Meta: ' . $metaDataRow['authid'] . ' Set: ' . $setDataRow['authid'] . "\n";
                    //echo 'Meta: ' . $metaDataRow['mdfmoduleid'] . ' Set: ' . $setDataRow['mdfmoduleid'] . "\n";
                }
            }
        }
        return $metaItems;
    }
    
    /**
     * This function returns true or false depending on if a meta data item is part of the set item provided
     * this is required because they are both stored as an array or arrays where the permissionid, authid and moduleid confirm if the meta value array is meta data
     * assocciated with the set
     * @param array $setItem
     * @param array $metaItem
     * @return bool
     */
    private function _metaInSet($setItem, $metaItem) {
        return ($metaItem['mdfpermissionid'] === $setItem['mdfpermissionid'] &&
            $metaItem['authid'] === $setItem['authid'] &&
            $metaItem['mdfmoduleid'] === $setItem['mdfmoduleid']);
    }
    
    /**
     * Creates the _setRef variable by walking through each item in the _setData. This is used for filtering/finding specific permission records.
     * It essentially creates a tree structure out of the flat database structure
     * @param mixed $set
     */
    private function _parseSet($set) {
        foreach ($set as $index => $setItem) {
            
            if (!isset($this->_setRef[$setItem['authid']])) {
                $this->_setRef[$setItem['authid']] = array('indexes' => array(), 'children' => array());
            }
            if (!isset($this->_setRef[$setItem['authid']]['children'][$setItem['mdfmodulename']])) {
                $this->_setRef[$setItem['authid']]['children'][$setItem['mdfmodulename']] = array('indexes' => array(), 'children' => array());
            }
            if (!isset($this->_setRef[$setItem['authid']]['children'][$setItem['mdfmodulename']]['children'][$setItem['mdfpermissionname']])) {
                $this->_setRef[$setItem['authid']]['children'][$setItem['mdfmodulename']]['children'][$setItem['mdfpermissionname']] = array('indexes' => array(), 'value' => array());
            }
            
            $this->_setRef[$setItem['authid']]['indexes'][] = $index;
            $this->_setRef[$setItem['authid']]['children'][$setItem['mdfmodulename']]['indexes'][] = $index;
            $this->_setRef[$setItem['authid']]['children'][$setItem['mdfmodulename']]['children'][$setItem['mdfpermissionname']]['indexes'][] = $index;

            $this->_setRef[$setItem['authid']]['children'][$setItem['mdfmodulename']]['children'][$setItem['mdfpermissionname']]['value'] = $setItem['mdfpermissionvalue'];
        }
        $this->_setData = $set;
    }
    
    /**
     * This function does the same as _parseSet except for Meta Data, please see the _parseSet comments.
     * @param mixed $meta
     */
    private function _parseMetaSet($meta) {
        foreach ($meta as $index => $metaItem) {
            
            if (!isset($this->_metaRef[$metaItem['authid']])) {
                $this->_metaRef[$metaItem['authid']] = array('indexes' => array(), 'children' => array());
            }
            if (!isset($this->_metaRef[$metaItem['authid']]['children'][$metaItem['mdfmodulename']])) {
                $this->_metaRef[$metaItem['authid']]['children'][$metaItem['mdfmodulename']] = array('indexes' => array(), 'children' => array());
            }
            if (isset($this->_metaRef[$metaItem['authid']]['children'][$metaItem['mdfmodulename']]['children'][$metaItem['mdfpermissionname']])) {
                $this->_metaRef[$metaItem['authid']]['children'][$metaItem['mdfmodulename']]['children'][$metaItem['mdfpermissionname']] = array('indexes' => array());
            }
            
            $this->_metaRef[$metaItem['authid']]['indexes'][] = $index;
            $this->_metaRef[$metaItem['authid']]['children'][$metaItem['mdfmodulename']]['indexes'][] = $index;
            $this->_metaRef[$metaItem['authid']]['children'][$metaItem['mdfmodulename']]['children'][$metaItem['mdfpermissionname']]['indexes'][] = $index;
        }
        
        $this->_metaData = $meta;
    }
    
    
    
}
