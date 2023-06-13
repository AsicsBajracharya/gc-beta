// A $( document ).ready() block.
$( document ).ready(function() {
    console.log( "readyt from the calendar script!" );
    var element = document.getElementById("my-calendar");
    if(element){

        var myCalendar = jsCalendar.new(element);
       
    }

    const events = []
    var eventsData = []
    var eventDates = []
    function fetchEvents(year, month, region, eventType) {
      $('.event-list').html('<div class = "loader-outer"><div class="lds-dual-ring for-events"></div></div>')
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
          $('.lds-dual-ring.for-events').remove()
          // const events = [];
          eventsData = output.data
          console.log("output calendar events data", eventsData);
          console.log('OUTPUT DATA LENGTH FROM OUTSIDE', output.data.length)
         
          if(!output.data.length){
            console.log('OUTPUT DATA LENGTH', output.data.length)
            $('.event-list').html('<h2 class= "text-center">No events in this month</h2>')
            return
          }
        
          output.data.forEach((element) => {
            // events.push(
            //   "<li>Event title ---- " +
            //     element.title +
            //     " ---- with ID : " +
            //     element.ID
            // );
  
  
            const startDate = new Date(element.event_start)
            events.push(`<li class = "event-item" data-img= ${
              element.image
            } data-title=${JSON.stringify(element.title)}
            data-id=${element.ID}
            data-registered-status=${element.register_status}
             >
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
            let eventMonth = startDate.getMonth() + 1
            if(eventMonth.toString().length == 1){
                eventMonth = "0" + eventMonth
            }
          
            eventDates.push(`${startDate.getDate()}/${eventMonth}/${startDate.getFullYear()}`)
          });
          jQuery(".event-list").html(events);
          console.log('EVENTdATES', eventDates)
          myCalendar.select(eventDates)

        },
      });
    }
  
    fetchEvents();

    
    if(element){

        // var myCalendar = jsCalendar.new(element);
        myCalendar.onMonthChange(function (event, date) {
        // inputB.value = date.toString();
            console.log("month change", new Date(date).getMonth(), new Date(date).getFullYear())
            let currentMonth = new Date(date).getMonth() + 1
            let currentYear =  new Date(date).getFullYear()
            if(currentMonth.toString().length == 1){
                currentMonth = "0" + currentMonth
            }
                console.log(currentYear, currentMonth, 'current')
                    fetchEvents(currentYear,  currentMonth)
        });
    }


    $('#regionType').on('change', function(){
        console.log($(this).val(), eventsData)
        fetchEvents("", "", $(this).val())
       
    })
    $('#eventType').on('change', function(){
        console.log($(this).value)
        fetchEvents("", "","", $(this).val())
    })
});