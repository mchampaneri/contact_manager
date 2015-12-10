<?php


	function total_contact()
	{

		$query_string="select * from contacts";

		$query = mysql_query($query_string);

		$number = mysql_num_rows($query);

		echo $number;

	}

		function total_projects()
	{

		$query_string="select * from projects";

		$query = mysql_query($query_string);

		$number = mysql_num_rows($query);

		echo $number;

	}

?>