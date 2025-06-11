<html>

<div class="row">
  <div class="col-md-12">
    <div class="box box-primary ">

      <div class="box-header with-border">
        <h3 class="box-title">Pembayaran</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-primary btn-sm btn-flat" onclick="window.location.href='<?= base_url('pembayaran/tambahpaket') ?>'">
            <i class="fa fa-plus"> Tambah Paket Pembayaran</i>
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
              <th>DP</th>
              <th>SPP-1</th>
              <th>SPP-2</th>
              <th>SPP-3</th>
              <th>SPP-4</th>
              <th>SPP-5</th>
              <th>SPP-6</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $groupedStatus = [];

            // Group status by NID and jenis
            foreach ($statusData as $statusItem) {
              $nid = $statusItem['nid'];
              $jenis = $statusItem['jenis'];
              $status = $statusItem['status'];

              if (!isset($groupedStatus[$nid])) {
                $groupedStatus[$nid] = [];
              }
              $groupedStatus[$nid][$jenis] = $status;
            }

            // Display grouped status
            $no = 1;
            foreach ($groupedStatus as $nid => $jenisStatus) {
              echo '<tr>';
              echo '<td>' . $no++ . '</td>';
              echo '<td>' . $nid . '</td>';

              foreach (['DP', 'SPP-1', 'SPP-2', 'SPP-3', 'SPP-4', 'SPP-5', 'SPP-6'] as $jenis) {
                echo '<td>' . (isset($jenisStatus[$jenis]) ? $jenisStatus[$jenis] : '') . '</td>';
              }

              echo '<td>';
              echo '<a href="' . base_url('pembayaran/lihat/') . $nid . '" class="btn btn-danger">Lihat</a>';
              echo '<a href="' . base_url('pembayaran/hapus/') . $nid . '" class="btn btn-danger">Hapus</a>';
              echo '</td>';

              echo '</tr>';
            }
            ?>
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