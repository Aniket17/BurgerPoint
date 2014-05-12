<?php
session_start();
include_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Order</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="keywords" content="Burger Point, Miraj" />
<meta name="description" content="Burger khao..khush raho" />
<link rel="stylesheet" href="style/reset.css" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="style/menu.css" />
<link rel="stylesheet" href="style/alertify.core.css" />
<!-- include a theme, can be included into the core instead of 2 separate files -->
<link rel="stylesheet" href="style/alertify.default.css" />
<link rel="stylesheet" href="style/demo.css" />
<link rel="shortcut icon" type="image/png" href="images/BurgerPoint_logo_Final.png">

<!-- include the core styles -->


<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|Open+Sans' rel='stylesheet' type='text/css'>

<script src="js/modernizr.custom.97121.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/prefixfree.min.js"></script>
 
<script src="js/jquery-1.7.1.js"></script>
<script src="js/jquery.blockUI.js" type="application/javascript"></script>
<script src="js/alertify.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
    $('#orderclick').click(function() { 
	
		$.blockUI({ message: $('#loginForm'), css: { 
				top:  ($(window).height() - 400) /2 + 'px', 
                left: ($(window).width() - 400) /2 + 'px', 
                width: '300px',
				height: '250px',
				 }  
		});	
    });
	
    $('#order2click').click(function() {   	
		$.blockUI({ message: $('#loginForm'), css: { 
				top:  '50px', 
                left: '0px', 
                width: '210px',
				height: '150px',
				margin:0
				 }  
		});	
    });
	
    $('#submit').click(function() {
    	var name = document.getElementById('name').value;
		var number = document.getElementById('number').value;;
		var city = document.getElementById('city').value;
		//alert(name+number+city);
		var number_val = isNaN(number);
			
			
	    if((name==null || name=="")||(number==null || number=="")||(city==null || city=="")){	
			//$.growlUI('Dumb Asshole', 'Please fill the form so We can Deliver your Delicious Order.!');
			
				alert('Please fill the form so We can Deliver your Delicious Order!');
				$.blockUI({ message: $('#loginForm'), css: { 
				top:  ($(window).height() - 400) /2 + 'px', 
                left: ($(window).width() - 400) /2 + 'px', 
                width: '250px'  }  
		});	
			
			
		}else if(number_val){
				alert('Enter Valid 10 Digit Numeric Number');
				$.blockUI({ message: $('#loginForm'), css: { 
				top:  ($(window).height() - 400) /2 + 'px', 
                left: ($(window).width() - 400) /2 + 'px', 
                width: '300px',
				height: '250px',
				 }  
		});	
			}	
			else{
				//alert('something');
				window.location.assign("view_cart.php?name="+name+"&number="+number+"&city="+city);
				}
		
	});
	
	 $('#close').click(function() {
		$.unblockUI(); 
 });
	
	
	
});
</script>
<style>
div.growlUI { background: url(images/check48.png) no-repeat 5px 10px }
div.growlUI h1{
 color: white; 
 padding: 5px 5px 5px 55px;
 text-align: left;
 font-weight:bold; 
 font-family:"Bree Serif";
}
 div.growlUI h2 {
 color: white; padding: 5px 5px 5px 75px; text-align: left;
 font-weight:500; font-family:Arial, Helvetica, sans-serif; word-break:normal; word-wrap:break-word;
 font-size:16px;
}
.error { color:#F8525F;  font-family:Arial, Helvetica, sans-serif; font-weight:500; font-size:12px; } 
</style>
</head>

<body>
<div id="loginForm" style="display:none">
<form name="myForm" method="post">
<table  border="0" cellpadding="3" width="50%">
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td><label>Your Name:</label></td>
    <td> <p class="input"><input type="text" name="demo1" class="required" id="name" placeholder="Your Name" value="" /></p></td>
  </tr>
  <tr>
    <td><label>City:</label></td>
    <td><p><input type="text" name="demo1" class="required" placeholder="Your City" id="city" value="" /></p></td>
  </tr>
  <tr>
    <td><label>Mobile:</label></td>
    <td><p><input type="text" name="demo1" class="required" placeholder="Valid Mobile No." id="number" maxlength="10" value="" /></p>
    <br /> 
    </td>
  </tr>
  <tr>
  <td colspan="4"></td>
  
  </tr>
  <tr>
    <td><p><input type="button" name="demo1" id="submit" class="orange" value="Confirm" style="font-family:Arial, Helvetica, sans-serif" /></p></td>
    <td><p><input type="button" name="demo1" id="close" class="orange" value="Close" style="font-family:Arial, Helvetica, sans-serif"/></p></td>
  </tr> 
</table>
</form>
</div>

<div class="snap-drawers">
            <div class="snap-drawer snap-drawer-left">
             <div>
                    <div class="demo-social">
                    <a href="index.php"><img src="images/BurgerPoint_logo_Final.png" alt="a" width="45" height="45" style="padding:0px; margin:0px; padding-right:2px; float:left"/></a>
                    </div>
                    <h3>Burger Point</h3>
                    <ul>
          <li><a href="index.php" >Home</a></li> 
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
    <div id="products-wrapper">
 <h3 style="font-family:'kalinga'; color:#f93; font-size:25px">View Cart</h3>
 <div class="view-cart">
 	<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" action="smser.php">';
		 echo'<div class="viewcarttable">';
	echo'<table><thead style="background:green"><tr align="center" style="float:none; "><th align="center" width="60%">Item</th><th align="center" width="20%">Qty</th><th align="center" width="20%">Price</th></tr></thead>';
    echo '<ol>';
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["id"];
		   $results = mysql_query("SELECT * FROM menu WHERE id='$product_code' LIMIT 1");
		   $obj =  mysql_fetch_array($results);
		   
		    echo '<tr>';
			
			//echo '<div class="p-price">'.$currency.$obj['price'].'</div>';
            echo '<div class="product-info">';
			echo '<td><li class="cart-itm"><h3>'.$obj['name'].'</h3> </td>';
            echo '<td><div class="p-qty"><h4> '.$cart_itm["qty"].'</h4></div></td>';
            echo '<td><div><h4>'.$obj['price'].'<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["id"].'&return_url='.$current_url.'">&times;</a>
			</span></h4>
			</div>
			</td>
			';
			echo '</div>';
            echo '</li>
			</tr>';
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj['name'].'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_price['.$cart_items.']" value="'.$obj['price'].'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
			
        }
    	echo '</ul><tfoot style="background:#FFF;"><tr>';
		echo '<td colspan="2" align="left" style="padding:5px;padding-bottom:5px"><input type="button" class="orange" id="order2click" value="Order Now" /></td>';
		echo '</form>';
		echo '<td  align="left" style="padding:5px; padding-bottom:5px"><span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong></span></td></tr></tfoot></table>';
    }else{
		echo 'Your Cart is empty';
	}
	
    ?>
    </div>
</div>
<div class="footer_mobile" >
<div id="footer_element" align="center">
<img src="images/footer/testimonials.png"/>Testimonials
</div>
<div id="footer_element" align="center" style=" background:#565756; color:#FFF">
<img src="images/footer/twitter.png"/> Follow us
</div>
<div id="footer_element" align="center">
<img src="images/footer/facebook.png"/>Like our Page
</div>
<div id="footer_element" align="center" style="background:#65C6E2;color:#FFF">
<img src="images/footer/foursquare.png"/>Check in Here
</div><img src="images/footer/footer.jpg" style="width:100%"/>

</div>
</div>
</div>
  
<?php
if(isset($_GET['name']) && isset($_GET['number']) && isset($_GET['city'])){
$name = $_GET['name'];
$number = $_GET['number'];
$city = $_GET['city'];	
mysql_query("insert into orders (name,number,city) VALUES('$name','$number','$city')");
?>
<?php
require('header.php');
?>
<div class="thankyou">

<h2>Your Order recieved successfully. You will shortly receive a call for Confirmation.</h2>
<p> <a href="menu.php" style="text-decoration:underline; color:#003"> You can go back to your order menu </a></p>

<iframe src="https://www.testifor.com/business_testimonial?srcurl=http://t.t4x.in&amp;code=/2SFWNU" width="800px" style="padding:25px; height:600px; overflow:none">

</iframe>

</div>
<?php 
include('footer.php');
?>

<script>
$.growlUI('Thank You', 'Your Order added successfully. Have a nice day!');
//window.location.assign('/lhm/');
</script>
<?php
die();
}

?>

  
<div class="mainpage" style="background:url(images/View_Cart%20BG.png) repeat">
<table border="0" width="100%" cellpadding="0" style=" float:none;  ">
  <tr>
    <th width="23%" valign="top" scope="col"><a href="index.php"><img src="images/BurgerPoint_logo_Final.png" alt="a" width="136" height="130" style="padding-left:20px;padding-top:0px; margin-top:0px; padding-right:0px; float:left"/></a>
</th>
   
    </tr>
    
    <tr>
    <td colspan="2">
    <div id="products-wrapper">
 
 <div class="view-cart">
 <h6 style="font-family:'kalinga'; color:#000; font-size:25px; padding-left:10px;">View Cart</h6>
 	<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" >';
		 echo'<div class="viewcarttable">';
	echo'<table width="100%"><thead style="background:green"><tr align="center" style="float:none; "><th align="center" width="60%">Item</th><th align="center" width="20%">Qty</th><th align="center" width="20%">Price</th></tr></thead>';
    echo '<ol>';
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["id"];
		   $results = mysql_query("SELECT * FROM menu WHERE id='$product_code' LIMIT 1");
		   $obj =  mysql_fetch_array($results);
		   
		    echo '<tr>';
			
			//echo '<div class="p-price">'.$currency.$obj['price'].'</div>';
            echo '<div class="product-info">';
			echo '<td><li class="cart-itm"><h3>'.$obj['name'].'</h3> </td>';
            echo '<td><div class="p-qty"><h4> '.$cart_itm["qty"].'</h4></div></td>';
            echo '<td><div><h4>'.$obj['price'].'<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["id"].'&return_url='.$current_url.'" style="color:red; font-weight:900">&times;</a>
			</span></h4>
			</div>
			</td>
			';
			echo '</div>';
            echo '</li>
			</tr>';
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj['name'].'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_price['.$cart_items.']" value="'.$obj['price'].'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
			
        }
    	echo '</ul><tfoot style="background:#FFF;"><tr>';
		echo '<td colspan="2" align="left" style="padding:5px;padding-bottom:5px"><input type="button" class="orange" id="orderclick" value="Order Now" /></td>';
		echo '</form>';
		echo '<td  align="left" style="padding:5px; padding-bottom:5px"><span class="check-out-txt"><strong style="color:#000">Total : '.$currency.$total.'</strong></span></td></tr></tfoot></table>';
    }else{
		echo 'Your Cart is empty';
	}
	
    ?>
    </div>
</div>
    </td><td></td>
    </tr>
</table>
<div style="margin-top:300px">
<?php require('footer.php')?>
</div>
</div>
<script type="text/javascript" src="js/snap.js"></script>
        <script type="text/javascript">
            var snapper = new Snap({
                element: document.getElementById('content'),
                disable: 'right'
            });
            
        </script>
        <script type="text/javascript" src="js/demo.js"></script>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<!-- 
<script src="js/jquery.validate.js" type="text/javascript">
</script>
<script type="text/javascript">
	var v = $("form").validate({
    submitHandler: function() {       
        return false;
    }
});

$('#name').blur(function(){
   v.element('#name'); 
});

$('#number').blur(function(){
   v.element('#number'); 
});
</script>

-->

</body>
</html>
