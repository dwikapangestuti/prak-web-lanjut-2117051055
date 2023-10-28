<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
   <div class="container"> 
        <form action="<?= base_url('/kelas/' . $kelas['id']) ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <input type="hidden" name="_method" value="PUT">
            <fieldset>
            <label for="nama_kelas" >Edit Kelas</label>
                <input class="form-control" placeholder="Nama Kelas" type="text" name="nama_kelas" tabindex="2" required />
            </fieldset>
        
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>
    </div>
    
<?= $this->endsection() ?>