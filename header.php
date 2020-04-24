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
	
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js" ></script>
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-K5HQNXH');</script>
	<!-- End Google Tag Manager -->
	
	
	 <?php wp_head(); ?>
</head>
<body class="<?php if (is_front_page()) echo 'home'; if (!is_front_page()) echo 'body'; ?>">
	
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5HQNXH"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
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
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 207.12 61.45" enable-background="new 0 0 207.12 61.45" xml:space="preserve">
<g id="Solutions">
	<path fill="#0D1321" d="M110.75,54.63c0,1.1-0.85,1.95-2.31,1.96c-0.95,0-1.8-0.4-2.35-0.96l0.52-0.58
		c0.53,0.51,1.14,0.84,1.86,0.83c0.93,0,1.51-0.47,1.5-1.2c0-0.65-0.39-1.02-1.67-1.47c-1.51-0.53-2.02-1.02-2.03-2.03
		c0-1.12,0.87-1.79,2.18-1.8c0.94,0,1.54,0.27,2.13,0.74l-0.5,0.61c-0.51-0.42-0.98-0.65-1.68-0.64c-0.96,0-1.36,0.48-1.36,1.03
		c0,0.58,0.26,0.91,1.66,1.4C110.27,53.07,110.75,53.59,110.75,54.63z"/>
	<path fill="#0D1321" d="M123.65,52.91c0.01,2.11-1.17,3.62-2.91,3.63c-1.74,0.01-2.89-1.48-2.9-3.59s1.16-3.62,2.9-3.63
		C122.48,49.32,123.64,50.8,123.65,52.91z M122.87,52.93c-0.01-1.76-0.94-2.9-2.16-2.9c-1.21,0-2.09,1.14-2.09,2.9
		c0.01,1.76,0.93,2.9,2.15,2.9C121.98,55.82,122.88,54.69,122.87,52.93z"/>
	<path fill="#0D1321" d="M135.25,56.38l-4.24,0.01l-0.02-7h0.78l0.02,6.29l3.46-0.01V56.38z"/>
	<path fill="#0D1321" d="M147.25,53.48c0.01,1.94-0.82,2.97-2.5,2.98c-1.67,0.01-2.53-1-2.54-2.94l-0.01-4.16h0.78l0.01,4.14
		c0.01,1.51,0.59,2.26,1.8,2.25c1.21,0,1.69-0.74,1.68-2.25l-0.01-4.16h0.78L147.25,53.48z"/>
	<path fill="#0D1321" d="M159.31,50.01l-2.06,0.01l0.02,6.29h-0.78l-0.02-6.29l-2.06,0.01v-0.71l4.9-0.02V50.01z"/>
	<path fill="#0D1321" d="M167.38,56.26h-0.78l-0.02-7h0.78L167.38,56.26z"/>
	<path fill="#0D1321" d="M180.58,52.71c0.01,2.11-1.17,3.62-2.91,3.63c-1.74,0.01-2.89-1.48-2.9-3.59s1.16-3.62,2.9-3.63
		C179.41,49.11,180.57,50.6,180.58,52.71z M179.8,52.73c-0.01-1.76-0.94-2.9-2.16-2.9c-1.21,0-2.09,1.14-2.09,2.9
		c0.01,1.76,0.93,2.9,2.15,2.9C178.91,55.62,179.8,54.49,179.8,52.73z"/>
	<path fill="#0D1321" d="M187.94,56.19l-0.02-7h0.76l3.05,4.87c0.15,0.24,0.41,0.7,0.5,0.88l-0.02-5.76h0.75l0.02,7h-0.73
		l-3.08-4.78c-0.15-0.24-0.41-0.7-0.5-0.88l0.02,5.67L187.94,56.19z"/>
	<path fill="#0D1321" d="M204.92,54.29c0,1.1-0.85,1.95-2.31,1.96c-0.95,0-1.8-0.4-2.35-0.96l0.52-0.58
		c0.53,0.51,1.14,0.84,1.86,0.83c0.93,0,1.51-0.47,1.5-1.2c0-0.65-0.39-1.02-1.67-1.47c-1.51-0.53-2.02-1.02-2.03-2.03
		c0-1.12,0.87-1.79,2.18-1.8c0.94,0,1.54,0.27,2.13,0.74l-0.5,0.61c-0.51-0.42-0.98-0.65-1.68-0.64c-0.96,0-1.36,0.48-1.36,1.03
		c0,0.58,0.26,0.91,1.66,1.4C204.44,52.73,204.92,53.25,204.92,54.29z"/>
</g>
<g id="Graphic">
	<g>
		<polygon fill="#0C41B2" points="30,59.35 14.18,59.41 2.46,32.09 22.04,32.02 		"/>
		<polygon fill="#0C41B2" points="29.8,2.04 21.86,30.02 2.2,30.09 13.98,2.1 		"/>
	</g>
</g>
<g id="Logicvue">
	<path fill="#0D1321" d="M51.83,46.51c-4.99,0.02-7.66-2.34-7.68-6.85l-0.09-24.9l4.82-0.02l0.09,24.55c0.01,1.98,1.3,2.88,3.28,3
		L51.83,46.51z"/>
	<path fill="#0D1321" d="M65.98,24.14c6.58-0.02,11.58,4.9,11.61,11.14s-4.95,11.2-11.53,11.22c-6.54,0.02-11.54-4.9-11.56-11.14
		C54.48,29.13,59.45,24.17,65.98,24.14z M66.05,42.46c3.83-0.01,6.74-3.12,6.73-7.16c-0.01-4-2.95-7.13-6.78-7.11
		c-3.78,0.01-6.7,3.16-6.68,7.16C59.33,39.39,62.26,42.47,66.05,42.46z"/>
	<path fill="#0D1321" d="M97.63,24.46c-2.15-0.78-4.84-1.1-6.5-0.94c-6.21,0.65-10.46,5.52-10.44,11.75
		c0.02,6.24,4.42,11.16,10.4,11.14c2.75-0.01,4.99-1.01,6.35-2.42l0.26,0.08l0.01,2.67c0.01,1.87-0.78,3.3-2.01,4.24l-3.34,5.31
		c5.56-0.24,10.19-3.83,10.17-9.57l-0.08-22.28L97.63,24.46z M97.69,39.6c-1.28,1.98-3.34,2.76-5.58,2.77
		c-3.78,0.01-6.59-3.12-6.61-7.12c-0.01-4.04,2.77-7.14,6.55-7.15c1.98-0.01,4.13,0.46,5.59,1.35L97.69,39.6z"/>
	<path fill="#0D1321" d="M108.26,15.52c1.81-0.01,2.8,1.19,2.8,2.44c0,1.2-0.98,2.41-2.79,2.42c-1.72,0.01-2.76-1.19-2.76-2.4
		C105.52,16.74,106.54,15.53,108.26,15.52z M105.93,24.43l4.82-0.02l0.08,21.5l-4.82,0.02L105.93,24.43z"/>
	<path fill="#0D1321" d="M125.69,42.25c1.68-0.01,3.22-0.23,4.51-1.01l1.05,3.82c-1.85,0.95-3.57,1.22-5.54,1.22
		c-6.28,0.02-11.28-4.91-11.31-11.14s4.95-11.2,11.23-11.22c1.98-0.01,3.7,0.2,5.55,1.14l-1.02,3.79c-1.12-0.47-2.58-0.89-4.52-0.89
		c-3.66,0.01-6.61,3.16-6.6,7.16C119.06,39.18,122.03,42.26,125.69,42.25z"/>
	<path fill="#0D1321" d="M145.03,39.99l0.26,1.16h0.26l0.25-1.16l5.71-15.72l5.2-0.02l-8.82,21.53l-4.86,0.02l-8.98-21.47l5.16-0.02
		L145.03,39.99z"/>
	<path fill="#0D1321" d="M180.49,36.04c0.02,6.06-4.52,10.08-10.33,10.1c-5.76,0.02-10.33-3.96-10.36-10.03l-0.04-11.87l4.82-0.02
		l0.04,11.87c0.01,3.87,2.43,6.01,5.53,6s5.54-2.17,5.53-6.04l-0.04-11.87l4.82-0.02L180.49,36.04z"/>
	<path fill="#0D1321" d="M204.73,33.37l0.01,2.58l-15.82,0.06c0.36,4,2.64,5.92,7.29,5.99c2.28-0.01,4.47-0.45,6.32-1.31l0.92,3.65
		c-2.23,1.13-4.72,1.69-7.22,1.7c-7.22,0.03-12.14-4.17-12.16-11.09c-0.02-5.89,4.05-11.15,10.62-11.26
		C200.53,23.67,204.32,27.05,204.73,33.37z M189.12,32.48l10.75-0.04c-0.23-3.18-2.34-4.72-5.05-4.71
		C191.73,27.74,189.76,29.68,189.12,32.48z"/>
</g>
</svg>

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