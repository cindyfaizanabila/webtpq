<!DOCTYPE html>
<html>
<head>
    <title>Kritik dan Saran</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/admin.css') ?>">
</head>
<body>
    <h1>Kritik dan Saran</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Surel</th>
                <th>Pesan</th>
                <th>Tanggal Kirim</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($pesan)) : ?>
                <?php $no = 1; foreach ($pesan as $p) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($p->nama) ?></td>
                        <td><?= htmlspecialchars($p->nomor) ?></td>
                        <td><?= htmlspecialchars($p->surel) ?></td>
                        <td><?= nl2br(htmlspecialchars($p->pesan)) ?></td>
                        <td><?= date('d-m-Y H:i', strtotime($p->tanggal_kirim)) ?></td>
                        <td>
                            <a href="<?= site_url('admin/hapus/' . $p->id); ?>"
                                onclick="return confirm('Yakin ingin menghapus data ini?');"
                                class="btn-hapus">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php else : ?>
                <tr><td colspan="6">Belum ada pesan.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
