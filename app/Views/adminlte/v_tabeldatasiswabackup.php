<html>

<div class="row">
  <div class="col-md-12">
    <div class="box box-primary ">

      <div class="box-header with-border">
        <h3 class="box-title">Data Siswa</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-primary btn-sm btn-flat" onclick="window.location.href='<?= base_url('datasiswa/tambah') ?>'">
            <i class="fa fa-plus"> Add</i>
          </button>
        </div>
      </div>

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
                <td>
                  <form method="post" action="<?= base_url('admin/tabeldatasiswa/hapus'); ?>">
                    <input type="hidden" name="nid" value="<?= $row['nid']; ?>">
                    <button type="submit" class="btn btn-outline-danger" onclick="return confirmDelete();">Hapus</button>
                  </form>
                  <form method="post" action="<?= base_url('admin/tabeldatasiswa/edit'); ?>">
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
              <th class="text-center">Action</th>
            </tr>
          </tfoot>
        </table>
      </div>

    </div>
  </div>
</div>

</html>