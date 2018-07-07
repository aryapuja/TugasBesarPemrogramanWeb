<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Politeknik Negeri Malang</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/gray/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/gray/css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <p class="intro-text">Form Registrasi <br>  <?php echo validation_errors(); ?></p>

                  <?php echo form_open_multipart('MainController/addAkun'); ?>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                   
                    <div class="form-group">
                        <label for="no_ktm">Nomor KTM:</label>
                        <input type="text" class="form-control" name="no_ktm" placeholder="Nomor KTM" required="required" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.keyCode==8 || event.keyCode==9 || event.keyCode==37 || event.keyCode==39'>
                      </div>

                    <div class="form-group">
                        <label for="id">ID Akun:</label>
                        <input type="text" class="form-control" name="id_akun" placeholder="ID Akun (4-12 karakter)" required="required">
                      </div>

                    <div class="form-group">
                      <label for="password">Password:</label>
                      <input type="password" class="form-control" name="password" placeholder="Password (4-12 karakter)" required="required">
                    </div>

                     <div class="form-group">
                      <label for="password2">Konfirmasi Password:</label>
                      <input type="password" class="form-control" name="password2" placeholder="Konfirmasi Password" required="required">
                    </div>

                    <div class="form-group">
                      <label for="nama_akun">Nama Akun:</label>
                      <input type="text" class="form-control" name="nama_akun" placeholder="Nama" required="required">
                    </div>

                    <div class="form-group">
                          <button type="submit" name="submit" value="Login" class="btn btn-info">Register</button>
                          <a href="<?php echo site_url();?>/MainController"><button type="button" class="btn btn-warning" >Home</button></a>
                        <!-- <button type="button" class="btn btn-primary btn-block">Lupa Password</button></a> -->
                    </div>
                  </div>  
                  <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/gray/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/gray/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/gray/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>assets/gray/js/grayscale.min.js"></script>

  </body>

</html>
