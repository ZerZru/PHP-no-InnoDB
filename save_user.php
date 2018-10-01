<?php
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        if ($login == '') {
            unset($login);
        }
    }

    if (isset($_POST['password'])) {
        $password=$_POST['password'];
        if ($password == '') {
            unset($password);
        }
    }
    
    if (empty($login) or empty($password)) {
        exit ("<div style='color:red;'>You don't insert login or password!</div>");
    }

    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = md5($password);
    $password = htmlspecialchars($password);
    $login = trim($login);

    include ("db.php");

    $result = mysql_query("SELECT `id` FROM `users` WHERE `login`='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
        exit ("This login already used. Insert another login.");
    }
    $result2 = mysql_query ("INSERT INTO users (login,password) VALUES('$login','$password')");
    if ($result2 == 'TRUE') {
        echo "<div style='color:green;'>You have been registered! Use login button for authorize on site. <a href='index.php'>Main page</a></div>";
    } else {
        echo "<div style='color:red;'>You don't registered.</div>";
    }
    ?>
