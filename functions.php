<?php
/**
 * Cam Theme functions
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hii
 * @subpackage Cam
 * @since 0.1
 * @version 0.2
 */	
	
// add_theme_support('menus');
add_theme_support( "title-tag" ) ;
add_theme_support(  'post-formats' ,array('gallery'));
//single-gallery.php -> create custom forma t
add_theme_support( "custom-header", array('default-image'=> get_template_directory_uri().'/img/Mountains.jpg')
);
add_theme_support( "custom-background", array('default-color'=>'FFFFFF') );

add_post_type_support( 'page', 'excerpt' );
add_post_type_support( 'post', 'excerpt' );

add_theme_support( 'automatic-feed-links' );
add_theme_support(  'post-thumbnails' );
add_theme_support(  'title-tag' );
add_theme_support(  'html5' );

add_action( 'widgets_init', 'cam_regist_widgets' );
function cam_regist_widgets(){
register_nav_menu( 'header_nav_menu', 'Header Menu' );
register_sidebar(  array(
	'name'          => __( 'Single Post Sidebar', 'cam-theme' ),
	'id'            => 'single-post-sidebar',    // ID should be LOWERCASE  ! ! !
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>' ) );
	
register_sidebar(  array(
	'name'          => __( 'Single Page Sidebar', 'cam-theme' ),
	'id'            => 'single-page-sidebar',    // ID should be LOWERCASE  ! ! !
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>' ) );	
	
register_sidebar(  array(
	'name'          => __( 'Single Portfolio Sidebar', 'cam-theme' ),
	'id'            => 'single-portfolio-sidebar',    // ID should be LOWERCASE  ! ! !
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>' ) );
	
// archive should have , ther archives or something
register_sidebar(  array(
	'name'          => __( 'Archive Sidebar', 'cam-theme' ),
	'id'            => 'archive-post-sidebar',    // ID should be LOWERCASE  ! ! !
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>' ) );

register_sidebar(  array(
	'name'          => __( 'Blog Sidebar', 'cam-theme' ),
	'id'            => 'blog-post-sidebar',    // ID should be LOWERCASE  ! ! !
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>' ) );
	
	register_sidebar(  array(
	'name'          => __( 'Footer Column One', 'cam-theme' ),
	'id'            => 'footer-column-one',    // ID should be LOWERCASE  ! ! !
	'description'   => '',
        'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s col-4 flex-item">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>' ) );
	
	
		register_sidebar(  array(
	'name'          => __( 'Footer Column Two', 'cam-theme' ),
	'id'            => 'footer-column-two',    // ID should be LOWERCASE  ! ! !
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>' ) );
	
	
		register_sidebar(  array(
	'name'          => __( 'Footer Column Three', 'cam-theme' ),
	'id'            => 'footer-column-three',    // ID should be LOWERCASE  ! ! !
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>' ) );
	
	
		register_sidebar(  array(
	'name'          => __( 'Footer Column Four', 'cam-theme' ),
	'id'            => 'footer-columnourur',    // ID should be LOWERCASE  ! ! !
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>' ) );
}
	
function cam_wp_title($title, $sep){
	global $page, $paged; 
	
	if(is_archive( )){
		$title = printf(__("Archive %d",'cam-theme'),$title); 	
	}
	else if(is_home( )){
		$title = __("Blog",'cam-theme'); 	
	}
	
	
	return $title;
}	

add_filter('wp_title', 'cam_wp_title', 10 , 2);


// Numbered Pagination
if ( !function_exists( 'wpex_pagination' ) ) {
	
	function wpex_pagination() {
		
		$prev_arrow = is_rtl() ? '&rarr;' : '&larr;';
		$next_arrow = is_rtl() ? '&larr;' : '&rarr;';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
// 				'end_size'		=> 0,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
	
}

function cam_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'cam_custom_logo_setup' );


function cam_content_width(){
	if ( ! isset( $content_width ) ) $content_width = 1100;
}

function cams_add_editor_styles(){
	add_editor_style('editor-style.css');
}

add_action('admn_init','cams_editor_styles');
  

add_action('wp_enqueue_scripts','cam_enqueue_scripts');

function cam_enqueue_scripts(){
	wp_enqueue_script('jquery');
	wp_enqueue_script('cam-scripts',get_template_directory_uri().'/assets/js/cam-scripts.js',array('jquery'),'1.0.0',true);
	wp_enqueue_style('googlefonts','https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i');
	wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/fontawesome/css/fontawesome.min.css');
	wp_enqueue_style('camstyles',get_stylesheet_uri());
	
}


 if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 