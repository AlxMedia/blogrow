<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper">

	<header id="header" class="group">
		
		<?php if ( has_nav_menu('topbar') ): ?>
			<nav class="nav-container group" id="nav-topbar">
				<div class="nav-toggle"><i class="fa fa-bars"></i></div>
				<div class="nav-text"><!-- put your mobile menu text here --></div>
				<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'topbar','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
				
				<div class="container">
					<div class="container-inner">		
						<div class="toggle-search"><i class="fa fa-search"></i></div>
						<div class="search-expand">
							<div class="search-expand-inner">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div><!--/.container-inner-->
				</div><!--/.container-->
				
			</nav><!--/#nav-topbar-->
		<?php endif; ?>
		
		<div class="container group">
			<div class="container-inner">
				<div class="pad group">
					<?php echo alx_site_title(); ?>
					<?php if ( get_theme_mod( 'site-description', 'on' ) == 'on' ): ?><p class="site-description"><?php bloginfo( 'description' ); ?></p><?php endif; ?>
					<?php alx_social_links() ; ?>
				</div>
			</div><!--/.container-inner-->
			
			<?php if ( is_page_template( 'page-templates/frontpage.php' ) ) { get_template_part('inc/frontpage-top'); } ?>
			
		</div><!--/.container-->

		<div class="slant-topleft"></div>
		<div class="slant-topright"></div>
		<div class="slant-bottomleft"></div>
		<div class="slant-bottomright"></div>
		<div class="slant-onleft"></div>
		<div class="slant-onright"></div>
		
	</header><!--/#header-->
	
	<?php get_template_part('inc/featured'); ?>
		
	<div id="page" class="container">
		<div class="main group">