<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-8">
<form method="post" action="<?= base_url('datasiswa/update'); ?>">
<div class="box">
<div class="box-header with-border">
<h3 class="box-title">NID</h3>
<div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
</div>
</div>
<div class="box-body">
<div class="form-group">
    <input class="form-control disabled" type="text" id="nid" name="nid" value="<?= $datasiswa['nid']; ?>" readonly required>
</div>
<label for="">Status</label>
<div class="form-group">
    <select class="form-control" name="status" placeholder="Tamatan" required>
        <option value="" disabled>Status</option>
        <option value="pendaftar" <?= ($datasiswa['status'] == 'pendaftar') ? 'selected' : ''; ?>>Pendaftar</option>
        <option value="siswa" <?= ($datasiswa['status'] == 'siswa') ? 'selected' : ''; ?>>Siswa</option>
        <option value="lulus" <?= ($datasiswa['status'] == 'lulus') ? 'selected' : ''; ?>>Lulus</option>
    </select>
</div>
</div>
<div class="box-footer">
<p>nomor identitas paten tidak dapat diubah</p>
</div>
</div>

<div class="box">
<div class="box-header with-border">
<h3 class="box-title">Data Diri</h3>
<div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
</div>
</div>
<div class="box-body">
<div class="form-group">
    <label for="nama">Nama Lengkap</label>
    <input class="form-control" type="text" id="nama" value="<?= $datasiswa['nama']; ?>" required>
</div>
<div class="form-group">
    <label for="">Nomor Induk Kependudukan</label>
    <input class="form-control" type="text" id="nik" value="<?= $datasiswa['nik']; ?>" required>
</div>
<label for="">Tempat Tanggal Lahir</label>
<div class="form-group">
    <input class="form-control" type="text" value="<?= $datasiswa['tempat_lahir']; ?>" required>
</div>
<div class="form-group">
    <label>Date:</label>
    <div class="input-group date">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        <input class="form-control pull-right" type="date" id="datepicker" value="<?= $datasiswa['tg_lahir']; ?>" required>
    </div>
</div>
<div class="form-group">
    <label for="">Gender</label>
    <select class="form-control" required>
        <option value="" disabled selected>Gender</option>
        <option value="L" <?= ($datasiswa['gender'] == 'L') ? 'selected' : ''; ?>>Laki-Laki</option>
        <option value="P" <?= ($datasiswa['gender'] == 'P') ? 'selected' : ''; ?>>Perempuan</option>
    </select>
</div>
<div class="form-group">
    <label for="">Pekerjaan Saat Ini</label>
    <input class="form-control" type="text" id="pekerjaan" value="<?= $datasiswa['pekerjaan']; ?>" required>
</div>
<div class="form-group">
    <label for="">Nomor Telepon</label>
    <input class="form-control" type="text" id="telp" value="<?= $datasiswa['telp']; ?>" required>
</div>
<div class="form-group">
    <label for="">Tinggi Badan</label>
    <input class="form-control" type="number" min="150" value="<?= $datasiswa['tinggi_badan']; ?>" required>
</div>
<div class="form-group">
    <label for="">Berat Badan</label>
    <input class="form-control" type="number" min="30" value="<?= $datasiswa['berat_badan']; ?>" required>
</div>
<div class="form-group">
    <label for="">Golongan Darah</label>
    <select class="form-control" required>
        <option value="" disabled>Golongan Darah</option>
        <option value="O" <?= ($datasiswa['gol_darah'] == 'O') ? 'selected' : ''; ?>>O</option>
        <option value="A" <?= ($datasiswa['gol_darah'] == 'A') ? 'selected' : ''; ?>>A</option>
        <option value="B" <?= ($datasiswa['gol_darah'] == 'B') ? 'selected' : ''; ?>>B</option>
        <option value="AB" <?= ($datasiswa['gol_darah'] == 'AB') ? 'selected' : ''; ?>>AB</option>
    </select>
</div>
</div>
<div class="box-footer">
</div>
</div>

<div class="box">
<div class="box-header with-border">
<h3 class="box-title">Alamat</h3>
<div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
</div>
</div>
<div class="box-body">
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
</div>
<div class="box-footer">
</div>
</div>

<div class="box">
<div class="box-header with-border">
<h3 class="box-title">Pendidikan Terakhir</h3>
<div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
</div>
</div>
<div class="box-body">
<div class="form-group">
    <label for="">Tamatan</label>
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
    <label for="">Jurusan</label>
    <input class="form-control" type="text" name="jurusan" placeholder="Jurusan" value="<?= $datasiswa['jurusan']; ?>">
</div>
<div class="form-group">
    <label for="">Tahun Kelulusan</label>
    <input class="form-control" type="number" name="lulus_tahun" placeholder="Tahun Kelulusan" min="1990" value="<?= $datasiswa['lulus_tahun']; ?>" required>
</div>
</div>
<div class="box-footer">
</div>
</div>

<div class="box">
<div class="box-header with-border">
<h3 class="box-title">Orang Tua</h3>
<div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
</div>
</div>
<div class="box-body">
<div class="form-group">
    <label for="">Nama Lengkap Ayah</label>
    <input class="form-control" type="text" name="nama_ayah" placeholder="Nama Ayah" value="<?= $datasiswa['nama_ayah']; ?>" required>
</div>
<div class="form-group">
    <label for="">Nama Lengkap Ibu</label>
    <input class="form-control" type="text" name="nama_ibu" placeholder="Nama Ibu" value="<?= $datasiswa['nama_ibu']; ?>" required>
</div>
</div>
<div class="box-footer">
</div>
</div>

<div>
<button class="btn btn-primary w-100 animated-btn" type="submit">Update</button>
</div>
</form>
    </div>
</div>

</div>
<div class="col-md-3"></div>
</div>