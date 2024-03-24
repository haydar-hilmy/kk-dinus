<nav>
    <div class="menu-primary">
        <button class="menu-primary-btn">MENU</button>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="#">
                    KK Dinus
                    <svg class="dropdown-icon" width="1rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M98.9 184.7l1.8 2.1 136 156.5c4.6 5.3 11.5 8.6 19.2 8.6 7.7 0 14.6-3.4 19.2-8.6L411 187.1l2.3-2.6c1.7-2.5 2.7-5.5 2.7-8.7 0-8.7-7.4-15.8-16.6-15.8v0H112.6v0c-9.2 0-16.6 7.1-16.6 15.8 0 3.2 1.1 6.3 2.9 8.8z" />
                    </svg>
                </a>
                <ul class="dropdown-menu">
                    <a href="#">Manage KK</a>
                    <?php foreach ($kelompokKajian as $key => $kk): ?>
                        <a href="#"><?= $kk->fullName ?></a>
                    <?php endforeach ?>
                </ul>
            </li>
            <li>
                <a href="#">
                    Layouts
                    <svg class="dropdown-icon" width="1rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M98.9 184.7l1.8 2.1 136 156.5c4.6 5.3 11.5 8.6 19.2 8.6 7.7 0 14.6-3.4 19.2-8.6L411 187.1l2.3-2.6c1.7-2.5 2.7-5.5 2.7-8.7 0-8.7-7.4-15.8-16.6-15.8v0H112.6v0c-9.2 0-16.6 7.1-16.6 15.8 0 3.2 1.1 6.3 2.9 8.8z" />
                    </svg>
                </a>
                <ul class="dropdown-menu">
                    <a href="<?= base_url('superadmin/banner') ?>">Banner</a>
                </ul>
            </li>
            <li>
                <a href="/logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>