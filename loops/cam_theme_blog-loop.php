<?php 
/**
 * The template for displaying blog loop
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
	$post_cat = get_the_category('/');
	$post_content = get_the_content();
	
	
		
	echo "<div class='flex-item blog-post'><h4>";
	if (has_post_thumbnail(  ) ): 
		the_post_thumbnail();
		
		
		endif;
	
	the_category();
	echo "</h4>
	<h2 class='archive-title'><a ref='".get_permalink()."'>$post_title</a></h2>";
		
	echo "<div class='text-block'>";
		the_excerpt();
	echo '</div>';
	echo '<a class="button button-secondary" href="'.get_permalink().'">SEE MORE</a>';
	echo '</div>';
	endwhile;

	wpex_pagination(); 
	 wp_link_pages( array('echo' => 0) ); 
endif;

