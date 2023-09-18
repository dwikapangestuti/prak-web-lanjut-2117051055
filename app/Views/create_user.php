<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
</head>
<body>
    <div class="container"> 
        <form action="<?= base_url('/user/store')?>" method="post">
            <h3>Form Biodata</h3>
            <fieldset>
                <input placeholder="Nama" type="text" name="nama" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Kelas" type="text" name="kelas" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="NPM" type="text" name="npm" tabindex="3" required>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>
    </div>
</body>
</html>