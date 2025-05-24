<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran - TPQ Darul Furqon</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/pendaftaran.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/profil.css') ?>">

<script defer src="<?= base_url('assets/js/profil.js') ?>"></script>

</head>
<body>

  <!-- Hero Section -->
<section class="hero-profil" id="hero">
  <h1 class="reveal">Pendaftaran Santri Baru</h1>
</section>

<!-- Konten Profil -->
<section class="content-pendaftaran reveal" >
  <div class="content">
    <h2>Formulir Pendaftaran</h2>

    <div class="info-box">
     <p>Silakan isi formulir pendaftaran santri baru TPQ Darul Furqon dengan lengkap dan benar. Data yang Anda berikan akan digunakan sebagai dasar administrasi dan komunikasi selama proses pembelajaran.</p>
    </div>

    <form onsubmit="sendMessage()">
      <div class="form">
        <label for="name">Nama :</label>
        <input type="text" id="name" placeholder="Masukkan Nama" required><br><br>

        <label for="tempat">Tempat Lahir :</label>
        <input type="text" id="tempat" placeholder="Masukkan Tempat Kelahiran" required><br><br>
        
        <label for="tanggal">Tanggal Lahir :</label>
        <input type="date" id="tanggal" placeholder="Masukkan Tanggal Lahir" required><br><br>
        
        <label for="alamat">Alamat :</label>
        <input type="textarea" id="alamat" placeholder="Masukkan Alamat" required><br><br>
        
        <label for="ayah">Nama Ayah :</label>
        <input type="text" id="ayah" placeholder="Masukkan Nama Ayah" required><br><br>

        <label for="ibu">Nama Ibu :</label>
        <input type="text" id="ibu" placeholder="Masukkan Nama Ibu" required><br><br>

        <button type="submit">Kirim</button>
      </div>
    </form>
  </div>
</section>

<script src="<?= base_url('assets/js/header.js') ?>"></script>
<script src="<?= base_url('assets/js/pendaftaran.js') ?>"></script>

<script>
  function sendMessage() {
    const name = document.getElementById('name').value;
    const tempat = document.getElementById('tempat').value;
    const tanggal = document.getElementById('tanggal').value;
    const alamat = document.getElementById('alamat').value;
    const ayah = document.getElementById('ayah').value;
    const ibu = document.getElementById('ibu').value;

    // Format pesan WhatsApp
    const message = `Formulir Pendaftaran Santri Baru%0A` +
                    `Nama : *${encodeURIComponent(name)}*%0A` +
                    `Tempat Lahir : *${encodeURIComponent(tempat)}*%0A` +
                    `Tanggal Lahir : *${encodeURIComponent(tanggal)}*%0A` +
                    `Alamat : *${encodeURIComponent(alamat)}*%0A` +
                    `Nama Ayah : *${encodeURIComponent(ayah)}*%0A` +
                    `Nama Ibu : *${encodeURIComponent(ibu)}*`;

    const phone = '6285815341200';
    const url = `https://api.whatsapp.com/send?phone=${phone}&text=${message}`;

    window.open(url, '_blank');
  }
</script>


</body>
</html>
