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
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/carousel-banner.css">

    <title><?= $title ?></title>

</head>

<body>

    <div class="page">

        <header>
            <?= $this->include('layouts/main-navbar') ?>
        </header>

        <div class="main">

            <?= $this->renderSection('content') ?>

        </div>

        <?= $this->include('layouts/main-footer') ?>

    </div>

</body>

</html>