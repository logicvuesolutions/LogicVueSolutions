<?php 
/* Template Name: Solutions */ 
?>

<?php get_header(); ?>


	<div id="solutions-menu" style="top:90px;">
		<?php wp_nav_menu( array( 'theme_location' => 'solutions' ) ); ?>
	</div><!-- #solutions-menu -->


<div class="content" >
	<div class="container-fluid" >
		<div class="intro-block" >
			<div class="container" >
				<div class="row" >
					<div class="col-sm" >
						<?php the_field('intro'); ?>
					</div><!-- .col-sm -->
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .intro-block -->
	</div><!-- .container-fluid -->
	
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

<?php get_footer(); 