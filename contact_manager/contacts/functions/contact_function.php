<?php
		
	function load_contacts()
	{
		

		$query_string="select * from contacts";
		$query = mysql_query($query_string);

		if(mysql_num_rows($query)<1){
			echo "<td> Sorry No Contact Found</td>";
			
		}
		$redirect_contact="http://localhost/contact_manager/contacts";
		while($data = mysql_fetch_assoc($query))
		{	echo '<tr>';
			echo '<td>'.$data['id'].'</td>';
			echo '<td>'.$data['name'].'</td>';
			echo '<td>'.$data['phone1'].'</td>';
			echo '<td>'.$data['email'].'</td>';
			
		//		aqquired_project_numbers($data['id']);

			echo '<td><a href='.$redirect_contact.'/view.php?id='.$data['id'].'><input type="button" class="btn btn-default" value="VIEW"></input></a>';	
			echo '<a href='.$redirect_contact.'/update.php?id='.$data['id'].'><input type="button" class="btn btn-info" value="EDIT"></input></a>';
			echo '<a data-href='.$redirect_contact.'/functions/action.php?id='.$data['id'].'&init=2  data-toggle="confirmation"><input type="button" class="btn btn-danger" value="DELETE"></input></a></td>';
			echo '</tr>';
		}

	}

	function load_blank_form()
	{
			

			echo	'	<form action="functions\action.php?init=0" method="post" id="commentForm">';
			echo    '     <fieldset>';
			echo	'		<div class="form-group">';
			echo	'				<label for="">NAME</label>';
			echo	'					<input type="text" class="form-control" name="name"   minlength="2" required></input>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<label for="">PHONE1</label>';
			echo	'					<input type="text" class="form-control" name="phone1" required></input>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<label for="">PHONE2</label>';
			echo	'					<input type="text" class="form-control" name="phone2"></input>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<label for="">EMAIL-ADDRESS</label>';
			echo	'					<input type="text" class="form-control" name="email" data-rule-email="true"></input>';
			echo	'				</div>';
			echo	'					<div class="form-group">';
			echo	'					<label for="">WEB-SITE</label>';
			echo	'					<input type="text" class="form-control" name="website"></input>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<label for="">ADDRESS</label>';
			echo	'					<textarea cols="20" rows="4" class="form-control" name="address" required></textarea>';
			echo	'				</div>';
			echo	'					<div class="form-group">';
			echo	'					<label for="">DESCRIPTION</label>';
			echo	'					<textarea cols="20" rows="4" class="form-control" name="description"></textarea>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<input type="submit" class="btn btn-success" value="save"></input>';
			echo	'				</div>';
			echo    '     </fieldset>';
			echo	'   </form>';
	}

	function load_form($a)
	{

			$query_string="select * from contacts where id=".$a;
			$query = mysql_query($query_string);

			$data = mysql_fetch_assoc($query);

			echo	'	<form action="functions\action.php?init=1" method="post"  id="commentForm">';
			echo    '     <fieldset>';
			echo	'		<div class="form-group">';
			echo	'				<label for="">NAME</label>';
			echo	'					<input type="text" class="form-control" name="name" value="'.$data['name'].'"" required></input>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<label for="">PHONE1</label>';
			echo	'					<input type="text" class="form-control" name="phone1" value="'.$data['phone1'].'" required></input>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<label for="">PHONE2</label>';
			echo	'					<input type="text" class="form-control" name="phone2" value="'.$data['phone2'].'"></input>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<label for="">EMAIL-ADDRESS</label>';
			echo	'					<input type="text" class="form-control" name="email" value='.$data['email'].' data-rule-email="true"></input>';
			echo	'				</div>';
			echo	'					<div class="form-group">';
			echo	'					<label for="">WEB-SITE</label>';
			echo	'					<input type="text" class="form-control" name="website" value='.$data['website'].'></input>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<label for="">ADDRESS</label>';
			echo	'					<textarea cols="20" rows="4" class="form-control" name="address" required>'.$data['address'].'</textarea>';
			echo	'				</div>';
			echo	'					<div class="form-group">';
			echo	'					<label for="">DESCRIPTION</label>';
			echo	'					<textarea cols="20" rows="4" class="form-control" name="description" >'.$data['description'].'</textarea>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<input type="submit" class="btn btn-success" value="save"></input>';
			echo	'					<input type="hidden" name="contact_id" value='.$_GET['id'];
			echo	'				</div>';
			echo    '     </fieldset>';
			echo	'			</form>';
	}

	function view_form($a)
	{
			
			$query_string="select * from contacts where id=".$a;
			$query = mysql_query($query_string);

			$data = mysql_fetch_assoc($query);

			echo	'	<form action="functions\action.php?init=1" method="post">';
			echo	'		<div class="form-group">';
			echo	'				<lable for="">NAME :</lable>';
			echo	'					<lable >'.$data['name'].'</lable>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<lable for="">PHONE1:</lable>';
			echo	'					<lable >'.$data['phone1'].'</lable>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<lable for="">PHONE2:</lable>';
			echo	'					<lable >'.$data['phone2'].'</lable>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<lable for="">EMAIL-ADDRESS:</lable>';
			echo	'					<lable >'.$data['email'].'</lable>';
			echo	'				</div>';
			echo	'					<div class="form-group">';
			echo	'					<lable for="">WEB-SITE:</lable>';
			echo	'					<lable >'.$data['website'].'</lable>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<lable for="">ADDRESS:</lable>';
			echo	'					<p >'.$data['address'].'</p>';
			echo	'				</div>';
			echo	'					<div class="form-group">';
			echo	'					<lable for="">DESCRIPTION:</lable>';
			echo	'					<p>'.$data['description'].'</p>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
							
			echo	'					<lable type="hidden" name="contact_id" value='.$_GET['id'];
			echo	'				</div>';
			echo	'			</form>';

	}

?>

<?php 
function aqquired_project_numbers($a)
{
			$query_string='select * from projects where customer_id='.$a;
			$query = mysql_query($query_string);

		//	echo $query_string;

			if(@mysql_num_rows($query)<1){
				echo "<td> Sorry No PROJECT Found</td>";
			}

			else {
			echo '<td>';
			echo '<table class="table table-hover">';
				while($result = mysql_fetch_assoc($query)){
				echo '<tr><td>'.$result['name'].'</td></tr>';
				}
			echo '</table>';
			echo '</td>';
			}

}


?>
