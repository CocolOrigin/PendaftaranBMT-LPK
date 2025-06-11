<html>

<div class="row">
  <div class="col-md-12">
    <div class="box box-primary ">

      <div class="box-header with-border">
        <h3 class="box-title">sertifikat Siswa</h3>
        <div class="box-tools pull-right">
          <!-- <button type="button" class="btn btn-primary btn-sm btn-flat" onclick="window.location.href='<?= base_url('sertifikat/tambah') ?>'">
            <i class="fa fa-plus"> Add</i>
          </button> -->
        </div>
      </div>

      <?php
      if (session()->getFlashdata('pesan')) {
        echo '<div class="alert alert-warning alert-dismissible">';
        echo session()->getFlashdata('pesan');
        echo '</div>';
      }

      if (session()->getFlashdata('gagal')) {
        echo '<div class="alert alert-danger alert-dismissible">';
        echo session()->getFlashdata('gagal');
        echo '</div>';
      }

      if (session()->getFlashdata('sukses')) {
        echo '<div class="alert alert-success alert-dismissible">';
        echo session()->getFlashdata('sukses');
        echo '</div>';
      }
      ?>

      <div class="box-body table-responsive offset-1 d-flex col-10">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>NID</th>
              <th>Jenis</th>
              <th>Nama File</th>
              <th>File</th>
              <th>Status</th>
              <!-- <th class="text-center">Action</th> -->
            </tr>
          </thead>
          <tbody>
            <?php foreach ($sertifikat as $row) : ?>
              <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['nid']; ?></td>
                <td><?= $row['jenis']; ?></td>
                <td><?= $row['nama_sertifikat']; ?></td>
                <td>
                  <img src="<?= base_url($row['file_sertifikat']) . '?t=' . rand(); ?>" alt="<?= $row['nama_sertifikat']; ?>" width="400">
                </td>
                <td><?=$row['status'];?>
                  <form method="post" action="<?= base_url('sertifikat/valid'); ?>">
                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    <input type="hidden" name="status" value="<?= $row['status']; ?>">
                    <!-- <button type="submit" class="btn btn-outline-warning"> -->
                      <?php
                      if ($row['status'] == "invalid") {
                        echo "<button type='submit' class='btn btn-success'> Valid </button>";
                      } elseif ($row['status'] == "valid") {
                        echo "<button type='submit' class='btn btn-danger'> Batakan </button>";
                      }
                      ?>
                    <!-- </button> -->
                  </form>
                </td>
                <!-- <td>
                  <form method="post" action="<?= base_url('sertifikat/hapus'); ?>">
                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    <button type="submit" class="btn btn-outline-danger" onclick="return confirmDelete();">Hapus</button>
                  </form>
                  <form method="post" action="<?= base_url('sertifikat/edit'); ?>">
                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    <button type="submit" class="btn btn-outline-warning">Edit</button>
                  </form>
                </td> -->
              </tr>
            <?php endforeach; ?>
          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>NID</th>
              <th>Jenis</th>
              <th>Nama File</th>
              <th>File</th>
              <th>Status</th>
              <th class="text-center">Action</th>
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