<?php get_header(); ?> 
<!-- header ends with <div id="wrapper"> tag -->
<!-- Begin WP Page Content -->

<div id="content">

<!--  The Main Blog Loop -->
<?php if (have_posts()) : while (have_posts()) : the_post();   ?>
	<article id="article-<?php the_ID(); ?> class="article">
		<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
		<small>Posted on the <?php the_time('F j, Y'); ?> by <?php the_author(); ?>
				in the <?php the_category(', '); ?></small>
		<?php the_post_thumbnail('large'); ?>
		<?php the_content(); ?>
	</article>
<?php endwhile; endif; ?>

<small>single.php</small>

<?php if(is_404()){echo '404 error.  Page not found.';} ?>

</div>		<!-- end div id="content" here-->
  
  
  <!--  <main></main> is used in CSS to section to cover from post page title andimage to 
  		end of main content; coordinate with WP page content tags-->
  
 <!-- End WP Page Content --> 
  
<?php get_sidebar(); ?>

<!--  <div id="wrapper"> end in footer -->
<?php get_footer(); ?>