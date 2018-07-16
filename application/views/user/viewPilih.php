<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pemilihan</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/pilih/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url();?>assets/pilih/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/pilih/https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='<?php echo base_url();?>assets/pilih/https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url();?>assets/pilih/https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url();?>assets/pilih/https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/pilih/css/agency.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <style type="text/css" media="screen">
      .rounded-circle{
        height: 300px;
      }
    </style>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a> -->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url();?>/User">Home</a>
            </li>
            <?php foreach ($info_calon as $key): ?>
              <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#calon<?php echo $key->no_calon ?>">Calon <?php echo $key->no_calon ?></a>
            </li>
            <?php endforeach ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#pilih">Pilih</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Baca, Pahami, Pilih!</div>
          <div class="intro-heading text-uppercase">SATU SUARA UNTUK PERUBAHAN YANG LEBIH BAIK</div>
          <!-- <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a> -->
        </div>
      </div>
    </header>

    <!-- Services -->
    <?php foreach ($info_calon as $key): ?>
      <section id="calon<?php echo $key->no_calon ?>">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Calon Nomor Urut <?php echo $key->no_calon ?></h2>
            <!-- <h3 class="section-subheading text-muted"><?php echo $key->nama_akun ?></h3> -->
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-commenting fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Visi</h4>
            <p class="text-muted"><?php echo $key->visi ?></p>
          </div>
          <div class="col-md-4">
            <!-- <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span> -->
            <h4 class="service-heading"><?php echo $key->nama_akun ?></h4>
            <img class="mx-auto rounded-circle" src="<?php echo base_url()?>assets/upload/<?php echo $key->foto?>" alt="<?php echo $key->foto?>">
            <!-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p> -->
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-tasks fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Misi</h4>
            <p class="text-muted"><?php echo nl2br($key->misi) ?></p>
          </div>
        </div>
      </div>
    </section>
    <?php endforeach ?>

    <!-- Team -->
    <section class="bg-light" id="pilih">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Pilihlah Dengan Bijak</h2>
            <h3 class="section-subheading text-muted">Jangan sampai menyesali pilihan anda sendiri</h3>
          </div>
        </div>
        <div class="row">
        <?php foreach ($info_calon as $key): ?>
          <div class="col-sm-4">
            <div class="team-member">
              <h4 class="service-heading"> Calon Nomor Urut <?php echo $key->no_calon ?> </h4>
              <img class="mx-auto rounded-circle" src="<?php echo base_url()?>assets/upload/<?php echo $key->foto?>" alt="">
              <a href="<?php echo site_url();?>/Pilih/vote/<?php echo $key->no_calon ?>" onclick="return confirm('Anda Yakin Dengan Pilihan Anda?')"><h4><?php echo $key->nama_akun ?></h4></a>
            </div>
          </div><?php endforeach ?>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/pilih/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/pilih/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/pilih/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php echo base_url();?>assets/pilih/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url();?>assets/pilih/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>assets/pilih/js/agency.min.js"></script>

  </body>

</html>
