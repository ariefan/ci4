<?= $this->extend('layout/app') ?>
<?= $this->section('content') ?>
<h1><?= isset($peserta) ? 'Edit' : 'Tambah' ?> Peserta</h1>
<form action="<?= isset($peserta) ? '/peserta/update/' . $peserta['id'] : '/peserta/store' ?>" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= isset($peserta) ? $peserta['nama'] : '' ?>" required>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" required><?= isset($peserta) ? $peserta['alamat'] : '' ?></textarea>
    </div>
    <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= isset($peserta) ? $peserta['tanggal_lahir'] : '' ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/peserta" class="btn btn-secondary">Batal</a>
</form>
<?= $this->endSection() ?>