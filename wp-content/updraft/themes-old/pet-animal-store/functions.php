<?php
/**
 * Pet Animal Store functions and definitions
 *
 * @package Pet Animal Store
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

/* Theme Setup */
if ( ! function_exists( 'pet_animal_store_setup' ) ) :

function pet_animal_store_setup() {

	$GLOBALS['content_width'] = apply_filters( 'pet_animal_store_content_width', 640 );

	load_theme_textdomain( 'pet-animal-store', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('pet-animal-store-homepage-thumb',240,145,true);
	
       register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'pet-animal-store' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', pet_animal_store_font_url() ) );
}
endif;
add_action( 'after_setup_theme', 'pet_animal_store_setup' );

/* Theme Widgets Setup */
function pet_animal_store_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'pet-animal-store' ),
		'description'   => __( 'Appears on blog page sidebar', 'pet-animal-store' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'pet-animal-store' ),
		'description'   => __( 'Appears on page sidebar', 'pet-animal-store' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Thid Column Sidebar', 'pet-animal-store' ),
		'description'   => __( 'Appears on page sidebar', 'pet-animal-store' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav 1', 'pet-animal-store' ),
		'description'   => __( 'Appears on footer', 'pet-animal-store' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav 2', 'pet-animal-store' ),
		'description'   => __( 'Appears on footer', 'pet-animal-store' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav 3', 'pet-animal-store' ),
		'description'   => __( 'Appears on footer', 'pet-animal-store' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Nav 4', 'pet-animal-store' ),
		'description'   => __( 'Appears on footer', 'pet-animal-store' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'pet_animal_store_widgets_init' );

/* Theme Font URL */
function pet_animal_store_font_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Lato';

	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

	
/* Theme enqueue scripts */
function pet_animal_store_scripts() {
	wp_enqueue_style( 'pet-animal-store-font', pet_animal_store_font_url(), array() );	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'pet-animal-store-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'pet-animal-store-style', 'rtl', 'replace' );
	wp_enqueue_style( 'pet-animal-store-effect', get_template_directory_uri().'/css/effect.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/fontawesome-all.css' );

	wp_enqueue_style( 'jquery-nivo-slider', get_template_directory_uri().'/css/nivo-slider.css' );
	wp_enqueue_script( 'jquery-nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'pet-animal-store-custom-front', get_template_directory_uri() . '/js/custom-front.js', array('jquery') ,'',true);
	
	wp_enqueue_script( 'pet-animal-store-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pet_animal_store_scripts' );

/*radio button sanitization*/

function pet_animal_store_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

// URL DEFINES
define('PET_ANIMAL_STORE_SITE_URL','https://www.themescaliber.com/');

function pet_animal_store_credit_link() {
    echo "<a href=".esc_url(PET_ANIMAL_STORE_SITE_URL)." target='_blank'>".esc_html('ThemesCaliber','pet-animal-store')."</a>";
}

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';