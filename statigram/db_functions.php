<?php
require("./statigram/db.php");

class db_functions{

    private $db;

    //put your code here
    // constructor
    function __construct() {
    
        // connecting to database
     }

    // destructor
    function __destruct() {
        
    }

    /**
     * Storing new user
     * returns user details
     */
public function storeEverything($referer) {
include('ip2locationlite.class.php');

if($referer ==''){
$referer = 'DirectVisitors';
}

$ipLite = new ip2location_lite;
$ipLite->setKey('efc5a5ac583e225f8113d341491345d2a0271d97af7e9e0fb247fa8950324614');
$ip = $_SERVER['REMOTE_ADDR'];
$locations = $ipLite->getCity($ip);
$page = $_SERVER['PHP_SELF'];
$details = $_SERVER['HTTP_USER_AGENT'];


    $days = array(0,31,59,90,120,151,181,212,243,273,304,334);
    $time = date('d/m/Y h:i:s A');
   
    $timestamp = time();
    $cmonth = date("m");
    $day = date("d")+$days[$cmonth-1];
    $month = date("Y.m");
    $hour = date("h A");
	
 	
mysql_query("INSERT INTO log (IP, Time, Details, Page,timestamp,day,cmonth,Hour,refferer)
            VALUES ('" . $ip . "','" . $time . "','" . $details . "','" . $page . "','" . $timestamp . "','" . $day . "','" . $cmonth . "','" . $hour. "','" . $referer . "')") or die(mysql_error());


 

	mysql_query("INSERT INTO location (ipAddress,countryCode,countryName,regionName,cityName,latitude,longitude,timeZone)
            VALUES ('" . $ip . "','" . $locations['countryCode'] . "','" . $locations['countryName'] . "','" . $locations['regionName'] . "','" . $locations['cityName'] . "','" . $locations['latitude'] . "','" . $locations['longitude'] . "','" . $locations['timeZone'] . "')") or die(mysql_error());





}
}

mysql_close($database,$connect);  

?>
