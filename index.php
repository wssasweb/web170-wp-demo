<?php get_header(); ?> 

<div id="content">
<p>Content goes here.</p>

<!--standard php format 
<?php

	if (have_posts()) {
		while (have_posts()) {
			the_post();				//start the loop
			echo '<h2>'.the_title().'</h2>';
			the_permalink();
			the_content();
		}
	
	} else {
		echo 'Error!';
	}
?>
-->

<!--  Wordpress format for same php -->
<?php if (have_posts()) : while (have_posts()) : the_post();   ?>
		<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></h2>
		<?php the_content(); ?>
<?php endwhile; endif; ?>

<small>index.php</small>

<?php if(is_404()){echo '404 error.  Page not found.';} ?>

</div>
  
<?php get_sidebar(); ?>

<?php get_footer(); ?>