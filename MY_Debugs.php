<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Lazy debugging function
function fix($v)
{
	if (!empty($v))
	{
		echo "<br>";

		if (!is_string($v))
			print_r($v);

		else 
			echo $v;
	}
} 
