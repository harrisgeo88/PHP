<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MY_Dates 
{

    public function __construct()
    {
    	//$this->request($params);
    }

    // Date now in MySQL format
    public function getNow() 	
    {
    	return date("Y-m-d H:i:s");
	}

	// Date Yesterday in MySQL format 
	public function daysAgo($days)
	{
		$ago = date("Y-m-d 00:00:00", strtotime("-$days day"));

		return $ago;
	}

	public function daysAfterDate($date, $interval)
	{
		// $date = "2014-05-10";
		// $interval = 30;

		$new_date = date('Y-m-d', strtotime($date . "+ $interval days"));

		// echo "Date: $date, interval: $interval <br> new date = $new_date";
		return $new_date;
	}



	// Converts DD/MM/YYYY HH:MM:SS dates to MySQL format
	public function fixDate($date)
	{
		if(preg_match("/^[0-9]{1,2}\//", $date)) // Fucked date
		{
			preg_match_all("/[0-9]{1,4}/", $date, $date_breakdown);
			$date_breakdown = "{$date_breakdown[0][2]}-{$date_breakdown[0][1]}-{$date_breakdown[0][0]} {$date_breakdown[0][3]}:{$date_breakdown[0][4]}:{$date_breakdown[0][5]}";
			
			//@mail('harris@visionsms.com','Date Time 2', $date_breakdown . " " . $date);
			// die($date_breakdown);
			return $date_breakdown;
		}
		else if(preg_match("/^[0-9]{4}-/", $date))
		{
			//@mail('harris@visionsms.com','Date Time', $date);
			return $date;
		}
	}

}
