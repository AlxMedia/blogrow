<?php

/*  Initialize the options before anything else. 
/* ------------------------------------ */
add_action( 'admin_init', 'custom_theme_options', 1 );


/*  Build the custom settings & update OptionTree.
/* ------------------------------------ */
function custom_theme_options() {
	
	// Get a copy of the saved settings array.
	$saved_settings = get_option( 'option_tree_settings', array() );

	// Custom settings array that will eventually be passed to the OptionTree Settings API Class.
	$custom_settings = array(

/*  Help pages
/* ------------------------------------ */	
	'contextual_help' => array(
      'content'       => array( 
        array(
          'id'        => 'general_help',
          'title'     => 'Documentation',
          'content'   => '
			<h1>Blogrow</h1>
			<p>Thanks for using this theme! Enjoy.</p>
			<ul>
				<li>Read the theme documentation <a target="_blank" href="'.get_template_directory_uri().'/functions/documentation/documentation.html">here</a></li>
			</ul>
		'
        )
      )
    ),
	
/*  Admin panel sections
/* ------------------------------------ */	
	'sections'        => array(
		array(
			'id'		=> 'general',
			'title'		=> 'General'
		),
		array(
			'id'		=> 'frontpage',
			'title'		=> 'Frontpage'
		),
		array(
			'id'		=> 'blog',
			'title'		=> 'Blog'
		),
		array(
			'id'		=> 'header',
			'title'		=> 'Header'
		),
		array(
			'id'		=> 'footer',
			'title'		=> 'Footer'
		),
		array(
			'id'		=> 'layout',
			'title'		=> 'Layout'
		),
		array(
			'id'		=> 'sidebars',
			'title'		=> 'Sidebars'
		),
		array(
			'id'		=> 'social-links',
			'title'		=> 'Social Links'
		),
		array(
			'id'		=> 'styling',
			'title'		=> 'Styling'
		),
	),
	
/*  Theme options
/* ------------------------------------ */
	'settings'        => array(
		
		// General: Custom CSS
		array(
			'id'		=> 'custom',
			'label'		=> 'Custom Stylesheet',
			'desc'		=> 'Load custom stylesheet [ <strong>custom.css</strong> ]<br /><i>Note: You must backup this file before a theme update. Consider using a <a target="_blank" href="http://codex.wordpress.org/Child_Themes">child theme</a> instead. More info about child themes can be found in the documentation.</i>',
			'std'		=> 'off',
			'type'		=> 'on-off',
			'section'	=> 'general'
		),
		// General: Responsive Layout
		array(
			'id'		=> 'responsive',
			'label'		=> 'Responsive Layout',
			'desc'		=> 'Mobile and tablet optimizations [ <strong>responsive.css</strong> ]',
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'	=> 'general'
		),
		// General: Mobile Sidebar
		array(
			'id'		=> 'mobile-sidebar-hide',
			'label'		=> 'Mobile Sidebar Content',
			'desc'		=> 'Sidebar content on low-resolution mobile devices (320px)',
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'	=> 'general'
		),
		// General: RSS Feed
		array(
			'id'		=> 'rss-feed',
			'label'		=> 'FeedBurner URL',
			'desc'		=> 'Enter your full FeedBurner URL (or any other preferred feed URL) if you wish to use FeedBurner over the standard WordPress feed e.g. http://feeds.feedburner.com/yoururlhere ',
			'type'		=> 'text',
			'section'	=> 'general'
		),
		// General: Comments
		array(
			'id'		=> 'page-comments',
			'label'		=> 'Page Comments',
			'desc'		=> 'Comments on pages',
			'std'		=> 'off',
			'type'		=> 'on-off',
			'section'	=> 'general'
		),
		// General: Recommended Plugins
		array(
			'id'		=> 'recommended-plugins',
			'label'		=> 'Recommended Plugins',
			'desc'		=> 'Enable or disable the recommended plugins notice',
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'	=> 'general'
		),
		// Frontpage: Picture
		array(
			'id'		=> 'front-picture',
			'label'		=> 'Frontpage Picture',
			'desc'		=> 'Recommended size is square, 400x400px.',
			'type'		=> 'upload',
			'section'	=> 'frontpage'
		),
		// Frontpage: Button Text
		array(
			'id'		=> 'front-button-text',
			'label'		=> 'Button Text',
			'desc'		=> '',
			'type'		=> 'text',
			'section'	=> 'frontpage'
		),
		// Frontpage: Button Link
		array(
			'id'		=> 'front-button-link',
			'label'		=> 'Button Link',
			'desc'		=> '',
			'type'		=> 'text',
			'section'	=> 'frontpage'
		),
		// Blog: Blog Layout
		array(
			'id'		=> 'blog-layout',
			'label'		=> 'Blog Layout',
			'desc'		=> '',
			'std'		=> 'blog-standard',
			'type'		=> 'radio',
			'section'	=> 'blog',
			'choices'	=> array(
				array( 
					'value' => 'blog-standard',
					'label' => 'Standard'
				),
				array( 
					'value' => 'blog-grid',
					'label' => 'Grid'
				),
				array( 
					'value' => 'blog-list',
					'label' => 'List'
				)
			)
		),
		// Blog: Heading
		array(
			'id'		=> 'blog-heading',
			'label'		=> 'Heading',
			'desc'		=> 'Your blog heading',
			'type'		=> 'text',
			'section'	=> 'blog'
		),
		// Blog: Subheading
		array(
			'id'		=> 'blog-subheading',
			'label'		=> 'Subheading',
			'desc'		=> 'Your blog subheading',
			'type'		=> 'text',
			'section'	=> 'blog'
		),
		// Blog: Excerpt Length
		array(
			'id'			=> 'excerpt-length',
			'label'			=> 'Excerpt Length',
			'desc'			=> 'Max number of words',
			'std'			=> '24',
			'type'			=> 'numeric-slider',
			'section'		=> 'blog',
			'min_max_step'	=> '0,100,1'
		),
		// Blog: Featured Posts
		array(
			'id'		=> 'featured-posts-include',
			'label'		=> 'Featured Posts',
			'desc'		=> 'To show featured posts in the slider AND the content below<br /><i>Usually not recommended</i>',
			'type'		=> 'checkbox',
			'section'	=> 'blog',
			'choices'	=> array(
				array( 
					'value' => '1',
					'label' => 'Include featured posts in content area'
				)
			)
		),
		// Blog: Featured Category
		array(
			'id'		=> 'featured-category',
			'label'		=> 'Featured Category',
			'desc'		=> 'By not selecting a category, it will show your latest post(s) from all categories',
			'type'		=> 'category-select',
			'section'	=> 'blog'
		),
		// Blog: Featured Category Count
		array(
			'id'			=> 'featured-posts-count',
			'label'			=> 'Featured Post Count',
			'desc'			=> 'Max number of featured posts to display. <br /><i>Set it to 0 to disable</i>',
			'std'			=> '6',
			'type'			=> 'numeric-slider',
			'section'		=> 'blog',
			'min_max_step'	=> '0,12,1'
		),
		// Blog: Single - Sharrre
		array(
			'id'		=> 'sharrre',
			'label'		=> 'Single &mdash; Share Bar',
			'desc'		=> 'Social sharing buttons for each article',
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'	=> 'blog'
		),
		// Blog: Twitter Username
		array(
			'id'		=> 'twitter-username',
			'label'		=> 'Twitter Username',
			'desc'		=> 'Your @username will be added to share-tweets of your posts (optional)',
			'type'		=> 'text',
			'section'	=> 'blog'
		),
		// Blog: Single - Authorbox
		array(
			'id'		=> 'author-bio',
			'label'		=> 'Single &mdash; Author Bio',
			'desc'		=> 'Shows post author description, if it exists',
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'	=> 'blog'
		),
		// Blog: Single - Post Navigation
		array(
			'id'		=> 'post-nav',
			'label'		=> 'Single &mdash; Post Navigation',
			'desc'		=> 'Shows links to the next and previous article',
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'	=> 'blog'
		),
		// Blog: Single - Related Posts
		array(
			'id'		=> 'related-posts',
			'label'		=> 'Single &mdash; Related Posts',
			'desc'		=> 'Shows randomized related articles below the post',
			'std'		=> 'categories',
			'type'		=> 'radio',
			'section'	=> 'blog',
			'choices'	=> array(
				array( 
					'value' => '1',
					'label' => 'Disable'
				),
				array( 
					'value' => 'categories',
					'label' => 'Related by categories'
				),
				array( 
					'value' => 'tags',
					'label' => 'Related by tags'
				)
			)
		),
		// Header: Custom Logo
		array(
			'id'		=> 'custom-logo',
			'label'		=> 'Custom Logo',
			'desc'		=> 'Upload your custom logo image. Set logo max-height in styling options.',
			'type'		=> 'upload',
			'section'	=> 'header'
		),
		// Header: Site Description
		array(
			'id'		=> 'site-description',
			'label'		=> 'Site Description',
			'desc'		=> 'The description that appears next to your logo',
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'	=> 'header'
		),
		// Footer: Widget Columns
		array(
			'id'		=> 'footer-widgets',
			'label'		=> 'Footer Widget Columns',
			'desc'		=> 'Select columns to enable footer widgets<br /><i>Recommended number: 3</i>',
			'std'		=> '0',
			'type'		=> 'radio-image',
			'section'	=> 'footer',
			'class'		=> '',
			'choices'	=> array(
				array(
					'value'		=> '0',
					'label'		=> 'Disable',
					'src'		=> get_template_directory_uri() . '/functions/images/layout-off.png'
				),
				array(
					'value'		=> '1',
					'label'		=> '1 Column',
					'src'		=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png'
				),
				array(
					'value'		=> '2',
					'label'		=> '2 Columns',
					'src'		=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png'
				),
				array(
					'value'		=> '3',
					'label'		=> '3 Columns',
					'src'		=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png'
				),
				array(
					'value'		=> '4',
					'label'		=> '4 Columns',
					'src'		=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png'
				)
			)
		),
		// Footer: Custom Logo
		array(
			'id'		=> 'footer-logo',
			'label'		=> 'Footer Logo',
			'desc'		=> 'Upload your custom logo image',
			'type'		=> 'upload',
			'section'	=> 'footer'
		),
		// Footer: Copyright
		array(
			'id'		=> 'copyright',
			'label'		=> 'Footer Copyright',
			'desc'		=> 'Replace the footer copyright text',
			'type'		=> 'text',
			'section'	=> 'footer'
		),
		// Footer: Credit
		array(
			'id'		=> 'credit',
			'label'		=> 'Footer Credit',
			'desc'		=> 'Footer credit text',
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'	=> 'footer'
		),
		// Layout : Global
		array(
			'id'		=> 'layout-global',
			'label'		=> 'Global Layout',
			'desc'		=> 'Other layouts will override this option if they are set',
			'std'		=> 'col-2cl',
			'type'		=> 'radio-image',
			'section'	=> 'layout',
			'choices'	=> array(
				array(
					'value'		=> 'col-1c',
					'label'		=> '1 Column',
					'src'		=> get_template_directory_uri() . '/functions/images/col-1c.png'
				),
				array(
					'value'		=> 'col-2cl',
					'label'		=> '2 Column Left',
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cl.png'
				),
				array(
					'value'		=> 'col-2cr',
					'label'		=> '2 Column Right',
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cr.png'
				)
			)
		),
		// Layout : Home
		array(
			'id'		=> 'layout-home',
			'label'		=> 'Home',
			'desc'		=> '[ <strong>is_home</strong> ] Posts homepage layout',
			'std'		=> 'inherit',
			'type'		=> 'radio-image',
			'section'	=> 'layout',
			'choices'	=> array(
				array(
					'value'		=> 'inherit',
					'label'		=> 'Inherit Global Layout',
					'src'		=> get_template_directory_uri() . '/functions/images/layout-off.png'
				),
				array(
					'value'		=> 'col-1c',
					'label'		=> '1 Column',
					'src'		=> get_template_directory_uri() . '/functions/images/col-1c.png'
				),
				array(
					'value'		=> 'col-2cl',
					'label'		=> '2 Column Left',
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cl.png'
				),
				array(
					'value'		=> 'col-2cr',
					'label'		=> '2 Column Right',
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cr.png'
				)
			)
		),
		// Layout : Single
		array(
			'id'		=> 'layout-single',
			'label'		=> 'Single',
			'desc'		=> '[ <strong>is_single</strong> ] Single post layout - If a post has a set layout, it will override this.',
			'std'		=> 'inherit',
			'type'		=> 'radio-image',
			'section'	=> 'layout',
			'choices'	=> array(
				array(
					'value'		=> 'inherit',
					'label'		=> 'Inherit Global Layout',
					'src'		=> get_template_directory_uri() . '/functions/images/layout-off.png'
				),
				array(
					'value'		=> 'col-1c',
					'label'		=> '1 Column',
					'src'		=> get_template_directory_uri() . '/functions/images/col-1c.png'
				),
				array(
					'value'		=> 'col-2cl',
					'label'		=> '2 Column Left',
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cl.png'
				),
				array(
					'value'		=> 'col-2cr',
					'label'		=> '2 Column Right',
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cr.png'
				)
			)
		),
		// Layout : Archive
		array(
			'id'		=> 'layout-archive',
			'label'		=> 'Archive',
			'desc'		=> '[ <strong>is_archive</strong> ] Category, date, tag and author archive layout',
			'std'		=> 'inherit',
			'type'		=> 'radio-image',
			'section'	=> 'layout',
			'choices'	=> array(
				array(
					'value'		=> 'inherit',
					'label'		=> 'Inherit Global Layout',
					'src'		=> get_template_directory_uri() . '/functions/images/layout-off.png'
				),
				array(
					'value'		=> 'col-1c',
					'label'		=> '1 Column',
					'src'		=> get_template_directory_uri() . '/functions/images/col-1c.png'
				),
				array(
					'value'		=> 'col-2cl',
					'label'		=> '2 Column Left',
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cl.png'
				),
				array(
					'value'		=> 'col-2cr',
					'label'		=> '2 Column Right',
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cr.png'
				)
			)
		),
		// Layout : Archive - Category
		array(
			'id'		=> 'layout-archive-category',
			'label'		=> 'Archive &mdash; Category',
			'desc'		=> '[ <strong>is_category</strong> ] Category archive layout',
			'std'		=> 'inherit',
			'type'		=> 'radio-image',
			'section'	=> 'layout',
			'choices'	=> array(
				array(
					'value'		=> 'inherit',
					'label'		=> 'Inherit Global Layout',
					'src'		=> get_template_directory_uri() . '/functions/images/layout-off.png'
				),
				array(
					'value'		=> 'col-1c',
					'label'		=> '1 Column',
					'src'		=> get_template_directory_uri() . '/functions/images/col-1c.png'
				),
				array(
					'value'		=> 'col-2cl',
					'label'		=> '2 Column Left',
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cl.png'
				),
				array(
					'value'		=> 'col-2cr',
					'label'		=> '2 Column Right',
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cr.png'
				)
			)
		),
		// Layout : Search
		array(
			'id'		=> 'layout-search',
			'label'		=> 'Search',
			'desc'		=> '[ <strong>is_search</strong> ] Search page layout',
			'std'		=> 'inherit',
			'type'		=> 'radio-image',
			'section'	=> 'layout',
			'choices'	=> array(
				array(
					'value'		=> 'inherit',
					'label'		=> 'Inherit Global Layout',
					'src'		=> get_template_directory_uri() . '/functions/images/layout-off.png'
				),
				array(
					'value'		=> 'col-1c',
					'label'		=> '1 Column',
					'src'		=> get_template_directory_uri() . '/functions/images/col-1c.png'
				),
				array(
					'value'		=> 'col-2cl',
					'label'		=> '2 Column Left',
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cl.png'
				),
				array(
					'value'		=> 'col-2cr',
					'label'		=> '2 Column Right',
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cr.png'
				)
			)
		),
		// Layout : Error 404
		array(
			'id'		=> 'layout-404',
			'label'		=> 'Error 404',
			'desc'		=> '[ <strong>is_404</strong> ] Error 404 page layout',
			'std'		=> 'inherit',
			'type'		=> 'radio-image',
			'section'	=> 'layout',
			'choices'	=> array(
				array(
					'value'		=> 'inherit',
					'label'		=> 'Inherit Global Layout',
					'src'		=> get_template_directory_uri() . '/functions/images/layout-off.png'
				),
				array(
					'value'		=> 'col-1c',
					'label'		=> '1 Column',
					'src'		=> get_template_directory_uri() . '/functions/images/col-1c.png'
				),
				array(
					'value'		=> 'col-2cl',
					'label'		=> '2 Column Left',
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cl.png'
				),
				array(
					'value'		=> 'col-2cr',
					'label'		=> '2 Column Right',
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cr.png'
				)
			)
		),
		// Layout : Default Page
		array(
			'id'		=> 'layout-page',
			'label'		=> 'Default Page',
			'desc'		=> '[ <strong>is_page</strong> ] Default page layout - If a page has a set layout, it will override this.',
			'std'		=> 'inherit',
			'type'		=> 'radio-image',
			'section'	=> 'layout',
			'choices'	=> array(
				array(
					'value'		=> 'inherit',
					'label'		=> 'Inherit Global Layout',
					'src'		=> get_template_directory_uri() . '/functions/images/layout-off.png'
				),
				array(
					'value'		=> 'col-1c',
					'label'		=> '1 Column',
					'src'		=> get_template_directory_uri() . '/functions/images/col-1c.png'
				),
				array(
					'value'		=> 'col-2cl',
					'label'		=> '2 Column Left',
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cl.png'
				),
				array(
					'value'		=> 'col-2cr',
					'label'		=> '2 Column Right',
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cr.png'
				)
			)
		),
		// Sidebars: Create Areas
		array(
			'id'		=> 'sidebar-areas',
			'label'		=> 'Create Sidebars',
			'desc'		=> 'You must save changes for the new areas to appear below. <br /><i>Warning: Make sure each area has a unique ID.</i>',
			'type'		=> 'list-item',
			'section'	=> 'sidebars',
			'choices'	=> array(),
			'settings'	=> array(
				array(
					'id'		=> 'id',
					'label'		=> 'Sidebar ID',
					'desc'		=> 'This ID must be unique, for example "sidebar-about"',
					'std'		=> 'sidebar-',
					'type'		=> 'text',
					'choices'	=> array()
				)
			)
		),
		// Sidebar 1 & 2
		array(
			'id'		=> 's1-home',
			'label'		=> 'Home',
			'desc'		=> '[ <strong>is_home</strong> ]',
			'type'		=> 'sidebar-select',
			'section'	=> 'sidebars'
		),
		array(
			'id'		=> 's1-single',
			'label'		=> 'Single',
			'desc'		=> '[ <strong>is_single</strong> ] If a single post has a unique sidebar, it will override this.',
			'type'		=> 'sidebar-select',
			'section'	=> 'sidebars'
		),
		array(
			'id'		=> 's1-archive',
			'label'		=> 'Archive',
			'desc'		=> '[ <strong>is_archive</strong> ]',
			'type'		=> 'sidebar-select',
			'section'	=> 'sidebars'
		),
		array(
			'id'		=> 's1-archive-category',
			'label'		=> 'Archive &mdash; Category',
			'desc'		=> '[ <strong>is_category</strong> ]',
			'type'		=> 'sidebar-select',
			'section'	=> 'sidebars'
		),
		array(
			'id'		=> 's1-search',
			'label'		=> 'Search',
			'desc'		=> '[ <strong>is_search</strong> ]',
			'type'		=> 'sidebar-select',
			'section'	=> 'sidebars'
		),
		array(
			'id'		=> 's1-404',
			'label'		=> 'Error 404',
			'desc'		=> '[ <strong>is_404</strong> ]',
			'type'		=> 'sidebar-select',
			'section'	=> 'sidebars'
		),
		array(
			'id'		=> 's1-page',
			'label'		=> 'Default Page',
			'desc'		=> '[ <strong>is_page</strong> ] If a page has a unique sidebar, it will override this.',
			'type'		=> 'sidebar-select',
			'section'	=> 'sidebars'
		),
		// Social Links : List
		array(
			'id'		=> 'social-links',
			'label'		=> 'Social Links',
			'desc'		=> 'Create and organize your social links',
			'type'		=> 'list-item',
			'section'	=> 'social-links',
			'choices'	=> array(),
			'settings'	=> array(
				array(
					'id'		=> 'social-icon',
					'label'		=> 'Icon Name',
					'desc'		=> 'Font Awesome icon names [<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"><strong>View all</strong>]</a>  ',
					'std'		=> 'fa-',
					'type'		=> 'text',
					'choices'	=> array()
				),
				array(
					'id'		=> 'social-link',
					'label'		=> 'Link',
					'desc'		=> 'Enter the full url for your icon button',
					'std'		=> 'http://',
					'type'		=> 'text',
					'choices'	=> array()
				),
				array(
					'id'		=> 'social-color',
					'label'		=> 'Icon Color',
					'desc'		=> 'Set a unique color for your icon (optional)',
					'std'		=> '',
					'type'		=> 'colorpicker',
					'section'	=> 'styling'
				),
				array(
					'id'		=> 'social-target',
					'label'		=> 'Link Options',
					'desc'		=> '',
					'std'		=> '',
					'type'		=> 'checkbox',
					'choices'	=> array(
						array( 
							'value' => '_blank',
							'label' => 'Open in new window'
						)
					)
				)
			)
		),
		// Styling: Enable
		array(
			'id'		=> 'dynamic-styles',
			'label'		=> 'Dynamic Styles',
			'desc'		=> 'Turn on to use the styling options below',
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'	=> 'styling'
		),
		// Styling: Font
		array(
			'id'		=> 'font',
			'label'		=> 'Font',
			'desc'		=> 'Select font for the theme',
			'type'		=> 'select',
			'std'		=> 'lato',
			'section'	=> 'styling',
			'choices'	=> array(
				array( 
					'value' => 'titillium-web',
					'label' => 'Titillium Web, Latin (Self-hosted)'
				),
				array( 
					'value' => 'titillium-web-ext',
					'label' => 'Titillium Web, Latin-Ext'
				),
				array( 
					'value' => 'droid-serif',
					'label' => 'Droid Serif, Latin'
				),
				array( 
					'value' => 'source-sans-pro',
					'label' => 'Source Sans Pro, Latin-Ext'
				),
				array( 
					'value' => 'lato',
					'label' => 'Lato, Latin'
				),
				array( 
					'value' => 'raleway',
					'label' => 'Raleway, Latin'
				),
				array( 
					'value' => 'ubuntu',
					'label' => 'Ubuntu, Latin-Ext'
				),
				array( 
					'value' => 'ubuntu-cyr',
					'label' => 'Ubuntu, Latin / Cyrillic-Ext'
				),
				array( 
					'value' => 'roboto',
					'label' => 'Roboto, Latin-Ext'
				),
				array( 
					'value' => 'roboto-cyr',
					'label' => 'Roboto, Latin / Cyrillic-Ext'
				),
				array( 
					'value' => 'roboto-condensed',
					'label' => 'Roboto Condensed, Latin-Ext'
				),
				array( 
					'value' => 'roboto-condensed-cyr',
					'label' => 'Roboto Condensed, Latin / Cyrillic-Ext'
				),
				array( 
					'value' => 'roboto-slab',
					'label' => 'Roboto Slab, Latin-Ext'
				),
				array( 
					'value' => 'roboto-slab-cyr',
					'label' => 'Roboto Slab, Latin / Cyrillic-Ext'
				),
				array( 
					'value' => 'playfair-display',
					'label' => 'Playfair Display, Latin-Ext'
				),
				array( 
					'value' => 'playfair-display-cyr',
					'label' => 'Playfair Display, Latin / Cyrillic'
				),
				array( 
					'value' => 'open-sans',
					'label' => 'Open Sans, Latin-Ext'
				),
				array( 
					'value' => 'open-sans-cyr',
					'label' => 'Open Sans, Latin / Cyrillic-Ext'
				),
				array( 
					'value' => 'pt-serif',
					'label' => 'PT Serif, Latin-Ext'
				),
				array( 
					'value' => 'pt-serif-cyr',
					'label' => 'PT Serif, Latin / Cyrillic-Ext'
				),
				array( 
					'value' => 'arial',
					'label' => 'Arial'
				),
				array( 
					'value' => 'georgia',
					'label' => 'Georgia'
				),
				array( 
					'value' => 'verdana',
					'label' => 'Verdana'
				),
				array( 
					'value' => 'tahoma',
					'label' => 'Tahoma'
				)
			)
		),
		// Styling: Container Width
		array(
			'id'			=> 'container-width',
			'label'			=> 'Website Max-width',
			'desc'			=> 'Max-width of the container. <br /><i>Note: For 740px content (default) use <strong>1160px</strong> with sidebar active. If you use no sidebars anywhere, use <strong>820px</strong> (or more).</i>',
			'std'			=> '1160',
			'type'			=> 'numeric-slider',
			'section'		=> 'styling',
			'min_max_step'	=> '740,1600,1'
		),
		// Styling: Primary Color
		array(
			'id'		=> 'color-1',
			'label'		=> 'Accent Color',
			'std'		=> '#ceac41',
			'type'		=> 'colorpicker',
			'section'	=> 'styling'
		),
		// Styling: Header Logo Max-height
		array(
			'id'			=> 'logo-max-height',
			'label'			=> 'Header Logo Image Max-height',
			'desc'			=> 'Your logo image should have the double height of this to be high resolution',
			'std'			=> '60',
			'type'			=> 'numeric-slider',
			'section'		=> 'styling',
			'min_max_step'	=> '40,200,1'
		),
		// Styling: Image Border Radius
		array(
			'id'			=> 'image-border-radius',
			'label'			=> 'Image Border Radius',
			'desc'			=> 'Give your thumbnails and layout images rounded corners',
			'std'			=> '0',
			'type'			=> 'numeric-slider',
			'section'		=> 'styling',
			'min_max_step'	=> '0,15,1'
		),
		// Styling: Body Background
		array(
			'id'		=> 'body-background',
			'label'		=> 'Body Background',
			'desc'		=> 'Set background color and/or upload your own background image',
			'type'		=> 'background',
			'section'	=> 'styling'
		)
	)
);

/*  Settings are not the same? Update the DB
/* ------------------------------------ */
	if ( $saved_settings !== $custom_settings ) {
		update_option( 'option_tree_settings', $custom_settings ); 
	} 
}
