<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TPQ Darul Furqon</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Amiri&display=swap" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  
</head>
<body>

  <header id="main-header">
    <div class="container">
      <div class="logo">
      <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo TPQ">
        <span>TPQ Darul Furqon</span>
      </div>

       <button class="menu-toggle" id="menu-toggle">
        <i class="fas fa-bars"></i>
       </button>

      <nav class="navbar" id="navbar">
        <ul>
          <!-- Beranda -->
          <li><a href="<?= base_url() ?>">Beranda</a></li>

          <!-- Tentang Kami Dropdown -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle">Tentang Kami  <i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="<?= base_url('tentang/profil_madrasah') ?>">Profil Madrasah</a></li>
              <li><a href="<?= base_url('tentang/sejarah_madrasah') ?>">Sejarah Madrasah</a></li>
              <li><a href="<?= base_url('tentang/visi_misi') ?>">Visi dan Misi</a></li>
              <li><a href="<?= base_url('tentang/struktur_organisasi') ?>">Struktur Organisasi</a></li>
            </ul>
          </li>

          <!-- Publikasi Dropdown -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle">Publikasi  <i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="<?= base_url('publikasi/kabar_madrasah') ?>">Kabar Madrasah</a></li>
              <li><a href="<?= base_url('publikasi/galeri') ?>">Galeri</a></li>
            </ul>
          </li>

          <!-- Hubungi Kami Dropdown -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle">Hubungi Kami  <i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="<?= base_url('hubungi/layanan_ortu') ?>">Kritik dan saran</a></li>
              <li><a href="<?= base_url('hubungi/kontak') ?>">Kontak</a></li>
            </ul>
          </li>

          <!-- Pendaftaran -->
          <li><a href="<?= base_url('pendaftaran/index') ?>">Pendaftaran</a></li>
        </ul>
      </nav>

     

    </div>
  </header>


  <script src="<?= base_url('assets/js/script.js') ?>"></script>


