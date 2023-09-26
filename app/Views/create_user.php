<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container"> 
        <form action="<?= base_url('/user/store')?>" method="post">
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
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>
    </div>
</body>
</html>