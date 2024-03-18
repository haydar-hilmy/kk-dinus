<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="form-login">
    <form action="login/auth" method="post">
        <?= csrf_field() ?>
        <div>
            <label for="nip">NIP</label>
            <input type="text" placeholder="NIP" name="nip" id="nip" autofocus required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password" id="password" required>
        </div>
        <?php if (session()->getFlashdata('error')) : ?>
            <p class="warning-info"><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>
        <div>
            <button>Login</button>
        </div>
    </form>
</div>

<?=  $this->endSection() ?>