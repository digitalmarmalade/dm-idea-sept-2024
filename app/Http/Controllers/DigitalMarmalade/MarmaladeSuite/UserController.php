<?php

namespace App\Http\Controllers\DigitalMarmalade\MarmaladeSuite;

use \Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\Hash;

/**
 * Controller for the users list/create/edit functions
 */
class UserController extends MarmaladeSuiteControllerAbstract
{
    
    protected $_listTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.users';
    protected $_createTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.Users.edit';
    protected $_editTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.Users.edit';
    
    /**
     * Displays the list of users
     * @return string
     */
    public function listUsers()
    {
        return view($this->_listTemplate, ['users' => User::get()]);
    }
    
    /**
     * Displays the create interface
     * @return string
     */
    public function createView()
    {
        return view($this->_createTemplate, ['user' => new User]);
    }
    
    /**
     * Creates a new user and redirects to the edit user interface
     * @param Request $request
     * @return Response
     */
    public function createAction(Request $request)
    {
        $this->_validateUserAction($request);
        $user = new User();
        
        $userInput = Input::all();
        $userInput['password'] = $this->_getPassword($user);
        $newUser = $user->create($userInput);
        
        return redirect(route('msuiteUserEdit', ['userId' => $newUser->id]))->with('success', 'The user has been created successfully.');
    }
    
    /**
     * Displays the edit interface for the user
     * @param User $user
     * @return string
     */
    public function edit(User $user)
    {
        return view($this->_editTemplate, ['user' => $user]);
    }
    
    /**
     * Updates a user using the data supplied in the request and redirects the user to the edit interface
     * @param Request $request
     * @param User $user
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        $this->_validateUserAction($request);
        
        $userInput = Input::all();
        $userInput['password'] = $this->_getPassword($user);
        
        $user->update($userInput);
        return redirect(route('msuiteUserEdit', ['userId' => $user->id]))->with('success', 'The user has been updated successfully.');
    }
    
    /**
     * Deletes a user and redirects to the users list
     * @param User $user
     * @return Response
     */
    public function delete(User $user)
    {
        $user->delete();
        return redirect(route('msuiteUsers'))->with('success', 'The user has been deleted successfully.');
    }
    
    /**
     * Gets the password for the user either from the users record or generates a new one based on the reset_password input
     * @param User $user
     * @return string
     */
    protected function _getPassword(User $user)
    {
        if (strlen(Input::get('reset_password', ''))) {
            return Hash::make(Input::get('reset_password'));
        } else {
            return $user->password;
        }
    }
    
    protected function _validateUserAction(Request $request)
    {
        $this->validate($request, $this->_getUpdateValidationRules());
    }
    
    protected function _getUpdateValidationRules()
    {
        return [
            'email' => 'required|email|max:255',
            'name' => 'required|string|min:1|max:255',
            'reset_password' => 'string:min:8'
        ];
    }
    
}
