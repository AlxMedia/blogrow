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

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'Theme Options', 'blogrow' ),
    'description' => esc_attr__( '', 'blogrow' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'General', 'blogrow' ),
    'description' => esc_attr__( '', 'blogrow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'frontpage', array(
    'priority'    => 11,
    'title'       => esc_attr__( 'Frontpage', 'blogrow' ),
    'description' => esc_attr__( '', 'blogrow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_attr__( 'Blog', 'blogrow' ),
    'description' => esc_attr__( '', 'blogrow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_attr__( 'Header', 'blogrow' ),
    'description' => esc_attr__( '', 'blogrow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_attr__( 'Footer', 'blogrow' ),
    'description' => esc_attr__( '', 'blogrow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_attr__( 'Layout', 'blogrow' ),
    'description' => esc_attr__( '', 'blogrow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_attr__( 'Sidebars', 'blogrow' ),
    'description' => esc_attr__( '', 'blogrow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_attr__( 'Social Links', 'blogrow' ),
    'description' => esc_attr__( '', 'blogrow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_attr__( 'Styling', 'blogrow' ),
    'description' => esc_attr__( '', 'blogrow' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Custom CSS
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'custom',
	'label'			=> esc_attr__( 'Custom Stylesheet', 'blogrow' ),
	'description'	=> esc_attr__( 'Load custom stylesheet (custom.css)', 'blogrow' ),
	'section'		=> 'general',
	'default'		=> 'off',
) );
// General: Responsive Layout
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'responsive',
	'label'			=> esc_attr__( 'Responsive Layout', 'blogrow' ),
	'description'	=> esc_attr__( 'Mobile and tablet optimizations (responsive.css)', 'blogrow' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Mobile Sidebar
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_attr__( 'Mobile Sidebar Content', 'blogrow' ),
	'description'	=> esc_attr__( 'Sidebar content on low-resolution mobile devices (320px)', 'blogrow' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Post Comments
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'post-comments',
	'label'			=> esc_attr__( 'Post Comments', 'blogrow' ),
	'description'	=> esc_attr__( 'Comments on posts', 'blogrow' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Page Comments
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'page-comments',
	'label'			=> esc_attr__( 'Page Comments', 'blogrow' ),
	'description'	=> esc_attr__( 'Comments on pages', 'blogrow' ),
	'section'		=> 'general',
	'default'		=> 'off',
) );
// General: Recommended Plugins
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_attr__( 'Recommended Plugins', 'blogrow' ),
	'description'	=> esc_attr__( 'Enable or disable the recommended plugins notice', 'blogrow' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Frontpage: Frontpage Picture
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'image',
	'settings'		=> 'front-picture',
	'label'			=> esc_attr__( 'Frontpage Picture', 'blogrow' ),
	'description'	=> esc_attr__( 'Recommended size is square, 400x400px.', 'blogrow' ),
	'section'		=> 'frontpage',
	'default'		=> '',
) );
// Frontpage: Button Text
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'text',
	'settings'		=> 'front-button-text',
	'label'			=> esc_attr__( 'Button Text', 'blogrow' ),
	'description'	=> esc_attr__( '', 'blogrow' ),
	'section'		=> 'frontpage',
	'default'		=> '',
) );
// Frontpage: Button Link
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'text',
	'settings'		=> 'front-button-link',
	'label'			=> esc_attr__( 'Button Link', 'blogrow' ),
	'description'	=> esc_attr__( '', 'blogrow' ),
	'section'		=> 'frontpage',
	'default'		=> '',
) );
// Blog: Blog Layout
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'blog-layout',
	'label'			=> esc_attr__( 'Blog Layout', 'blogrow' ),
	'description'	=> esc_attr__( '', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> 'blog-standard',
	'choices'		=> array(
		'blog-standard'	=> esc_attr__( 'Standard', 'blogrow' ),
		'blog-grid'		=> esc_attr__( 'Grid', 'blogrow' ),
		'blog-list'		=> esc_attr__( 'List', 'blogrow' ),
	),
) );
// Blog: Heading
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_attr__( 'Heading', 'blogrow' ),
	'description'	=> esc_attr__( 'Your blog heading', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_attr__( 'Subheading', 'blogrow' ),
	'description'	=> esc_attr__( 'Your blog subheading', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_attr__( 'Excerpt Length', 'blogrow' ),
	'description'	=> esc_attr__( 'Max number of words. Set it to 0 to disable.', 'blogrow' ),
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
	'label'			=> esc_attr__( 'Featured Post Count', 'blogrow' ),
	'description'	=> esc_attr__( 'Max number of featured posts to display on the homepage. Set it to 0 to disable.', 'blogrow' ),
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
	'label'			=> esc_attr__( 'Featured Category', 'blogrow' ),
	'description'	=> esc_attr__( 'By not selecting a category, it will show your latest post(s) from all categories', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_attr__( 'Select a category', 'blogrow' ),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_attr__( 'Featured Posts', 'blogrow' ),
	'description'	=> esc_attr__( 'To show featured posts in the slider AND the content below. Usually not recommended.', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
if( function_exists( 'alx_ext_sharrre_template' ) ) { 
	// Blog: Twitter Username
	Kirki::add_field( 'blogrow_theme', array(
		'type'			=> 'text',
		'settings'		=> 'twitter-username',
		'label'			=> esc_attr__( 'Single - Share Bar - Twitter Username', 'blogrow' ),
		'description'	=> esc_attr__( 'Your @username will be added to share-tweets of your posts (optional)', 'blogrow' ),
		'section'		=> 'blog',
		'default'		=> '',
	) ); 
}
// Blog: Single - Authorbox
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_attr__( 'Single - Author Bio', 'blogrow' ),
	'description'	=> esc_attr__( 'Shows post author description, if it exists', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'post-nav',
	'label'			=> esc_attr__( 'Single - Post Navigation', 'blogrow' ),
	'description'	=> esc_attr__( 'Shows links to the next and previous article', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_attr__( 'Single - Related Posts', 'blogrow' ),
	'description'	=> esc_attr__( 'Shows randomized related articles below the post', 'blogrow' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_attr__( 'Disable', 'blogrow' ),
		'categories'=> esc_attr__( 'Related by categories', 'blogrow' ),
		'tags'		=> esc_attr__( 'Related by tags', 'blogrow' ),
	),
) );
// Header: Search
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_attr__( 'Header Search', 'blogrow' ),
	'description'	=> esc_attr__( 'Header search button', 'blogrow' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_attr__( 'Header Social Links', 'blogrow' ),
	'description'	=> esc_attr__( 'Social link icon buttons', 'blogrow' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Custom Logo
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'image',
	'settings'		=> 'custom-logo',
	'label'			=> esc_attr__( 'Custom Logo', 'blogrow' ),
	'description'	=> esc_attr__( 'Upload your custom logo image, 120px height recommended', 'blogrow' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Site Description
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'site-description',
	'label'			=> esc_attr__( 'Site Description', 'blogrow' ),
	'description'	=> esc_attr__( 'The description that appears next to your logo', 'blogrow' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Footer: Widget Columns
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_attr__( 'Footer Widget Columns', 'blogrow' ),
	'description'	=> esc_attr__( 'Select columns to enable footer widgets. Recommended number: 3', 'blogrow' ),
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
	'label'			=> esc_attr__( 'Footer Social Links', 'blogrow' ),
	'description'	=> esc_attr__( 'Social link icon buttons', 'blogrow' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_attr__( 'Footer Logo', 'blogrow' ),
	'description'	=> esc_attr__( 'Upload your custom logo image', 'blogrow' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_attr__( 'Footer Copyright', 'blogrow' ),
	'description'	=> esc_attr__( 'Replace the footer copyright text', 'blogrow' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_attr__( 'Footer Credit', 'blogrow' ),
	'description'	=> esc_attr__( 'Footer credit text', 'blogrow' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_attr__( 'Global Layout', 'blogrow' ),
	'description'	=> esc_attr__( 'Other layouts will override this option if they are set', 'blogrow' ),
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
	'label'			=> esc_attr__( 'Home', 'blogrow' ),
	'description'	=> esc_attr__( '(is_home) Posts homepage layout', 'blogrow' ),
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
	'label'			=> esc_attr__( 'Single', 'blogrow' ),
	'description'	=> esc_attr__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'blogrow' ),
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
	'label'			=> esc_attr__( 'Archive', 'blogrow' ),
	'description'	=> esc_attr__( '(is_archive) Category, date, tag and author archive layout', 'blogrow' ),
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
	'label'			=> esc_attr__( 'Archive - Category', 'blogrow' ),
	'description'	=> esc_attr__( '(is_category) Category archive layout', 'blogrow' ),
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
	'label'			=> esc_attr__( 'Search', 'blogrow' ),
	'description'	=> esc_attr__( '(is_search) Search page layout', 'blogrow' ),
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
	'label'			=> esc_attr__( 'Error 404', 'blogrow' ),
	'description'	=> esc_attr__( '(is_404) Error 404 page layout', 'blogrow' ),
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
	'label'			=> esc_attr__( 'Default Page', 'blogrow' ),
	'description'	=> esc_attr__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'blogrow' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Sidebars: Create Sidebars
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_attr__( 'Create Sidebars', 'blogrow' ),
	'description'	=> esc_attr__( 'You must save and refresh the page to see your new sidebars.', 'blogrow' ),
	'tooltip'		=> esc_attr__( 'Make sure that you save and refresh the page if you can not see the sidebars you have created.', 'blogrow' ),
	'section'		=> 'sidebars',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_attr__('sidebar', 'blogrow' ),
	),
	'settings'		=> 'sidebar-areas',
	'default'		=> '',
	'fields'		=> array(
		'title'	=> array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Sidebar Title', 'blogrow' ),
			'description' => esc_attr__( 'The widget box title', 'blogrow' ),
			'default'     => '',
		),
		'id'	=> array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Sidebar ID', 'blogrow' ),
			'description' => esc_attr__( 'This ID must be unique', 'blogrow' ),
			'default'     => 'sidebar-',
		),
	)
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
		'label'			=> esc_attr__( 'Home', 'blogrow' ),
		'description'	=> esc_attr__( '(is_home) Primary', 'blogrow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'blogrow' ),
	) );
	Kirki::add_field( 'blogrow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_attr__( 'Single', 'blogrow' ),
		'description'	=> esc_attr__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'blogrow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'blogrow' ),
	) );
	Kirki::add_field( 'blogrow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_attr__( 'Archive', 'blogrow' ),
		'description'	=> esc_attr__( '(is_archive) Primary', 'blogrow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'blogrow' ),
	) );
	Kirki::add_field( 'blogrow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_attr__( 'Archive - Category', 'blogrow' ),
		'description'	=> esc_attr__( '(is_category) Primary', 'blogrow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'blogrow' ),
	) );
	Kirki::add_field( 'blogrow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_attr__( 'Search', 'blogrow' ),
		'description'	=> esc_attr__( '(is_search) Primary', 'blogrow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'blogrow' ),
	) );
	Kirki::add_field( 'blogrow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_attr__( 'Error 404', 'blogrow' ),
		'description'	=> esc_attr__( '(is_404) Primary', 'blogrow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'blogrow' ),
	) );
	Kirki::add_field( 'blogrow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_attr__( 'Default Page', 'blogrow' ),
		'description'	=> esc_attr__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'blogrow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'blogrow' ),
	) );
	
 } 
add_action( 'init', 'blogrow_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_attr__( 'Create Social Links', 'blogrow' ),
	'description'	=> esc_attr__( 'Create and organize your social links', 'blogrow' ),
	'section'		=> 'social',
	'tooltip'		=> esc_attr__( 'Font Awesome names:', 'blogrow' ) . ' <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank"><strong>' . esc_attr__( 'View All', 'blogrow' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_attr__('social link', 'blogrow' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_attr__( 'Title', 'blogrow' ),
			'description'	=> esc_attr__( 'Ex: Facebook', 'blogrow' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_attr__( 'Icon Name', 'blogrow' ),
			'description'	=> esc_attr__( 'Font Awesome icons. Ex: fa-facebook ', 'blogrow' ) . ' <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank"><strong>' . esc_attr__( 'View All', 'blogrow' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_attr__( 'Link', 'blogrow' ),
			'description'	=> esc_attr__( 'Enter the full url for your icon button', 'blogrow' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_attr__( 'Icon Color', 'blogrow' ),
			'description'	=> esc_attr__( 'Set a unique color for your icon (optional)', 'blogrow' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_attr__( 'Open in new window', 'blogrow' ),
			'description'	=> esc_attr__( '', 'blogrow' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_attr__( 'Dynamic Styles', 'blogrow' ),
	'description'	=> esc_attr__( 'Turn on to use the styling options below', 'blogrow' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_attr__( 'Font', 'blogrow' ),
	'description'	=> esc_attr__( 'Select font for the theme', 'blogrow' ),
	'section'		=> 'styling',
	'default'		=> 'lato',
	'choices'     => array(
		'titillium-web'			=> esc_attr__( 'Titillium Web, Latin (Self-hosted)', 'blogrow' ),
		'titillium-web-ext'		=> esc_attr__( 'Titillium Web, Latin-Ext', 'blogrow' ),
		'droid-serif'			=> esc_attr__( 'Droid Serif, Latin', 'blogrow' ),
		'source-sans-pro'		=> esc_attr__( 'Source Sans Pro, Latin-Ext', 'blogrow' ),
		'lato'					=> esc_attr__( 'Lato, Latin', 'blogrow' ),
		'raleway'				=> esc_attr__( 'Raleway, Latin', 'blogrow' ),
		'ubuntu'				=> esc_attr__( 'Ubuntu, Latin-Ext', 'blogrow' ),
		'ubuntu-cyr'			=> esc_attr__( 'Ubuntu, Latin / Cyrillic-Ext', 'blogrow' ),
		'roboto'				=> esc_attr__( 'Roboto, Latin-Ext', 'blogrow' ),
		'roboto-cyr'			=> esc_attr__( 'Roboto, Latin / Cyrillic-Ext', 'blogrow' ),
		'roboto-condensed'		=> esc_attr__( 'Roboto Condensed, Latin-Ext', 'blogrow' ),
		'roboto-condensed-cyr'	=> esc_attr__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'blogrow' ),
		'roboto-slab'			=> esc_attr__( 'Roboto Slab, Latin-Ext', 'blogrow' ),
		'roboto-slab-cyr'		=> esc_attr__( 'Roboto Slab, Latin / Cyrillic-Ext', 'blogrow' ),
		'playfair-display'		=> esc_attr__( 'Playfair Display, Latin-Ext', 'blogrow' ),
		'playfair-display-cyr'	=> esc_attr__( 'Playfair Display, Latin / Cyrillic', 'blogrow' ),
		'open-sans'				=> esc_attr__( 'Open Sans, Latin-Ext', 'blogrow' ),
		'open-sans-cyr'			=> esc_attr__( 'Open Sans, Latin / Cyrillic-Ext', 'blogrow' ),
		'pt-serif'				=> esc_attr__( 'PT Serif, Latin-Ext', 'blogrow' ),
		'pt-serif-cyr'			=> esc_attr__( 'PT Serif, Latin / Cyrillic-Ext', 'blogrow' ),
		'arial'					=> esc_attr__( 'Arial', 'blogrow' ),
		'georgia'				=> esc_attr__( 'Georgia', 'blogrow' ),
		'verdana'				=> esc_attr__( 'Verdana', 'blogrow' ),
		'tahoma'				=> esc_attr__( 'Tahoma', 'blogrow' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_attr__( 'Website Max-width', 'blogrow' ),
	'description'	=> esc_attr__( 'Max-width of the container', 'blogrow' ),
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
	'label'			=> esc_attr__( 'Primary Color', 'blogrow' ),
	'description'	=> esc_attr__( '', 'blogrow' ),
	'section'		=> 'styling',
	'default'		=> '#ceac41',
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_attr__( 'Header Logo Image Max-height', 'blogrow' ),
	'description'	=> esc_attr__( 'Your logo image should have the double height of this to be high resolution', 'blogrow' ),
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
	'label'			=> esc_attr__( 'Image Border Radius', 'blogrow' ),
	'description'	=> esc_attr__( 'Give your thumbnails and layout images rounded corners', 'blogrow' ),
	'section'		=> 'styling',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '15',
		'step'	=> '1',
	),
) );
// Styling: Body Background
Kirki::add_field( 'blogrow_theme', array(
	'type'			=> 'background',
	'settings'		=> 'body-background',
	'label'			=> esc_attr__( 'Body Background', 'blogrow' ),
	'description'	=> esc_attr__( 'Set background color and/or upload your own background image', 'blogrow' ),
	'section'		=> 'styling',
	'default'     => array(
		'background-color'      => '',
		'background-image'      => '',
		'background-repeat'     => 'no-repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'fixed',
	),
) );