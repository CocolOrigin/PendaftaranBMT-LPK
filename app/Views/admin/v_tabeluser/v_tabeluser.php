<html>

<div class="row">
  <div class="col-md-12">
    <div class="box box-primary ">

      <div class="box-header with-border">
        <h3 class="box-title">Data User</h3>
        <div class="box-tools pull-right">
          <!-- <button type="button" class="btn btn-primary btn-sm btn-flat" onclick="window.location.href='<?= base_url('tabeluser/tambah') ?>'"> -->
            <!-- <i class="fa fa-plus"> Add</i> -->
          <!-- </button> -->
        </div>
      </div>

      <?php
      if (session()->getFlashdata('pesan')) {
        echo '<div class="alert alert-danger alert-dismissible">';
        echo session()->getFlashdata('pesan');
        echo '</div>';
      }

      if (session()->getFlashdata('gagal')) {
        echo '<div class="alert alert-danger alert-dismissible">';
        echo session()->getFlashdata('gagal');
        echo '</div>';
      }

      if (session()->getFlashdata('sukseshapus')) {
        echo '<div class="alert alert-danger alert-dismissible">';
        echo session()->getFlashdata('sukseshapus');
        echo '</div>';
      }

      if (session()->getFlashdata('suksesedit')) {
        echo '<div class="alert alert-danger alert-dismissible">';
        echo session()->getFlashdata('suksesedit');
        echo '</div>';
      }

      if (session()->getFlashdata('gagaledit')) {
        echo '<div class="alert alert-danger alert-dismissible">';
        echo session()->getFlashdata('gagaledit');
        echo '</div>';
      }
      ?>

      <div class="box-body table-responsive offset-1 d-flex col-10">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>N0</th>
              <th>Nama User</th>
              <th>Username</th>
              <th>Password</th>
              <th>Role</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
<?php $no = 1; ?>
<?php foreach ($data as $key => $row) { ?>
<tr>
<td><?= $no++; ?></td>
<td><?= $row['nama_user']; ?></td>
<td><?= $row['username']; ?></td>
<td><?= $row['password']; ?></td>
<td>
<?php if ($row['role'] == 1) : ?>
admin
<?php elseif ($row['role'] == 2) : ?>
siswa
<?php elseif ($row['role'] == 3) : ?>
pendaftar
<?php endif; ?>
</td>
<td>
<form method="post" action="<?= base_url('tabeluser/edit'); ?>">
<input type="hidden" name="id" value="<?= $row['id']; ?>">
<button type="submit" class="btn btn-outline-warning">Edit</button>
</form>
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