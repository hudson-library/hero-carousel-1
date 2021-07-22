    <section id="home" class="home-section theme-main home-banner">
    <?php if( have_rows('section_1') ): 

	while( have_rows('section_1') ): the_row(); 
		$link = get_sub_field('link');
    $second = get_sub_field('second');	
		?>
      <div class="home-effect-bg"><img src="../wp-content/themes/cityhive.com/img/home-effect.svg" title="" alt="Cityhive Page Seperator" ></div>
      <div class="container container-large p-50px-t p-50px-lr md-p-15px-lr">
        <div class="row align-items-center p-100px-tb sm-p-30px-b">
          <div class="col-lg-5 p-30px-lr sm-p-0px-t sm-p-30px-b">
             <h5><?php the_sub_field('small_title'); ?></h5>
            <h1 style="margin-bottom: 25px;"><?php the_sub_field('title'); ?></h1>
            <p><?php the_sub_field('description'); ?></p>
            <div style="margin-top: 29px;" class="btn-bar">
              <a class="btn btn-theme-2nd" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a>
              <a style="margin-left:8%" class="btn btn-theme-2nd" href="<?php echo $second['url']; ?>" title="<?php echo $second['title']; ?>"><?php echo $second['title']; ?></a>
            </div>
          </div> <!-- col -->
          <div class="col-lg-7 md-m-30px-t">
            <iframe style="margin-top:8px; border: 5px solid #f0f0f0" src="https://player.vimeo.com/video/356013156" width="889" height="440" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
          </div>
        </div> <!-- row -->
      </div>
      <?php endwhile; ?>
	
<?php endif; ?>
    </section>
