<?php require("head.php");
//echo "<link href=\"css/reset.css\" rel=\"stylesheet\">\n";
echo "<link href=\"css/responsive-gs-24col.css\" rel=\"stylesheet\">\n";
echo "<link href=\"css/layout.css\" rel=\"stylesheet\">\n";
echo "<link href=\"css/buttons.css\" rel=\"stylesheet\">\n";
//echo "<!--[if lt IE 9]>\n<link href=\"css/ie.css\" rel=\"stylesheet\">\n<![endif]-->\n";
/*echo "<script src=\"js/Chart.min.js\"></script>\n";*/
//echo "</head>\n<body>\n";

//echo "<div id=\"page_wrap\" class=\"container row\">\n<header class=\"row\">\n<h1 class=\"col span_4\">\n<a href=\"index.php\"></a>\n</h1>\n";
//echo "<nav id=\"global_nav\" class=\"col span_20\">\n";?>

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
           </b></font><font size="2" face="Arial" class="aniket"><b><a href="index.php">Home</a></b></font><font color="#FFFFFF" face="Arial" size="2"><b>&nbsp;&nbsp; |&nbsp;&nbsp;
           <span class="aniket"><a href="showlogin.php">Login/</a></span>
           <a href="showlogin.php"><span class="aniket">Logout</span></a> &nbsp;&nbsp; |&nbsp;&nbsp;
    		<?php echo " <a href='showlog.php?dropdown=one view'><span class=aniket>View Log</span></a>"; ?> &nbsp;&nbsp; |&nbsp;<font color="#FFFFFF" face="Arial" size="2"><b> <span class="aniket"><a href="visitors.php">Top10</a></span></b></font><span class="aniket" > <a href="all_charts.php">&nbsp;<font color="#FFFFFF" face="Arial" ><b>|&nbsp;</b></font>Visualizaion Charts</a></span></b></font></td>
    
  </tr>
</table>
<p>
	
<?php require('log.php'); ?></p>


</body>

<footer>
            <p align="center" style="float:none">Developed by <a href="http://www.facebook.com/anidrockstar">Aniket </a>and<a href="http://www.facebook.com/gankum"> Ganesh</a></p>
        </footer>

</html>
