export default {
  init() {
    $('[data-fancybox], .gallery-item a').fancybox({
      youtube: {
        controls: 1,
        showinfo: 0,
      },
    });

    /** Menu */
    $('button.menu-mobile-button').click(function() {
      $(this).toggleClass('is-open');
      $('body, .nav-fixed').toggleClass('menu-show');
      $('.toggle-menu-button.is-open').removeClass('d-none');
    });

    $('.dropdown-toggle').dropdown();

    $('button.navbar-toggler').click(function(e) {
      e.preventDefault();

      $('body').toggleClass('menu-opened');
    });

    //Adiciona as class para o dropdown funcionar.
    $('header .menu-item-has-children').addClass('dropdown');
    $('header .menu-item-has-children > a:first-child').addClass('dropdown-toggle').attr('href', 'javascript:;').attr('data-toggle', 'dropdown');
    $('header .menu-item-has-children > .sub-menu').addClass('dropdown-menu');

    //Adiciona as class para o dropdown funcionar.
    $('.dropdown-submenu > a').on('click', function(e) {
      var submenu = $(this);
      $('.dropdown-submenu .dropdown-menu').removeClass('show');
      submenu.next('.dropdown-menu').addClass('show');
      e.stopPropagation();
    });

    $('.dropdown').on('hidden.bs.dropdown', function() {
      // hide any open menus when parent closes
      $('.dropdown-menu.show').removeClass('show');
    });

    $('.list-partners').slick({
      infinite: true,
      autoplay: true,
      dots: false,
      arrows: false,
      slidesToShow: 5,
      speed: 300,
      lazyLoad: 'ondemand',
      variableWidth: true,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            variableWidth: true,
          },
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            variableWidth: true,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            variableWidth: true,
          },
        },
      ],
    });

    $('.partients__slick').slick({
      infinite: true,
      autoplay: true,
      dots: false,
      arrows: true,
      slidesToScroll: 1,
      speed: 300,
      autoplaySpeed: 8000,
      prevArrow: '<button class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/></svg></button>',
      nextArrow: '<button class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg></button>',
    });

    $('.slick-technology').slick({
      infinite: true,
      autoplay: true,
      dots: false,
      arrows: true,
      slidesToScroll: 1,
      speed: 300,
      autoplaySpeed: 8000,
      prevArrow: '<button class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/></svg></button>',
      nextArrow: '<button class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg></button>',
    });

    $('.slick-team').slick({
      infinite: true,
      autoplay: true,
      dots: false,
      arrows: true,
      slidesToScroll: 1,
      speed: 300,
      autoplaySpeed: 8000,
      centerMode: true,
      prevArrow: '<button class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/></svg></button>',
      nextArrow: '<button class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg></button>',
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
