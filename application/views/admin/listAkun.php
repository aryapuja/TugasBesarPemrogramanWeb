<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'header.php'; ?>
	<meta charset="UTF-8">
</head>
<body>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
			<h1>Daftar Akun yang Belum Diterima</h1>
			<div class="table-responsive">
				<table class="table table-hover" id="tes">
					<thead>
						<tr>
							<td><b>ID Akun</b></td>
							<td><b>Nama Akun</b></td>
							<td><b>Nomor KTM</b></td>
							<td><b>Status Akun</b></td>
							<td><b>Status Memilih</b></td>
							<td><b>Tindakan</b></td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($akun as $key ) { ?>
							<tr>
								<td><?php echo $key->id_akun ?></td>
								<td><?php echo $key->nama_akun ?></td>
								<td><?php echo $key->no_ktm ?></td>
								<td><?php echo $key->level ?></td>
								<td><?php echo $key->memilih ?></td>
								<td>
									<a href="<?php echo site_url()?>/Admin/editAkun/<?php echo $key->no_ktm; ?>"><button type="button" class="btn btn-info">Edit</button></a>
									<a href="<?php echo site_url()?>/Admin/hapusAkun/<?php echo $key->no_ktm; ?>"><button type="button" class="btn btn-warning">Hapus</button></a>	
								</td>
							</tr>
							<?php } ?>
					</tbody>
				</table>
			</div>

		</div>
</body>
</html>