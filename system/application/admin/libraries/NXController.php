<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * NXController
 * Custom controller for NX-admin
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
 * @date		02/12/2010
 * 
 * Copyright (c) 2010 Nexus Project. All Rights Reserved.
 */

class NXController extends Controller
{
	var $header;
	var $controller;
	
	function NXController()
	{
		parent::Controller();
		log_message("DEBUG", "[" . config_item('NX_IDENT') . "] [LIB] NXController loaded");
		$this->benchmark->mark('NXController_start');
		
		$this->controller = $this->uri->rsegment(1);
		
		// Output headers?
		$this->_output_headers();
		

		// Enable profiler
		$this->_enable_profiler();
		
		$this->benchmark->mark('NXController_end');
	}
	
	function _output_headers()
	{
		if( $this->config->item('NX_IDENT_IN_HEADERS') == TRUE )
		{
			$this->header_string = $this->config->item('NX_HEADER_STRING') . ': Nexus CMS (v' . $this->config->item('NX_VERSION') . ', ' .
			$this->config->item('NX_RELEASE_NAME') . ')';
			$this->output->set_header('X-Served-by: nexyss');
		}
	}
	
	function _enable_profiler()
	{
		if( $this->config->item('NX_DEBUG_MODE') )
		{
			$this->output->enable_profiler(TRUE);
		}
	}

}

/* End of file NXController.php */
/* Location: ./system/application/admin/libraries/NXController.php */