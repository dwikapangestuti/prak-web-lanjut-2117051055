<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
    <body>
    <table class="table">
        <thead>
            <tr classs="table-primary">
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
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
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>
                    <td><button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
<?= $this->endSection() ?>