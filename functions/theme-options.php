<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'blogrow', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'blogrow' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'blogrow' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'blogrow' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'blogrow' ),
	'button_url'  => 'https://wordpress.org/support/theme/blogrow/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'blogrow' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'blogrow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'frontpage', array(
    'priority'    => 11,
    'title'       => esc_html__( 'Frontpage', 'blogrow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'blogrow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'blogrow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'blogrow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'blogrow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'blogrow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'blogrow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'blogrow' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'blogrow' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'blogrow' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'blogrow' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'blogrow' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Frontpage: Frontpage Picture
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'image',
	'settings'		=> 'front-picture',
	'label'			=> esc_html__( 'Frontpage Picture', 'blogrow' ),
	'description'	=> esc_html__( 'Recommended size is square, 400x400px.', 'blogrow' ),
	'section'		=> 'frontpage',
	'default'		=> '',
) );
// Frontpage: Button Text
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'text',
	'settings'		=> 'front-button-text',
	'label'			=> esc_html__( 'Button Text', 'blogrow' ),
	'section'		=> 'frontpage',
	'default'		=> '',
) );
// Frontpage: Button Link
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'text',
	'settings'		=> 'front-button-link',
	'label'			=> esc_html__( 'Button Link', 'blogrow' ),
	'section'		=> 'frontpage',
	'default'		=> '',
) );
// Blog: Blog Layout
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'blog-layout',
	'label'			=> esc_html__( 'Blog Layout', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> 'blog-standard',
	'choices'		=> array(
		'blog-standard'	=> esc_html__( 'Standard', 'blogrow' ),
		'blog-grid'		=> esc_html__( 'Grid', 'blogrow' ),
		'blog-list'		=> esc_html__( 'List', 'blogrow' ),
	),
) );
// Blog: Heading
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'blogrow' ),
	'description'	=> esc_html__( 'Your blog heading', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'blogrow' ),
	'description'	=> esc_html__( 'Your blog subheading', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'blogrow' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> '26',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Post Count
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'blogrow' ),
	'description'	=> esc_html__( 'Max number of featured posts to display on the homepage. Set it to 0 to disable.', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> '3',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '12',
		'step'	=> '1',
	),
) );
// Blog: Featured Category
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'blogrow' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'blogrow' ),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'blogrow' ),
	'description'	=> esc_html__( 'To show featured posts in the slider AND the content below. Usually not recommended.', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Single - Authorbox
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'blogrow' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'blogrow' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'blogrow' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'blogrow' ),
		'categories'=> esc_html__( 'Related by categories', 'blogrow' ),
		'tags'		=> esc_html__( 'Related by tags', 'blogrow' ),
	),
) );
// Header: Search
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'blogrow' ),
	'description'	=> esc_html__( 'Header search button', 'blogrow' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'blogrow' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'blogrow' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Footer: Widget Columns
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'blogrow' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'blogrow' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'blogrow' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'blogrow' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'blogrow' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'blogrow' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'blogrow' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'blogrow' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'blogrow' ),
	'description'	=> esc_html__( 'Footer credit text', 'blogrow' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'blogrow' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'blogrow' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'blogrow' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'blogrow' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'blogrow' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'blogrow' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'blogrow' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'blogrow' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'blogrow' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'blogrow' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'blogrow' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'blogrow' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'blogrow' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'blogrow' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'blogrow' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'blogrow' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function blogrow_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'blogrow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'blogrow' ),
		'description'	=> esc_html__( '(is_home) Primary', 'blogrow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'blogrow' ),
	) );
	Kirki::add_field( 'blogrow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'blogrow' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'blogrow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'blogrow' ),
	) );
	Kirki::add_field( 'blogrow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'blogrow' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'blogrow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'blogrow' ),
	) );
	Kirki::add_field( 'blogrow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'blogrow' ),
		'description'	=> esc_html__( '(is_category) Primary', 'blogrow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'blogrow' ),
	) );
	Kirki::add_field( 'blogrow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'blogrow' ),
		'description'	=> esc_html__( '(is_search) Primary', 'blogrow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'blogrow' ),
	) );
	Kirki::add_field( 'blogrow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'blogrow' ),
		'description'	=> esc_html__( '(is_404) Primary', 'blogrow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'blogrow' ),
	) );
	Kirki::add_field( 'blogrow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'blogrow' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'blogrow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'blogrow' ),
	) );
	
 } 
add_action( 'init', 'blogrow_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'blogrow' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'blogrow' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'blogrow' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'blogrow' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'blogrow' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'blogrow' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'blogrow' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'blogrow' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'blogrow' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'blogrow' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'blogrow' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'blogrow' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'blogrow' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'blogrow' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'blogrow' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'blogrow' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'blogrow' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'blogrow' ),
	'description'	=> esc_html__( 'Select font for the theme', 'blogrow' ),
	'section'		=> 'styling',
	'default'		=> 'lato',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'blogrow' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'blogrow' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'blogrow' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'blogrow' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'blogrow' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'blogrow' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'blogrow' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'blogrow' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'blogrow' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'blogrow' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'blogrow' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'blogrow' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'blogrow' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'blogrow' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'blogrow' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'blogrow' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'blogrow' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'blogrow' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'blogrow' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'blogrow' ),
		'arial'					=> esc_html__( 'Arial', 'blogrow' ),
		'georgia'				=> esc_html__( 'Georgia', 'blogrow' ),
		'verdana'				=> esc_html__( 'Verdana', 'blogrow' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'blogrow' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'blogrow' ),
	'description'	=> esc_html__( 'Max-width of the container', 'blogrow' ),
	'section'		=> 'styling',
	'default'		=> '1160',
	'choices'     => array(
		'min'	=> '740',
		'max'	=> '1600',
		'step'	=> '1',
	),
) );
// Styling: Primary Color
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'blogrow' ),
	'section'		=> 'styling',
	'default'		=> '#ceac41',
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'blogrow' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'blogrow' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Image Border Radius
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'image-border-radius',
	'label'			=> esc_html__( 'Image Border Radius', 'blogrow' ),
	'description'	=> esc_html__( 'Give your thumbnails and layout images rounded corners', 'blogrow' ),
	'section'		=> 'styling',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '15',
		'step'	=> '1',
	),
) );