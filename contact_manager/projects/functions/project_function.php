<?php
		
	function customername($a)

	{

		$query_string="select * from contacts where id=".$a;
		$query = mysql_query($query_string);
		$customername = mysql_fetch_assoc($query);
		return $customername['name'];
	}

	function load_projects()
	{

		$query_string="select * from projects";
		$query = mysql_query($query_string);

		if(mysql_num_rows($query)<1){
			echo "<td> Sorry No Contact Found</td>";
			
		}
		$redirect_contact="http://localhost/contact_manager/projects";
		while($data = mysql_fetch_assoc($query))
		{	echo '<tr>';
			echo '<td>'.$data['id'].'</td>';
			echo '<td>'.$data['name'].'</td>';

		//	echo '<td>'. nothing .'</td>';

			echo '<td><a href="http://localhost/contact_manager/contacts/view.php?id='.$data['customer_id'].'">'.customername($data['customer_id']).'</td>';
			echo '<td>'.$data['expiry'].'</td>';
			echo '<td><a href='.$redirect_contact.'/view.php?id='.$data['id'].'><input type="button" class="btn btn-default" value="VIEW"></input></a>';	
			echo '<a href='.$redirect_contact.'/update.php?id='.$data['id'].'><input type="button" class="btn btn-info" value="EDIT"></input></a>';
				
			echo '<a data-href='.$redirect_contact.'/functions/action.php?id='.$data['id'].'&init=2   data-toggle="confirmation"><input type="button" class="btn btn-danger" value="DELETE" ></input></a></td>';
			
			echo '</tr>';
		}
//
	}

	function load_blank_form()
	{


			echo	'	<form action="functions\action.php?init=0" method="post" id="commentForm">';
			echo    '     <fieldset>';
			echo	'		<div class="form-group">';
			echo	'				<label for="">PROJECT-NAME *</label>';
			echo	'					<input type="text" class="form-control" name="name"   minlength="2" required></input>';
			echo	'				</div>';



			echo	'				<div class="form-group">';
			echo	'					<label for="">CUSTOMER_ID *</label>';
			echo    '                    <select name=customer_id class="form-control">';
										load_customers();
			echo    '                     </select>';
			echo	'				</div>';




			echo	'				<div class="form-group">';
			echo	'					<label for="">DOMAIN *</label>';
			echo	'					<input type="text" class="form-control" name="domain" required></input>';
			echo	'				</div>';
			
			?>
			<div class="form-group">
                    <label>START DATE</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <div id="sandbox-container">
                      	<input type="text" type="text" class="form-control" name="start_date" required />
                      </div>
                    </div><!-- /.input group -->
            </div>

				
			<div class="form-group">
                    <label>EXPIRY</label>
                    <div class="input-group">
                       <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <div id="sandbox-container">
                      	<input type="text" type="text" name="expiry" class="form-control"/>
                      </div>
                    </div><!-- /.input group -->
             </div>

            <?php


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

			$query_string="select * from projects where id=".$a;
			$query = mysql_query($query_string);

			$data = mysql_fetch_assoc($query);

			echo	'	<form action="functions\action.php?init=1" method="post"  id="commentForm">';
			echo    '     <fieldset>';
			echo	'		<div class="form-group">';
			echo	'				<label for="">NAME :</label>';
			echo	'					<input type="text" class="form-control" name="name" value="'.$data['name'].'" required></input>';
			echo	'				</div>';

			echo	'				<div class="form-group">';
			echo	'					<label for="">CUSTOMER_ID *</label>';
			echo    '                    <select name=customer_id class="form-control" >';
										    load_customers();
			echo    '                     </select>';
			echo	'				</div>';


			echo	'				<div class="form-group">';
			echo	'					<label for="">DOMAIN :</label>';
			echo	'					<input type="text" class="form-control" name="domain" value='.$data['domain'].' ></input>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
		
			?>
			<div class="form-group">
                    <label>START DATE</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <div id="sandbox-container">
                      	<input type="text" type="text" name="start_date" class="form-control" value="<?php echo  $data['start_date']?>" required />
                      </div>
                    </div><!-- /.input group -->
            </div>

				
			<div class="form-group">
                    <label>EXPIRY</label>
                    <div class="input-group">
                       <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <div id="sandbox-container">
                      	<input type="text" type="text" name="expiry" class="form-control" value="<?php echo $data['expiry']?>" required/>
                      </div>
                    </div><!-- /.input group -->
             </div>

            <?php



			echo	'					<label for="">DESCRIPTION :</label>';
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

			$query_string="select * from projects where id=".$a;
			$query = mysql_query($query_string);

			$data = mysql_fetch_assoc($query);

			echo	'	<form action="functions\action.php?init=1" method="post">';
			echo	'		<div class="form-group">';
			echo	'				<lable for="">NAME :</lable>';
			echo	'					<lable >'.$data['name'].'</lable>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<lable for="">CUSTOMER_ID :</lable>';
			echo	'					<lable >'.$data['customer_id'].'</lable>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<lable for="">DOMAIN :</lable>';
			echo	'					<lable >'.$data['domain'].'</lable>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
			echo	'					<lable for="">START DATE :</lable>';
			echo	'					<lable >'.$data['start_date'].'</lable>';
			echo	'				</div>';
			echo	'					<div class="form-group">';
			echo	'					<lable for="">EXPIRY DATE :</lable>';
			echo	'					<lable >'.$data['expiry'].'</lable>';
			echo	'				</div>';
		
			echo	'					<div class="form-group">';
			echo	'					<lable for="">DESCRIPTION :</lable>';
			echo	'					<p>'.$data['description'].'</p>';
			echo	'				</div>';
			echo	'				<div class="form-group">';
							
			echo	'					<lable type="hidden" name="contact_id" value='.$_GET['id'];
			echo	'				</div>';
			echo	'			</form>';

	}



function load_customers()
{

	$query_string="select * from contacts";
	$query = mysql_query($query_string);

	if(!$query)
	{
		echo "NO CONTACT LOADED";
		mysql_error();
		die();
	}

	while($contact = mysql_fetch_assoc($query))
	{

		echo '<option value="'.$contact['id'].'">'.$contact['name'].'</option>';
	}




}

?>

