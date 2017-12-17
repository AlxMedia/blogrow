<?php get_header(); ?>

<div class="content">
	<div class="pad group">
	
		<?php get_template_part('inc/page-title'); ?>

		<?php while ( have_posts() ): the_post(); ?>
	
			<article <?php post_class('entry boxed group'); ?>>
				
				<?php get_template_part('inc/page-image'); ?>
				
				<div class="entry-inner pad">
					<div class="entry-content themeform">
						<?php the_content(); ?>
						<div class="clear"></div>
					</div><!--/.entry-content-->	
				</div><!--/.entry-inner-->

			</article>
			
			<?php if ( get_theme_mod( 'page-comments', 'off' ) == 'on' ) { comments_template('/comments.php',true); } ?>
			
		<?php endwhile; ?>
		
	</div><!--/.pad-->			
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>