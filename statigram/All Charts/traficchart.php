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



<h3> Pages Visited/Visits Visualisation </h3>

	<?php


	$m = date("m");
	$lastmonth = $m -1;
	
	$data2 = mysql_query("SELECT distinct cmonth, count(cmonth) as Visits FROM log where cmonth >".$lastmonth." group by cmonth DESC ");
	$i = 0; 
	$j = 1;
	$k = 0;
	$page = array();
	$visits = array();
	 while($row2 = mysql_fetch_array($data2))
  	  {
    		$month[$i] = $row2['cmonth'];
		$visits[$i++] = $row2['Visits'];
		
		
   	 }
		$count = $i;
 ?>

	<div align="center" style=" float:none">
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
	
	
	var j = 0;
	var totalpages = "<?php echo $count?>";
	//document.write(totalpages);
	var month = new Array();
	var visits = new Array();
	var z = new Array();

	
	
	<?php 
		for ($m = 0; $m < $count; $m++) {
	?>
	
		var m = "<?php echo $m ?>";
		
		month[m] = "<?php echo $month{"$m"} ?>";
		visits[m] = "<?php echo $visits{"$m"} ?>";
	<?php
		}
	?>
		
	var rowArray = [];
      	for(var j=0;j<=totalpages;j++){
	if(month[j]==4){
		month[j] = 'April';
	}
	if(month[j]==3){
		month[j] = 'March';
	}
	
	if(month[j]==5){
		month[j] = 'May';
	}

	if(month[j]==6){
		month[j] = 'June';
	}

	if(month[j]==7){
		month[j] = 'July';
	}

	if(month[j]==8){
		month[j] = 'August';
	}
	if(month[j]==9){
		month[j] = 'Sept';
	}
	if(month[j]==10){
		month[j] = 'Oct';
	}
	if(month[j]==11){
		month[j] = 'Nov';
	}
	if(month[j]==12){
		month[j] = 'Dec';
	}
	if(month[j]==1){
		month[j] = 'Jan';
	}
	
	if(month[j]==2){
		month[j] = 'Feb';
	}
	rowArray.push([month[j],(visits[j]*1)]);
		
	}	
	
      google.load('visualization', '1.0', {'packages':['corechart']});

      google.setOnLoadCallback(drawChart);

	
      function drawChart() {

        // Create the data table.
	

	var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Visits');
        data.addRows(rowArray);

        // Set chart options
        var options = {'title':'My website Stats',
						hAxis: {title: 'Month',  titleTextStyle: {color: 'green'}},
						vAxis: {title: 'Visits',  titleTextStyle: {color: 'green'}},
                       'width':800,
                       'height':650};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
<footer>
            <p align="center" style="float:none">Developed by <a href="http://www.facebook.com/anidrockstar">Aniket </a>and<a href="http://www.facebook.com/gankum"> Ganesh</a></p>
        </footer>
</html>
