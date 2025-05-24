<!-- application/views/hubungi/terimakasih.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/terimakasih.css') ?>"> <!-- Tambahkan CSS khusus untuk halaman ini -->
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-profil" id="hero">
        <h1>Terima Kasih!</h1>
        <p>Data Anda telah berhasil dikirimkan. Kami akan segera menghubungi Anda.</p>
    </section>

    <!-- Konten Terima Kasih -->
    <section class="profil-content">
        <h2>Terima Kasih Telah Mengisi Formulir</h2>
        <p>Terima kasih telah meluangkan waktu untuk mengisi formulir. Kami menghargai perhatian Anda dan akan segera menghubungi Anda terkait layanan yang Anda butuhkan. Jika ada pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami melalui kontak yang tersedia.</p>

        <!-- Optional: Button to go back or contact -->
        <a href="<?= base_url('hubungi/layanan_ortu'); ?>" class="button-back">Kembali ke Halaman Layanan Orang Tua</a>
    </section>

    <script src="<?= base_url('assets/js/header.js') ?>"></script>
</body>
</html>
