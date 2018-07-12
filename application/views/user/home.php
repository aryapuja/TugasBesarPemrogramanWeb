<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Politeknik Negeri Malang</title>

    <script src="<?php echo base_url();?>assets/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/jquery.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url();?>assets/landing/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/landing/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/landing/css/landing-page.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url();?>/User">Selamat Datang</a>
        <ul class="nav navbar-nav navbar-right"> 
          <li>
            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#edit"><?php echo $this->session->userdata('nama'); ?></a>
            <a class="btn btn-danger navbar-link" href="<?php echo site_url();?>/MainController/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Selamat Datang <?php echo $this->session->userdata('nama'); ?> </h1>
          </div>
           <h2>Gunakan Hak Pilih Anda Dengan Bijaksana, Agar Terpilih Sosok Pemimpin yang Tepat</h2>
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>Status Akun</h3>
              <p class="lead mb-0"><?php echo $this->session->userdata('level'); ?></p>
              <p class="lead mb-0"><a href="<?php echo site_url();?>/Daftar/daftarCalon/<?php echo $this->session->userdata('id') ?>">Daftar Menjadi Calon</a></p>
              <p class="lead mb-0"><a href="<?php echo site_url();?>/Calon/editInfoCalon/<?php echo $this->session->userdata('id') ?>">Halaman Calon</a></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3>Hak Suara</h3>
              <p class="lead mb-0"><?php echo $this->session->userdata('memilih'); ?> digunakan</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div> 
             <a href="<?php echo site_url();?>/Pilih/"><h3>Klik Disini</h3></a>
              <p class="lead mb-0">Untuk menggunakan hak suara anda!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">Calon Pemimpin Himpunan Teknologi Informasi</h2>
        <div class="row">
          <?php foreach ($info_calon as $key ) { ?>
            <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="<?php echo base_url()?>assets/upload/<?php echo $key->foto?>" alt="no-image">
              <h5>Calon <?php echo $key->no_calon ?>: <?php echo $key->nama_akun ?></h5>
              <h6>Visi</h6>
              <p class="font-weight-light mb-0">"<?php echo $key->visi ?>"</p>
              <h6>Misi</h6>
              <p class="font-weight-light mb-0"><?php echo nl2br($key->misi) ?></p>
            </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="https://www.facebook.com/polinema">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="https://twitter.com/polinema_malang">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/hmtipolinema/">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/landing/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    

  <div id="edit" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <form action="<?php echo base_url().'index.php/User/editAkun/'.$this->session->userdata('id') ?>" method="post">
          <div class="form-group">
            <label for="id_akun">ID Akun:</label>
            <input type="text" class="form-control" name="id_akun" value="<?php echo $this->session->userdata('id'); ?>" readonly>
          </div>

          <div class="form-group">
            <label for="nama_akun">Nama Akun:</label>
            <input type="text" class="form-control" name="nama_akun" placeholder="Masukkan ID Akun" required="required" value="<?php echo $this->session->userdata('nama'); ?>">
          </div>

          <div class="form-group">
                <button type="submit" name="submit" value="Login" class="btn btn-success">Update</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <!-- <button type="button" class="btn btn-primary btn-block">Lupa Password</button></a> -->
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  </body>

</html>