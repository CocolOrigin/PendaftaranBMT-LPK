<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
</head>

<body>
    <section class="py-5 mt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 col-xl-8 text-center mx-auto">
                    <h2 class="display-6 fw-bold mt-5 mb-4">Klaim&nbsp;<span class="underline">Akun</span></h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <form method="post" action="<?= base_url('auth/cek_login'); ?>">
                            <div class="form-group mt-5">
                                <input class="form-control" type="hidden" id="nama" name="nama" placeholder="Nama" value="<?= $siswa['nama']; ?>" required readonly>
                            </div>
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input class="form-control mt-2" type="text" id="username" name="username" placeholder="NID" value="<?= $siswa['nid']; ?>" required readonly>
                            </div>
                            <div class="form-group mt-3">
                                <label for="username">Password:</label>
                                <input class="form-control mt-2" type="text" id="password" name="password" placeholder="NID" value="<?= $siswa['nid']; ?>" required readonly>
                            </div>
                        <p class="mt-2">anda dapat mengubah password anda melalui menu profil, setelah login</p>
                        <div class="p-4 mt-5"><button class="btn btn-primary shadow w-100 animated-btn" type="submit">Login</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/startup-modern.js"></script>
</body>

</html>