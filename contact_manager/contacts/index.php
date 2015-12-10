<?php
// starting the page
 $active = 'contact';
 $active_sub='all_contacts';
 include '../functions/functions.php';
 include '..\includes\admin_frame.php';
 include '..\functions\sql_connect.php';
 include 'functions\contact_function.php';

?>


<section class="content-header">
	CONTACT LIST
</section>

<section class="content">
	
	<div class="box box-primary">
			<div class="box-header with-border">
				<h2 class="box-title"> CONTACT LIST </h2>
			</div>
			<table class="table table-hover">
				<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>PHONE_NUMBER</th>
				<th>EMAILID</th>
		<!-- 		<th>PROJECTS</th>  -->
				<th>ACTIONS</th>
				
				</tr>
				<?php 
						load_contacts(); 
				?>
			</table>
			
	</div>

</section>


<?php
// closing the page
	include '..\includes\admin_frame_close.php';
?>