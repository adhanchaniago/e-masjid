<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= form_open_multipart(); ?>

  <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
        <input type="hidden" name="id" value="<?= $kajian['id']; ?>">
        <label for="tema">
          Tema
        </label>
        <input type="text" name="tema" id="tema" class="form-control" value="<?= $kajian['tema']; ?>">
        <label for="desc">
          Deskripsi
        </label>
        <textarea class="form-control" name="desc" id="desc" rows="3"><?= $kajian['desc']; ?></textarea>
        <label for="waktu">
          Waktu
        </label>
        <input type="date" name="waktu" id="waktu" class="form-control" value="<?= $kajian['waktu']; ?>">
        <label for="tempat">
          Tempat
        </label>
        <input type="text" name="tempat" id="tempat" class="form-control" value="<?= $kajian['tempat']; ?>">
        <label for="pemateri">
          Pemateri
        </label>
        <input type="text" name="pemateri" id="pemateri" class="form-control" value="<?= $kajian['pemateri']; ?>">
        <label for="image">
          Poster
        </label>
        <div class="row">
          <div class="col-sm-6">
            <img src="<?= base_url('assets/img/kajian/') . $kajian['image']; ?>" alt="" class="img-thumbnail">
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