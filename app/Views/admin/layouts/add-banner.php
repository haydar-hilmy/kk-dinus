<?= $this->extend('admin/main-admin') ?>

<?= $this->section('content') ?>

<div>
    <h2>Add Banner</h2>

    <form action="" method="post">
        <div class="form-group mt-3">
            <label for="judul">Judul Banner</label>
            <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan Judul">
        </div>

        <div class="form-group mt-3">
            <label for="deskripsi">Deskripsi Banner</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Masukkan Deskripsi"></textarea>
        </div>

        <div class="custom-file mt-3">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" name="file" for="customFile">Choose file</label>
        </div>

        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</div>

<?= $this->endsection() ?>