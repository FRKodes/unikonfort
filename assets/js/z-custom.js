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
