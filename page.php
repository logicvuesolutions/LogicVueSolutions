
<?php get_header(); ?>



<?php get_header(); ?>

<div class="<?php the_field('class'); ?> intro" >
	<div id="solutions-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'solutions' ) ); ?>
	</div><!-- #solutions-menu -->

	<div class="container centered" >
		<div class="row" >
			<div class="col-lg-5 intro-text" >
					<?php the_field('intro'); ?>
			</div><!-- .col -->
			<div class="col" >
				<div class="image-wrapper" style="background-image:url(<?php the_field('intro_image'); ?>);" ></div>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .content -->

<div class="<?php the_field('class'); ?> content" >
	<div class="container centered" >
		<div class="row" >
			<div class="col" >
				<?php the_field('content'); ?>
				
				<?php if( have_rows('repeater') ): while (have_rows('repeater') ): the_row(); ?>
				<div class="row repeater-row" >
					<div class="col-sm-<?php the_sub_field('col-sm'); ?> col-md-<?php the_sub_field('col-lg'); ?>" >
						<div class="image-wrapper" style="background-image:url(<?php the_sub_field('repeater_image'); ?>);" ></div>
					</div><!-- .col -->
					<div class="col" >
						<?php the_sub_field('repeater_content'); ?>
					</div><!-- .col -->
				</div><!-- .row -->
				<?php endwhile; endif; ?>
				
				<?php the_field('closing_content'); ?>
				</div><!-- .row -->
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .content -->

<?php get_footer(); 