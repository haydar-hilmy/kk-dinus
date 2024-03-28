<?= $this->extend('admin/main-admin') ?>

<?= $this->section('content') ?>

<div class="container">
    <h2>Add Banner</h2>
    <form action="add" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="form-group mt-3">
            <label for="judul">Judul Banner</label>
            <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan Judul">
        </div>

        <div class="form-group mt-3">
            <label for="deskripsi">Deskripsi Banner</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Masukkan Deskripsi"></textarea>
        </div>

        <div class="container w-50 mt-3">
            <img class="w-100 rounded" alt="preview" id="previewImg">
        </div>

        <div class="mt-3">
            <label class="form-label" id="label_foto" for="img_input">File Banner</label>
            <input onchange="preview()" type="file" name="file" class="form-control" id="img_input">
        </div>

        <?php if (session('validation')) : ?>
            <?php foreach (session('validation')->getErrors() as $error) : ?>
                <?= esc($error); ?>
            <?php endforeach ?>
        <?php endif ?>

        <div class="form-group mt-3">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>

        <?php if (session()->getFlashdata('pesan')) : ?>
            <p><?= session()->getFlashdata('pesan') ?></p>
        <?php endif; ?>
    </form>
</div>

<script src="<?= base_url('js/img-preview.js') ?>"></script>

<?= $this->endsection() ?>