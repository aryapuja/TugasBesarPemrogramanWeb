<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'header.php'; ?>
	<meta charset="UTF-8">
</head>
<body>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
			<h1>DAFTAR BAKAL CALON PEMIMPIN</h1>
			<div class="table-responsive">
				<table class="table table-hover" id="tes">
					<thead>
						<tr>
							<td><b>ID Akun</b></td>
							<td><b>Nama Akun</b></td>
							<td><b>Visi</b></td>
							<td><b>Misi</b></td>
							<td><b>IPK</b></td>
							<td><b>Lampiran</b></td>
							<td><b>Tindakan</b></td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($calon as $key ) { ?>
							<tr>
								<td><?php echo $key->id_akun ?></td>
								<td><?php echo $key->nama_akun ?></td>
								<td><?php echo $key->Visi ?></td>
								<td><?php echo nl2br($key->Misi) ?></td>
								<td><?php echo $key->Ipk ?></td>
								<td><?php echo $key->lampiran ?></td>
								<td>
									<a href="<?php echo site_url()?>/Admin/terimaCalon/<?php echo $key->id_akun; ?>"><button type="button" class="btn btn-info">Lolos</button></a>
									<a href="<?php echo site_url()?>/Admin/tolakCalon/<?php echo $key->id_akun; ?>"><button type="button" class="btn btn-warning">Tidak Lolos</button></a>	
								</td>
							</tr>
							<?php } ?>
					</tbody>
				</table>
			</div>

		</div>
</body>
</html>