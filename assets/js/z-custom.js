console.log('ok!');

$('.menu-menu-top-container').addClass('collapse navbar-collapse');
$('.main-menu li').addClass('nav-item');
$('.main-menu li a').addClass('nav-link');
$('.menu-menu-top-container').addClass('collapse navbar-collapse').attr('id', 'navbarCollapse');


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
