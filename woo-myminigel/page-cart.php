<?php get_header(); ?>
<main class="page-cart">
    <div class="wrapper">
        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="cart-heading">
                <h1 class="cart-heading__title"><?php the_title( )?></h1>
				<a class="cart-heading__link" href="http://localhost:8888/myminigel/">
					<svg width="16" height="18">
						<use xlink:href="http://localhost:8888/myminigel/wp-content/themes/woo-myminigel/assets/img/sprite.svg#icon-home"></use>
					</svg>
				</a>
            </div>
            <?php the_content(); ?>
            <?php endwhile; else: ?>
            <p>Записей нет</p>
        <?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>