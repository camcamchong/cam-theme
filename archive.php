<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hii
 * @subpackage Cam
 * @since 0.1
 * @version 0.2
 */	
get_header(); 

?>

<div class = "in_grid row single archive">
<div id="archives" class= "col-8">
	
	
	<?php  
	 /* 
	 
	 
	 */?>
<?php	get_template_part('loops/cam_theme_archive','loop'); ?>
		


</div>
<div class="col-4">
<?php  get_sidebar(); ?>
</div>

</div>
<?php get_footer(); ?>

