<?php session_start();

if ($_SESSION['loggedIn'] == false) {
    echo '<meta HTTP-EQUIV="REFRESH" content="0; url=showlogin.php">';
    die();
}

?>
