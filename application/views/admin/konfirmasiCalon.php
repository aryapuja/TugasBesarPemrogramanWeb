<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include 'header.php'; ?>
</head>
<body>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
			<?php echo form_open_multipart('Admin/terimaCalon/'.$this->uri->segment(3)); ?>

			<legend>Data Bakal Calon Pemimpin</legend>

			<div class="form-group">
		    	<label for="id">ID Akun:</label>
		     	<input type="text" class="form-control" name="id_akun" value="<?php echo $antri[0]->id_akun ?>" readonly>
		  	</div>

			<div class="form-group">
				<label for="nama_akun">Nama Akun:</label>
			 	<input type="text" class="form-control" name="nama_akun" value="<?php echo $antri[0]->nama_akun ?>" readonly>
			</div>

			<div class="form-group">
				<label for="nama_akun">Visi:</label>
			 	<input type="text" class="form-control" name="visi" value="<?php echo $antri[0]->Visi ?>" readonly>
			</div>

			<!-- <div class="form-group">
				<label for="nama_akun">Misi:</label>
			 	<input type="text" class="form-control" name="misi" value="<?php echo $antri[0]->Misi ?>" readonly>
			</div> -->

			<div class="form-group">
				<label for="nama_akun">Misi:</label>
			 	<textarea class="form-control" name="misi" readonly><?php echo $antri[0]->Misi ?></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>

			
			<?php echo form_close(); ?>
		</div>
</body>
</html>