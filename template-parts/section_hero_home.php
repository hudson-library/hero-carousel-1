    <section id="home" class="home-section theme-main home-banner">
    <?php if( have_rows('section_1') ): 

	while( have_rows('section_1') ): the_row(); 
    $image = get_sub_field('image');
		$link = get_sub_field('link');
		
		?>
      <div class="home-effect-bg"><img src="https://cityhive.com/wp-content/themes/cityhive.com/img/home-effect.svg" title="Cityhive | Resident Referrals Made Easy" alt="Cityhive | Resident Referrals Made Easy" ></div>
      <div class="container container-large p-50px-t sm-p-0px-t p-50px-lr md-p-15px-lr">
        <div class="row align-items-center p-100px-tb sm-p-30px-b">
          <div class="col-lg-5 p-30px-lr sm-p-0px-t sm-p-30px-b">
            
            <h1><?php the_sub_field('hero_title'); ?></h1>
            <p><?php the_sub_field('description'); ?></p>
            <div class="m-30px-t">
                <a class="btn btn-theme-2nd" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a>
              </div>
          </div> <!-- col -->
          <div class="col-lg-7 right-img md-m-30px-t">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </div>
        </div> <!-- row -->
      </div>
      <?php endwhile; ?>
	
<?php endif; ?>
    </section>
