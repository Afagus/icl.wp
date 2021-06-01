<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ICL</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

</head>
<body>
<!--HEADER-->

<header class="header">
    <div class="header-inside">
        <strong><a href="<?= home_url()?>"><img class="logo" src="<?= get_template_directory_uri()?>/assets/img/logo.png" alt="<?php bloginfo('name')?>"></a></strong>
        <!--NAVIGATION-->
        <div class="header_burger" id="header_burger">
            <span></span>
        </div>

        <nav class="nav-header">
            <?php wp_nav_menu(array(
                'theme_location'  => 'headMenu',
                'container' => null,
                'menu_class' => 'head-menu',
            ))?>
        </nav>

    </div>
    <?php wp_head(); ?>
</header>