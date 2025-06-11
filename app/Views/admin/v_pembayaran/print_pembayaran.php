<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IF-Edge">
    <title>Rekap Pembayaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 5px solid black;
        }

        @media print {
            @page {
                size: "A4";
            }

            body {
                font-family: Arial, sans-serif;
            }

            .column {
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

            .logo-right img {
                width: 100px;
                height: auto;
                margin-right: 150px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            th,
            td {
                border: 1px solid black;
                padding: 2px;
                text-align: left;
            }

            th {
                text-align: center;
                background-color: black;
            }

            .left-align {
                text-align: left;
                margin-left: 25px;
                margin-top: 25px;
                font-size: medium;
            }

        }

        body {
            font-family: Arial, sans-serif;
        }

        .column {
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

        .logo-right img {
            width: 100px;
            height: auto;
            margin-right: 150px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 2px;
            text-align: left;
        }

        th {
            text-align: center;
            background-color: black;
        }

        .left-align {
            text-align: left;
            margin-left: 25px;
            margin-top: 25px;
            font-size: medium;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo-left">
            <img src="<?= base_url('assets/img/lpk.png') ?>" alt="Logo Kiri">
        </div>
        <h5 align="center" style="line-height: 1.6; font-weight: bold;">
            LEMBAGA PELATIHAN KERJA NUR MADINAH &
            <br>KSPPS BMT AGAWE MAKMUR TULUNGAGUNG
        </h5>
        <div class="logo-right">
            <img src="<?= base_url('assets/img/bmt.png') ?>" alt="Logo Kanan">
        </div>
    </div>
    <hr class="line-title">
    <p align="center">
        <span style="line-height: 1.6; font-weight: bold;">
            REKAP DATA PEMBAYARAN
        </span>
    </p>
    <br>
    <p align="left" style="font-size: medium;">NID :<?= $data[0]['nid']; ?></p>
    <br>
    <table>
        <thead>
            <tr>
                <th>NID</th>
                <th>Jenis Bayar</th>
                <th>Tanggal</th>
                <th>Tagihan</th>
                <th>Terbayar</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $row) { ?>
                <tr>
                    <td><?= $row['nid']; ?></td>
                    <td><?= $row['jenis']; ?></td>
                    <td><?= $row['tanggal']; ?></td>
                    <td>Rp. <?= $row['tagihan']; ?></td>
                    <td>Rp. <?= $row['terbayar']; ?></td>
                    <td><?= $row['status']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <p class="left-align" style="font-weight: bold; font-family:Arial Black">Total Terbayar = <?= $terbayar["terbayar"] ?><br>
        Sisa = <?= $kurang->selisih ?>
    </p>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>