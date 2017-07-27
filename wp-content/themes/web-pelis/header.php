<!--
author: Esteban García Sánchez
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php bloginfo('template_url') ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php bloginfo('template_url') ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/faqstyle.css" type="text/css" media="all" />
<link href="<?php bloginfo('template_url') ?>/css/single.css" rel='stylesheet' type='text/css' />
<link href="<?php bloginfo('template_url') ?>/css/medile.css" rel='stylesheet' type='text/css' />
<!-- banner-slider -->
<link href="<?php bloginfo('template_url') ?>/css/jquery.slidey.min.css" rel="stylesheet">
<!-- //banner-slider -->
<!-- pop-up -->
<link href="<?php bloginfo('template_url') ?>/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- banner-bottom-plugin -->
<link href="<?php bloginfo('template_url') ?>/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php bloginfo('template_url') ?>/style.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php bloginfo('template_url') ?>/js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 
<!-- //banner-bottom-plugin -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/move-top.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				<a href="<?php echo site_url(); ?>"><h1>One<span>Movies</span></h1></a>
			</div>			
		</div>
	</div>
<!-- //header -->
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script>
<!-- //bootstrap-pop-up -->
<!-- nav -->

	<div class="movies_nav">
		<div class="container">

			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

					<nav>
						<ul class="nav navbar-nav">		

							<li class="active"><a href="<?php echo site_url(); ?>">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Generos <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-1">
									<li>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">										
											<li><a href="<?php echo get_category_link(3); ?>">Action</a></li>
											<li><a href="<?php echo get_category_link(2); ?>">Infantiles</a></li>
											<li><a href="<?php echo get_category_link(7); ?>">Comedia</a></li>
											<li><a href="<?php echo get_category_link(6); ?>">Suspenso</a></li>
											<li><a href="<?php echo get_category_link(5); ?>">Terror</a></li>
											<li><a href="<?php echo get_category_link(1); ?>">Fantastico</a></li>											
										</ul>
									</div>									
									<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="series.html">tv - series</a></li>
							<li><a href="list.html">A - z list</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //nav -->
