<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>


<header class="site-header">

    <h1 class="site-title">
        <a href="<?php echo home_url(); ?>">
            Watershed Sentinel
        </a>
    </h1>

    <nav class="header-navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu'
        ));
        ?>
    </nav>

</header>