<?= $this->extend('layout/app') ?>
<?= $this->section('content') ?>
<h1>Todo</h1>
<a class="btn btn-success" href="<?= site_url('todo/new') ?>" role="button">Tambah</a>
<table class="table">
    <tr>
        <th scope="col">Judul</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Tanggal Dibuat</th>
        <th scope="col">Tanggal diupdate</th>
        <th scope="col">Aksi</th>
    </tr>
    <?php foreach ($rows as $row) : ?>
        <tr>
            <th>
                <?= $row->judul; ?>
            </th>
            <td>
                <?= $row->deskripsi; ?>
            </td>
            <td>
                <?= $row->created_at; ?>
            </td>
            <td>
                <?= $row->updated_at; ?>
            </td>
            <td>
                <form method="post" action="<?= site_url('todo/delete/' .
                                                $row->id); ?>">
                    <div class="btn-group btn-group-sm" role="group">
                        <a href="<?= site_url('todo/edit/' . $row->id); ?>" class="btn btn-warning">edit</a>
                        <button type="submit" class="btn btndanger">delete</button>
                    </div>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?= $this->endSection() ?>