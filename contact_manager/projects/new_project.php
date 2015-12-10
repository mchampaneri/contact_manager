<?php
// starting the page
 $active = 'project';
 $active_sub='new_project';

 include '../functions/functions.php';
 include '..\includes\admin_frame.php';
 include '..\functions\sql_connect.php';
 include 'functions\project_function.php';

?>

<section class="content-header">
	ADD NEW CONTACT
</section>

<section class="content">

	<div class="row">
		<div class="col-md-10">
			<div class="box box-primary">
				<div class="box-header with-boarder">
					<h3 class="box-title">FILL UP THE DETAILS</h3>
				</div>
				<div class="box-body">
						<?php load_blank_form(); ?>						
				</div>
			</div>
		</div>
	</div>
	
</section>

<?php
// closing the page
	include '..\includes\admin_frame_close.php';
?>