<?php
include_once('ip2locationlite.class.php');
 
//Set geolocation cookie
if(!$_COOKIE["geolocation"]){
  $ipLite = new ip2location_lite;
  $ipLite->setKey('efc5a5ac583e225f8113d341491345d2a0271d97af7e9e0fb247fa8950324614');
 
  $visitorGeolocation = $ipLite->getCountry($_SERVER['49.248.247.54']);
  if ($visitorGeolocation['statusCode'] == 'OK') {
    $data = base64_encode(serialize($visitorGeolocation));
    setcookie("geolocation", $data, time()+3600*24*7); //set cookie for 1 week
  }
}else{
  $visitorGeolocation = unserialize(base64_decode($_COOKIE["geolocation"]));
}
 
var_dump($visitorGeolocation);
?>
