<?php get_header(); ?>

            <section class="space--sm">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                               <div class="row">
									<div class="col-sm-12">
										<?php echo '<h1>';the_archive_title();echo '</h1>'; ?>
										<?php the_archive_description( '<p class="lead">', '</p>' ); ?>
									</div>
								</div>
								<!--end of row-->
                                <hr>
                                <div class="row">
                                        <div class="masonry__item col-md-4 col-sm-6"></div>
                                        
											<?php
											if ( have_posts() ) : ?>

												<?php
												/* Start the Loop */
												while ( have_posts() ) : the_post(); ?>
													<?php get_template_part( 'template-parts/loop-articles-horizontal', '' ); ?>
												<?php
												endwhile; else :

												get_template_part( 'template-parts/content', 'none' );

											endif; ?>

                                        <!--end item-->
                                </div>
                                <!--end row-->
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="clearfix"></div>
                </div>
                <!--end of container-->
            </section>

<?php get_footer(); ?>