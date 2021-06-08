<?php get_header(); ?>




<?php 
$query = new WP_Query( 'cat=19,20' );
if ( $query->have_posts()  ) {
	while ($query->have_posts() ) {
			$query->the_post(); 
			$query->the_content();
				$query->the_category(); 
		//
		//the_content();
	 	?>

	 	<img src="<?php the_field('cat_image');?>" />

<?php


		//
	} // end while
} // end if
?>





