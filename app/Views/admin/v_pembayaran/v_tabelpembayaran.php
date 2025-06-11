<html>

<div class="row">
  <div class="col-md-12">
    <div class="box box-primary ">

      <div class="box-header with-border">
        <h3 class="box-title">Pembayaran</h3>
        <div class="box-tools pull-right">
          <!-- <button type="button" class="btn btn-primary btn-sm btn-flat" onclick="window.location.href='<?= base_url('pembayaran/tambah') ?>'">
            <i class="fa fa-plus"> Tambah Satu Data</i>
          </button> -->
          <button type="button" class="btn btn-primary btn-sm btn-flat" onclick="window.location.href='<?= base_url('pembayaran/cetak/'.$nid) ?>'">
            <i class="fa fa-print">Cetak Rekap</i>
          </button>
        </div>
      </div>

      <?php
      if (session()->getFlashdata('sukses')) {
        echo '<div class="alert alert-success alert-dismissible">';
        echo session()->getFlashdata('sukses');
        echo '</div>';
      }

      if (session()->getFlashdata('gagal')) {
        echo '<div class="alert alert-danger alert-dismissible">';
        echo session()->getFlashdata('gagal');
        echo '</div>';
      }
      ?>

      <div class="box-body table-responsive offset-1 d-flex col-10">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>NID</th>
              <th>Kode Bayar</th>
              <th>Jenis</th>
              <th>Tanggal</th>
              <th>Tagihan</th>
              <th>Terbayar</th>
              <th>Status</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data as $key => $row) { ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nid']; ?></td>
                <td><?= $row['kdbayar']; ?></td>
                <td><?= $row['jenis']; ?></td>
                <td><?= $row['tanggal']; ?></td>
                <td>Rp. <?= $row['tagihan']; ?></td>
                <td>Rp. <?= $row['terbayar']; ?></td>
                <td><?= $row['status']; ?></td>
                <td>
                  <!-- <form method="post" action="<?= base_url('pembayaran/edit'); ?>">
                    <input type="hidden" name="kdbayar" value="<?= $row['kdbayar']; ?>">
                    <button type="submit" class="btn btn-outline-warning">Edit</button>
                  </form> -->
                  <a type="submit" class="btn btn-primary" href="<?= base_url('pembayaran/edit/') ?><?= $row['kdbayar']; ?>">Edit</a>                  
                </td>
              </tr>
            <?php } ?>
          </tbody>
          <tfoot>
            <tr>
            </tr>
          </tfoot>
        </table>
      </div>
              
    </div>
  </div>
</div>

<div class="modal modal-danger fade" id="modal-danger">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Danger Modal</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline">Save changes</button>
      </div>
    </div>

  </div>

</div>


</html>