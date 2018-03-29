<?
	$host = 'localhost';
	$dbname = 'database';
    	$dbuser ='Admin';
    	$dbpassword='12345';
	$db = mysql_connect($host, $dbuser, $dbpassword);
	mysql_select_db($dbname, $db)
?>
