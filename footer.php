<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hudson.social
 */

?>

 <!-- Footer -->
  <footer class="footer footer-dark">
    <section class="footer-section">
      <div class="container">
        <div class="row">

          <div class="col-6 col-md-4 col-lg-2 sm-m-15px-tb">
            <h4 class="font-alt"><?php the_field('footer_section_2_title', 'option'); ?></h4>
            <?php wp_nav_menu( array(
                                    'theme_location'    => 'menu-2',
                                    'depth'      => 1,
                                    'container'  => false,
                                    'menu_class' => 'fot-link',
                                    'menu_id' => '',
                                    'link_class'   => '',
                                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                    'walker' => new wp_bootstrap_navwalker())
                                ); ?>
          </div> <!-- col -->

     
        </div>
        
        <div class="footer-copy">
          <div class="row">
            <div class="col-12">
              <p>© <?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' ); ?>. All Rights Reserved.</p>
            </div><!-- col -->
          </div> <!-- row -->
        </div> <!-- footer-copy -->

      </div> <!-- container -->   
    </section>
  </footer>
  <!-- / -->

<?php wp_footer(); ?>


</body>
</html>