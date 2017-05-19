<?php get_header(); ?> 

<div id="content">




<!--  Wordpress format for same php -->
<?php if (have_posts()) : while (have_posts()) : the_post();   ?>
		<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
		<?php the_content(); ?>
<?php endwhile; endif; ?>

<small>index.php</small>

<?php if(is_404()){echo '404 error.  Page not found.';} ?>

</div>		<!-- end div id="content" here-->
  
<?php get_sidebar(); ?>

<?php get_footer(); ?>