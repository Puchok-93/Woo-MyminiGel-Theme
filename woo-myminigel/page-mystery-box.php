<?php
/*
Template Name: Mystery Box
*/
?>

<?php get_header(); ?>

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


</div>

<?php get_footer(); ?>