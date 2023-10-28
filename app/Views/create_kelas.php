<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
   <div class="container"> 
        <form action="<?= base_url('/kelas/store')?>" method="POST" enctype="multipart/form-data">
        <label for="nama_kelas" >Tambah Kelas</label>    
        <fieldset>
                <input class="form-control" placeholder="Nama Kelas" type="text" name="nama_kelas" tabindex="2" required />
            </fieldset>
            
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>
    </div>
    
<?= $this->endsection() ?>