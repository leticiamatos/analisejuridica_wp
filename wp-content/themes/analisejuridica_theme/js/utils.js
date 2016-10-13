jQuery.noConflict();

jQuery(function($) {

	// Fancybox Galery modal
	$(".fancybox").fancybox({
		openEffect  : 'none',
		closeEffect	: 'none'
	});

	// Home Highlight Slide
	var destaque_slider = $('.destaque_slider').bxSlider({
		infiniteLoop: true,
		pager: false,
		auto: false,
		video: true,
		mode: 'fade'
	});

	// Video on Bx slider
	$(".video_cntt").each(function() {
		$(this).fitVids();
	});
	$("body.single .video_wpr").each(function() {
		$(this).fitVids();
	});

	$('.colunistas_slider').bxSlider({
		minSlides: 2,
		maxSlides: 6,
		slideWidth: 225,
		speed: 2000,
		infiniteLoop: false,
		slideMargin: 0
	})

	highlight_slider = $('.highlight_slider').bxSlider({
		speed: 300,
		infiniteLoop: true,
		slideMargin: 0,
		auto: false,
		controls: false,
		pager: false,
		pause: 6000,
		mode: "fade"
	});

    $( "#prefooter-tabs01, #prefooter-tabs02" ).tabs({
		show: { effect: "fade", duration: 800 },
		hide: { effect: "fade", duration: 800 }
	});

	$('.slide_link').each(function() {
		$(this).click( function(e){
			var slide_order = $(this).attr('data-slideorder');
			// console.log(slide_order);
			highlight_slider.goToSlide(slide_order);
		})
	});

	$first_click = true;
	$('.postlist_item .video_link').each(function() {
		$(this).click( function(e){
			e.preventDefault();

			var video_id = $(this).attr('data-videoid');
			var container_id = $(this).attr('data-videocntt');
			var post_link = $(this).attr('data-post-href');

			var embed_code = '<iframe src="http://www.youtube.com/embed/'+ video_id +'?rel=0&modestbranding=1&showinfo=0&controls=1&theme=light"  frameborder="0" allowfullscreen ></iframe>';

		    $('#' + container_id + ' .video_cntt').html(embed_code);
		    // console.log(video_id);
		    $('#video_more_link').attr('href', post_link);
		    
		    if($first_click){
		    	$('#video_more_link').parent().addClass('visible');
		    	$('#video_more_link').parent().addClass('animate');
		    	$('#video_more_link').parent().removeClass('animate2');
				$first_click = false;
		    }else{
		    	$('#video_more_link').parent().toggleClass('animate');
		    	$('#video_more_link').parent().toggleClass('animate2');
				$first_click = true;
		    }
			return false;
		});
	});
	if( $('.videodestaque') ){
		var video_id = $('.videodestaque').attr('data-videoid');
		var container_id = $('.videodestaque').attr('data-videocntt');
		var embed_code = '<iframe src="http://www.youtube.com/embed/'+ video_id +'?rel=0&modestbranding=1&showinfo=0&controls=1&theme=light"  frameborder="0" allowfullscreen ></iframe>';

	    $('#' + container_id + ' .video_cntt').html(embed_code);
	}

	// $(".bxlider_link").click(function() {
	// 	slide_instance = false;
	// 	if (bxslide_id == 'destaque_slider'){
	// 		slide_instance = destaque_slider;
	// 	}
	// 	slide_instance.goToSlide(slide_number);
	// 	slide_instance.reloadSlider();;
	// });
	
	$( ".post , .page" ).each(function() {
  		$(this).addClass('post-item');
	});

	function scrollMenuPanel(){
	  	var topPage = $(this).scrollTop();

		// if($('body').hasClass('home')){
		//  	//var video_height = $('.home_panel').height();
		//  	var scrollPosition = $('.fixed').offset().top;
		//  	var top_number = scrollPosition;

		// 	if (topPage >= 0 && topPage < scrollPosition){
		// 		$('body').addClass('header_extended');
		// 		$('body').removeClass('header_normal');
		// 	}else if (scrollPosition < 0 || topPage < 0){
		// 		$('body').addClass('header_extended');
		// 		$('body').removeClass('header_normal');
		// 	}else {
		//   		$('body').addClass('header_normal');
		//   		$('body').removeClass('header_extended');
		// 	}
		// } else{
		// 	//var video_height = $('.home_panel').height();
		//  	var scrollPosition = $('.fixed').offset().top;

			if (topPage > 0){
				$('body').addClass('header_normal');
				$('body').removeClass('header_extended');
			}else{
				$('body').addClass('header_extended');
				$('body').removeClass('header_normal');
			}

		// 	if ($('body').hasClass('post-blog') || $('body').hasClass('category-blog')){
		// 		var top_number = 600;
		// 	}else{
		// 		var top_number = 200;
		// 	}
		// }

		var top_number = 100;
	  	
	      
		if (topPage < top_number) {
		  $('body').addClass('top');
		  $('body').removeClass('not-top');
		}
		else{
		  $('body').addClass('not-top');
		  $('body').removeClass('top');
		}
	}
	scrollMenuPanel();

	// Panel
	$(window).scroll(function () {
		scrollMenuPanel();
 	});

 	// Fancybox
	if ( $(".gallery")) {
		$(".gallery img").each(function( ) {
			//console.log(output);
	  		$(this).parent().addClass('fancybox');
	  		$(this).parent().attr( "data-fancybox-group", "gallery" );
		});
	}

	// Fancybox Galery modal
	$(".fancybox").fancybox({
		openEffect  : 'none',
		closeEffect	: 'none'
	});
	$('.gallery-item a img').each(function(){
		img_description = $(this).attr('alt');
		$(this).parent().attr( 'title', img_description );
	});	
	$('body.patrocinadores .gallery-item a').each(function(){
		img_url = $(this).attr('title');
		// console.log(img_url);
		$(this).attr( { href: img_url, target: "_blank"});
	});

    $( "#menu-primary" ).menu();

	// Menu Dropdown 
	// $( ".menu_link" ).mouseenter(function() {
	// 	$( ".menu_cntt" ).toggleClass("active");
	// });
	$( ".menu_link" ).click(function() {
		$( ".menu_cntt" ).toggleClass("active");
	});
	$('.menu_cntt').mouseleave(function() {
		$( ".menu_cntt" ).removeClass("active");
	});

	// Hover effect search form
	$('.hover_effect').click(
		function(){
			$(this).addClass('active');
		}, function(){
			$(this).removeClass('active');
	});

	// Banner Area - Abrir em nova página
	$('.adv_area a, .adv-area a').each(function(){
		$(this).attr("target","_blank");
	})
	// Home - All post links oppening on a new tab
	$('body.home prefooter_post-list a, body.home .author-item a.link, body.home .noticias a.link ').each(function(){
		$(this).attr("target","_blank");
	})

})

// Responsive debugger script
jQuery(document).ready(function ($) {
	var MEASUREMENTS_ID = 'measurements'; // abstracted-out for convenience in renaming
	$("body").append('<div id="'+MEASUREMENTS_ID+'"></div>');
	$("#"+MEASUREMENTS_ID).css({
	    'position': 'fixed',
	    'bottom': '0',
	    'right': '0',
	    'background-color': 'black',
	    'color': 'white',
	    'padding': '5px',
	    'font-size': '10px',
	    'opacity': '0.4',
	    'font-family': 'Arial, Sans',
	    'z-index': '100'
	});
	getDimensions = function(){
	    return $(window).width() + ' (' + $(document).width() + ') x ' + $(window).height() + ' (' + $(document).height() + ')';
	}
	getOrientation = function(){
		if ($(window).width() >= $(window).height()){
			return 'horizontal';
		}else{
			return 'vertical';
		}
	}
	setOrientation = function(){
	    if (getOrientation() == 'vertical' && !$('body').hasClass('vertical')){
	    	$('body').addClass('vertical');
	    } else if (getOrientation() == 'horizontal' && $('body').hasClass('vertical')){
	    	$('body').removeClass('vertical');
	    }
	}
	setOrientation();
    
	$("#"+MEASUREMENTS_ID).text(getDimensions());
	$(window).on("resize", function(){
	    $("#"+MEASUREMENTS_ID).text(getDimensions());
	    setOrientation();
	});
    
    
 });
