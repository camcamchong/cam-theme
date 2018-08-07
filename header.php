<?php/**
 * The template for displaying the header
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hii
 * @subpackage Cam
 * @since 0.1
 * @version 0.2
 */	?>
 <!DOCTYPE html>
<html>
<head>
	
  <title><?php wp_title(); ?></title>
  <!-- link font before stylsheet -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <style>
	  #cover-section{
		 <?php if ((get_post_meta( $post->ID, 'title_field', true )) !== null){
			  echo "background:url(".get_post_meta( $post->ID, 'title_field', true ).");";
			  }?>
		
	  }
  </style>
  <?php
	  wp_head();  
	?>
</head>

<body <?php body_class();?> <?php language_attributes(); ?>>
<header id="main_header">
      <div class="in_grid row">
        <div id="logo" class="logo_container flex-item">
            <a href="<?php echo esc_url( home_url() );?>">
             <?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
} ?>
            </a>
        </div>
        <?php 
	     wp_nav_menu( array(
		     'container_class' => 'flex-item',
		     'container_id' => 'main-nav',
		     'container' => 'nav'
// 		     'theme_location' => 'main_header_nav'
	      ));
	        
        ?>
      </div>
</header>