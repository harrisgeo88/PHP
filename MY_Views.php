<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Views {

	
 	public function __construct()
    {
    	//$this->request($params);
    }
    
	// Function for loading views including the header, footer with them
	public function load_view($view_name, $vars)
	{
	// $CI =& get_instance();

		$CI =& get_instance();
		// $CI->load->model("Database_Functions");
		// $this->load->model("Database_Functions");

		$CI->load->view('templates/header', $vars);
		$CI->load->view($view_name, $vars);
		$CI->load->view('templates/footer');
	}

}