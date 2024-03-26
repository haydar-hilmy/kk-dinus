<?= $this->extend('admin/main-admin') ?>

<?= $this->section('content') ?>

<div class="container">
    <h2>Add Banner</h2>
    <form action="add" method="post">
        <div class="form-group mt-3">
            <label for="judul">Judul Banner</label>
            <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan Judul">
        </div>

        <div class="form-group mt-3">
            <label for="deskripsi">Deskripsi Banner</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Masukkan Deskripsi"></textarea>
        </div>
        
        <div class="container w-50">
            <img class="w-100 rounded" alt="preview" id="previewImg">
        </div>

        <div class="custom-file mt-3">
            <input onchange="preview()" type="file" class="custom-file-input" id="img_input">
            <label class="custom-file-label" id="label_foto" name="file" for="img_input">Choose file</label>
        </div>

        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</div>

<script src="<?= base_url('js/img-preview.js') ?>"></script>

<?= $this->endsection() ?>