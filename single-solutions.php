
<?php get_header(); ?>
<div class="single-solution" >

	<div id="solutions-menu" class="compressed" style="top:90px;">
		<!-- run the loop for custom post types -->
		<?php $args = array('post_type' => 'solutions', 'order' => 'ASC' ); 
		$solutionQuery = new WP_Query( $args );  if ($solutionQuery->have_posts() ): $tabCount=0; ?>
		<ul class="nav nav-tabs" role="tablist" >
			<?php while ( $solutionQuery->have_posts() ): $solutionQuery->the_post(); ?>
			<li class="nav-item" >
				<a class="nav-link " id="<?php the_title(); ?>-tab" href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
			</li>
			<?php $tabCount++; wp_reset_postdata(); endwhile; ?>
		</ul><!-- .nav-tags -->
		<?php endif; ?>
	</div><!-- #solutions-menu -->


	<div class="content" >
		<div class="container" >
			<div class="row" >
				<div class="col-sm" >
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

						<div class="text-right" >
							<a href="/contact" class="button" >Start a Project</a>
						</div><!-- .text-right -->

					<?php endwhile; endif; ?>
				</div><!-- .col-sm -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .content -->

	
	
</div><!-- .single-solution -->
<?php get_footer(); 