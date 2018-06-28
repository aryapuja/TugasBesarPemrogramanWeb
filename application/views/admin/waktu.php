<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'header.php'; ?>
	<meta charset="UTF-8">
</head>
<body>
	<div class="container-fluid">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<?php foreach ($waktu as $info ) { ?>
			<h2>
				Tanggal Mulai: <?php echo $info->mulai; ?> <br>
				Tanggal Selesai: <?php echo $info->selesai; ?>
			</h2>
			<a href="<?php echo site_url()?>/Admin/aturWaktu/<?php echo $info->mulai; ?>"><button type="button" class="btn btn-danger">Atur Ulang</button></a>
		<?php } ?>
	</div>
	</div>
</body>
</html>