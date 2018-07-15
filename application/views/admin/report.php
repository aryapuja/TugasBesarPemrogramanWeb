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
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <center><h1>Total Partisipan: <?php echo $jmlhBlm + $jmlhSdh; ?> </h1></center>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr> 
                        <td><center><b>Jumlah suara Masuk: <?php echo $jmlhSdh; ?> (<?php echo round(($jmlhSdh/($jmlhBlm + $jmlhSdh))*100) ?>%) suara</b></center></td>
                        <td><center><b>Belum memilih: <?php echo $jmlhBlm; ?> (<?php echo round(($jmlhBlm/($jmlhBlm + $jmlhSdh))*100) ?>%) suara</b></center></td>
                    </tr>
                </thead>
            </table>
        </div>

    <center><h1>Perolehan Suara</h1></center>

    <div class="table-responsive">
        <table class="table" border="0">
            <thead>
                <tr>
                    <?php foreach ($info_calon as $key ) { ?>
                    <td><center><b>Calon <?php echo $key->no_calon ?>: <?php echo $key->nama_akun ?></b></center></td>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($info_calon as $key ) { ?>
                    <td><center><?php echo round(($key->jumlah_suara/($jmlhBlm + $jmlhSdh))*100) ?> % (<?php echo $key->jumlah_suara ?> suara)</center></td>
                     <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>


     <center><h1>Daftar Aku yang Terdaftar</h1></center>

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

    </div>
</div>
         
</body>
</html>