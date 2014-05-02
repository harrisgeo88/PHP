<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Modules {

	public function __construct()
    {
    	//$this->request($params);
    }
	
	// Login box or username will be displayed  
	// depending the login state of the user
	public function logged_in($logged_in)
	{
		if ($logged_in) // User logged in. Load username
		{
			$CI =& get_instance();
			
			// return "templates/user_box";
			return $CI->load->view('templates/user_box', NULL, true);
		}
		else // User not logged in. Load the login box
		{
			$CI =& get_instance();
			// return "templates/login_box";
			return $CI->load->view('templates/login_box', NULL, true);
		}
	}

	public function invalid_login()
	{
		$CI =& get_instance();
		return $CI->load->view('templates/invalid_login', NULL, true);
	}


}