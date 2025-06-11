<html>

<?php
if (session()->getFlashdata('updaterole')) {
    echo '<div class="alert alert-danger alert-dismissible">';
    echo session()->getFlashdata('updaterole');
    echo '</div>';
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary ">

            <div class="box-header with-border">
                <h3 class="box-title">Pendaftar Siswa</h3>
                <div class="box-tools pull-right">

                </div>
            </div>

            <div class="box-body table-responsive offset-1 d-flex col-10">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NID</th>
                            <th>Nama</th>
                            <th>Lihat Data</th>
                            <th>Lihat Dokumen</th>
                            <th>Cetak Formulir</th>
                            <th>Pembayaran</th>
                            <th>Accept</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($datasiswa as $row) : ?>
                            <tr>
                                <td><?= $row['nid']; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td>
                                    <a type="submit" class="btn btn-warning" href="<?= base_url('pendaftar/lihat/') ?><?= $row['nid']; ?>">Lihat Data</a>
                                </td>
                                <td>
                                    <a type="submit" class="btn btn-warning" href="<?= base_url('pendaftar/dokumen/') ?><?= $row['nid']; ?>">Lihat Dokumen</a>
                                </td>
                                <td>
                                    <a type="submit" class="btn btn-primary" href="<?= base_url('pendaftar/cetak/') ?><?= $row['nid']; ?>">Cetak Form LPK</a>
                                    <a type="submit" class="btn btn-primary" href="<?= base_url('pendaftar/cetak_bmt/') ?><?= $row['nid']; ?>" style="margin-left: 25px;">Cetak Form BMT</a>
                                </td>
                                <td>
                                    <a type="submit" class="btn btn-warning" href="<?= base_url('pendaftar/bayar/') ?><?= $row['nid']; ?>">Input Pembayaran</a>
                                </td>
                                <td>
                                    <form method="post" action="<?= base_url('pendaftar/terima'); ?>">
                                        <input type="hidden" name="nid" value="<?= $row['nid']; ?>">
                                        <button type="submit" class="btn btn-success">Terima</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>

                    <tfoot>
                        <tr>
                            <th>NID</th>
                            <th>Nama</th>
                            <th>Lihat Data</th>
                            <th>Lihat Dokumen</th>
                            <th>Cetak Formulir</th>
                            <th>Pembayaran</th>
                            <th>Status</th>
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