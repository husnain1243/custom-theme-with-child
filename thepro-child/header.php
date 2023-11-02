<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="masthead" class="site-header">
        <!-- <div class="site-branding">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                <p class="site-description"><?php bloginfo('description'); ?></p>
            <?php endif; ?>
        </div>
        <nav id="site-navigation" class="main-navigation">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id' => 'primary-menu',
                ));
            ?>
        </nav> -->
        <div id="header-main-container">
            <div class="container">
                <div class="header-container d-flex justify-content-between align-items-center">
                    <div class="header-logo"><img src="" alt="logo"/></div>
                    <div class="navbar-menu">
                        <?php 
                            wp_nav_menu(
                                array (
                                    'header-menu'
                                )
                            ); 
                        ?>
                    </div>
                    <div>custom header</div>
                </div>
            </div>
        </div> 
    </header>