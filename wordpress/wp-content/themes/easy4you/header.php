<!doctype html>
<html lang="<? language_attributes()?>">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name')?></title>
    <link href="<?php echo get_bloginfo('template_url') ?>/css/easy4you.min.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="slider">
        <div class="a-slide slide1"></div>
        <div class="a-slide slide2"></div>
        <div class="a-slide slide3"></div>
    </div>
    <div class="dots"></div>
    <div class="logo">
        <a href="index.php"><img src="<? background_image() ?>" width="175" height="130" alt="easy4you"></a>
    </div>
    <div class="get"><a href="#">Get a Free Quote</a></div>
    <nav class="nav">
        <a href="<?echo home_url()?>" class="nav_item">Main</a>
        <a href="#" class="nav_item">Our Services</a>
        <a href="#" class="nav_item">Get a Free Quote</a>
        <a href="#contact" class="nav_item">Contact</a>
    </nav>
</header>