<?php
session_start();
if (isset($_POST['username'], $_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == "sukesh" && $password=="admin") 
	{
		$_SESSION['username'] = $username;
		header('Location: session.php');
	}	
	else
	{
		echo "<h1>Login Invalid!</h1>";
		// header('Location: index.php');		
	}

}
?>