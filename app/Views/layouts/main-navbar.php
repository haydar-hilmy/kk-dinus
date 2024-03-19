    <div class="header-text">

        <div class="header-left-section">
            <a href="#"><img src="asset/logo/matics-logo.png" alt="header"></a>
        </div>

        <div class="header-right-section">
            <div class="col-wrap">
                <a href="#"><img src="asset/icon/social-media/facebook.png" alt="facebook"></a>
                <a href="#"><img src="asset/icon/social-media/twitter.png" alt="twitter"></a>
                <a href="#"><img src="asset/icon/social-media/instagram.png" alt="instagram"></a>
            </div>

            <form method="post">
                <?= csrf_field() ?>
                <input type="text" placeholder="Search" name="search">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>

    </div>

    <nav>
        <div class="menu-primary">
            <button class="menu-primary-btn">MENU</button>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="#">
                        Members
                        <svg class="dropdown-icon" width="1rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M98.9 184.7l1.8 2.1 136 156.5c4.6 5.3 11.5 8.6 19.2 8.6 7.7 0 14.6-3.4 19.2-8.6L411 187.1l2.3-2.6c1.7-2.5 2.7-5.5 2.7-8.7 0-8.7-7.4-15.8-16.6-15.8v0H112.6v0c-9.2 0-16.6 7.1-16.6 15.8 0 3.2 1.1 6.3 2.9 8.8z" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu">
                        <a>member</a>
                        <a>member</a>
                        <a>member</a>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        Research
                        <svg class="dropdown-icon" width="1rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M98.9 184.7l1.8 2.1 136 156.5c4.6 5.3 11.5 8.6 19.2 8.6 7.7 0 14.6-3.4 19.2-8.6L411 187.1l2.3-2.6c1.7-2.5 2.7-5.5 2.7-8.7 0-8.7-7.4-15.8-16.6-15.8v0H112.6v0c-9.2 0-16.6 7.1-16.6 15.8 0 3.2 1.1 6.3 2.9 8.8z" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu">
                        <a>research</a>
                        <a>research</a>
                        <a>research</a>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        Project
                        <svg class="dropdown-icon" width="1rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M98.9 184.7l1.8 2.1 136 156.5c4.6 5.3 11.5 8.6 19.2 8.6 7.7 0 14.6-3.4 19.2-8.6L411 187.1l2.3-2.6c1.7-2.5 2.7-5.5 2.7-8.7 0-8.7-7.4-15.8-16.6-15.8v0H112.6v0c-9.2 0-16.6 7.1-16.6 15.8 0 3.2 1.1 6.3 2.9 8.8z" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu">
                        <a>project</a>
                        <a>project</a>
                        <a>project</a>
                    </ul>
                </li>
                <li>
                    <a href="#">Publications</a>
                </li>
                <li>
                    <a href="#">Lecture & Tutorials</a>
                </li>
                <li>
                    <a href="#">In-House Code</a>
                </li>
                <li>
                    <?php if (session('login')) { ?>
                        <a href="/logout">Logout</a>
                    <?php } else { ?>
                        <a href="/login">Login</a>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </nav>