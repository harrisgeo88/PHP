<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Sessions {

	public function __construct()
    {
    	//$this->request($params);
    }

    public function create_session_data($data)
    {
    	session_start();

    	$_SESSION['username'] = $data['username'];	
    	$_SESSION['email'] = $data['email'];	
    	$_SESSION['logged_in'] = $data['logged_in'];	
    	// print_r($_SESSION);
    }

    public function destroy_session($session)
    {
		if(isset($_SESSION))	
		{
		  unset($_SESSION['username']);
		  unset($_SESSION['email']);
		  unset($_SESSION['logged_in']);
		}
		session_destroy();
    }

}