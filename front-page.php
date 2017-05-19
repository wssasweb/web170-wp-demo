<?php get_header(); ?> 

<!-- Begin Page Content, no associated div -->
  
 
  
  	<main> <!-- Begin main section -->
  
  	<div id="widgets">	<!-- Begin widget section -->
  	
  	
  <!-- Begin About section -->
  	<section class="widget-item">
  	<h2>About Dante:</h2>
  	<?php if (have_posts()) : while (have_posts()) : the_post();   ?>
  	  
  	  <article id="article-<?php the_ID(); ?>"  class="article">
		<?php the_content(); ?>
	  </article>	
		
  	<?php endwhile; endif; ?>		<!--end post loop-->
  
  	<small>front-page.php</small> 
  	
  	</section>	<!-- End About section -->
  	
  	
  <!-- Begin Post List section -->
  	<section class="widget-item">
  	<h2>Lastest Posts:</h2>	
  	<ul>
  	<?php rewind_posts(); ?>   <!--to stop the prior loop-->
  	<!--secondary loop to loop through the posts up to list the 4 latest posts--> 
  	<?php query_posts(array('posts_per_page' => '4')); ?>
  	<?php if (have_posts()) : while (have_posts()) : the_post();   ?>
  	<li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li>
  	<?php endwhile; endif; ?>		<!--end post loop-->  
  	</ul>
  	</section>	<!-- End Post List section -->
  	
  	<!-- Begin Contact section -->
  	<section class="widget-item">
  	<h2>Contact Us:</h2>
  	<p><strong>Phone:  </strong>206-556-4120<br>
  	   <strong>Email:  </strong><a href="mailto:sylvia@danteseattle.org">
  	   											sylvia@danteseattle.org</a><br>
  	   <strong>Meetings @:  </strong></p>
  	<p>2336 15th Ave S<br>Beacon Hill<br>Seattle, WA</p>
  	</section>
     
  		
   	</div>  			<!-- End widget section -->
   	</main>
  <!-- end main section -->
  
<!-- End Page Content -->  
  


<?php get_footer(); ?>