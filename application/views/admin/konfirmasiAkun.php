<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include 'header.php'; ?>
</head>
<body>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
			<?php echo form_open_multipart('Admin/terimaAkun/'.$this->uri->segment(3)); ?>

			<legend>Data Akun Baru</legend>

			<div class="form-group">
		    	<label for="no_ktm">Nomor KTM:</label>
		     	<input type="text" class="form-control" name="no_ktm" value="<?php echo $antri[0]->no_ktm ?>" readonly>
		  	</div>

			<div class="form-group">
		    	<label for="id">ID Akun:</label>
		     	<input type="text" class="form-control" name="id_akun" value="<?php echo $antri[0]->id_akun ?>" readonly>
		  	</div>

			<div class="form-group">
				<label for="password">Password:</label>
			 	<input type="password" class="form-control" name="password" value="<?php echo $antri[0]->password ?>" readonly>
			</div>

			<div class="form-group">
				<label for="nama_akun">Nama Akun:</label>
			 	<input type="text" class="form-control" name="nama_akun" value="<?php echo $antri[0]->nama_akun ?>" readonly>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>

			
			<?php echo form_close(); ?>
		</div>
</body>
</html>