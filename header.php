<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<!--  
<meta name="google-site-verification" content="miFB9fDCrrkxSPefyM5GTBsNsWIrsHIlSQeAElYCvvo" />
-->    <!-- use on home page only add php code to check page for inclusion -->

<!-- viewport meta tag for responsive  -->
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximun-scale=1.0" />

<title>Dante Alighieri of Washington Home</title>


<link href="css/styles.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="css/blueberry.css" />
<!--blueberry is rotating stylesheet, only needed on home page -->

<!--Remy Sharp Shim -->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->

<!--Rotating images script, only needed on home page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="jquery.blueberry.js"></script>
<script>
$(window).load(function() {
	$('.blueberry').blueberry();
});
</script>
<!--end rotating images script-->

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

</head>

<!-- Begin body of Page -->
<body>

<header id="top"> <!-- Begin Header section -->
  <div class="headerinner">
    <div class="headerlogo">
    	<a href="index.php"><img src="images/das-logo.png" alt="Intl Logo" > </a>
    </div>
    <!-- close header logo box -->
    <div class="headertext">
      <h2>Dante Alighieri Society of Washington</h2>
      <h3 class="atpad" >per la diffusione della lingua e della cultura italiana nel mondo</h3>
    </div>
    <!-- close header text box -->
    <div class="headerimg"> 
    <img class="atpad" src="images/danteheadshot-200x200.jpg" alt="Dante Bust" > 
    </div>
    <!-- close header image box --> 
   
   
  </div>
  <!-- end header inner -->
  
<nav id="navigation"> <!-- Begin Navigation section -->
    <ul id="navigation-items">
      <li class="nav"><a 
       id="current"   	 	href="index.php">Home</a></li>
  	 	
      <li class="nav"><a
             href="about.php">About</a></li>
      
      <li class="nav"><a
             href="gather.php">Gatherings</a></li>
      
      <li class="nav"><a
             href="classes.php">Classes</a></li>
      
      <li class="nav"><a
             href="resources.php">Resources</a></li>
      
      <li class="nav"><a
             href="contact.php">Contacts</a></li>
      
    </ul>
  </nav>
  <!-- end navigation section --> 
  
  
<!--    template for php
  <li><a 
  	    href="index.php">Home</a></li>
   --> 
   
   
   
   
   
   <!--+++++++++++++  start mobile navigation   +++++++++++-->
<button class="nav-button">Toggle Navigation</button>

<div class="phone"> 

<!-- <a href="email.php"> <img src="images/mail_icon_48.png" alt="Email Us" > </a>  -->
</div>


		<ul class="primary-nav">
			<li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a>
			<li><a href="gather.php">GATHERINGS</a></li>
            <li class="parent"><a href="classes.php">CLASSES</a></li>
				<ul>
					<li><a href="classes-offerings.php">Offerings</a></li>
					<li><a href="classes-schedule.php">Schedule</a></li>
					<li><a href="classes-location.php">Location</a></li>
				</ul>
			</li>
			<li><a href="resources.php">RESOURCES</a></li>
			<li><a href="contact.php">CONTACTS</a></li>
		</ul>
<!--  ++++++++++++   end mobile navigation   ++++++++++++-->
  
</header>
 <!-- end header section --> 

<div id="wrapper"> <!-- Begin Wrapper section --><!-- header ends with <div id="wrapper"> tag --> 