<?php
	/**
 * The template for displaying blog pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hii
 * @subpackage Cam
 * @since 0.1
 * @version 0.2
 */	

get_header(); 

get_template_part("cam_theme_page-templates/cover",'section');

?>
	
	
<div class = "in_grid row  blog" >

	
	<div class="content flex-item col-8">
		<?php	get_template_part('loops/cam_theme_blog','loop'); ?>
		

		
	</div>
	
	<div class="col-4 flex-item">
		<?php get_sidebar(); ?>
	</div>


</div>

<?php get_footer(); ?>


<!-- Is actually the blog section, as wordpress is a blogging site first and foremost.  -->

	