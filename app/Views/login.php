<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="form-login">
    <form action="login" method="post">
        <?= csrf_field() ?>
        <div>
            <label for="nip">NIP</label>
            <input type="text" placeholder="NIP" name="nip" id="nip" autofocus required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password" id="password" required>
        </div>
        <div>
            <button>Login</button>
        </div>
    </form>
</div>

<?=  $this->endSection() ?>