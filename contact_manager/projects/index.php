<?php
// starting the page
 $active = 'project';
 $active_sub='all_projects';
 include '../functions/functions.php';
 include '..\includes\admin_frame.php';
 include '..\functions\sql_connect.php';
 include 'functions\project_function.php';

?>


<section class="content-header">
	CONTACT LIST
</section>

<section class="content">
	
	<div class="box box-primary">
			<div class="box-header with-boarder">
				<h2 class="box-title"> PROJECTS LIST </h2>
			</div>
			<table class="table table-hover">
				<tr>
				<th>PROJECT-ID</th>
				<th>PROJECT-NAME</th>
				<th>CUSTOMER-NAME</th>
				<th>EXPIRY-DATE</th>
				<th>ACTIONS</th>
			
				</tr>
				<?php 
						load_projects(); 
				?>
			</table>
			
	</div>

</section>


<?php
// closing the page
	include '..\includes\admin_frame_close.php';
?>