<div class="frontpage-top pad">
	
	<?php if ( get_theme_mod('front-picture') ): ?>
	<div class="front-picture">
		<img src="<?php echo get_theme_mod('front-picture'); ?>" alt="" />
	</div>
	<?php endif; ?>
	
	<?php get_template_part('inc/page-title'); ?>

	<?php while ( have_posts() ): the_post(); ?>
		<?php the_content(); ?>
		<div class="clear"></div>
	<?php endwhile; ?>
	
	<?php if ( get_theme_mod('front-button-text') && get_theme_mod('front-button-link') ): ?>
	<div class="front-button">
		<a href="<?php echo esc_attr( get_theme_mod('front-button-link') ); ?>">
			<span><?php echo esc_attr( get_theme_mod('front-button-text') ); ?></span>
		</a>
	</div>
	<?php endif; ?>
	
</div>