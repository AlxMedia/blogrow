<?php get_header(); ?>

<section class="content">
	<div class="pad group">	
			
			<?php while ( have_posts() ): the_post(); ?>
				<article <?php post_class('entry boxed group'); ?>>	
					
					<?php get_template_part('inc/post-formats'); ?>
					
					<div class="pad group">
						
						<header class="entry-header">
							<div class="entry-category"><?php the_category(' / '); ?></div>
							<h2 class="entry-title">
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</h2><!--/.entry-title-->
						</header>
						
						<div class="entry-content themeform">	
							<?php the_content(); ?>
							<?php wp_link_pages(array('before'=>'<div class="entry-pages">'.__('Pages:','blogrow'),'after'=>'</div>')); ?>
							<div class="clear"></div>	
							<?php the_tags('<p class="entry-tags"><span>'.__('Tags:','blogrow').'</span> ','','</p>'); ?>					
						</div><!--/.entry-->
						
						<div class="entry-date updated"><i class="fa fa-clock-o"></i><?php the_time('j M, Y'); ?></div>
						
					</div><!--/.pad-->
					
					<?php if ( ot_get_option('sharrre') != 'off' ) { get_template_part('inc/sharrre'); } ?>
					
					<?php if ( ( ot_get_option( 'author-bio' ) != 'off' ) && get_the_author_meta( 'description' ) ): ?>
						<div class="author-bio pad">
							<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
							<div class="bio-name"><?php the_author_meta('display_name'); ?></div>
							<div class="bio-desc"><?php the_author_meta('description'); ?></div>
							<div class="clear"></div>
						</div>
					<?php endif; ?>

				</article><!--/.entry-->
				
				<div class="boxed">
					<?php if ( ot_get_option( 'post-nav' ) != 'off') { get_template_part('inc/post-nav'); } ?>	
					<?php if ( ot_get_option( 'related-posts' ) != '1' ) { get_template_part('inc/related-posts'); } ?>
				</div><!--/.boxed-->
				
				<div class="boxed pad">
					<?php comments_template('/comments.php',true); ?>
				</div><!--/.pad-->
				
			<?php endwhile; ?>
			
	</div><!--/.pad-->	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>