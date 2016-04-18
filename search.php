<?php get_header(); ?>

<section class="content">		
	<div class="pad group">
		
		<?php get_template_part('inc/page-title'); ?>
		
		<div class="notebox">
			<?php esc_html_e('For the term','blogrow'); ?> "<span><?php echo get_search_query(); ?></span>".
			<?php if ( !have_posts() ): ?>
				<?php esc_html_e('Please try another search:','blogrow'); ?>
			<?php endif; ?>
			<div class="search-again">
				<?php get_search_form(); ?>
			</div>
		</div>
	
		<?php if ( have_posts() ) : ?>
			
			<?php if ( ot_get_option('blog-layout') == 'blog-grid' ) : ?>
			
				<ul class="entry-grid group">
					<?php while ( have_posts() ): the_post(); ?>
						<?php get_template_part('content-grid'); ?>
					<?php endwhile; ?>
				</ul>
			
			<?php elseif ( ot_get_option('blog-layout') == 'blog-list' ) : ?>		
				
				<div class="entry-list group">
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content-list'); ?>
				<?php endwhile; ?>
				</div>
				
			<?php else: ?>
			
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content'); ?>
				<?php endwhile; ?>
				
			<?php endif; ?>
	
			<?php get_template_part('inc/pagination'); ?>
			
		<?php endif; ?>
		
	</div><!--/.pad-->			
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>