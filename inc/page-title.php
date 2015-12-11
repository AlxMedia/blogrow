<div class="page-title">

	<?php if ( is_home() ) : ?>
		<h2><?php echo alx_blog_title(); ?></h2>
		
	<?php elseif ( is_single() ): ?>
				
	<?php elseif ( is_page() ): ?>
		<h2><?php echo alx_page_title(); ?></h2>

	<?php elseif ( is_search() ): ?>
		<h1>
			<?php if ( have_posts() ): ?><i class="fa fa-search"></i><?php endif; ?>
			<?php if ( !have_posts() ): ?><i class="fa fa-exclamation-circle"></i><?php endif; ?>
			<?php $search_results=$wp_query->found_posts;
				if ($search_results==1) {
					echo $search_results.' '.__('Search result','blogrow');
				} else {
					echo $search_results.' '.__('Search results','blogrow');
				}
			?>
		</h1>
		
	<?php elseif ( is_404() ): ?>
		<h1><i class="fa fa-exclamation-circle"></i><?php _e('Error 404.','blogrow'); ?> <span><?php _e('Page not found!','blogrow'); ?></span></h1>
		
	<?php elseif ( is_author() ): ?>
		<?php $author = get_userdata( get_query_var('author') );?>
		<h1><i class="fa fa-user"></i><?php _e('Author:','blogrow'); ?> <span><?php echo $author->display_name;?></span></h1>
		
	<?php elseif ( is_category() ): ?>
		<h1><i class="fa fa-folder-open"></i><?php _e('Category:','blogrow'); ?> <span><?php echo single_cat_title('', false); ?></span></h1>

	<?php elseif ( is_tag() ): ?>
		<h1><i class="fa fa-tags"></i><?php _e('Tagged:','blogrow'); ?> <span><?php echo single_tag_title('', false); ?></span></h1>
		
	<?php elseif ( is_day() ): ?>
		<h1><i class="fa fa-calendar"></i><?php _e('Daily Archive:','blogrow'); ?> <span><?php echo get_the_time('F j, Y'); ?></span></h1>
		
	<?php elseif ( is_month() ): ?>
		<h1><i class="fa fa-calendar"></i><?php _e('Monthly Archive:','blogrow'); ?> <span><?php echo get_the_time('F Y'); ?></span></h1>
			
	<?php elseif ( is_year() ): ?>
		<h1><i class="fa fa-calendar"></i><?php _e('Yearly Archive:','blogrow'); ?> <span><?php echo get_the_time('Y'); ?></span></h1>
		
		<?php elseif ( has_post_format('audio') ): ?>
			<h1><i class="fa fa-volume-up"></i><?php _e('Type:','blogrow'); ?> <span><?php _e('Audio','blogrow'); ?></span></h1>
		<?php elseif ( has_post_format('aside') ): ?>
			<h1><i class="fa fa-pen"></i><?php _e('Type:','blogrow'); ?> <span><?php _e('Aside','blogrow'); ?></span></h1>
		<?php elseif ( has_post_format('chat') ): ?>
			<h1><i class="fa fa-comments-o"></i><?php _e('Type:','blogrow'); ?> <span><?php _e('Chat','blogrow'); ?></span></h1>
		<?php elseif ( has_post_format('gallery') ): ?>
			<h1><i class="fa fa-picture-o"></i><?php _e('Type:','blogrow'); ?> <span><?php _e('Gallery','blogrow'); ?></span></h1>
		<?php elseif ( has_post_format('image') ): ?>
			<h1><i class="fa fa-camera"></i><?php _e('Type:','blogrow'); ?> <span><?php _e('Image','blogrow'); ?></span></h1>
		<?php elseif ( has_post_format('link') ): ?>
			<h1><i class="fa fa-link"></i><?php _e('Type:','blogrow'); ?> <span><?php _e('Link','blogrow'); ?></span></h1>
		<?php elseif ( has_post_format('quote') ): ?>
			<h1><i class="fa fa-quote-left"></i><?php _e('Type:','blogrow'); ?> <span><?php _e('Quote','blogrow'); ?></span></h1>
		<?php elseif ( has_post_format('status') ): ?>
			<h1><i class="fa fa-bullhorn"></i><?php _e('Type:','blogrow'); ?> <span><?php _e('Status','blogrow'); ?></span></h1>
		<?php elseif ( has_post_format('video') ): ?>
			<h1><i class="fa fa-video-camera"></i><?php _e('Type:','blogrow'); ?> <span><?php _e('Video','blogrow'); ?></span></h1>
	
	<?php else: ?>
		<h2><?php the_title(); ?></h2>
	
	<?php endif; ?>

</div><!--/.page-title-->