<?php 
    add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

    // карточка товара
    remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
    add_action( 'woocommerce_shop_loop_item_title', function () {
        global $product;

        echo '
            <div class="product-card-descr"> 
                <p class="product-card-descr__category">' . strip_tags(wc_get_product_category_list($product->get_id())) . '</p>
                <h3 class="product-card-descr__title"> 
                    <a href="' . $product->get_permalink() . '">' . $product->get_title() . '</a>
                </h3>
            </div>
        ';

    
    } );

    remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
    add_action( 'woocommerce_sale_flash', 'pancode_echo_sale_percent' );

    add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );

    remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);



remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 6 );
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 50);
remove_action( 'woocommerce_review_before', 'woocommerce_review_display_gravatar', 10 );
add_action( 'woocommerce_review_before', 'woocommerce_review_display_gravatar', 9 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

function wcc_change_breadcrumb_delimiter( $defaults ) {
    // Change the breadcrumb delimeter from '/' to '>'
    $defaults['delimiter'] = ' &mdash; ';
    return $defaults;
}


/**
 * Echo discount percent badge html.
 *
 * @param string $html Default sale html.
 *
 * @return string
 */
    function pancode_echo_sale_percent( $html ) {
        global $product;

        /**
         * @var WC_Product $product
         */

        $regular_max = 0;
        $sale_min    = 0;
        $discount    = 0;

        if ( 'variable' === $product->get_type() ) {
            $prices      = $product->get_variation_prices();
            $regular_max = max( $prices['regular_price'] );
            $sale_min    = min( $prices['sale_price'] );
        } else {
            $regular_max = $product->get_regular_price();
            $sale_min    = $product->get_sale_price();
        }

        if ( ! $regular_max && $product instanceof WC_Product_Bundle ) {
            $bndl_price_data = $product->get_bundle_price_data();
            $regular_max     = max( $bndl_price_data['regular_prices'] );
            $sale_min        = max( $bndl_price_data['prices'] );
        }

        if ( floatval( $regular_max ) ) {
            $discount = round( 100 * ( $regular_max - $sale_min ) / $regular_max );
        }

        return '<span class="onsale product-card-price__percent">-&nbsp;' . esc_html( $discount ) . '%</span>';
    }
?>