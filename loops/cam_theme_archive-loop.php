<?php 
/**
 * The template for displaying the archive loop *
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
	echo "<h2 class='archive-title'><a href='".get_permalink()."'>$post_title</a></h2>";
		if (has_post_thumbnail(  ) ): 
		the_post_thumbnail();
		
		endif;
	
	the_content();
	
	endwhile;

	
endif;