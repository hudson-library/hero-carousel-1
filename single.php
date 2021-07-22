<?php get_header(); ?>

<?php get_template_part('template-parts/sticky-buttons'); ?> <!-- Sticky Buttons -->


<div id="content"></div>

<div class="section margin-top-65 margin-bottom-65">
    <div class="container">
                 <div class="content sidebar_content">
                <div class="row">
                
                <div class="col-lg-9 col-md-12 col-md-push-3">
                
                <?php get_template_part( 'template-parts/content-single', $slug ); ?>
                </div>
                
                <div class="col-lg-3 col-md-12 col-md-pull-9">
                <h3 class="upcoming_events">Upcoming Events</h3>
                
                <?php query_posts( 'posts_per_page=6&category_name=events' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    
    <?php if ( has_post_thumbnail() ) { ?>
    <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="">
        <?php the_post_thumbnail( 'medium', array('class' => 'img-responsive') ); ?>
        </a>
        <?php } else { ?>
        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
        <img src="image-path.jpg" alt="<?php the_title(); ?>" class="img-responsive">
        </a>
    <?php } ?>
    <p class="event_title_sidebar"><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
    <p class="event_date_sidebar"><?php the_field('event_date'); ?></p>

<?php endwhile; wp_reset_query(); else : ?>
   
<?php endif; ?>
</div>
                
                
                </div>
                    
                </div>
            </div>
        </div>
   
	


<?php get_footer(); ?>