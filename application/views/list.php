<!DOCTYPE html>
<html>
<head>
	<?php include 'header.php'; ?>
</head>
<body>
	<div class="container-fluid">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<div class="table-responsive">
				<table class="table tab" border="0">
					<thead>
						<tr>
							<td><center><b>No. Calon</b></center></td>
							<td><center><b>Nama</b></center></td>
							<td><center><b>Informasi</b></center></td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($calon_list as $key ) { ?>
							<tr>
								<td><?php echo "<center>".$key->no_calon."</center>" ?></td>
								<td><?php echo "<center>".$key->nama_akun."</center>" ?></td>
								<td>
									<center><a href="<?php echo site_url();?>/MainController/list/<?php echo $key->no_calon; ?>"><button type="button" class="btn btn-info">Cek</button></a></center>
								</td>
							</tr>
							<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			
			<h1>Calon Nomor Urut <?php echo $key->no_calon ?></h1>
			
			<div class="table-responsive">
				<table class="table tab" border="0">
					<thead>
						<tr>
							<td><center><b>Nama</b></center></td>
							<td><center><b>Foto</b></center></td>
							<td><center><b>Visi</b></center></td>
							<td><center><b>Misi</b></center></td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($info_calon as $info ) { ?>
							<tr>
								<td><?php echo $info->nama_akun ?></td>
								<td><?php echo $info->foto ?></td>
								<td><?php echo $info->visi ?></td>
								<td><?php echo $info->misi ?></td>
							</tr>
							<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	
</body>

</html>