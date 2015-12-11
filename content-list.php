<article id="post-<?php the_ID(); ?>" <?php post_class('entry group'); ?>>	
	
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<?php if ( has_post_thumbnail() ): ?>
			<?php the_post_thumbnail('thumb-small'); ?>
		<?php else: ?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/thumb-small.png" alt="<?php the_title(); ?>" />
		<?php endif; ?>
	</a>
	
	<div class="entry-inner">
	
		<header class="entry-header">
			<div class="entry-category"><?php the_category(' / '); ?></div>
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2><!--/.entry-title-->
		</header>
			
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!--/.entry-->
		
		<div class="entry-date updated"><i class="fa fa-clock-o"></i><?php the_time('j M, Y'); ?></div>
		
	</div>
	
</article><!--/.entry-->