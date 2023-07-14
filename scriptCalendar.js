// A $( document ).ready() block.
$(document).ready(function () {
  console.log("readyt from the calendar script!");
  var calendarMonth = "";
  var calendarYear = "";
  var element = document.getElementById("my-calendar");
  if (element) {
    var myCalendar = jsCalendar.new(element);
  }

  $(".jsCalendar table thead tr.jsCalendar-week-days").html(`
    <th>Sun</th>
    <th>Mon</th>
    <th>Tue</th>
    <th>Wed</th>
    <th>Thu</th>
    <th>Fri</th>
    <th>Sat</th>
  `);

  //GET A DIV
  const yearChangeDiv = $(".jsCalendar th.jsCalendar-title");

  console.log("year change div html", yearChangeDiv.html());

  $("th.jsCalendar-title .jsCalendar-title-name").before(
    `  <span class = "left-chev">
         <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.49951 12.7002L1.49951 7.0002L7.49951 1.3002" stroke="#4EAFEA" stroke-width="2" stroke-linecap="round"/>
</svg>


        </span>
    `
  );

  $("th.jsCalendar-title .jsCalendar-title-name").after(
    `  <span class = "right-chev">
          <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M1.49951 1.2998L7.49951 6.9998L1.49951 12.6998" stroke="#4EAFEA" stroke-width="2" stroke-linecap="round"/>
  </svg>

        </span>
    `
  );

  $(
    "th.jsCalendar-title"
  ).after(` <select name="" id="regionType" class="form-control">
                                 <option value="">Region</option>
                                 <option value="APAC/MEASA">APAC/MEASA</option>
                                 <option value="AMERICAS">AMERICAS</option>
                             </select>
                             <select name="" id="eventType" class="form-control">
                                 <option value="All Events">
                                     All Events
                                 </option>
                                 <option value="My Events">
                                     My Events
                                 </option>
                             </select>`);

  console.log(" on right chev", $(".jsCalendar-title .right-chev"));

  $(document).on("click", ".jsCalendar-title .right-chev", function () {
    myCalendar.next();
  });

  $(document).on("click", ".jsCalendar-title .left-chev", function () {
    myCalendar.previous();
  });

  if (element) {
    myCalendar.onMonthRender(function (index, element, info) {
      console.log("MONTH RENDERED", info.start);
      let currentMonth = new Date(info.start).getMonth() + 1;
      let currentYear = new Date(info.start).getFullYear();
      if (currentMonth.toString().length == 1) {
        currentMonth = "0" + currentMonth;
      }
      console.log(currentYear, currentMonth, "current");
      calendarMonth = currentMonth;
      calendarYear = currentYear;
      fetchEvents(currentYear, currentMonth);
    });
  }

  //   $(".jsCalendar .jsCalendar-title-row").html(
  //     `
  //     <div class = "year-select">
  //       <span class = "left-chev">

  //         <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  // <path d="M7.49951 12.7002L1.49951 7.0002L7.49951 1.3002" stroke="#4EAFEA" stroke-width="2" stroke-linecap="round"/>
  // </svg>

  //       </span>
  //       <span class = "center">
  //       ${yearChangeDiv.html()}
  //       </span>
  //       <span class = "right-chev">
  //         <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  // <path d="M1.49951 1.2998L7.49951 6.9998L1.49951 12.6998" stroke="#4EAFEA" stroke-width="2" stroke-linecap="round"/>
  // </svg>

  //       </span>
  //       </div>

  //                             <select name="" id="regionType" class="form-control">
  //                                 <option value="">Region</option>
  //                                 <option value="APAC/MEASA">APAC/MEASA</option>
  //                                 <option value="AMERICAS">AMERICAS</option>
  //                             </select>
  //                             <select name="" id="eventType" class="form-control">
  //                                 <option value="All Events">
  //                                     All Events
  //                                 </option>
  //                                 <option value="My Events">
  //                                     My Events
  //                                 </option>
  //                             </select>

  //     `
  //   );

  function formatDate(date) {
    console.log("format day function", date);
    const startDate = new Date(date);
    var formattedDay = "";
    var formattedDate = "";
    if (startDate.getDate().toString().endsWith(1)) {
      formattedDay = `${startDate.getDate()}<span>st</span>`;
    } else if (startDate.getDate().toString().endsWith(2)) {
      formattedDay = `${startDate.getDate()}<span>nd</span>`;
    } else if (startDate.getDate().toString().endsWith(3)) {
      formattedDay = `${startDate.getDate()}<span>rd</span>`;
    } else {
      formattedDay = `${startDate.getDate()}<span>th</span>`;
    }

    formattedDate = `${formattedDay} ${
      months[startDate.getMonth()]
    }, ${startDate.getFullYear()}`;
    console.log("formatted date", formattedDate);
    return formattedDate;
  }
  function noDataFormUndefined(data) {
    if (!data) {
      return "No Data!";
    }
    return data;
  }

  function fillEventDataInitial(data) {
    console.log("FILL DATA FUNCTION CALLED", data);
    $(".event-details .image-container-inner").attr(
      "style",
      `background-image: url(${data?.image})`
    );
    $(".event-details h2").html(noDataFormUndefined(data.title));
    $(".event-details .description").html(
      noDataFormUndefined(data?.description)
    );
    $(".event-details button.btn-primary").attr("data-register", data?.title);
    $(".event-details button.btn-primary").attr(
      "data-register-status",
      data?.register_status
    );
    if (data?.register_status) {
      $(".event-details button.btn-primary").html("Registered");
    } else {
      $(".event-details button.btn-primary").html("Register");
    }
    const formattedDate = formatDate(data?.event_start);
    $(".event-details .pill-left p").html(formattedDate);
    const eventType = data?.event_type[0]?.name;
    console.log("event type", eventType);
    $(".event-details .pill-right p").html(noDataFormUndefined(eventType));
    const orgName = noDataFormUndefined(data?.organizer[0]?.term_name);
    $(".event-details .org-name").html(orgName);
  }

  const events = [];
  var eventsData = [];
  var eventDates = [];
  var days = $(
    "#my-calendar td:not(.jsCalendar-previous):not(.jsCalendar-next)"
  );
  function fetchEvents(year, month, region, eventType) {
    $(".event-list").html(
      '<div class = "loader-outer"><div class="lds-dual-ring for-events"></div></div>'
    );
    $(".event-details").addClass("loading");
    $(".event-details .loader").html(
      '<div class = "loader-outer"><div class="lds-dual-ring"></div></div>'
    );
    var form_data = jQuery("#calender_form").serializeArray();

    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "fetch_calender_events",
        message_id: $(".mark-as-read").val(),
        user_industry: $(".user_industry").val(),
        user_area_of_interest: $(".user_area_of_interest").val(),
        user_region: region,
        year: year,
        month: month,
        all_events: eventType,
      },
      success: function (output) {
        console.log("output calendar events", output.data);
        $(".lds-dual-ring.for-events").remove();
        $(".event-details").removeClass("loading");
        const events = [];
        eventsData = output.data;

        if (!output.data.length) {
          $(".event-list").html(
            '<h2 class= "text-center">No events in this month</h2>'
          );
          $(".event-details description").html("No Events This Month");
          return;
        }
        // events = [];
        output.data.forEach((element) => {
          const formattedDate = formatDate(element?.event_start);
          const startDate = new Date(element?.event_start);
          events.push(`<li class = "event-item ${
            element?.event_type[0]?.name == "Virtual Meeting"
              ? "virtual"
              : "in-person"
          }" data-img= ${element?.image} data-title=${JSON.stringify(
            element?.title
          )}
            data-id=${element?.ID}
            data-registered-status=${element?.register_status}
          
            data-event-org-name = ${element?.organizer?.term_name}
             >
             <div class = "d-none event-description">${
               element?.description
             }</div>
               <div class = "d-none event-formatted-date">${formattedDate}</div>
                 <div class = "d-none event-type"> ${
                   element.event_type[0]?.name
                 }</div>
            <div class = "event-left">
              <p class = "event-month">${months[startDate.getMonth()]}</p>
              <p class = "event-day">${startDate.getDate()}</p>
  
            </div>   
            <div class = "event-title"> <h3>${element.title}</h3></div>
            </li>`);

          let eventMonth = startDate.getMonth() + 1;
          if (eventMonth.toString().length == 1) {
            eventMonth = "0" + eventMonth;
          }

          // eventDates.push(
          //   `${startDate.getDate()}/${eventMonth}/${
          //     (startDate.getFullYear(), events)
          //   }`
          // );

          days.toArray().forEach((day, i) => {
            $(day).append("<span></span>");
            if ($(day).text() == startDate.getDate().toString()) {
              if (element.event_type[0]?.slug == "virtual-meeting") {
                $(day).addClass("virtual");
              } else {
                $(day).addClass("in-person");
              }

              if (element.register_status) {
                $(day).addClass("registered");
              }
            }
          });
        });

        $(events[0]).addClass("test");
        console.log("EVENTS ", $(events[0]), typeof events[0]);

        //         if (events[0].find(".event-type").html() == " In Person Event") {
        //           events[0].prepend(`<span class = "pointer-icon">
        //      <svg width="21" height="25" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        // <path d="M0.39405 12.2986L20.4082 0.394501L20.0978 24.7743L0.39405 12.2986Z" fill="#F28E36"/>
        // </svg>

        //     </span>`);
        //         } else {
        //           events[0].prepend(`<span class = "pointer-icon">
        //       <svg width="21" height="25" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        // <path d="M0.39405 12.2986L20.4082 0.394501L20.0978 24.7743L0.39405 12.2986Z" fill="#29B1E6"/>
        // </svg>

        //     </span>`);
        //         }
        console.log("events 0", events[0]);
        jQuery(".event-list").html(events);
        fillEventDataInitial(output.data[0]);
        // console.log("EVENTdATES", eventDates);
        // myCalendar.select(eventDates);
      },
    });
  }

  fetchEvents();

  // $('#mycalendar table tbody td')

  if (element) {
    // var myCalendar = jsCalendar.new(element);
    myCalendar.onMonthChange(function (event, date) {
      console.log("MONTH CHANGED");
      let currentMonth = new Date(date).getMonth() + 1;
      let currentYear = new Date(date).getFullYear();
      if (currentMonth.toString().length == 1) {
        currentMonth = "0" + currentMonth;
      }
      console.log(currentYear, currentMonth, "current");
      calendarMonth = currentMonth;
      calendarYear = currentYear;
      fetchEvents(currentYear, currentMonth);
    });
  }

  $("#regionType").on("change", function () {
    console.log($(this).val(), eventsData);
    fetchEvents(calendarYear, calendarMonth, $(this).val());
  });
  $("#eventType").on("change", function () {
    console.log($(this).value);
    fetchEvents(calendarYear, calendarMonth, "", $(this).val());
  });
});
