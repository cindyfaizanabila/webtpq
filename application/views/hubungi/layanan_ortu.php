<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Layanan Orang Tua - TPQ Darul Furqon</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/layanan.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/profil.css') ?>">

  <script defer src="<?= base_url('assets/js/profil.js') ?>"></script>
</head>
<body>

<!-- Hero Section -->
<section class="hero-profil" id="hero">
  <h1 class="reveal">Kritik dan Saran</h1>
  <p class="reveal">Hubungi Kami / Kritik dan saran</p>
</section>

<section class="content reveal">
  <h2 >Kritik dan Saran</h2>

  <!-- Box Keterangan -->
  <div class="info-box">
    <p>Silakan isi formulir berikut dengan saran atau masukan Anda untuk pengembangan TPQ Darul Furqon. Kami sangat menghargai setiap feedback yang diberikan.</p>
  </div>

  <?= validation_errors(); ?>

  <?= form_open('hubungi/layanan_ortu'); ?>

      <label for="nama">Nama:</label>
      <input type="text" name="nama" placeholder="Masukkan Nama" value="<?= set_value('nama'); ?>"><br><br>

      <label for="nomor">No. Hp:</label>
      <input type="text" name="nomor" placeholder="Masukkan Nomor HP" value="<?= set_value('nomor'); ?>"><br><br>

      <label for="surel">Alamat Surel:</label>
      <input type="text" name="surel" placeholder="Masukkan Alamat Surel anda" value="<?= set_value('surel'); ?>"><br><br>

      <label for="pesan">Pesan:</label>
      <textarea name="pesan" placeholder="Masukkan Kritik dan Saran"><?= set_value('pesan'); ?></textarea><br><br>

      <button type="submit">Kirim</button>

  <?= form_close(); ?>
</section>

<script src="<?= base_url('assets/js/header.js') ?>"></script>
</body>
</html>
