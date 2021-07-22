<section class="static-hero">
	<?php if ( has_post_thumbnail() ): ?>
	
	<div class="jumbotron jumbotron-fluid mb-0" id="hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)),  url('<?php the_post_thumbnail_url();?>');">
	
	<?php else: ?>
		
	<div class="jumbotron jumbotron-fluid mb-0" id="hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)),  url('http://library.hudsoncreative.com/wp-content/uploads/sites/128/2021/03/hero-placeholder.jpg');">
		
	<?php endif;?>
	
	<?php if( have_rows('hero') ): ?>
    <?php while( have_rows('hero') ): the_row(); 

        // Field Group is titled: Hero Section in Library.
        // The WP featured image is used as the hero image.
        // 
        $header = get_sub_field('hero_header');
        $subtext = get_sub_field('hero_subtext');
        $link = get_sub_field('hero_button');
        ?>
		
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
	<div class="container p-5 d-flex" align="center">
		<div class="static-hero-inner">
			<h1 class="display-4">Hero Header Text</h1>
			<p class="lead">Hero subtext</p>
			<a href="#" class="btn btn-primary">Button <i class="fas fa-chevron-circle-right"></i></a>
		</div>
	  </div>
	</div>

	<?php endif; ?>
	
</section>
