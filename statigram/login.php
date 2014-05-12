<?php session_start();?>

<center>
<h2>Login</h2>
<p>Welcome to StatiGram, please login below!</p>
Password
<form action="showlogin.php" method="POST">
<input type="password" size="20" name="password">
<p><input type="submit" name="login" value="Login">
</form>

<h2>Logout</h2>
<p><form action="showlogin.php" method="POST">
<input type="submit" name="logout" value="Logout">
</form></p>
    </center>

        <?php require("passwords.php");

        echo "<center>";

        if(isset($_POST['login'])) {
            $password = cleanString($_POST['password']);

            if(md5($password) == $adminpass) {
                $_SESSION['loggedIn'] = true;
                echo '<meta HTTP-EQUIV="REFRESH" content="0; url=index.php">';
                die();
            } else {
                echo "<b>Incorrect password!</b>";
                $_SESSION['loggedIn'] = false;
            }
        }

            if(isset($_POST['logout'])) {

                if($_SESSION['loggedIn'] == true) {
                    $_SESSION['loggedIn'] = false;
                    echo "<b>Sucessfully logged out!</b>";

                } else {
                    $_SESSION['loggedIn'] == false;
                    echo "<b>You're already logged out.</b>";
                }
            }

            mysql_close($connect);

        ?>
