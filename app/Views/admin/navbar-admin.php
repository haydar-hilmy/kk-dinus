<nav>
    <div class="menu-primary">
        <button class="menu-primary-btn">MENU</button>
        <ul>
            <li>
                <a href="<?= base_url('superadmin') ?>">
                    <button type="button" class="btn btn-primary">
                        Home
                    </button>
                </a>
            </li>
            <li>
                <div class="dropdown">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        KK Dinus
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Manage KK</a>
                        <?php foreach ($kelompokKajian as $key => $kk) : ?>
                            <a class="dropdown-item" href="#"><?= $kk->fullName ?></a>
                        <?php endforeach ?>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Layouts
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url('superadmin/banner') ?>">Banner</a>
                    </div>
                </div>
            </li>
            <li>
                <a href="/logout">
                    <button type="button" class="btn btn-danger">
                        Logout
                    </button>
                </a>
            </li>
        </ul>
    </div>
</nav>