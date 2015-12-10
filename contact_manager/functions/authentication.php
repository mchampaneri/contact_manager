<?php
	
	session_start();

	$UserName=$_POST['UserName'];
	$Password=$_POST['Password'];

	if($UserName=="manish@hmail.com" && $Password=="login")
	{
		$_SESSION['authticate']=true;
		header('Location: http://localhost/contact_manager/dashboard/index.php');
	}

	else
		exit();


?>