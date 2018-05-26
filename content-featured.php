<article id="post-<?php the_ID(); ?>" <?php post_class('item group'); ?>>	
	
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<?php if ( has_post_thumbnail() ): ?>
			<?php the_post_thumbnail('blogrow-featured'); ?>
		<?php else: ?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/thumb-featured.png" alt="<?php the_title(); ?>" />
		<?php endif; ?>
	</a>
	<div class="item-overlay">
		<div class="item-slant-left"></div>
		<div class="item-slant-right"></div>
		<span class="item-category"><?php the_category(' / '); ?></span>
		<h3 class="item-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h3><!--/.item-title-->
	</div>

</article><!--/.item-->	