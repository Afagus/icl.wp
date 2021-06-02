<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ICL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <script src="<?=bloginfo("template_directory")?>/assets/js/jquery-2.2.0.js"></script>
<!--    <script src="--><?//=bloginfo("template_directory")?><!--/assets/js/main.js"></script>-->
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>
<header>
    <div class="head-top-wrapper wrapper">
        <div class="logo">
            <a href="<?php get_home_url()?>">
                <img src="<?=bloginfo("template_directory")?>/assets/images/logo.png" alt="">
            </a>
        </div>
        <div class="hamburger clear" id="hamburger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
        <nav class="top-nav">
            <ul>
                <li><a href="products.html">Products</a></li>
                <li><a href="research.html">Research</a></li>
                <li><a href="energy-storage.html">Energy Storage</a></li>
                <li><a href="resource-center.html">Resource Center</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

