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
			<i class="fal fa-angle-down color-blue"></i>
		</div><!-- #indicate-more -->
	</div><!-- .row -->
</div><!-- .container -->

<div id="solutions-menu" >
	<?php $args = array('post_type' => 'solutions', 'order' => 'ASC' ); 
	$solutionQuery = new WP_Query( $args );  if ($solutionQuery->have_posts() ): $tabCount=0; ?>
	<ul class="nav nav-tabs" role="tablist" >
		<?php while ( $solutionQuery->have_posts() ): $solutionQuery->the_post(); ?>
		<li class="nav-item" >
			<a class="nav-link <?php if($tabCount==0){ echo 'active'; }  ?>" id="<?php the_title(); ?>-tab" data-toggle="tab" href="#<?php the_title(); ?>" role="tab" aria-controls="<?php the_title(); ?>" ><?php the_title(); ?></a>
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
					<div class="tab-pane fade <?php if($tabCount2==0){ echo 'show active'; }  ?>" id="<?php the_title(); ?>" role="tabpanel" aria-labelledby="<?php the_title(); ?>-tab">
						<?php the_content(); ?>
						
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