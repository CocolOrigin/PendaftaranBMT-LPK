<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IF-Edge">
    <title>Formulir Pendaftaran Siswa LPK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 5px solid #000;
        }

        @media print {
            @page {
                size: "A4";
            }

            body {
                font-family: Arial, sans-serif;
            }

            .column {
                width: 100%;
                float: left;
                padding: 10px;
                box-sizing: border-box;
                margin-top: -15px;
            }

            .column-left {
                width: 35%;
                float: left;
                padding: 10px;
                box-sizing: border-box;
            }

            .column-right {
                width: 65%;
                float: left;
                padding: 10px;
                box-sizing: border-box;
            }

            .column-kiri {
                width: 50%;
                float: left;
                padding: 10px;
                box-sizing: border-box;
            }

            .column-kanan {
                width: 50%;
                float: left;
                padding: 10px;
                box-sizing: border-box;
            }

            .clear {
                clear: both;
            }

            .header {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .logo-left img {
                width: 100px;
                height: auto;
                margin-left: 150px;
            }

            .title {
                text-align: center;
                flex-grow: 1;
            }

            .logo-center img {
                width: 100px;
                height: auto;
                margin-left: 420px;
                margin-top: 10px;
            }

            .table-1 {
                width: 3%;
                border-collapse: collapse;
                margin-bottom: 8px;
                margin-top: 2px;
            }

            .table-1 th,
            .table-1 td {
                border: 1px solid black;
                padding: 1px;
                text-align: center;
            }

            .table-2 {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 8px;
                margin-top: 2px;
            }

            .table-2 th,
            .table-2 td {
                border: 1px solid black;
                padding: 2px;
                text-align: center;
            }

            .table-3 {
                width: 3%;
                border-collapse: collapse;
                margin-bottom: 8px;
                margin-top: 2px;
            }

            .table-3 th,
            .table-3 td {
                border: 1px solid black;
                padding: 15px;
                text-align: center;
            }

            .table-4 {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 8px;
                margin-top: -5px;
            }

            .table-4 th,
            .table-4 td {
                border: 1px solid black;
                padding: 15px;
                text-align: center;
            }

            .table-5 {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 8px;
                margin-top: -10px;
            }

            .table-5 th,
            .table-5 td {
                border: 1px solid black;
                padding: 10px;
                /* text-align: center; */
            }

            .table-6 {
                width: 90%;
                border-collapse: collapse;
                margin-bottom: 8px;
                margin-top: 2px;
            }

            .table-6 th,
            .table-6 td {
                border: 1px solid black;
                padding: 2px;
                text-align: center;
            }

            .right-align {
                color: red;
                text-align: right;
            }

            .left-align {
                margin-left: 25px;
                margin-top: 15px;
            }

            .center-top {
                text-align: center;
                margin-top: -32px;
            }

            .centered-text {
                text-align: center;
                padding: 20px;
                background-color: lightgray;
                transform: translateY(-50%);
            }
        }

        body {
            font-family: Arial, sans-serif;
        }

        .column {
            width: 100%;
            float: left;
            padding: 10px;
            box-sizing: border-box;
            margin-top: -15px;
        }

        .column-left {
            width: 35%;
            float: left;
            padding: 10px;
            box-sizing: border-box;
        }

        .column-right {
            width: 65%;
            float: left;
            padding: 10px;
            box-sizing: border-box;
        }

        .column-kiri {
            width: 50%;
            float: left;
            padding: 10px;
            box-sizing: border-box;
        }

        .column-kanan {
            width: 50%;
            float: left;
            padding: 10px;
            box-sizing: border-box;
        }

        .clear {
            clear: both;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-left img {
            width: 100px;
            height: auto;
            margin-left: 150px;
        }

        .title {
            text-align: center;
            flex-grow: 1;
        }

        .logo-center img {
            width: 100px;
            height: auto;
            margin-left: 420px;
            margin-top: 10px;
        }

        .table-1 {
            width: 3%;
            border-collapse: collapse;
            margin-bottom: 8px;
            margin-top: 2px;
        }

        .table-1 th,
        .table-1 td {
            border: 1px solid black;
            padding: 1px;
            text-align: center;
        }

        .table-2 {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 8px;
            margin-top: 2px;
        }

        .table-2 th,
        .table-2 td {
            border: 1px solid black;
            padding: 2px;
            text-align: center;
        }

        .table-3 {
            width: 3%;
            border-collapse: collapse;
            margin-bottom: 8px;
            margin-top: 2px;
        }

        .table-3 th,
        .table-3 td {
            border: 1px solid black;
            padding: 15px;
            text-align: center;
        }

        .table-4 {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 8px;
            margin-top: -5px;
        }

        .table-4 th,
        .table-4 td {
            border: 1px solid black;
            padding: 15px;
            text-align: center;
        }

        .table-5 {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 8px;
            margin-top: -10px;
        }

        .table-5 th,
        .table-5 td {
            border: 1px solid black;
            padding: 10px;
            /* text-align: center; */
        }

        .table-6 {
            width: 90%;
            border-collapse: collapse;
            margin-bottom: 8px;
            margin-top: 2px;
        }

        .table-6 th,
        .table-6 td {
            border: 1px solid black;
            padding: 2px;
            text-align: center;
        }

        .right-align {
            color: red;
            text-align: right;
        }

        .left-align {
            margin-left: 25px;
            margin-top: 15px;
        }

        .center-top {
            text-align: center;
            margin-top: -32px;
        }

        .centered-text {
            text-align: center;
            padding: 20px;
            background-color: lightgray;
            transform: translateY(-50%);
        }
    </style>
</head>

<body>
    <div>
        <table class="table-1" align="left">
            <tr>
                <td style="font-family:Segoe UI Semibold">R</td>
            </tr>
            <tr>
                <td style="font-family:Segoe UI Semibold">H</td>
            </tr>
            <tr>
                <td style="font-family:Segoe UI Semibold">Z</td>
            </tr>
            <tr>
                <td style="font-family:Segoe UI Semibold">JFT</td>
            </tr>
            <tr>
                <td style="font-family:Segoe UI Semibold">SSW</td>
            </tr>
            <tr>
                <td style="font-family:Segoe UI Semibold">BS</td>
            </tr>
        </table>
    </div>
    <div class="header">
        <div class="logo-center">
            <img src="<?= base_url('assets/img/lpk.png') ?>" alt="Logo Tengah">
        </div>

    </div>
    <p align="center" style="font: size 50px; font-family:Arial Black">
        FORMULIR PENDAFTARAN SISWA BARU
    </p>
    <h2 align="center" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-top:-20px;">
        LPK NUR MADINAH TULUNGAGUNG
    </h2>
    <p align="center" style="font-size:smaller; font-family:Segoe UI Semibold; margin-top:-5px;">
        JL. W.R. SUPRATMAN I/29 KEL. KAMPUNGDALEM
    </p>
    <p align="center" style="font-size:small; font-family:Segoe UI Semibold; margin-top:-18px;">
        KECAMATAN TULUNGAGUNG, KABUPATEN TULUNGAGUNG
    </p>
    <p align="center" style="font-size:small; font-family:Arial; margin-top:-18px;">
        E-Mail:lpknurmadinahtulungagung@gmail.com | Website: www.nurmadinah.ac.id
    </p>
    <hr class="line-title">
    <br>
    <div id="print-content">
        <div class="column-left">
            <table class="table-2">
                <tr>
                    <td style="font-weight: bolder;">Nama Lengkap:</td>
                </tr>
            </table>
            <p align="center" style="font-size: small; font-style:italic">
                *Tidak Disingkat
            </p>
            <br>
            <br>
            <table class="table-2">
                <tr>
                    <td style="font-weight: bolder;">Tempat Lahir:</td>
                </tr>
                <tr>
                    <td style="font-weight: bolder;">Tanggal Lahir:</td>
                </tr>
            </table>
            <br>
            <table class="table-2">
                <tr>
                    <td style="font-weight: bolder;">Nomor Identitas:</td>
                </tr>
            </table>
            <table class="table-2">
                <tr>
                    <td style="font-weight: bolder;">Alamat:</td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <table class="table-2">
                <tr>
                    <td style="font-weight: bolder;">Nama Orang Tua / Wali:</td>
                </tr>
            </table>
            <p align="center" style="font-size:large; font-family:Arial Black; font-style:italic; margin-bottom: 1px; margin-top:-4px">
                Pendidikan Terakhir
            </p>
            <table class="table-2">
                <tr>
                    <td style="font-weight: bolder;">Nama Sekolah:</td>
                </tr>
            </table>
            <table class="table-2">
                <tr>
                    <td style="font-weight: bolder;">Jurusan:</td>
                </tr>
            </table>
            <table class="table-2">
                <tr>
                    <td style="font-weight: bolder;">Tahun Lulus:</td>
                </tr>
            </table>
        </div>
        <div class="column-right">
            <table class="table-3">
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </table>
            <table class="table-3" style="margin-top: 30px;">
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </table>
            <table class="table-3" style="margin-top: 30px;">
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </table>
            <table class="table-6" style="margin-top: 22;">
                <tr>
                    <td colspan=4; style="font-weight: bolder; width:10%">Dusun </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </table>
            <table class="table-6">
                <tr>
                    <td colspan="4" style="font-weight: bolder; width:10%">RT </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td colspan="4" style="font-weight: bolder; width:10%">RW </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </table>
            <table class="table-6">
                <tr>
                    <td colspan="4" style="font-weight: bolder; width:10%">Desa </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-weight: bolder;">Kec </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td colspan="4" style="font-weight: bolder;">Kab </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </table>
            <table class="table-3" style="margin-top: 15px;">
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </table>
            <table class="table-3" style="margin-top: 30px;">
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </table>
            <table class="table-3" style="margin-top: 5px;">
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </table>
            <table class="table-3" style="margin-top: 8px;">
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </table>
        </div>
        <div class="column">
            <p align="center" style="font-size:large; font-family:Arial Black; font-style:italic">
                Pengalaman Kerja / Pengalaman PKL
            </p>
            <table class="table-4">
                <tr>
                    <td style="font-weight: bolder;">Tahun</td>
                    <td style="font-weight: bolder;">Nama Perusahaan</td>
                    <td style="font-weight: bolder;">Masa Kerja</td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </table>
            <p align="center" style="font-size:large; font-family:Arial Black; font-style:italic">
                Persetujuan Wali Murid & Calon Siswa
            </p>
            <table class="table-5">
                <tr>
                    <td rowspan="2" style="width: 90%;">
                        <p class="left-align" style="font-size: medium; font-style:italic">- Dengan ini menyatakan bahwa data yang diisikan adalah benar.
                            <br>- Sanggup untuk melakukan tes kesehatan sebelum mengikuti pendidikan di LPK Nur Madinah Tulungagung dengan biaya mandiri.
                            <br>- Akan mengikuti segala tata tertib yang ditetapkan oleh LPK Nur Madinah Tulungagung
                            <br>- Sanggup untuk mengikuti pembelajaran dan mentaati kewajiban administrasi pembelajaran.
                        </p>
                    </td>
                    <td style="padding: 20px;">
                        <p class="center-top" style="font-size:x-small;"> Orang Tua
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 24px;">
                        <p class="center-top" style="font-size:x-small;">Siswa</p>
                    </td>
                </tr>
            </table>
        </div>
        <div class="column-left">
            <p align="left" style="font-style: italic; font-family:Segoe UI Semibold">
                Kode Ref:
            </p>
        </div>
        <div class="column-right">
            <p class="right-align" style="font-style: italic; font-family:Segoe UI Semibold">
                *Formulir Asli Menggunakan Stempel LPK Nur Madinah Tulungagung
            </p>
        </div>
        <div class="clear"></div>
    </div>

    <!-- </table> -->
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>