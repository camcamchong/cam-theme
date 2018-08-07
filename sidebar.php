<?php
	
	/**
 * The template for retrieving the sidebar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hii
 * @subpackage Cam
 * @since 0.1
 * @version 0.2
 */	?>
<div id="sidebar" class="sidebar">
<?php
	$c ="side-container";
	
	
	
	if(is_post_type_archive( 'portfolio' )){
		
	}
	else if(get_post_type() == 'portfolio' ){
		$c='single-portfolio-sidebar';	
	}
	else if(is_home()){
		$c = 'blog-post-sidebar';
	}
	else if(is_archive(  )){
		$c = 'archive-post-sidebar';
		
	}
	else if(is_page()){
			$c ='single-page-sidebar';
	}
	else if(is_single()){
		$c = 'single-post-sidebar';	
	}
	else{
		$c='single-portfolio-sidebar';		
		}
		
	
	echo "<div class ='$c sidebar-container'>";
// 	echo $c;
	dynamic_sidebar($c);
?>
</div>
</div>


<!-- sidebar for separate pages, style them, make signle-portfolio, archive-portfolio  -->