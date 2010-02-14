<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
	'login'		=> array(
		array(
			'field'	=> 'username',
			'label'	=> 'username',
			'rules'	=> 'required'
		),
		array(
			'field'	=> 'password',
			'label'	=> 'password',
			'rules'	=> 'required'
		)
	),
);

/* End of file form_validation.php */
/* Location: ./nx_system/application/administration/config/form_validation.php */