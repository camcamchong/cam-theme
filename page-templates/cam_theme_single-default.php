<?php
/**
 * The template for displaying single pages
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
		echo "<div class='page-title single-categories'>";
			the_category(",");
		echo "<h1>$post_title</h1></div>";
		echo "<div class = 'single-container'>";
		the_content();
		
		
		echo "</div>";
		echo "<div class = 'single-categories s-c-bottom'>";
			the_category(",");
		echo "</div>";
		
		//comments_template();
	endwhile;

endif;

	
