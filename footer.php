<?php
	/**
 * The template for displaying the footer 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hii
 * @subpackage Cam
 * @since 0.1
 * @version 0.2
 */	?>

<footer id = "footer" class="white">

<div class = "in_grid">

<div class = "inner-container row">

<?php dynamic_sidebar( 'footer-column-one' ); ?>

<?php dynamic_sidebar( 'footer-column-two' ); ?>


<?php dynamic_sidebar( 'footer-column-three' ); ?>


<?php dynamic_sidebar( 'footer-column-four' ); ?>


</div>

</div>
</footer>


<?php
	wp_footer();	
?>


</body>
</html>

