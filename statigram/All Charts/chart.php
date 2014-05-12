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
.graph {
	color: #EEE;
}
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>StatiGram: View Log</title>
<link href="file:///C|/Users/Aniket/Desktop/metroworld.com/j/stat.css" rel="stylesheet" type="text/css">
</head>
<body>

<h3> Pages Visited/Visits Visualisation </h3>

	<?php
	
	$data2 = mysql_query("SELECT distinct Page, count(Page) as Visits FROM log group by Page DESC ");
	$i = 0;
	$j = 1;
	$k = 0;
	$page = array();
	$visits = array();
	 while($row2 = mysql_fetch_array($data2))
  	  {
    		$page[$i] = $row2['Page'];
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
	var page = new Array();
	var visits = new Array();
	var z = new Array();

	
	
	<?php 
		for ($m = 0; $m < $count; $m++) {
	?>
	
		var m = "<?php echo $m ?>";
		
		page[m] = "<?php echo $page{"$m"} ?>";
		visits[m] = "<?php echo $visits{"$m"} ?>";
	<?php
		}
	?>
		
	var rowArray = [];
      	for(var j=0;j<=totalpages;j++){
	rowArray.push([page[j],(visits[j]*1)]);
		
	}	
	
      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
	
      function drawChart() {

        // Create the data table.
	

	var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows(rowArray);

        // Set chart options
        var options = {'title':'My website Stats',
                       'width':800,
                       'height':650};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
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
