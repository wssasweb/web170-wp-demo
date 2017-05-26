<?php get_header(); ?> 

<div id="content">




<!--  Wordpress format for same php -->
<?php if (have_posts()) : while (have_posts()) : the_post();   ?>
	<article id="post-excerpt-<?php the_ID(); ?>" class="post-excerpt" >
		<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
		<small>Posted on the <?php the_time('F j, Y'); ?> by <?php the_author(); ?> 
			in <?php the_category(', '); ?>.</small>
		<?php the_post_thumbnail( 'thumbnail' ); ?>
		<p><?php echo get_the_excerpt(); ?> 
			<a href="<?php the_permalink(); ?>">Read More &nbsp;&raquo;</a></p>
	</article>
<?php endwhile; endif; ?>

<small>index.php</small>

<?php if(is_404()){echo '404 error.  Page not found.';} ?>

</div>		<!-- end div id="content" here-->
  
<?php get_sidebar(); ?>

<?php get_footer(); ?>