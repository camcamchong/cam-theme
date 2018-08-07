<?php 

/**
 * The template for displaying  page loops
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hii
 * @subpackage Cam
 * @since 0.1
 * @version 0.2
 */	
	
if( have_posts() ) :
	while(have_posts()):
		the_post();
		$post_title = get_the_title();
		echo "<div class='page-title'><h1>$post_title</h1></div>";
		the_content();
		
	endwhile;




endif;


	