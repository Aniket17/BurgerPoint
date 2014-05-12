<?php require("../db.php");


$apass = "aniket";


echo "<p><h4>Creating tables...</h4></p>";

//For the passwords
$passwords = "CREATE TABLE passwords
(
ID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(ID),
pass varchar(255),
type int
)";

//For the log
$log = "CREATE TABLE log
(
ID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(ID),
IP varchar(19),
Time varchar(99),
Details varchar(255),
Page varchar(255),
timestamp int,
day float,
cmonth float,
Hour varchar(20),
refferer varchar(200)
)";

//For the lastcleared
$lastcleared = "CREATE TABLE lastcleared
(
ID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(ID),
TimeLC varchar(255)
)";

$location = "CREATE TABLE IF NOT EXISTS location (
  ipAddress varchar(20),
  countryCode varchar(10),
  countryName varchar(20),
  regionName varchar(20),
  cityName varchar(20),
  zipCode int(10),
  latitude varchar(20),
  longitude varchar(10),
  timeZone varchar(10)
)";

//Execute Table Creation
mysql_query($passwords) or die(mysql_error());
mysql_query($log) or die(mysql_error());
mysql_query($lastcleared) or die(mysql_error());
mysql_query($location) or die(mysql_error());

echo "<p><h4>Tables created!</h4></p>";

echo"<p><h4>Creating rows...</h4></p>";

//For the passwords
$apassrows = "INSERT INTO passwords (pass, type)
VALUES ('" . md5($apass) . "', '1')";

//For the lastcleared
$lasttime = "INSERT INTO lastcleared (TimeLC)
VALUES ('Never')";


//Execute Row Creation
mysql_query($apassrows) or die(mysql_error());
mysql_query($lasttime) or die(mysql_error());

echo "<p><h4>Rows created!</h4></p>";

mysql_close($connect);

echo "<p><h4>All tables and rows have been created! You may now exit the page.</h4></p>";

echo "<h3>Please now return to the /install/index.html page.</h3>"
?>
<footer>
            <p>Developed by <a href="http://www.facebook.com/anidrockstar">Aniket </a>and<a href="http://www.facebook.com/gankum"> Ganesh</a></p>
        </footer>