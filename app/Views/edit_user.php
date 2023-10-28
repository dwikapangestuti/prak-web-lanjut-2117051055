<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
   <div class="container"> 
        <form action="<?= base_url('/user/' . $user['id']) ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <input type="hidden" name="_method" value="PUT">
            <h3>Form Biodata</h3>
            <form action="<?= base_url('/user/store') ?>" method="POST">
                <input type="text" name="nama" value=<?= $user['nama'] ?> placeholder="Nama" class="form-control" id="nama" autofocus>
            <fieldset>
                <select placeholder="Kelas" type="text" name="kelas" tabindex="2" required>
                    <?php 
                    foreach ($kelas as $item){
                    ?>
                        <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?> >
                            <?= $item['nama_kelas'] ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </fieldset>
            <fieldset>
                <input type="text" name="npm" value=<?= $user['npm'] ?> placeholder="npm" class="form-control" id="npm" autofocus>
            </fieldset>
            <!-- <label class="input-group-text"  for="foto">Upload</label> -->
            <img src="<?= $user['foto'] ?? '<default-foto>' ?>">
                                <input type="file" class="form-control" name='foto'id="foto">
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>
    </div>
    
<?= $this->endsection() ?>