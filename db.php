<?
	$host = 'localhost'; #your host
	$dbname = 'database'; #database name
    	$dbuser ='Admin'; #database user
    	$dbpassword='12345'; #user password
	$db = mysql_connect($host, $dbuser, $dbpassword);
	mysql_select_db($dbname, $db) #connecting to database
?>
