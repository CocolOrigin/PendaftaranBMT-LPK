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
    <form method="post" action="<?= base_url('user/sertifikat/update'); ?>" enctype="multipart/form-data">
        <div class="col-md-2 mt-3">
            <div class="form-group">
                <input type="text" class="form-control" name="nid" value="<?= $data['nid']; ?>" readonly required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="jenis" value="<?= $data['jenis']; ?>" readonly required>
            </div>
            
            <input class="form-control" type="hidden" name="id" required value="<?= $data['id']; ?>"></input>
            <input class="form-control" type="hidden" name="nama_sertifikat" required value="<?= $data['nama_sertifikat']; ?>"></input>

            <button class="btn btn-primary w-100 animated-btn mt-3" type="submit">Simpan</button>
        </div>

        <div class="col-md-6">
            <div>
                <input type="file" name="foto" id="foto" accept="image/*" class="form-control mt-3" required onchange="previewImage()">
                <?php
                if (empty($_FILES['foto']['name'])) {
                    echo '<img id="fotobefore" src="' . base_url($data['file_sertifikat']) . '" style="display:block; background-color: #ccc; max-width: 400px; max-height: 400px; margin:auto;" class="text-center mt-3" alt="' . $data['nama_sertifikat'] . '" width="400">';
                }
                ?>
                <img id="previewFoto" src="#" alt="Preview Foto" class="text-center mt-3" style="display:none; background-color: #ccc; max-width: 400px; max-height: 400px; margin:auto;">
            </div>
        </div>
    </form>
    <div class="col-md-3"></div>
</div>

<script>
    function previewImage() {
        const fileInput = document.getElementById('foto');
        const previewImg = document.getElementById('previewFoto');
        
        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
            }
            reader.readAsDataURL(fileInput.files[0]);
            previewImg.style.display = 'block';
            fotobefore.style.display = 'none';

        } else {
            previewImg.src = '#';
            previewImg.style.display = 'none';
            fotobefore.style.display = 'block';
        }
    }
</script>