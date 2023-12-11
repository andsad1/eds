jQuery(document).ready(function ($) {
  $('.hero_slider').slick({
    dots: false,
    infinite: true,
    speed: 800,
    autoplaySpeed: 3000,
    arrows: false,
    autoplay: true,
    fade: true,
    cssEase: 'linear',
    pauseOnHover: false
  });
  var $status = $('.pagingInfo');
  $('.furniture_slider').on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
    var i = (currentSlide ? currentSlide : 0) + 1;
    $status.text(i + '/' + slick.slideCount);
  });

  $('.furniture_slider').slick({
    dots: false,
    infinite: true,
    speed: 600,
    arrows: true,
    autoplay: false,
    fade: true,
    cssEase: 'linear',
    pauseOnHover: false
  });

  
  
  $('.clients_slider').slick({
    dots: false,
    infinite: true,
    arrows: true,
    speed: 500,
    slidesToShow: 4,
    slidestoScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
    ]
  });
  $('.design_slider').slick({
    dots: false,
    infinite: true,
    arrows: true,
    speed: 500,
    slidesToShow: 1,
    variableWidth: true,
  });
  $('.portfolio_slider').slick({
    dots: false,
    infinite: true,
    arrows: true,
    speed: 500,
    slidesToShow: 1,
    variableWidth: true
  });

  var check = true;
  $('.portfolio_read_more').click(function (e) {
    e.preventDefault();
    $('.content_holder').toggle();
    $('.excerpt_holder').toggle();
    if (check) {
      $(this).text('Read Less');
      check = false;
    } else {
      $(this).text('Read More');
    }
  });
  wow = new WOW(
    {
      boxClass: 'wow',      // default
      animateClass: 'animated', // default
      offset: 0,          // default
      mobile: false,       // default
      live: true        // default
    }
  )
  wow.init();
  // fancybox
  $('[data-fancybox="gallery"]').fancybox();
  // lazyload
  var lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy"
  });
  // Close menu
  $('.close_header').click(function () {
    $('.header_navigation').removeClass('mobile_menu_active');
  });
  $('#menu_burger').click(function () {
    $('.header_navigation').addClass('mobile_menu_active');
  });
  // cookie
  function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

  if ($('.close-cookies').length > 0) {
    $('.close-cookies').click(function () {
      setCookie('asfhffdkgLrFASf', 1, 365);
      $('#cookie').remove();
    });
  }
  // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
  let vh = window.innerHeight * 0.01;
  // Then we set the value in the --vh custom property to the root of the document
  document.documentElement.style.setProperty('--vh', `${vh}px`);
  // We listen to the resize event
  window.addEventListener('resize', () => {
    // We execute the same script as before
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
  });
});