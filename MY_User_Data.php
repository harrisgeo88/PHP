<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_User_Data {
	

	public function __construct()
    {
    	//$this->request($params);
    }

    public function get_user_data($user)
    {
    	if (isset($user))
    	{
			$CI =& get_instance();
    		$CI->load->model('databaseFunctions');
	    	return $CI->databaseFunctions->get_user_data($user);
	    }
	    else
	    {
	    	return 0;
	    }
    }
}