<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tombol Unggah Gambar</title>

    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/css.css') ?> ">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">

</head>

<body>
    <section class="py-5 mt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 col-xl-8 text-center mx-auto">
                    <h2 class="display-6 fw-bold mb-4">Upload&nbsp;<span class="underline">Dokumen</span></h2>
                    <p class="text-muted">Lengkapi Dokumen dibawah ini</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <form method="post" action="<?= base_url('daftar/dokstore'); ?>" enctype="multipart/form-data">
                        <input class="shadow form-control text-center mb-5 disabled" type="hidden" id="nid" name="nid" value="<?= $_GET["nid"] ?>" placeholder="NID" readonly required>
                        <div>
                            <label for="foto" class="mt-5">Foto:</label>
                            <input type="file" name="foto" id="foto" accept="image/*" class="form-control mt-2">
                            <img id="previewFoto" src="#" alt="Preview Foto" class="mt-3 text-center" style="display:block; width: 400px; height: 400px; background-color: #ccc; max-width: 400px; max-height: 400px; margin:auto;">
                        </div>

                        <div>
                            <label for="ktp" class="mt-5">Kartu Tanda Penduduk (KTP):</label>
                            <input type="file" name="ktp" id="ktp" accept="image/*" class="form-control mt-2">
                            <img id="previewKTP" src="#" alt="Preview KTP" class="mt-3 text-center" style="display:block; width: 400px; height: 400px; background-color: #ccc; max-width: 400px; max-height: 400px; margin:auto">
                        </div>

                        <div>
                            <label for="kk" class="mt-5">Kartu Keluarga (KK):</label>
                            <input type="file" name="kk" id="kk" accept="image/*" class="form-control mt-2">
                            <img id="previewKK" src="#" alt="Preview KK" class="mt-3 text-center" style="display:block; width: 400px; height: 400px; background-color: #ccc; max-width: 400px; max-height: 400px; margin:auto;">
                        </div>

                        <div>
                            <label for="ijazah" class="mt-5">Ijazah Terakhir:</label>
                            <input type="file" name="ijazah" id="ijazah" accept="image/*" class="form-control mt-2">
                            <img id="previewIjazah" src="#" alt="Preview Ijazah" class="mt-3 text-center" style="display:block; width: 400px; height: 400px; background-color: #ccc; max-width: 400px; max-height: 400px; margin:auto;">
                        </div>

                        <div>
                            <div class="p-4 mt-5"><button type="submit" class="btn btn-primary shadow w-100 animated-btn">Upload</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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

        const inputKTP = document.getElementById('ktp');
        const previewKTP = document.getElementById('previewKTP');
        inputKTP.addEventListener('change', function() {
            tampilkanPreview(this, previewKTP);
        });

        const inputKK = document.getElementById('kk');
        const previewKK = document.getElementById('previewKK');
        inputKK.addEventListener('change', function() {
            tampilkanPreview(this, previewKK);
        });

        const inputIjazah = document.getElementById('ijazah');
        const previewIjazah = document.getElementById('previewIjazah');
        inputIjazah.addEventListener('change', function() {
            tampilkanPreview(this, previewIjazah);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.esm.min.js"></script>
</body>

</html>