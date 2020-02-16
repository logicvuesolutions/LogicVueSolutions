<?php 
/* Template Name: Home */ 
?>

<?php get_header(); ?>


<div class="content" id="home-content" >
	<div class="container" >
		<div class="row" >
			<div class="col-sm-9" >
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; endif; /* posts */ ?>
			</div><!-- .col-sm -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #home-content -->

<div class="bg" >
	<div class="bg-overlay" ></div>
	<div class="bg-video" ></div>
</div><!-- .bg -->


<?php get_footer(); 