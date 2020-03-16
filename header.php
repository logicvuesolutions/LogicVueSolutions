<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta property="og:site_name" content="<?php get_bloginfo('name') ?>">
	<meta property="og:url" content="http://<?php $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
	
	<?php if (get_field('seo_title')): ?>
		<title><?php the_field('seo_title');  ?></title>
		<meta property="og:title" content="<?php the_field('seo_title');  ?>">
	<?php else: ?>
		<title><?php the_field('meta_title', 'options');  ?></title>
		<meta property="og:title" content="<?php the_field('meta_title', 'options') ?>" >
	<?php endif; ?>
	
	<?php if (get_field('seo_image')): ?>
		<title><?php the_field('seo_image');  ?></title>
		<meta property="og:image" content="<?php the_field('seo_image');  ?>">
	<?php else: ?>
		<title><?php the_field('meta_image', 'options');  ?></title>
		<meta property="og:image" content="<?php the_field('meta_image', 'options'); ?>" >
	<?php endif; ?>
	
	<?php if (get_field('seo_description')): ?>
		<title><?php the_field('seo_description');  ?></title>
		<meta property="og:description" content="<?php the_field('seo_description');  ?>">
	<?php else: ?>
		<title><?php the_field('meta_description', 'options');  ?></title>
		<meta property="og:description" content="<?php the_field('meta_description', 'options'); ?>" >
	<?php endif; ?>
	
	<?php if (get_field('seo_keywords')): ?>
		<title><?php the_field('seo_keywords');  ?></title>
		<meta property="og:keywords" content="<?php the_field('seo_keywords');  ?>">
	<?php else: ?>
		<title><?php the_field('meta_keywords', 'options');  ?></title>
		<meta property="og:keywords" content="<?php the_field('meta_description', 'options'); ?>" >
	<?php endif; ?>	
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<script src="https://kit.fontawesome.com/391389ab70.js" crossorigin="anonymous"></script>
	
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/sass/main.css" rel="stylesheet">
	
	
	 <?php wp_head(); ?>
</head>
<body class="<?php if (is_front_page()) echo 'home'; if (!is_front_page()) echo 'body'; ?>">
	
	<div id="menu-toggle" >
		<span></span>
		<span></span>
	</div><!-- #menu-toggle -->
	
	<div id="contact-sidebar" >
		<?php the_field('contact_sidebar', 'options'); ?>
	</div><!-- #contact-sidebar -->
	<div id="overlay" ></div>
	
	<div id="header" >	
		<div class="container" >
			<div class="row" >
				<div class="col" >
					<a href="<?php bloginfo('url'); ?>" id="site_id" >
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/LogicVueSolutions_logo.png" alt="LogicVue Solutions" >
					</a><!-- #site_id -->
				</div><!-- .col-sm -->
				<div class="col-sm-12 col-md-9" >
					<div class="menu" >
						<?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
					</div><!-- .menu -->
				</div><!-- .col-sm-9 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #header -->