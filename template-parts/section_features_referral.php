<section class="p-50px-t section" id="about">
    <?php if( have_rows('section_2') ): 

	while( have_rows('section_2') ): the_row(); ?>
      <div class="container">
        <div class="row justify-content-center m-45px-b md-m-25px-b">
          <div class="col-md-12">
            <div class="section-title text-center">
              <h6 class="theme-color"><?php the_sub_field('small_header'); ?></h6>
              <h2 class="theme-after"><?php the_sub_field('title'); ?></h2>
              <p style="max-width: 900px; margin-left: auto; margin-right: auto;"><?php the_sub_field('description'); ?></p>
              <p style="color: #000; margin-top: 20px; font-weight: bold"><?php the_sub_field('strong_description'); ?>
</p>
            </div>
          </div> <!-- col -->
        </div>
          <div class="row">
            <div class="col-lg-4 col-md-4 m-15px-tb" style="display: flex;">
            <?php if( have_rows('feature_1') ): 

	while( have_rows('feature_1') ): the_row(); 
		$link = get_sub_field('link');
		
		?>
              <div class="feature-box text-center" style="width: 100%">
              <div class="hex_holder">
                   <a href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>">
                    <div class="icon hexagon">
                      <?php the_sub_field('icon'); ?>
                    </div>
              </a>
                </div>
                <h4><?php the_sub_field('title'); ?></h4>
                <p><?php the_sub_field('description'); ?></p>
               <!-- <a class="btn btn-theme-2nd" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a> -->
              </div> <!-- feature -->
              <?php endwhile; ?>
	
<?php endif; ?>
            </div> <!-- col -->

             <div class="col-lg-4 col-md-4 m-15px-tb" style="display: flex;">
            <?php if( have_rows('feature_2') ): 

	while( have_rows('feature_2') ): the_row(); 
		$link = get_sub_field('link');
		
		?>
              <div class="feature-box text-center" style="width: 100%">
              <div class="hex_holder">
               <a href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>">
                    <div class="icon hexagon">
                      <?php the_sub_field('icon'); ?>
                    </div>
              </a>
                </div>
                <h4><?php the_sub_field('title'); ?></h4>
                <p><?php the_sub_field('description'); ?></p>
              <!--  <a class="btn btn-theme-2nd" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a> -->
              </div> <!-- feature -->
              <?php endwhile; ?>
	
<?php endif; ?>
            </div> <!-- col -->

             <div class="col-lg-4 col-md-4 m-15px-tb" style="display: flex;">
            <?php if( have_rows('feature_3') ): 

	while( have_rows('feature_3') ): the_row(); 
		$link = get_sub_field('link');
		
		?>
              <div class="feature-box text-center" style="width: 100%">
              <div class="hex_holder">
              <a href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>">
                    <div class="icon hexagon">
                      <?php the_sub_field('icon'); ?>
                    </div>
              </a>
                </div>
                <h4><?php the_sub_field('title'); ?></h4>
                <p><?php the_sub_field('description'); ?></p>
            <!--    <a class="btn btn-theme-2nd" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a> -->
              </div> <!-- feature -->
              <?php endwhile; ?>
	
<?php endif; ?>
            </div> <!-- col -->

             
          </div> <!-- row -->
      </div>
      <?php endwhile; ?>
	
<?php endif; ?>
    </section>
