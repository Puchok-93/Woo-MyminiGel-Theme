<?php get_header(); ?>
    <main>
        <div class="wrapper">
            <div class="page-not-found-block">
                <p class="page-not-found-block__code">404</p>
                <h1 class="page-not-found-block__title">Page not found</h1>
                <p class="page-not-found-block__text">Unfortunately, the requested page does not exist.</p>
                <a class="page-not-found-block__link" href="<?php echo home_url( '/' )?>">Return to homepage</a>
            </div>
        </div>

        <?php 
            global $post;
            $slider = get_posts( array(
                'post_type' => 'slider',
            ) ); 
        ?>

  <?php if( $slider ): ?>
    <div class="wrapper wrapper--no-pd">
      <div id="main-slider" class="swiper main-slider">
        <div class="swiper-wrapper">
          <?php $i = 0; foreach ( $slider as $post ): setup_postdata( $post ); ?>
            <div class="swiper-slide main-slide">
              <div class="main-slide-inner" style="background-image: url(<?php the_post_thumbnail_url( 'full' )?>) ">
                <div class="main-slide-info">
                  <?php the_content( '' ); ?>
                </div>
              </div>
            </div>
          <?php $i++; endforeach ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  <?php endif; ?>

  <div class="wrapper">
    <div id="our-products" class="our-products">
      <div class="our-products-heading">
        <h2 class="our-products__title">Our products</h2>
      </div>

      <div class="our-products-content">
        <?php echo do_shortcode( '[featured_products]' )?>
      </div>
      <div class="our-products-heading-footer">
        <a class="our-products-heading-footer__link" href="shop/">View all catalog</a>
        <div class="our-products-controls">
          <div class="swiper-button-next">
            <svg xmlns="http://www.w3.org/2000/svg viewBox="0 0 12 20" fill="none">
              <path d="M7.72205 9.972L0.638714 17.0553C0.37038 17.3239 0.240796 17.6481 0.249963 18.0278C0.25913 18.4073 0.398018 18.7313 0.66663 18.9999C0.935241 19.2685 1.26399 19.4028 1.65288 19.4028C2.04177 19.4028 2.37038 19.2685 2.63871 18.9999L10.6945 10.9445C10.8426 10.7962 10.9468 10.6434 11.007 10.4862C11.067 10.3287 11.097 10.1573 11.097 9.972C11.097 9.787 11.067 9.61576 11.007 9.45825C10.9468 9.30075 10.8426 9.14798 10.6945 8.99992L2.61121 0.916588C2.3426 0.647977 2.01385 0.513672 1.62496 0.513672C1.23607 0.513672 0.907325 0.647977 0.638714 0.916588C0.37038 1.1852 0.236212 1.51395 0.236212 1.90284C0.236212 2.29173 0.37038 2.62034 0.638714 2.88867L7.72205 9.972Z"/>
            </svg>
          </div>
          <div class="swiper-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 20" fill="none">
              <path d="M4.27795 9.972L11.3613 17.0553C11.6296 17.3239 11.7592 17.6481 11.75 18.0278C11.7409 18.4073 11.602 18.7313 11.3334 18.9999C11.0648 19.2685 10.736 19.4028 10.3471 19.4028C9.95823 19.4028 9.62962 19.2685 9.36129 18.9999L1.30545 10.9445C1.1574 10.7962 1.05323 10.6434 0.992953 10.4862C0.932953 10.3287 0.902954 10.1573 0.902954 9.972C0.902954 9.787 0.932953 9.61576 0.992953 9.45825C1.05323 9.30075 1.1574 9.14798 1.30545 8.99992L9.38879 0.916588C9.6574 0.647977 9.98615 0.513672 10.375 0.513672C10.7639 0.513672 11.0927 0.647977 11.3613 0.916588C11.6296 1.1852 11.7638 1.51395 11.7638 1.90284C11.7638 2.29173 11.6296 2.62034 11.3613 2.88867L4.27795 9.972Z"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
    </main>
<?php get_footer(); ?>