<?php

$servername = "localhost"; //Server name 
$database = "mystats";    //Database name
$username = "root";        //User name for MySQL Database
$password = "";         //Password for MySQL User name



$connect = mysql_connect($servername,$username,$password);
mysql_select_db($database, $connect);

function cleanString($string)	//for validating the password of proper form .. uses inbuilt php string lib
{

	$string = stripslashes($string);
	$string = strip_tags($string);
	$string = str_replace("'","&#39;",$string);
	return $string;
}

?>
