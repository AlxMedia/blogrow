<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry boxed group'); ?>>	
	
	<?php get_template_part('inc/post-formats'); ?>
	
	<div class="entry-inner pad">
		
		<header class="entry-header">
			<div class="entry-category"><?php the_category(' / '); ?></div>
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2><!--/.entry-title-->
		</header>
			
		<div class="entry-content">
			<?php 
				if ( is_search() ) { the_excerpt(); } 
				else the_content(esc_html__('Continue reading...','blogrow'));
			?>
		</div><!--/.entry-->
		
		<footer class="entry-footer group">
			<div class="entry-author-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'64'); ?></div>
			<div class="entry-author"><?php esc_html_e('by','blogrow'); ?> <?php the_author_posts_link(); ?></div>
			<div class="entry-date updated"><i class="fa fa-clock-o"></i><?php the_time( get_option('date_format') ); ?></div>
		</footer>
		
	</div><!--/.entry-inner-->
		
</article><!--/.entry-->	