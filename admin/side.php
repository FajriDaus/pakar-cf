<?php

include '../config/config.php';

$activePage = basename($_SERVER['PHP_SELF'], ".php");

?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <img src="icon.png" width="100"></img>
        </div>
        <div class="sidebar-brand-text mx-1">Dashboard Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item  <?= ($activePage == 'index') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= BASE_URL; ?>/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - User Admin -->
    <li class="nav-item  <?= ($activePage == 'user') ? 'active' : ''; ?>">
        <a class="nav-link" href="user">
            <i class="fas fa-fw fa-user"></i>
            <span>User Admin</span></a>
    </li>

    <!-- Nav Item - Penyakit -->
    <li class="nav-item  <?= ($activePage == 'penyakit') ? 'active' : ''; ?>">
        <a class="nav-link" href="penyakit">
            <i class="fas fa-fw fa-bug"></i>
            <span>Penyakit</span></a>
    </li>

    <!-- Nav Item - Gejala -->
    <li class="nav-item  <?= ($activePage == 'gejala') ? 'active' : ''; ?>">
        <a class="nav-link" href="gejala">
            <i class="fas fa-fw fa-flask"></i>
            <span>Gejala</span></a>
    </li>

    <!-- Nav Item - Pengetahuan -->
    <li class="nav-item  <?= ($activePage == 'pengetahuan') ? 'active' : ''; ?>">
        <a class="nav-link" href="pengetahuan">
            <i class="fas fa-fw fa-microscope"></i>
            <span>Pengetahuan</span></a>
    </li>

    <!-- Nav Item - Post keterangan -->
    <li class="nav-item  <?= ($activePage == 'post') ? 'active' : ''; ?>">
        <a class="nav-link" href="post">
            <i class="fas fa-fw fa-file"></i>
            <span>Post Keterangan</span></a>
    </li>

    <!-- Nav Item - Post keterangan -->
    <li class="nav-item  <?= ($activePage == 'riwayat') ? 'active' : ''; ?>">
        <a class="nav-link" href="riwayat">
            <i class="fas fa-fw fa-book"></i>
            <span>Riwayat</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->