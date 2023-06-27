const months = [
  "Jan",
  "Feb",
  "Mar",
  "Apr",
  "May",
  "Jun",
  "Jul",
  "Aug",
  "Sep",
  "Oct",
  "Nov",
  "Dec",
];

function getDateMonth(str) {
  const date = new Date(str);

  console.log(date, "date");
  return date.getMonth;
}

function initArticleMiniSlider() {
  $(".mini-article-container").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
  });
}

$(document).ready(function () {
  console.log("ready here  !");
  AOS.init();

  $(".video-thumbnail").on("click", function () {
    console.log("just play video");
    var videoSource = $(".overlay-video").attr("data-src-video");
    // console.log("videoscource", videoSource);
    $(".overlay-video  iframe").attr("src", videoSource);
    $(".overlay-video").addClass("visible");
    $(".overlay-video iframe").removeClass("d-none");
    $("body").addClass("overlay-visible");
    // var videoSource = $(".overlay-video").attr("data-src-video");
    // console.log("videoscource", videoSource);
    // $(".overlay-video  iframe").attr("src", videoSource);
  });

  $(".overlay").on("click", function (e) {
    console.log("clicked on overlay");
    // e.stopPropagation();
    $(this).removeClass("visible");
    $("iframe").attr("src", "");
    $("body").removeClass("overlay-visible");
  });

  $(".fs-ham-open").on("click", function (e) {
    $(this).addClass("d-none");
    $(".fs-ham-closed").removeClass("d-none");
    e.stopPropagation();
    if ($(".menu").hasClass("visible")) {
      $(".menu").removeClass("visible");
    } else {
      $(".menu").addClass("visible");
    }
  });

  $(".fs-ham-closed").on("click", function (e) {
    e.stopPropagation();
    $(".fs-ham-open").removeClass("d-none");
    $(this).addClass("d-none");
    if ($(".menu").hasClass("visible")) {
      $(".menu").removeClass("visible");
    } else {
      $(".menu").addClass("visible");
    }
  });

  $(".bell").on("click", function (e) {
    e.stopPropagation();
    $(".notification-container").toggleClass("visible");
    $(".menu").removeClass("visible");
    $(".search-input-container").removeClass("visible");
  });

  $(".search-icon").on("click", function (e) {
    e.stopPropagation();
    $(".search-input-container").toggleClass("visible");
    $(".notification-container").removeClass("visible");
  });

  $("body").on("click", function (e) {
    $(".menu.visible").removeClass("visible");
    $(".notification-container").removeClass("visible");
    $(".search-input-container").removeClass("visible");
    $(".fs-ham-open").removeClass("d-none");
    $(".fs-ham-closed").addClass("d-none");
  });

  $(".notification-container").on("click", function (e) {
    e.stopPropagation();
  });

  $(".menu.visible").on("click", function (e) {
    e.stopPropagation();
  });
  $(".search-input-container").on("click", function (e) {
    e.stopPropagation();
  });

  const section3 = document.querySelector("#section3");

  const section4 = document.querySelector("#section4");
  const section5 = document.querySelector("#section5");

  console.log(section3, section4, section5);
  const section3Pos = section3.offsetTop - 200;

  const section4Pos = section4.offsetTop;

  const section5Pos = section5.offsetTop;

  console.log("section3 ", section3, section3Pos);
  console.log("section4 ", section4, section4Pos);
  console.log("section5 ", section5, section5Pos);

  // console.log("section3", topPos);

  $(window).on("scroll", function () {
    $(".menu").removeClass("visible");
    $(".fs-ham-open").removeClass("d-none");
    $(".fs-ham-closed").addClass("d-none");
    if (window.scrollY > 500) {
      $("header").addClass("fixed");
    } else {
      $("header").removeClass("fixed");
    }
    if (window.scrollY > section3Pos) {
      $(".nav-fixed").addClass("visible");
      $("body").addClass("nav-visible");
    } else {
      $(".nav-fixed").removeClass("visible");
      $("body").removeClass("nav-visible");
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

jQuery(document).ready(function () {
  function fetchEvents() {}

  jQuery(".mark-as-read").click(function () {
    console.log("The Search function is hooked up");
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "content_search",
        search: $(".search").val(),
      },
      success: function (output) {
        console.log(output);
      },
    });
  });
  //alert('Inside custom script');
  jQuery(".mark-as-read").click(function () {
    console.log("The function is hooked up");
    var form_data = jQuery("#calender_form").serializeArray();
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "fetch_calender_events",
        message_id: $(".mark-as-read").val(),
        user_industry: $(".user_industry").val(),
        user_area_of_interest: $(".user_area_of_interest").val(),
        user_region: $(".user_region").val(),
        year: $(".year").val(),
        month: $(".month").val(),
        all_events: $(".all_region").val(),
      },
      success: function (output) {
        console.log(output.data, "is this events");
        const events = [];
        output.data.forEach((element) => {
          events.push(
            "<h1>Event title ---- " +
              element.title +
              " ---- with ID : " +
              element.ID
          );
        });
        jQuery("#calender_data").html(events);
      },
    });
  });

  jQuery(".mark-as-read").click(function () {
    console.log("The event register function is hooked up");
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "register_event",
        event_id: $(".event_id").val(),
      },
      success: function (output) {
        console.log(output);
      },
    });
  });

  jQuery(".mark-as-read").click(function () {
    console.log("The Notification list fetch function is hooked up");
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "get_users_notification_list",
      },
      success: function (output) {
        console.log("Notification", output);
      },
    });
  });

  jQuery(".mark-as-read").click(function () {
    console.log("Update NOtification status");
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "update_users_notification_status",
        // id : notification_id,
      },
      success: function (output) {
        console.log("Notification", output);
      },
    });
  });

  function registerEvent(id) {
    console.log("The event register function is hooked up");
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "register_event",
        // event_id: $(".event_id").val(),
        event_id: id,
      },
      success: function (output) {
        console.log("REGSITER EVENT", output);
        return output;
      },
    });
  }

  jQuery(".mark-as-read").click(function () {
    console.log("The GPD function is hooked up");
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "gpd_email_request",
      },
      success: function (output) {
        console.log(output);
        return output;
      },
    });
  });

  jQuery(".mark-as-read").click(function () {
    console.log("The send email function is hooked up");
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "send_mail_function",
        subject: $(".subject").val(),
        message: $(".message").val(),
        receiver_email: $(".receiver_email").val(),
      },
      success: function (output) {
        console.log(output);
      },
    });
  });

  // $(".event-item").on("click", function () {
  //   console.log("event item clicked", this);
  //   $(".event-details .image-container img").attr(
  //     "src",
  //     "https://dev.gilcouncil.com/wp-content/uploads/2023/05/Rectangle-112.png"
  //   );
  //   $(".event-details .image-container img").attr("src", "");
  // });

  $(document).on("click", ".event-item", function () {
    console.log($(this).attr("data-img"));
    $(".event-details .image-container img").attr(
      "src",
      $(this).attr("data-img")
    );
    $(".event-details h2").text($(this).attr("data-title"));
    $(".event-details button.btn-primary").attr(
      "data-register",
      $(this).attr("data-id")
    );
    $(".event-details button.btn-primary").attr(
      "data-register-status",
      $(this).attr("data-registered-status")
    );

    var desc = $(this).find(".event-description").html();
    $(".event-details p.description").html(desc);

    $(".event-details .org-name").text($(this).attr("data-event-org-name"));

    var formattedDate = $(this).find(".event-formatted-date").html();

    $(".event-details .pill-2 .pill-left p").html(formattedDate);

    if ($(this).attr("data-registered-status") === "true") {
      $(".event-details button.btn-primary").addClass("d-none");
      $(".event-details button.btn-success").removeClass("d-none");
    } else {
      $(".event-details button.btn-primary").removeClass("d-none");
      $(".event-details button.btn-success").addClass("d-none");
    }
  });

  function handleSearch(e) {
    e.preventDefault();
    console.log("searched");
  }

  $('[data-function="register-event"]').on("click", function (e) {
    e.preventDefault();
    console.log("The event register function is hooked up");
    const currentButton = $(this);
    // currentButton.html("processing");
    currentButton.addClass("d-none");
    currentButton
      .parent(".button-container")
      .find(".btn-loading")
      .removeClass("d-none");
    // currentButton.addClass("btn-loading");
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "register_event",
        // event_id: $(".event_id").val(),
        event_id: currentButton.attr("data-register"),
      },
      success: function (output) {
        currentButton
          .parent(".button-container")
          .find(".btn-success")
          .removeClass("d-none");
        currentButton
          .parent(".button-container")
          .find(".btn-loading")
          .addClass("d-none");

        console.log("REGSITER EVENT", output);
        console.log(
          "button parent",
          currentButton.parent(".button-container").find(".btn-success")
        );
      },
      error: function (xhr, status, error) {
        console.log("status", status);
        console.log("error", error);
        currentButton
          .parent(".button-container")
          .find(".btn-loading")
          .addClass("d-none");
        currentButton
          .parent(".button-container")
          .find(".btn-fail")
          .removeClass("d-none");
      },
    });
  });

  // console.log('Calendar found', $('#my-calendar table tbody tr'))
  //   $('#my-calendar table tbody tr').each((i, row) => {
  // //  console.log( $(row).children('td'));
  //       $(row).children('td').each((index, col) =>{

  //         console.log("output calendar events data inside the loop", eventsData);
  //         // eventsData.data.each((id, event) =>{})
  //         console.log('what is insde the column' ,$(col).text())
  //         // $(col).addClass('jsCalendar-current')
  //       })

  //   })

  function dragStartFloatingButton() {
    console.log("DRAGGING FLOATING BUTTON");
  }

  $(".floating-button").on("ondrag", dragStartFloatingButton());

  $("#search-form").on("submit", function (e) {
    e.preventDefault();
    console.log(e, "event from the form submission", $("#search-input").val());
    $(".search-results-container").removeClass("hidden");
    $(".search-results ul").html(
      '<div class = "loader-outer"><div class="lds-dual-ring"></div></div>'
    );
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "content_search",
        search: $("#search-input").val(),
      },
      success: function (output) {
        $(".lds-dual-ring").remove();
        $(".search-results-bottom").removeClass("hidden");
        console.log("search api integration", output);
        var results = [];
        output.data.forEach((el) => {
          results.push(`<li>
        <div><a href = "${el.redirect_url}">${el.title}</a></div>
         
        </li>`);
        });
        $(".search-results ul").html(results);
      },
    });
  });

  $(".gpd-trigger").on("click", function () {
    $(".confrimation-overlay").removeClass("d-none");
    $("body").addClass("overlay-visible");
  });

  $(".confrimation-overlay").on("click", function () {
    console.log("CONFRIMATION OVERLAY CLICKED");
    $(this).addClass("d-none");
    $("body").removeClass("overlay-visible");
  });

  $(".confrimation-box").on("click", function (e) {
    e.stopPropagation();
    console.log("confrimation box clicked");
  });

  $(".confrimation-box button:not(.btn-danger)").on("click", function () {
    console.log("clicked on yes");
    const oldHTML = $(".confrimation-box").html();
    $(".confrimation-box").html(
      '<div class = "loader-outer"><div class="lds-dual-ring"></div></div>'
    );
    $(".confrimation-box").html();

    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "gpd_email_request",
      },
      success: function (output) {
        $(".confrimation-box").html(
          '<h2 class = "text-center">You are registered</h2>'
        );
        setTimeout(function () {
          $(".confrimation-overlay").addClass("d-none");
          $("body").removeClass("overlay-visible");
          $(".confrimation-box").html(oldHTML);
        }, 1500);
      },
    });
  });

  $(".confrimation-box button.btn-danger").on("click", function () {
    console.log("clicked on NO");
    $(".confrimation-overlay").addClass("d-none");
    $("body").addClass("overlay-visible");
  });

  // if (element) {
  //   myCalendar.onDateClick(function (event, date) {
  //     console.log("date click", new Date(date).getDate());
  //     // inputA.value = date.toString();
  //   });
  //   myCalendar.onMonthChange(function (event, date) {
  //   // inputB.value = date.toString();
  //   console.log("month change", new Date(date).getMonth(), new Date(date).getFullYear())
  //   const currentMonth = new Date(date).getMonth()
  //   const currentYear =  new Date(date).getYear()
  //   if(currentMonth.length == 1){
  //     currentMonth = "0" + currentMonth
  //   }

  //   fetchEvents(currentYear,  currentMonth)
  // });

  // }

  // myCalendar.onMonthChange(function (event, date) {
  //   // inputB.value = date.toString();
  //   console.log("month change", new Date(date).getMonth(), new Date(date).getFullYear())
  //   const currentMonth = new Date(date).getMonth()
  //   const currentYear =  new Date(date).getYear()
  //   if(currentMonth.length == 1){
  //     currentMonth = "0" + currentMonth
  //   }

  //   fetchEvents(currentYear,  currentMonth)
  // });

  $(".view-all-btn").on("click", function () {
    $(".section-growth .slick-custom").toggleClass("d-none");
    $(this).toggleClass("expanded");

    if ($(".view-all-btn h3").text() == "View All") {
      $(".view-all-btn h3").text("Collapse");
    } else {
      $(".view-all-btn h3").text("View All");
    }
  });

  $(".gpd-trigger").on("click", function () {
    $(".confrimation-overlay").removeClass("d-none");
    $("body").addClass("overlay-visible");
  });

  $(".confrimation-overlay").on("click", function () {
    console.log("CONFRIMATION OVERLAY CLICKED");
    $(this).addClass("d-none");
    $("body").removeClass("overlay-visible");
  });

  $(".confrimation-box").on("click", function (e) {
    e.stopPropagation();
    console.log("confrimation box clicked");
  });

  $(".confrimation-box button:not(.btn-danger)").on("click", function () {
    console.log("clicked on yes");
    const oldHTML = $(".confrimation-box").html();
    $(".confrimation-box").html(
      '<div class = "loader-outer"><div class="lds-dual-ring"></div></div>'
    );
    $(".confrimation-box").html();

    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "gpd_email_request",
      },
      success: function (output) {
        $(".confrimation-box").html(
          '<h2 class = "text-center">You are registered</h2>'
        );
        setTimeout(function () {
          $(".confrimation-overlay").addClass("d-none");
          $("body").removeClass("overlay-visible");
          $(".confrimation-box").html(oldHTML);
        }, 1500);
      },
    });
  });

  $(".confrimation-box button.btn-danger").on("click", function () {
    console.log("clicked on NO");
    $(".confrimation-overlay").addClass("d-none");
    $("body").removeClass("overlay-visible");
  });

  function fetchNotifications() {
    console.log("The Notification list fetch function is hooked up");
    $(".notification-list").html(
      `
        <div class="loader-outer">
        <div class="lds-dual-ring"></div>
      </div>
      `
    );
    jQuery.ajax({
      type: "POST",

      url: "/wp-admin/admin-ajax.php",

      data: {
        action: "get_users_notification_list",
      },

      success: function (output) {
        console.log("Notification", output);
        var notificationOutput = [];
        output.data.forEach((el, index) => {
          notificationOutput.push(
            `
            <li class = "notification-item" notification-id=${el.id}>
            <a href = "https://beta.gilcouncil.com/?page_id=${el.event_id}" target="_blank">${el.notification_title}</a>
            </li>
            `
          );
        });

        $(".notification-list").html(notificationOutput);
      },
    });
  }
  fetchNotifications();

  // setInterval(function () {
  //   fetchNotifications();
  // }, 100000);

  $(document).on("click", ".notification-item a", function () {
    console.log("notification-id", $(this).attr("notification-id"));
    // jQuery.ajax({
    //   type: "POST",
    //   url: "/wp-admin/admin-ajax.php",
    //   data: {
    //     action: "update_users_notification_status",
    //     id: $(this).attr("notification-id"),
    //   },

    //   success: function (output) {
    //     console.log("Notification", output);
    //     $(this).addClass("viewed");
    //   },
    //   error: function () {},
    // });
  });

  $("a:not(.nav-item a)").attr("target", "_blank");

  //LOGIN FORM

  $("#email").on("change paste keyup", function () {
    console.log("CHANGE EVENT TRIGGERED ON INPUT");
    $(".error.email").html("");
  });

  $("#email").on("blur", function () {
    var emailPattern = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

    console.log(emailPattern.test($(this).val()));
    if (!emailPattern.test($(this).val())) {
      $(".error.email").html("Please provide a correct email format");
    }
    console.log($(this).val());
    var emailValue = $(this)
      .val()
      .substr($(this).val().indexOf("@") + 1, $(this).val().length);
    public_mail_domain.forEach((el, index) => {
      if (el == emailValue) {
        $(".error.email").html("Please provide a correct email format");
      }
    });
  });

  $(".toggle-visibility").on("click", function () {
    if ($(".form-control.password").attr("type") == "text") {
      $(".form-control.password").attr("type", "password");
      $(this).find(".visible-icon.open").removeClass("d-none");
      $(this).find(".visible-icon.closed").addClass("d-none");
    } else if ($(".form-control.password").attr("type") == "password") {
      $(".form-control.password").attr("type", "text");

      $(this).find(".visible-icon.open").addClass("d-none");
      $(this).find(".visible-icon.closed").removeClass("d-none");
    }
  });

  $(".toggle-visibility-confirm").on("click", function () {
    if ($(".form-control.passwordConfirm").attr("type") == "text") {
      $(".form-control.passwordConfirm").attr("type", "password");
      $(this).find(".visible-icon.open").removeClass("d-none");
      $(this).find(".visible-icon.closed").addClass("d-none");
    } else if ($(".form-control.passwordConfirm").attr("type") == "password") {
      $(".form-control.passwordConfirm").attr("type", "text");
      $(this).find(".visible-icon.open").addClass("d-none");
      $(this).find(".visible-icon.closed").removeClass("d-none");
    }
  });

  $("#password").on("change paste keyup", function () {
    $(".error.password").html("");
    if ($(this).val().length > 20) {
      $(".error.password").html("Password must be under 20 characters");
    }
  });

  $(".form-login").on("submit", function (e) {
    e.preventDefault();
    if (!$("#email").val()) {
      $(".error.email").text("This field is required");
    }
    if (!$("#password").val()) {
      $(".error.password").text("This field is required");
    }
  });

  $(".signup-form").on("submit", function (e) {
    e.preventDefault();
    if (!$("#email").val()) {
      $(".error.email").text("This field is required");
      return;
    }
    if (!$("#password").val()) {
      $(".error.password").text("This field is required");
      return;
    }
    if (!$("#passwordConfirm").val()) {
      $(".error.passwordConfirm").text("This field is required");
      return;
    }
    if ($("#passwordConfirm").val() !== $("#password").val()) {
      $(".error.passwordConfirm").text("Password do not match");
      return;
    }
    $(".signup-form-step-2").removeClass("d-none");
    $(".signup-form-step-1").addClass("d-none");
  });

  $("#firstName").on("change paste keyup", function () {
    $(".error.firstName").html("");
  });

  $("#lastName").on("change paste keyup", function () {
    $(".error.lastName").html("");
  });
  $("#terms1").on("change", function () {
    $(".terms1").removeClass("error");
  });
  $("#terms2").on("change", function () {
    $(".terms2").removeClass("error");
  });

  $(".signup-form-2").on("submit", function (e) {
    e.preventDefault();
    if (!$("#firstName").val()) {
      $(".error.firstName").text("This field is required");
      return;
    }
    if (!$("#lastName").val()) {
      $(".error.lastName").text("This field is required");
      return;
    }
    // if (!$("#terms2").checked) {
    //   $(".terms2").addClass("error");
    //   console.log("terms 2 is empty");
    //   return;
    // }
    // if (!$("#terms1").checked) {
    //   $(".terms1").addClass("error");
    //   console.log("terms 1 is empty");
    //   return;
    // }
  });
});
