<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-Masjid</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <!-- <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
  <!-- <link href="<?= base_url(); ?>assets/css/style-salam.css" rel="stylesheet"> -->
</head>
<style>
  body {
    color: #fff !important;
  }
</style>

<body style='background: #343A40'>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #000;">
    <div id="#back-to-top" class="container">
      <a class="navbar-brand-disable"><i class="fas fa-mosque"></i> E-Masjid</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="#program">Program</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="#kajian">Kajian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="#about">About</a>
          </li>
        </ul>
        <span class="nav-text">
          <a class="" href="#jadwal" style="color: #fff; text-decoration: none;">Jadwal Sholat</a>
        </span>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!-- slider -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/slider/mat.JPG" style="object-fit:cover; object-position:center;" class="d-block w-100 h-100 fitXY" alt="slide1">
      </div>
      <div class="carousel-item">
        <img src="assets/img/slider/sholat.JPG" class="d-block w-100 h-100" alt="slide2">
      </div>
      <div class="carousel-item">
        <img src="assets/img/slider/malam.JPG" class="d-block w-100 h-100" alt="slide3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- akhir slider -->

  <!-- konten -->

  <!-- program -->
  <div id="program" align="center">
    <br><br><br>
    <div class="container">
      <section data-spy="scroll">
        <h3 align="center" class="text-white">
          <p>Program</p>
        </h3>
        <div class="row row-cols-1 row-cols-md-3" align="center">
          <?php $i = 1; ?>
          <?php foreach ($program as $row) : ?>
            <div class="col-md-4">
              <div class="card" style="width: 20rem;">
                <img src="assets/img/program/<?= $row['image']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title mt-0 mb-0 text-dark">
                    <?= $row['title']; ?>
                  </h5>
                  <a href="<?= base_url('home/detailprogram/') . $row['id']; ?>" class="stretched-link"></a>
                </div>
              </div>
              <?php $i++; ?><br>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    </div>
  </div>
  <!-- akhir program -->
  <div id="kajian" align="center">
    <br><br><br>
    <div class="container">
      <section data-spy="scroll">
        <h3 align="center" class="text-white">
          <p>Kajian</p>
        </h3>
        <div class="row " align="center">
          <?php $i = 1; ?>
          <?php foreach ($kajian as $row) : ?>
            <div class="col-md-4">
              <div class="card" style=" object-fit:cover; object-position:center; height: 500px;">
                <img src="assets/img/kajian/<?= $row['image']; ?>" class="card-img-top" alt="...">
                <div class="row events-desc mx-auto text-dark" style="height: inherit;">
                  <div class="col-lg-3 col-sm-3 col-3 align-self-center text-center events-time my-auto">
                    <div class="events-month mb-2"><?= date('j M Y', strtotime($row['waktu'])); ?></div>
                  </div>
                  <div class="col-lg-9 col-sm-9 col-9 align-self-center">
                    <h5 class="card-title m-0"><?= $row['tema']; ?></h5>
                    <p class="card-text m-0"><?= $row['tempat']; ?></p><br>
                  </div>
                  <a href="<?= base_url('home/detailkajian/') . $row['id']; ?>" class="stretched-link"></a>
                </div>
              </div>
              <?php $i++; ?><br>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    </div>
  </div>

  <!-- akhir konten -->

  <div class="our-partners-section">
    <div class="our-partners-section">
      <div class="container">
        <div class="text-white" align="center">
          <h2>Donasi</h2>
        </div>
        <br>

        <div class="card mx-auto" style=" max-width: 540px;">
          <div class=" row no-gutters text-dark">
            <div class="col-md-4">
              <img src="assets/img/donasi/<?= $donate['image']; ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p class="" align="center">
                  Bank Mandiri Syariah <br>
                  (451) 77777 78078787 <br>
                  a/n Masjid Agung Kota Tasikmalaya <br><br>

                  INFORMASI & KONFIRMASI <br>
                  <a href="https://wa.me/<?= $masjid['whatsapp']; ?>" class="text-dark"><?= $masjid['whatsapp']; ?></a><br>
                  <a href="mailto:<?= $masjid['email']; ?>" class="text-dark"><?= $masjid['email']; ?></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="text-white mt-4" align="center">
        <h2>Our Partners</h2>
      </div>

      <br>

      <div class="row justify-content-center " align="center">
        <?php $i = 1; ?>
        <?php foreach ($partner as $row) : ?>
          <div class="col-md-2">
            <div class="card justify-content-center" style="width: 8rem;">
              <img src="assets/img/partner/<?= $row['gambar']; ?>" class="card-img-top" alt="...">
            </div>
            <?php $i++; ?><br>
          </div>
        <?php endforeach; ?>
      </div>
    </div> <!-- end .our-partners-section -->

  </div> <!-- end .our-partners-section -->


  <footer id="footer">
    <div class="sticky-footer" style="background-color: #000111">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 mt-3" id="about">
            <h5>About E-Masjid</h5>
            <p>
              <?= $masjid['about']; ?>
            </p>
          </div>

          <div class="col-sm-6 col-md-4 mt-3" id="kontak">
            <h5>Contact Us</h5>
            <i class="fab fa-fw fa-whatsapp"> </i> <a href="https://wa.me/<?= $masjid['whatsapp']; ?>" class="text-light"><?= $masjid['whatsapp']; ?></a><br>
            <i class="fas fa-fw fa-phone-alt"> </i> <?= $masjid['telepon']; ?><br>
            <i class="far fa-fw fa-envelope"> </i> <a href="mailto:<?= $masjid['email']; ?>" class="text-light"><?= $masjid['email']; ?></a><br>
            <i class="fas fa-fw fa-map-marker-alt"> </i> <?= $masjid['alamat']; ?><br>
          </div>

          <!-- jadwal sholat -->
          <div class="col-sm-12 col-md-4">
            <div id="jadwal" class="mt-4 mb-4">
              <!-- class="embed-responsive embed-responsive-16by9" -->
              <iframe class="embed-responsive-item" src="https://www.republika.co.id/jadwal-sholat/" scrolling="no" width="300" height="250" frameborder="no" framespacing="0"></iframe>
            </div>
          </div>
          <!-- akhir jadwal sholat -->
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="sticky-footer py-4" style="background-color: #000;">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; Insan Cita Multimedia <?= date('Y'); ?></span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->
  </footer> <!-- end #footer -->

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <!-- <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script> -->

  <!-- Custom scripts for all pages-->
  <!-- <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script> -->

  <script src="<?= base_url(); ?>assets/js/navbar.js"></script>
</body>

</html>