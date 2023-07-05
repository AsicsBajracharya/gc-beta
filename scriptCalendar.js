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
        console.log("output calendar events", output);
        $(".lds-dual-ring.for-events").remove();
        const events = [];
        eventsData = output.data;
        console.log("output calendar events data", eventsData);
        console.log("OUTPUT DATA LENGTH FROM OUTSIDE", output.data.length);

        if (!output.data.length) {
          console.log("OUTPUT DATA LENGTH", output.data.length);
          $(".event-list").html(
            '<h2 class= "text-center">No events in this month</h2>'
          );
          return;
        }
        // events = [];
        output.data.forEach((element) => {
          // events.push(
          //   "<li>Event title ---- " +
          //     element.title +
          //     " ---- with ID : " +
          //     element.ID
          // );

          const startDate = new Date(element.event_start);
          var formattedDay = "";
          var formattedDate = "";
          if (startDate.getDate().toString().endsWith(1)) {
            formattedDay = `${startDate.getDate()}<span>st</span>`;
          } else if (startDate.getDate().toString().endsWith(2)) {
            formattedDay = `${startDate.getDate()}<span>nd</span>`;
          } else if (startDate.getDate().toString().endsWith(2)) {
            formattedDay = `${startDate.getDate()}<span>rd</span>`;
          } else {
            formattedDay = `${startDate.getDate()}<span>th</span>`;
          }

          formattedDate = `${formattedDay} ${
            months[startDate.getMonth()]
          }, ${startDate.getFullYear()}`;

          events.push(`<li class = "event-item" data-img= ${
            element.image
          } data-title=${JSON.stringify(element.title)}
            data-id=${element.ID}
            data-registered-status=${element.register_status}
          
            data-event-org-name = ${element.organizer.term_name}
             >
             <div class = "d-none event-description">${
               element.description
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

          // $('#my-calendar table tbody tr').each((i, row) => {
          //   //  console.log( $(row).children('td'));
          //         $(row).children('td:not(.jsCalendar-next):not(.jsCalendar-previous)').each((index, col) =>{
          //           if($(col).text() == startDate.getDate()){
          //               $(col).addClass('jsCalendar-current')
          //           }
          //         })

          //     })
          let eventMonth = startDate.getMonth() + 1;
          if (eventMonth.toString().length == 1) {
            eventMonth = "0" + eventMonth;
          }

          eventDates.push(
            `${startDate.getDate()}/${eventMonth}/${
              (startDate.getFullYear(), events)
            }`
          );

          days.toArray().forEach((day, i) => {
            $(day).append("<span></span>");
            if ($(day).text() == startDate.getDate().toString()) {
              console.log("DAY FROM inside the loop", day);
              if (element.event_type[0].slug == "virtual-meeting") {
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
        jQuery(".event-list").html(events);
        // console.log("EVENTdATES", eventDates);
        myCalendar.select(eventDates);
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
