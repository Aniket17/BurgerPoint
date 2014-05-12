<?php
include_once("db.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Burger Point</title>
<meta name="keywords" content="Burger Point" />
<meta name="description" content="Burger khao..khush raho" />
<link rel="stylesheet" href="style/reset.css" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="style/menu.css" />
<link rel="stylesheet" href="style/nivo-slider.css"/>
<link rel="stylesheet" type="text/css" href="style/demo.css" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|Open+Sans' rel='stylesheet' type='text/css'>

<script src="js/modernizr.custom.97121.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/prefixfree.min.js"></script>
<script type="text/javascript" src="js/snap.js"></script>
<link rel="shortcut icon" type="image/png" href="images/BurgerPoint_logo_Final.png">

</head>

<body>

<!--mobile content here-->
 <div class="snap-drawers">
            <div class="snap-drawer snap-drawer-left">
             <div>
                    
                    <div class="demo-social" align="center" >
                    
                    </div>
                    <h3></h3>
                    <ul>
          <li><a href="index.php" class="current">Home</a></li> 
          <li><a href="menu.php" >Order Now</a></li>    
          <li><a href="about.php">Our Story</a></li>     
          <li><a href="find.php">Find Us</a></li>   
         </ul>
         	</div>
          </div>
         </div>  
         
        <div id="content" class="snap-content">
            <div id="toolbar">
                <a href="#" id="open-left"></a>
                <h1> <a href="index.php">
                <p style="font-family:'Bree Serif'; font-weight:bold; vertical-align:middle; " align="center">
               
               <img src="images/Name Png_50dpi.png" width="120" height="40" style="padding:3px 0px 3px 0px" />
               </p>
               </a>
               </h1>
            </div>
            
            <!--mainpage content here-->
             <div id="slider_section_mobile"  align="center" style="margin-top:20%">           
 <div class="slider-wrapper theme-default" align="center" >
             <div id="slider_mobile" class="nivoSlider" align="center" >
               <img src="images/slider/1.Coke.jpg" data-thumb="images/slider/1.Coke.jpg" alt="" data-transition="slideInRight" style="visibility:hidden; display:inline" />
               <img src="images/slider/Veg Maharaja.jpg" data-thumb="images/slider/1.Coke.jpg" alt="" data-transition="slideInRight" style="visibility:hidden; display:inline" />
               <img src="images/slider/popcorn.jpg" data-thumb="images/slider/popcorn.jpg" alt="" data-transition="slideInRight" style="visibility:hidden; display:inline" />
               <img src="images/slider/Cad-B.jpg" data-thumb="images/slider/Cad-B.jpg" alt="" data-transition="slideInRight" style="visibility:hidden; display:inline"  />

            </div>
           
        </div>

    </div>
    
<?php 
require('footer_mobile.php');
?>
        <script type="text/javascript" src="js/snap.js"></script>
        <script type="text/javascript">
            var snapper = new Snap({
                element: document.getElementById('content'),
                disable: 'right'
            });
            
        </script>
        <script type="text/javascript" src="js/demo.js"></script>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>     

<div class="mainpage" align="center">
<table border="0" width="100%" cellpadding="0" align="center">
  <tr >
    <th width="23%" valign="top" scope="col" align="center"><a href="index.php"><img src="images/BurgerPoint_logo_Final.png" alt="a" width="136" height="130" style="padding-left:20px;padding-top:0px; margin-top:0px; padding-right:0px; float:left"/></a>
</th>
    <th colspan="3" align="left" valign="middle" style="padding-left:2.6%" scope="col">

   <nav>     
      <div id="menu">
        <ul>
          <li><a href="find.php">Find Us</a></li>
          <li><a href="about.php">Our Story</a></li>
          <li><a href="menu.php" >Order Now</a></li>
          <li><a href="index.php" class="current">Home</a></li>
         </ul>
  </div>
  </nav>
</th>
    </tr>
  
  <tr>
  <td colspan="5" align="center"> 
 
  <div id="slider_section"  align="center">           
 <div class="slider-wrapper theme-default" align="center" >
             <div id="slider" class="nivoSlider" align="center" >
               <img src="images/slider/1.Coke.jpg" data-thumb="images/slider/1.Coke.jpg" alt="" data-transition="slideInRight" style="visibility:hidden; display:inline" />
               <img src="images/slider/Veg Maharaja.jpg" data-thumb="images/slider/1.Coke.jpg" alt="" data-transition="slideInRight" style="visibility:hidden; display:inline" />
               <img src="images/slider/popcorn.jpg" data-thumb="images/slider/popcorn.jpg" alt="" data-transition="slideInRight" style="visibility:hidden; display:inline" />
               <img src="images/slider/Cad-B.jpg" data-thumb="images/slider/Cad-B.jpg" alt="" data-transition="slideInRight" style="visibility:hidden; display:inline"  />

            </div>
           
        </div>

    </div>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
		$('#slider_mobile').nivoSlider();
    });
    </script>
  
    <style>
	.footer{
		margin-top:50px;
		}
	</style>
    <!--<div id="testimonials">
      <script src="js/test.js"></script>
      </div>-->
  </td>
  </tr>
 </table>
 
<?php require('footer.php');?>
<script type="text/javascript" src="js/snap.js"></script>
        <script type="text/javascript">
            var snapper = new Snap({
                element: document.getElementById('content'),
                disable: 'right'
            });   
        </script>
        <script type="text/javascript" src="js/demo.js"></script>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
</body>
</html>