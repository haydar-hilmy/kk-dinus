<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a502a8bc22.js" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <!-- <link rel="shortcut icon" href="" type="image/x-icon"> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="css/main.css">

    <title>CMD-QE Laboratory – Computational Materials Design and Quantum Engineering</title>

</head>

<body>

    <div class="page">

        <header>
            <div class="header-text">

                <div class="header-left-section">
                    <a href="#"><img src="asset/image/header.png" alt="header"></a>
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
                    <ul>
                        <li>
                            <a href="#">Home</a>
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
                    </ul>
                </div>
            </nav>

            <main class="carousel-container">
                <div class="carousel">
                    <div class="item active">
                        <img src="asset/banner/banner1.png" alt="banner">
                        <a class="caption">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur quod non exercitationem esse sed saepe
                        </a>
                    </div>
                    <div class="item">
                        <img src="asset/banner/banner2.png" alt="banner">
                        <a class="caption">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur quod non exercitationem esse sed saepe
                        </a>
                    </div>
                    <div class="item">
                        <img src="asset/banner/banner1.png" alt="banner">
                        <a class="caption">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur quod non exercitationem esse sed saepe
                        </a>
                    </div>
                    <div class="item">
                        <img src="asset/banner/banner2.png" alt="banner">
                        <a class="caption">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur quod non exercitationem esse sed saepe
                        </a>
                    </div>
                </div>
                <button class="btn prev">
                    <svg height="35px" version="1.1" viewBox="0 0 512 512" width="35px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M327.3,98.9l-2.1,1.8l-156.5,136c-5.3,4.6-8.6,11.5-8.6,19.2c0,7.7,3.4,14.6,8.6,19.2L324.9,411l2.6,2.3c2.5,1.7,5.5,2.7,8.7,2.7c8.7,0,15.8-7.4,15.8-16.6h0V112.6h0c0-9.2-7.1-16.6-15.8-16.6C332.9,96,329.8,97.1,327.3,98.9z" />
                    </svg>


                </button>
                <button class="btn next">
                    <svg height="35px" viewBox="0 0 512 512" width="35px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M184.7,413.1l2.1-1.8l156.5-136c5.3-4.6,8.6-11.5,8.6-19.2c0-7.7-3.4-14.6-8.6-19.2L187.1,101l-2.6-2.3  C182,97,179,96,175.8,96c-8.7,0-15.8,7.4-15.8,16.6h0v286.8h0c0,9.2,7.1,16.6,15.8,16.6C179.1,416,182.2,414.9,184.7,413.1z" />
                    </svg>

                </button>
                <div class="dots"></div>
            </main>

        </header>

        <div class="main">
            <article>
                <div class="primary">
                    <h2>Welcome to Computational Materials Design and Quantum Engineering (CMD-QE) Lab at ITB!</h2>
                    <p>Our research group utilizes and develops atomistic-based multi-scale materials simulation techniques (e.g. first-principles density functional theory calculations, ab-initio and classical molecular dynamics and kinetic Monte Carlo (kMC)) to study various physical and chemical properties of materials. We have broad interest in various topics related (but not limited) to: solid-state catalysts for various chemical reactions (e.g. direct methane-to-methanol conversion, oxygen reduction reaction (ORR), etc.); electronic and ionic conductivities in solid state materials and polymers; materials for hydrogen and direct-hydrazine fuel cells; materials for drug delivery; materials for gas sensors; and materials for energy conversion and storage (e.g. photovoltaic, Li/Na-ion batteries, Metal-air batteries, etc.). Our recent effort also include machine-learning and data-driven-based approach to accelerate the discovery of new functional materials. Beyond materials-related research, our group also interested in the theoretical study related to quantum technologies (e.g. quantum computing, quantum thermodynamics and quantum measurement).</p>
                </div>

                <div class="secondary">
                    <div class="widget">
                        <aside>
                            <h3>Recent Post</h3>
                            <ul>
                                <li><a href="#">Webinar Series</a></li>
                                <li><a href="#">Webinar Series</a></li>
                                <li><a href="#">Webinar Series</a></li>
                                <li><a href="#">Webinar Series</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>

            </article>
        </div>

        <footer>
            <div class="footer-widget">
                <div class="column-widget">
                    <h3>Lorem</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quos minima doloremque, suscipit, ipsam quia esse nostrum neque laboriosam</p>
                </div>
                <div class="column-widget">
                    <h3>Lorem</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quos minima doloremque, suscipit, ipsam quia esse nostrum neque laboriosam</p>
                </div>
                <div class="column-widget">
                    <h3>Lorem</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quos minima doloremque, suscipit, ipsam quia esse nostrum neque laboriosam</p>
                </div>
            </div>
            <div class="footer-widget-socket">
                <p>Copyright © 2024 CMD-QE Laboratory. Powered by WordPress. Theme: Spacious by ThemeGrill</p>
            </div>
        </footer>

    </div>

    <script src="js/carousel.js"></script>
</body>

</html>