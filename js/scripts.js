var $ = jQuery.noConflict();

$(document).ready(function() {	

	// color schemes
	$('ul#change-style a').click(function(event) {	
		event.preventDefault();
		var appendcss = "colors-" + $(this).attr('id');
		$('head').append('<link rel="stylesheet" href="css/' + appendcss + '.css" type="text/css" />');
	});

	// mobile menu
	$('nav#mainmenu > ul').mobileMenu({
	    defaultText: 'Navigation',
	    subMenuDash: '&ndash;'
	});
	$('.select-menu').wrap('<div class="sexyselect" />');

	// init Magnific popup
	$('.popup, .gallery-icon a').magnificPopup({
	  type: 'image',
	  gallery:{enabled:true},
	  titleSrc: 'alt',
	  cursor: 'mfp-zoom-out-cur'
	});
	
	// hiding default text in form fields
	$('[placeholder]').focus(function() {
		var input = $(this);
		if (input.val() == input.attr('placeholder')) {
		  input.val('');
		  input.removeClass('placeholder');
		}
	}).blur(function() {
		var input = $(this);
		if (input.val() == '' || input.val() == input.attr('placeholder')) {
		  input.addClass('placeholder');
		  input.val(input.attr('placeholder'));
		}
	}).blur();
	
	
	//  dropdownmenu
	$('.children, .sub-menu').hide();
	$('nav ul li:has(ul)').mouseenter(function() {
		$(this).find('a').addClass('active-parent');
		$(this).find('> .children, > .sub-menu').slideDown('fast');	
	}).mouseleave(function() {
		$(this).find('a').removeClass('active-parent');
		$(this).find('> .children, > .sub-menu').hide();	
	});
	
	
	//  searchbox
	$('#sitesearch i').mouseenter(function() {
		$('#search-box').css('display','block');
	});
	$('#search-box').mouseleave(function() {
		$('#search-box').hide();
	});
	
	
	// tabs
	$('div.tabs-wrapper').find('.tab:not(:first)').hide();
	$('ul.tabs > li:first-child').addClass('active');
	
	$('ul.tabs a').click(function(event) {
		event.preventDefault();
	
		// make tab button active
		$(this).closest('ul').find('li').removeClass('active');
		$(this).closest('li').addClass('active');
		
		// hide inactive tab and show new tab
		$(this).closest('div').find('.tab').hide();
		var showme = $(this).attr('id');
		$(this).closest('div').find('.tab.' + showme).fadeIn();
	});
	
	// accordion
	$('.accordion').find('div:not(:first)').hide();
	$('.accordion > .accordion-title:first-child > a').addClass('active');

	$('.accordion > .accordion-title > a').click(function(event) {
		event.preventDefault();

		// hide all panels
	   	$(this).closest('.accordion').find('div').slideUp();

		// remove active class from all
		$(this).closest('.accordion').find('.accordion-title a').removeClass('active');
		
		// if the panel is closed, open it
	   	if($(this).parent().next().is(':hidden'))
		{
			$(this).parent().next().slideDown();
			$(this).addClass('active');
		}

	   	return false;
	});
	
	
});

$(window).load(function() {	
	
});




