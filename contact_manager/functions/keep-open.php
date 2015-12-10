<?php
	session_start();

	if($_SESSION['authticate'] != true)
	{
		
		echo "Login Failed";
		header('Location:http://localhost/contact_manager/login.php');
		exit();
	}

?>

