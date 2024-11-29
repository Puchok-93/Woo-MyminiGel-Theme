<?php get_header(); ?>

<?php do_action( 'woocommerce_before_main_content' ); ?>

<div class="box">
    <div class="catalog-sidebar">
        <?php do_action( 'woocommerce_sidebar' )  ?>
    </div>
    <div class="catalog-content">

    </div>
</div>

<?php do_action( 'woocommerce_after_main_content' ); ?>

<?php get_footer(); ?>