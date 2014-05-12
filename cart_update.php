<?php
session_start();
include_once("db.php");

//add item in shopping cart
if(isset($_POST["type"]) && $_POST["type"]=='add')
{
	$product_code 	= filter_var($_POST["id"], FILTER_SANITIZE_STRING); //product code
	$return_url 	= base64_decode($_POST["return_url"]); //return url
	if(isset($_POST['qtyid'])){
		$qtyid = $_POST['qtyid'];
	}else{
		$qtyid = 1;
	}
	
	
	
	
	//MySqli query - get details of item from db using product code
	$results = mysql_query("SELECT * FROM menu WHERE id='$product_code' ");
	$obj = mysql_fetch_array($results);
	
	if ($results) { //we have the product info 
		
		//prepare array for the session variable
		$new_product = array(array('name'=>$obj['name'], 'id'=>$product_code, 'qty'=>$qtyid, 'price'=>$obj['price']));
		
		if(isset($_SESSION["products"])) //if we have the session
		{
			$found = false; //set found item to false
			
			foreach ($_SESSION["products"] as $cart_itm) //loop through session array
			{
				if($cart_itm["id"] == $product_code){ //the item exist in array
					$qty = $cart_itm["qty"]+$qtyid; //increase the quantity
					$product[] = array('name'=>$cart_itm["name"], 'id'=>$cart_itm["id"], 'qty'=>$qty, 'price'=>$cart_itm["price"]);
					$found = true;
				}else{
					//item doesn't exist in the list, just retrive old info and prepare array for session var
					$product[] = array('name'=>$cart_itm["name"], 'id'=>$cart_itm["id"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
				}
			}
			
			if($found == false) //we didn't find item in array
			{
				//add new user item in array
				$_SESSION["products"] = array_merge($product, $new_product);
			}else{
				//found user item in array list, and increased the quantity
				$_SESSION["products"] = $product;
			}
			
		}else{
			//create a new session var if does not exist
			$_SESSION["products"] = $new_product;
		}
		
	}
	
	//redirect back to original page
	header('Location:'.$return_url);
}



//remove item from shopping cart
if(isset($_GET["removep"]) && isset($_GET["return_url"]) && isset($_SESSION["products"]))
{
	$product_code 	= $_GET["removep"]; //get the product code to remove
	$return_url = base64_decode($_GET["return_url"]); //get return url
	
	foreach ($_SESSION["products"] as $cart_itm) //loop through session array var
	{
		if($cart_itm["id"]==$product_code){ //item exist in the list
			
			//continue only if quantity is more than 1
			//removing item that has 0 qty
			if($cart_itm["qty"]>1) 
			{
			$qty = $cart_itm["qty"]-1; //just decrese the quantity
			//prepare array for the products session
			$product[] = array('name'=>$cart_itm["name"], 'id'=>$cart_itm["id"], 'qty'=>$qty, 'price'=>$cart_itm["price"]);
			}
			
		}else{
			$product[] = array('name'=>$cart_itm["name"], 'id'=>$cart_itm["id"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
		}
		
		//set session with new array values
		$_SESSION["products"] = $product;
	}
	
	//redirect back to original page
	header('Location:'.$return_url);
}

//remove all from cart

if(isset($_GET['removeall'])){
	
	$return_url = base64_decode($_GET["return_url"]); //get return url
	$product[] = array();
	$_SESSION['products'] = null;
	
	header('Location:'.$return_url);
}

?>
