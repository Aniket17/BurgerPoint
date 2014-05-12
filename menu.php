<?php
session_start();
include_once("db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Burger Point</title>
<meta name="keywords" content="Burger Point" />
<meta name="description" content="Burger khao..khush raho" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=yes"/>
<link rel="stylesheet" href="style/reset.css" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="style/menu.css" />
<link rel="stylesheet" type="text/css" href="style/demo.css" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|Open+Sans' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/png" href="images/BurgerPoint_logo_Final.png">

<script src="js/modernizr.custom.97121.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/prefixfree.min.js"></script>
<script type="text/javascript" src="js/snap.js"></script>

<style>
.mainpage{
min-height:400px;
}
.footer{
margin-top:100px;
}
</style>
</head>

<body>
<!--mobile content here-->
 <div class="snap-drawers">
            <div class="snap-drawer snap-drawer-left">
             <div>
             <div class="demo-social">
                   
          <ul>
          <li><a href="index.php">Home</a></li> 
          <li><a href="menu.php" class="current" >Order Now</a></li>    
          <li><a href="about.php">Our Story</a></li>     
          <li><a href="find.php">Find Us</a></li>   
         </ul>
         
         </div>
         </div>
         </div>  
         <div class="snap-drawer snap-drawer-right" id="right-drawer">
         <div>    
            <div class="demo-social">
                    
                    </div>
                    <h3 style="" align="center">Our Menu</h3>
			<ul class="list" >
	 <li>
            <a href="menu.php?item=burger" name="burgerveg"><h3 ><span class="icon-dashboard"></span>Burger</h3></a>
           
            </li>
            <li>
            <a href="menu.php?item=frankies" name="frankies"><h3 ><span class="icon-dashboard"></span>Frankies</h3></a>
           
            </li>
          
          <li>
            <a href="menu.php?item=snack" name="snackveg"><h3><span class="icon-tasks"></span>Snacks</h3></a>
            
          </li>
           <li>
            <a href="menu.php?item=grills" name="grillsveg"><h3><span class="icon-heart"></span>Grills</h3></a>
            
            </li>
             <li>
           <a href="menu.php?item=combos" name="combosveg"><h3><span class="icon-heart"></span>Combos</h3></a>
            
            </li>
          <li>
            <a href="menu.php?item=desert" name="desert"><h3><span class="icon-calendar"></span>Dessert</h3></a>
           
            </li>
         
			</ul>
		</div>
        </div>
        <div id="content" class="snap-content">
            <div id="toolbar" align="center">
                <a href="#" id="open-left"></a><a href="#" id="open-right"></a>
                 <h1> <a href="index.php">
                <p style="font-family:'Bree Serif'; font-weight:bold; vertical-align:middle; " align="center">
               
               <img src="images/Name Png_50dpi.png" width="120" height="40" style="padding:3px 0px 3px 0px" />
               </p>
               </a>
               </h1>
            </div>
             <!--toolbar ends here-->
            <!--mainpage content here-->
            
    <div align="left" class="menutable">
   
        <div style="display:block;background:#6FA30E;color:#FFF; width:100%" >Veg</div>
     
     
       <!-- veg menu-->
          <table width="100%"  border="0" align="center" cellpadding="3" id="vegnv">
          <thead>
            <tr>
              <th scope="col" >Add</th>
              <th scope="col" style="">Menu</th>
              <th scope="col">Price</th>
              </tr>
            </thead>
          <tfoot>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;<br  />&nbsp;</td>  
              </tr>
            </tfoot>
          <tbody>
            <?php 
 $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  $queryv = mysql_query("select * from menu where parent='burger' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='burger' and cat='nonveg'") or die(mysql_error());
 $base1 = 100;
 
 /*code for dynamic menu list from right menu.*/
 
 if(isset($_GET['item'])){
	 $item = $_GET['item'];
	 
	 switch($item){
		
			case 'burger':
		 		 $queryv = mysql_query("select * from menu where parent='burger' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='burger' and cat='nonveg'") or die(mysql_error());
				 break;
				 
			case 'snack':
		 		 $queryv = mysql_query("select * from menu where parent='snack' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='snack' and cat='nonveg'") or die(mysql_error());
				 break;
			
			case 'desert':
		 		 $queryv = mysql_query("select * from menu where parent='desert' ") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='deserto' ") or die(mysql_error());
				 break;
			case 'grills':
		 		 $queryv = mysql_query("select * from menu where parent='grill' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='grill' and cat='nonveg'") or die(mysql_error());
				 break;
			
			case 'combos':
		 		 $queryv = mysql_query("select * from menu where parent='combo' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='combo' and cat='nonveg'") or die(mysql_error());
				 break;
				 
			case 'frankies':
		 		 $queryv = mysql_query("select * from menu where parent='frankies' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='frankies' and cat='nonveg'") or die(mysql_error());
				 break;
			
			
			
	}
 }
 
 
 while($row = mysql_fetch_array($queryv)){
	$name = $row['name'];
	$id = $row['id'];
	
 ?>
            
            <tr>
              <td>
              <form action="cart_update.php" method="post" >
                <p class="checkbox">
                  <button id="chk" type="submit" name="chk" style="border:none; background-color:transparent; cursor:pointer">
                  <img src="images/add_to_cart.png" />
                  </button>
                <td>
                  </p>
                
                  <div class="parent" align="left">   
                    
                    <p><?php echo $name; ?></p>
                    
                    
                    <div id="hover-content" style=" top:<?php echo"$base"?>px; left:40%;">
                      <div style="width:100%; height:80%; background:<?php echo"url('upload/$row[path]')"?>; background-repeat:no-repeat; background-size:100% 100%;">
                        
                        <?php
   			echo '<input type="hidden" name="id" value="'.$row['id'].'" />';
			echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
			
	?>	
                        
                        </div>
                      <div class="addspan" align="left">
                        <input id="qtyid" type="number" name="qtyid" class="qty" value="1"  />
                        <input id="addbtn" type="submit" name="addbtn" class="b" value="add to order" style="background: #D71E47;" />
                        </div>
                      </div>
                   
                  
                <td colspan="2" align="center"><p><?php echo"Rs. $row[price]"; ?></p>  </div>
                </form> 
              
              </tr>
            
            <?php
 $base1 = $base1+20;
	
}

?>
            </tbody>
          </table>
         

      
      <!-- nonveg menu-->
      
       <div style="display:block;background:#A95A34; width:100%; color:white">NonVeg</div>
      
       <table border="0" width="100%" align="center" id="vegnv">
       
          <thead>
            <tr>
              <th scope="col" >Add</th>
              <th scope="col" style="">Menu</th>
              <th scope="col">Price</th>
              </tr>
            </thead>
          <tfoot>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;<br  />&nbsp;</td>  
              </tr>
            </tfoot>
          <tbody>
            <?php 
 $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  $queryv = mysql_query("select * from menu where parent='burger' and cat='veg'") or die(mysql_error());
  $querynv = mysql_query("select * from menu where parent='burger' and cat='nonveg'") or die(mysql_error());
 $base = $base1;
 /*code for dynamic menu list from right menu.*/
 
 if(isset($_GET['item'])){
	 $item = $_GET['item'];
	 
	 switch($item){
		
			case 'burger':
		 		 $queryv = mysql_query("select * from menu where parent='burger' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='burger' and cat='nonveg'") or die(mysql_error());
				 break;
				 
			case 'snack':
		 		 $queryv = mysql_query("select * from menu where parent='snack' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='snack' and cat='nonveg'") or die(mysql_error());
				 break;
			
			case 'desert':
		 		 $queryv = mysql_query("select * from menu where parent='desert' ") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='deserto' ") or die(mysql_error());
				 break;
			case 'grills':
		 		 $queryv = mysql_query("select * from menu where parent='grill' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='grill' and cat='nonveg'") or die(mysql_error());
				 break;
			
			case 'combos':
		 		 $queryv = mysql_query("select * from menu where parent='combo' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='combo' and cat='nonveg'") or die(mysql_error());
				 break;
			case 'frankies':
		 		 $queryv = mysql_query("select * from menu where parent='frankies' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='frankies' and cat='nonveg'") or die(mysql_error());
				 break;
			
			
	}
 }
 
 
 while($row = mysql_fetch_array($querynv)){
	$name = $row['name'];
	$id = $row['id'];
	
 ?>
            
            <tr>
              <td>
              <form action="cart_update.php" method="post" >
                <p class="checkbox">
                  <button id="chk" type="submit" name="chk" style="border:none; cursor:pointer; background-color:transparent">
                  <img src="images/add_to_cart.png" />
                  </button>
                  </p>
                
                <td>
                  <div class="parent" align="left">   
                    
                    <p><?php echo $name; ?></p>
                    
                    
                    <div id="hover-content" style=" top:<?php echo"$base"?>px; left:40%;">
                      <div style="width:100%; height:80%; background:<?php echo"url('upload/$row[path]')"?>; background-repeat:no-repeat; background-size:100% 100%;">
                        
                        <?php
   			echo '<input type="hidden" name="id" value="'.$row['id'].'" />';
			echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
			
	?>	
                        
                        </div>
                      <div class="addspan" align="left">
                        <input id="qtyid" type="number" name="qtyid" class="qty" value="1"  />
                        <input id="addbtn" type="submit" name="addbtn" class="b" value="add to order" style="background: #D71E47;" />
                        </div>
                      </div>
                   
                  
                <td colspan="2" align="center"><p><?php echo"Rs. $row[price]"; ?></p>  </div>
                </form> 
              
              </tr>
            
            <?php
 $base = $base+30;
	
}

?>
            </tbody>
          </table>
      
     </div>
    
    <!--  Cart code-->
<div class="mobile_cart"  align="center" style="width:100%">
<table width="100%" style="display:block; float:right; width:100%">
	<tr>
    <th width="100%" valign="top" scope="col" style="vertical-align:top">
        <div class="shopping-cart"  align="center" style="width:100%x; float:left; margin-top:5px; vertical-align:top">
          <h2>Your Order</h2>
          <?php
		  echo'<div class="carttable" align="left">
	<table style="vertical-align:top" > ';
	echo'<tr align="center" style=" valign="top""><th align="center" width="100%">Item</th><th align="center" >Qty</th><th align="center" >Price</th></tr>';
    echo '<ol>';
if(isset($_SESSION["products"]))
{
    $total = 0;
	
    foreach ($_SESSION["products"] as $cart_itm)
    {
       echo'<tr>';
		echo '<td><li class="cart-itm">';
        echo '<h3>'.$cart_itm["name"].'</h3>&nbsp</td>';
        
        echo '<td><div class="p-qty"> '.$cart_itm["qty"].'</div> </td>';
        echo '<td><div class="p-price"> '.$currency.$cart_itm["price"].'<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["id"].'&return_url='.$current_url.'">&times;</a></span></div>
		<td>';        

        echo '</li>';
		
		
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
		echo '</tr>';
    }
   
   echo 
	'<tr>
	
	<td colspan="3">
	<table>
	<tr>
	<td>
	<a href="cart_update.php?removeall=yes&return_url='.$current_url.'">
	<button class="clear">clear</button>
	</a>
	</td>
	<td align="left" >
	<a href="view_cart.php" target="_blank" style="color:#FF9933" ><button class="orange">checkout</button></a>
	</td>
	  <td align="left">
	<span class="check-out-txt"><strong style="color:#000">Total : '.$currency.$total.'</strong> </span>
	</td>
</tr>
	</table>
	
	</td>
	
	</tr>';
}else{
    echo '<td colspan="3" >Your order is empty </td>';
}
 echo '</ol>';
echo'</table> </div>';
?>
          
          </div>
    </th>
    </tr>
</table>

<?php 
require('footer_mobile.php');
?>
</div>
        <script type="text/javascript" src="js/snap.js"></script>
        <script type="text/javascript">
            var snapper = new Snap({
                element: document.getElementById('content'),
                disable: 'none'
            });
            
        </script>
        <script type="text/javascript" src="js/demo.js"></script>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>     

<div class="mainpage" >
<table border="0" width="100%" cellpadding="0" style=" float:none;  ">
  <tr>
    <th width="15%" valign="middle" scope="col"><a href="index.php"><img src="images/BurgerPoint_logo_Final.png" alt="a" width="136" height="130" style="padding-left:20px;padding-top:0px; margin-top:0px; padding-right:0px; float:left"/></a>
</th>
    <th colspan="3" align="left" valign="middle" style="padding-left:9.8%" scope="col">
      <div id="menu">
        <ul>
          
          <li><a href="find.php">Find Us</a></li>
          <li><a href="about.php">Our Story</a></li>
          <li><a href="menu.php" class="current" >Order Now</a></li>
          <li><a href="index.php" >Home</a></li>
          </ul>
  </div>
</th>
 </tr>
  
  <tr>
    <th valign="top" scope="col">
      <div id="accordian">
        <ul>
          <li>
            <a href="menu.php?item=burger" name="burgerveg"><h3 ><span class="icon-dashboard"></span>Burger</h3></a>
           
            </li>
            <li>
            <a href="menu.php?item=frankies" name="frankies"><h3 ><span class="icon-dashboard"></span>Frankie</h3></a>
           
            </li>
          
          <li>
            <a href="menu.php?item=snack" name="snackveg"><h3><span class="icon-tasks"></span>Snacks</h3></a>
            
          </li>
           <li>
            <a href="menu.php?item=grills" name="grillsveg"><h3><span class="icon-heart"></span>Grills</h3></a>
            
            </li>
             <li>
           <a href="menu.php?item=combos" name="combosveg"><h3><span class="icon-heart"></span>Combos</h3></a>
            
            </li>
          <li>
            <a href="menu.php?item=desert" name="desert"><h3><span class="icon-calendar"></span>Dessert</h3></a>
           
            </li>
         
         
          </ul>
  </div>
 
 </th>
     <!--menu table--> 
    <th width="60%" valign="top" scope="col" style="vertical-align: top;">
    <div align="left" class="menutable">
    <table border="0" cellpadding="0" width="100%" >
      <tr>
        <th scope="col" style="background:#65970D; color:white">Veg</th>
        <th scope="col" style="background:#A95A34; color:white">NonVeg</th>
      </tr>
      <tr>
       <!-- veg menu-->
      <td align="center" valign="top" width="50%" >
      
          <table width="100%"  border="0" align="center" id="vegnv">
          <thead>
            <tr>
              <th scope="col" >Add</th>
              <th scope="col" style="">Menu</th>
              <th scope="col">Price</th>
              </tr>
            </thead>
          <tfoot>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;<br  />&nbsp;</td>  
              </tr>
            </tfoot>
          <tbody>
            <?php 
 $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
 $queryv = mysql_query("select * from menu where parent='burger' and cat='veg'") or die(mysql_error());
 $querynv = mysql_query("select * from menu where parent='burger' and cat='nonveg'") or die(mysql_error());
 $base = 160;
 
 /*code for dynamic menu list from right menu.*/
 
 if(isset($_GET['item'])){
	 $item = $_GET['item'];
	 
	 switch($item){
		
			case 'burger':
		 		 $queryv = mysql_query("select * from menu where parent='burger' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='burger' and cat='nonveg'") or die(mysql_error());
				 break;
				 
			case 'snack':
		 		 $queryv = mysql_query("select * from menu where parent='snack' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='snack' and cat='nonveg'") or die(mysql_error());
				 break;
			
			case 'desert':
		 		 $queryv = mysql_query("select * from menu where parent='desert' ") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='deserto' ") or die(mysql_error());
				 break;
			case 'grills':
		 		 $queryv = mysql_query("select * from menu where parent='grill' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='grill' and cat='nonveg'") or die(mysql_error());
				 break;
			
			case 'combos':
		 		 $queryv = mysql_query("select * from menu where parent='combo' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='combo' and cat='nonveg'") or die(mysql_error());
				 break;
			
			case 'frankies':
		 		 $queryv = mysql_query("select * from menu where parent='frankies' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='frankies' and cat='nonveg'") or die(mysql_error());
				 break;
			
	}
 }
 
 
 while($row = mysql_fetch_array($queryv)){
	$name = $row['name'];
	$id = $row['id'];
	
 ?>
            
            <tr>
              <td>
              <form action="cart_update.php" method="post" >
                <p class="checkbox">
                  <button id="chk" type="submit" name="chk" style="border:none; background-color:transparent; cursor:pointer">
                  <img src="images/add_to_cart.png" />
                  </button>
                  </p>
                
                <td>
                  <div class="parent" align="left">   
                    
                    <p><?php echo $name; ?></p>
                    
                    
                    <div id="hover-content" style=" top:<?php echo"$base"?>px; left:550px;">
                      <div style="width:100%; height:80%; background:<?php echo"url('upload/$row[path]')"?>; background-repeat:no-repeat; background-size:100% 100%;">
                        
                        <?php
   			echo '<input type="hidden" name="id" value="'.$row['id'].'" />';
			echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
			
	?>	
                        
                        </div>
                      <div class="addspan" align="left">
                        <input id="qtyid" type="number" name="qtyid" class="qty" value="1"  />
                        <input id="addbtn" type="submit" name="addbtn" class="b" value="add to order" style="background: #D71E47;" />
                        </div>
                      </div>
                   
                  
                <td colspan="2" align="center"><p><?php echo"Rs. $row[price]"; ?></p>  </div>
                </form> 
              
              </tr>
            
            <?php
 $base = $base+30;
	
}

?>
            </tbody>
          </table>
         

      </td>
      
      <!-- nonveg menu-->
      <td align="center" valign="top" width="50%">
       <table border="0" width="100%" align="center" id="vegnv">
          <thead>
            <tr>
              <th scope="col" >Add</th>
              <th scope="col" style="">Menu</th>
              <th scope="col">Price</th>
              </tr>
            </thead>
          <tfoot>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;<br  />&nbsp;</td>  
              </tr>
            </tfoot>
          <tbody>
            <?php 
 $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  $queryv = mysql_query("select * from menu where parent='burger' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='burger' and cat='nonveg'") or die(mysql_error());
 $base = 160;
 /*code for dynamic menu list from right menu.*/
 
 if(isset($_GET['item'])){
	 $item = $_GET['item'];
	 
	 switch($item){
		
			case 'burger':
		 		 $queryv = mysql_query("select * from menu where parent='burger' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='burger' and cat='nonveg'") or die(mysql_error());
				 break;
				 
			case 'snack':
		 		 $queryv = mysql_query("select * from menu where parent='snack' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='snack' and cat='nonveg'") or die(mysql_error());
				 break;
			
			case 'desert':
		 		 $queryv = mysql_query("select * from menu where parent='desert' ") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='deserto' ") or die(mysql_error());
				 break;
			case 'grills':
		 		 $queryv = mysql_query("select * from menu where parent='grill' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='grill' and cat='nonveg'") or die(mysql_error());
				 break;
			
			case 'combos':
		 		 $queryv = mysql_query("select * from menu where parent='combo' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='combo' and cat='nonveg'") or die(mysql_error());
				 break;
			
			case 'frankies':
		 		 $queryv = mysql_query("select * from menu where parent='frankies' and cat='veg'") or die(mysql_error());
				 $querynv = mysql_query("select * from menu where parent='frankies' and cat='nonveg'") or die(mysql_error());
				 break;
			
	}
 }
 
 
 while($row = mysql_fetch_array($querynv)){
	$name = $row['name'];
	$id = $row['id'];
	
 ?>
            
            <tr>
              <td>
              <form action="cart_update.php" method="post" >
                <p class="checkbox">
                  <button id="chk" type="submit" name="chk" style="border:none; cursor:pointer; background-color:transparent">
                  <img src="images/add_to_cart.png" />
                  </button>
                  </p>
                
                <td>
                  <div class="parent" align="left">   
                    
                    <p><?php echo $name; ?></p>
                    
                    
                    <div id="hover-content" style=" top:<?php echo"$base"?>px; left:780px;">
                      <div style="width:100%; height:80%; background:<?php echo"url('upload/$row[path]')"?>; background-repeat:no-repeat; background-size:100% 100%;">
                        
                        <?php
   			echo '<input type="hidden" name="id" value="'.$row['id'].'" />';
			echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
			
	?>	
                        
                        </div>
                      <div class="addspan" align="left">
                        <input id="qtyid" type="number" name="qtyid" class="qty" value="1"  />
                        <input id="addbtn" type="submit" name="addbtn" class="b" value="add to order" style="background: #D71E47;" />
                        </div>
                      </div>
                   
                  
                <td colspan="2" align="center"><p><?php echo"Rs. $row[price]"; ?></p>  </div>
                </form> 
              
              </tr>
            
            <?php
 $base = $base+30;
	
}

?>
            </tbody>
          </table>
      </td>
      </tr>
	</table>
     </div>
    </th>
    
    <!--  Cart code-->

    <th width="25%" valign="top" scope="col" style="vertical-align:top">
        <div class="shopping-cart" style="width:250px; float:right; margin-top:10px; vertical-align:top">
          <h2>Your Order</h2>
          <?php
		  echo'<div class="carttable">
	<table style="vertical-align:top"> ';
	echo'<tr align="center" style="float:none; valign="top""><th align="center" width="90%">Item</th><th align="center" >Qty</th><th align="center" >Price</th></tr>';
    echo '<ol>';
if(isset($_SESSION["products"]))
{
    $total = 0;
	
    foreach ($_SESSION["products"] as $cart_itm)
    {
       echo'<tr>';
		echo '<td><li class="cart-itm">';
        echo '<h3>'.$cart_itm["name"].'</h3>&nbsp</td>';
        
        echo '<td><div class="p-qty"> '.$cart_itm["qty"].'</div> </td>';
        echo '<td><div class="p-price"> '.$currency.$cart_itm["price"].'<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["id"].'&return_url='.$current_url.'">&times;</a></span></div>
		<td>';        

        echo '</li>';
		
		
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
		echo '</tr>';
    }
   
    echo 
	'<tr>
	
	<td colspan="3">
	<table>
	<tr>
	<td>
	<a href="cart_update.php?removeall=yes&return_url='.$current_url.'">
	<button class="clear">clear</button>
	</a>
	</td>
	<td align="left" >
	<a href="view_cart.php" target="_blank" style="color:#FF9933" ><button class="orange">checkout</button></a>
	</td>
	  <td align="left">
	<span class="check-out-txt"><strong style="color:#000">Total : '.$currency.$total.'</strong> </span>
	</td>
</tr>
	</table>
	
	</td>
	
	</tr>';
}else{
    echo '<td colspan="3" >Your order is empty </td>';
}
 echo '</ol>';
echo'</table> </div>';
?>
          
          </div>
    </th>
    </tr>
  

</table>
<?php require('footer.php');?>

</div>
</div>

<div>

</div>
</div>
<!-- jQuery -->
<script src="/jquery-1.10.1.js" type="text/javascript"></script>
<script type="application/javascript">
/*jQuery time*/
var k;
//menu slider
$(document).ready(function(){
		
	$("#accordian h3").click(function(){
		//slide up all the link lists
		$("#accordian ul ul").slideUp();
		//slide down the link list below the h3 clicked - only if its closed
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown();
		}
	})
})
//event to change main order button on checkbox checked.
function addorder(){

var php_i = "<?php echo $i[0]; ?>";
var php_j = "<?php echo $j; ?>";
var i,j;
k =0;
var idarr = new Array();
for(i = php_i; i<=php_j; i++){
	idarr[i] = i;
	
	if(document.getElementById(idarr[i]).checked){
			var str = "my order(";
			str = str.concat(++k,')');
			document.getElementById('myorder').value = str;

	}else{	
			var str = "my order(";
			str = str.concat(k,')');
			document.getElementById('myorder').value = str;
	}
	
}
}
//btn on hover function that will make checkbox checked.
function addorderbtn(bid){
	
	if(document.getElementById(bid.id).checked == false){
	document.getElementById(bid.id).checked = true;	
	bid.setAttribute('value', "cancel");
	}else{
	document.getElementById(bid.id).checked = false;	
		bid.setAttribute('value', "add to order");
	}
}


</script>

<?php
$c = 1;
for($p = $i[0]-1; $p<=$j;$p++){
if(isset($_POST[$p])){
	
?>
<script type="text/javascript" language="javascript">
//to preserver the main btn order data on reload.
			$(document).ready(function(e) {
            var php_c = <?php echo $c;?>
			
			//alert(php_c);
			var str = "my order(";
			str = str.concat(php_c,')');
			document.getElementById('myorder').value = str;   
            });
			

</script>

<?php
$c++;	
}

}
?>

</body>
</html>
