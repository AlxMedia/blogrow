<div class="sharrre-container group">
	<div id="twitter" data-url="<?php echo the_permalink(); ?>" data-text="<?php echo the_title(); ?>" data-title="<?php esc_html_e('Tweet', 'blogrow'); ?>"></div>
	<div id="facebook" data-url="<?php echo the_permalink(); ?>" data-text="<?php echo the_title(); ?>" data-title="<?php esc_html_e('Like', 'blogrow'); ?>"></div>
	<div id="pinterest" data-url="<?php echo the_permalink(); ?>" data-text="<?php echo the_title(); ?>" data-title="<?php esc_html_e('Pin It', 'blogrow'); ?>"></div>
	<div id="linkedin" data-url="<?php echo the_permalink(); ?>" data-text="<?php echo the_title(); ?>" data-title="<?php esc_html_e('Share on LinkedIn', 'blogrow'); ?>"></div>
</div><!--/.sharrre-container-->

<script type="text/javascript">
	// Sharrre
	jQuery(document).ready(function(){
		jQuery('#twitter').sharrre({
			share: {
				twitter: true
			},
			template: '<a class="box group" href="#"><div class="count" href="#"><i class="fa fa-plus"></i></div><div class="share"><i class="fa fa-twitter"></i></div></a>',
			enableHover: false,
			enableTracking: true,
			buttons: { twitter: {via: '<?php echo esc_attr( get_theme_mod('twitter-username') ); ?>'}},
			click: function(api, options){
				api.simulateClick();
				api.openPopup('twitter');
			}
		});
		jQuery('#facebook').sharrre({
			share: {
				facebook: true
			},
			template: '<a class="box group" href="#"><div class="count" href="#">{total}</div><div class="share"><i class="fa fa-facebook-square"></i></div></a>',
			enableHover: false,
			enableTracking: true,
			buttons:{layout: 'box_count'},
			click: function(api, options){
				api.simulateClick();
				api.openPopup('facebook');
			}
		});
		jQuery('#pinterest').sharrre({
			share: {
				pinterest: true
			},
			template: '<a class="box group" href="#"><div class="count" href="#">{total}</div><div class="share"><i class="fa fa-pinterest"></i></div></a>',
			enableHover: false,
			enableTracking: true,
			buttons: {
			pinterest: {
				description: '<?php echo the_title(); ?>'<?php if( has_post_thumbnail() ){ ?>,media: '<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>'<?php } ?>
				}
			},
			click: function(api, options){
				api.simulateClick();
				api.openPopup('pinterest');
			}
		});
		jQuery('#linkedin').sharrre({
			share: {
				linkedin: true
			},
			template: '<a class="box group" href="#"><div class="count" href="#">{total}</div><div class="share"><i class="fa fa-linkedin-square"></i></div></a>',
			enableHover: false,
			enableTracking: true,
			buttons: {
			linkedin: {
				description: '<?php echo the_title(); ?>'<?php if( has_post_thumbnail() ){ ?>,media: '<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>'<?php } ?>
				}
			},
			click: function(api, options){
				api.simulateClick();
				api.openPopup('linkedin');
			}
		});
	});
</script>