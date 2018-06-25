<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pendaftaran</title>
</head>
<body>
	<div class="container-fluid">
		
	<?php include 'header.php'; ?>

	<?php echo form_open_multipart('MainController/addAkun'); ?>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo validation_errors(); ?>
			<legend>Form Pendaftaran</legend>

			<div class="form-group">
		    	<label for="no_ktm">Nomor KTM:</label>
		     	<input type="text" class="form-control" name="no_ktm" placeholder="Masukkan Nomor KTM Anda" required="required" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39'>
		  	</div>

			<div class="form-group">
		    	<label for="id">ID Akun:</label>
		     	<input type="text" class="form-control" name="id_akun" placeholder="Masukkan ID Akun Anda (4-12 karakter)" required="required">
		  	</div>

			<div class="form-group">
				<label for="password">Password:</label>
			 	<input type="password" class="form-control" name="password" placeholder="Masukkan Password Anda (4-12 karakter)" required="required">
			</div>

			<div class="form-group">
				<label for="nama_akun">Nama Akun:</label>
			 	<input type="text" class="form-control" name="nama_akun" placeholder="Masukkan Nama Anda" required="required">
			</div>

			<div class="form-group">
			  		<button type="submit" name="submit" value="Login" class="btn btn-info">Register</button>
			  		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
					<!-- <button type="button" class="btn btn-primary btn-block">Lupa Password</button></a> -->
			</div>
		</div>	
	<?php echo form_close(); ?>

</body>
</html>