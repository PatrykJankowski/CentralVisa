<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#6377FE">

    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/centralvisa/img/icon-180.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/centralvisa/img/icon-16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/centralvisa/img/icon-32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/wp-content/themes/centralvisa/img/icon-96.png">

    <link rel="stylesheet" href="/wp-content/themes/centralvisa/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;700&family=Lato:wght@300;400&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-XXXXXXXXXX');
    </script>
</head>

<body <?php body_class(); ?>>

<header id="header" class="navbar">
    <div class="container d-flex flex-column">

        <nav class="navbar__nav-desktop">
            <?php wp_nav_menu(array('theme_location' => 'nav-menu', 'container' => false)); ?>
        </nav>

        <nav id="navbar__nav-mobile" class="navbar__nav-mobile">
            <div class="container flex flex-col items-center">
                <?php wp_nav_menu(array('theme_location' => 'nav-menu', 'container' => false)); ?>
            </div>
        </nav>
    </div>
</header>

<main>
