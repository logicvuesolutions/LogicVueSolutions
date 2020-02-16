
<?php get_header(); ?>


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


<?php get_footer(); 