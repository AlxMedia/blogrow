<?php get_header(); ?>

<div class="content">
	<div class="pad group">
		
		<?php get_template_part('inc/page-title'); ?>
		
		<div class="notebox">
			<?php get_search_form(); ?>
		</div>
	
		<div class="entry-content">
			<p><?php esc_html_e( 'The page you are trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.', 'blogrow' ); ?></p>
		</div>
		
	</div><!--/.pad-->			
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>