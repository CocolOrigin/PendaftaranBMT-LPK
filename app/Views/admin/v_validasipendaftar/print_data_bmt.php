<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IF-Edge">
    <title>Formulir Pendaftaran KSPPS BMT Agawe Makmur Tulungagung</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/formbmt.css">

    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 5px solid black;
            position: -ms-page;

        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo-left">
            <img src="<?= base_url('assets/img/bmt.png') ?>" alt="Logo Kiri">
        </div>
        <h5 align="left" style="line-height: 1.6; font-weight: bold;">
            KSPPS
            <br>BMT AGAWE MAKMUR TULUNGAGUNG
            <br>NOMOR AHU-0003602.AH.01.29. TAHUN 2022
        </h5>
        <div class="logo-right">
            <img src="<?= base_url('assets/img/koperasi.png') ?>" alt="Logo Kanan">
        </div>
    </div>
    <hr class="line-title" style="position: -ms-page;">
    <div class="container">
        <div class="column-left">
            <p align="center">
                <span style="line-height: 1.6; font-weight: bold;">
                    PENDAFTARAN PERMOHONAN ANGGOTA
                </span>
            </p>
            <div id="print-content">
                <?php
                $no = 1;
                foreach ($cetak as $print) : ?>

                    <p align="left" style="font-size: small; font-weight: bold;">
                        Nomor Anggota : ____________________

                    </p>
                    <div class="column-left-form">
                        <p class="mb-1" style="font-size:x-small;">Nama Lengkap </p>
                        <p class="mb-1" style="font-size:x-small;">Tempat, Tanggal Lahir </p>
                        <p class="mb-1" style="font-size:x-small;">Nama Lengkap </p>
                    </div>
                    <div class="column-right-form">
                        <table class="table-1">
                            <tr>
                                <td style="font-size: x-small;"><?php echo $print->nama ?></td>
                            </tr>
                            <tr>
                                <td style="font-size: x-small;"><?php echo $print->tempat_lahir ?>, <?php echo $print->tg_lahir ?></td>
                            </tr>
                            <tr>
                                <td style="font-size: x-small;"><?php echo $print->alamat_dsn ?> - <?php echo $print->alamat_kec ?> - <?php echo $print->alamat_kab ?></td>
                            </tr>
                        </table>
                    </div>
                    <p class="mb-1" style="font-size:x-small;">
                        Saya mengajukan permohonan untuk menjadi anggota "KSPPS BMT Agawe Makmur Tulungagung".
                        <br>Saya bersedia menaati Anggaran Dasar, Anggaran Rumah Tangga, Pola Kebijakan Pengurus serta
                        <br>Peraturan lain yang berlaku pada "KSPPS BMT Agawe Makmur Tulungagung" dengan penuh
                        <br>tanggung jawab.
                    </p>
                    <br>
                    <p class="mb-1" style="font-size:x-small;">
                        Bersama Formulir Permohonan ini, saya sertakan :
                        <br>1. Satu lembar foto copy KTP
                        <br>2. Penyetoran pertama anggota baru yang terdiri dari :
                    </p>
                    <div class="column-left-form">
                        <p class="mb-1" style="font-size:x-small;">a. Simpanan Pokok </p>
                        <p class="mb-1" style="font-size:x-small;">b. Simpanan Wajib </p>
                        <p class="mb-1" style="font-size:x-small;">c. Simpanan Ummat </p>
                    </div>
                    <div class="column-right-form">
                        <table class="table-1">
                            <tr>
                                <td style="font-size:x-small;">Rp. 100.000 </td>
                            </tr>
                            <tr>
                                <td style="font-size:x-small;">Rp. 10.000 </td>
                            </tr>
                            <tr>
                                <td style="font-size:x-small;">Rp. 10.000 </td>
                            </tr>
                        </table>
                    </div>
                    <p class="mb-1" style="font-size:x-small;">
                        Demikian permohonan ini saya buat dengan sebenar-benarnya, atas perhatiannya saya ucapkan
                        <br>terimkasih.
                    </p>

                    <div class="right-align" style="font-size:x-small;">
                        <?php $hari = date('d');
                        $bulan = date('m');
                        $tahun = date('Y');
                        if ($bulan == 1) {
                            $namabulan = "Januari";
                        }
                        if ($bulan == 2) {
                            $namabulan = "Februari";
                        }
                        if ($bulan == 3) {
                            $namabulan = "Maret";
                        }
                        if ($bulan == 4) {
                            $namabulan = "April";
                        }
                        if ($bulan == 5) {
                            $namabulan = "Mei";
                        }
                        if ($bulan == 6) {
                            $namabulan = "Juni";
                        }
                        if ($bulan == 7) {
                            $namabulan = "Juli";
                        }
                        if ($bulan == 8) {
                            $namabulan = "Agustus";
                        }
                        if ($bulan == 9) {
                            $namabulan = "September";
                        }
                        if ($bulan == 10) {
                            $namabulan = "Oktober";
                        }
                        if ($bulan == 11) {
                            $namabulan = "November";
                        }
                        if ($bulan == 12) {
                            $namabulan = "Desember";
                        }

                        $tanggal = $hari . " " . $namabulan . " " . $tahun;
                        ?>
                        <p>Tulungagung, <?= $tanggal; ?></p>
                    </div>
                    <div class="column-left-ttd">
                        <p align="center" style="font-size:x-small;">Petugas </p>
                        <br>
                        <p align="center" style="font-size:x-small;">____________________ </p>
                    </div>
                    <div class="column-right-ttd">
                        <p align="center" style="font-size:x-small;"><?php echo $print->nama ?></p>
                        <br>
                        <p align="center" style="font-size:x-small;">____________________ </p>
                    </div>

                <?php endforeach; ?>
                <div class="clear"></div>
            </div>
        </div>

        <div class="column-right">
            <p align="center">
                <span style="line-height: 1.6; font-weight: bold;">
                    BIODATA ANGGOTA
                </span>
            </p>
            <div id="print-content">
                <?php
                $no = 1;
                foreach ($cetak as $print) : ?>
                    <div class="column-left-form">
                        <p class="mb-1" style="font-size:x-small;">NIK </p>
                        <p class="mb-1" style="font-size:x-small;">Nama </p>
                        <p class="mb-1" style="font-size:x-small;">Tempat, Tanggal Lahir </p>
                        <p class="mb-1" style="font-size:x-small;">Alamat Lengkap </p>
                        <p class="mb-1" style="font-size:x-small;">Pekerjaan </p>
                        <p class="mb-1" style="font-size:x-small;">Pendidikan Terakhir </p>
                        <p class="mb-1" style="font-size:x-small;">Nomer WA </p>
                        <p class="mb-1" style="font-size:x-small;">Nama Ibu </p>
                    </div>
                    <div class="column-right-form">
                        <table class="table-3">
                            <tr>
                                <td style="font-size: x-small;"><?php echo $print->nik ?></td>
                            </tr>
                            <tr>
                                <td style="font-size: x-small;"><?php echo $print->nama ?></td>
                            </tr>
                            <tr>
                                <td style="font-size: x-small;"><?php echo $print->tempat_lahir ?>, <?php echo $print->tg_lahir ?></td>
                            </tr>
                            <tr>
                                <td style="font-size: x-small;"><?php echo $print->alamat_dsn ?> - <?php echo $print->alamat_kec ?> - <?php echo $print->alamat_kab ?></td>
                            </tr>
                            <tr>
                                <td style="font-size: x-small;"><?php echo $print->pekerjaan ?></td>
                            </tr>
                            <tr>
                                <td style="font-size: x-small;"><?php echo $print->pend_terakhir ?></td>
                            </tr>
                            <tr>
                                <td style="font-size: x-small;"><?php echo $print->telp ?></td>
                            </tr>
                            <tr>
                                <td style="font-size: x-small;"><?php echo $print->nama_ibu ?></td>
                            </tr>
                        </table>
                    </div>

                    <p class="mb-1" style="font-size:x-small;">Jenis simpanan yang dipilih :</p>
                    <div style="display: flex; justify-content: space-between;">
                        <div>
                            <label style="font-size: x-small;">
                                <input type="checkbox" name="pilihan[]" value="Ummat"> Ummat
                            </label>
                            <br>
                            <label style="font-size: x-small;">
                                <input type="checkbox" name="pilihan[]" value="Pendidikan"> Pendidikan
                            </label>
                            <br>
                            <label style="font-size: x-small;">
                                <input type="checkbox" name="pilihan[]" value="Pensiun Pekerja"> Pensiun Pekerja
                            </label>
                        </div>
                        <div>
                            <label style="font-size: x-small;">
                                <input type="checkbox" name="pilihan[]" value="Haji"> Haji
                            </label>
                            <br>
                            <label style="font-size: x-small;">
                                <input type="checkbox" name="pilihan[]" value="Hari Raya"> Hari Raya
                            </label>
                            <br>
                            <label style="font-size: x-small;">
                                <input type="checkbox" name="pilihan[]" value="Qurban"> Qurban
                            </label>
                        </div>
                        <div>
                            <label style="font-size: x-small;">
                                <input type="checkbox" name="pilihan[]" value="Berjangka"> Berjangka(3 / 6 / 12) bulan
                            </label>
                            <br>
                            <label style="font-size: x-small;">
                                <input type="checkbox" name="pilihan[]" value="......................................"> ......................................
                            </label>
                        </div>
                    </div>

                    <div class="right-align" style="font-size:x-small;">
                        <?php $hari = date('d');
                        $bulan = date('m');
                        $tahun = date('Y');
                        if ($bulan == 1) {
                            $namabulan = "Januari";
                        }
                        if ($bulan == 2) {
                            $namabulan = "Februari";
                        }
                        if ($bulan == 3) {
                            $namabulan = "Maret";
                        }
                        if ($bulan == 4) {
                            $namabulan = "April";
                        }
                        if ($bulan == 5) {
                            $namabulan = "Mei";
                        }
                        if ($bulan == 6) {
                            $namabulan = "Juni";
                        }
                        if ($bulan == 7) {
                            $namabulan = "Juli";
                        }
                        if ($bulan == 8) {
                            $namabulan = "Agustus";
                        }
                        if ($bulan == 9) {
                            $namabulan = "September";
                        }
                        if ($bulan == 10) {
                            $namabulan = "Oktober";
                        }
                        if ($bulan == 11) {
                            $namabulan = "November";
                        }
                        if ($bulan == 12) {
                            $namabulan = "Desember";
                        }

                        $tanggal = $hari . " " . $namabulan . " " . $tahun;
                        ?>
                        <p>Tulungagung, <?= $tanggal; ?></p>
                    </div>
                    <div class="column-left-ttd">
                        <p align="center" style="font-size:x-small;"> </p>
                        <p align="center" style="font-size:x-small;"> </p>
                    </div>
                    <div class="column-right-ttd">
                        <p align="center" style="font-size:x-small;"><?php echo $print->nama ?></p>
                        <br>
                        <p align="center" style="font-size:x-small;">____________________ </p>
                    </div>
                    <p  style="font-size:x-small;margin-bottom:-5px !important">
                        Diisi oleh petugas :
                    </p>
                    <div class="column-left-form">
                        <p class="mb-1" style="font-size:x-small;">Dicatat dengan No. Rek </p>
                        <p class="mb-1" style="font-size:x-small;">Petugas </p>
                        <p class="mb-1" style="font-size:x-small;">Paraf </p>
                    </div>
                    <div class="column-right-form">
                        <table class="table-2">
                            <tr>
                                <td> </td>
                            </tr>
                            <tr>
                                <td> </td>
                            </tr>
                            <tr>
                                <td> </td>
                            </tr>
                        </table>
                    </div>

                <?php endforeach; ?>
                <div class="clear"></div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>