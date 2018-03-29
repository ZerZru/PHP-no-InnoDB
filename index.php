<?php
    session_start();
    ?>
    <html>
    <head>
    <title>Home page</title>
    </head>
    <body>
    <h2>Home page</h2>
    <form action="login.php" method="post">
<a href="signup.php">Registration</a> 
    </p></form>
    <br>
    <?php
        if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
            echo "Welcome, Guest!<br><a href='#'>Only registered users</a>
             <p>
            <label>Login:<br></label>
            <input name='login' type=text' maxlength='32'>
            </p>
            <p>

            <label>Password:<br></label>
            <input name='password' type='password' maxlength='32'>
            </p>
            <p>
            <input type='submit' name='submit' value='Login'><br>"; 
        } else {
            echo "Welcome, ".$_SESSION['login']."<br><a href='http://t.me/scg_now'>123</a>";
        }
    ?>
    </body>
    </html>