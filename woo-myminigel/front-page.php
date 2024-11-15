<?php get_header(); ?>


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

<?php get_footer(); ?>