<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
    <body>
    <br>
    <table class="table">
    <a href="<?= base_url('kelas/create') ?>" method="POST">
                    <button class="btn btn-warning">Tambah Data</button>
    <br>
        <thead>
            <tr classs="table-primary">
                <th>ID</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($users as $user){
            ?>
                <tr class="table-light">
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>
                    <td>
                        <a href="<?= base_url('kelas/' . $user['id']) ?>">Detail</a>
                    </td>
                    <td><button type="button"  class="btn btn-success">
                        <a href="<?= base_url('kelas/' . $user['id'] . '/edit') ?>">Edit</a>
                    </button>

                    <form action="<?= base_url('kelas/' . $user['id']) ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-danger">Delete</button></td>
                    </form>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
<?= $this->endSection() ?>