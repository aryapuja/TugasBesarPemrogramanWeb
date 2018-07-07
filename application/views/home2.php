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
        <a class="navbar-brand" href="<?php echo site_url();?>/MainController">Selamat Datang</a>
        <ul class="nav navbar-nav navbar-right"> 
          <li>
            <!-- <a class="btn btn-danger navbar-link" href="#registrasi">Registrasi</a> -->
            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#login">Login</a>
            <a class="btn btn-warning" href="<?php echo site_url();?>/MainController/addAkun">Registrasi</a>
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
            <h1 class="mb-5">Selamat Datang di Website Pemungutan Suara Politeknik Negeri Malang</h1>
          </div>
            <h2>Gunakan Hak Pilih Anda Dengan Bijak, Agar Terpilih Sosok Pemimpin yang Tepat</h2>
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
              <h3>Baca</h3>
              <p class="lead mb-0">Bacalah visi dan misi tiap calon!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3>Pahami</h3>
              <p class="lead mb-0">Pahami tiap kalimat dan poin-poin yang tercantum!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Pilih</h3>
              <p class="lead mb-0">Berikan suara anda!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?php echo base_url();?>assets/landing/img/bg-showcase-1.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>STOP BLACK CAMPAIGN</h2>
            <p class="lead mb-0">Tak ada secuilpun kebaikan yang ada di dalamnya, selain hawa nafsu yang hanya akan memuaskan setan. Kampanye hitam adalah contoh nyata dari dehumanisasi kita sebagai mahasiswa yang bermartabat.</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('<?php echo base_url();?>assets/landing/img/bg-showcase-2.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>JUNJUNG TINGGI DEMOKRASI</h2>
            <p class="lead mb-0">Budaya demokrasi mengajarkan bahwa setiap manusia memiliki persamaan harkat dan derajat dari sumber yang sama sebagai makhluk ciptaan yang maha esa.</p>
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
              <p class="font-weight-light mb-0">"<?php echo $key->visi ?>"</p>
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
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
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

  <div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <form action="<?php echo base_url().'index.php/MainController/login'?>" method="post">
          <div class="form-group">
            <label for="username">ID Akun:</label>
            <input type="text" class="form-control" name="id_akun" placeholder="Masukkan ID Akun" required="required">
          </div>

          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required="required">
          </div>

          <div class="form-group">
                <button type="submit" name="submit" value="Login" class="btn btn-success">Login</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
              <!-- <button type="button" class="btn btn-primary btn-block">Lupa Password</button></a> -->
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  </body>

</html>
