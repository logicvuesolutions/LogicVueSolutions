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

<div id="solutions-menu" class="d-none d-md-block" >
	<!-- run the loop for custom post types -->
	<?php $args = array('post_type' => 'solutions', 'order' => 'ASC' ); 
	$solutionQuery = new WP_Query( $args );  if ($solutionQuery->have_posts() ): $tabCount=0; ?>
	<ul class="nav nav-tabs" role="tablist" >
		<?php while ( $solutionQuery->have_posts() ): $solutionQuery->the_post(); ?>
		<li class="nav-item" >
			<a class="nav-link" id="<?php the_title(); ?>-tab" data-toggle="tab" href="" role="tab" aria-controls="<?php the_title(); ?>" ><?php the_title(); ?></a>
		</li>
		<?php $tabCount++; wp_reset_postdata(); endwhile; ?>
	</ul><!-- .nav-tags -->
	<?php endif; ?>
</div><!-- #solutions-menu -->

<?php get_footer(); 
