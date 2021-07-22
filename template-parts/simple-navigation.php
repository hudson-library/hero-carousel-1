<nav class="navbar header-nav navbar-expand-lg">
      <div class="container container-large p-50px-lr p-20px-tb md-p-5px-tb">
        <!-- Brand -->
        <a class="navbar-brand" href="#" title="Hudson Library">
          <img id="nav-logo" style="max-width: 190px;" src="http://library.hudsoncreative.com/wp-content/uploads/sites/128/2021/02/hudson-library-logo.png" alt="Hudson Library Logo">
          
        </a>
        <!-- / -->

        <!-- Mobile Toggle -->
        <button id="menuBtn" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars navbar-toggler-icon"></i>
			<i class="fas fa-times close"></i>
        </button>
        <!-- / -->

        <!-- Top Menu -->
        <div class="collapse navbar-collapse show" id="navbar">
           <?php wp_nav_menu( array(
				'theme_location'  => 'primary',
				'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarSupportedContent',
				'menu_class'      => 'nav navbar-nav ml-auto', // ml-auto aligns items to right. use mr-auto to left align items
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker(),
			) ); ?>
                                

        </div>
        <!-- / -->
    
      </div><!-- Container -->
    </nav> <!-- Navbar -->