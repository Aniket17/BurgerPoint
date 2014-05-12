<?php 


require("db.php");
//echo "<link href=\"inc/favicon.ico\" rel=\"shortcut icon\">\n";
$myvar = null;

?>
<style type="text/css">
ul.pagination {
	font-family: "Arial", "Helvetica", sans-serif;
	font-size: 13px;
	
	list-style-type: none;
	margin: 20px 0;
	overflow: hidden;
	padding: 0;
}
ul.pagination li.details {
	background-color: white;
	border-color: #C8D5E0;
	border-image: none;
	border-style: solid;
	border-width: 1px 1px 2px;
	color: #1E598E;
	font-weight: bold;
	padding: 8px 10px;
	text-decoration: none;
}
ul.pagination li.dot {
	padding: 3px 0;
}
ul.pagination li {
	float: left;
	list-style-type: none;
	margin: 0 3px 0 0;
}
ul.pagination li:first-child {
	margin-left: 0;
}
ul.pagination li a {
	color: black;
	display: block;
	padding: 7px 10px;
	text-decoration: none;
}
ul.pagination li a img {
	border: medium none;
}
ul.pagination li a.current {
	background-color: white;
	border-radius: 0 0 0 0;
	color: #333333;
}
ul.pagination li a.current:hover {
	background-color: white;
}
ul.pagination li a:hover {
	background-color: #C8D5E0;
}
ul.pagination li a {
	background-color: #F6F6F6;
	border-color: #C8D5E0;
	border-image: none;
	border-style: solid;
	border-width: 1px 1px 2px;
	color: #1E598E;
	display: block;
	font-weight: bold;
	padding: 8px 10px;
	text-decoration: none;
}
</style>
<center>
    <form method='POST' action='showlog.php' onsubmit="return alrt()">
  
    <input type='submit' class = "rounded" class = "button" name='clear' value='Clear All' />
</form>

<script>
function change(dropdown){

   
    var myindex  = dropdown.selectedIndex;
    var SelValue = dropdown.options[myindex].value;
       
    
        

    var baseURL  = "showlog.php?dropdown="+SelValue;
    top.location.href = baseURL;
    
    return true;

    


}
function alrt(){
	
	var status = null;
	status = alert("EveryThing Will Be Lost in a Click");
	if(status){
		return (true);
		}
	
	


}

</script>

<form>
<strong>Select View</strong> &nbsp;
  <select id="dropdown" name="dropdown"  onChange = 'change(this.form.dropdown)' >
    <option>   &nbsp; --<strong>select </strong>-- <hr /></option>
    <option value="one view" > &nbsp; <strong>OneView</strong> <br /></option>
    <option value="overall stats"> &nbsp; <strong>Detailed Statistics</strong></option>
    <option value="lasthour"> &nbsp; <strong>Last Hour Visits</strong></option>
    <option value="last2days"> &nbsp; <strong>Last 2 Days</strong></option>
    <option value="lastweek"> &nbsp; <strong>Last Week</strong></option>
    <option value="lastmonth"> &nbsp; <strong>Last Month</strong></option>
    <option value="page visits"> &nbsp; <strong>Page Visits</strong></option>
    
    
    
</select>
<noscript><INPUT type="submit" value="Go" name=submit1></noscript>

</form>
</center>
	
<?php
	// for showing when the logs deleted
	
	
	
    $days = array(0,31,59,90,120,151,181,212,243,273,304,334);
    $time = date('d/m/Y h:i:s A');
   
    $timestamp = time();
    $cmonth = date("m");
    $day = date("d")+$days[$cmonth-1];
    $month = date("Y.m");
    
    $hour = date("h A");
	
	
	$monthv = 0;
  	$weekv = 0;
	$dayv = 0;
	$dropdown = null;	
	$dropdown = $_GET['dropdown'];
//all db queries here


$visits = mysql_query("Select count(Page) as totalvisits from log");
$totalvisits=mysql_result($visits,0,0) or die(mysql_error()); 

$last60mins = $timestamp - 3600;
	
	$date2 = mysql_query("select distinct a.ID,a.Time,a.Page,a.IP,b.countryName from log a, location b where a.IP=b.ipAddress and a.timestamp >'".$last60mins."' group by ID"); 
	$lasthourv = mysql_num_rows($date2);
$lastweek = $day - 7;
	$date4 = mysql_query("select Time,Page from log where day >= '".$lastweek."'"); 
	$weekv = mysql_num_rows($date4);
	$last2days = $day - 2;
	$date3 = mysql_query("select Distinct a.ID,a.Time,a.Page,a.IP,b.countryName from log a, location b where a.IP = b.ipAddress and a.day > '". $last2days ."' group by ID "); 
	 $dayv = mysql_num_rows($date3);
	$lastmonth = $day - 30;
	$date5 = mysql_query("select Time,Page from log where day > '".$lastmonth."'"); 
	 $monthv = mysql_num_rows($date5);
	$visitors = mysql_query("select distinct IP from log group by IP");
	$totalvisitors = mysql_num_rows($visitors);

if (isset($_POST['clear']))
    {
    mysql_query("TRUNCATE TABLE log") or die(mysql_error());
    mysql_query("TRUNCATE TABLE location") or die(mysql_error());
    echo "<center><b>All log information cleared!</b></center>";

	//Update when it was last cleared
    mysql_query("UPDATE lastcleared SET TimeLC = '" . $time . "'
      WHERE ID = '1'") or die(mysql_error());

    }

    
    $data = mysql_query("SELECT * FROM log ORDER BY ID DESC");

	
    echo "<center><h4>Log last cleared: ";

    //Output time when it was last cleared
    $dataLC = mysql_query("SELECT * FROM lastcleared");
    $rowLC = mysql_fetch_array($dataLC);

        echo $rowLC['TimeLC'];

    echo "</h4></center>";
	echo "";


 if($dropdown =='one view'){
?>
<div class="row">

	<div>
		<h3 align = "center" width = "80%">One View</h3>
     

		<table class="data">
			<tr>
				<th colspan="4">Total since <?php echo $rowLC['TimeLC'];; ?></th>
			</tr>
			<tr>
				<th>Visitors</th>
				<td><?php echo $totalvisitors; ?></td>
				<th>Visits</th>
				<td><?php echo $totalvisits; ?></td>
			</tr>
            
            <tr>
				<th>Last 2 days</th>
				<td><?php echo $dayv; ?></td>
				<th> Week</th>
				<td><?php echo $weekv; ?></td>
                <th>Last Month </th>
				<td><?php echo $monthv; ?></td>
			</tr>
            </table>
            </div>
            </div>
            
            
            
<?php
}




if( $dropdown == "overall stats" or $dropdown  == "lastmonth" or $dropdown  == "lastweek"){

  

//Pagination
$pagenum = $_GET['pagenum'];


 if (!(isset($pagenum))) 

 { 

 $pagenum = 1; 

 } 

 

 //Here we count the number of results 

 //Edit $data to be your query 

if($dropdown=='overall stats'){
 $data = mysql_query("SELECT * from log") or die(mysql_error()); 
}
else if($dropdown=='lastweek'){

 $data = mysql_query("SELECT IP from log where day > $lastweek") or die(mysql_error()); 

}
else if($dropdown=='lastmonth'){

 $data = mysql_query("SELECT IP from log where day > $lastmonth") or die(mysql_error()); 
}

 $rows = mysql_num_rows($data); 

 

 //This is the number of results displayed per page 

 $page_rows = 15; 

 

 //This tells us the page number of our last page 

 $last = ceil($rows/$page_rows); 

 

 //this makes sure the page number isn't below one, or more than our maximum pages 

 if ($pagenum <= 1) 

 { 

 $pagenum = 1; 

 } 

 elseif ($pagenum >= $last) 

 { 

 $pagenum = $last; 

 } 

/* This sets the range to display in our query */

 $max = 'limit '.($pagenum-1) * $page_rows.',' .$page_rows;


if($dropdown == "overall stats"){
 
$data_p = mysql_query("SELECT distinct b.ID, a.ipAddress,b.Time,b.Page,b.Details,a.countryCode,a.countryName,a.regionName,a.cityName,a.latitude,a.longitude,a.timeZone,b.refferer from location a, log b where a.ipAddress=b.IP group by ID $max") or die(mysql_error());

}
elseif($dropdown == "lastmonth"){
$data_p =mysql_query("select Distinct a.ID,a.Time,a.Page,b.countryName,a.IP from log a, location b where a.IP = b.ipAddress and a.day >  '".$lastmonth."' group by ID  $max" ); 

}
else {
$data_p =mysql_query("select distinct a.ID,a.Time,a.Page,b.countryName,a.IP from log a, location b where a.IP=b.ipAddress and a.day >  '".$lastweek."' group by ID $max"); 


}	
echo " <ul class='pagination'> <li class='details'> --Page $pagenum of $last-- </li>";
echo "<li class='dot'>...</li>";
    
 if ($pagenum == 1) 

 {

 } 

 else 

 {

 echo "<li> <a class = current href='{$_SERVER['PHP_SELF']}?dropdown=$dropdown&pagenum=1'> <<-First</a> </li>";

 echo " ";

 $previous = $pagenum-1;

 echo " <li><a class = current href='{$_SERVER['PHP_SELF']}?dropdown=$dropdown&pagenum=$previous'> <-Previous</a></li> ";

} 


 //just a spacer

 echo " ---- ";


 //This does the same as above, only checking if we are on the last page, and then generating the Next and Last links

 if ($pagenum == $last) 

 {

 } 

 else {

 $next = $pagenum+1;

 echo "<li> <a class = current href='{$_SERVER['PHP_SELF']}?dropdown=$dropdown&pagenum=$next'>Next -></a> </li>";

 echo "";

 echo "<li> <a class = current href='{$_SERVER['PHP_SELF']}?dropdown=$dropdown&pagenum=$last'>Last ->></a></li></ul>";
 

 } 
	
if($dropdown == 'overall stats')
{
echo "<center><table class=data><div class=row>
<div class=col span_12 clr>
		<h3>History : Total $totalvisits Visits</h3>
	
    <tr>
    <th>IP</th>
    <th>Time</th>
    <th>Page</th>
    <th>Details</th>
    <th>CountryCode</th>
    <th>CountryName</th>
    <th>RegionName</th>
    <th>CityName</th>
    <th>Latitude</th>
    <th>Longitude</th>
    <th>TimeZone</th>
    <th>Referer</th>

    </tr>";

  while($row = mysql_fetch_array($data_p))
    {
    echo "<tr>";
    echo "<td align=center>" . $row['ipAddress'] . "</td>";
    echo "<td align=center>" . $row['Time'] . "</td>";
    echo "<td align=center>" . $row['Page'] . "</td>";
    echo "<td align=center>" . $row['Details'] . "</td>";
    echo "<td align=center>" . $row['countryCode'] . "</td>";
    echo "<td align=center>" . $row['countryName'] . "</td>";
    echo "<td align=center>" . $row['regionName'] . "</td>";
    echo "<td align=center>" . $row['cityName'] . "</td>";
    echo "<td align=center>" . $row['latitude'] . "</td>";
    echo "<td align=center>" . $row['longitude'] . "</td>";
    echo "<td align=center>" . $row['timeZone'] . "</td>";
    echo "<td align=center>" . $row['refferer'] . "</td>";

    
  
    echo "</tr>";
}
	echo "</table></center>";


}
else if($dropdown=='lastmonth'){

echo "<hr>";
echo "";	
echo "<table class = data><center><div class=row>

	<div class=col span_12 clr>
		<h3>Last Month : $monthv Visitors</h3>
	<tr>
	<th >IP</th>
	<th >Time</th>
	<th >Page</th>
	<th >Country Name</th>
	</tr>";

	
 while($row8 = mysql_fetch_array($data_p))
    {
	
    echo "<tr>";
    echo "<td align=center>" . $row8['IP'] . "</td>";
    echo "<td align=center>" . $row8['Time'] . "</td>";
    echo "<td align=center>" . $row8['Page'] . "</td>";
    echo "<td align=center>" . $row8['countryName']. "</td>";   
    echo "</tr>";
    }

	
echo "</table></center>";

}

else{

echo "<hr>";
echo "";	
echo "<table class= data><center><div class=row>

	<div class=col span_12 clr>
		<h3>Last Week : $weekv Visitors</h3>
	<tr>
	<th>IP</th>	
	<th>Time</th>
	<th>Page</th>
	<th>Country</th>
	</tr>";


while($row7 = mysql_fetch_array($data_p))
    {
    echo "<tr>";
    echo "<td align=center>" . $row7['IP'] . "</td>";
    echo "<td align=center>" . $row7['Time'] . "</td>";
    echo "<td align=center>" . $row7['Page'] . "</td>";
    echo "<td align=center>" . $row7['countryName']. "</td>";   
    
    echo "</tr>";
    }
	
echo "</table></center>";

}
 echo " <ul class='pagination'> <li class='details'> --Page $pagenum of $last-- </li>";
echo "<li class='dot'>...</li>";
 
 // First we check if we are on page one. If we are then we don't need a link to the previous page or the first page so we do nothing. If we aren't then we generate links to the first page, and to the previous page.

 if ($pagenum == 1) 

 {

 } 

 else 

 {

 echo "<li> <a class = current href='{$_SERVER['PHP_SELF']}?dropdown=$dropdown&pagenum=1'> <<-First</a> </li>";

 echo " ";

 $previous = $pagenum-1;

 echo " <li><a class = current href='{$_SERVER['PHP_SELF']}?dropdown=$dropdown&pagenum=$previous'> <-Previous</a></li> ";

 } 


 //just a spacer

 echo " ---- ";


 //This does the same as above, only checking if we are on the last page, and then generating the Next and Last links

 if ($pagenum == $last) 

 {

 } 

 else {

 $next = $pagenum+1;

 echo "<li> <a class = current href='{$_SERVER['PHP_SELF']}?dropdown=$dropdown&pagenum=$next'>Next -></a> </li>";

 echo "";

 echo "<li> <a class = current href='{$_SERVER['PHP_SELF']}?dropdown=$dropdown&pagenum=$last'>Last ->></a></li></ul>";


 } 

}
 
/*implement a class */



 //This is where you display your query results
$data2  = mysql_query("SELECT distinct Page, count(Page) as Visits FROM log group by Page DESC");
 
if($dropdown=='page visits'){

 echo "<br><hr><br>";

echo "<center><table class=data><div class=row>

	<div class=col span_12 clr>
		<h3>Visits/Page</h3>
    <tr>
   <th>Page</th>
   <th>Visits</th>
   
   </tr>";

  while($row2 = mysql_fetch_array($data2))
    {
    echo "<tr>";
    echo "<td align=center>" . $row2['Page'] . "</td>";
    echo "<td align=center>" . $row2['Visits'] . "</td>";
    echo "</tr>";
    }
	
echo "</table></center>";

}





//Code for Visitors within Last Hour starts here -->

	
	
	echo "<br>";
    	

	echo "<br>";
	
	if($dropdown=="lasthour"){
echo "<hr>";
	
echo "<table class= data><center><div class=row>

	<div class=col span_12 clr>
		<h3>Last Hour : $lasthourv Visitors</h3>
		
	<tr>
	<th>IP</th>
	<th>Time</th>
	<th>Page</th>
	<th>CountryName</th>
	</tr>";


while($row5 = mysql_fetch_array($date2))
    {
    echo "<tr>";
echo "<td align=center>" . $row5['IP'] . "</td>";
    echo "<td align=center>" . $row5['Time'] . "</td>";
    echo "<td align=center>" . $row5['Page'] . "</td>";
    echo "<td align=center>" . $row5['countryName'] . "</td>";
    echo "</tr>";
    }
	
echo "</table></center>";
}
//Code for Visitors within Last Hour ends here -->

//Code for Visitors within Last 2 days starts here -->
	
	if($dropdown=="last2days"){
echo "<hr>";
echo "<table class = data><center><div class=row>

	<div class=col span_12 clr>
		<h3>Last 2 Days : $dayv Visitors</h3>
	<tr>
	<th>IP</th>
	<th>Time</th>
	<th>Page</th>
	<th>Country</th>
	</tr>";


while($row6 = mysql_fetch_array($date3))
    {
    echo "<tr>";
    echo "<td align=center>" . $row6['IP'] . "</td>";
    echo "<td align=center>" . $row6['Time'] . "</td>";
    echo "<td align=center>" . $row6['Page'] . "</td>";
    echo "<td align=center>" . $row6['countryName'] . "</td>";
    echo "</tr>";
    }
	
echo "</table></center>";

//Code for Visitors within Last 2 days ends here -->
}

echo "<hr> <br>";

?>
</body>
</html>
