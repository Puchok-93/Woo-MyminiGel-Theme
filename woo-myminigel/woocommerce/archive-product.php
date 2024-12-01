<?php get_header(); ?>

<?php do_action( 'woocommerce_before_main_content' ); ?>

<div class="box">
    <div class="catalog-page">
        <div class="catalog-sidebar">
            <?php do_action( 'woocommerce_sidebar' )  ?>
        </div>

        <div class="catalog-content">
            <h1 style="display: none"><?php woocommerce_page_title(); ?></h1>

            <div style="display: flex; align-items: center;justify-content: space-between">
                <?php do_action( 'woocommerce_before_shop_loop' ); ?>
            </div>

            <div class="catalog-products">
                <?php if ( woocommerce_product_loop() ) { ?>
                    <?php  woocommerce_product_loop_start();
                        if ( wc_get_loop_prop( 'total' ) ) {
                            while ( have_posts() ) {
                                the_post();

                                do_action( 'woocommerce_shop_loop' );

                                wc_get_template_part( 'content', 'product' );
                            }
                        }

                        woocommerce_product_loop_end();

                        do_action( 'woocommerce_after_shop_loop' );
                    } else {
                        do_action( 'woocommerce_no_products_found' );
                } ?>
            </div>
            
        </div>
    </div>
</div>

<?php do_action( 'woocommerce_after_main_content' ); ?>

<?php get_footer(); ?>