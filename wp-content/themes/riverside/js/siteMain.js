// JavaScript Document
var siteMain = (function() {
	// PARAMATER

	// INIT
	function init(){
        checkScrolledHeader();
		initEvent();
		createScrollNav();
	}
	var sections = jQuery('.section')
  	, nav = jQuery('.main_menu')
  	, nav_height = nav.height();


    function checkScrolledHeader(){
        if(jQuery('header.page_header').hasClass('scrolled') || jQuery(window).width() <= 992){
            jQuery('header.page_header .header_top_bottom_holder .header_bottom').css('background-color',jQuery('header.page_header').attr('data-background'));
        }else {
            jQuery('header.page_header .header_top_bottom_holder .header_bottom').css('background-color','rgba(0, 0, 0, 0.00)');
        }
    }

	function initEvent(){
        jQuery(window).scroll(function(){
            checkScrolledHeader()
        });
	}

	function createScrollNav(){
		jQuery(".scroll-nav li a").click(function(e) {

		 jQuery('.scroll-nav li a').removeClass('active');
		  var navHeight = jQuery("header").height();
		  var el = jQuery(this).attr("href");
		  if(el.indexOf('#') >= 0) {
			  jQuery(this).addClass('active');
			  e.preventDefault();
			  jQuery('html, body').animate({
  		        scrollTop: jQuery(el).offset().top-navHeight
  		    }, 1000);
  			return false
		  }else{
			  window.href = el
		  }

		});

		jQuery(window).on('scroll', function () {
		  var cur_pos = jQuery(this).scrollTop();

		  sections.each(function() {
		    var top = jQuery(this).offset().top - nav_height,
		        bottom = top + jQuery(this).outerHeight();

		    if (cur_pos >= top && cur_pos <= bottom) {
		      nav.find('a').removeClass('active');
		      sections.removeClass('active');

		      jQuery(this).addClass('active');
		      nav.find('a[href="#'+jQuery(this).attr('id')+'"]').addClass('active');
		    }
		  });
		});
	}



	// RETURN
	return {
		init:init
    }

})();

jQuery(document).ready(function(){
	siteMain.init();
});
