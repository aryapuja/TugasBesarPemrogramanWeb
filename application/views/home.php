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
									<center><a href="#"><button type="button" class="btn btn-info">Cek</button></a></center>
								</td>
							</tr>
							<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<div class="jumbotron">
				<div class="container">
					<h1>Selamat Datang</h1>
					<p>Silahkan login untuk memberikan suara anda</p>
					<p>Jika belum memiliki akun, silahkan mendaftar terlebih dahulu</p>
				</div>
			</div>

			<div class="panel-group" id="accordion">
				
				<div class="panel panel-info">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><b>Syarat Pendaftaran Peserta Pemilih</b></a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse in">
						<div class="panel-body">
							1. Mahasiswa aktif Politeknik Negeri Malang dengan bukti memiliki NIM saat pendaftaran. <br>
							2. Bukan merupakan calon yang terdaftar pada saat pemilihan.
						</div>
					</div>
				</div>

				<div class="panel panel-info">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><b>Syarat Pendaftaran Calon Ketua Umum</b></a>
						</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">
							1. Mahasiswa aktif Politeknik Negeri Malang yang sedang menempuh pendidikan maksimal semester 6 <br>
							2. Memiliki Index Prestasi Akademik (IPK) >= 3.5 <br>
							3. Berdedikasi dan siap melaksanakan kewajiban sebagai ketua <br>
							4. Melampirkan Visi dan Misi. <br>
						</div>
					</div>
				</div>
			</div> 

		</div>
	
</body>

</html>