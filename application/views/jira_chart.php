<?php include_once('templates/header.php'); ?>

	<div class="row">
		<div class="col-lg-2  col-md-2 col-sm-2 ">
			<div class="row">
				<?php include_once('templates/side_menu.php'); ?>
			</div>
		</div>
		<div class="col-lg-10  col-md-10 col-sm-10 " id="data_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php include('jira_chart_data.php'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	

<?php include_once('templates/footer.php'); ?>