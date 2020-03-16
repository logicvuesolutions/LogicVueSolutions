<?php 
/* Template Name: Home */ 
?>

<?php get_header(); ?>


<div class="content" id="home-content" >
	<div class="container" >
		<div class="row" >
			<div class="col-sm-10" >
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; endif;?>
			</div><!-- .col-sm -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #home-content -->

<div id="solutions-menu">
	<?php wp_nav_menu( array( 'theme_location' => 'solutions' ) ); ?>
</div><!-- #solutions-menu -->

<?php get_footer(); 
