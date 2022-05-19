<?php
	session_start();
	require_once ('../dbh.php');
	$email = (isset($_GET['email']) ? $_GET['email'] : '');

	if(!isset($_SESSION["email"]))
	{
		header("Location: index.html");
	}
	elseif($_SESSION["loggedin"] == false)
	{
		header("Location: index.html");
		exit();
	}
	
	
    
?>