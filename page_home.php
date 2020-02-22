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

<div class="container-fluid" >
	<div class="bg" >
		<div class="bg-overlay" ></div>
		<video autoplay="" loop="" muted="" width="100%" height="100%" class="bg-video" >
			<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logicvuesolutions_home_vid_1.mp4">
		</video>
	</div><!-- .bg -->
</div><!-- .container-fluid -->

<div id="solutions-menu" class="d-none d-md-block" >
	<!-- run the loop for custom post types -->
	<?php $args = array('post_type' => 'solutions', 'order' => 'ASC' ); 
	$solutionQuery = new WP_Query( $args );  if ($solutionQuery->have_posts() ): $tabCount=0; ?>
	<ul class="nav nav-tabs" role="tablist" >
		<?php while ( $solutionQuery->have_posts() ): $solutionQuery->the_post(); ?>
		<li class="nav-item" >
			<a class="nav-link" id="<?php the_title(); ?>-tab" data-toggle="tab" href="#<?php the_title(); ?>" role="tab" aria-controls="<?php the_title(); ?>" ><?php the_title(); ?></a>
		</li>
		<?php $tabCount++; wp_reset_postdata(); endwhile; ?>
	</ul><!-- .nav-tags -->
	<?php endif; ?>
</div><!-- #solutions-menu -->

<div id="solutions-content">
	<div class="container" >
		<div class="row" >
			<div class="col-sm" >
				<?php $args = array('post_type' => 'solutions', 'order' => 'ASC' ); 
				$solutionQuery2 = new WP_Query( $args); if ($solutionQuery2->have_posts() ): $tabCount2=0; ?>
				<div class="tab-content" >
					<?php while( $solutionQuery2->have_posts() ): $solutionQuery2->the_post(); ?>
					<div class="tab-pane fade" id="<?php the_title(); ?>" role="tabpanel" aria-labelledby="<?php the_title(); ?>-tab">
						<?php the_field('excerpt'); ?>
						
						<div class="text-right" >
							<a href="<?php the_permalink(); ?>" class="button" >Learn More <i class="fal fa-arrow-right right"></i></a>
						</div><!-- .text-right -->
					</div><!-- .tab-pane #<?php the_title(); ?> -->
					<?php $tabCount2++; wp_reset_postdata(); endwhile; ?>
				</div><!-- .tab-content -->
				<?php endif; ?>
			</div><!-- .col-sm -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #solutions-content -->

<?php get_footer(); 
