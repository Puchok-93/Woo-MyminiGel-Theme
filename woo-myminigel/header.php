<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >

    <header>
        <a href="<?php echo home_url( '/' )?>">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/logo.svg'?>" alt="Myminigel Logo">
        </a>


        <!-- Navigation -->
        <nav>
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                    )
                )
            ?>
        </nav>
    </header>

        <?php  wp_body_open(); ?>
