<?= $this->extend('layout/app') ?>
<?= $this->section('content') ?>
<h1>Daftar Peserta</h1>
<a href="/peserta/create" class="btn btn-primary mb-3">Tambah Peserta</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($peserta as $p) : ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['nama'] ?></td>
                <td><?= $p['alamat'] ?></td>
                <td><?= $p['tanggal_lahir'] ?></td>
                <td>
                    <a href="/peserta/edit/<?= $p['id'] ?>" class="btn btn-warning">Edit</a>
                    <a href="/peserta/delete/<?= $p['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>