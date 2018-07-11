<!DOCTYPE html>
<html lang="en">
<head>
    <script src="<?php echo base_url();?>assets/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.css">
	
</head>
<style type="text/css">
    .card{
        height: 300px;
    }
</style> 
<body>
<div class="container-fluid">
    <h2>Total Partisipan: <?php echo $jmlhBlm + $jmlhSdh; ?> </h2>
    <h2>Jumlah suara yang belum memilih: <?php echo $jmlhBlm; ?> </h2>
    <h2>Jumlah suara Masuk: <?php echo $jmlhSdh; ?> </h2>
    <center><h1>Daftar Akun</h1></center>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td><b>ID Akun</b></td>
                        <td><b>Nama Akun</b></td>
                        <td><b>Nomor KTM</b></td>
                        <td><b>Status Akun</b></td>
                        <td><b>Status Memilih</b></td>
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
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    <center><h1>Perolehan Suara</h1></center>
	<div class="row">
        <!-- Column -->
        <?php foreach ($info_calon as $key ) { ?>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-block">
                    <center> <img src="<?php echo base_url()?>assets/upload/<?php echo $key->foto?>" width=250 height=300 />
					<h4 class="card-title m-t-10"> Calon <?php echo $key->no_calon ?></h4>
					<div class="row text-center justify-content-md-center">
						<div class="col-4">
							<font class="font-medium"> <?php echo $key->nama_akun ?></font>
						</div>
						<div class="col-4"> 
							<font class="font-medium">Jumlah Suara: <?php echo $key->jumlah_suara ?></font>
						</div>
                    </div>
                    </center>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>		
</body>
</html>