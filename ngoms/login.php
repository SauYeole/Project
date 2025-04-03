<?php session_start();
ob_start();
include 'include/conn.php';

if(isset($_POST['username']) AND isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query =mysql_query("SELECT * FROM login WHERE username='$username' AND password='$password'");

	$count= mysql_num_rows($query);

	if($count == 1)
	{
		$_SESSION['username'] = $username;
		//echo "string";
		header("location:dashboard.php");
	}
	else
	{
		//echo "Invalid Credentials.";
		header("location:index.php");
	}
}
ob_end_flush();
?>