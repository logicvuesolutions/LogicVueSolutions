<?php if (!is_front_page()) : ?>
<div class="container-fluid" id="footer" >
	<div class="row" >
		<div class="col-sm offset-lg-2 col-lg-9" >
			
			<?php if( have_rows('quotes','options') ): $count = 0; ?>
			<div id="quote-wrapper" >
				<div id="quoteCarousel" class="carousel" data-ride="carousel">
					<div class="carousel-inner" >
					<h2>What Customers are Saying: </h2>
					<?php while( have_rows('quotes','options') ): the_row();?>
						<div class="carousel-item <?php if($count==0){echo 'active';} ?>" >
							<div class="row" >
								<div class="col-sm col-lg-2" >
									<div class="image-wrapper" style="background-image:url(<?php the_sub_field('image'); ?>); " ></div>
								</div><!-- .col-sm -->
								<div class="col-sm col-lg-9" >
									<p class="quote" ><?php the_sub_field('quote'); ?></p>
									<h5>- <?php the_sub_field('quote_owner'); ?></h5>
								</div><!-- .col-sm -->
							</div><!-- .row -->
						</div><!-- .carousel-item -->
					<?php $count++; wp_reset_postdata(); endwhile; ?>
					</div><!-- .carousel-inner -->
				</div><!-- #quoteCarousel -->
			</div><!-- #quote-wrapper -->
			<?php endif ;?>		
			
			
		</div><!-- .col -->
	</div><!-- .row -->
</div><!-- .container #footer -->
<?php endif; ?>