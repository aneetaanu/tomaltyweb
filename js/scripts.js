/*Generates the elements for the mobile menu*/
function generateMenu(selector) {
	var menu = $(selector).html();
	$("body").prepend("<div id='mobile-navigation'><span class='menu'>Menu</span><ul>" + menu + '</ul></div>');
}

/* Iterates through the list of menu options and determines if the item has a submenu */
function itemHasChildren(item) {
	$(item).each(function(i) {
		if ($(this).children('ul').length) {
			$(this).addClass('hasChildren');
			$(this).children('a').append('<i class="icon">&#61694;</i>')
		}
	});
};


/* Adjusts the submenu position so it does not overflow into the window boundaries*/
function submenuPosition () {
	var _submenu = $(this).children('ul');
	var _submenuWidth = _submenu.outerWidth();
	var _windowWidth = $(window).width();
	var _distance = $(window).width() - $(this).offset().left;

 	if (_submenuWidth > _distance - 20) {
 		_submenu.css({
 			'left' : 'auto',
 			'right' : 0
 		});
 	} else {
 		_submenu.css({
 			'right' : 'auto',
 			'left' : 0
 		});
 	}
}


function inputClear(input) {
	$(input).focus(function () {	
		if (this.value == this.defaultValue) {
			this.value = "";
		}
	});
	
	$(input).blur(function () {	
		if (this.value == "") {
			this.value = this.defaultValue;
		}
	});
}


/* Shows the menu items*/
function showMenu(menu) {
	$(menu).addClass('show', 200);
}

/* Hides the menu items*/
function hideMenu(menu) {
	$(menu).removeClass('show', 200);
}

function resizeBackstretch(container, header, footer) {
	var _doc_width = $(window).width();
	var _doc_height = $(window).height();
	var _width = $(container).width();
	var _height = $(container).height();
	var _header_height = $(header).outerHeight();
	var _footer_height = $(footer).outerHeight();

	//Edit Backstretch width
	$(container).height(_doc_height - _header_height - _footer_height);
	$(container).css({
		"top" : _header_height
	});

	if ($(window).width() <= 780) {
		$(container).width("100%");
		$(container).height("100%");
		$(container).css("left", "0");
		$(container).css("top", "0");
	}
}

function createBackstretch(selector) {
	$(selector).prepend("<div class='backstretch'></div>");
}

var equalHeight = function (selector) {
	$(selector).css("min-height", Math.max.apply(null, $(selector).map(function () {
		return $(this).outerHeight();
	}).get()));
};


//Forms
function reloadCaptcha() {
	$('#captcha').attr('src', 'let-securimage-show.php?' + Math.random() );
	return false;
}

function disableSubmit(arr, $form, options) {
	var _form = $form[0];
	$(_form).children('.submit').attr('disabled', 'disabled').css({'opacity': '0.5', 'cursor' : 'default'});
	$(_form).children('.throbber').fadeIn(100);             
}
function enableSubmit(form) {
	$(form + ' .submit').removeAttr('disabled').css({'opacity': '1', 'cursor' : 'pointer'});
	$(form + ' .throbber').fadeOut(100);
}



	

function showEmailResponse(response, statusText, xhr, form)  {

   if (response.error == 'true') {
		if (response.message == "Your Captcha Was Incorrect. Please Try Again"){
			$('input#captcha_code').addClass('error');
			$(".captcha_error").html(response.message).show();
			enableSubmit(form);
		} else {
			alert(response.message);
			enableSubmit(form);
		}
	} else {
		$(form).children('.form').slideUp(400);
		$(".form_success").delay(400).fadeIn(200);
	}
}


jQuery(document).ready(function($) {

		$('#social').css({
		'left' : '-20px'
	});

	$('#social').hover(function(){
		$(this).stop(true, false);
		$(this).animate({
			'left' : '0px'
		}, 300);
	}, function() {
		$(this).stop(true, false);
		$(this).animate({
			'left' : '-20px'
		}, 300);
	});

	jQuery(document).ready(function($) {
			$('#specialBox').animate({
				right : '0px'
			}, 1000);

			$('#specialBoxClose').click(function() {
				$('#specialBox').animate({
					right : '-=275px'
				
				}, 1000);
			});
		});

	//Menu
	var Navigation = {
		menu : '#navigation',
		menuItems : '#navigation > li',
		mobileMenu : '#mobile-navigation > ul',
		button : '#mobile-navigation .menu',
		links : '#mobile-navigation > ul > li'
	}

	generateMenu(Navigation.menu);
	itemHasChildren(Navigation.links);


	//Hide the menu if anything but the menu is clicked
	$('body').click(function(e) {
		if ($(Navigation.mobileMenu).hasClass('show')) {
			hideMenu(Navigation.mobileMenu);
		}
	});

	$(Navigation.button).click( function(e) {
		e.stopPropagation();
		//If button is clicked, hide, or else, show
		if (!$(Navigation.mobileMenu).hasClass('show')) {
			showMenu(Navigation.mobileMenu);
		} else {
			hideMenu(Navigation.mobileMenu);
		}
		e.defaultPrevented;
	});

	$(Navigation.links).click(function(e) {
		e.stopPropagation();
	});

	$('#mobile-navigation a').click(function(e) {
		var tagClicked = e.target.nodeName;
		var parent = $(this).parent('li');
		var childList  = parent.children('ul');
		var childLists = $(Navigation.links).children('ul');
		if (tagClicked == "I") {
			if (!childList.hasClass('show')) {
				childLists.not(childList).removeClass('show', 200);
				childList.addClass('show', 200);
				e.preventDefault();
			} else {
				childList.removeClass('show', 200);
			}
			e.preventDefault();
		} 
	});

	$('#slideshow .slides').carouFredSel({
		responsive: true,
		width: '100%',
		height: 420,
		scroll: {
			items: 1,
			fx: 'directscroll'
		},
		auto: {
			timeoutDuration: 7000
		},
		items: {
			visible: 1
		},
		prev :	{ button: ".prev", key: "left" },
		next :	{ button: ".next", key: "right" },
		swipe : {
			onTouch : true
		},
		onCreate: function () {
			$(window).on('resize', function () {
				var _w = $(window).width();
					var _c = 5;
					var _cw = 1000;
					var _ch = 420;
				if ($(window).width() <= 1000) {
					$('.caroufredsel_wrapper, .slides, #masthead').css('height', 420 - (_cw - _w) / 4); 
				}
				else if ($(window).width() <= 450) {
					$('.caroufredsel_wrapper, .slides, #masthead').css('height', 420 - (_cw - _w) / 3); 
				} else {
					$('.caroufredsel_wrapper, .slides, #masthead').css('height', 420); 
				}
			}).trigger('resize');
		}
	});

	$('.slide').each(function(index) {
		createBackstretch(this);
		$(".backstretch", this).backstretch(images[index], { speed: 1000, duration: 4000 });
	});
});

// track slide in booking enquiries via Google Analytics
$(document).ready(function(){
	if ($('#sliderBox').length > 0) {				   
		$('#sliderBox').click(function() {
			try{
				pageTracker._trackEvent("Reservation Slider Box", "Book Now button");
			} catch(err) { }
		});
	}
});