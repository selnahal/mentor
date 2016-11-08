<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/nvd3/1.1.14-beta/nv.d3.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/style.css">

</head>
<body>
	<input type="hidden" id="url" value="<?php echo base_url(); ?>">
	<input type="hidden" id="fullUrl" value="<?php echo $url; ?>">
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" id="div_menu_container">
			<div class="row" id="div_user_data">
				<div>
					DVT
				</div>
			</div>
		</div>
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" id="div_header_container">
			<div>
				DASHBOARD	
			</div>
		</div>
	</div>
	<div class="row visible-sm hidden-lg hidden-md visible-xs">
		<?php include_once('top_menu.php'); ?>
	</div>