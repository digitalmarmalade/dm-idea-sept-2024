<?php

namespace DigitalMarmalade\Permission;

/**
 * One particular permission that has been filtered down from a MdfPermission set. This class contains an individual permission item and the associated meta data
 * if there is any. You can use this class to get permission results to a particular permission or the meta data value from a particular permission
 *
 * @author Tom Lindley <tom@digitalmarmalade.co.uk>
 */
class PermissionItem {
    
    private $_item = null;
    private $_metaItems = null;
    private $_metaItemValues = array();
    
    public function __construct($item, $metaItems = array()) {
        $this->_item = $item;
        $this->_metaItems = $metaItems;
        
        foreach ($this->_metaItems as $metaItem) {
            $this->_metaItemValues[] = $metaItem['mdfpermissionuserdatavalue'];
        }
    }
    
    /**
     * This function returns a boolean response based on the response from hasPermission assuming that your permissions are 0's or 1's in the database.
     * If you're expecting non bool (0/1) results from your permission's dont use this.
     * if metaValue is specified it will look for the permission value from the meta table rather than the permission table.
     * @param string $metaValue
     * @param bool $strict
     * @return bool
     */
    public function hasPermissionBool($metaValue = -1, $strict = false) {
        return ($this->hasPermission($metaValue, $strict) ? true : false);
    }
    
    /**
     * Returns either the permission value or a boolean if the meta value is specified (true if it exists, false if it doesn't)
     * Strict is only applicable if metaValue is specified as it uses array_search to find the value
     * @param string $metaValue
     * @param bool $strict
     * @return string|bool
     */
    public function hasPermission($metaValue = -1, $strict = false) {
        if ($metaValue === -1) { //get the permission value
            return $this->_item['mdfpermissionvalue'];
        } else { //get the meta item value
            return (false === array_search($metaValue, $this->_metaItemValues, $strict)) ? false : true;
        }
        
    }
    
    /**
     * Whether this permission item has meta items
     * @return bool
     */
    public function hasMetaItems() {
        return (count($this->_metaItems));
    }
    
    /**
     * Returns the specific meta item user data value index from the meta items associated with this permission item
     * If no index is specified returns the first meta item value
     * @param [int $index]
     * @throws \Exception
     * @return mixed
     */
    public function getMetaItemValue($index = 0) {
        if (!array_key_exists($index, $this->_metaItemValues)) {
            throw new \Exception('Cannot access index of meta item values in MdfPermissionItem::getMetaItemValue, index does not exist');
        } else {
            return $this->_metaItemValues[$index];
        }
    }
    
    /**
     * Returns an array of all of the meta item values
     * @return array
     */
    public function getAllMetaItemValues() {
        return $this->_metaItemValues;
    }
    
    /**
     * Returns the auth id of this permission item
     * @return string
     */
    public function getAuthId() {
        return $this->_getProperty('authid');
    }
    
    /**
     * Returns the module id of this permission item
     * @return int
     */
    public function getModuleId() {
        return intval($this->_getProperty('mdfmoduleid'));
    }
    
    /**
     * Returns the role id of this permission item
     * @return int
     */
    public function getRoleId() {
        return intval($this->_getProperty('mdfroleid'));
    }
    
    /**
     * Returns the user role of this permission item
     * @return int
     */
    public function getUserRoleId() {
        return intval($this->_getProperty('mdfuserroleid'));
    }
    
    /**
     * Returns the permission id of this permission item
     * @return int
     */
    public function getPermissionId() {
        return intval($this->_getProperty('mdfpermissionid'));
    }
    
    /**
     * Returns the module name of this permission item
     * @return string
     */
    public function getModuleName() {
        return $this->_getProperty('mdfmodulename');
    }
    
    /**
     * Returns the role name of this permission item
     * @return string
     */
    public function getRoleName() {
        return $this->_getProperty('mdfrolename');
    }
    
    /**
     * Returns the permission name of this permission item
     * @return string
     */
    public function getPermissionName() {
        return $this->_getProperty('mdfpermissionname');
    }
    
    /**
     * Gets an item from the property such as mdfmoduleid, or mdfuserroleid, for the list of available fields see filter in MdfPermissionSet
     * Do not reference this (well, you can't), let the get* function above to avoid hardcoding field names all over the place.
     * @param string $property
     * @return mixed
     * @throws \Exception
     */
    private function _getProperty($property) {
        if (!isset($this->_item[$property])) {
            throw new \Exception('Cannot get permission item property, does not exist in MdfPermissionItem.');
        } else {
            return $this->_item[$property];
        }
    }
    
}
