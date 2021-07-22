<?php get_header(); ?>

            <section class="space--sm">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                               <div class="row">
									<div class="col-sm-12">
										<?php echo '<h1>';single_cat_title();echo '</h1>'; ?>
										<?php the_archive_description( '<p class="lead">', '</p>' ); ?>
									</div>
								</div>
								<!--end of row-->
                                <hr>
                                <div class="row">
                                        
											<?php
											if ( have_posts() ) : ?>

												<?php $columns_num = 3; // The number of columns we want to display our posts ?>
												<?php $i = 0; //Counter for .row divs ?>
												
												<?php
												/* Start the Loop */
												while ( have_posts() ) : the_post(); ?>
													<?php get_template_part( 'template-parts/loop-articles-horizontal', '' ); ?>
													<?php if($i % $columns_num == $columns_num - 1 ) {  
														echo '</div> <div class="row">';
													} ?>
													<?php $i++; ?>
												<?php
												endwhile; else :

											endif; ?>
                                        <!--end item-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                	<div class="col-sm-12">
										<i class="fab fa-accessible-icon"></i>
									<?php kriesi_pagination(); ?>	
								   </div>
                                </div>
                                <!--end row-->
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="clearfix"></div>
                </div>
                <!--end of container-->
            </section>

<?php get_template_part( 'template-parts/footer-boxes', '' ); ?>
<?php get_footer(); ?>