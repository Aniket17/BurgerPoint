<?php 
	
	 $dataloc = mysql_query("SELECT distinct b.countryName, count(a.Page) as countrycount from location b, log a where a.IP=b.ipAddress group by ID");
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
    <div id="chart_div"  style="width: 100%; height: 300px;"></div>
  </body>

