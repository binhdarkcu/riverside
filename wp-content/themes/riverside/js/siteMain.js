// JavaScript Document
var siteMain = (function() {
	// PARAMATER

	// INIT
	function init(){
        checkScrolledHeader();
		initEvent();
	}

    function checkScrolledHeader(){
        if(jQuery('header.page_header').hasClass('scrolled')){
            console.log('has scrolled')
            jQuery('header.page_header .header_top_bottom_holder .header_bottom').css('background-color',jQuery('header.page_header').attr('data-background'));
        }else {
            console.log('no scrolled')
            jQuery('header.page_header .header_top_bottom_holder .header_bottom').css('background-color','rgba(0, 0, 0, 0.00)');
        }
    }

	function initEvent(){
        jQuery(window).scroll(function(){
            checkScrolledHeader()
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