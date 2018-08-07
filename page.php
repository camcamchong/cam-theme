<?php /**
 * The template for displaying single pages
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
	<div class= " flex-item">

		<?php	get_template_part('loops/cam_theme_page','loop'); ?>

	</div>
</section>
</div>
<?php get_footer();

