<?php

namespace DigitalMarmalade\Permission;

use Illuminate\Support\Facades\DB;

/**
 * MdfPermission is a static class used to fetch and cache permission data. This class can return instances of MdfPermissionSet and MdfPermission item
 * depending on how it is used. This should be considered the gateway to the permissions tables
 *
 * @author Tom Lindley <tom@digitalmarmalade.co.uk>
 */
class Permission {
    
    static private $_rolesCache = array(); //cache for the user roles
    static private $_DB = null; //static class requires the DB object
    
    const AUTH_ID = 'authid';
    const MODULE_ID = 'mdfmoduleid';
    const ROLE_ID = 'mdfroleid';
    const USER_ROLE_ID = 'mdfuserroleid';
    const PERMISSION_ID = 'mdfpermissionid';
    const MODULE_NAME = 'mdfmodulename';
    const ROLE_NAME = 'mdfrolename';
    const PERMISSION_NAME = 'mdfpermissionname';
    const PERMISSION_VALUE = 'mdfpermissionvalue';
    const PERMISSION_META_VALUE = 'mdfpermissionuserdatavalue';
    
    /**
     * Loads the permissions from the database and returns them, optional module and permission values may be specified
     * If both module and permission parameters are specified only 1 row should be returned
     * If both are specified and more than 1 row is returned an exception is thrown
     * An empty array will be returned if the permission doesn't exist
     * @param string $user
     * @param string $module
     * @param string $permission
     * @throws \Exception
     * @return mixed
     */
    static private function _loadUserPermission($user, $module = null, $permission = null, $role = null) {
        $query = self::_getBaseQuery($user);
            
        if ($module !== null) {
            $query->where('modules.id', '=', $module);
        }
        
        if ($permission !== null) {
            $query->where('permissions.id', '=', $permission);
        }
        
        if ($role !== null) {
            $query->where('roles.id', '=', $role);
        }
            
        return $query->get();
    }
    
    static private function _getBaseQuery($user)
    {
        return $query = DB::table('permissions')
            ->select('user_roles.user', 'permissions.module', 'permission_roles.role', 'user_roles.id AS user_role', 'permissions.id AS permission', 'modules.name as module_name', 'roles.name AS role_name', 'permissions.name AS permission_name')
            ->join('permission_roles', 'permissions.id', '=', 'permission_roles.permission')
            ->join('modules', 'permissions.module', '=', 'modules.id')
            ->join('user_roles', 'permission_roles.role', '=', 'user_roles.id')
            ->join('roles', 'user_roles.role', '=', 'roles.id')
            ->where('user_roles.user', '=', $user);
    }
    
    /**
     * Loads the permissions meta data from the database and returns them, optional module and permission and metaValue may be specified
     * If all 3 optional parameters are specified only 1 row should be returned
     * If all 3 are specified and more than 1 row is returned an exception is thrown
     * An empty array will be returned if the permission doesn't exist
     * @param string $userid
     * @param string $module
     * @param string $permission
     * @param string $metaValue
     * @return mixed
     * @throws \Exception
     */
    static private function _loadUserPermissionData($userid, $module = -1, $permission = -1, $role = -1, $metaValue = -1) {
        $result = self::$_DB->getAll('select mur.authid, mp.mdfpermissionname, mm.mdfmoduleid, mm.mdfmodulename, mpud.*
            from mdfpermission mp, mdfmodule mm, mdfpermissionrole mpr, mdfuserrole mur, mdfpermissionuserdata mpud, mdfrole mr
            WHERE mpr.mdfpermissionid = mp.mdfpermissionid
            AND mp.mdfmoduleid = mm.mdfmoduleid
            AND mur.mdfroleid = mpr.mdfroleid
            AND mpud.mdfpermissionid = mp.mdfpermissionid
            AND mpud.mdfuserroleid = mur.mdfuserroleid
            AND mr.mdfroleid = mur.mdfroleid
            AND mur.authid = ?
            AND (mm.mdfmodulename = ? OR -1 = ?)
            AND (mp.mdfpermissionname = ?  OR -1 = ?)
            AND (mpud.mdfpermissionuserdatavalue = ? OR -1 = ?)
            AND (mr.mdfrolename = ? OR -1 = ?)', array($userid, $module, $module, $permission, $permission, $metaValue, $metaValue, $role, $role));

        if ($module !== -1 && $permission !== -1 && $metaValue !== -1 && count($result) > 1) { throw new \Exception('Unexpected result from query in _loadUserPermissionData in MdfPermission'); }
        return $result;
    }
    
    /**
     * returns either an MdfPermissionSet or MdfPermissionItem. MdfPermissionItem is returned if all 4 parameters are !== -1, otherwise a MdfPermissionSet
     * is returned regardless of the number of results
     * @param string $user
     * @param string [$module]
     * @param string [$permission]
     * @return bool
     */
    static public function get($user, $module = -1, $permission = -1, $role = -1) {
        if ($module !== -1 && $permission !== -1 && $role !== -1) {
            $permissionSet = new PermissionSet(self::_loadUserPermission($user, $module, $permission, $role), self::_loadUserPermissionData($user, $module, $permission, $role));
            return $permissionSet->getItem($user, $module, $permission);
        } elseif ($module !== -1 && $permission !== -1) {
            $permissionSet = new PermissionSet(self::_loadUserPermission($user, $module, $permission), self::_loadUserPermissionData($user, $module, $permission));
            return $permissionSet->getSet($user, $module, $permission);
        } elseif ($module !== -1) {
            $permissionSet = new PermissionSet(self::_loadUserPermission($user, $module), self::_loadUserPermissionData($user, $module));
            return $permissionSet->getSet($user, $module);
        } else {
            $permissionSet = new PermissionSet(self::_loadUserPermission($user), self::_loadUserPermissionData($user, $module, $permission));
            return $permissionSet->getSet($user);
        }
    }
    
    /**
     * Fetches all the perissions for one particular module and returns them as an MdfPermissionSet
     * Optional permission and metavalue parameters may be used to filter it by a specific permission with a specific meta value 
     * NOTE: Does not use caching
     * @param string $module
     * @param [[string $permission]
     * @param [string $metaValue]]
     * @return \digitalmarmalade\Mdf\Permission\MdfPermissionSet
     */
    static public function getModule($module, $permission = -1, $metaValue = -1) {
        $result = self::$_DB->getAll('select mur.authid, mp.mdfmoduleid, mr.mdfroleid, mp.mdfpermissionid, mm.mdfmodulename, mr.mdfrolename, mp.mdfpermissionname, mp.mdfpermissionvalue
            from mdfpermission mp, mdfmodule mm, mdfpermissionrole mpr, mdfrole mr, mdfuserrole mur
            WHERE mp.mdfmoduleid = mm.mdfmoduleid
            AND mpr.mdfpermissionid = mp.mdfpermissionid
            AND mpr.mdfroleid = mr.mdfroleid
            AND mur.mdfroleid = mr.mdfroleid
            AND (mm.mdfmodulename = ? OR -1 = ?)
            AND (mp.mdfpermissionname = ? OR -1 = ?)', array($module, $module, $permission, $permission));
        
        $metaResult = self::$_DB->getAll('select mur.authid, mp.mdfpermissionname, mp.mdfmoduleid, mm.mdfmodulename, mpud.*
            from mdfpermission mp, mdfmodule mm, mdfpermissionrole mpr, mdfuserrole mur, mdfpermissionuserdata mpud
            WHERE mpr.mdfpermissionid = mp.mdfpermissionid
            AND mp.mdfmoduleid = mm.mdfmoduleid
            AND mur.mdfroleid = mpr.mdfroleid
            AND mpud.mdfpermissionid = mp.mdfpermissionid
            AND mpud.mdfuserroleid = mur.mdfuserroleid
            AND (mm.mdfmodulename = ? OR -1 = ?)
            AND (mp.mdfpermissionname = ?  OR -1 = ?)
            AND (mpud.mdfpermissionuserdatavalue = ? OR -1 = ?)', array($module, $module, $permission, $permission, $metaValue, $metaValue));
        
        $set = new \digitalmarmalade\Mdf\Permission\MdfPermissionSet($result, $metaResult);
        if ($permission !== -1) {
            $set = $set->filter('mdfpermissionname', $permission);
        }
        if ($metaValue !== -1) {
            $set = $set->filterByMetaValue($metaValue);
        }
        return $set;
        
    }
    
    /**
     * Fetches (from cache or db) the users list of roles and returns it as an indexed array
     * @param string $user
     * @return mixed
     */
    static public function getUserRoles($user) {
        
        if (isset(self::$_rolesCache[$user])) { //check the cache
            return self::$_rolesCache[$user];
        } 
        //otherwise get it from the database
        $result = self::$_DB->getAll('select mur.authid, mr.mdfroleid, mr.mdfrolename, mur.mdfuserroleid
            from mdfrole mr, mdfuserrole mur
            WHERE mur.mdfroleid = mr.mdfroleid
            AND mur.authid = ?', array($user));

        $roles = array();
        foreach ($result as $role) { $roles[intval($role['mdfuserroleid'])] = $role['mdfrolename']; }
        return $roles;
    }
    
    /**
     * Uses the get user roles function to return a boolean as to whether a user is in a particular role
     * @param string $user
     * @param string $rolename
     * @param bool $strict
     * @return bool
     */
    static public function userInRole($user, $rolename, $strict = true) {
        $roles = self::getUserRoles($user);
        return in_array($rolename, $roles, $strict);
    }

    /**
     * adds a authid to a role (if they aren't in that role already) or throws exception if auth/role doesn't exist
     * Optional paramaters are mutually inclusive and must all be defined if 1 is defined, they are only required if you are using meta value permissions
     * if you specify modulename, permissionname and meta value in addition to adding the user to the role they will add the specific meta data
     * to that permission for this auth id on this module. 
     * If the optional parameters are not defined then true will be returned if the user was added or false if they were already in that role
     * if the optional parameters are defined then true will be returned if the meta was added successfully, otherwise false will be returned
     * @param string $user
     * @param string $role
     * @param [[string $moduleName]
     * @param [string $permissionName]
     * @param [string|int $metaValue]]
     * @throws \Exception
     */
    static public function add($user, $role, $moduleName = false, $permissionName = false, $metaValue = false) {
        if (!self::_isSetup()) { throw new \Exception('Can not run set in MdfPermission, not setup.'); }
        
        //check to see if the role and auth exist (check for 1 row, if we get more somethings badly broken so error, if it's 0 then one of them doesn't exist
        if(count(self::$_DB->getAll('select mr.mdfroleid, mr.mdfrolename, mwa.authid
            from mdfrole mr, mdfwebauth mwa
            where mwa.authid = ?
            and mr.mdfrolename = ?', array($user, $role))) !== 1) {
            throw new \Exception('Cannot add auth to role, role or authid does not exist in addAuthToRole in MdfPermssion');
        }
        
        $nextId = self::$_DB->nextId('mdfuserrole');
            
        self::$_DB->query('insert into mdfuserrole (mdfuserroleid, authid, mdfroleid)
        select ?, ?, mr.mdfroleid
        from mdfrole mr
        where mr.mdfrolename = ?
        and not exists (select mdfuserroleid
            from mdfuserrole mur, mdfrole mr
            where mr.mdfroleid = mur.mdfroleid
            and mur.authid = ?
            and mr.mdfrolename = ?)', array($nextId, $user, $role, $user, $role), 'MdfPermissionAdd');
        
        if ($moduleName !== false && $permissionName !== false && $metaValue !== false) { //we are adding some meta data too
            //return whether or not the meta value worked
            return self::_addMetaValue($user, $role, $moduleName, $permissionName, $metaValue);
        } else { //no meta data to add, so return whether the previous query added a row
            return (self::$_DB->get_records_count('MdfPermissionAdd') === 1); 
        }
    }
    
    /**
     * Adds a meta value to the permissions for module-permission for the specified auth id
     * This function shouldn't be accessed directly, use addPermission
     * If the permission already exists false will be returned, if the permission doesn't exist then an exception will be thrown
     * returns true if successfully added the new meta value.
     * @param string $user
     * @param string $moduleName
     * @param string $permissionName
     * @param string $metaValue
     * @return bool
     * @throws \Exception
     */
    static private function _addMetaValue($user, $role, $moduleName, $permissionName, $metaValue) {
        //check the permission name exists
        $permissionResult = self::$_DB->getAll('select mp.*
            from mdfpermission mp, mdfmodule mm
            where mm.mdfmoduleid = mp.mdfmoduleid
            and mm.mdfmodulename = ?
            and mp.mdfpermissionname = ?', array($moduleName, $permissionName));
        if (count($permissionResult) !== 1) { //if we have > 1 then the database is wrong, if we have less than the permission name doesn't exist.
            throw new \Exception('Cannot add permission meta data in addAuthToRole, module-permission does not exist or there is malformed permission data.');
        }
        $permissionId = $permissionResult[0]['mdfpermissionid'];
        $nextMpudId = self::$_DB->nextId('mdfpermissionuserdata');
        self::$_DB->query('insert into mdfpermissionuserdata (mdfpermissionuserdataid, mdfpermissionid, mdfuserroleid, mdfpermissionuserdatavalue)
            select ?, ?, mur.mdfuserroleid, ?
                    from mdfuserrole mur, mdfrole mr
                    where mr.mdfroleid = mur.mdfroleid
                    and mur.authid = ?
                    and mr.mdfrolename = ?
                    and not exists (
                        select mdfpermissionuserdataid
                        from mdfpermissionuserdata mpud, mdfuserrole mur, mdfrole mr
                        where mr.mdfroleid = mur.mdfroleid
                        and mur.authid = ?
                        and mr.mdfrolename = ?
                        and mpud.mdfuserroleid = mur.mdfuserroleid
                        and mpud.mdfpermissionid = ?
                        and mpud.mdfpermissionuserdatavalue = ?
                    )', array($nextMpudId, $permissionId, $metaValue, $user, $role, $user, $role, $permissionId, $metaValue), 'MdfPermissionAddMetaValue');
                            //postgres does this better ^^
        return (self::$_DB->get_records_count('MdfPermissionAddMetaValue') === 1);
    }
    
    /**
     * Removes a user from a role entirely, returns true if user has been removed, returns false if they weren't (probably because they werent in that role)
     * Throws an exception if the user or role doesn't exist
     * If you want to remove just 1 meta value use removeMetaValue method
     * WARNING: This will cascade to all their meta data if any exists
     * @param string $user
     * @param string $role
     * @return bool
     * @throws \Exception
     */
    static public function removeRole($user, $role) {
        
        //check to see if the role and the authid exist
        $checkResult = self::$_DB->getAll('SELECT mwa.authid, mr.mdfroleid
            FROM mdfwebauth mwa, mdfrole mr
            WHERE mwa.authid = ?
            AND mr.mdfrolename = ?', array($user, $role), 'MdfPermissionRemoveRoleCheck');
        //if they don't exist throw an exception because something has gone horribly wrong in whatever requested this
        if (self::$_DB->get_records_count('MdfPermissionRemoveRoleCheck') !== 1) {
            throw new \Exception('Cannot remove auth from role, role or user does not exist in MdfPermission.');
        }
        //get the roleid from the check to save having to select from the roletable again in the delete
        $roleId = $checkResult[0]['mdfroleid'];
        
        //run the delete
        self::$_DB->query('DELETE FROM mdfuserrole WHERE authid = ? and mdfroleid = ?', array($user, $roleId), 'mdfPermissionRemoveRole');
        
        //return true if 1 (or more (but that shouldn't happen, if it did then it's fixed now)) records have been removed
        //otherwise return false because the user wasn't in the role
        return (self::$_DB->get_records_count('mdfPermissionRemoveRole') !== 0);
    }
    
    /**
     * Removes a specific meta value for a user-role for a module-permission where the meta value equals the specified meta value
     * Returns true if it was removed, false if it was not removed (probably not found?)
     * Or throws an exception if the auth-role or module-permission does not exist
     * @param string $user
     * @param string $role
     * @param string $moduleName
     * @param string $permissionName
     * @param int|string $metaValue
     * @return bool
     * @throws \Exception
     */
    static public function removeMetaValue($user, $role, $moduleName, $permissionName, $metaValue) {
         //check to see if the role, authid and module-permission exist and that the user is in the role
        $checkResult = self::$_DB->getAll('select mp.mdfpermissionid
            from mdfpermission mp, mdfmodule mm
            where mm.mdfmoduleid = mp.mdfmoduleid
            and mm.mdfmodulename = ?
            and mp.mdfpermissionname = ?', array($moduleName, $permissionName), 'MdfPermissionRemoveMetaValueCheck');
        //if they don't exist throw an exception because something has gone horribly wrong in whatever requested this
        if (self::$_DB->get_records_count('MdfPermissionRemoveMetaValueCheck') !== 1) {
            throw new \Exception('Cannot remove meta value from module-permission for auth from role, role, user or module-permission does not exist in MdfPermission.');
        }
        
        $permissionId = $checkResult[0]['mdfpermissionid'];
        
        //delete where the value equals the $metaValue
        self::$_DB->query('delete from mdfpermissionuserdata
            using mdfpermissionuserdata, mdfuserrole, mdfrole
            where mdfpermissionuserdata.mdfpermissionid = ?
            and mdfpermissionuserdata.mdfuserroleid = mdfuserrole.mdfuserroleid
            and mdfuserrole.mdfroleid = mdfrole.mdfroleid
            and mdfuserrole.authid = ?
            and mdfrole.mdfrolename = ?
            and mdfpermissionuserdata.mdfpermissionuserdatavalue = ?', array($permissionId, $user, $role, $metaValue), 'MdfPermissionRemoveMetaValue');
        
        //if not 0 rows affected then success, otherwise it wasn't found or failed
        return (self::$_DB->get_records_count('MdfPermissionRemoveMetaValue') !== 0);
    }
    
}