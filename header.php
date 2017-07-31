


<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<!--  
Theme Name: 	SAShiro Web170 WordPress Demo
Theme URI: 		http://sashiroyama.com/web170/wordpress/dantewpdemo
Author:			SAShiroyama
Author URI: 	http://sashiroyama.com
Description:	This is the SAShiro's WordPress Demo theme for the WEB170 WordPress Class. 
				It is intended to implement the DanteSeattle.org site in a WordPress
				context.
Version:		1.0
-->

<!--  
<meta name="google-site-verification" content="miFB9fDCrrkxSPefyM5GTBsNsWIrsHIlSQeAElYCvvo" />
-->    <!-- use on home page only add php code to check page for inclusion -->

<!-- viewport meta tag for responsive  -->
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximun-scale=1.0" />
<meta name="description" content="<?php echo strip_tags(get_the_excerpt());  ?>" />

<title><?php get_my_title_tag(); ?></title>

<!-- Define Stylesheets -->
<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" 
	type="text/css" media="all" >
<!-- End Stylesheets -->


<!-- Define Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<!--Woo Commerce flexslider images script, only needed on home page -->
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
<!-- End Scripts -->

<!-- Begin Flex Slider -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
    $('.flexslider').flexslider(); // call flexslider function
  });
</script>
<!-- End Woo Commerce Flex Slider -->

<!-- script for phone toggle nav --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>
<!--end toggle nav script-->

<!-- End Scripts -->

<!-- Start of WP Head -->
<?php wp_head(); ?>
<!-- End of WP Head -->

</head>	<!-- End Head Section -->

<!-- Begin body of Page -->
<body <?php body_class(); ?> >

<header id="top"> <!-- Begin Header section -->
  <div class="headerinner">
    <div class="headerlogo">
    	<a href="index.php">
    		<img src="<?php bloginfo('template_directory'); ?>/images/das-logo.png" 
    			alt="Intl Logo" > 
    	</a>
    </div>
    <!-- close header logo box -->
    <div class="headertext">
      <h2>Dante Alighieri Society of Washington</h2>
      <h3 class="atpad" >per la diffusione della lingua e della cultura italiana 
      		nel mondo</h3>
    </div>
    <!-- close header text box -->
    <div class="headerimg">       
    	<a href="">     <!--  inserted to get access to phot to work  -->
    		<img src="<?php bloginfo('template_directory'); ?>/images/danteheadshot.jpg" 
    			alt="Dante Bust" > 
 	 	</a>  <!--  inserted to get access to phot to work  -->
    </div>
    <!-- close header image box --> 
   
   
  </div>
  <!-- end header inner -->
  
 <!-- begin navigation section 
<nav id="navigation"> 
    <ul id="navigation-items">
      <li class="nav"><a 
       		href="index.php">Home</a></li>
  	 	
      <li class="nav"><a
             href="about.php">About</a></li>
   
      <li class="nav"><a
             href="gather.php">Gatherings</a></li>
   
   
      <li class="nav"><a
             href="classes.php">Classes</a></li>
      
      <li class="nav"><a
             href="resources.php">Resources</a></li>
             

      
       <li class="nav"><a
             href="blog.php">Blogs</a></li>
      
      <li class="nav"><a
             href="contact.php">Contacts</a></li>
      
    </ul>
  </nav>
   end navigation section --> 
  
  
<!--    template for php
  <li><a 
  	    href="index.php">Home</a></li>
   --> 
   
 <!--  Begin Wordpress Navigation -->
   
 <?php wp_nav_menu (array('theme_location' => 'main-menu', 'container' => 'div',
 							'container_id' => 'navigation')); ?>  
 <!--  End Wordpress Navigation -->   
   
   <!--+++++++++++++  start mobile navigation   +++++++++++-->
<!--
<button class="nav-button">Toggle Navigation</button>
-->

<div class="phone"> 

<!-- <a href="email.php"> <img src="images/mail_icon_48.png" alt="Email Us" > </a>  -->
</div>

<!--
		<ul class="primary-nav">
			<li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
			<li><a href="gather.php">GATHERINGS</a></li>
            <li class="parent"><a href="classes.php">CLASSES</a></li>
				<ul>
					<li><a href="classes-offerings.php">Offerings</a></li>
					<li><a href="classes-schedule.php">Schedule</a></li>
					<li><a href="classes-location.php">Location</a></li>
				</ul>
			<li><a href="resources.php">RESOURCES</a></li>
			<li><a href="contact.php">CONTACTS</a></li>
		</ul>
-->	

<!--  ++++++++++++   end mobile navigation   ++++++++++++-->
  
</header>
 <!-- end header section --> 

<div id="wrapper"> <!-- Begin Wrapper section --><!-- header ends with <div id="wrapper"> tag --> 