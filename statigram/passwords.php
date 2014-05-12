<?php require("db.php");

   $query = mysql_query("SELECT * FROM passwords WHERE type = '1'") or die(mysql_error());
   $row = mysql_fetch_array($query);
   $adminpass = $row['pass']; //Password for admins
  
?>
