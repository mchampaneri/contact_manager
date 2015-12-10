
<?php
// starting the page	
 $active = 'dashboard';
 include '../functions/functions.php';
 include '..\includes\admin_frame.php';
 include '..\functions\sql_connect.php'; 
 include 'functions\dash_board_functions.php';

?>

<section class="content-header">
	DASHBOARD
</section>

<section class="content">
	
	<div class="row">
			<div class="col-md-6">
				<div class="info-box">
				 <a href="../contacts/">
					TOTAL NUMBER OF CONTACTS </br>
					<?php  total_contact(); ?>
				</div>
				</a>
			</div>
			<div class="col-md-6">
				<a href="../projects/">
				<div class="info-box">
					TOTAL NUMBER OF PROJECTS </br>
					<?php total_projects(); ?>
				</div>
				</a>
			</div>
	</div>

</section>

<?php
// closing the page
	include '..\includes\admin_frame_close.php';
?>