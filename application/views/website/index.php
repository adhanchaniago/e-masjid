    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newProgramModal">Add New Program</a>

      <?= $this->session->flashdata('message'); ?>

      <div class="row">
        <div class="col-lg">
          <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
              <?= validation_errors(); ?>
            </div>
          <?php endif; ?>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Desc</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($program as $p) : ?>
                <tr>
                  <th scope="row"><?= $i ?></th>
                  <td><?= $p['title']; ?></td>
                  <td><?= $p['desc']; ?></td>
                  <td>
                    <img src="<?= base_url('assets/img/program/') . $p['image']; ?>" class="card-img " style="width: 4rem;" alt="...">
                  </td>
                  <td>
                    <a href="<?= base_url('website/editprogram/') . $p['id']; ?>" class="badge badge-success">edit</a>
                    <a href="<?= base_url('website/deleteprogram/') . $p['id']; ?>" class="badge badge-danger">delete</a>
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
    <div class="modal fade" id="newProgramModal" tabindex="-1" role="dialog" aria-labelledby="newProgramModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="newProgramModal">Add New Program</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?= form_open_multipart(); ?>
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" id="title" name="title" placeholder="Program title">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="url" name="desc" placeholder="Desc">
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image" name="image">
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