<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link rel="stylesheet" href="<?=base_url("/assets/css/style.css")?>">

</head>
<body>
    <div class="container">
        <div class="card" data-tilt>

            <img src="<?=base_url("/assets/img/kaa.jpg")?>"alt="" width="200px">
            <h2>Profile</h2>
            <br>
            <tr>
                <td><?=$nama?></td>
            </tr>
            <br>
            <tr>
                <td><?=$kelas?></td>
            </tr>
            <br>
            <tr>
                <td><?=$npm?></td>
            </tr>
            <div class="link">
                <a href="https://instagram.com"><img src="/assets/img/instagram.png"></a>
                <a href="https://twitter.com"><img src="/assets/img/twitter.png"></a>
                <a href="https://tiktok.com"><img src="/assets/img/tiktok.png"></a>
            </div>
        </div>
    </div>
</body>
</html>