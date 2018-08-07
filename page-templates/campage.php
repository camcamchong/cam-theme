<?php 
/**
 * The template for displaying campages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hii
 * @subpackage Cam
 * @since 0.1
 * @version 0.2
 */	
 get_header(); ?>

<div class = "default-page cam-page">
<section class="row">
	<div class= " flex-item">

	<?php	get_template_part('loops/cam_theme_page','loop'); ?>

	</div>
</section>
</div>
<?php get_footer();

