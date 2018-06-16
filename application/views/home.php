<!DOCTYPE html>
<html>
<head>
	<?php include 'header.php'; ?>
</head>
<body>
	<div class="container-fluid">
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
			<div class="table-responsive">
				<table class="table tab" border="0">
					<thead>
						<tr>
							<td><center><b>No. Calon</b></center></td>
							<td><center><b>Nama</b></center></td>
							<!-- <td><center><b>Action</b></center></td> -->
						</tr>
					</thead>
					<tbody>
						<?php foreach ($calon_list as $key ) { ?>
							<tr>
								<td><?php echo "<center>".$key->no_calon."</center>" ?></td>
								<td><?php echo "<center>".$key->nama_akun."</center>" ?></td>
								<!-- <td>
									<center><a href="#"><button type="button" class="btn btn-info">Informasi</button></a></center>
								</td> -->
							</tr>
							<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<div class="jumbotron">
				<div class="container">
					<h1>Selamat Datang</h1>
					<p>Silahkan login untuk memberikan suara anda</p>
					<p>Jangan sampai anda golput, karena ini akan menentukan kualitas himpunan jurusan untuk 1 tahun kedepan </p>
				</div>
			</div>
		</div>
	
</body>

<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login Form</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'index.php/MainController/login'?>" method="post">
			<div class="form-group">
		    	<label for="username">ID:</label>
		     	<input type="text" class="form-control" name="id_akun" placeholder="Masukkan ID" required="required">
		  	</div>

			<div class="form-group">
				<label for="password">Password:</label>
			 	<input type="password" class="form-control" name="password" placeholder="Masukkan Password" required="required">
			</div>

			<div class="form-group">
			  		<button type="submit" name="submit" value="Login" class="btn btn-info">Login</button>
			  		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
					<!-- <button type="button" class="btn btn-primary btn-block">Lupa Password</button></a> -->
			</div>
		</form>
      </div>
    </div>

  </div>
</div>

</html>