<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >

    <header class="header">
        <div class="header-top-content">
            <a class="header-logo" href="<?php echo home_url( '/' )?>">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/logo.svg'?>" alt="Myminigel Logo">
            </a>
            <div class="header-search">
                <!-- <form class="header-search-form" action="">
                    <div class="header-search-input-block"">
                        <input class="header-search__input form-control" type="text" name="s" placeholder="Search" aria-label="Searching..." aria-describedby="button-search">
                        <button class="header-search__btn" type="submit" id="button-search"></button>
                    </div>
                </form> -->
                <?php aws_get_search_form( true ); ?>
            </div>
        </div>
        <nav class="header-navigation">
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'container' => false,
                        'menu_class' => 'navigation-list'
                    )
                )
            ?>
        </nav>
    </header>