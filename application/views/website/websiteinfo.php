    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
      <div class="row">
        <div class="col-lg-10 col-md-12">
          <?= form_open_multipart(); ?>

          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">
              Nama Masjid
            </label>
            <div class="col-sm-10 col-md-9 offset-md-1 offset-lg-0">
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $masjid['nama']; ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">
              Alamat
            </label>
            <div class="col-sm-10 col-md-9 offset-md-1 offset-lg-0">
              <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $masjid['alamat']; ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="website" class="col-sm-2 col-form-label">
              Website
            </label>
            <div class="col-sm-10 col-md-9 offset-md-1 offset-lg-0">
              <input type="text" class="form-control" id="website" name="website" value="<?= $masjid['website']; ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="whatsapp" class="col-sm-2 col-form-label">
              WhatsApp
            </label>
            <div class="col-sm-10 col-md-9 offset-md-1 offset-lg-0">
              <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?= $masjid['whatsapp']; ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">
              Email/Telepon
            </label>
            <div class="col-sm-6 offset-md-1 offset-lg-0">
              <input type="text" class="form-control" id="email" name="email" value="<?= $masjid['email']; ?>">
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $masjid['telepon']; ?>">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-2">Logo</div>
            <div class="col-sm-9 offset-md-1 offset-lg-0">
              <div class="row">
                <div class="col-sm-3">
                  <img src="<?= base_url('assets/img/data/') . $masjid['gambar']; ?>" class="img-thumbnail">
                </div>
                <div class="col-sm-9">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="wesite" class="col-sm-2 col-form-label">
              About
            </label>
            <div class="col-sm-10 col-md-9 offset-md-1 offset-lg-0">
              <textarea class="form-control" aria-label="With textarea" id="about" name="about"><?= $masjid['about']; ?></textarea>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-2 offset-lg-2 offset-md-3">
              <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->