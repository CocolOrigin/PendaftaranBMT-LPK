<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-8">
        <form method="post" action="<?= base_url('pembayaran/update'); ?>">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Pembayaran</h3>
                </div>
                <div class="box-body">

                    <label for="nid">Kode Bayar :</label>
                    <input type="hidden" class="form-control" name="id" id="nidInput" value="<?= $data[0]['id']; ?>" readonly required></input>
                    <input type="text" class="form-control" name="kdbayar" id="nidInput" value="<?= $data[0]['kdbayar']; ?>" readonly required></input>

                    <label for="nid">NID :</label>
                    <input type="text" class="form-control" name="nid" id="nidInput" value="<?= $data[0]['nid']; ?>" readonly required></input>

                    <label for="jenis" style="margin-top: 20px;">Jenis</label>
                    <input type="text" class="form-control" name="jenis" id="nidInput" value="<?= $data[0]['jenis']; ?>" readonly required></input>

                    <label for="tagihan" style="margin-top: 20px;">Tagihan</label>
                    <input class="form-control" type="text" id="tagihan" name="tagihan" value="<?= $data[0]['tagihan']; ?>" required>

                    <label for="terbayar" style="margin-top: 20px;">Terbayar</label>
                    <input class="form-control" type="text" id="terbayar" name="terbayar" value="<?= $data[0]['terbayar']; ?>" required>

                    <button class="btn btn-primary w-100 " type="submit" style="margin-top: 20px;">Simpan</button>
                </div>
                <div class="box-footer">
                </div>
            </div>
        </form>

    </div>
    <div class="col-md-3"></div>
</div>