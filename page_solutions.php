<?php 
/* Template Name: Solutions */ 
?>

<?php get_header(); ?>


<div class="content" >
	<div class="container" >
		<div class="row" >
			<div class="col-sm" >
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; endif; ?>
			</div><!-- .col-sm -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .content -->

<div class="container" >
	<div class="row" >
		<div class="col-sm" id="indicate-more" >
			<a href="#indicate-more" ><i class="fal fa-angle-down color-blue"></i></a>
		</div><!-- #indicate-more -->
	</div><!-- .row -->
</div><!-- .container -->

<div id="solutions-menu" >
	<?php wp_nav_menu( array( 'theme_location' => 'solutions' ) ); ?>
</div><!-- #solutions-menu -->


<?php get_footer(); 