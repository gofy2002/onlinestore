<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (! function_exists('checkSession'))
{
	function checkSession()
	{
		$CI = & get_instance();
    	if (!$CI->session->userdata('logged_in'))
    	{
        	//the session has expired!
        	$data['title'] = "Session expired";
         	redirect('Welcome', 'refresh');
    	}
	}
}

 ?>