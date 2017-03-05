<?php get_header(); ?>

<div class="content">		
	<div class="pad group">
		
		<?php get_template_part('inc/page-title'); ?>
		
		<?php if ((category_description() != '') && !is_paged()) : ?>
			<div class="notebox">
				<?php echo category_description(); ?>
			</div>
		<?php endif; ?>
	
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
</div><!--/.content-->

<?php get_sidebar(); ?>
		
<?php get_footer(); ?>