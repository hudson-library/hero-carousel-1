/*
===========================================================================
 EXCLUSIVE ON themeforest.net
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 Template Name   : Azomia
 Author          : pxdraft
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 Copyright (c) 2017 - 
===========================================================================
*/

(function($){
	"use strict";
	var AZOM = {};
	var plugin_track = 'static/plugin/';
	$.fn.exists = function () {
        return this.length > 0;
    };

	/* ---------------------------------------------- /*
	 * Pre load
	/* ---------------------------------------------- */
	AZOM.PreLoad = function() {
		document.getElementById("loading").style.display = "none"; 
	}

	
 

    /*--------------------
        * Menu Close
    ----------------------*/
    AZOM.MenuClose = function(){
      $('.navbar-nav .nav-link').on('click', function() {
       var toggle = $('.navbar-toggler').is(':visible');
       if (toggle) {
         $('.navbar-collapse').collapse('hide');
          
       }
      });
    }

	/* ---------------------------------------------- /*
	 * Header Height
	/* ---------------------------------------------- */
	AZOM.HeaderHeight = function(){
		var HHeight = $('.header-height .fixed-header-bar').height()
	    $('header').height(HHeight);	
	}

	/* ---------------------------------------------- /*
	 * Header Fixed
	/* ---------------------------------------------- */
   
    
	AZOM.HeaderFixd = function() {
		var HscrollTop  = $(window).scrollTop();
        
	    if (HscrollTop >= 50) {
	       $('header').addClass('fixed-header');
           
	    }
	    else {
	       $('header').removeClass('fixed-header');
	    }
	}
    
    
    

	/*--------------------
        * One Page
    ----------------------*/
    AZOM.OnePage = function(){
        $('header a[href*="#"]:not([href="#"]), .got-to a[href*="#"]:not([href="#"])').on('click', function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {
              var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  if (target.length) {
                    $('html,body').animate({
                      scrollTop: target.offset().top - 70,
                      }, 1000);
                      return false;
                  }
            }
        });
    }
    
      /************* Smooth Scrolling ****************/
    
    // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .not('[href="#small-dialog"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
  


	

	/* ---------------------------------------------- /*
	 * Mega Menu
	/* ---------------------------------------------- */

	AZOM.MegaMenu = function() {
		var mDropdown = $(".m-dropdown-toggle") 
		mDropdown.on("click", function() {
	        $(this).parent().toggleClass("open-menu-parent");
	        $(this).next('ul').toggleClass("open-menu");
	        $(this).toggleClass("open");
	    });
	}

	

    /* ---------------------------------------------- /*
		* accordion
	/* ---------------------------------------------- */
	AZOM.Accordion = function() {
		$('.accordion').each(function (i, elem) {
	       	var $elem = $(this),
	           $acpanel = $elem.find(".acco-group > .acco-des"),
	           $acsnav =  $elem.find(".acco-group > .acco-heading");
	          $acpanel.hide().first().slideDown("easeOutExpo");
	         // $acsnav.first().parent().addClass("acco-active");
              $acpanel.first().hide();
	          $acsnav.on('click', function () {
	            if(!$(this).parent().hasClass("acco-active")){
	              var $this = $(this).next(".acco-des");
	              $acsnav.parent().removeClass("acco-active");
	              $(this).parent().addClass("acco-active");
	              $acpanel.not($this).slideUp("easeInExpo");
	              $(this).next().slideDown("easeOutExpo");
	            }else{
	               $(this).parent().removeClass("acco-active");
	               $(this).next().slideUp("easeInExpo");
	            }
	            return false;
	        });
	    });
	}

	



  

	/* ---------------------------------------------- /*
	 * All Functions
	/* ---------------------------------------------- */
    // loadScript
	var _arr  = {};
	function loadScript(scriptName, callback) {
	    if (!_arr[scriptName]) {
	      _arr[scriptName] = true;
	      var body    = document.getElementsByTagName('body')[0];
	      var script    = document.createElement('script');
	      script.type   = 'text/javascript';
	      script.src    = scriptName;
	      // then bind the event to the callback function
	      // there are several events for cross browser compatibility
	      // script.onreadystatechange = callback;
	      script.onload = callback;
	      // fire the loading
	      body.appendChild(script);
	    } else if (callback) {
	      callback();
	    }
	};

	// Window on Load
	$(window).on("load", function(){
		AZOM.PreLoad();
	});
	// Document on Ready
	$(document).on("ready", function(){
		
		AZOM.HeaderFixd(),
		
		AZOM.OnePage(),
	
		AZOM.HeaderHeight(),
		AZOM.MenuClose(),
		AZOM.Accordion(),
	
		AZOM.MegaMenu()
	
		
	});

	// Document on Scrool
	$(window).on("scroll", function(){
		
		AZOM.HeaderFixd();
	});

	// Window on Resize
	$(window).on("resize", function(){
		AZOM.HeaderHeight();
	});


})(jQuery);