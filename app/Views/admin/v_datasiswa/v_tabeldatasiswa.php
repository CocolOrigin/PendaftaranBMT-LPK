<html>

<div class="row">
  <div class="col-md-12">
    <div class="box box-primary ">

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
              <th>NID</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Pekerjaan</th>
              <th>Telepon</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Alamat Desa</th>
              <th>Alamat Kecamatan</th>
              <th>Alamat Kabupaten</th>
              <th>Jurusan</th>
              <th>Pendidikan Terakhir</th>
              <th>Tahun Lulus</th>
              <th>Nama Ayah</th>
              <th>Nama Ibu</th>
              <th>Tinggi Badan</th>
              <th>Berat Badan</th>
              <th>Golongan Darah</th>
              <th>Tanggal Daftar</th>
              <th>Status</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
<tbody>
  <?php foreach ($datasiswa as $key => $row) { ?>
    <tr>
      <td><?= $row['nid']; ?></td>
      <td><?= $row['nik']; ?></td>
      <td><?= $row['nama']; ?></td>
      <td><?= $row['gender']; ?></td>
      <td><?= $row['pekerjaan']; ?></td>
      <td><?= $row['telp']; ?></td>
      <td><?= $row['tempat_lahir']; ?></td>
      <td><?= $row['tg_lahir']; ?></td>
      <td><?= $row['alamat_dsn']; ?></td>
      <td><?= $row['alamat_kec']; ?></td>
      <td><?= $row['alamat_kab']; ?></td>
      <td><?= $row['jurusan']; ?></td>
      <td><?= $row['pend_terakhir']; ?></td>
      <td><?= $row['lulus_tahun']; ?></td>
      <td><?= $row['nama_ayah']; ?></td>
      <td><?= $row['nama_ibu']; ?></td>
      <td><?= $row['tinggi_badan']; ?></td>
      <td><?= $row['berat_badan']; ?></td>
      <td><?= $row['gol_darah']; ?></td>
      <td><?= $row['tgl_daftar']; ?></td>
      <td><?= $row['status']; ?></td>
      <td>
        <form method="post" action="<?= base_url('datasiswa/hapus'); ?>">
          <input type="hidden" name="nid" value="<?= $row['nid']; ?>">
          <button type="submit" class="btn btn-outline-danger" onclick="return confirmDelete();">Hapus</button>
        </form>
        <form method="post" action="<?= base_url('datasiswa/edit'); ?>">
          <input type="hidden" name="nid" value="<?= $row['nid']; ?>">
          <button type="submit" class="btn btn-outline-warning">Edit</button>
        </form>
        <!-- <form class="row ms-1 me-1 mt-2" method="post" action="<?= base_url('admin/tabeldatasiswa/hapus'); ?>">
                  <input type="hidden" name="nid" value="<?= $row['nid']; ?>">
                  <button type="button" class="btn btn-outline-warning">Edit</button></div>
              </form> -->
      </td>
    </tr>
  <?php } ?>
</tbody>
          <tfoot>
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