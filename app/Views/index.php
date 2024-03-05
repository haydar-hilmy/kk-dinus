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
                                <a>Loremmember</a>
                                <a>Loremmember</a>
                                <a>Loremmember</a>
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
                                <a>loremresearch</a>
                                <a>loremresearch</a>
                                <a>loremresearch</a>
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
                                <a>loremproject</a>
                                <a>loremproject</a>
                                <a>loremproject</a>
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

            <div class="banner">
                <div class="slider">

                    <div class="slider-banner">
                        <img src="asset/banner/banner1.png" alt="banner">
                        <div class="caption-slider-banner">
                            <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                        </div>
                    </div>
                    <div class="slider-banner">
                        <img src="asset/banner/banner1.png" alt="banner">
                        <div class="caption-slider-banner">
                            <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                        </div>
                    </div>

                </div>
            </div>

        </header>

        <div class="main">
            <article>
                <div class="primary">
                    <!-- <h2>Welcome to Computational Materials Design and Quantum Engineering (CMD-QE) Lab at ITB!</h2> -->
                    <!-- <p>Our research group utilizes and develops atomistic-based multi-scale materials simulation techniques (e.g. first-principles density functional theory calculations, ab-initio and classical molecular dynamics and kinetic Monte Carlo (kMC)) to study various physical and chemical properties of materials. We have broad interest in various topics related (but not limited) to: solid-state catalysts for various chemical reactions (e.g. direct methane-to-methanol conversion, oxygen reduction reaction (ORR), etc.); electronic and ionic conductivities in solid state materials and polymers; materials for hydrogen and direct-hydrazine fuel cells; materials for drug delivery; materials for gas sensors; and materials for energy conversion and storage (e.g. photovoltaic, Li/Na-ion batteries, Metal-air batteries, etc.). Our recent effort also include machine-learning and data-driven-based approach to accelerate the discovery of new functional materials. Beyond materials-related research, our group also interested in the theoretical study related to quantum technologies (e.g. quantum computing, quantum thermodynamics and quantum measurement).</p> -->
                </div>

                <div class="secondary">
                    <div class="widget"></div>
                    <aside></aside>
                </div>

            </article>
        </div>

        <footer>
            <div class="footer-widget">
                <div class="column-widget"></div>
                <div class="column-widget"></div>
                <div class="column-widget"></div>
            </div>
            <div class="footer-widget-socket">
                <!-- <p>Copyright © 2024 CMD-QE Laboratory. Powered by WordPress. Theme: Spacious by ThemeGrill</p> -->
            </div>
        </footer>

    </div>

</body>

</html>