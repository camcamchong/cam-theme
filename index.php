<?php 
	/**
 * The template for displaying the default tempalte
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hii
 * @subpackage Cam
 * @since 0.1
 * @version 0.2
 */	
 
 get_header(); 
 get_template_part("page-templates/cover",'section');
 ?>

<section class="in_grid">
<?php 
	
if( have_posts() ) :
	while(have_posts()):
		if(!is_single()){
		echo '<div class="blog-post">';
		}
		else{
		echo '<div">';
		}
		the_post();
		
// 		print_r(get_the_post_thumbnail(  ));
		
		$post_title = get_the_title();
		if(!is_single())echo '<a href ="'.get_permalink().'">';
		echo "<h2>$post_title</h2>";
		if(!is_single())echo '</a>';
		the_excerpt(  );
		echo '<a href ="'.get_permalink().' class = "button">Read More</a></div>';
	endwhile;

else:


endif;
	?>

</section>

<?php get_footer();



//page archive home, set front page in settings post page goes to blog
