
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

<center>
<script>
function change(dropdown){

   
    var myindex  = dropdown.selectedIndex;
    var SelValue = dropdown.options[myindex].value;
       
    
        

    var baseURL  = "all_charts.php?dropdown="+SelValue;
    top.location.href = baseURL;
    
    return true;
}
</script>

<form style="margin-top:20px">
<strong>Select Chart</strong> &nbsp;
  <select id="dropdown" name="dropdown"  onChange = 'change(this.form.dropdown)' >
    <option>   &nbsp; --<strong>select </strong>-- <hr /></option>
    <option value="chart" > &nbsp; <strong>Page Pie Chart</strong> <br /></option>
    <option value="locationChart2"> &nbsp; <strong>WorldMap</strong></option>
    <option value="hour"> &nbsp; <strong>Hourly Visits Chart</strong></option>
    <option value="traficchart"> &nbsp; <strong>Monthly Visits Chart</strong></option>
        
    
</select>
<noscript><INPUT type="submit" value="Go" name=submit1></noscript>

</form>
</center>


<?php
$dropdown = $_GET['dropdown'];

switch($dropdown){

case 'chart':
require('All Charts/chart.php');
break;

case 'locationChart2':
require('All Charts/locationChart2.php');
break;


case 'traficchart':
require('All Charts/traficchart.php');
break;


case 'hour':
require('All Charts/hour.php');

default:
require('All Charts/chart.php');
}

?>
