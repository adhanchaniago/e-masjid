    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

      <!-- Content Row -->
      <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Saldo</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($total_saldo, 0, '', '.'); ?></div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Saldo Masuk</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($debet, 0, '', '.'); ?></div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Saldo Keluar</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Rp. <?= number_format($kredit, 0, '', '.'); ?></div>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Users</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $karyawan; ?></div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Content Row -->

      <div class="row mt-3">

        <div class="col-xl-8 col-lg-7">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Profil Masjid</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="row">
                <div class="col-lg pt-5">
                  <div class="chart-pie text-center">
                    <img src="<?= base_url('assets/img/data/') . $masjid['gambar']; ?>" class="ml-3" style="width: 12rem;">
                  </div>
                </div>
                <div class="col-lg pt-3 m-3">
                  <p class="text-dark"><i class="fas fa-fw fa-building"></i> <?= $masjid['nama']; ?></p>
                  <p class="text-dark"><i class="fas fa-fw fa-phone-alt"></i> <?= $masjid['whatsapp']; ?></p>
                  <p class="text-dark"><i class="fas fa-fw fa-phone-alt"></i> <?= $masjid['telepon']; ?></p>
                  <p class="text-dark"><i class="fas fa-fw fa-envelope"></i> <?= $masjid['email']; ?></p>
                  <p class="text-dark"><i class="fas fa-fw fa-map-marker-alt"></i> <?= $masjid['alamat']; ?></p>
                </div>
              </div>
              <div class="mt-4 text-center small">
                <span class="mr-2"><a href="" style="text-decoration: none;" class="text-info"><?= $masjid['website'] ?></a></span>
              </div>
            </div>
          </div>

          <!-- <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
              </div>
              <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                  <canvas id="myPieChart"></canvas>
                </div>
                <div class="mt-4 text-center small">
                  <span class="mr-2">
                    <i class="fas fa-circle text-primary"></i> Direct
                  </span>
                  <span class="mr-2">
                    <i class="fas fa-circle text-success"></i> Social
                  </span>
                  <span class="mr-2">
                    <i class="fas fa-circle text-info"></i> Referral
                  </span>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->