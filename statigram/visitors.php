<?php
require("db.php");
echo "<link href=\"css/responsive-gs-24col.css\" rel=\"stylesheet\">\n";
echo "<link href=\"css/layout.css\" rel=\"stylesheet\">\n";
echo "<link href=\"css/buttons.css\" rel=\"stylesheet\">\n";
?>
<html>
<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginheight="0" marginwidth="0" bgcolor="#FFFFFF">

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
 
<table border="0" width="100%" height = "66" cellspacing="0" cellpadding="0" background="img/topbkg.gif">
  <tr>
    <td width="50%"><div align="center"><strong><font size="5">StatiGram</font></strong></div></td>
    <td width="50%">
      <p align="right" width="327" height="66" border="0" style="background-color: #5A639C"></td>
  </tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0" background="img/blackline.gif">
  <tr>
    <td width="100%"><font color="#FFFFFF" face="Arial" size="2"><b>&nbsp;&nbsp;
          </b></font><font size="2" face="Arial" class="aniket"><b><a href="index.php">Home</a></b></font></b></font><b>&nbsp;<font color="#FFFFFF" face="Arial" size="2"><b>&nbsp; |&nbsp;</b></font>&nbsp;</b><font size="2" face="Arial" class="aniket"><b><a href="..">My Website</a></b></font><font face="Arial" size="2"><b></b></font><font color="#FFFFFF" face="Arial" size="2"><b>&nbsp;&nbsp; |&nbsp;&nbsp; <span class="aniket"><a href="showlogin.php">Login/</a></span><a href="showlogin.php"><span class="aniket">Logout</span></a> &nbsp;&nbsp; |&nbsp;&nbsp;
    <?php echo " <a href='showlog.php?dropdown=one view'><span class=aniket>View Log </span></a>"; ?><font color="#FFFFFF" face="Arial" size="2"><b>|</b></font></b>&nbsp;&nbsp;<font color="#FFFFFF" face="Arial" size="2"><b><span class="aniket"><a href="visitors.php">Top10</a></span></b></font></font> <font color="#FFFFFF" face="Arial" size="2"><b> <a href="README.txt"><u> |</u></a></b></font><font color="#FFFFFF" face="Arial" size="2"><b>&nbsp;<span class="aniket" > <a href="all_charts.php">Visualizaion Charts</a></span></b><font color="#FFFFFF" face="Arial" size="2"><b>&nbsp;&nbsp; |&nbsp;&nbsp;</b></font></font><font color="#FFFFFF" face="Arial" size="2"><b><a href="README.txt"><u>&nbsp;<span class="aniket">Help</span></u></a></b></font><u>&nbsp;</b></font></u> </td>
  </tr>





</table>


<table width="1107" class = data>
<div class="row">
<tr>
<th>


	<div class="col span_24 clr">
		<h3>Referrer Top10</h3>

		<table class="data">
			<tr>
				<th>#</th>
				<th>Referrer</th>
				<th>%</th>
			</tr>
<?php
$i = 0;
$refstm = mysql_query("select refferer,count(refferer) as refcount from log group by refferer order by refcount desc") or die("query");
$refstm2 = mysql_query("select refferer from log") or die("query");
$number = mysql_num_rows($refstm2);
while($rsref = mysql_fetch_array($refstm))
{

?>




			<tr>
			<td align =center><?php echo ++$i ?></td>
			<td align =center><?php echo $rsref['refferer']?></td>
			<td align =center><?php echo $rsref['refcount']*100/$number?></td>
			</tr>
<?php
}
?>
		
		</table>
	</div>
</th>
<th>
	<div class="col span_24 clr">
		<h3>Pages Top10</h3>

		<table class="data">
			<tr>
				<th>#</th>
				<th>Page</th>
				<th>%</th>
			</tr>
<?php
$i = 0;
$refstm = mysql_query("select Page,count(Page) as pagecount from log group by Page order by pagecount desc") or die("query");
$refstm2 = mysql_query("select Page from log") or die("query");
$number = mysql_num_rows($refstm2);
while($rsref = mysql_fetch_array($refstm))
{

?>




			<tr>
			<td align =center><?php echo ++$i ?></td>
			<td align =center><?php echo $rsref['Page']?></td>
			<td align =center><?php echo $rsref['pagecount']*100/$number?></td>
			</tr>
<?php
}
?>



		</table>
	</div>

</th>
</tr>
</div>
<div class="row">
<tr>

<th height="316">


	<div class="col span_24 clr">
		<h3>Countries</h3>
		<table class="data">
			<tr>
				<th>#</th>
				<th>Country</th>
				<th>%</th>
			</tr>
<?php
$i = 0;
$refstm = mysql_query("select countryName,count(countryName) as countrycount from location group by countryName order by countrycount desc") or die("query");
$refstm2 = mysql_query("select countryName from location") or die("query");
$number = mysql_num_rows($refstm2);
while($rsref = mysql_fetch_array($refstm))
{

?>




			<tr>
			<td align =center><?php echo ++$i ?></td>
			<td align =center><?php echo $rsref['countryName']?></td>
			<td align =center><?php echo $rsref['countrycount']*100/$number?></td>
			</tr>
<?php
}
?>

		</table>
	</div>
</th>
<th>
	<div class="col span_24 clr">
		<h3>Months Top10</h3>
		<table class="data">
			<tr>
				<th>#</th>
				<th>Months</th>
				<th>%</th>
			</tr>
<?php
$i = 0;
$refstm = mysql_query("select cmonth,count(cmonth) as mcount from log group by cmonth order by mcount desc") or die("query");
$refstm2 = mysql_query("select cmonth from log") or die("query");
$number = mysql_num_rows($refstm2);
while($rsref = mysql_fetch_array($refstm))
{
$month = null;
switch($rsref['cmonth']){

case 1:
$month = 'January';
break;
case 2:
$month = 'February';
break;
case 3:
$month = 'March';
break;
case 4:
$month = 'April';
break;
case 5:
$month = 'May';
break;
case 6:
$month = 'June';
break;
case 7:
$month = 'July';
break;
case 8:
$month = 'August';
break;
case 9:
$month = 'September';
break;
case 10:
$month = 'October';
break;
case 11:
$month = 'November';
break;
case 2:
$month = 'December';
break;

}


?>




			<tr>
			<td align =center><?php echo ++$i ?></td>
			<td align =center><?php echo $month ?></td>
			<td align =center><?php echo $rsref['mcount']*100/$number?></td>
			</tr>
<?php
}
?>

		</table>
	</div>


</th>
</tr>
</div>
</table>

</body>
</html>
