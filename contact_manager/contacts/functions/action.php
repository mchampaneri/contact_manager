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
			if(isset($_POST['name']) && isset($_POST['phone1']))
			{
				$query_string = 'INSERT INTO `contacts`( `name`, `address`, `phone1`, `phone2`,
															 `email`, `website`, `description`) 
									  VALUES ("'.$_POST['name'].'","'.$_POST['address'].'","'.$_POST['phone1'].'",
									  		  "'.$_POST['phone2'].'","'.$_POST['email'].'",
										      "'.$_POST['website'].'","'.$_POST['description'].'")';
				
				echo $query_string;

				$query= mysql_query($query_string);

				echo mysql_error();
				if(!$query)
				{
					echo "FAIL TO ADD NEW CONTACT";
					die();
				}

				header('location:http://localhost/contact_manager/contacts/');
			}

	}

	function ddelete()
	{

			include '..\..\functions\sql_connect.php'; 
			if(isset($_GET['id']))
			{
				//echo $_GET['id'];

				$query_string = "delete from `contacts` where id=".$_GET['id'];
				$query = mysql_query($query_string);

				if(!$query){
					echo "FAIL TO DELETE CONTACT".mysql_error();
					die();
				}

				header('location:http://localhost/contact_manager/contacts/');
			}	

	}

	function update()
	{

				{
			include '..\..\functions\sql_connect.php'; 
			if(isset($_POST['name']) && isset($_POST['phone1']))
			{
				$query_string = 'UPDATE `contacts` SET `name`="'.$_POST['name'].'",`address`="'.$_POST['address'].'",`phone1`="'.$_POST['phone1'].'",`phone2`="'.$_POST['phone2'].'",
								`email`="'.$_POST['email'].'",`website`="'.$_POST['website'].'",`description`="'.$_POST['description'] 
								.'" WHERE id='.$_POST['contact_id'];
				
				echo $query_string;

				$query= mysql_query($query_string);

				echo mysql_error();
				if(!$query)
				{
					echo "FAIL TO update NEW CONTACT";
					die();
				}

				header('location:http://localhost/contact_manager/contacts/');
			}

	}

	}


?>