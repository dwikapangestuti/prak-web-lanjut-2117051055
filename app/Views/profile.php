<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
<!-- <div class="container"> -->
            <div class="w-100 d-grid border gap-2" style="height: 100vh; place-content: center;">
                <div class="w-50 text-center border mx-auto">
                <img src="<?= $user['foto'] ?? '<default-foto>' ?>" class="img-fluid my-5" style="width: 150px; border-radius: 200px;"/>  
            </div>
                <center><div class=" "><?= $user['nama'] ?></div>
                <center><div class=" "><?= $user['npm'] ?></div>
                <center><div class=" "><?= $user['nama_kelas'] ?></div>
            </div>
        <!-- </div> -->

<?= $this->endsection() ?>