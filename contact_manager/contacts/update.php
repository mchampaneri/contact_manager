<?php
// starting the page	
  include '../functions/functions.php';
 include '..\includes\admin_frame.php';
 include '..\functions\sql_connect.php' ;
 include 'functions\contact_function.php';
?>

<section class="content-header">
	UPDATE THE CONTACT
</section>

<section class="content">

	<div class="row">
		<div class="col-md-10">
			<div class="box box-primary">
				<div class="box-header with-boarder">
					<h3 class="box-title">CHANGE THE DETAILS</h3>
				</div>
				<div class="box-body">
						<?php load_form($_GET['id']) ?>
				</div>
			</div>
		</div>
	</div>
	
</section>

<?php
// closing the page
	include '..\includes\admin_frame_close.php';
?>