<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php  bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <a href="<?php echo get_home_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
            <span><?php bloginfo('description'); ?></span>
        </div>
    </header>
    <nav class="main-nav">
        <div class="container">
            <?php
                $args = array(
                    'theme_location' => 'primary menu'
                );
            ?>
            <?php  wp_nav_menu(); ?>
        </div>

    </nav>