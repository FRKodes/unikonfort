console.log('ok!');

$('.menu-menu-top-container').addClass('collapse navbar-collapse');
$('.main-menu li').addClass('nav-item');
$('.main-menu li a').addClass('nav-link');
$('.menu-menu-top-container').addClass('collapse navbar-collapse').attr('id', 'navbarCollapse');

$('.type-post').addClass('container');

$('.main-banner-container').slick({
	infinite: true,
	autoplay: true,
	slidesToShow: 1,
	arrows: false,
	dots: true,
	slidesToScroll: 1
});

$('.factory-images-container').slick({
	infinite: true,
	autoplay: true,
	slidesToShow: 1,
	arrows: false,
	dots: true,
	slidesToScroll: 1
});


$('.clients-container').slick({
	infinite: true,
	slidesToShow: 5,
	slidesToScroll: 1,
	prevArrow: '<button type="button" class="slick-arrow slick-prev icon-flecha"></button>',
	nextArrow: '<button type="button" class="slick-arrow slick-next icon-flecha"></button>',
	responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
});

/*validator*/
$(function () {

	var formSettings = {
		singleError: function singleError($field, rules) {
			$field.closest('.form-group').removeClass('valid').addClass('error');
			$field.closest('select.form-group').removeClass('valid').addClass('error');
			$('.text-danger').fadeIn();
		},
		singleSuccess: function singleSuccess($field, rules) {
			$field.closest('.form-group').removeClass('error').addClass('valid');
			$field.closest('select.form-group').removeClass('valid').addClass('error');
			$('.text-danger').fadeOut();
		},
		overallSuccess: function overallSuccess() {
			var form = $('#contactForm'),
			    nombre 		= form.find("input[name='nombre']").val(),
			    correo 		= form.find("input[name='correo']").val(),
			    telefono	= form.find("input[name='telefono']").val(),
			    ciudad 		= form.find("input[name='ciudad']").val(),
			    aplicacion 	= form.find("select[name='aplicacion']").val(),
			    mensaje 	= form.find("textarea[name='mensaje']").val(),
			    action 		= form.attr("action"),
			    url = action;

			var posting = $.post(url, { nombre: nombre, telefono: telefono, ciudad: ciudad, aplicacion: aplicacion, correo: correo, mensaje: mensaje });
			posting.done(function (data) {
				console.log('email sent bro! \n' + data);
				$('#contactForm')[0].reset();
				$('.sent_mail_alert').fadeIn().delay(3000).fadeOut();
			});
		},
		overallError: function overallError($form, fields) {/*Do nothing, just show the error fields*/},
		autoDetect: true, debug: true
	};
	var $validate = $('#contactForm').validate(formSettings).data('validate');
});


/*validator*/
$(function () {

	var formSettings = {
		singleError: function singleError($field, rules) {
			$field.closest('.form-group').removeClass('valid').addClass('error');
			$field.closest('select.form-group').removeClass('valid').addClass('error');
			$('.text-danger').fadeIn();
		},
		singleSuccess: function singleSuccess($field, rules) {
			$field.closest('.form-group').removeClass('error').addClass('valid');
			$field.closest('select.form-group').removeClass('valid').addClass('error');
			$('.text-danger').fadeOut();
		},
		overallSuccess: function overallSuccess() {
			var form = $('#contactHogar'),
			    email 					= form.find("input[name='email']").val(),
				firmeza					= form.find("select[name='firmeza']").val(),
				peso					= form.find("select[name='peso']").val(),
				solo_acompanado			= form.find("select[name='solo_acompanado']").val(),
				peso_pareja				= form.find("select[name='peso_pareja']").val(),
				preferencia_colchon		= form.find("select[name='preferencia_colchon']").val(),
				individual				= form.find("input[name='individual']:checked").val(),
				matrimonial				= form.find("input[name='matrimonial']:checked").val(),
				queen_size				= form.find("input[name='queen_size']:checked").val(),
				king_size				= form.find("input[name='king_size']:checked").val(),
				nombre					= form.find("input[name='nombre']").val(),
				ciudad					= form.find("input[name='ciudad']").val(),
				telefono				= form.find("input[name='telefono']").val(),
			    action 					= form.attr("action"),
			    url = action;

			var posting = $.post(url, {email: email, firmeza: firmeza, peso: peso, solo_acompanado: solo_acompanado, peso_pareja: peso_pareja, preferencia_colchon: preferencia_colchon, individual: individual, matrimonial: matrimonial, queen_size: queen_size, king_size: king_size, nombre: nombre, ciudad: ciudad, telefono: telefono });

			posting.done(function (data) {
				console.log('email sent bro! \n' + data);
				$('#contactHogar')[0].reset();
				$('.sent_mail_alert').fadeIn().delay(3000).fadeOut();
			});
		},
		overallError: function overallError($form, fields) {/*Do nothing, just show the error fields*/},
		autoDetect: true, debug: true
	};
	var $validate = $('#contactHogar').validate(formSettings).data('validate');
});


/*validator*/
$(function () {

	var formSettings = {
		singleError: function singleError($field, rules) {
			$field.closest('.form-group').removeClass('valid').addClass('error');
			$field.closest('select.form-group').removeClass('valid').addClass('error');
			$('.text-danger').fadeIn();
		},
		singleSuccess: function singleSuccess($field, rules) {
			$field.closest('.form-group').removeClass('error').addClass('valid');
			$field.closest('select.form-group').removeClass('valid').addClass('error');
			$('.text-danger').fadeOut();
		},
		overallSuccess: function overallSuccess() {
			var form = $('#contactHotel'),
			    email 					= form.find("input[name='email']").val(),
				tipo_proyecto			= form.find("select[name='tipo_proyecto']").val(),
				ubicacion				= form.find("input[name='ubicacion']").val(),
				individual				= form.find("input[name='individual']:checked").val(),
				matrimonial				= form.find("input[name='matrimonial']:checked").val(),
				queen_size				= form.find("input[name='queen_size']:checked").val(),
				king_size				= form.find("input[name='king_size']:checked").val(),
				detalles_proyecto		= form.find("textarea[name='detalles_proyecto']").val(),
				nombre					= form.find("input[name='nombre']").val(),
				ciudad					= form.find("input[name='ciudad']").val(),
				telefono				= form.find("input[name='telefono']").val(),
			    action 					= form.attr("action"),
			    url = action;

			var posting = $.post(url, {email: email, tipo_proyecto: tipo_proyecto, ubicacion: ubicacion, individual: individual, matrimonial: matrimonial, queen_size: queen_size, king_size: king_size, detalles_proyecto: detalles_proyecto, nombre: nombre, ciudad: ciudad, telefono: telefono });

			posting.done(function (data) {
				console.log('email sent bro! \n' + data);
				$('#contactHotel')[0].reset();
				$('.sent_mail_alert').fadeIn().delay(3000).fadeOut();
			});
		},
		overallError: function overallError($form, fields) {/*Do nothing, just show the error fields*/},
		autoDetect: true, debug: true
	};
	var $validate = $('#contactHotel').validate(formSettings).data('validate');
});

$('a.asesorate').on('click', function () {
	
	console.log('clicked! btn');

	$('html, body').animate({
	    scrollTop: $("#form-asesor").offset().top
	}, 500);
	
});


$(function() {
	var $tabButtonItem = $('#tab-button li'),
		$tabSelect = $('#tab-select'),
		$tabContents = $('.tab-contents'),
		activeClass = 'is-active';

		$tabButtonItem.first().addClass(activeClass);
		$tabContents.not(':first').hide();

		$tabButtonItem.find('a').on('click', function(e) {
		var target = $(this).attr('href');

		$tabButtonItem.removeClass(activeClass);
		$(this).parent().addClass(activeClass);
		$tabSelect.val(target);
		$tabContents.hide();
		$(target).show();
		e.preventDefault();
	});

	$tabSelect.on('change', function() {
	var target = $(this).val(),
	targetSelectNum = $(this).prop('selectedIndex');

	$tabButtonItem.removeClass(activeClass);
	$tabButtonItem.eq(targetSelectNum).addClass(activeClass);
	$tabContents.hide();
	$(target).show();
	});
});