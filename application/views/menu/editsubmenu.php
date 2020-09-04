<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-6">
      <?= form_error('menu', '<div class="alert alert-danger" role="alert">',  '</div>'); ?>

      <?= $this->session->flashdata('message'); ?>

      <form action="" method="post">
        <input type="hidden" name="id" value="<?= $submenu['id']; ?>">
        <div class="form-group">
          <label for="menu_id">Menu ID</label>
          <select class="form-control" id="menu_id" name="menu_id">
            <?php foreach ($menu as $m) : ?>
              <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
        </div>
        <div class="form-group">
          <label for="url">Url</label>
          <input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>">
        </div>
        <div class="form-group">
          <label for="icon">Icon</label>
          <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Change</button>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->