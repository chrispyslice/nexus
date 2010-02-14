<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Login Controller
 * 
 * Nexus Content Management System
 * 
 * @license		GNU General Public License
 * @author		Chris Granville
 * @link		http://nexuscms.sourceforge.net
 * @email		crispyslice at users.sourceforge.net
 * 
 * @file		login.php
 * @version		1.0
 * @date		02/13/2010
 * 
 * Copyright (c) 2010 Nexus Project
 */

class Login extends NXController
{
	var $username;
	var $password;
	var $redirect = '/dashboard';
	
	function Login()
	{
		parent::NXController();
		$this->lang->load('login');
	}
	
	function index()
	{	
		$this->load->view('login/login');
	}
	
	function submit()
	{	
		if($this->form_validation->run('login') == FALSE)
		{
		    $this->load->view('login/login');
		}
		else
		{
			$this->username = $this->input->post('username');
			$this->password = $this->input->post('password');
			
			$this->quickauth->login($this->username, $this->password, $this->redirect);
		}
	}
	
	function logout()
	{
		$this->quickauth->logout();
		redirect('/login');
	}
	
}