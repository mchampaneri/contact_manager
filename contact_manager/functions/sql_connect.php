<?php

 // GLOBAL VARIABLES 

	/* $connection =  connection_variable;
	   $db = database name;
	   $tb = table name;

	   change the variable as need

	   										*/
// opening connection
	   $connection = mysql_connect('localhost','root');
	   // if($connection)
	   // 	echo "CONNECTION OPEND";
	   

// getting database
	   $db = mysql_select_db('contact_manager',$connection);
	   // if($db)
	   // 	echo "</br>DATABASE ACCESS ON";
	   


?>