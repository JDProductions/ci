<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script   src="https://code.jquery.com/jquery-2.2.2.min.js"   integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
	<div class="col-xs-3">
		<?php $this->load->view('users/login_view'); ?>
	</div>

	<div class="xs-9">
		<?php $this->load->view($main_view); ?>
	</div>

</div>


</body>
</html>