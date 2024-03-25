<?= $this->extend('admin/main-admin') ?>

<?= $this->section('content') ?>



<div>
    <h2>Add Banner</h2>

    <form action="" method="post">
        <div class="input-wrap">
            <label for="judul">Judul Banner</label>
            <input type="text" id="judul" name="judul">
            <h5>judul harus diisi</h5>
        </div>

        <div class="input-wrap">
            <label for="deskripsi">Judul Banner</label>
            <textarea name="deskripsi" id="deskripsi"></textarea>
            <h5>judul harus diisi</h5>
        </div>
        
        <div>
            <label for="file">Choose a file</label>
            <input type="file" id="file" name="foto">
            <h5>judul harus diisi</h5>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

<?= $this->endsection() ?>