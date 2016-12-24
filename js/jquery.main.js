'use strict';

/* smartresize
================================================== */
(function($,sr){

	// debouncing function from John Hann
	// http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
	var debounce = function (func, threshold, execAsap) {
			var timeout;

			return function debounced () {
					var obj = this, args = arguments;
					function delayed () {
							if (!execAsap)
									func.apply(obj, args);
							timeout = null;
					};

					if (timeout)
							clearTimeout(timeout);
					else if (execAsap)
							func.apply(obj, args);

					timeout = setTimeout(delayed, threshold || 100);
			};
	}
	// smartresize 
	jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };
})(jQuery,'smartresize');

function run()
{
	var fName = arguments[0],
		aArgs = Array.prototype.slice.call(arguments, 1);
	try {
		fName.apply(window, aArgs);
	} catch(err) {
		console.log(fName, 'Oops...');
	}
};

/* google map
================================================== */
function g_map ()
{
	var maps = $('.g_map');

	maps.each(function() {
		var current_map = $(this);
		var latlng = new google.maps.LatLng(current_map.attr('data-longitude'), current_map.attr('data-latitude'));
		//var latlngmarker = new google.maps.LatLng(current_map.attr('data-marker-longitude'), current_map.attr('data-marker-latitude'));
		var point = current_map.attr('data-marker');

		var myOptions = {
			zoom: 14,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			mapTypeControl: false,
			scrollwheel: false,
			draggable: true,
			panControl: false,
			zoomControl: false,
			disableDefaultUI: true
		};

		var map = new google.maps.Map(current_map[0], myOptions);

		var marker = new google.maps.Marker({
			map: map,
			icon: {
				size: new google.maps.Size(111,100), //marker size
				origin: new google.maps.Point(0,0),
				anchor: new google.maps.Point(111,50),
				url: point
			},
			position: latlng
		});

		google.maps.event.addDomListener(window, "resize", function() {
			var center = map.getCenter();
			google.maps.event.trigger(map, "resize");
			map.setCenter(center);
		});
	});
};

/* slides
================================================== */
function slides ()
{
	$('.content-slider').each(function () {
		var $this = $(this),
			parent = $this.parent();

		$this.superslides({
			animation: $this.data('animation') != 'undefined' ? $this.data('animation') : '',
			play: 8000,
			animation_speed: 1000,
			inherit_width_from: parent,
			inherit_height_from: parent
		});
	});
};

/* boxer gall
================================================== */
function gall ()
{
	$("a[data-gallery]").boxer({
		fixed: true,
		videoWidth: 800
	});
};

function ValidateEmail(mail) {
	var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if (reg.test(mail))
	{
		return (true);
	}
	return (false);
}

$(document).ready(function() {
	var OheaderLogo = $('#header-logo'),
		Omenu,
		OmobMenu = $('#mobile-menu-container'),
		OmobNav = $('#mobile-navigation');

	$("html").niceScroll({
		cursorcolor:"#555",
		mousescrollstep: 50,
		scrollspeed: 70,
		zindex: 100,
		cursorborderradius: 0,
		cursorborder:0,
		horizrailenabled: false,
		cursorfixedheight:120,
		cursorwidth:"10px"
	});

	$('.matchHeight-container').each(function() {
		$(this).find('.box').matchHeight({
			byRow: true,
			property: 'min-height',
		});
	});
	
	/* contact form
	================================================== */
	$("#contact_form").find("#sbmt").click(function() {
		var user_name	 		= $("#contact_form").find("input[name=user_name]").val();
		var email		 		= $("#contact_form").find("input[name=email]").val();
		var user_message 		= $("#contact_form").find("textarea[name=user_message]").val();
		var email_validation	= ValidateEmail(email);
		var errorMessage		= '';
		var succesMessage		= '<i class="icon-ok"></i>Your message was sent successfully.';

		if ( 10 > user_message.length || 'Your Message' == user_message ) {
			errorMessage += "<span>Please enter your message. It should have at least 10 characters.</span>";
		}
		if ( 0 == email.length || !email_validation ) {
			errorMessage += "<span>Please enter a valid e-mail address.</span>";
		}
		if ( 0 != errorMessage.length ) {
			$("#contact_form").find("div.form-message p.success").html("").css('display', 'none');
			$("#contact_form").find("div.form-message p.error").html(errorMessage).css('display', 'block');
			$("#contact_form").find("div.form-message").css('display', 'block');
			return;
		}
		else if ( 0 == errorMessage.length ) {
			$("#contact_form").find("div.form-message p.error").html("").css('display', 'none');
			$.ajax({
				url : "./handler.php",
				type: "POST",
				data : {user_name: user_name, email: email, user_message: user_message, sbmt: 1},
				success: function(data, textStatus, jqXHR)
				{
					if ('0' != data) {
						$("#contact_form").find("div.form-message p.success").html(succesMessage).css('display', 'block');
					}
					else {
						$("#contact_form").find("div.form-message p.success").html('<p>Email Error!</p>').css('display', 'block');
					}

					$("#contact_form").find("div.form-message").css('display', 'block');
				},
				error: function (jqXHR, textStatus, errorThrown)
				{

				}
			});

			return;
		}
	});


	/* mobile menu
	================================================== */
	Omenu = $('#menu-open').on('click' , function (e) {
		e.preventDefault();

		//$(this).toggleClass('active');

		OmobMenu.fadeIn(300, function () {
			OmobNav.find('ul').addClass('visible');
		});

		OheaderLogo.hide();
	});

	function hideMobileMenu () {
		OmobMenu.fadeOut(300, function () {
			OmobNav.find('ul').removeClass('visible');
		});

		OheaderLogo.show();
	}

	$('#menu-close').on('click' , function (e) {
		e.preventDefault();

		hideMobileMenu();
	});

	$(window).smartresize(function(){
		if ($(this).width() > 767) {
			hideMobileMenu();
		}
	});

	OmobNav.find('>ul>li').hover(function(){
		var $this = $(this),
			OdropDown = $this.children('.dropdown');

		if ( OdropDown.length > 0 ) {
			OdropDown.stop().slideDown({
				duration: 350,
				easing: 'easeInQuad'
			});
		};

	}, function(){
		var $this = $(this),
			OdropDown = $this.children('.dropdown');

		if ( OdropDown.length > 0 ) {
			OdropDown.stop().slideUp({
				duration: 350,
				easing: 'easeOutQuad'
			});
		};
	});


	/* google map
	================================================== */
	run(g_map);

	/* slides
	================================================== */
	run(slides);

	/* boxer gall
	================================================== */
	run(gall);


	$('input[type=text], input[type=email], input[type=tel], input[type=password], textarea').each(function() {
		var $this = $(this);

		$this.attr('data-placeholder', $this.attr('placeholder'));
		$this.removeAttr('placeholder');

		$this.val() == '' && $this.val($this.attr('data-placeholder'));
	}).focusin(function() {
		var $this = $(this);

		$this.val() == $this.attr('data-placeholder') && $this.val('');
	}).focusout(function() {
		var $this = $(this);

		$this.val() == '' && $this.val($this.attr('data-placeholder'));
	});
});