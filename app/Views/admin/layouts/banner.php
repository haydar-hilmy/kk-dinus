<?= $this->extend('admin/main-admin') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="<?= base_url('css/carousel-banner.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/layouts/table.css') ?>">

<h1 class="title">Banner</h1>

<?= $this->include('layouts/index/banner') ?>

<div class="table-data-wrapper">
    <table class="table-data">
        <a href="banner/add" target="_blank"><button class="table-data-button-add">Add</button></a>
        <tr>
            <th>Id</th>
            <th>Nama KK</th>
            <th>Title</th>
            <th>Description</th>
            <th>Updated at</th>
            <th>Action</th>
        </tr>

        <?php foreach ($banners as $key => $b) : ?>
            <tr>
                <td><?= $b->id ?></td>
                <td><?= $b->shortName ?></td>
                <td><?= $b->title ?></td>
                <td><?= $b->description ?></td>
                <td><?= $b->updated_at ?></td>
                <td>
                    <form action="<?= base_url('superadmin/banner/del/') . $b->id ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" onclick="return confirm('Yakin menghapus banner ini?')">Delete</button>
                    </form>
                    | <a href="#">Edit</a>
                </td>
            </tr>
        <?php endforeach ?>

    </table>
</div>

<script src="<?= base_url('js/carousel.js') ?>"></script>
<?= $this->endSection() ?>