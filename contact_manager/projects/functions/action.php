<?php

	
	switch($_GET['init'])
	{
		case 0:
			upload();
			break;

		case 1:
			update();
			break;

		case 2:
			ddelete();
			break;

		

		default:
			echo "SORRY WRONG INPUT";
	}

	function upload()
	{
			include '..\..\functions\sql_connect.php'; 
			if(isset($_POST['name']) && isset($_POST['customer_id']))
			{
				$query_string = 'INSERT INTO `projects`( `name`, `customer_id`, `domain`, `start_date`,
															 `expiry`, `description`) 
									  VALUES ("'.$_POST['name'].'","'.$_POST['customer_id'].'","'.$_POST['domain'].'",
									  		  "'.$_POST['start_date'].'","'.$_POST['expiry'].'",
										      "'.$_POST['description'].'")';
				
				echo $query_string;

				$query= mysql_query($query_string);

				echo mysql_error();
				if(!$query)
				{
					echo "FAIL TO ADD NEW CONTACT";
					die();
				}

				header('location:http://localhost/contact_manager/projects/');
			}

	}

	function ddelete()
	{

			include '..\..\functions\sql_connect.php'; 
			if(isset($_GET['id']))
			{
				//echo $_GET['id'];

				$query_string = "delete from `projects` where id=".$_GET['id'];
				$query = mysql_query($query_string);

				if(!$query){
					echo "FAIL TO DELETE CONTACT".mysql_error();
					die();
				}

				header('location:http://localhost/contact_manager/projects/');
			}	

	}

	function update()
	{

				{
			include '..\..\functions\sql_connect.php'; 
			if(isset($_POST['name']) && isset($_POST['customer_id']))
			{
				$query_string = 'UPDATE `projects` SET `name`="'.$_POST['name'].'",`customer_id`="'.$_POST['customer_id'].'",`start_date`="'.$_POST['start_date'].'",`expiry`="'.$_POST['expiry'].'",
								`description`="'.$_POST['description'] 
								.'" WHERE id='.$_POST['contact_id'];
				
				echo $query_string;

				$query= mysql_query($query_string);

				echo mysql_error();
				if(!$query)
				{
					echo "FAIL TO update NEW PROJECT";
					die();
				}

				header('location:http://localhost/contact_manager/projects/');
			}

	}

	}


?>