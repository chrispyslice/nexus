<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Nexus Admin Configuration
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

/**
 * Nexus Administration configuration. These settings are, by design,
 * not changeable by the end user and are for developer use only.
 *
 */

$config = array(
	'NX_DEBUG_MODE'			=> TRUE,
	/**
	* Headers
 	*/
 	'NX_IDENT_IN_HEADERS'	=> TRUE,
 	'NX_HEADER_STRING'		=> 'X-Served-by',
	/**
	* Versions
 	*/
 	'NX_VERSION'			=> '0.0.1',
	'NX_RELEASE_NAME'		=> 'Vega',
	'NX_STATUS'				=> 'Pre-alpha',
	'NX_IDENT'				=> 'NX',
);

/* End of file nx_config.php */
/* Location: ./system/application/admin/config/nx_config.php */