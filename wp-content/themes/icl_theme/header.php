<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ICL</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="js/weather.js"></script>
</head>
<body>
<!--HEADER-->
<div class="weather" id="weather">
    <div class="weather__city"></div>
    <div class="weather__forecast"></div>
    <div class="weather__desc"></div>
    <div class="weather__icon"></div>
</div>

<header class="header">

    <div class="header-inside">
        <strong><a href="#"><img class="logo" src="img/logo.png" alt="Industrial products"></a></strong>
        <!--NAVIGATION-->
        <div class="header_burger" id="header_burger">
            <span></span>
        </div>
        <nav class="nav-header">
            <a class="head-menu" href="#">Products</a>
            <a class="head-menu" href="#">Research</a>
            <a class="head-menu" href="#">Energy Storage</a>
            <a class="head-menu" href="#">Resource Center</a>
            <a class="head-menu" href="#">Resource Contact</a>
        </nav>

    </div>
    <?php wp_head(); ?>
</header>