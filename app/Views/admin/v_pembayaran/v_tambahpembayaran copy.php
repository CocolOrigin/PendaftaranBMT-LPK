<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-8">
        <form method="post" action="<?= base_url('pembayaran/storepersatu'); ?>">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Pembayaran</h3>
                </div>
                <div class="box-body">

                    <label for="nid">NID :</label>
                    <input type="text" class="form-control" name="nid" id="nidInput" list="datalistNid" placeholder="NID" required>
                    <datalist id="datalistNid">
                        <?php foreach ($datanid as $row) : ?>
                            <option value="<?= $row['nid']; ?>">
                            <?php endforeach; ?>
                    </datalist>

                    <label for="jenis" style="margin-top: 20px;">Jenis</label>
                    <select class="form-control mt-3" name="jenis" placeholder="jenis" required>
                        <option value="" disabled selected>Jenis</option>
                        <option value="DP">Uang Muka</option>
                        <option value="SPP-1">SPP - 1</option>
                        <option value="SPP-2">SPP - 2</option>
                        <option value="SPP-3">SPP - 3</option>
                        <option value="SPP-4">SPP - 4</option>
                        <option value="SPP-5">SPP - 5</option>
                        <option value="SPP-6">SPP - 6</option>
                    </select>

                    <label for="tagihan" style="margin-top: 20px;">Tagihan</label>
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