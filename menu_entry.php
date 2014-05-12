
<?php require('db.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu Entry</title>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="style/menu.css" />
<link rel="stylesheet" href="style/style.css" />
</head>

<body>

<?php
if(isset($_POST['name'])&&isset($_POST['price']) && $_POST['name']!=""){
	
	$menu = $_POST['name'];
	$price = $_POST['price'];
	$parent = $_POST['parent'];
	$cat = $_POST['cat'];
	
	
	
	//$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
//$extension = end($temp);
if (1)
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
	
	$path =  $_FILES["file"]["name"];
	mysql_query("insert into menu(name,price,path,parent,cat) values('$menu','$price','$path','$parent','$cat')") or die(mysql_error());
}


?>
<form action="menu_entry.php" name="menu_edit" method="post" enctype="multipart/form-data">
<div class="menutable" style="background:#CCC no-repeat; background-size:cover; width:500px; float:none; margin-left:25%; padding:90px; margin-top:10%" align="center">
<table width="500" border="0" cellpadding="3">
  <tr>
    <th scope="col">&nbsp; <input type="text" id="input" name="name" placeholder="Menu Item" /></th>
  </tr>
  <tr>
    <td>&nbsp;<input type="text" id="input" name="price" placeholder="Price" /></td>
  </tr>
   <tr>
    <td>&nbsp;<select name="parent">
    <option value="burger">&nbsp;Burger</option>
    <option value="snack">&nbsp;Snack</option>
    <option value="desert">&nbsp;Desert</option>
    <option value="grill">&nbsp;Grill</option>
    <option value="combo">&nbsp;Combo</option>
    <option value="Frankies">&nbsp;Frankies</option>
    </select>
</td>

<td>
&nbsp;<select name="cat">
    <option value="veg">&nbsp;Veg</option>
    <option value="nonveg">&nbsp;Non-Veg</option>
    </select>
</td>
  </tr>
  
  <tr>
  <td>
 <label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</td>
  </tr>
  
</table>
</form>
 <form action="menu_entry.php" method="post"
enctype="multipart/form-data">

</form>


<?php

?>
</body>
</html>
