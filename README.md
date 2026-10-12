# Website TPQ Darul Furqon

Website profil dan layanan informasi untuk **TPQ Darul Furqon**. Calon wali santri bisa mengenal TPQ, membaca kabar kegiatan, melihat informasi pendaftaran, dan mengirim pesan ke pengurus lewat formulir online. Pengurus bisa membaca dan mengelola pesan yang masuk dari halaman admin.

<!-- Ganti dengan link website kalau sudah online -->
🔗 **Demo:** _belum tersedia_

![Tampilan beranda](docs/screenshots/beranda.png)

---

## Latar Belakang

Sebelumnya, informasi tentang TPQ (profil, kegiatan, pendaftaran) hanya tersebar dari mulut ke mulut dan grup WhatsApp, dan pertanyaan dari orang tua masuk lewat chat pribadi pengurus. Website ini menyatukan semuanya di satu tempat: informasi bisa diakses kapan saja, dan pesan orang tua tersimpan rapi di database, tidak tenggelam di chat.

<!-- Sesuaikan paragraf di atas dengan kondisi TPQ yang sebenarnya -->

## Fitur

**Untuk pengunjung**
- **Beranda dan Tentang**: profil, visi-misi, dan informasi umum TPQ
- **Kabar**: artikel kegiatan dan berita TPQ
- **Publikasi**: dokumentasi dan publikasi kegiatan
- **Pendaftaran**: informasi alur dan syarat pendaftaran santri baru
- **Layanan Orang Tua**: formulir pesan dengan validasi input (nama, nomor HP numerik, email valid, isi pesan) yang tersimpan ke database
- **Kontak**: informasi kontak dan lokasi TPQ

**Untuk pengurus**
- **Kotak pesan orang tua**: daftar pesan masuk, diurutkan dari yang terbaru
- **Hapus pesan** dengan notifikasi berhasil/gagal

## Tangkapan Layar

| Beranda | Layanan Orang Tua | Kotak Pesan Admin |
|---|---|---|
| ![](docs/screenshots/beranda.png) | ![](docs/screenshots/layanan-ortu.png) | ![](docs/screenshots/admin-pesan.png) |

## Teknologi

- **Backend:** PHP, CodeIgniter 3 (pola MVC)
- **Database:** MySQL (driver `mysqli`, Query Builder)
- **Frontend:** HTML, CSS
- **Lingkungan pengembangan:** XAMPP

## Struktur Proyek

```
application/
├── controllers/
│   ├── Home.php          # Beranda
│   ├── Tentang.php       # Profil TPQ
│   ├── Kabar.php         # Artikel kegiatan
│   ├── Publikasi.php     # Publikasi
│   ├── Pendaftaran.php   # Info pendaftaran
│   ├── Hubungi.php       # Formulir layanan orang tua & kontak
│   └── Admin.php         # Kelola pesan orang tua
├── models/
│   └── Pesan_model.php   # Akses tabel pesan_ortu
└── views/
    ├── layouts/          # Header & footer bersama
    └── ...               # View per halaman
assets/                   # CSS, gambar
```

## Cara Menjalankan

1. **Clone repo** ke folder `htdocs` XAMPP:
   ```bash
   git clone https://github.com/cindyfaizanabila/webtpq.git
   ```
2. **Buat database** bernama `project` di phpMyAdmin, lalu jalankan:
   ```sql
   CREATE TABLE pesan_ortu (
     id INT AUTO_INCREMENT PRIMARY KEY,
     nama VARCHAR(100) NOT NULL,
     nomor VARCHAR(20) NOT NULL,
     surel VARCHAR(100) NOT NULL,
     pesan TEXT NOT NULL,
     tanggal_kirim TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```
3. **Sesuaikan koneksi** di `application/config/database.php` (default: `root` tanpa password).
4. **Sesuaikan `base_url`** di `application/config/config.php`, misalnya `http://localhost/webtpq/`.
5. Buka `http://localhost/webtpq` di browser.

## Rencana Pengembangan

- [ ] Login dan autentikasi untuk halaman admin
- [ ] Artikel Kabar dikelola dari database (CRUD), tidak lagi ditulis per file
- [ ] Formulir pendaftaran santri online
- [ ] Notifikasi ke pengurus saat ada pesan baru

## Pengembang

**[Nama Lengkap]**: perancangan, pengembangan backend & frontend
[LinkedIn](#) · [Email](mailto:#)

## Lisensi

Dirilis di bawah [Lisensi MIT](license.txt).
