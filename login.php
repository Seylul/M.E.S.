<?php 
	include_once('db.php');
	$username = mysql_real_escape_string( $_POST["email"] );
	$password = mysql_real_escape_string($_POST["password"] );

	if(empty($username) || empty($password))
	
		echo "Email and Password Mandatory - form PHP";
	else
{
	$sql = "SELECT * FROM user WHERE username='".$username."' AND password='".$password."'";
	$res = mysql_query($sql);
	$row = mysql_fetch_array($res);
	
	if ($row[0] > 0 )
		echo "1";
	else
		echo "0";
}


?>
