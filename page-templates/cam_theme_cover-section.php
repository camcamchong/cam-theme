<?php
	/**
 * The template for the cover sections
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hii
 * @subpackage Cam
 * @since 0.1
 * @version 0.2
 */	
	?>
	<section id="cover-section" class="background-img" style='background:url("<?php header_image(); ?>");'>
<!-- 	<section id="cover-section" class="background-img" style='background:url("<?php get_post_meta( $post->ID, 'title_field', true );?>");'> -->
		<div class="container">
			<div class="content-container">
					<h1><?php wp_title(); ?></h1>
			</div>
		</div>
	</section>
