
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<link rel="stylesheet" type="text/css" href="style/demo.css" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|Open+Sans' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/png" href="images/BurgerPoint_logo_Final.png">

<style>
.address span img{
width:20px;
height:20px;
margin-bottom:4px;	
}
</style>
<script src="js/modernizr.custom.97121.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/prefixfree.min.js"></script>
<script type="text/javascript" src="js/snap.js"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/s3Slider.js"></script>
	<script src="js/Quicksand_Book_400.font.js" type="text/javascript"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('span,h3,h1,a',{
			textShadow: '0px 0px 1px #ffffff'
		});
	</script>
	<script type="text/javascript">
	var k;

		$(document).ready(function() 
		{
			$('#slider1').s3Slider({
				timeOut: 3000 
			});
			$("#accordian h3").click(function(){
		//slide up all the link lists
		$("#accordian ul ul").slideUp();
		//slide down the link list below the h3 clicked - only if its closed
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown();
		}
	})
		});
	</script>

</head>

<body>

<div class="mobile">

<div class="snap-drawers">
            <div class="snap-drawer snap-drawer-left">
             <div>
                   <div class="demo-social">
                    
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

<div class="map_wrapper" style="display:block">

<div class="map" style="display:block; margin-top:50px">
<iframe width="320" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=BURGER+POINT,+Opposite+GMC+Boys+Hostel,Jath+Road,Miraj.,+Othonial+Colony,+Miraj,+Maharashtra&amp;aq=0&amp;oq=burge&amp;sll=16.843054,74.603912&amp;sspn=0.048057,0.084543&amp;ie=UTF8&amp;hq=BURGER+POINT,+Opposite+GMC+Boys+Hostel,Jath+Road,Miraj.,&amp;hnear=Othonial+Colony,+Miraj,+Sangli,+Maharashtra&amp;t=m&amp;cid=5167003989712416739&amp;ll=16.847919,74.648409&amp;spn=0.032859,0.042486&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
</div>

<div class="address" style="display:block">

<p style="font-family:Tahoma, Geneva, sans-serif; padding:60px; padding-left:80px;  padding-bottom:5px; font-weight:bolder; color:#83745D">

<span style="margin-right:5px;	
"><img src="images/Contact Icon/address.png" /></span><strong style="font:'Bree Serif'">BURGER POINT</strong>
<br />


<p style="font-weight:100;font-family:kalinga; padding-top:2px; padding-left:100px; color:#83745D">Opposite GMC Boys Hostel, <br />Jath Road,Miraj.
Othonial Colony</p>
<p style="font-weight:100; font-family:kalinga;padding-top:2px; padding-left:100px; color:#83745D">Miraj, Maharashtra 416410.
</p>


</p>

<div  style="font-weight:normal; padding-top:27px; padding-left:80px; color:#83745D">
<p>
<span  style="margin-right:5px;	
"><img src="images/Contact Icon/Timing.png" /></span><strong>Timing</strong>:<br /> <p style="padding-left:20px;">04:30pm to 10:30pm</p>
</p>
<p style="padding-top:25px">
<span style="margin-right:5px;	
"><img src="images/Contact Icon/email.png" /></span><strong >Email us</strong>:<br /><p style="padding-left:20px;">contact@burgerpoint.co.in
</p></p>
<p style="padding-top:25px">
<span  style="margin-right:5px;	
"><img src="images/Contact Icon/mobile.png" /></span><strong >Phone No</strong><br /><p style="padding-left:20px;">9595963430
</p></p>

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
</div> 
</div>
</div>
</div> 



<?php
require('header.php');
?>
<div class="map_wrapper" >
<div class="address">

<p style="font-family:kalinga; padding:60px; padding-left:80px;  padding-bottom:5px; font-weight:bolder; color:#83745D">

<span style="margin-right:5px;	
"><img src="images/Contact Icon/address.png" /></span><strong style="font:'Bree Serif'; color:#000;">BURGER POINT</strong>
<br />

<p style="font-weight:100;font-family:kalinga; padding-top:2px; padding-left:100px; color:#83745D">Opposite GMC Boys Hostel, <br />Jath Road,Miraj.
Othonial Colony</p>
<p style="font-weight:100; font-family:kalinga;padding-top:2px; padding-left:100px; color:#83745D">Miraj, Maharashtra 416410.
</p>


</p>

<div  style="font-weight:normal; padding-top:27px; padding-left:80px; color:#83745D;font-family:kalinga;" >
<p >
<span  style="margin-right:5px;	
"><img src="images/Contact Icon/Timing.png" /></span><strong style="font:'Bree Serif'; font-weight:bold;color:#000;" >Timing</strong>:<br /> <p style="padding-left:20px;">04:30pm to 10:30pm</p>
</p>
<p style="padding-top:25px;font-family:kalinga;">
<span style="margin-right:5px;	
"><img src="images/Contact Icon/email.png" /></span><strong  style="font:'Bree Serif'; font-weight:bold;color:#000;">Email us</strong>:<br /><p style="padding-left:20px;font-family:kalinga;">contact@burgerpoint.co.in
</p></p>
<p style="padding-top:25px;font-family:kalinga;">
<span  style="margin-right:5px;font-family:kalinga;	
"><img src="images/Contact Icon/mobile.png" /></span><strong style="font:'Bree Serif'; font-weight:bold;color:#000;">Phone No</strong><br /><p style="padding-left:20px;">9595963430
</p></p>

</div>
</div>
<div class="map">
<iframe width="640" height="390" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=BURGER+POINT,+Opposite+GMC+Boys+Hostel,Jath+Road,Miraj.,+Othonial+Colony,+Miraj,+Maharashtra&amp;aq=0&amp;oq=burge&amp;sll=16.843054,74.603912&amp;sspn=0.048057,0.084543&amp;ie=UTF8&amp;hq=BURGER+POINT,+Opposite+GMC+Boys+Hostel,Jath+Road,Miraj.,&amp;hnear=Othonial+Colony,+Miraj,+Sangli,+Maharashtra&amp;t=m&amp;cid=5167003989712416739&amp;ll=16.847919,74.648409&amp;spn=0.032859,0.042486&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
</div>
</div>


<style>
.footer{
margin-top:30px;
}
</style>
<?php require('footer.php');?>

</div>
</body>
</html>