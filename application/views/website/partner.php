    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newPartnerModal">Add New Partner</a>

      <?= $this->session->flashdata('message'); ?>

      <div class="row">
        <div class="col-lg-6">
          <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Partner Name</th>
                <th scope="col">Logo</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($partner as $p) : ?>
                <tr>
                  <th scope="row"><?= $i ?></th>
                  <td><?= $p['nama']; ?></td>
                  <td>
                    <img src="<?= base_url('assets/img/partner/') . $p['gambar']; ?>" class="card-img " style="width: 2rem;" alt="...">
                  </td>
                  <td>
                    <a href="<?= base_url('website/editpartner/') . $p['id']; ?>" class="badge badge-success">edit</a>
                    <a href="<?= base_url('website/deletepartner/') . $p['id']; ?>" class="badge badge-danger">delete</a>
                  </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


    <!-- Modal -->
    <div class="modal fade" id="newPartnerModal" tabindex="-1" role="dialog" aria-labelledby="newPartnerModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="newPartnerModalLabel">Add New Partner</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?= form_open_multipart(); ?>
          <div class="modal-body">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Partner name">
          </div>
          <div class="modal-body">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="gambar" name="gambar">
              <label class="custom-file-label" for="customFile">Choose File</label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
          </form>
        </div>
      </div>
    </div>