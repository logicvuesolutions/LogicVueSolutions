<?php 
/* Template Name: Page */ 
?>

<?php get_header(); ?>


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