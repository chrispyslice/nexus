<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Auth controller
 * 
 * Nexus Content Management System
 * 
 * @license		GNU General Public License
 * @author		Chris Granville
 * @link		http://nexuscms.sourceforge.net
 * @email		crispyslice at users.sourceforge.net
 * 
 * @file		
 * @version		1.0
 * @date		02/14/2010
 * 
 * Copyright (c) 2010 Nexus Project. All Rights Reserved.
 */


class Auth extends NXController
{
	function Auth()
	{
		parent::NXController();
		// Load library
	}
	
	function login()
	{
		// Login using username 'test' and password 'helloworld'
		$this->dx_auth->login('chris', 'empires');
	}
	
	function logout()
	{
		// Logout user
		$this->dx_auth->logout();
	}
	
	function register()
	{
		// Register a user with username 'john', password 'johnpassword', and email 'john@yourmail.com'
		if ($user = $this->dx_auth->register('test', 'password', 'john@yourmail.com'))
		{
			echo 'Welcome '.$user->username;
		}
		else
		{
			echo 'Failed to register';
		}
	}
	
	function hello()
	{
		// Check if user is logged in or not
		if ($this->dx_auth->is_logged_in())
		{
			echo 'Hello world';
		}
		else
		{
			echo 'Not logged in';
		}
	}
}



/* End of file auth.php */
/* Location: ./system/application/admin/controllers/auth.php */