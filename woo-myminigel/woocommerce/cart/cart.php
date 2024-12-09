<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>
    <div class="cart-box">
        <div class="cart-products">
            <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
                <?php do_action( 'woocommerce_before_cart_table' ); ?>
                
                    <div class="actions upgrade-cart-block">
                        <?php if ( wc_coupons_enabled() ) { ?>
                            <div class="coupon">
                                <label for="coupon_code" class="screen-reader-text"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> 
                                <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Enter promo code', 'woocommerce' ); ?>" /> 
                                <button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>">
                                    <?php esc_html_e( 'Apply', 'woocommerce' ); ?>
                                </button>
                                <?php do_action( 'woocommerce_cart_coupon' ); ?>
                            </div>
                        <?php } ?>
                            <div class="upgrade">
                                <button type="submit" class="update-cart button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>
                                <?php do_action( 'woocommerce_cart_actions' ); ?>
                                <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                            </div>
                    </div>



                <div class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                    <?php do_action( 'woocommerce_before_cart_contents' ); ?>

                    <?php
                        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
                            /**
                             * Filter the product name.
                             *
                             * @since 2.1.0
                             * @param string $product_name Name of the product in the cart.
                             * @param array $cart_item The product in the cart.
                             * @param string $cart_item_key Key for the product in the cart.
                             */
                            $product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );

                            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                                ?>
                                <div class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">


                                    <div class="product-thumbnail">
                                        <?php
                                            $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                                            if ( ! $product_permalink ) {
                                                echo $thumbnail; // PHPCS: XSS ok.
                                            } else {
                                                printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                                            }
                                        ?>
                                    </div>

                                    <div class="cart-item-info">
                                        <div class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
                                            <?php
                                                if ( ! $product_permalink ) {
                                                    echo wp_kses_post( $product_name . '&nbsp;' );
                                                } else {
                                                    /**
                                                     * This filter is documented above.
                                                     *
                                                     * @since 2.1.0
                                                     */
                                                    echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                                                }

                                                do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                                                // Meta data.
                                                echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                                                // Backorder notification.
                                                if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                                    echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
                                                }
                                            ?>
                                        </div>

                                        <div class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
                                            <span class="product-price-label">Price: </span>
                                            <?php
                                                echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                            ?>
                                        </div>

                                        <div class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
                                            <span class="product-price-label">Subtotal: </span>
                                            <?php
                                                echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                            ?>
                                        </div>

                                        <div class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
                                            <?php
                                                if ( $_product->is_sold_individually() ) {
                                                    $min_quantity = 1;
                                                    $max_quantity = 1;
                                                } else {
                                                    $min_quantity = 0;
                                                    $max_quantity = $_product->get_max_purchase_quantity();
                                                }

                                                $product_quantity = woocommerce_quantity_input(
                                                    array(
                                                        'input_name'   => "cart[{$cart_item_key}][qty]",
                                                        'input_value'  => $cart_item['quantity'],
                                                        'max_value'    => $max_quantity,
                                                        'min_value'    => $min_quantity,
                                                        'product_name' => $product_name,
                                                    ),
                                                    $_product,
                                                    false
                                                );

                                                echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
                                            ?>
                                        </div>

                                    </div>

                                    <div class="product-remove">
                                        <?php
                                            echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                                'woocommerce_cart_item_remove_link',
                                                sprintf(
                                                    '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">
                                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3 18C2.45 18 1.975 17.8083 1.575 17.425C1.19167 17.025 1 16.55 1 16V3C0.716667 3 0.475 2.90833 0.275 2.725C0.0916668 2.525 1.19209e-07 2.28333 1.19209e-07 2C1.19209e-07 1.71667 0.0916668 1.48333 0.275 1.3C0.475 1.1 0.716667 0.999999 1 0.999999H5C5 0.716665 5.09167 0.483332 5.275 0.299998C5.475 0.0999985 5.71667 -1.43051e-06 6 -1.43051e-06H10C10.2833 -1.43051e-06 10.5167 0.0999985 10.7 0.299998C10.9 0.483332 11 0.716665 11 0.999999H15C15.2833 0.999999 15.5167 1.1 15.7 1.3C15.9 1.48333 16 1.71667 16 2C16 2.28333 15.9 2.525 15.7 2.725C15.5167 2.90833 15.2833 3 15 3V16C15 16.55 14.8 17.025 14.4 17.425C14.0167 17.8083 13.55 18 13 18H3ZM6 14C6.28333 14 6.51667 13.9083 6.7 13.725C6.9 13.525 7 13.2833 7 13V6C7 5.71667 6.9 5.48333 6.7 5.3C6.51667 5.1 6.28333 5 6 5C5.71667 5 5.475 5.1 5.275 5.3C5.09167 5.48333 5 5.71667 5 6V13C5 13.2833 5.09167 13.525 5.275 13.725C5.475 13.9083 5.71667 14 6 14ZM10 14C10.2833 14 10.5167 13.9083 10.7 13.725C10.9 13.525 11 13.2833 11 13V6C11 5.71667 10.9 5.48333 10.7 5.3C10.5167 5.1 10.2833 5 10 5C9.71667 5 9.475 5.1 9.275 5.3C9.09167 5.48333 9 5.71667 9 6V13C9 13.2833 9.09167 13.525 9.275 13.725C9.475 13.9083 9.71667 14 10 14Z"/>
                                                        </svg>
                                                    </a>',
                                                    esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                                    /* translators: %s is the product name */
                                                    esc_attr( sprintf( __( 'Remove %s from cart', 'woocommerce' ), wp_strip_all_tags( $product_name ) ) ),
                                                    esc_attr( $product_id ),
                                                    esc_attr( $_product->get_sku() )
                                                ),
                                                $cart_item_key
                                            );
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    ?>

                    <?php do_action( 'woocommerce_cart_contents' ); ?>
                    <?php do_action( 'woocommerce_after_cart_contents' ); ?>
                </div>
                <?php do_action( 'woocommerce_after_cart_table' ); ?>
            </form>
        </div>

        <?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

        <div class="cart-aside">
            <div class="cart-collaterals">
                <?php
                    /**
                     * Cart collaterals hook.
                     *
                     * @hooked woocommerce_cross_sell_display
                     * @hooked woocommerce_cart_totals - 10
                     */
                    do_action( 'woocommerce_cart_collaterals' );
                ?>
            </div>
            <p class="free-delivery-info">Get free shiping if you order 100$!</p>
        </div>
    </div>
<?php do_action( 'woocommerce_after_cart' ); ?>
