<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="<?= base_url('../assets/bootstrap/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('../assets/css/css.css')?>">
</head>

<!-- navbar -->
<nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
    <div class="container"><span class="navbar-brand d-flex align-items-center">LPK & BMT</span><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link active" href="#title">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="#section1">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link active" href="#section2">Pendaftaran</a></li>
                <li class="nav-item"><a class="nav-link active" href="#section3">FAQ</a></li>
            </ul>
            <!-- <a class="btn btn-primary shadow me-1 animated-btn" href="<?= base_url('daftar/formdaftar'); ?>">Daftar</a> -->
            <a class="btn btn-primary shadow animated-btn" role="button" href="<?= base_url('auth/login'); ?>">Login</a>
        </div>
    </div>
</nav>

<body data-spy="scroll" data-target="#navbar">

    <!-- header -->
    <header class="pt-5" id="title">
        <div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
                <div class="col-md-8 text-center text-md-start mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 fw-bold mb-5">Kerja ke Jepang jadi&nbsp;<span class="underline">gampang</span>.</h1>
                        <p class="fs-5 text-muted mb-5">Pendaftaran dan Pelatihan Kerja ke Jepang</p>
                        <!-- <form class="d-flex justify-content-center flex-wrap" method="post" data-bs-theme="light">
                            <div class="shadow-lg mb-3"><button class="btn btn-primary" type="submit">Daftar Sekarang</button></div>
                        </form> -->
                        <a href="<?= base_url('daftar/formdaftar'); ?>" class="btn btn-primary mb-5 animated-btn">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="text-center position-relative"><img class="img-fluid" src="<?= base_url('../assets/img/illustrations/meeting.svg')?>" style="width: 800px;"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- section1 -->
    <section id="section1">
        <div class="container p-4">
            <div class="row mb-5 mt-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto mt-5">
                    <h3 class="display-6 fw-bold pb-md-4 mt-5">Tentang Kami</h3>
                    <p class="w-lg-50"><span style="color: rgba(18, 22, 67, 0.75);">pergi ke jepang jadi gampang dibantu pelatihan dan pembiayaan</span></p>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-lg-2">
                <div class="col">
                    <div class="card border-0 shadow-none">
                        <div class="card-body d-flex align-items-center p-0"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="130" height="130" src="<?= base_url('../assets/img/lpk.png')?>">
                            <div>
                                <h5 class="fw-bold text-primary mb-0">LPK Nur Madinah</h5>
                                <p class="text-muted mb-1">Erat netus</p>
                                <a class="btn btn-primary btn-lg me-2 animated-btn" role="button" href="https://www.nurmadinah.ac.id" target="_blank">Kunjungi Situs</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-none">
                        <div class="card-body d-flex align-items-center p-0"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="130" height="130" src="<?= base_url('../assets/img/bmt.png')?>">
                            <div>
                                <h5 class="fw-bold text-primary mb-0"><strong>BMT Agawe Makmur</strong></h5>
                                <p class="text-muted mb-1">Erat netus</p>
                                <a class="btn btn-primary btn-lg me-2 animated-btn" role="button" href="https://agawemakmur.com" target="_blank">Kunjungi Situs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- section2 -->
    <section id="section2">

        <!-- info pendaftaran -->
        <div class="container p-4 p-xl-5">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="display-6 fw-bold pb-md-4" style="margin-top: 120px;">Alur Proses Pendaftaran&nbsp;<span class="underline">LPK</span></h3>
                </div>
            </div>

            <div class="row gy-4 gy-md-0">
                <div class="col-md-6 d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div>
                        <div class="row gy-2 row-cols-1 row-cols-sm-2">

                            <div class="col text-center text-md-start">
                                <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-login fs-3 text-primary bg-secondary">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                        <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                                    </svg>
                                    <h5 class="fw-bold mb-0 ms-2">Pendaftaran</h5>
                                </div>
                                <p class="text-muted my-3">Pendaftar melengkapi form di situs, beserta melampirkan dokumen dokumen</p>
                            </div>

                            <div class="col text-center text-md-start">
                                <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-shield-check fs-3 text-primary bg-secondary">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 12l2 2l4 -4"></path>
                                        <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3"></path>
                                    </svg>
                                    <h5 class="fw-bold mb-0 ms-2">Verifikasi</h5>
                                </div>
                                <p class="text-muted my-3">Setelah terdaftar pelatihan akan mendapatkan akun untuk melengkapi portofolio&nbsp;</p>
                            </div>

                            <div class="col text-center text-md-start">
                                <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-screen-share fs-3 text-primary bg-secondary">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M21 12v3a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1v-10a1 1 0 0 1 1 -1h9"></path>
                                        <line x1="7" y1="20" x2="17" y2="20"></line>
                                        <line x1="9" y1="16" x2="9" y2="20"></line>
                                        <line x1="15" y1="16" x2="15" y2="20"></line>
                                        <path d="M17 4h4v4"></path>
                                        <path d="M16 9l5-5"></path>
                                    </svg>
                                    <h5 class="fw-bold mb-0 ms-2">Pembayaran</h5>
                                </div>
                                <p class="text-muted my-3">Melakukan pembayaran dengan mencetak form dan mendatangi LPK</p>
                            </div>

                            <div class="col text-center text-md-start">
                                <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-plane-departure fs-3 text-primary bg-secondary">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M15 12h5a2 2 0 0 1 0 4h-15l-3 -6h3l2 2h3l-2 -7h3z" transform="rotate(-15 12 12) translate(0 -1)"></path>
                                        <line x1="3" y1="21" x2="21" y2="21"></line>
                                    </svg>
                                    <h5 class="fw-bold mb-0 ms-2">Berangkat</h5>
                                </div>
                                <p class="text-muted my-3">Berangkat setelah semua portofolio terlengkapi dan biaya terlunasi</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-first order-md-last">
                    <div><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="<?= base_url('../assets/img/illustrations/teamwork.svg')?>"></div>
                </div>
            </div>
        </div>

        <!-- info pembayaran -->
        <div class="container">
            <h3 class="display-6 fw-bold col-md-12 text-center">Metode&nbsp;<span class="underline">Pembayaran</span></h3>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-lg-3">


                <div class="col">
                    <div class="card border-light border-1 d-flex justify-content-center p-4">
                        <div class="card-body">
                            <div class="bs-icon-lg bs-icon-rounded bs-icon-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-4 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-school">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                    <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                </svg></div>
                            <div>
                                <h4 class="fw-bold">40% + 5 Bulan</h4>
                                <p class="text-muted"><br>Pembayaran awal sebesar<br>Rp 3.000.000,- diikuti dengan Rp 1.000.000,- tiap bulannya selama 5 bulan</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-light border-1 d-flex justify-content-center p-4">
                        <div class="card-body">
                            <div class="bs-icon-lg bs-icon-rounded bs-icon-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-4 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-school">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                    <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                </svg></div>
                            <div>
                                <h4 class="fw-bold">80% + 4 Bulan</h4>
                                <p class="text-muted"><br>Pembayaran awal sebesar<br>Rp 6.000.000,- diikuti dengan Rp 500.000,- tiap bulannya selama 4 bulan</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-light border-1 d-flex justify-content-center p-4">
                        <div class="card-body">
                            <div class="bs-icon-lg bs-icon-rounded bs-icon-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-4 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-school">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                    <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                                </svg></div>
                            <div>
                                <h4 class="fw-bold">100%</h4>
                                <p class="text-muted"><br>Pembayaran awal sebesar<br>Rp 8.000.000,- dan lunas</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <!-- section3 -->
    <section class="py-4 py-xl-5 mb-5" id="section3">
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-8 col-xl-6 text-center mx-auto mt-5">
                    <h2 class="display-6 fw-bold mb-5 mt-5"><span class="pb-3 underline">FAQ<br></span></h2>
                    <p class="text-muted mb-5">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-8 mx-auto">
                    <div class="accordion text-muted" role="tablist" id="accordion-1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="true" aria-controls="accordion-1 .item-1">Aenean arcu euismod aliquam, volutpat consequat?</button></h2>
                            <div class="accordion-collapse collapse show item-1" role="tabpanel" data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <p>Maecenas diam volutpat, erat quis enim cras lobortis vivamus donec tempor. Congue ultrices donec turpis vivamus. Laoreet aenean metus, mi nunc massa feugiat duis. Pharetra erat consequat purus curae quisque, etiam accumsan class.</p>
                                    <p class="mb-0">Commodo rutrum quisque curabitur habitasse, suspendisse etiam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2" aria-expanded="false" aria-controls="accordion-1 .item-2">Lorem quam erat placerat mollis, rhoncus senectus?</button></h2>
                            <div class="accordion-collapse collapse item-2" role="tabpanel" data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <p class="mb-0">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-3" aria-expanded="false" aria-controls="accordion-1 .item-3">Iaculis accumsan id, facilisis proin ipsum velit neque?</button></h2>
                            <div class="accordion-collapse collapse item-3" role="tabpanel" data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <p class="mb-0">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 p-5">
                <div class="col-12 col-md-6">
                    <div class="fw-bold d-flex align-items-center mb-2"><span>LPK & BMT</span></div>
                    <p class="text-muted">pergi ke jepang jadi gampang dibantu pelatihan dan pembiayaan</p>
                </div>
                <div class="col-sm-4 col-md-3 text-lg-start d-flex flex-column">
                    <h3 class="fs-6 fw-bold">Services</h3>
                    <ul class="list-unstyled">
                        <li><a href="#section2">Pendaftaran</a></li>
                        <li><a href="#section2">Pembiayaan</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-lg-start d-flex flex-column">
                    <h3 class="fs-6 fw-bold">About</h3>
                    <ul class="list-unstyled">
                        <li><a href="https://www.nurmadinah.ac.id" target="_blank">LPK Nur Madinah</a></li>
                        <li><a href="https://agawemakmur.com" target="_blank">BMT Agawe Makmur</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0 text-center mx-auto">Copyright © 2023 BMT Agawe Makmur Tulungagung</p>
                <!-- <ul class="list-inline mb-0">
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                        </svg></li>
                </ul> -->
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('../assets/js/startup-modern.js')?>"></script>
</body>

</html>