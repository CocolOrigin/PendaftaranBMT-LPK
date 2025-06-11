<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image c">
        <img src="<?= base_url() ?>/template/dist/img/logo.png" style="width: 200px; height: auto;">
      </div>
      <div class="pull-left info">
        <!-- <p><?= session()->get('nama_user') ?></p> -->

        <a href="#"><i class="fa fa-circle text-success"></i>
          <?php
          if (session()->get('role') == 1) {
            echo 'Admin';
          }
          if (session()->get('role') == 2) {
            echo 'siswa';
          }
          if (session()->get('role') == 3) {
            echo 'pendaftar';
          }
          ?>
        </a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form"></form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <!-- <li class="header">MAIN NAVIGATION</li> -->

      <!-- filter menu admin -->
      <?php if (session()->get('role') == 1) { ?>
        <li>
          <a href="<?= base_url('menu/dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('pendaftar/tabel') ?>">
            <i class="fa fa-group"></i>
            <span>Data Pendaftar</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tabel Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('datasiswa/index') ?>">
                <i class="fa fa-circle-o"></i> Data Siswa</a>
            </li>
            <li><a href="<?= base_url('pembayaran/index') ?>">
              <i class="fa fa-circle-o"></i>Pembayaran</a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder-open"></i> <span>Dokumen Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            <ul class="treeview-menu">
              <li><a href="<?= base_url('dokumensiswa/index') ?>">
                  <i class="fa fa-circle-o"></i> Dokumen Siswa</a>
              </li>
              <li><a href="<?= base_url('sertifikat/index') ?>">
                  <i class="fa fa-circle-o"></i> Validasi Sertifikat</a>
              </li>
            </ul>
          </a>
        </li>
        <li><a href="<?= base_url('tabeluser/index') ?>">
            <i class="fa fa-user"></i> <span>Tabel User</span>
          </a>
        </li>

      <?php } ?>

      <!-- filter menu user -->
      <?php if (session()->get('role') == 2) { ?>
        <li>
          <a href="<?= base_url('menu/dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('user/data/lihat') ?>">
            <i class="fa fa-th"></i> <span>Data Profil</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('user/dokumen/lihat') ?>">
            <i class="fa fa-laptop"></i><span>Dokumen</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('user/sertifikat/lihat') ?>">
            <i class="fa fa-th"></i> <span>Upload Sertifikat</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('user/bayar/lihat') ?>">
            <i class="fa fa-laptop"></i>
            <span>Pembayaran</span>
          </a>
        </li>
      <?php } ?>

      <!-- filter menu pendaftar -->
      <?php if (session()->get('role') == 3) { ?>
        <li>
          <a href="<?= base_url('menu/dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('user/data/lihat') ?>">
            <i class="fa fa-th"></i> <span>Data Profil</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('user/dokumen/lihat') ?>">
            <i class="fa fa-laptop"></i><span>Dokumen</span>
          </a>
        </li>
      <?php } ?>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?= $title ?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>BMT & LPK</a></li>
      <li class="active"><?= $title ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">