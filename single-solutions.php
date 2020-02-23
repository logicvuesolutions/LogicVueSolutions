
<?php get_header(); ?>
<div class="single-solution" >

	<div id="solutions-menu" style="top:90px;">
		<?php wp_nav_menu( array( 'theme_location' => 'solutions' ) ); ?>
	</div><!-- #solutions-menu -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="content" >
		<div class="container-fluid" >
			<div class="row" >
				<?php if ( get_field( 'image' ) ): ?>
				<div class="col-sm-12 offset-md-1 col-md-6" >
					<h1><?php the_field('header'); ?></h1>
					<?php the_field('content'); ?>
					<div class="text-right" >
						<a href="/contact" class="button" >Start a Project</a>
					</div><!-- .text-right -->
					
				</div><!-- .<?php the_field('content_width'); ?> -->
				
				
				<div class="col-sm-12 col-md" >
					<div class="image-wrapper" style="background-image:url(<?php the_field('image'); ?>); background-position: <?php the_field('image_position'); ?>" ></div>
				</div><!-- .<?php the_field('image_width'); ?> -->
				
				<?php else: ?>
				<div class="col-sm-12 offset-md-2 col-md-8" >
					<h1><?php the_field('header'); ?></h1>
					<?php the_field('content'); ?>
					<div class="text-right" >
						<a href="/contact" class="button" >Start a Project <i class="fal fa-arrow-right right"></i></a>
					</div><!-- .text-right -->
					
				</div><!-- .<?php the_field('content_width'); ?> -->
				
				<?php endif; ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .content -->
	
	<?php endwhile; endif; ?>
	
</div><!-- .single-solution -->
<?php get_footer(); 