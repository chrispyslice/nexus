<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title><?=$this->lang->line('login_html_title');?></title>
		<style lang="text/css">
			body {
				font: 12px "Verdana";
			}
			
			h1 {
				font-size: 16px;
			}
			
			div.error {
				background: #ff9393;
				border: 2px solid #ff3d3d;
				margin-bottom: 5px;
				padding: 5px;
			}
			.error, .notice, .success {padding:.8em;margin-bottom:1em;border:2px solid #ddd;}
			.error {background:#FBE3E4;color:#8a1f11;border-color:#FBC2C4;}
			.notice {background:#FFF6BF;color:#514721;border-color:#FFD324;}
			.success {background:#E6EFC2;color:#264409;border-color:#C6D880;}
			.error a {color:#8a1f11;}
			.notice a {color:#514721;}
			.success a {color:#264409;}
		</style>
	</head>
	
	<body>
	<?php
	    echo(form_open('/login/submit'));
	    echo(form_fieldset($this->lang->line('login_fieldset_title')));
	    echo(validation_errors('<div class="error">', '</div>'));
	    echo($this->session->flashdata('login_status'));
	    echo($this->lang->line('login_field_username') . form_input('username', set_value('username')) . '<br/>');
	    echo($this->lang->line('login_field_password') . form_password('password', set_value('password')) . '<br/>');
	    echo(form_submit('submit', $this->lang->line('login_submit')));
	    echo(form_fieldset_close());
	    echo(form_close());
	?>
	<small>
	    Generated in {elapsed_time} seconds using {memory_usage} of memory<br/>
	    <address>
	    	Nexus CMS v<?=config_item('NX_VERSION') . ' "' . config_item('NX_RELEASE_NAME');?>"
	    </address>
	</small>
	</body>
</html>

<?php
/* End of file login.php */
/* Location: ./nx_system/application/administration/views/login/login.php */