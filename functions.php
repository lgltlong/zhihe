<?php
/**
 * sela functions and definitions
 *
 * @package Sela
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 620; /* pixels */
}

/**
 * Adjusts content_width value for few pages and attachment templates.
 */
function sela_content_width() {
	global $content_width;

	if ( is_page_template( 'page-templates/full-width-page.php' )
	  || is_page_template( 'page-templates/grid-page.php' )
	  || is_attachment()
	  || ! is_active_sidebar( 'sidebar-1' ) ) {
		$content_width = 778;
	}
}
add_action( 'template_redirect', 'sela_content_width' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function sela_setup() {

	load_theme_textdomain( 'sela', get_template_directory() . '/languages' );

	add_editor_style( array( 'editor-style.css', sela_fonts_url() ) );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );

	// hide default title style
	// add_theme_support( 'title-tag' );

	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'link', 'quote','video' ) );

	register_nav_menus( array(
		'primary'	=> __( 'Primary Menu', 'sela' ),
		'social'	=> __( 'Social Menu', 'sela' ),
	) );

	add_theme_support( 'post-thumbnails' );

	// Post thumbnails
	set_post_thumbnail_size( 820, 312, true );
	// Hero Image on the front page template
	add_image_size( 'sela-hero-thumbnail', 1180, 610, true );
	// Full width and grid page template
	add_image_size( 'sela-page-thumbnail', 1180, 435, true );
	// Grid child page thumbnail
	add_image_size( 'sela-grid-thumbnail', 360, 242, true );
	// Testimonial thumbnail
	add_image_size( 'sela-testimonial-thumbnail', 90, 90, true );

	add_post_type_support( 'page', 'excerpt' );

	add_theme_support( 'custom-background', apply_filters( 'sela_custom_background_args', array(
		'default-color' => 'fafafa',
	) ) );
}
add_action( 'after_setup_theme', 'sela_setup' );

/**
 * Returns the Google font stylesheet URL, if available.
 */
function sela_fonts_url() {
	$fonts_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Source Sans Pro, translate this to 'off'. Do not translate into your own language.
	 */
	$source_sans_pro  = _x( 'on', 'Source Sans Pro font: on or off',  'sela' );

	/* translators: If there are characters in your language that are not supported
	 * by Droid Serif, translate this to 'off'. Do not translate into your own language.
	 */
	$droid_serif = _x( 'on', 'Droid Serif font: on or off', 'sela' );

	/* translators: If there are characters in your language that are not supported
	 * by Oswald, translate this to 'off'. Do not translate into your own language.
	 */
	$oswald  = _x( 'on', 'Oswald font: on or off',  'sela' );

	if ( 'off' !== $source_sans_pro || 'off' !== $droid_serif || 'off' !== $oswald ) {
		$font_families = array();

		if ( 'off' !== $source_sans_pro ) {
			$font_families[] = 'Source Sans Pro:300,300italic,400,400italic,600';
		}
		if ( 'off' !== $droid_serif ) {
			$font_families[] = 'Droid Serif:400,400italic';
		}
		if ( 'off' !== $oswald ) {
			$font_families[] = 'Oswald:300,400';
		}
		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url = add_query_arg( $query_args, "https://fonts.googleapis.com/css" );
	}

	return $fonts_url;
}

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function sela_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'sela' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'First Footer Widget Area', 'sela' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Second Footer Widget Area', 'sela' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Third Footer Widget Area', 'sela' ),
		'id'            => 'sidebar-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'First Front Page Widget Area', 'sela' ),
		'id'            => 'sidebar-5',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Second Front Page Widget Area', 'sela' ),
		'id'            => 'sidebar-6',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Third Front Page Widget Area', 'sela' ),
		'id'            => 'sidebar-7',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'sela_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sela_scripts_styles() {
	// Add Oswald, Source Sans Pro and Droid Serif fonts.
	// wp_enqueue_style( 'sela-fonts', sela_fonts_url(), array(), null );

	// // Add Genericons font.
	// wp_enqueue_style( 'genericons', get_template_directory_uri() . '/fonts/genericons.css', array(), '3.4.1' );

	// // Load the main stylesheet.
	// wp_enqueue_style( 'sela-style', get_stylesheet_uri() );

	// wp_enqueue_script( 'sela-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20140813', true );

	// wp_enqueue_script( 'sela-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20140813', true );

	// wp_enqueue_script( 'sela-script', get_template_directory_uri() . '/js/sela.js', array( 'jquery' ), '20140813', true );

	// wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js',array(),'1.0');
	
	
	wp_enqueue_script('jquery-slim-min', 'https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js',array(),'1.0');
	wp_enqueue_script('popper-min', 'https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js',array(),'1.0');
	wp_enqueue_script('bootstrap-min', 'https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js',array(),'1.0');
	
	// wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.js',array(),'1.0');
	// wp_enqueue_script('zzscjs', get_template_directory_uri().'/js/zzsc.js',array(),'1.0');

	wp_enqueue_style('bootstrap-css-min', 'https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css',array(), null);
	wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), null);
	// wp_enqueue_style('zzsc', get_template_directory_uri().'/css/zzsc.css', array(), null);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'sela-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20130922' );
	}
}
add_action( 'wp_enqueue_scripts', 'sela_scripts_styles' );

/**
 * Enqueue Google fonts style to admin screen for custom header display.
 */
function sela_enqueue_admin_fonts( $hook ) {
    if ( 'appearance_page_custom-header' != $hook ) {
        return;
    }

    wp_enqueue_style( 'sela-fonts', sela_fonts_url(), array(), null );
}
add_action( 'admin_enqueue_scripts', 'sela_enqueue_admin_fonts' );

/**
 * Remove Gallery Inline Styling
 */
add_filter( 'use_default_gallery_style', '__return_false' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Header features.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
* paginate_links
*/
function show_paginate(){
	$pages = paginate_links(
		array(
			'show_all' => true,
			'prev_next' => true,
			'prev_text' => '前一页',
			'next_text' => '下一页',
			'type' => 'plain',
			'before_page_number' => '第',
			'after_page_number' => '页'
		)
	);

	echo $pages;
}

/*remove useless js and css*/
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'feed_links', 2 );//文章和评论feed
remove_action( 'wp_head', 'feed_links_extra', 3 ); //分类等feed

function remove_dns_prefetch( $hints, $relation_type ) {
  if ( 'dns-prefetch' === $relation_type ) {
    return array_diff( wp_dependencies_unique_hosts(), $hints );
  }

  return $hints;
}
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );

function disable_embeds_init() {
  /* @var WP $wp */
  global $wp;

  // Remove the embed query var.
  $wp->public_query_vars = array_diff( $wp->public_query_vars, array(
    'embed',
  ) );

  // Remove the REST API endpoint.
  remove_action( 'rest_api_init', 'wp_oembed_register_route' );

  // Turn off
  add_filter( 'embed_oembed_discover', '__return_false' );

  // Don't filter oEmbed results.
  remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

  // Remove oEmbed discovery links.
  remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

  // Remove oEmbed-specific JavaScript from the front-end and back-end.
  remove_action( 'wp_head', 'wp_oembed_add_host_js' );
  add_filter( 'tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin' );

  // Remove all embeds rewrite rules.
  add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
}
add_action( 'init', 'disable_embeds_init', 9999 );
/**
 * Removes the 'wpembed' TinyMCE plugin.
 *
 * @since 1.0.0
 *
 * @param array $plugins List of TinyMCE plugins.
 * @return array The modified list.
 */
function disable_embeds_tiny_mce_plugin( $plugins ) {
  return array_diff( $plugins, array( 'wpembed' ) );
}
/**
 * Remove all rewrite rules related to embeds.
 *
 * @since 1.2.0
 *
 * @param array $rules WordPress rewrite rules.
 * @return array Rewrite rules without embeds rules.
 */
function disable_embeds_rewrites( $rules ) {
  foreach ( $rules as $rule => $rewrite ) {
    if ( false !== strpos( $rewrite, 'embed=true' ) ) {
      unset( $rules[ $rule ] );
    }
  }

  return $rules;
}
/**
 * Remove embeds rewrite rules on plugin activation.
 *
 * @since 1.2.0
 */
function disable_embeds_remove_rewrite_rules() {
  add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
  flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'disable_embeds_remove_rewrite_rules' );

/**
 * Flush rewrite rules on plugin deactivation.
 *
 * @since 1.2.0
 */
function disable_embeds_flush_rewrite_rules() {
  remove_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
  flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'disable_embeds_flush_rewrite_rules' );