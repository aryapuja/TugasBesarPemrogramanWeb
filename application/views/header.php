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
							<li><a href="<?php echo site_url();?>/MainController"> <span class="glyphicon glyphicon-home"></span> Home</a></li>
						</ul>
						
						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?php echo site_url();?>/MainController/addAkun"><span class="glyphicon glyphicon-user"></span> Register</a></li>
							<li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</div>

		<div id="login" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Login Form</h4>
		      </div>
		      <div class="modal-body">
		        <form action="<?php echo base_url().'index.php/MainController/login'?>" method="post">
					<div class="form-group">
				    	<label for="username">ID:</label>
				     	<input type="text" class="form-control" name="id_akun" placeholder="Masukkan ID" required="required">
				  	</div>

					<div class="form-group">
						<label for="password">Password:</label>
					 	<input type="password" class="form-control" name="password" placeholder="Masukkan Password" required="required">
					</div>

					<div class="form-group">
					  		<button type="submit" name="submit" value="Login" class="btn btn-info">Login</button>
					  		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
							<!-- <button type="button" class="btn btn-primary btn-block">Lupa Password</button></a> -->
					</div>
				</form>
		      </div>
		    </div>

		  </div>
</div>
</body>
</html>