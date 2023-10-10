<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
   <div class="container"> 
        <form action="<?= base_url('/user/store')?>" method="post" enctype="multipart/form-data">
            <h3>Form Biodata</h3>
            <form action="<?= base_url('/user/store') ?>" method="POST">
                <input type="text" name="nama" placeholder="Nama" class="form-control <?= ($validation->hasError('nama')) ?
                'is-invalid' : ''; ?>" id="nama" autofocus>
                <div class="invalid-feedback">
                    <?= $validation->getError('nama') ?>
                </div>
            <fieldset>
                <select placeholder="Kelas" type="text" name="kelas" tabindex="2" required>
                    <?php 
                    foreach ($kelas as $item){
                    ?>
                        <option value="<?= $item['id'] ?>">
                            <?= $item['nama_kelas'] ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </fieldset>
            <fieldset>
                <input type="text" name="npm" placeholder="npm" class="form-control <?= ($validation->hasError('npm')) ?
                    'is-invalid' : ''; ?>" id="npm" autofocus>
                    <div class="invalid-feedback">
                        <?= $validation->getError('npm') ?>
                    </div>  
                <!-- <input placeholder="NPM" type="text" name="npm" tabindex="3" required> -->
            </fieldset>
            <!-- <label class="input-group-text"  for="foto">Upload</label> -->
                                <input type="file" class="form-control" name='foto'id="foto">
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>
    </div>
    
<?= $this->endsection() ?>