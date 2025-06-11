<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
</head>

<body>
    <section class="py-5 mt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 col-xl-8 text-center mx-auto">
                    <h2 class="display-6 fw-bold mb-4">Form&nbsp;<span class="underline">Pendaftaran</span></h2>
                    <p class="text-muted">Lengkapi Form dibawah ini</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <form method="post" action="<?= base_url('daftar/formstore'); ?>">
                        <p class="text-center fw-bold mt-3">Nomor Pendaftaran Anda :</p>
                        <input class="shadow form-control text-center display-3 mb-5 disabled" type="text" id="nid" name="nid" value="<?= $nextNID; ?>" placeholder="NID" readonly required>
                        <input class="shadow form-control mb-3" type="text" id="nama" name="nama" placeholder="Nama" required>
                        <input class="shadow form-control mb-3" type="text" id="nik" name="nik" placeholder="NIK" required>
                        <select class="shadow form-control mb-3" name="gender" placeholder="Gender" required>
                            <option value="" disabled selected>Gender</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        <input class="shadow form-control mb-3" type="text" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required>
                        <input class="shadow form-control mb-3" type="text" id="telp" name="telp" placeholder="Telepon" required>
                        <input class="shadow form-control mb-3" type="number" name="tinggi_badan" placeholder="Tinggi Badan" min="150" required>
                        <input class="shadow form-control mb-3" type="number" name="berat_badan" placeholder="Berat Badan" min="30"required>
                        <select class="shadow form-control mb-3" name="gol_darah" placeholder="Golongan Darah" required>
                            <option value="" disabled selected>Golongan Darah</option>
                            <option value="O">O</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                        </select>
                        <p class="text-center mt-5 mb-3">Tempat Tanggal Lahir&nbsp;</p>
                        <input class="shadow form-control mb-3" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
                        <input class="shadow form-control mb-3" type="date" name="tg_lahir" placeholder="Tanggal Lahir" required>
                        <p class="text-center mt-5 mb-3">Alamat&nbsp;</p>
                        <input class="shadow form-control mb-3" type="text" name="alamat_dsn" placeholder="Desa" required>
                        <input class="shadow form-control mb-3" type="text" name="alamat_kec" placeholder="Kecamatan" required>
                        <input class="shadow form-control mb-3" type="text" name="alamat_kab" placeholder="Kabupaten" required>
                        <p class="text-center mt-5 mb-3">Pendidikan Terakhir&nbsp;</p>
                        <select class="shadow form-control mb-3" name="pend_terakhir" placeholder="Tamatan" required>
                            <option value="" disabled selected>Tamatan</option>
                            <option value="SMK">SMK sederajat</option>
                            <option value="SMA">SMA sederajat</option>
                            <option value="D1-D3">D1-D3</option>
                            <option value="D4/S1">D4/S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                        <input class="shadow form-control mb-3" type="text" name="jurusan" placeholder="Jurusan" required>
                        <input class="shadow form-control mb-3" type="number" name="lulus_tahun" placeholder="Tahun Kelulusan" min="1990" required>
                        <p class="text-center mt-5 mb-3">Orang Tua&nbsp;</p>
                        <input class="shadow form-control mb-3" type="text" name="nama_ayah" placeholder="Nama Ayah" required>
                        <input class="shadow form-control mb-3" type="text" name="nama_ibu" placeholder="Nama Ibu" required>
                        <div class="p-4"><button class="btn btn-primary shadow w-100 animated-btn" type="submit">Simpan</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/startup-modern.js"></script>
</body>

</html>