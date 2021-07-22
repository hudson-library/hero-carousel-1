<?php /*Template Name: Hero Carousel */ get_header(); ?>

  <!-- Loading -->
  <div id="loading">
    <div class="load-circle"><span class="one"></span></div>
  </div>
  <!-- / -->
  <!--is it this page?-->

  <!-- Main -->
  <main>
	<div id="content">
		<?php get_template_part('/template-parts/section_hero_carousel') ?>	
		<section id="body">
			
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					<i class="fab fa-accessible-icon"></i>
					</div>
				</div>
			</div>
		</section>
	</div>

    

    

    
  </main>
  <!-- / -->

<!-- End -->
<?php get_footer(); ?>

<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
</script>

</body>
</html>