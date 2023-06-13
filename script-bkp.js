function initArticleMiniSlider() {
  $(".mini-article-container").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
  });
}

function initSlider() {
  $(".section-hero").slick({
    autoplay: true,
    autoplaySpeed: 10000,
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom'><span></span></div>",
  });
  $(".growth-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
  });
  $(".article-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
  });
  $(".member-slider-container").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
  });
  $(".think-tank-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
  });
  $(".growth-community-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom'><span></span></div>",
  });
  $(".growth-content-article-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    centerMode: true,
    centerPadding: "50px",
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
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom slick-position-end'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom slick-position-end'><span></span></div>",
    responsive: [
      {
        breakpoint: 1366,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          centerMode: true,
          centerPadding: "20px",
        },
      },
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
    slidesToShow: 3,
    slidesToScroll: 3,
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
          centerMode: true,
          centerPadding: "20px",
        },
      },
    ],
  });
  $(".sector-slide-container").slick({
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
      "<div class = 'slick-custom-prev slick-custom slick-position-end'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom slick-position-end'><span></span></div>",
  });
}
$(document).ready(function () {
  console.log("ready!");
  AOS.init();
  initSlider();

  $(".video-thumbnail").on("click", function () {
    console.log("click on video thumbnail");
    $(".overlay").addClass("visible");
    $("body").addClass("overlay-visible");
  });

  $(".overlay").on("click", function (e) {
    console.log("clicked on overlay");
    // e.stopPropagation();
    $(this).removeClass("visible");
    $("iframe").attr("src", $("iframe").attr("src"));
    $("body").removeClass("overlay-visible");
  });

  $(".fs-ham").on("click", function (e) {
    console.log("menu clicked");
    e.stopPropagation();
    if ($(".menu").hasClass("visible")) {
      $(".menu").removeClass("visible");
    } else {
      $(".menu").addClass("visible");
    }
  });

  $(".bell").on("click", function (e) {
    e.stopPropagation();
    $(".notification-container").toggleClass("visible");
  });

  $("body").on("click", function (e) {
    $(".menu.visible").removeClass("visible");
    $(".notification-container").removeClass("visible");
  });

  $(".notification-container").on("click", function (e) {
    e.stopPropagation();
  });

  $(".menu.visible").on("click", function (e) {
    e.stopPropagation();
  });

  const section3 = document.getElementById("section3");
  const section4 = document.getElementById("section4");
  const section5 = document.getElementById("section5");
  const section3Pos = section3?.offsetTop - 200;
  const section4Pos = section4?.offsetTop - 200;
  const section5Pos = section5?.offsetTop - 200;

  // console.log("section3", topPos);

  $(window).on("scroll", function () {
    if (window.scrollY > section3Pos) {
      $(".nav-fixed").addClass("visible");
    } else {
      $(".nav-fixed").removeClass("visible");
    }
    if (window.scrollY > section3Pos && window.scrollY < section4Pos) {
      $(".nav-item.pill:not(.section1)").removeClass("active");
      $(".section1").addClass("active");
      console.log("between one and two");
    } else if (window.scrollY > section4Pos && window.scrollY < section5Pos) {
      $(".nav-item.pill:not(.section2)").removeClass("active");
      $(".section2").addClass("active");
      console.log("between two and three");
    } else if (window.scrollY > section5Pos) {
      $(".nav-item.pill:not(.section3)").removeClass("active");
      $(".section3").addClass("active");
      console.log("above 3");
    }
  });

  if (window.innerWidth < 768) {
    initArticleMiniSlider();
  }
});

jQuery(document).ready(function() { 
  //alert('Inside custom script');
  jQuery(".mark-as-read").click(function () {
   console.log('The function is hooked up');
   var form_data = jQuery('#calender_form').serializeArray();
   jQuery.ajax({     
       type: "POST",
       url: "/wp-admin/admin-ajax.php",
       data: {
           action: 'fetch_calender_events',          
           message_id: $('.mark-as-read').val(),
           user_industry: $('.user_industry').val(),
           user_area_of_interest: $('.user_area_of_interest').val(),
           user_region: $('.user_region').val(),
           year: $('.year').val(),
           month: $('.month').val()
       },
       success: function (output) {
          console.log(output.data);
          const events = [];
          output.data.forEach(element => {
            events.push("<h1>Event title ---- "+ element.title+" ---- with ID : "+ element.ID);
          });
          jQuery('#calender_data').html(events);
       }
    });
   });
  });

function initSlider() {
  $(".section-hero").slick({
    fade: true,
    auto: true,
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom'><span></span></div>",
  });
  $(".growth-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow:
      "<div class = 'slick-custom-prev slick-custom'><span></span></div>",
    nextArrow:
      "<div class = 'slick-custom-next slick-custom'><span></span></div>",
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
  $(".article-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
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
          centerMode: true,
          centerPadding: "50px",
        },
      },
    ],
  });
  $(".member-slider-container").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
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
          centerMode: true,
          centerPadding: "50px",
        },
      },
    ],
  });
  $(".think-tank-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    centerMode: true,
    centerPadding: "50px",
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
    slidesToShow: 3,
    slidesToScroll: 3,
    centerMode: true,
    centerPadding: "50px",
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
}

function initArticleMiniSlider() {
  $(".mini-article-container").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
  });
}
jQuery(document).ready(function () {
  console.log("ready!");

  initSlider();
  new WOW().init();

  $(".fs-ham").on("click", function () {
    console.log("menu clicked");

    if ($(".menu").hasClass("visible")) {
      $(".menu").removeClass("visible");
    } else {
      $(".menu").addClass("visible");
    }
  });

  $(".bell").on("click", function () {
    $(".notification-container").toggleClass("visible");
  });

  $(window).on("resize", function () {
    if (window.innerWidth < 768) {
      initArticleMiniSlider();
    }
  });

  console.log("when starting", window.innerWidth);
  if (window.innerWidth < 768) {
    initArticleMiniSlider();
  }
});
