<?= $this->extend('admin/main-admin') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="<?= base_url('css/carousel-banner.css') ?>">

<h1>BANNER</h1>

<?= $this->include('layouts/index/banner') ?>


<table>
    <tr>
        <th>Id</th>
        <th>Id KK</th>
        <th>Title</th>
        <th>Description</th>
        <th>Updated at</th>
        <th>Action</th>
    </tr>

    <?php foreach ($banners as $key => $b) : ?>
        <tr>
            <td><?= $b->id ?></td>
            <td><?= $b->id_kk ?></td>
            <td><?= $b->title ?></td>
            <td><?= $b->description ?></td>
            <td><?= $b->updated_at ?></td>
            <td>Delete</td>
        </tr>
    <?php endforeach ?>

</table>



<script src="<?= base_url('js/carousel.js') ?>"></script>
<?= $this->endSection() ?>