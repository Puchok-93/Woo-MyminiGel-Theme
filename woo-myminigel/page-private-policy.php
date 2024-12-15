<?php get_header(); ?>
    <main class="page-cart">
        <div class="wrapper">
                <div class="cart-heading">
                    <h1 class="cart-heading__title"><?php the_title( )?></h1>
                    <a class="cart-heading__link" href="http://localhost:8888/myminigel/">
                        <svg width="16" height="18">
                            <use xlink:href="http://localhost:8888/myminigel/wp-content/themes/woo-myminigel/assets/img/sprite.svg#icon-home"></use>
                        </svg>
                    </a>
                </div>
                <div class="page-content">
                    <?php the_content(); ?>
                </div>
        </div>
    </main>
<?php get_footer(); ?>