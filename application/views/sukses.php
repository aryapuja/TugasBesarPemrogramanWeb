<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="<?php echo base_url();?>assets/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.css">
    <script src="<?php echo base_url();?>assets/datatables.min.js"></script>		
    <link rel="stylesheet" href="<?php echo base_url();?>assets/datatables.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Universitas Negeri Malang</a>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo site_url();?>/pegawai/create"> <span class="glyphicon glyphicon-home"></span> Home</a></li>
						</ul>
						
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</div>
	<h3><?php echo $this->session->userdata('name'); ?></h3>
	<h3><?php echo $this->session->userdata('level'); ?></h3>	
</body>
</html>