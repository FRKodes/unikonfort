console.log('ok!');

$('.menu-menu-top-container').addClass('collapse navbar-collapse');
$('.main-menu li').addClass('nav-item');
$('.main-menu li a').addClass('nav-link');


$('.main-banner-container').slick({
	infinite: true,
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
			    comentarios = form.find("textarea[name='comentarios']").val(),
			    action 		= form.attr("action"),
			    url = action;

			var posting = $.post(url, { nombre: nombre, telefono: telefono, ciudad: ciudad, aplicacion: aplicacion, correo: correo, comentarios: comentarios });
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



    var map;
    var bounds;
    var infowindow;
    var latlng = new google.maps.LatLng(20.721059, -103.367146);

    function initialize() {
        var mapOptions = {
            mapTypedId: google.maps.MapTypeId.ROADMAP,
            zoom: 8,
            center: latlng,
            panControl: true,
        };
        infowindow = new google.maps.InfoWindow();

        map = new google.maps.Map(document.getElementById('inner-map'), mapOptions);
        
        AgregaMarkers(20.5798778, -103.362714, "Matríz", "Av. Camino a Santa Cruz del Valle #113-A Col. Valle de la Misericordia Tlaquepaque Jalisco.","(33) 3606 4362 - (33) 3606 5283");
        AgregaMarkers(20.645664886207094, -105.21550078498697, "Bodega Puerto Vallarta", "Av. González Gallo 165 Fracc.Vida Vallarta. C.p. 48318 Puerto Vallarta, Jalisco.", "(322) 224 7540");
        AgregaMarkers(20.68191048618725, -103.3564949849864, "Show Room Guadalajara", "Federalismo norte 397 Col.Artesanos. C.p. 44200 Guadalajara, Jalisco.", "(33) 3826 1420");
        AgregaMarkers(20.666600, -103.361391, "Show Room Niños Héroes Guadalajara", "Av Niños Héroes 1615 Col. Moderna C.P. 44190 Guadalajara, Jal.", "(33) 3810 7974");
    }
    
    function AgregaMarkers(Latitud, Longitud, Titulo, Descripcion, Telefono) {
                
        var marker = new google.maps.Marker({
        //icon    : "http://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
            position: new google.maps.LatLng(Latitud, Longitud),
                title: "",
                //icon: 'http://buscarcasa.mx/Images/PinMapRojo.png',
                map: map
            });
            //marker.setMap(map);
           
            //info show
            google.maps.event.addListener(marker, 'click', function () {
                infowindow.setContent("<div class='InfoMapa'><h2>" + Titulo + "</h2><p class='Direccion'>" + Descripcion + "</p><p class='Telefono'>" + Telefono + "</p></div>");
                infowindow.open(map, this);
            });

            
}
google.maps.event.addDomListener(window, 'load', initialize);