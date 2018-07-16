<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include 'header.php'; ?>
</head>
<body>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
			<?php echo form_open_multipart('Admin/aturWaktu/'.$this->uri->segment(3)); ?>

			<legend>Pengaturan Waktu Pemilihan</legend>

			<div class="form-group">
				<label for="mulai">Waktu Mulai Pemilihan:</label>
			 	<input type="date" class="form-control" name="mulai" value="<?php echo $waktu[0]->mulai ?>">
			</div>

			<div class="form-group">
				<label for="selesai">Waktu Selesai Pemilihan:</label>
			 	<input type="date" class="form-control" name="selesai" value="<?php echo $waktu[0]->selesai ?>">
			</div>

			<button type="submit" class="btn btn-success">Submit</button>

			
			<?php echo form_close(); ?>
		</div>
</body>
</html>