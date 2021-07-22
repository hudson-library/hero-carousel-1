<section class="static-hero">	
	<div class="owl-carousel owl-theme">	
	<?php if( have_rows('hero_carousel') ): ?>
    <?php while( have_rows('hero_carousel') ): the_row(); 

        // Repeater is titled: Hero Carousel in Library ACF.
        //
        // 
		$image = get_sub_field('image');
        $header = get_sub_field('hero_text');
        $subtext = get_sub_field('hero_subtext');
        $link = get_sub_field('hero_button');
        ?>

	<div class="jumbotron jumbotron-fluid mb-0" id="hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)),  url('<?php echo esc_url($image['url']); ?>');">
		
	<div class="container p-5 d-flex" align="center">
		<div class="static-hero-inner">
			<h1 class="display-4"><?php echo $header; ?></h1>
			<p class="lead"><?php echo $subtext; ?></p>
			<a href="<?php echo esc_url( $link['url'] ); ?>" class="btn btn-primary"><?php echo esc_attr( $link['title'] ); ?> <i class="fas fa-chevron-circle-right"></i></a>
		</div>
	  </div>
	</div>

	<?php endwhile; ?>
	
	<?php else: ?>
	<div class="jumbotron jumbotron-fluid mb-0" id="hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)),  url('<?php the_post_thumbnail_url();?>');">
	<div class="container p-5 d-flex" align="center">
		<div class="static-hero-inner">
			<h1 class="display-4">Hero Header Text</h1>
			<p class="lead">Hero subtext</p>
			<a href="#" class="btn btn-primary">Button <i class="fas fa-chevron-circle-right"></i></a>
		</div>
	  </div>
	</div>
	
	<?php endif; ?>
		
	</div>
	
</section>
