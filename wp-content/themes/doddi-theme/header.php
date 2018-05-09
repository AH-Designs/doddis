<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
			<link href="<?php echo get_template_directory_uri(); ?>/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>

	<!-- Uncomment this line if using the Off-Canvas Menu -->

  <!-- ************** Large and up Header ************** -->
 <header id="large-up">
   <div class="row">
     <div class="colums medium-12">
       <div class="header">
         <div class="contact">
           <ul>
             <li><a href="mailto:<?php the_field('email_address', 'options'); ?>"><?php the_field('email_address', 'options'); ?></a></li>
             <li ><a class="tel" href="tel:<?php the_field('phone_number', 'options'); ?>"><?php the_field('phone_number', 'options'); ?></a><a target="_blank"  href="<?php the_field('facebook_link','options'); ?>"><i class="fab fa-facebook-square"></i></a></li>
           </ul>
         </div>
         <div>
           <a href="<?php echo home_url(); ?>">
             <img src="<?php the_field('main_school_logo', 'options');?>" alt="Doddiscombsleigh Primary School Logo">

             <h1><?php bloginfo( 'name' ); ?></h1>
             <h2><?php bloginfo( 'description' ); ?></h2>

           </a>
         </div>
         <div class="search">
           <?php echo get_search_form(); ?>
         </div>
       </div>
     </div>
   </div>
 </header>

  <!-- ************** Small and Medium Header ************** -->

 <header id="small-up">
   <div class="row">
     <div class="colums small-12">

       <div class="header-top">
         <div id="logo">
             <img class="logo" src="<?php the_field('main_school_logo', 'options');?>" alt="Doddiscombsleigh Primary School Logo">
             <h1><?php bloginfo( 'name' ); ?><span><?php bloginfo( 'description' ); ?></span></h1>

         </div>

         <!-- Burger Menu -->
         <div id="main-menu">
           <div class="title-bar" data-responsive-toggle="dropdown-menu" data-hide-for="large">
           <div class="title-bar-title">Menu</div>
               <button type="button" data-toggle="dropdown-menu" class="burger menu-burger">
                 <span class="line line01"></span>
                 <span class="line line02"></span>
                 <span class="line line03"></span>
               </button>
           </div>
         </div>
       </div>
     </div>
   </div>
 </header>

 <header-bar>
   <div class="row">
     <div class="colums small-12">
         <div class="header-bar">
           <div class="search">
             <a href="#">Search<i class="fas fa-search"></i></a>
           </div>
           <div class="contact">
             <a href="tel:"><?php the_field('phone_number', 'options'); ?></a>
             <a class="small-email" href="mailto:<?php the_field('email_address', 'options'); ?>">Send Email</a>
             <a class="med-email" href="mailto:<?php the_field('email_address', 'options'); ?>"><?php the_field('email_address', 'options'); ?></a>
           </div>
         </div>
     </div>
   </div>
 </header-bar>

  <!-- ************** Navigation Menu ************** -->
<div id="scroll-magic-header">
 <nav id="dropdown-menu">
   <ul class="dropdown menu vertical large-horizontal" data-dropdown-menu>
     <?php wp_nav_menu(array( 'container'=>false, 'items_wrap' => '%3$s', 'depth'=>2)); ?>
   </ul>
   <a class="btn" href="<?php the_field('facebook_link', 'options'); ?>"><i class="fab fa-facebook-f"></i>follow us on Facebook</a>
 </nav>
</div>


	<body <?php body_class(); ?>>
