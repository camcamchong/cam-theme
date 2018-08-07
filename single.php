<?php 
	
/**
 * The template for displaying single blog pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hii
 * @subpackage Cam
 * @since 0.1
 * @version 0.2
 */	
	get_header(); ?>

<div class = "in_grid row ">
<div class="col-8 flex-item single-content">
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 

switch(get_post_format()){
	case "gallery":
		get_template_part('page-templates/cam_theme_single','gallery');
	break;
	
	default:
		get_template_part('page-templates/cam_theme_single','default');
	break;
}


?>
</div>
</div>
<div class="col-4 flex-item">
		<?php get_sidebar(); ?>
</div>

<div class="recent-posts-container" id="recent-posts">
	<div class="row">
		<div class="flex-item col-12">
			<h3> Recent Posts</h3>
		</div>
		
<?php	get_template_part("loops/cam_theme_single","loop");  get_the_tags();?>
	</div>
</div>
 <?php comments_template(); ?>

<?php get_footer();

