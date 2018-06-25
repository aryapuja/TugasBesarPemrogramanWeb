<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'header.php'; ?>
</head>
<style type="text/css">
    .card{
        height: 300px;
    }
</style> 
<body>
<div class="container-fluid">
	<center><h1>Perolehan Suara</h1></center>
		<div class="row">
            <!-- Column -->
            <?php foreach ($info_calon as $key ) { ?>
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-block">
                        <center class="m-t-30"> <img src="<?php echo base_url()?>assets/upload/<?php echo $key->foto?>" class="img-circle" width="300" />
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