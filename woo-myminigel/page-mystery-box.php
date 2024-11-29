<?php
/*
Template Name: Mystery Box
*/
?>

<?php get_header(); ?>

<main>
    <div class="wrapper mystery-box-page">
        <div class="mystery-box">
            <div class="mystery-box-info">
                <h1 class="mystery-box-info__title">Subscribe to our Mystery box gel polishes!</h1>
                <p class="mystery-box-info__subtitle">Get exclusive access to new colors...</p>
            </div>
        </div>
        <div class="about-mystery-box">
            <div class="about-mystery-box-info">
                <div class="about-mystery-box-description">
                    <h2 class="about-mystery-box-description__title">Why Subscribe?</h2>
                    <p class="about-mystery-box-description__text">
                        A gel polish subscription is an opportunity to monthly refresh your collection with trendy shades curated 
                        by professionals. Each subscription includes carefully selected colours that will enhance your style 
                        and help express your individuality.
                    </p>
                    <small class="about-mystery-box-description__small">
                        A gel polish subscription is an opportunity to monthly refresh your collection with trendy 
                        shades curated by professionals. Each subscription includes carefully selected colours that 
                        will enhance your style and help express your individuality.
                    </small>
                </div>
                <div class="about-mystery-box-image">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/about-mystery-box-img.jpg" alt="">
                </div>
            </div>
            <ul class="mystery-box-advantages">
                <li class="mystery-box-advantage">
                    <span class="mystery-box-advantage__logo">
                        <svg width="22" height="18">
                            <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#icon-percent"></use>
                        </svg>
                    </span>
                    <h3 class="mystery-box-advantage__title">Convenience and savings</h3>
                    <p class="mystery-box-advantage__descr">Get your favourite colours and new arrivals delivered to your home at a great price.</p>
                </li>
                <li class="mystery-box-advantage">
                    <span class="mystery-box-advantage__logo">
                        <svg width="22" height="18">
                            <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#icon-medal"></use>
                        </svg>
                    </span>
                    <h3 class="mystery-box-advantage__title">Exclusive shades</h3>
                    <p class="mystery-box-advantage__descr">Enjoy exclusive shades available only through subscription.</p>
                </li>
                <li class="mystery-box-advantage">
                    <span class="mystery-box-advantage__logo">
                        <svg width="22" height="18">
                            <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#icon-flex"></use>
                        </svg>
                    </span>
                    <h3 class="mystery-box-advantage__title">Flexibility</h3>
                    <p class="mystery-box-advantage__descr">Choose 5, 7, or 9 bottles – perfect for any preferences and seasons.</p>
                </li>
            </ul>
        </div>

        <!-- Suscription -->
        <div class="sudscription">
            <div class="subscription-heading">
                <h2 class="subscription-heading__title">Subscription Plans</h2>
                <p class="subscription-heading__subtitle">Choose the best plan for you</p>
            </div>
        </div>

        <!-- FAQ -->
        <div id="faq" class="faq">
            <div class="faq-info">
                <div class="faq-info-footer">
                    <h2 class="faq-info__title">Frequently<br>Asked Questions</h2>
                </div>
            </div>
            <div class="faq-questions">
                <div class="faq-question">
                    <div class="faq-question-heading">
                        <h3 class="faq-question-heading__title">How do I cancel my subscription?</h3>
                        <button class="faq-question__btn" type="button">
                            <svg width="22" height="18">
                                <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#icon-arrow"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="faq-question-content">
                        <div class="faq-question-content-box">
                            <p>In the <a>user's personal account</a>, in the tab Manage Subscription.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-question">
                    <div class="faq-question-heading">
                        <h3 class="faq-question-heading__title">Can I choose the shades?</h3>
                        <button class="faq-question__btn" type="button">
                            <svg width="22" height="18">
                                <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#icon-arrow"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="faq-question-content">
                        <div class="faq-question-content-box">
                            <p>Text</p>
                        </div>
                    </div>
                </div>
                <div class="faq-question">
                    <div class="faq-question-heading">
                        <h3 class="faq-question-heading__title">Is delivery included in the price?</h3>
                        <button class="faq-question__btn" type="button">
                            <svg width="22" height="18">
                                <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#icon-arrow"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="faq-question-content">
                        <div class="faq-question-content-box">
                            <p>Text</p>
                        </div>
                    </div>
                </div>
                <div class="faq-question">
                    <div class="faq-question-heading">
                        <h3 class="faq-question-heading__title">ETC</h3>
                        <button class="faq-question__btn" type="button">
                            <svg width="22" height="18">
                                <use xlink:href="<?php echo get_template_directory_uri()?>/assets/img/sprite.svg#icon-arrow"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="faq-question-content">
                        <div class="faq-question-content-box">
                            <p>Text</p>
                        </div>
                    </div>
                </div>
                <button class="faq-ask-question-btn" type="button">Did not find an answer to your question?</button>
            </div>
        </div>

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

        <!-- Customer photos -->
        <?php 
            global $post;
            $slider = get_posts( array(
                'post_type' => 'customerPhotoSlider',
            ) ); 
        ?>
        <div class="customer-photos">
            <div class="customer-photos-heading">
                <h2 class="customer-photos-heading__title">Customer Photos</h2>
            </div>
            <div class="customer-photos-content">
                <div id="customer-photos-slider" class="swiper customer-photos-slider">
                    <div class="swiper-wrapper">
                        <?php $i = 0; foreach ( $slider as $post ): setup_postdata( $post ); ?>
                            <div class="swiper-slide ">
                                <div class="customer-photo">
                                    <?php the_content( '' ); ?>
                                </div>
                            </div>
                        <?php $i++; endforeach ?>
                    </div>
                </div>
            </div>
            <div class="customer-photo-next swiper-button-next">
                <svg width="40" height="41" viewBox="0 0 40 41">
                    <path d="M22.7217 20.5971L15.6383 27.6805C15.37 27.9491 15.2404 28.2732 15.2496 28.653C15.2588 29.0324 15.3977 29.3564 15.6663 29.625C15.9349 29.8937 16.2636 30.028 16.6525 30.028C17.0414 30.028 17.37 29.8937 17.6383 29.625L25.6942 21.5696C25.8422 21.4213 25.9464 21.2685 26.0067 21.1113C26.0667 20.9538 26.0967 20.7824 26.0967 20.5971C26.0967 20.4121 26.0667 20.2409 26.0067 20.0834C25.9464 19.9259 25.8422 19.7731 25.6942 19.625L17.6108 11.5417C17.3422 11.2731 17.0135 11.1388 16.6246 11.1388C16.2357 11.1388 15.907 11.2731 15.6383 11.5417C15.37 11.8103 15.2358 12.1391 15.2358 12.528C15.2358 12.9168 15.37 13.2455 15.6383 13.5138L22.7217 20.5971Z"/>
                </svg>
            </div>
            <div class="customer-photo-prev swiper-button-prev">
                <svg width="40" height="41" viewBox="0 0 40 41">
                    <path d="M17.2778 20.5971L24.3612 27.6805C24.6295 27.9491 24.7591 28.2732 24.7499 28.653C24.7407 29.0324 24.6019 29.3564 24.3332 29.625C24.0646 29.8937 23.7359 30.028 23.347 30.028C22.9581 30.028 22.6295 29.8937 22.3612 29.625L14.3053 21.5696C14.1573 21.4213 14.0531 21.2685 13.9928 21.1113C13.9328 20.9538 13.9028 20.7824 13.9028 20.5971C13.9028 20.4121 13.9328 20.2409 13.9928 20.0834C14.0531 19.9259 14.1573 19.7731 14.3053 19.625L22.3887 11.5417C22.6573 11.2731 22.986 11.1388 23.3749 11.1388C23.7638 11.1388 24.0926 11.2731 24.3612 11.5417C24.6295 11.8103 24.7637 12.1391 24.7637 12.528C24.7637 12.9168 24.6295 13.2455 24.3612 13.5138L17.2778 20.5971Z"/>
                </svg>
            </div>
        </div>

    </div>
</main>
<?php get_footer(); ?>