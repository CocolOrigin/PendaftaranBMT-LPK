<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <!-- <span class="logo-mini"><b>A</b>LT</span> -->
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>LPK </b>Nur Madinah</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url() ?>/template/dist/img/user.png" class="user-image" alt="User Image">
                <span class="hidden-xs"><?= session()->get('nama_user') ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?= base_url() ?>/template/dist/img/user.png" class="img-circle" alt="User Image">

                  <p>
                    <?= session()->get('nama_user') ?> / <?= session()->get('username') ?>
                    <small>
                      <?php
                      if (session()->get('role') == 1) {
                        echo 'Admin';
                      }
                      if (session()->get('role') == 2) {
                        echo 'Siswa';
                      }
                      if (session()->get('role') == 3) {
                        echo 'Pendaftar';
                      }
                      ?>
                    </small>
                  </p>
                </li>

                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?= base_url('profil') ?>" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?= base_url('auth/logout') ?>" class="btn btn-default btn-flat">Logout</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->