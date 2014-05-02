<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MY_MSISDN {

    public function __construct()
    {
    	//$this->request($params);
    }

    /**
     * 
     *  Input:  00445566778899
     * 	Output: 445566778899
     * 
     * */
    public function removeStartingZeros($msisdn) 	
    {
    	return preg_replace('/^[0]{1,}/', '', $msisdn);
	}

}


/* End of file Someclass.php */
