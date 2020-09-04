    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newTrx">Add Transaksi</a>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Kode</th>
            <th scope="col">Tgl</th>
            <th scope="col">Keterangan</th>
            <th scope="col" class="text-right">Debet (Rp)</th>
            <th scope="col" class="text-right">Kredit (Rp)</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($kas as $p) : ?>
            <tr>
              <th scope="row"><?= $i ?></th>
              <td><?= $p['kd_rek']; ?></td>
              <td><?= $p['tgl']; ?></td>
              <td><?= $p['keterangan']; ?></td>
              <td class="text-right"><?= number_format($p['debet'], 0, '', ',') ?></td>
              <td class="text-right"><?= number_format($p['kredit'], 0, '', ',') ?></td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
          <tr>
            <td colspan="5" class="text-right font-weight-bold">Saldo</td>
            <td colspan="2" class="text-right font-weight-bold"><?= number_format($total_saldo, 0, '', ','); ?></td>
          </tr>
        </tbody>
      </table>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


    <!-- Modal -->
    <div class="modal fade" id="newTrx" tabindex="-1" role="dialog" aria-labelledby="newTrx" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="newTrx">Add Transaksi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url('management'); ?>" method="post">
            <div class="modal-body">
              <div class="form-group">
                <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Tanggal">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="keterangan">
              </div>
              <div class="form-group">
                <select class="custom-select" name="method" id="inputGroupSelect01">
                  <option selected disabled>Pilih</option>
                  <option value="debet">Debet</option>
                  <option value="kredit">Kredit</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Rp.">
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