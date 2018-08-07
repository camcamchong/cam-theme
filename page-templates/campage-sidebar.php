<?php 
/**
 * Template Name: CamPage - Sidebar
 * The template for displaying a single page with a sidebar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hii
 * @subpackage Cam
 * @since 0.1
 * @version 0.2
 */		
	get_header(); 
	 get_template_part('cam_theme_page-templates/cover','section');
	?>

<div class = "default-page">
<section class="in_grid row">
	<div class= " flex-item col-8">
 		<?php echo "<h1>".get_post_meta(get_the_id(),'title_field',true)."</h1>"; ?>
		<?php	get_template_part('loops/cam_theme_page','loop')?>
	

	</div>
	<div class="flex-item col-4">
		<?php get_sidebar(); ?>
	</div>
</section>
</div>
<?php get_footer();

