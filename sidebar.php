 <aside class="atpad"> <!-- Begin aside section -->
    
  <div id="sidebar">  
    <h4> <?php 
    	if(is_page()) {							// if we are on a page...
    
    		echo get_the_title($post->post_parent); 
    											// get the title of the parent page 
    	} else {
    		echo 'Blog';
    	
    	}
    	  ?>	
    </h4>

<!--	Begin Subnavigation to list child pages in sidebar  -->

<ul> 		<!-- ul wrap of loop to list child pages-->
	
 	<?php 
 	
 	if(is_page())	{							// if we are on a page...
 	
 		if($post->post_parent) {				// if the page has a parent...
 			wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent, )); 	
 												// ... list the children of that parent	
 		}	else {								// if on the parent page ...
 				wp_list_pages(array('title_li' => '', 'child_of' => $post->ID, )); 
 		}
 	
 	} else {									//if we are not on a page
 	
 		wp_list_categories(array('title_li' => '',));
 												// list the Blog categories 
 	} 										
 	?>

</ul> 	<!-- close loop of child pages-->

<!--	End Subnavigation to list child pages in sidebar  -->

<!--	Begin Quote in sidebar using Custom Field "Quote" if present -->
				<!--	if the custom Quote field exists -->
		<?php if (get_post_meta($post->ID, 'Quote', true)) : ?>
				<!-- write out the quote -->
		<blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?></blockquote>
		<?php endif; ?>
<!--	End Quote in sidebar  -->

<!-- 	Begin Dynamic Sidebar to call Widgets -->
		<?php dynamic_sidebar(1);  ?>		
<!-- 	End Dynamic Sidebar  -->

</div>  <!-- close sidebar div-->
    
  </aside>
  <!-- end aside section -->  