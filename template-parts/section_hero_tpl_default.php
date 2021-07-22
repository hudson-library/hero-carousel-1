    <section id="home" class="home-section theme-main home-banner">
    <?php if( have_rows('section_1') ): 

	while( have_rows('section_1') ): the_row(); 
    $image = get_sub_field('image');
		$link = get_sub_field('link');
		
		?>
      <div class="home-effect-bg"><img src="../wp-content/themes/cityhive.com/img/home-effect.svg" title="" alt="Cityhive Page Seperator" ></div>
      <div class="container container-large p-50px-t p-50px-lr md-p-15px-lr">
        <div class="row align-items-center p-100px-tb sm-p-30px-b">
          <div class="col-lg-5 p-30px-lr sm-p-0px-t sm-p-30px-b">
             <h5><?php the_sub_field('small_title'); ?></h5><!--Testing-->
            <h1><?php the_sub_field('title'); ?></h1>
            <p><?php the_sub_field('description'); ?></p>
            <div class="btn-bar">
              <a class="btn btn-theme-2nd" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a>
            </div>
          </div> <!-- col -->
          <div class="col-lg-7 right-img md-m-30px-t">
            <img style="width: 100%;" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </div>
        </div> <!-- row -->
      </div>
      <?php endwhile; ?>
	
<?php endif; ?>
    </section>
