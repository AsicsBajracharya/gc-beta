$(document).ready(function () {
  console.log("Initializing sliders....");

  $(".section-hero.slider-1").slick({
    // auto: true,
    // autoplay: true,
    // autoplaySpeed: 2000,
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom'><span></span></div>",
  });
  $(".slider-2").slick({
    auto: true,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom slick-btn-filled'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom slick-btn-filled'><span></span></div>",
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          centerMode: true,
          centerPadding: "20px",
        },
      },
    ],
  });

  $(".slider-3").slick({
    // auto: false,
    // autoplay: false,
    // autoplaySpeed: 2000,
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom'><span></span></div>",
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          centerMode: true,
          centerPadding: "20px",
        },
      },
    ],
  });
  // $(".article-slider.slider-3").slick({
  //   dots: true,
  //   infinite: true,
  //   speed: 700,
  //   autoplay: true,
  //   autoplaySpeed: 2000,
  //   arrows: false,
  //   slidesToShow: 1,
  //   slidesToScroll: 1,
  //   // prevArrow:
  //   //   "<div class = 'slick-custom-prev slick-custom slick-arrow-center-sm'><span></span></div>",
  //   // nextArrow:
  //   //   "<div class = 'slick-custom-next slick-custom slick-arrow-center-sm'><span></span></div>",
  //   // responsive: [
  //   //   {
  //   //     breakpoint: 991,
  //   //     settings: {
  //   //       slidesToShow: 1,
  //   //       slidesToScroll: 1,
  //   //       infinite: true,
  //   //       centerMode: true,
  //   //       centerPadding: "50px",
  //   //     },
  //   //   },
  //   // ],
  // });
  $(".member-slider-container").slick({
    auto: true,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom slick-arrow-center-sm slick-arrow-filled'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom slick-arrow-center-sm slick-arrow-filled'><span></span></div>",
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          centerMode: true,
          centerPadding: "20px",
        },
      },
    ],
  });
  $(".think-tank-slider").slick({
    auto: true,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 3,
    slidesToScroll: 3,
    centerMode: true,
    centerPadding: "20px",
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom slick-arrow-center-sm'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom slick-arrow-center-sm'><span></span></div>",
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  });
  $(".growth-community-slider").slick({
    auto: true,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom slick-arrow-center-sm'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom slick-arrow-center-sm'><span></span></div>",
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  });
  $(".growth-content-article-slider").slick({
    auto: true,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: "20px",
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom slick-arrow-center-sm'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom slick-arrow-center-sm'><span></span></div>",
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  });
  $(".think-tank-series-slider").slick({
    auto: true,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom slick-position-end'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom slick-position-end'><span></span></div>",
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          centerMode: true,
          centerPadding: "20px",
        },
      },
    ],
  });
  $(".stories-slider-container").slick({
    auto: true,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom slick-position-center-outside'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom slick-position-center-outside'><span></span></div>",
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          centerMode: true,
          centerPadding: "20px",
        },
      },
    ],
  });
  $(".sector-slide-container").slick({
    auto: true,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom slick-position-center-outside'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom slick-position-center-outside'><span></span></div>",
  });
  $(".growth-coaching-slide-container").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom slick-position-center-outside'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom slick-position-center-outside'><span></span></div>",
  });
  $(".community-slider-container").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom slick-position-center-outside'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom slick-position-center-outside'><span></span></div>",
  });
  $(".traits-slider-container").slick({
    auto: true,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom slick-position-center-outside'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom slick-position-center-outside'><span></span></div>",
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  });
});
