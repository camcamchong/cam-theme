<?php 
/**
 * The template for displaying single loops
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hii
 * @subpackage Cam
 * @since 0.1
 * @version 0.2
 */	

   // the query
   $the_query = new WP_Query( array(
     	 'post_type' => 'any',
     	 'posts_per_page' => 3  
   )); 
$count =0;
if ( $the_query->have_posts() ) : 
  while ( $the_query->have_posts() ) : $the_query->the_post(); 
  		
  		if($count > 2)	{
	  		$count = 0;
	  		break;
  		}
  	
  //	echo "<div class ='flex-item col-4 related-post>";
	  echo "<div class='col-3 flex-item related-post center'>";
	  
		  if (has_post_thumbnail(  ) ): 
			the_post_thumbnail();	
			endif;
		
				$post_title = get_the_title();
				echo "<div class='recent-title'><h5>$post_title</h5></div>";
	
			echo '<a class="button button-primary" href="'.get_permalink().'">SEE MORE</a>';
			$count++;
	
	echo "</div>";	
	
	endwhile;


   wp_reset_postdata(); 

 else :
 endif; 
echo"</div>";