<html>

<?php
if (session()->getFlashdata('sukses')) {
    echo '<div class="alert alert-success alert-dismissible">';
    echo session()->getFlashdata('sukses');
    echo '</div>';
}

if (session()->getFlashdata('gagal')) {
    echo '<div class="alert alert-danger alert-dismissible">';
    echo session()->getFlashdata('gagal');
    echo '</div>';
}
?>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="box box-primary ">

            <div class="box-header with-border">
                <h3 class="box-title">Sertifikat</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-primary btn-sm btn-flat" onclick="window.location.href='<?= base_url('user/sertifikat/tambah') ?>'">
                        <i class="fa fa-plus"> Add</i>
                    </button>
                </div>
            </div>

            <div class="box-body table-responsive offset-1 d-flex col-10">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Jenis</th>
                            <th>Nama File</th>
                            <th>File</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sertifikat as $row) : ?>
                            <tr>
                                <td><?= $row['jenis']; ?></td>
                                <td><?= $row['nama_sertifikat']; ?></td>
                                <td>
                                    <img src="<?= base_url($row['file_sertifikat']); ?>" alt="<?= $row['nama_sertifikat']; ?>" width="400">
                                </td>
                                <td><?= $row['status']; ?></td>
                                <td>
                                    <form method="post" action="<?= base_url('user/sertifikat/edit'); ?>">
                                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                        <button type="submit" class="btn btn-outline-warning">Edit</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Jenis</th>
                            <th>Nama File</th>
                            <th>File</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</div>


</html>