<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MY_Auth{

	public function __construct()
	{

	}

	public function login($var)
	{
		
		$CI =& get_instance();
		$CI->load->model("databaseFunctions");
		
		// Validates the user / pass and makes the pass md5
		$login_details = $this->loginDetails($var);
		
		
		$authentication = $CI->databaseFunctions->authenticate($login_details['user'], $login_details['pass']);


		return $this->isLoggedIn($authentication[0]->count);
	}

	public function loginDetails($var)
	{
		if (isset($var['user']) && isset($var['pass']))
		{
			$details['user'] = $var['user']; 
			$details['pass'] = md5($var['pass']);
		}
		else
		{
			$details['user'] = 0;
			$details['pass'] = 0;
		}
		//	print_r($details);
		return $details;
	}

	public function isLoggedIn($var)
	{
		if ($var)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}


}
