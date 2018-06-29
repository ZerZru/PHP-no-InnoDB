<?php
    session_start();
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        if ($login == '') {
            unset($login);
        }
    }
    if (isset($_POST['password'])) { 
        $password=$_POST['password'];
        if ($password =='') {
            unset($password);
        } 
    }
    if (empty($login) or empty($password)) {
        exit ("Insert all areas!");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login); #delete html-codes
    $password = stripslashes($password);
    $password = htmlspecialchars($password); #delete html-codes
    $login = trim($login); #delete space
    include ("db.php");
 
    $result = mysql_query("SELECT * FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password'])) {
        exit ("Incorrect login or password.");
    } else {
        if ($myrow['password']==$password) {
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
        echo "Ypu have authorised on site! <a href='index.php'>Главная страница</a>";
    } else {
        exit ("Incorrect login or password.");
        }
    }
    ?>
