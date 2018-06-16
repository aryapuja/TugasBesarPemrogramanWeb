<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="<?php echo base_url();?>assets/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.css">
    <script src="<?php echo base_url();?>assets/datatables.min.js"></script>		
    <link rel="stylesheet" href="<?php echo base_url();?>assets/datatables.min.css">
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('#tes').DataTable();
    	});
    </script>
	<title>Web</title>
</head>
<body>
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
						<a class="navbar-brand" href="#">Politeknik Negeri Malang</a>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo site_url();?>/pegawai/create"> <span class="glyphicon glyphicon-home"></span> Home</a></li>
						</ul>
						
						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?php echo site_url();?>/MainController/register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
							<li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</div>
</body>
</html>