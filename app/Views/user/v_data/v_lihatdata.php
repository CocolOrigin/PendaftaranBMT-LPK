<?php
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

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-8">
        <form method="post" action="<?= base_url('user/data/edit'); ?>">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">NID</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <input class="form-control disabled" type="text" id="nid" name="nid" value="<?= $datasiswa['nid']; ?>" readonly required>
                </div>
                <div class="box-footer">
                </div>
            </div>

            <div class="form-group">
                <input class="form-control" type="text" id="nama" name="nama" placeholder="Nama" value="<?= $datasiswa['nama']; ?>" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" id="nik" name="nik" placeholder="NIK" value="<?= $datasiswa['nik']; ?>" required>
            </div>
            <div class="form-group">
                <select class="form-control" name="gender" placeholder="Gender" required>
                    <option value="" disabled selected>Gender</option>
                    <option value="L" <?= ($datasiswa['gender'] == 'L') ? 'selected' : ''; ?>>Laki-Laki</option>
                    <option value="P" <?= ($datasiswa['gender'] == 'P') ? 'selected' : ''; ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" value="<?= $datasiswa['pekerjaan']; ?>" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" id="telp" name="telp" placeholder="Telepon" value="<?= $datasiswa['telp']; ?>" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="tinggi_badan" placeholder="Tinggi Badan" min="150" value="<?= $datasiswa['tinggi_badan']; ?>" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="berat_badan" placeholder="Berat Badan" min="30" value="<?= $datasiswa['berat_badan']; ?>" required>
            </div>
            <div class="form-group">
                <select class="form-control" name="gol_darah" placeholder="Golongan Darah" required>
                    <option value="" disabled>Golongan Darah</option>
                    <option value="O" <?= ($datasiswa['gol_darah'] == 'O') ? 'selected' : ''; ?>>O</option>
                    <option value="A" <?= ($datasiswa['gol_darah'] == 'A') ? 'selected' : ''; ?>>A</option>
                    <option value="B" <?= ($datasiswa['gol_darah'] == 'B') ? 'selected' : ''; ?>>B</option>
                    <option value="AB" <?= ($datasiswa['gol_darah'] == 'AB') ? 'selected' : ''; ?>>AB</option>
                </select>
            </div>
            <div class="form-group">
                <p>Tempat Tanggal Lahir</p>
                <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= $datasiswa['tempat_lahir']; ?>" required>
            </div>

            <div class="form-group">
                <label>Date:</label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input class="form-control pull-right" type="date" id="datepicker" name="tg_lahir" placeholder="Tanggal Lahir" value="<?= $datasiswa['tg_lahir']; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <p>Alamat</p>
                <input class="form-control" type="text" name="alamat_dsn" placeholder="Desa" value="<?= $datasiswa['alamat_dsn']; ?>" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="alamat_kec" placeholder="Kecamatan" value="<?= $datasiswa['alamat_kec']; ?>" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="alamat_kab" placeholder="Kabupaten" value="<?= $datasiswa['alamat_kab']; ?>" required>
            </div>
            <div class="form-group">
                <p>Pendidikan Terakhir</p>
                <select class="form-control" name="pend_terakhir" placeholder="Tamatan" required>
                    <option value="" disabled>Tamatan</option>
                    <option value="SMK" <?= ($datasiswa['pend_terakhir'] == 'SMK') ? 'selected' : ''; ?>>SMK sederajat</option>
                    <option value="SMA" <?= ($datasiswa['pend_terakhir'] == 'SMA') ? 'selected' : ''; ?>>SMA sederajat</option>
                    <option value="D1-D3" <?= ($datasiswa['pend_terakhir'] == 'D1-D3') ? 'selected' : ''; ?>>D1-D3</option>
                    <option value="D4/S1" <?= ($datasiswa['pend_terakhir'] == 'D4/S1') ? 'selected' : ''; ?>>D4/S1</option>
                    <option value="S2" <?= ($datasiswa['pend_terakhir'] == 'S2') ? 'selected' : ''; ?>>S2</option>
                    <option value="S3" <?= ($datasiswa['pend_terakhir'] == 'S3') ? 'selected' : ''; ?>>S3</option>
                </select>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="jurusan" placeholder="Jurusan" value="<?= $datasiswa['jurusan']; ?>" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="lulus_tahun" placeholder="Tahun Kelulusan" min="1990" value="<?= $datasiswa['lulus_tahun']; ?>" required>
            </div>
            <div class="form-group">
                <p>Orang Tua</p>
                <input class="form-control" type="text" name="nama_ayah" placeholder="Nama Ayah" value="<?= $datasiswa['nama_ayah']; ?>" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="nama_ibu" placeholder="Nama Ibu" value="<?= $datasiswa['nama_ibu']; ?>" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="status" placeholder="Status" value="<?= $datasiswa['status']; ?>" readonly required>
            </div>

            <div>
                <button class="btn btn-primary w-100 animated-btn" type="submit">Simpan Perubahan</button>
            </div>

        </form>
    </div>
    <div class="col-md-3"></div>
</div>