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

<body style='background: #343A40'>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #000;">
    <div id="#back-to-top" class="container">
      <a class="navbar-brand-disable text-white"><i class="fas fa-mosque"></i> E-Masjid</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-secondary" href="<?= base_url(); ?>home#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url(); ?>home#program">Program</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="<?= base_url(); ?>home#kajian">Kajian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="<?= base_url(); ?>home#about">About</a>
          </li>
        </ul>
        <span class="nav-text">
          <a class="nav text-white" href="<?= base_url(); ?>home#jadwalsholat">Jadwal Sholat</a>
        </span>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->


  <div class="container mt-5">
    <br>
    <h3 class="text-white"><?= $program['title']; ?></h3>
    <div class="row">
      <img src=" <?= base_url(); ?>/assets/img/program/<?= $program['image']; ?>" class="img-detail-event mt-0" style="width: 30rem;">
    </div>
    <p class="text-white justify-content-center">
      <br><?= $program['desc']; ?>
    </p>
  </div>

  <!-- Footer -->
  <footer class="sticky-footer py-4" style="background-color: #000; position: fixed; left: 0; bottom: 0; width: 100%; color: white; text-align: center;">
    <div class="container my-auto">
      <div class="copyright text-center my-auto text-white">
        <span>Copyright &copy; Insan Cita Multimedia <?= date('Y'); ?></span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

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