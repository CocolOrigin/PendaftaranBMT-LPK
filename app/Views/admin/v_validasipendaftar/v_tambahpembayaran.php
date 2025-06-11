<?php
if (session()->getFlashdata('gagal')) {
    echo '<div class="alert alert-danger alert-dismissible">';
    echo session()->getFlashdata('gagal');
    echo '</div>';
}
?>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-8">
        <form method="post" action="<?= base_url('pendaftar/storeall'); ?>">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Pembayaran</h3>
                </div>
                <div class="box-body">

                    <label for="nid">NID :</label>
                    <input type="text" class="form-control" name="nid" id="nidInput" value="<?= $nid ?>" readonly required>

                    <label for="jenis" style="margin-top: 20px;">Uang Muka</label>
                    <P>masukkan jumlah uang muka yang dibayarkan</P>
                    <input class="form-control" type="text" id="tagihan" name="tagihan" placeholder="Tagihan" required>

                    <button class="btn btn-primary w-100 " type="submit" style="margin-top: 20px;">Simpan</button>
                </div>
                <div class="box-footer">
                </div>
            </div>
        </form>

    </div>
    <div class="col-md-3"></div>
</div>