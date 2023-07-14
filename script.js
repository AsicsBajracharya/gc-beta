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

const public_mail_domain = [
  "live.com",
  "mail.ru",
  "web.de",
  "list-manage.com",
  "gmx.net",
  "outlook.com",
  "hotmail.com",
  "gmail.com",
  "sendgrit.net",
  "evite.com",
  "live.net",
  "szn.cz",
  "linkedinmobileapp.com",
  "mailchimp.com",
  "1drv.ms",
  "mail.com",
  "freemail.hu",
  "temp-mail.org",
  "mimecast.com",
  "liveinternet.ru",
  "families.google",
  "mlsend.com",
  "126.com",
  "gmx.ch",
  "gmx.de",
  "gmx.com",
  "gmx.fr",
  "cmail20.com",
  "campaign-archive.com",
  "clktec.com",
  "webmail.free.fr",
  "posteo.de",
  "yahoomail.com",
  "yahoo.fr",
  "sendinblue.com",
  "fastmail.com",
  "kpnmail.nl",
  "hdmoli.com",
  "greetingsisland.com",
  "chpok.site",
  "tegos.club",
  "hushmail.com",
  "deref-mail.com",
  "mail.ee",
  "convertkit-mail2.com",
  "yopmail.com",
  "highrich.net",
  "hao6v.tv",
  "memberkit.com.br",
  "aol.com",
  "aim.com",
  "proton.me",
  "protonmail.com",
  "tutanota.com",
  "tutanota.de",
  "tutamail.com",
  "tuta.io",
  "keemail.me",
  "icloud.com",
  "yandex.com",
  "yandex.ru",
  "zohomail.com",
  "msn.com",
  "wanadoo.fr",
  "orange.fr",
  "comcast.net",
  "rediffmail.com",
  "free.fr",
  "web.de",
  "ymail.com",
  "libero.it",
  "uol.com.br",
  "bol.com.br",
  "mail.ru",
  "cox.net",
  "hotmail.it",
  "sbcglobal.net",
  "sfr.fr",
  "verizon.net",
  "ig.com.br",
  "bigpond.com",
  "terra.com.br",
  "yahoo.it",
  "neuf.fr",
  "yahoo.de",
  "alice.it",
  "rocketmail.com",
  "att.net",
  "laposte.net",
  "bellsouth.net",
  "charter.net",
  "rambler.ru",
  "tiscali.it",
  "shaw.ca",
  "sky.com",
  "earthlink.net",
  "optonline.net",
  "freenet.de",
  "t-online.de",
  "aliceadsl.fr",
  "virgilio.it",
  "home.nl",
  "qq.com",
  "telenet.be",
  "me.com",
  "tiscali.co.uk",
  "voila.fr",
  "planet.nl",
  "tin.it",
  "ntlworld.com",
  "arcor.de",
  "frontiernet.net",
  "hetnet.nl",
  "zonnet.nl",
  "club-internet.fr",
  "juno.com",
  "optusnet.com.au",
  "blueyonder.co.uk",
  "bluewin.ch",
  "skynet.be",
  "sympatico.ca",
  "windstream.net",
  "mac.com",
  "centurytel.net",
  "chello.nl",
  "aim.com",
  "bigpond.net.au",
  "emailexpert.org",
  "inbox.com",
  "runbox.com",
  "mailfence.com",
  "startmail.com",
  "lycos.com",
  "zimbra.com",
  "maillinator.com",
  "guerrillamail.com",
  "disroot.org",
  "riseup.net",
  "openmailbox.org",
  "posteo.de",
  "sapo.pt",
  "torguard.net",
  "naver.com",
  "daum.net",
  "webmail.co.za",
  "btinternet.com",
  "o2.pl",
  "telenet.be",
  "sina.com",
  "netzero.net",
  "talktalk.net",
  "telus.net",
  "163.com",
  "hanmail.com",
  "seznam",
  "eclipse.eu",
  "interia.pl",
  "rogers.com",
  "walla.co.il",
  "excite.com",
  "gmavt.net",
  "lavabit.com",
  "eircom.net",
  "netscape.net",
  "myway.com",
  "cock.li",
  "mykolab.com",
  "snailmail.com",
  "caramail.com",
  "o2online.de",
  "scryptmail.com",
  "pobox.com",
  "1and1.com",
  "trash-mail.com",
  "temp-mail.org",
  "10minutemail.com",
  "anonbox.net",
  "mailinator.com",
  "yopmail.com",
  "jetable.org",
  "getnada.com",
  "maildrop.cc",
  "tempmailgen.com",
  "dispostable.com",
  "sharklasers.com",
  "mintemail.com",
  "spamgourmet.com",
  "fakeinbox.com",
  "tempmailo.com",
  "neomailbox.com",
  "autistic.org",
  "dismail.de",
  "kolabnow.com",
  "countermail.com",
  "getairmail.com",
  "stealthmail.com",
  "lockbin.com",
  "securetmail.com",
  "privy-mail.com",
  "guardmyemail.com",
  "safetymail.info",
  "encryptedmail.com",
  "safeguardmail.com",
  "confidentialmail.com",
  "mail2world.com",
  "inbox.lv",
  "rackspace.com",
  "sohu.com",
  "netease.com",
  "ctemplar.com",
  "canopymail.app",
  "postale.io",
  "privatemail.com",
  "criptext.com",
  "encryptedmail.com",
  "safe-mail.net",
  "privateme.com",
  "enigmail.net",
  "lockbin.com",
  "hush.com",
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
    console.log("click on video thumbnail");
    $(".overlay-video").addClass("visible");
    $("body").addClass("overlay-visible");
    var sourceVideo = `${$(".overlay-video").attr(
      "data-src-video"
    )}&autoplay=1`;
    $(".overlay-video iframe").attr("src", sourceVideo);
    // $(".overlay-video iframe").play();
  });

  $(".overlay").on("click", function (e) {
    console.log("clicked on overlay");
    // e.stopPropagation();
    $(this).removeClass("visible");
    $("iframe").attr("src", "");
    $("body").removeClass("overlay-visible");
  });

  //FOR HAM MENU
  function openMenu() {
    // console.log("opening menu");
    $("body").addClass("menu-opened");
    // if ($(".nav-menu .menu").hasClass("visible")) {
    //   $(".nav-menu .menu").removeClass("visible");
    // } else {
    //   $(".nav-menu .menu").addClass("visible");
    // }
  }

  function closeMenu() {
    // console.log("closing menu");
    $("body").removeClass("menu-opened");
    // if ($(".nav-menu .menu").hasClass("visible")) {
    //   $(".nav-menu .menu").removeClass("visible");
    // } else {
    //   $(".nav-menu .menu").addClass("visible");
    // }
  }

  $(".fs-ham-open").on("click", function (e) {
    // e.stopPropagation();

    if ($("body").hasClass("menu-opened")) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  $(".fs-ham-closed").on("click", function (e) {
    console.log("clicked on close icon");
    closeMenu();
  });

  $(".blur-overlay").on("click", function () {
    closeMenu();
  });

  $(".notification-icon-group").on("click", function (e) {
    e.stopPropagation();
    $(".notification-container").toggleClass("visible");
    $(".notification-count").addClass("d-none");
  });

  $(".search-icon").on("click", function (e) {
    e.stopPropagation();
    $(".search-input-container").toggleClass("visible");
  });

  $("body").on("click", function (e) {
    $(".menu.visible").removeClass("visible");
    $(".notification-container").removeClass("visible");
    $(".search-input-container").removeClass("visible");
  });

  $(".notification-container").on("click", function (e) {
    // e.stopPropagation();
  });

  $(document).on("click", ".notification-item", function (e) {
    e.stopPropagation();
    console.log("Notification read function");

    jQuery.ajax({
      type: "POST",

      url: "/wp-admin/admin-ajax.php",

      data: {
        action: "update_users_notification_status",

        notification_id: $(this).attr("notification-id"),
      },

      success: function (output) {
        console.log(output);

        return output;
      },
    });
  });

  // //UPDATE USER //PERSONALIZE
  //  jQuery.ajax({
  //   type: "POST",

  //   url: "/wp-admin/admin-ajax.php",

  //   data: {
  //     action: "update_users_meta",

  //     industry: ,
  //     areas_of_interests: ,
  //     expertise_areas: ,
  //   },

  //   success: function (output) {
  //     console.log(output);

  //     return output;
  //   },
  // });

  // //MSM //GROWTH COACH

  //   $('.send-msm').on('click', function(e){
  //     e.preventDefault()
  // jQuery.ajax({
  //     type: "POST",

  //     url: "/wp-admin/admin-ajax.php",

  //     data: {
  //       action: "send_mail_function",

  //       subject: ,
  //       message: ,
  //       receiver_email: ,
  //     },

  //     success: function (output) {
  //       console.log(output);

  //       return output;
  //     },
  //   });
  //   })

  $(".menu.visible").on("click", function (e) {
    e.stopPropagation();
  });
  $(".search-input-container").on("click", function (e) {
    e.stopPropagation();
  });

  function isElementInViewport(element) {
    var rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight)
    );
  }

  // Function to handle scroll event
  function handleScroll() {
    var sections = document.getElementsByTagName("section");

    for (var i = 0; i < sections.length; i++) {
      if (isElementInViewport(sections[i])) {
        sections[i].classList.add("active");
      } else {
        sections[i].classList.remove("active");
      }
    }
  }

  const section3 = document.querySelector("#section3");

  const section4 = document.querySelector("#section4");
  const section5 = document.querySelector("#section5");

  if (section3 && section4 && section5) {
    const section3Pos = section3.offsetTop - 132;

    const section4Pos = section4.offsetTop - 132;

    const section5Pos = section5.offsetTop - 132;
    $(window).on("scroll", function () {
      // handleScroll();
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
      } else if (window.scrollY > section4Pos && window.scrollY < section5Pos) {
        $(".nav-item.pill:not(.section2)").removeClass("active");
        $(".section2").addClass("active");
      } else if (window.scrollY > section5Pos) {
        $(".nav-item.pill:not(.section3)").removeClass("active");
        $(".section3").addClass("active");
      }
    });
  }

  // console.log("section3", topPos);

  var currentUrl = $(location).attr("href");

  $(window).on("scroll", function (event) {
    // $(".menu").removeClass("visible");
    if ($(".menu").hasClass("visible")) {
      closeMenu();
    }
    if (!currentUrl.includes("notificaiton")) {
      if (window.scrollY > 500) {
        $("header").addClass("fixed");
      } else {
        $("header").removeClass("fixed");
      }
    }

    //FOR NOTIFICATIONS

    if (currentUrl.includes("notification")) {
      if (window.scrollY > 100) {
        $(".sticky-notification-header").removeClass("d-none");
      } else {
        $(".sticky-notification-header").addClass("d-none");
      }
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
  //   $(".event-details .image-container-inner").attr(
  //     "style",
  //     "background-image: url(https://dev.gilcouncil.com/wp-content/uploads/2023/05/Rectangle-112.png)"
  //   );
  //   $(".event-details .image-container img").attr("src", "");
  // });

  $(document).on("click", ".event-item", function () {
    $(".event-item").removeClass("active");
    $(this).addClass("active");
    $(".pointer-icon").remove();
    if ($(this).find(".event-type").html() == " In Person Event") {
      $(this).prepend(`<span class = "pointer-icon">
     <svg width="21" height="25" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.39405 12.2986L20.4082 0.394501L20.0978 24.7743L0.39405 12.2986Z" fill="#F28E36"/>
</svg>

    </span>`);
    } else {
      $(this).prepend(`<span class = "pointer-icon">
      <svg width="21" height="25" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.39405 12.2986L20.4082 0.394501L20.0978 24.7743L0.39405 12.2986Z" fill="#29B1E6"/>
</svg>

    </span>`);
    }

    $(".event-details .image-container-inner").attr(
      "style",
      "background-image: url(https://dev.gilcouncil.com/wp-content/uploads/2023/05/Rectangle-112.png)"
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
    if ($(this).attr("data-registered-status") === "true") {
      $(".event-details button.btn-primary").html("Registered");
    } else {
      $(".event-details button.btn-primary").html("Register");
    }
    const desc = $(this).find(".event-description").html();
    $(".event-details .description").html(desc);
    const formattedDate = $(this).find(".event-formatted-date").html();
    $(".event-details .pill-left p").html(formattedDate);
    console.log("formatted date", formattedDate);
    const eventType = $(this).find(".event-type").html();
    $(".event-details .pill-right p").html(eventType);
    const orgName = $(this).attr("data-event-org-name");
    $(".event-details .org-name").html(orgName);
  });

  function handleSearch(e) {
    e.preventDefault();
    console.log("searched");
  }

  $('[data-function="register-event"]').on("click", function () {
    console.log("The event register function is hooked up");
    console.log("registered button", $(this).html());
    const currentButton = $(this);
    currentButton.html("processing");
    currentButton.addClass("btn-loading");
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "register_event",
        // event_id: $(".event_id").val(),
        event_id: currentButton.attr("data-register"),
      },
      success: function (output) {
        currentButton.html("Registered");
        currentButton.removeClass("btn-loading");
        currentButton.addClass("register-success");

        console.log("REGSITER EVENT", output);
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
        var counter = 0;
        output.data.events_sessions.forEach((el) => {
          if (counter < 5) {
            results.push(`<li>
        <div><a href = "${el.redirect_url}">${el.title}</a></div>
         
        </li>`);
          }
          counter++;
        });
        $(".search-results ul").html(results);
      },
    });
  });

  $(".gpd-trigger").on("click", function () {
    // $(".confrimation-overlay").removeClass("d-none");
    // $("body").addClass("overlay-visible");
    $("#gpdModal").modal("show");
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

  $(".gpd-confrimation").on("click", function () {
    console.log("clickked on gpd confrimation");
    $("#gpdModal .modal-body").html(
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
        action: "gpd_email_request",
      },
      success: function (output) {
        $("#gpdModal .modal-body").html(
          '<h2 class = "text-center">You are registered</h2>'
        );
        setTimeout(function () {
          $("#gpdModal").modal("hide");
        }, 1500);
      },
    });
  });

  $(".confrimation-box button.btn-danger").on("click", function () {
    console.log("clicked on NO");
    $(".confrimation-overlay").addClass("d-none");
    $("body").addClass("overlay-visible");
  });

  //NOTIFICATION

  function fetchNotifications() {
    console.log("The Notification list fetch function is hooked up");
    $(".notification-count").addClass("d-none");
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
        var notificationOutputForPage = [];
        var newNotification = 0;

        output.data.forEach((el, index) => {
          if (el.status == 0) {
            newNotification++;
          }
          if (el.notification_type?.startsWith("event")) {
            notificationOutput.push(
              `
            <li class = "notification-item ${
              el.status == 1 ? "read" : "unread"
            }" notification-id=${el.id}>
            <span class = "icon-container">
           <svg  viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16.4502" cy="16.7246" r="15.8057" fill="#3A81BF"/>
<path d="M20.3861 16.8089H16.4277V20.7673H20.3861V16.8089ZM19.5944 8.10059V9.68392H13.2611V8.10059H11.6777V9.68392H10.8861C10.0073 9.68392 9.31065 10.3964 9.31065 11.2673L9.30273 22.3506C9.30273 22.7705 9.46955 23.1732 9.76648 23.4702C10.0634 23.7671 10.4661 23.9339 10.8861 23.9339H21.9694C22.8402 23.9339 23.5527 23.2214 23.5527 22.3506V11.2673C23.5527 10.3964 22.8402 9.68392 21.9694 9.68392H21.1777V8.10059H19.5944ZM21.9694 22.3506H10.8861V13.6423H21.9694V22.3506Z" fill="white"/>
</svg>


            </span>
            <a href = "https://beta.gilcouncil.com/?page_id=${
              el.event_id
            }" target="_blank">${el.notification_title}</a>
             <span class = "dot-icon">
            <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="3.8584" cy="3.55859" r="3.02246" fill="#3A81BF"/>
</svg>
            <span>
            
            </li>
            `
            );
          } else if (el.notification_type?.startsWith("Content")) {
            notificationOutput.push(
              `
            <li class = "notification-item ${
              el.status == 1 ? "read" : "unread"
            }" notification-id=${el.id}>
            <span class = "icon-container">
          <svg  viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16.4502" cy="16.54" r="15.8057" fill="#3A81BF"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9277 9.94531H21.9277C22.4582 9.94531 22.9669 10.156 23.3419 10.5311C23.717 10.9062 23.9277 11.4149 23.9277 11.9453V21.9453C23.9277 22.4757 23.717 22.9845 23.3419 23.3595C22.9669 23.7346 22.4582 23.9453 21.9277 23.9453H11.9277C11.3973 23.9453 10.8886 23.7346 10.5135 23.3595C10.1384 22.9845 9.92773 22.4757 9.92773 21.9453V11.9453C9.92773 11.4149 10.1384 10.9062 10.5135 10.5311C10.8886 10.156 11.3973 9.94531 11.9277 9.94531Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9277 11.9453H21.9277C22.4582 11.9453 22.9669 12.156 23.3419 12.5311C23.717 12.9062 23.9277 13.4149 23.9277 13.9453V11.9453C23.9277 10.9453 23.0327 9.94531 21.9277 9.94531H11.9277C10.8227 9.94531 9.92773 10.9453 9.92773 11.9453V13.9453C9.92773 13.4149 10.1384 12.9062 10.5135 12.5311C10.8886 12.156 11.3973 11.9453 11.9277 11.9453Z" fill="white" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13.9258 16.9453H14.9258M13.9258 14.9453H17.9228M13.9258 18.9453H19.9228M13.9258 20.9453H17.9228" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


            </span>
            <a href = "https://beta.gilcouncil.com/?page_id=${
              el.event_id
            }" target="_blank">${el.notification_title}</a>
           
            <span class = "dot-icon">
            <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="3.8584" cy="3.55859" r="3.02246" fill="#3A81BF"/>
</svg>
            <span>
            </li>
            `
            );
          } else if (el.notification_type?.startsWith("chat")) {
            notificationOutput.push(
              `
            <li class = "notification-item ${
              el.status == 1 ? "read" : "unread"
            }" notification-id=${el.id}>
            <span class = "icon-container">
                 <svg  viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16.4502" cy="16.0615" r="15.8057" fill="#3A81BF"/>
<path d="M24.5031 11.334C24.0649 10.2882 23.4274 9.33755 22.6261 8.53517C21.8273 7.7314 20.8783 7.09235 19.8332 6.65431C18.7625 6.2034 17.6121 5.97226 16.4504 5.97463H16.4113C15.2297 5.98049 14.0871 6.21486 13.0109 6.6758C11.9747 7.11833 11.0347 7.75851 10.2433 8.56056C9.44984 9.36114 8.81965 10.3084 8.38787 11.3496C7.93966 12.4324 7.71254 13.5938 7.7199 14.7656C7.72576 16.1211 8.04998 17.4668 8.65545 18.6699V21.6387C8.65545 22.1348 9.05779 22.5371 9.55193 22.5371H12.5168C13.7255 23.1471 15.0594 23.468 16.4133 23.4746H16.4543C17.6222 23.4746 18.7531 23.2481 19.8195 22.8047C20.8594 22.3719 21.8048 21.7403 22.6027 20.9453C23.4074 20.1465 24.0402 19.2129 24.4836 18.1719C24.9426 17.0938 25.1769 15.9473 25.1828 14.7637C25.1867 13.5742 24.9562 12.4199 24.5031 11.334ZM12.5519 15.6621C12.0363 15.6621 11.6164 15.2422 11.6164 14.7246C11.6164 14.207 12.0363 13.7871 12.5519 13.7871C13.0676 13.7871 13.4875 14.207 13.4875 14.7246C13.4875 15.2422 13.0695 15.6621 12.5519 15.6621ZM16.4504 15.6621C15.9347 15.6621 15.5148 15.2422 15.5148 14.7246C15.5148 14.207 15.9347 13.7871 16.4504 13.7871C16.966 13.7871 17.3859 14.207 17.3859 14.7246C17.3859 15.2422 16.966 15.6621 16.4504 15.6621ZM20.3488 15.6621C19.8332 15.6621 19.4133 15.2422 19.4133 14.7246C19.4133 14.207 19.8332 13.7871 20.3488 13.7871C20.8644 13.7871 21.2844 14.207 21.2844 14.7246C21.2844 15.2422 20.8644 15.6621 20.3488 15.6621Z" fill="white"/>
</svg>
            </span
         



           
            <a href = "https://beta.gilcouncil.com/?page_id=${
              el.event_id
            }" target="_blank">${el.notification_title}</a>
            
             <span class = "dot-icon">
            <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="3.8584" cy="3.55859" r="3.02246" fill="#3A81BF"/>
</svg>
            <span>
            </li>
            `
            );
          } else if (el.notification_type?.startsWith("connection")) {
            notificationOutput.push(
              `
            <li class = "notification-item ${
              el.status == 1 ? "read" : "unread"
            }" notification-id=${el.id}>
              <span class = "icon-container">
           <svg  viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16.4502" cy="16.502" r="15.8057" fill="#3A81BF"/>
<g clip-path="url(#clip0_4699_10942)">
<path d="M21.498 22.2539H21.3838C21.249 21.5977 21.0117 20.9941 20.6719 20.4434C20.332 19.8926 19.9189 19.418 19.4326 19.0195C18.9463 18.6211 18.3984 18.3105 17.7891 18.0879C17.1797 17.8652 16.541 17.7539 15.873 17.7539C15.3574 17.7539 14.8594 17.8213 14.3789 17.9561C13.8984 18.0908 13.4502 18.2783 13.0342 18.5186C12.6182 18.7588 12.2402 19.0518 11.9004 19.3975C11.5605 19.7432 11.2676 20.124 11.0215 20.54C10.7754 20.9561 10.585 21.4043 10.4502 21.8848C10.3154 22.3652 10.248 22.8633 10.248 23.3789H9.12305C9.12305 22.6758 9.22559 21.999 9.43066 21.3486C9.63574 20.6982 9.93164 20.0977 10.3184 19.5469C10.7051 18.9961 11.1621 18.5068 11.6895 18.0791C12.2168 17.6514 12.8145 17.3145 13.4824 17.0684C12.8203 16.6348 12.3047 16.0898 11.9355 15.4336C11.5664 14.7773 11.3789 14.0508 11.373 13.2539C11.373 12.6328 11.4902 12.0498 11.7246 11.5049C11.959 10.96 12.2783 10.4824 12.6826 10.0723C13.0869 9.66211 13.5645 9.33984 14.1152 9.10547C14.666 8.87109 15.252 8.75391 15.873 8.75391C16.4941 8.75391 17.0771 8.87109 17.6221 9.10547C18.167 9.33984 18.6445 9.65918 19.0547 10.0635C19.4648 10.4678 19.7871 10.9453 20.0215 11.4961C20.2559 12.0469 20.373 12.6328 20.373 13.2539C20.373 13.6406 20.3262 14.0186 20.2324 14.3877C20.1387 14.7568 19.998 15.1055 19.8105 15.4336C19.623 15.7617 19.4033 16.0635 19.1514 16.3389C18.8994 16.6143 18.6035 16.8574 18.2637 17.0684C18.9199 17.3203 19.5234 17.666 20.0742 18.1055C20.625 18.5449 21.0996 19.0605 21.498 19.6523V22.2539ZM12.498 13.2539C12.498 13.7227 12.5859 14.1592 12.7617 14.5635C12.9375 14.9678 13.1777 15.3252 13.4824 15.6357C13.7871 15.9463 14.1445 16.1895 14.5547 16.3652C14.9648 16.541 15.4043 16.6289 15.873 16.6289C16.3359 16.6289 16.7725 16.541 17.1826 16.3652C17.5928 16.1895 17.9502 15.9492 18.2549 15.6445C18.5596 15.3398 18.8027 14.9824 18.9844 14.5723C19.166 14.1621 19.2539 13.7227 19.248 13.2539C19.248 12.791 19.1602 12.3545 18.9844 11.9443C18.8086 11.5342 18.5684 11.1768 18.2637 10.8721C17.959 10.5674 17.5986 10.3242 17.1826 10.1426C16.7666 9.96094 16.3301 9.87305 15.873 9.87891C15.4043 9.87891 14.9678 9.9668 14.5635 10.1426C14.1592 10.3184 13.8018 10.5586 13.4912 10.8633C13.1807 11.168 12.9375 11.5283 12.7617 11.9443C12.5859 12.3604 12.498 12.7969 12.498 13.2539ZM23.748 23.3789H25.998V24.5039H23.748V26.7539H22.623V24.5039H20.373V23.3789H22.623V21.1289H23.748V23.3789Z" fill="white"/>
</g>
<defs>
<clipPath id="clip0_4699_10942">
<rect width="18" height="18" fill="white" transform="translate(7.99805 8.75391)"/>
</clipPath>
</defs>
</svg>



            </span>
            <a href = "https://beta.gilcouncil.com/?page_id=${
              el.event_id
            }" target="_blank">${el.notification_title}</a>
            <span class = "dot-icon">
            <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="3.8584" cy="3.55859" r="3.02246" fill="#3A81BF"/>
</svg>
            <span>
            </li>
            `
            );
          } else {
            notificationOutput.push(
              `
            <li class = "notification-item ${
              el.status == 1 ? "read" : "unread"
            }" notification-id=${el.id}>
              <span class = "icon-container">
           <svg  viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16.4502" cy="16.502" r="15.8057" fill="#3A81BF"/>
<g clip-path="url(#clip0_4699_10942)">
<path d="M21.498 22.2539H21.3838C21.249 21.5977 21.0117 20.9941 20.6719 20.4434C20.332 19.8926 19.9189 19.418 19.4326 19.0195C18.9463 18.6211 18.3984 18.3105 17.7891 18.0879C17.1797 17.8652 16.541 17.7539 15.873 17.7539C15.3574 17.7539 14.8594 17.8213 14.3789 17.9561C13.8984 18.0908 13.4502 18.2783 13.0342 18.5186C12.6182 18.7588 12.2402 19.0518 11.9004 19.3975C11.5605 19.7432 11.2676 20.124 11.0215 20.54C10.7754 20.9561 10.585 21.4043 10.4502 21.8848C10.3154 22.3652 10.248 22.8633 10.248 23.3789H9.12305C9.12305 22.6758 9.22559 21.999 9.43066 21.3486C9.63574 20.6982 9.93164 20.0977 10.3184 19.5469C10.7051 18.9961 11.1621 18.5068 11.6895 18.0791C12.2168 17.6514 12.8145 17.3145 13.4824 17.0684C12.8203 16.6348 12.3047 16.0898 11.9355 15.4336C11.5664 14.7773 11.3789 14.0508 11.373 13.2539C11.373 12.6328 11.4902 12.0498 11.7246 11.5049C11.959 10.96 12.2783 10.4824 12.6826 10.0723C13.0869 9.66211 13.5645 9.33984 14.1152 9.10547C14.666 8.87109 15.252 8.75391 15.873 8.75391C16.4941 8.75391 17.0771 8.87109 17.6221 9.10547C18.167 9.33984 18.6445 9.65918 19.0547 10.0635C19.4648 10.4678 19.7871 10.9453 20.0215 11.4961C20.2559 12.0469 20.373 12.6328 20.373 13.2539C20.373 13.6406 20.3262 14.0186 20.2324 14.3877C20.1387 14.7568 19.998 15.1055 19.8105 15.4336C19.623 15.7617 19.4033 16.0635 19.1514 16.3389C18.8994 16.6143 18.6035 16.8574 18.2637 17.0684C18.9199 17.3203 19.5234 17.666 20.0742 18.1055C20.625 18.5449 21.0996 19.0605 21.498 19.6523V22.2539ZM12.498 13.2539C12.498 13.7227 12.5859 14.1592 12.7617 14.5635C12.9375 14.9678 13.1777 15.3252 13.4824 15.6357C13.7871 15.9463 14.1445 16.1895 14.5547 16.3652C14.9648 16.541 15.4043 16.6289 15.873 16.6289C16.3359 16.6289 16.7725 16.541 17.1826 16.3652C17.5928 16.1895 17.9502 15.9492 18.2549 15.6445C18.5596 15.3398 18.8027 14.9824 18.9844 14.5723C19.166 14.1621 19.2539 13.7227 19.248 13.2539C19.248 12.791 19.1602 12.3545 18.9844 11.9443C18.8086 11.5342 18.5684 11.1768 18.2637 10.8721C17.959 10.5674 17.5986 10.3242 17.1826 10.1426C16.7666 9.96094 16.3301 9.87305 15.873 9.87891C15.4043 9.87891 14.9678 9.9668 14.5635 10.1426C14.1592 10.3184 13.8018 10.5586 13.4912 10.8633C13.1807 11.168 12.9375 11.5283 12.7617 11.9443C12.5859 12.3604 12.498 12.7969 12.498 13.2539ZM23.748 23.3789H25.998V24.5039H23.748V26.7539H22.623V24.5039H20.373V23.3789H22.623V21.1289H23.748V23.3789Z" fill="white"/>
</g>
<defs>
<clipPath id="clip0_4699_10942">
<rect width="18" height="18" fill="white" transform="translate(7.99805 8.75391)"/>
</clipPath>
</defs>
</svg>



            </span>
            <a href = "https://beta.gilcouncil.com/?page_id=${
              el.event_id
            }" target="_blank">${el.notification_title}</a>
             <span class = "dot-icon">
            <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="3.8584" cy="3.55859" r="3.02246" fill="#3A81BF"/>
</svg>
            <span>
            
            </li>
            `
            );
          }
        });
        $(".notification-count").html(newNotification);

        if (newNotification) {
          $(".notification-count").removeClass("d-none");
        }
        if (!newNotification) {
          // $(".notification-count").removeClass("d-none");
          console.log(
            "NOT NEW NOTIFICATION",
            $(".notification-header .active").html()
          );
          $(".notification-header .active").html("No new notification");
          $(".notification-header .active").addClass("text-muted");
        }

        if (window.location.href.includes("notification")) {
          $(".notification-list").html(notificationOutput);
        }
        $(".notification-list").html(notificationOutput);
      },
    });
  }
  fetchNotifications();

  $(".mark-all-as-read").on("click", function () {
    if ($(this).hasClass("text-muted")) {
      return;
    }

    $(".notification-list").html(
      '<div class = "loader-outer"><div class="lds-dual-ring"></div></div>'
    );
    jQuery.ajax({
      type: "POST",

      url: "/wp-admin/admin-ajax.php",

      data: {
        action: "update_users_notification_status",

        notification_id: "",
      },

      success: function (output) {
        console.log(output, "from the mark all as read function");
        fetchNotifications();
      },
    });
    console.log("clicked on mark as read");
  });

  // setInterval()

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

  $(".jsCalendar-title-name").on("click", function () {
    console.log("clicked on the  prev arrow", $(".slick-custom-next"));
    $(".jsCalendar-nav-right")[0].click();
  });

  $(".view-all-btn").on("click", function () {
    $(".section-growth .slick-custom").toggleClass("d-none");
    $(this).toggleClass("expanded");

    if ($(".view-all-btn h3").text() == "View All") {
      $(".view-all-btn h3").text("Collapse");
    } else {
      $(".view-all-btn h3").text("View All");
    }
  });

  // console.log(
  //   "MY CALENDAR",
  //   $("#my-calendar td:not(.jsCalendar-previous):not(.jsCalendar-next)").forEach(el => console.log(el))
  // );

  //LOGIN FORM

  $("#email").on("change paste keyup", function () {
    console.log("CHANGE EVENT TRIGGERED ON INPUT");
    $(".error.email").html("");
  });

  $("#email").on("blur", function () {
    if (!$(this).val().length) {
      $(".error.email").html("This field is required");
      return;
    }

    // var emailPattern = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    // if (!emailPattern.test($(this).val())) {
    //   $(".error.email").html("Please provide a correct email format");
    // }
    // var emailValue = $(this)
    //   .val()
    //   .substr($(this).val().indexOf("@") + 1, $(this).val().length);
    // public_mail_domain.forEach((el, index) => {
    //   if (el == emailValue) {
    //     $(".error.email").html("Please provide a correct email format");
    //   }
    // });
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

  $("#passwordLogin").on("blur", function () {
    if (!$(this).val().length) {
      $(".error.passwordLogin").html("This field is required");
    }
  });

  $("#passwordLogin").on("change paste keyup", function () {
    $(".error.passwordLogin").html("");
  });

  $(".login-form-btn").on("click", function (e) {
    e.preventDefault();
    console.log("click detected on login form");
    var error = 0;
    if (!$("#email").val()) {
      $(".error.email").text("This field is required");
      error++;
    }
    if (!$("#passwordLogin").val()) {
      $(".error.passwordLogin").text("This field is required");
      error++;
    }
    if (!error) {
      $(".login-form-dummy.d-none").click();
    }
  });

  $(".login-form input").on("keydown", function (e) {
    console.log("keydown on login form");
    if (e.which === 13) {
      // Check if Enter key (key code 13) is pressed

      $(".login-form").submit(); // Trigger form submission
    }
  });

  //SIGNUP FORM

  $("#emailSignup").on("change paste keyup", function () {
    console.log("CHANGE EVENT TRIGGERED ON INPUT");
    $(".error.email").html("");
  });

  $("#emailSignup").on("blur", function () {
    if (!$(this).val().length) {
      $(".error.email").html("This field is required");
      return;
    }

    var emailPattern = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    if (!emailPattern.test($(this).val())) {
      $(".error.email").html("Please provide a correct email format");
    }
    var emailValue = $(this)
      .val()
      .substr($(this).val().indexOf("@") + 1, $(this).val().length);
    public_mail_domain.forEach((el, index) => {
      if (el == emailValue) {
        $(".error.email").html("Please provide a correct email format");
      }
    });
  });

  $("#password").on("blur", function () {
    if (!$(this).val().length) {
      $(".error.password").html("This field is required");
      return;
    }
    // const passwordPattern =
    //   /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    // const isValidPassword = passwordPattern.test($(this).val());
    // if (!isValidPassword) {
    //   $(".error.password").html(`
    //        <ul class = "error">
    //         <li>Your password should be at least 8 characters long.</li>
    //          <li>Include a combination of uppercase and lowercase letters.</li>
    //           <li>Include at least one digit (0-9).</li>
    //            <li>Include at least one special character, such as @, #, $, %, etc.</li>
    //        </ul>`);
    // }
    if ($(this).val().length < 8) {
      $(".error.password").html("Password must be atleast 8 characters long");
      return;
    }
  });

  $("#password").on("change paste keyup", function () {
    $(".error.password").html("");
  });

  $("#passwordConfirm").on("blur", function () {
    if (!$(this).val().length) {
      $(".error.passwordConfirm").html("This field is required");
      return;
    }
    if ($("#passwordConfirm").val() !== $("#password").val()) {
      $(".error.passwordConfirm").text("Password do not match");
      return;
    }
  });

  $("#passwordConfirm").on("change paste keyup", function () {
    $(".error.passwordConfirm").html("");
    if ($(this).val().length > 20) {
      $(".error.password").html("Password must be under 20 characters");
    }
  });

  // $(".signup-form").on("submit", function (e) {
  //   e.preventDefault();

  //   if (!$("#email").val()) {
  //     $(".error.email").text("This field is required");
  //     return;
  //   }
  //   if (!$("#password").val()) {
  //     $(".error.password").text("This field is required");
  //     return;
  //   }
  //   if (!$("#passwordConfirm").val()) {
  //     $(".error.passwordConfirm").text("This field is required");
  //     return;
  //   }
  //   if ($("#passwordConfirm").val() !== $("#password").val()) {
  //     $(".error.passwordConfirm").text("Password do not match");
  //     return;
  //   }
  //   $(".signup-form-step-2").removeClass("d-none");
  //   $(".signup-form-step-1").addClass("d-none");
  // });

  var inSignupPageTwo = false;
  $(".signup-form-1").on("click", function (e) {
    e.stopPropagation();
    console.log("CLICKED ON NEXT");
    var errorCount = 0;
    if (!$("#emailSignup").val()) {
      $(".error.email").text("This field is required");
      errorCount++;
    } else {
      var emailPattern = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
      if (!emailPattern.test($("#emailSignup").val())) {
        $(".error.email").html("Please provide a correct email format");
        errorCount++;
      }
      var emailValue = $("#emailSignup")
        .val()
        .substr(
          $("#emailSignup").val().indexOf("@") + 1,
          $("#emailSignup").val().length
        );
    }

    public_mail_domain.forEach((el, index) => {
      if (el == emailValue) {
        $(".error.email").html("Please provide a business email");
        errorCount++;
      }
      // //email verification
    });
    var buttonText = $(this).text();
    $(".signup-form-1").text("Validating email..");
    jQuery.ajax({
      type: "POST",

      url: "/wp-admin/admin-ajax.php",

      data: {
        action: "email_exist",

        email: $("#emailSignup").val(),
      },

      success: function (output) {
        console.log(output);
        if (!output.success) {
          if (!errorCount) {
            $(".signup-form-step-2").removeClass("d-none");
            $(".signup-form-step-1").addClass("d-none");
            inSignupPageTwo = true;
          }
        }
        $(".error.email").html("Email already exist.");
      },
      error: function (err) {
        $(".error.email").html("Something went wrong");
      },
    });
    $(".signup-form-1").text(buttonText);
  });

  $("#firstName").on("change paste keyup", function () {
    $(".error.firstName").html("");
  });

  $("#firstName").on("blur", function () {
    if (!$(this).val().length) {
      $(".error.firstName").html("This field is required");
      return;
    }
  });

  $("#lastName").on("change paste keyup", function () {
    $(".error.lastName").html("");
  });

  $("#lastName").on("blur", function () {
    if (!$(this).val().length) {
      $(".error.lastName").html("This field is required");
      return;
    }
  });

  $("#title").on("blur", function () {
    if (!$(this).val().length) {
      $(".error.title").html("This field is required");
      return;
    }
  });

  $("#company").on("change paste keyup", function () {
    $(".error.company").html("");
  });
  $("#company").on("blur", function () {
    if (!$(this).val().length) {
      $(".error.company").html("This field is required");
      return;
    }
  });

  $("#phone").on("change paste keyup", function () {
    $(".error.phone").html("");
  });
  $("#phone").on("blur", function () {
    if (!$(this).val().length) {
      $(".error.phone").html("This field is required");
      return;
    }
  });

  $("#country").on("change paste keyup", function () {
    $(".error.country").html("");
  });
  $("#country").on("blur", function () {
    if (!$(this).val().length) {
      $(".error.country").html("This field is required");
      return;
    }
  });

  $("#title").on("change paste keyup", function () {
    $(".error.title").html("");
  });

  $("#passwordConfirm").on("change paste keyup", function () {
    $(".error.passwordConfirm").html("");
    if ($(this).val().length > 20) {
      $(".error.password").html("Password must be under 20 characters");
    }
  });

  $("#terms1").on("change", function () {
    $(".terms1").removeClass("error");
  });
  $("#terms2").on("change", function () {
    $(".terms2").removeClass("error");
  });

  function checkFields() {
    var inputs = document.getElementsByTagName("input");
    var selects = document.getElementsByTagName("select");
    var checkboxes = document.getElementsByTagName("input");

    for (var i = 0; i < inputs.length; i++) {
      if (inputs[i].type !== "checkbox" && inputs[i].value === "") {
        document.getElementById("submitBtn").disabled = true;
        return;
      }
    }

    for (var i = 0; i < selects.length; i++) {
      if (selects[i].value === "") {
        document.getElementById("submitBtn").disabled = true;
        return;
      }
    }

    for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].type === "checkbox" && !checkboxes[i].checked) {
        document.getElementById("submitBtn").disabled = true;
        return;
      }
    }

    document.getElementById("submitBtn").disabled = false;
  }

  $("input, select").on("change paste keyup", function () {
    // checkFields();
  });

  // $(".signup-form-dummy").on("click", function (e) {
  //   e.stopImmediatePropagation();
  //   console.log("BUTTON CLICKED");
  //   var form2ErrorCount = 0;
  //   if (!$("#firstName").val()) {
  //     $(".error.firstName").text("This field is required");
  //     form2ErrorCount++;
  //   }
  //   if (!$("#lastName").val()) {
  //     $(".error.lastName").text("This field is required");
  //     form2ErrorCount++;
  //   }
  //   if (!$("#title").val()) {
  //     $(".error.title").text("This field is required");
  //     form2ErrorCount++;
  //   }
  //   if (!$("#company").val()) {
  //     $(".error.company").text("This field is required");
  //     form2ErrorCount++;
  //   }
  //   if (!$("#phone").val()) {
  //     $(".error.phone").text("This field is required");
  //     form2ErrorCount++;
  //   }
  //   if (!$("#country").val()) {
  //     $(".error.country").text("This field is required");
  //     form2ErrorCount++;
  //   }
  //   if (!$("#terms2").is(":checked")) {
  //     $(".terms2").addClass("error");
  //     form2ErrorCount++;
  //   }
  //   if (!$("#terms1").is(":checked")) {
  //     $(".terms1").addClass("error");
  //     form2ErrorCount++;
  //   }
  //   console.log("errorCount", form2ErrorCount);
  //   if (!form2ErrorCount) {
  //     //submit form here
  //     console.log("ready to submit", $(".signup-form").get(0));
  //     $(".signup-form").get(0).submit();
  //     // $(".signup-form-dummy").click();
  //     // $(".signup-form-dummy").trigger("click");
  //     // window.location = document.location.href;
  //   }
  // });

  $(".signup-form").on("submit", function (e) {
    e.preventDefault();
    console.log("BUTTON CLICKED");
    var form2ErrorCount = 0;
    if (!$("#firstName").val()) {
      $(".error.firstName").text("This field is required");
      form2ErrorCount++;
    }
    if (!$("#lastName").val()) {
      $(".error.lastName").text("This field is required");
      form2ErrorCount++;
    }
    if (!$("#title").val()) {
      $(".error.title").text("This field is required");
      form2ErrorCount++;
    }
    if (!$("#company").val()) {
      $(".error.company").text("This field is required");
      form2ErrorCount++;
    }
    if (!$("#phone").val()) {
      $(".error.phone").text("This field is required");
      form2ErrorCount++;
    }
    if (!$("#country").val()) {
      $(".error.country").text("This field is required");
      form2ErrorCount++;
    }
    if (!$("#terms2").is(":checked")) {
      $(".terms2").addClass("error");
      form2ErrorCount++;
    }
    if (!$("#terms1").is(":checked")) {
      $(".terms1").addClass("error");
      form2ErrorCount++;
    }
    console.log("errorCount", form2ErrorCount);
    if (!form2ErrorCount) {
      console.log("READY TO SUBMIT");

      var error = $("h2.form-error");
      var successModal = $("#successModal");
      var errorModal = $("#errorModal");
      const data = jQuery.ajax({
        type: "POST",

        url: "/wp-admin/admin-ajax.php",

        data: {
          action: "user_register_function",
          first_name: $("#firstName").val(),
          last_name: $("#lastName").val(),
          useremail: $("#emailSignup").val(),
          title: $("#title").val(),
          company: $("#company").val(),
          phone: $("#phone").val(),
          country: $("#country").val(),
          subscription: true,
          agree_tc: true,
        },

        success: function (output) {
          // window.location.href =
          //   "https://beta.gilcouncil.com/signin?signup=success";
          // console.log(typeof output.success, output.success);
          if (!output.success) {
            error.addClass("visible");
            errorModal.modal("show");
            $(errorModal).find(".modalbody p").html(output.data);
            console.log("false from the if statement");
          } else {
            successModal.modal("show");
          }

          return output;
        },
        error: function (error) {
          console.log("something went wrong");
        },
      });

      // console.log("output", data?.responseJSON);
      // if (data.status == 200) {
      //   $("#successModal .modal-body").html(
      //     `<h2>${data.responseJSON.data}</h2>`
      //   );
      // } else {
      //   $("#errorModal .modal-body").html(`<h2>${data.responseJSON.data}</h2>`);
      // }
    }
  });

  // $(".signup-form-dummy").on("click", function (e) {
  //   e.stopPropagation();
  //   console.log("event from the real bbutton", e);
  //   $(this).attr("disabled", "false");
  //   $(".signup-form").get(0).submit();
  // });

  // $("#form-signup button").on("click", function () {
  //   console.log("button clicked on test form");
  //   // $("#form-signup").submit();
  //   $('input[type="submit"]').click();
  //   // window.location = document.location.href;
  // });
  // console.log($("#test-form"));

  // $("#form-signup").on("submit", function (e) {
  //   console.log("button clicked on test form");
  //   // $("#form-signup").submit();
  //   // $('input[type="text"], textarea').val("");
  //   window.location = document.location.href;
  // });

  // $('input, textarea').val('')
  // .prop('selected', false)
  // .prop('checked', false);

  // $(window).on("keypress", function () {
  //   console.log("key pressed");
  //   if ($("input").val("")) {
  //     $(".signup-form-dummy").attr("disabled", "false");
  //   }
  // });
  $(".msm-trigger").on("click", function () {
    $("#msmModal").modal("show");
  });
  $(".msm-send").on("click", function () {
    let email = $("msm-trigger").attr("data-mail");
    console.log("servicemanager email", email);

    let currentBtn = $(this);
    let currentText = currentBtn.html();
    currentBtn.html("Processing...");
    currentBtn.html("Sending..");
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "service_manager_mail_function",
        subject: "",
        message: $(".msm-message").val(),
        receiver_email: email,
        name: "",
      },
      success: function (output) {
        console.log("service manager mail", output);
        if (output.success) {
          currentBtn.html("Sent");
          $("#msmModal").modal("hide");
          $("#successModal").modal("show");
        } else {
          currentBtn.html("Try again!");
          $("#msmModal").modal("hide");
          $("#errorModal").modal("show");
        }
      },
      error: function (err) {
        console.log("err", err);
        currentBtn.html("Try again!");
        $("#msmModal").modal("hide");
        $("#errorModal").modal("show");
      },
    });
    currentBtn.html(currentText);
  });

  //GROWTH COACH MAIL
  $(".gcm-trigger").on("click", function () {
    $("#gcmModal").modal("show");
  });
  $(".gcm-send").on("click", function () {
    let email = $("gcm-trigger").attr("data-mail");
    console.log("servicemanager email", email);

    let currentBtn = $(this);
    let currentText = currentBtn.html();
    currentBtn.html("Sending..");
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "coach_send_mail_function",
        subject: "",
        message: $(".gcm-message").val(),
        receiver_email: email,
        name: "",
      },
      success: function (output) {
        console.log("service manager mail", output);
        currentBtn.html("Sent");
      },
      error: function (err) {
        console.log("err", err);
        currentBtn.html("Try again!");
      },
    });
    currentBtn.html(currentText);
  });

  if ($("main[data-first-login=true]")) {
    console.log(
      "is first logged in",
      Boolean($("main[data-first-login=true]"))
    );
    console.log("curren url", $(location).attr("href"));
    // window.href.url;
    if (
      $(location).attr("href").includes("partner") ||
      $(location).attr("href").includes("member")
    ) {
      $("#pdModal").modal("show");
    }
  }

  // var multipleCancelButton = new Choices("#choices-multiple-remove-button", {
  //   removeItemButton: true,
  //   // maxItemCount: 5,
  //   // searchResultLimit: 5,
  //   // renderChoiceLimit: 5,
  // });
});
