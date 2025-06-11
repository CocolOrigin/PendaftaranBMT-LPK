<style>
    .mt-3 {
        margin-top: 10px;
    }
</style>

<?php
if (session()->getFlashdata('lainya')) {
    echo '<div class="alert alert-danger alert-dismissible">';
    echo session()->getFlashdata('lainya');
    echo '</div>';
}

if (session()->getFlashdata('sukses')) {
    echo '<div class="alert alert-success alert-dismissible">';
    echo session()->getFlashdata('sukses');
    echo '</div>';
}
?>

<div class="row">
    <div class="col-md-1 mt-3"></div>
    <form method="post" action="<?= base_url('user/dokumen/store'); ?>" enctype="multipart/form-data">
        <div class="col-md-2 mt-3">
            <div class="form-group">
                <input type="text" class="form-control" name="nid" value="<?= session()->get('username') ?>" readonly required>
            </div>

            <select class="form-control mt-3" name="jenis" placeholder="jenis" required>
                <option value="" disabled selected>Jenis</option>
                <option value="Foto 3x4">Foto 3x4</option>
                <option value="Kartu Tanda Penduduk">Kartu Tanda Penduduk</option>
                <option value="Kartu Keluarga">Kartu Keluarga</option>
                <option value="Akta Kelahiran">Akta Kelahiran</option>
                <option value="Ijazah SD">Ijazah SD</option>
                <option value="Ijazah SMP">Ijazah SMP</option>
                <option value="Ijazah SMA">Ijazah SMA</option>
                <option value="Ijazah D1-D3">Ijazah D1-D3</option>
                <option value="Ijazah S1">Ijazah S1</option>
                <option value="MCU">MCU</option>
            </select>

            <button class="btn btn-primary w-100 animated-btn mt-3" type="submit">Simpan</button>
        </div>

        <div class="col-md-6">
            <div>
                <input type="file" name="foto" id="foto" accept="image/*" class="form-control mt-3" required>
                <img id="previewFoto" src="#" alt="Preview Foto" class="text-center mt-3" style="display:block; background-color: #ccc; max-width: 400px; max-height: 400px; margin:auto;">
            </div>
        </div>
    </form>
    <div class="col-md-3"></div>
</div>

<script>
    // Fungsi untuk menampilkan preview gambar saat dipilih
    function tampilkanPreview(input, preview) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                // Tampilkan gambar sebagai preview
                preview.src = e.target.result;
                preview.style.display = 'block'; // Tampilkan gambar
            };

            // Baca file gambar sebagai URL data
            reader.readAsDataURL(input.files[0]);
        }
    }

    // Panggil fungsi tampilkanPreview saat input file berubah
    const inputFoto = document.getElementById('foto');
    const previewFoto = document.getElementById('previewFoto');
    inputFoto.addEventListener('change', function() {
        tampilkanPreview(this, previewFoto);
    });
</script>