<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Redirects {

	public function __construct()
    {
    	//$this->request($params);
    }

    public function go_home()
    {
    	header("Location: http://www.visionsms.com/apps/client_stats/site/");
    }
}
