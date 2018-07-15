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
				Batas Akhir Pendaftaran Calon Pemimpin: <?php echo date('d-F-Y',strtotime($info->mulai."-2 week")); ?> <br>				
				Tanggal Pemilihan Mulai: <?php echo date('d-F-Y-Y',strtotime($info->mulai)); ?> <br>
				Tanggal Pemilihan Selesai: <?php echo date('d-F-Y',strtotime($info->selesai)); ?>
			</h2>
			<a href="<?php echo site_url()?>/Admin/aturWaktu/<?php echo $info->mulai; ?>"><button type="button" class="btn btn-danger">Atur Ulang</button></a>
		<?php } ?>
	</div>
	</div>
</body>
</html>