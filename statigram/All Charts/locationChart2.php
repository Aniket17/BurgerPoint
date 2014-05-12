<?php require("db.php");
echo "<link href=\"css/responsive-gs-24col.css\" rel=\"stylesheet\">\n";
echo "<link href=\"css/layout.css\" rel=\"stylesheet\">\n";
?>
<html>
  <head>
  
  	<style type="text/css">
.aniket {
	color: #9CF;
}
.aniket {
	color: #9CC;
}
.aniket b a {
	color: #FFF;
}
.aniket a {
	color: #FFF;
}
.aniket {
	color: #FFF;
}
.aniket {
	color: #FFF;
}
.aniket {
	color: #FFF;
}
.aniket {
	color: #FFF;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>StatiGram: View Log</title>
<link href="file:///C|/Users/Aniket/Desktop/metroworld.com/j/stat.css" rel="stylesheet" type="text/css">
</head>

<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginheight="0" marginwidth="0" bgcolor="#FFFFFF">





<h3> Per Area Visits Visualisation </h3>


		<?php 
	
	 $dataloc = mysql_query("SELECT countryName, regionName, cityName, latitude, longitude, timeZone,count( countryName) as countrycount from location group by countryName");
	$i = 0;
	$j = 1;
	$k = 0;
	$countryname = array();
	$countrycount = array();
	 while($row2 = mysql_fetch_array($dataloc))
  	  {
    		$countryname[$i] = $row2['countryName'];
		$countrycount[$i++] = $row2['countrycount'];
		
		
   	 }
		$count = $i;
 ?>


    <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>


	var j = 0;
	var total = "<?php echo $count?>";
	//document.write(totalpages);
	var countryname = new Array();
	var countrycount = new Array();
	var z = new Array();

	
	
	<?php 
		for ($m = 0; $m < $count; $m++) {
	?>
	
		var m = "<?php echo $m ?>";
		
		countryname[m] = "<?php echo $countryname{"$m"} ?>";
		countrycount[m] = "<?php echo $countrycount{"$m"} ?>";
	<?php
		}
	?>
		
	var rowArray = [];
      	for(var j=0;j<=total;j++){
	rowArray.push([countryname[j],(countrycount[j]*1)]);
}

	

     google.load('visualization', '1', {'packages': ['geochart']});
     google.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {


	var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Visits');
        data.addRows(rowArray);
        //var data = google.visualization.arrayToDataTable();
	//data.addRows(rowArray);

        var options = {
      colorAxis: {colors: ['green', 'blue']},
      sizeAxis: {minValue: 0, maxValue: 500, minSize: 1, maxSize: 500},
      enableRegionInteractivity: true,
      legend: 'none'};

        var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    };
    </script>

<body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>

<footer>
           <p align="center" style="float:none">Developed by <a href="http://www.facebook.com/anidrockstar">Aniket </a>and<a href="http://www.facebook.com/gankum"> Ganesh</a></p>
        </footer>
</html>
