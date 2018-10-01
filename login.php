<?php
    session_start();
    if (isset($_POST['submit'])) {
        $login = $_POST['login'];
        $password=$_POST['password'];
    }

    $login = stripslashes($login);
    $login = htmlspecialchars($login); #delete html-codes
    $password = stripslashes($password);
    $password = htmlspecialchars($password); #delete html-codes
    $login = trim($login); #delete spaces

    include ("db.php");
 
    $result = mysql_query("SELECT * FROM `users` WHERE `login`='$login'", $db);
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password'])) {
        exit ("Incorrect login or password.");
    } else {
        if ($myrow['password']==$password) {
            $_SESSION['login']=$myrow['login']; 
            $_SESSION['id']=$myrow['id'];
            
            echo "You have authorised on site! <a href='index.php'>Main page</a>";
    } else {
        exit ("Incorrect login or password.");
    }
?>
