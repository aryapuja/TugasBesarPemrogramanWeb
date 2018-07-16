<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Calon</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/login-regis/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login-regis/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login-regis/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login-regis/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login-regis/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login-regis/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login-regis/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login-regis/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login-regis/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login-regis/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login-regis/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url();?>assets/login-regis/images/banner1.jpg');">
			<div class="wrap-login100">
				<!-- <form class="login100-form validate-form"> -->


					<span class="login100-form-title p-b-34 p-t-27">
						Edit Informasi Calon
					</span>
					
					<div class="text-center">
						<a class="txt1" href="#">
							<?php echo validation_errors(); ?>
						</a>
					</div>
					
					<?php echo form_open_multipart('Calon/editInfoCalon/'.$this->uri->segment(3)); ?>

					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" name="no_calon" value="<?php echo $info_calon[0]->no_calon ?>" readonly>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" name="id_akun" value="<?php echo $info_calon[0]->id_akun ?>" readonly>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="">
						<input class="input100" type="text" name="visi" placeholder="Visi" value="<?php echo $info_calon[0]->visi ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="">
						<textarea class="input100" name="misi" placeholder="Misi"><?php echo $info_calon[0]->misi ?></textarea>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div> 
						<a class="txt1" href="#">
							Update Foto
						</a>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="file" name="foto" value="<?php echo $info_calon[0]->foto ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Update
						</button>
					</div>
					<?php echo form_close(); ?>

					<div class="text-center"> 
						<a class="txt1" href="<?php echo site_url();?>/User">
							Back to Home
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/login-regis/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/login-regis/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/login-regis/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>assets/login-regis/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/login-regis/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/login-regis/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url();?>assets/login-regis/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/login-regis/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/login-regis/js/main.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/jquery.min.js"></script>

    <div id="login" class="modal fade" role="dialog">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    <div class="modal-dialog">
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-body">
	          <form action="<?php echo base_url().'index.php/MainController/login'?>" method="post">
	          <div class="form-group">
	            <label for="username">ID Akun:</label>
	            <input type="text" class="form-control" name="id_akun" placeholder="Masukkan ID Akun" required="required">
	          </div>

	          <div class="form-group">
	            <label for="password">Password:</label>
	            <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required="required">
	          </div>

	          <div class="form-group">
	                <button type="submit" name="submit" value="Login" class="btn btn-success">Login</button>
	                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	              <!-- <button type="button" class="btn btn-primary btn-block">Lupa Password</button></a> -->
	          </div>
	          </form>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</body>
</html>