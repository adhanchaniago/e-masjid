<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= form_open_multipart(); ?>

  <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
        <input type="hidden" name="id" value="<?= $donate['id']; ?>">
        <label for="No Rekening">
          No Rekening
        </label>
        <input type="text" name="no_rek" id="no_rek" class="form-control" value="<?= $donate['no_rek']; ?>">
        <label for="Bank">
          Bank
        </label>
        <input type="text" name="bank" id="bank" class="form-control" value="<?= $donate['bank']; ?>">
        <label for="No Rekening">
          Pemilik Rekening
        </label>
        <input type="text" name="pemilik_rek" id="pemilik_rek" class="form-control" value="<?= $donate['pemilik_rek']; ?>">
        <br>
        <label for="gambar">
          QR Code
        </label>
        <div class="row">
          <div class="col-sm-6">
            <img src="<?= base_url('assets/img/donasi/') . $donate['image']; ?>" alt="..." class="img-thumbnail">
          </div>
          <div class="col-sm">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image" name="image">
              <label class="custom-file-label" for="customFile">Choose File</label>
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Change</button>

    </div>
  </div>

  </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->