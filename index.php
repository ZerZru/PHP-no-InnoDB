<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home page</title>
    </head>
    <body>
        <h2>Home page</h2>
        <form action="login.php" method="post">
            <a href="signup.php">Registration</a> 
        </form> <br>
        <?php
            if (empty($_SESSION['login']) or empty($_SESSION['id'])) { #if empty session
                echo "Welcome, Guest!<br><a href='#'>Only for registered users</a><p><label>Login:<br></label>
                <input name='login' type=text' maxlength='32'></p>
                <p><label>Password:<br></label>
                <input name='password' type='password' maxlength='32'></p>
                <p><input type='submit' name='submit' value='Login'></p><br>"; 
            } else { #if user have session
                echo "Welcome, ".$_SESSION['login']."<br><a href='https://github.com'>Your link</a>";
            }
           ?>
        <!-- Page code -->
    </body>
</html>
