<?php $related = alx_related_posts(); ?>

<?php if ( $related->have_posts() ): ?>

<div class="pad">
	<h4 class="heading"><?php esc_html_e('You may also like','blogrow'); ?></h4>
	<ul class="related-posts group">
		
		<?php while ( $related->have_posts() ) : $related->the_post(); ?>
		<li class="related">
			<article <?php post_class(); ?>>

				<div class="related-thumbnail">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php if ( has_post_thumbnail() ): ?>
							<?php the_post_thumbnail('blogrow-medium'); ?>
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/thumb-medium.png" alt="<?php the_title_attribute(); ?>" />
						<?php endif; ?>
						<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fa fa-play"></i></span>'; ?>
						<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fa fa-volume-up"></i></span>'; ?>
						<?php if ( is_sticky() ) echo'<span class="thumb-icon small"><i class="fa fa-star"></i></span>'; ?>
					</a>
				</div><!--/.related-thumbnail-->
				
				<div class="related-inner">
					
					<h4 class="related-title">
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h4><!--/.related-title-->
					
					<div class="related-date"><?php the_time( get_option('date_format') ); ?></div>
				
				</div><!--/.related-inner-->

			</article>
		</li><!--/.related-->
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

	</ul><!--/.related-posts-->
</div><!--/.pad-->

<?php endif; ?>

<?php wp_reset_postdata(); ?>
