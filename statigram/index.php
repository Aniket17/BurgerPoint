<?php require("head.php");
require("db.php");


echo "<link href=\"css/responsive-gs-24col.css\" rel=\"stylesheet\">\n";
echo "<link href=\"css/layout.css\" rel=\"stylesheet\">\n";
"<div id=\"page_wrap\" class=\"container row\">\n<header class=\"row\">\n<h1 class=\"col span_4\">\n<a href=\"index.php\"></a>\n</h1>\n";
"<nav id=\"global_nav\" class=\"col span_20\">\n";
?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>StatiGram: Home</title>
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
	color: #EEE;
}
.data tr th a .ani {
	color: #000;
	text-decoration: underline;
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
 

 
    
	<?php
	
	$data21 = mysql_query("SELECT distinct Page, count(Page) as Visits FROM log group by Page DESC ");
	$p = 0;
	$q = 1;
	$r = 0;
	$page1 = array();
	$visits1 = array();
	 while($row1 = mysql_fetch_array($data21))
  	  {
    		$page1[$p] = $row1['Page'];
			$visits1[$p++] = $row1['Visits'];
		
		
   	 }
		$count1 = $p;
 ?>

	<div align="center" style=" float:none">
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
	
	
	var q = 0;
	var totalpages1 = "<?php echo $count1?>";
	//document.write(totalpages);
	var page1 = new Array();
	var visits1 = new Array();
	var z1 = new Array();

	
	
	<?php 
		for ($m1 = 0; $m1 < $count1; $m1++) {
	?>
	
		var m1 = "<?php echo $m1 ?>";
		
		page1[m1] = "<?php echo $page1{"$m1"} ?>";
		visits1[m1] = "<?php echo $visits1{"$m1"} ?>";
	<?php
		}
	?>
		
	var rowArray1 = [];
      	for(var q=0;q<=totalpages1;q++){
	rowArray1.push([page1[q],(visits1[q]*1)]);
		
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
        data.addRows(rowArray1);

        // Set chart options
        var options = {'title':'My website Stats',
                       'width':500,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
      }
    </script>
  </head>


<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginheight="0" marginwidth="0" bgcolor="#FFFFFF">


<table border="0" width="100%" height = "66" cellspacing="0" cellpadding="0" background="img/topbkg.gif">
  <tr>
    <td width="50%"><div align="center"><strong><font size="5">StatiGram</font></strong></div></td>
    <td width="50%">
      <p align="right" width="327" height="66" border="0" style="background-color: #5A639C"></td>
  </tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0" background="img/blackline.gif">
  <tr>
    <td width="100%"><font color="#FFFFFF" face="Arial" size="2"><b>&nbsp;&nbsp; </b></font><font size="2" face="Arial" class="aniket"><b><a href="index.php">Home</a></b></font></b></font><b>&nbsp;<font color="#FFFFFF" face="Arial" size="2"><b>&nbsp; |&nbsp;</b></font>&nbsp;</b><font size="2" face="Arial" class="aniket"><b><a href="..">My Website</a></b></font><font face="Arial" size="2"><b></b></font><font color="#FFFFFF" face="Arial" size="2"><b>&nbsp;&nbsp; |&nbsp;&nbsp; <span class="aniket"><a href="showlogin.php">Login/</a></span><a href="showlogin.php"><span class="aniket">Logout</span></a> &nbsp;&nbsp; |&nbsp;&nbsp; <?php echo " <a href='showlog.php?dropdown=one view'><span class=aniket>View Log </span></a>"; ?><font color="#FFFFFF" face="Arial" size="2"><b>|</b></font></b>&nbsp;&nbsp;<font color="#FFFFFF" face="Arial" size="2"><b><span class="aniket"><a href="visitors.php">Top10</a></span></b></font></font> <font color="#FFFFFF" face="Arial" size="2"><b> <a href="README.txt"><u> |</u></a></b></font><font color="#FFFFFF" face="Arial" size="2"><b>&nbsp;<span class="aniket" > <a href="all_charts.php">Visualizaion Charts</a></span></b><font color="#FFFFFF" face="Arial" size="2"><b>&nbsp;&nbsp; |&nbsp;&nbsp;</b></font></font><font color="#FFFFFF" face="Arial" size="2"><b><a href="README.txt"><u>&nbsp;<span class="aniket">Help</span></u></a></b></font><u>&nbsp;</b></font></u></td>
  </tr>





</table>
<p align="center">Welcome to StatiGram!</p>
<p align="center"><strong>beta Version:</strong></p>
<p align="center">Use the links above to navigate.</p>

<?php
	
	
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
	$totalvisitors = 0;
		
	$data2 = mysql_query("SELECT distinct Page, count(Page) as Visits FROM log group by Page DESC ");
	$visits = mysql_query("Select IP from log");
	$totalvisits=mysql_num_rows($visits);

	
	$visitors = mysql_query("select distinct IP from log group by IP");
	$i=0;
	while(mysql_fetch_array($visitors))
	    {
		$i++;
		$totalvisitors = $i;   
	    }
		
		
	$last2days = $day - 2;
	$date3 = mysql_query("select Time,Page from log where day > '". $last2days ."'"); 
	$dayv = mysql_num_rows($date3);
	
	$lastmonth = $day - 30;
	$date5 = mysql_query("select Time,Page from log where day > '".$lastmonth."'");
	$monthv = mysql_num_rows($date5);
  	
	
	$lastweek = $day - 7;
	$date4 = mysql_query("select Time,Page from log where day > '".$lastweek."'"); 
	
		$weekv = mysql_num_rows($date4);
	
	 

$dataLC = mysql_query("SELECT * FROM lastcleared");
    $rowLC = mysql_fetch_array($dataLC);

?>


<div class="row">

	<div style="width:50%" >
		<h3>History </h3> 
        
        


		<table class="data">
			<tr>
				<th colspan="4">Total since <?php echo $rowLC['TimeLC']; ?></th>
			</tr>
			<tr>
				<th>Visitors</th>
				<td><?php echo $totalvisitors; ?></td>
				<th>Visits</th>
				<td><?php echo $totalvisits; ?></td>
			</tr>
            
            <tr>
				<th><a href="showlog.php?dropdown=last2days"> <span class="ani"> Last 2 Days </span></a></th>
				<td><?php echo $dayv; ?></td>
				<th><a href="showlog.php?dropdown=lastweek"> <span class="ani"> Last Week </span></a></th>
				<td><?php echo $weekv; ?></td>
                <th><a href="showlog.php?dropdown=lastmonth"> <span class="ani"> Last Month </span></a></th>
				<td><?php echo $monthv; ?></td>
			</tr>
</table>

</div>


	
      
   <body>
<div class = "row">
<table width=80% border="2"   >
  <tr>
    <td width=50%><a href="all_charts.php?dropdown=locationChart2"><h3> <u>Per Area Visits Visualisation </u>
      </h3></a><div> <?php include("tempchart.php") ?> 
    </div></td>
    <td width=50%><a href="all_charts.php?dropdown=chart"><h3> Per Page Visits Visualisation </h3></a><div id="chart_div2" style="width: 100%; height: 300px; "></div></td>
  </tr>
</table>
</div>
    
    </body>
 <footer>
 
            <p align="center"; style="float:none;">Developed by <a href="http://www.facebook.com/anidrockstar" target = "_blank">Aniket </a>and<a href="http://www.facebook.com/gankum" target = "_blank"> Ganesh</a></p>
        </footer>
        

</html>
