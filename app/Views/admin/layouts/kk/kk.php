<?= $this->extend('admin/main-admin') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="<?= base_url('css/layouts/table.css') ?>">

<h1 class="title">Kelompok Kajian</h1>

<div class="table-data-wrapper">
    <table class="table-data">
        <a href="banner/add"><button class="table-data-button-add">Add</button></a>
        <tr>
            <th>Id</th>
            <th>Nama KK</th>
            <th>Title</th>
            <th>Description</th>
            <th>Visibility</th>
            <th>Updated at</th>
            <th>Action</th>
        </tr>

    </table>
</div>

<?= $this->endSection() ?>