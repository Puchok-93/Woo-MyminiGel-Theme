<?php get_header(); ?>

<main class="main">

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

  <div class="wrapper">
    <div class="company-advantages">
      <div class="company-advantages-heading">
          <h2 class="company-advantages-heading__title">Why</h2>
      </div>
      <div class="company-advantages-content">
          <div class="company-advantages-images">
            <div class="company-advantages-images__img">
              <img src="<?php echo get_template_directory_uri()?>/assets/img/decorative-product-img-1.jpg'?>" alt="Decorative product image №1">
            </div>
            <div class="company-advantages-images__img">
              <img src="<?php echo get_template_directory_uri()?>/assets/img/decorative-product-img-2.jpg'?>" alt="Decorative product image №2">
            </div>
            <div class="company-advantages-images__img">
              <img src="<?php echo get_template_directory_uri()?>/assets/img/decorative-product-img-3.jpg'?>" alt="Decorative product image №3">
            </div>
            <div class="company-advantages-images__img">
              <img src="<?php echo get_template_directory_uri()?>/assets/img/decorative-product-img-4.jpg'?>" alt="Decorative product image №4">
            </div>
          </div>

          <ul class="company-advantages-list">
            <li class="company-advantage">
              <div class="company-advantage__logo">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-formula.svg'?>" alt="Formula Icon">
              </div>
              <h3 class="company-advantage__title">Innovative formula</h3>
              <p class="company-advantage__subtitle">Unique durability up to 4 weeks without chipping.</p>
            </li>
            <li class="company-advantage">
              <div class="company-advantage__logo">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-tree.svg'?>" alt="Tree Icon">
              </div>
              <h3 class="company-advantage__title">Eco-friendliness</h3>
              <p class="company-advantage__subtitle">Natural ingredients, no harmful substances.</p>
            </li>
            <li class="company-advantage">
              <div class="company-advantage__logo">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-paint.svg'?>" alt="Paint Icon">
              </div>
              <h3 class="company-advantage__title">A rich palette</h3>
              <p class="company-advantage__subtitle">More than 200 shades for any mood.</p>
            </li>
            <li class="company-advantage">
              <div class="company-advantage__logo">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-delivery.svg'?>" alt="Delivery Icon">
              </div>
              <h3 class="company-advantage__title">Fast delivery</h3>
              <p class="company-advantage__subtitle">We deliver all over the country in 2 days.</p>
            </li>
          </ul>
      </div>
    </div>
  </div>

  <div class="wrapper">
            <!-- Reviews -->
            <?php 
            global $post;
            $slider = get_posts( array(
                'post_type' => 'reviewSlider',
            ) ); 
        ?>
        <div class="reviews">
            <div class="reviews-heading">
                <h2 class="reviews-heading__title">Reviews</h2>
            </div>
            <div class="reviews-content">
                <div id="reviews-slider" class="reviews-slider swiper">
                <div class="swiper-wrapper">
                    <?php $i = 0; foreach ( $slider as $post ): setup_postdata( $post ); ?>
                    <div class="swiper-slide">
                        <div class="review">
                                <?php the_content( '' ); ?>
                            </div>
                        </div>
                    <?php $i++; endforeach ?>
                </div>
                </div>
            </div>
            <div class="review-next swiper-button-next">
                <svg width="40" height="41" viewBox="0 0 40 41">
                    <path d="M22.7217 20.5971L15.6383 27.6805C15.37 27.9491 15.2404 28.2732 15.2496 28.653C15.2588 29.0324 15.3977 29.3564 15.6663 29.625C15.9349 29.8937 16.2636 30.028 16.6525 30.028C17.0414 30.028 17.37 29.8937 17.6383 29.625L25.6942 21.5696C25.8422 21.4213 25.9464 21.2685 26.0067 21.1113C26.0667 20.9538 26.0967 20.7824 26.0967 20.5971C26.0967 20.4121 26.0667 20.2409 26.0067 20.0834C25.9464 19.9259 25.8422 19.7731 25.6942 19.625L17.6108 11.5417C17.3422 11.2731 17.0135 11.1388 16.6246 11.1388C16.2357 11.1388 15.907 11.2731 15.6383 11.5417C15.37 11.8103 15.2358 12.1391 15.2358 12.528C15.2358 12.9168 15.37 13.2455 15.6383 13.5138L22.7217 20.5971Z"/>
                </svg>
            </div>
            <div class="review-prev swiper-button-prev">
                <svg width="40" height="41" viewBox="0 0 40 41">
                    <path d="M17.2778 20.5971L24.3612 27.6805C24.6295 27.9491 24.7591 28.2732 24.7499 28.653C24.7407 29.0324 24.6019 29.3564 24.3332 29.625C24.0646 29.8937 23.7359 30.028 23.347 30.028C22.9581 30.028 22.6295 29.8937 22.3612 29.625L14.3053 21.5696C14.1573 21.4213 14.0531 21.2685 13.9928 21.1113C13.9328 20.9538 13.9028 20.7824 13.9028 20.5971C13.9028 20.4121 13.9328 20.2409 13.9928 20.0834C14.0531 19.9259 14.1573 19.7731 14.3053 19.625L22.3887 11.5417C22.6573 11.2731 22.986 11.1388 23.3749 11.1388C23.7638 11.1388 24.0926 11.2731 24.3612 11.5417C24.6295 11.8103 24.7637 12.1391 24.7637 12.528C24.7637 12.9168 24.6295 13.2455 24.3612 13.5138L17.2778 20.5971Z"/>
                </svg>
            </div>
        </div>
  </div>
  </main>

<?php get_footer(); ?>