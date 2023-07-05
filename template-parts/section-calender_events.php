<?php 
$content = get_sub_field('event_calender_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $current_user_id = get_current_user_id();  
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';    $user_industry = get_field('industry', 'user_218', false);    
  //   $user_area_of_interest = get_field('areas_of_interests', 'user_218', false);
  //   $user_region = get_field('region', 'user_218', false);
  //   $filter_year = date('Y');
  //   $filter_month = date('m'); 
  //   $all_events = true;  
  //   $region = '';

  //   $registered_events = get_field('registered_events', 'user_' . $current_user_id, false);

  //   if(!empty($user_region)){
  //     if($user_region === 'APAC/MEASA'){
  //           $region = 'apac';
  //      }
  //      else{
  //         $data = (explode(" ",$user_region));
  //         $region = strtolower($data[0]);
  //         if($data[1]){
  //              $region = strtolower($data[0]).'-'.strtolower($data[1]);
  //         }
  //      }
  // } 
  
   
  // if ($all_events) {          
  //         if($user_region === 'ALL REGIONS' || $user_region === 'Region' || $user_region === 'region' || $user_region === ''){
  //              $args = array(
  //                 'post_type' => 'ajde_events',
  //                 'posts_per_page' => 1,
  //             );
  //         }
  //         else{
  //              $args = array(
  //                 'post_type' => 'ajde_events',
  //                 'posts_per_page' => 1,
  //                 'tax_query' => array(
  //                     'relation' => 'AND',
  //                      array(
  //                         'taxonomy' => 'event_type_2',
  //                          'field' => 'slug',
  //                          'terms' => $region                 
  //                     )
  //                 )
  //             );                
  //         }
         
  //     $events_query = new WP_Query($args);
  //     $event_session = $events_query->posts;
  // } else {
  //     $events_array = get_field('registered_events', 'user_' . $current_user_id);
  //     $sessions_array = get_field('registered_sessions', 'user_' . $current_user_id);
     
  //     if( $events_array && $sessions_array){
  //         $event_session = array_merge($events_array, $sessions_array);
  //     }elseif($events_array){
  //         $event_session = $events_array;
  //     }elseif($sessions_array){
  //         $event_session = $sessions_array;
  //     }else{
  //         $event_session = null;
  //     }
      
  // }

  // if ($event_session) {
  //     if (count($event_session) > 0) {
  //         $events = array();
  //         foreach ($event_session as $key => $event) {
  //             $event_meta = get_post_meta($event->ID);
  //             if (is_past_event($event_meta)) continue;
              
  //             $event_details = array();
  //             $event_details['ID'] = $event->ID;
  //             $event_details['title'] = $event->post_title;
  //             $event_details['descirption'] =  $event->post_content;
  //             $event_details['post_name'] =  $event->post_name;           
  //             $event_details['event_start'] =  date_i18n('Y-m-d H:i:s', is_array($event_meta['evcal_srow']) ? array_pop($event_meta['evcal_srow']) : $event_meta['evcal_srow']);
  //             $event_details['event_end'] =  date_i18n('Y-m-d H:i:s', is_array($event_meta['evcal_erow']) ? array_pop($event_meta['evcal_erow']) : $event_meta['evcal_erow']);
  //             if (!empty($event_meta['_evo_tz'])) {
  //                 $event_details['time_zone'] =  is_array($event_meta['_evo_tz']) ? array_pop($event_meta['_evo_tz']) : $event_meta['_evo_tz'];
  //             }
  //             $event_details['image'] =  get_the_post_thumbnail_url($event->ID);
  //             $event_details['pillar_categories'] = get_the_terms($event->ID, 'event_type_3');
  //             $persona = array();
  //                 foreach( $event_details['pillar_categories'] as $pillar ){
  //                     if( get_field('growth_council_persona_classifcation', 'event_type_3_' . $pillar->term_id) !== null) {
  //                        $persona = array_merge( $persona, get_field('growth_council_persona_classifcation', 'event_type_3_' . $pillar->term_id));
  //                     }
  //                 }
  //             $event_details['persona'] =   $persona;
  //             $event_details['event_region'] = get_the_terms($event->ID, 'event_type_2');          
  //             if (in_array($event->ID, $registered_events)) {
  //                 $event_details['register_status'] = true;
  //             } else {
  //                 $event_details['register_status'] = false;
  //             }
             
  //             if($filter_year && $filter_month){
  //                 $startDateUnix = strtotime($event_details['event_start']);
  //                 $startYear = date("Y", $startDateUnix);
  //                 $startMonth = date("m", $startDateUnix);
  
  //                 $endDateUnix = strtotime($event_details['event_end']);
  //                 $endYear = date("Y", $endDateUnix);
  //                 $endMonth = date("m", $endDateUnix);
  //                 // return $startMonth;
  //                 if ($filter_year !== "" && $filter_month !== "") {
  //                     if (($filter_year === $startYear || $filter_year === $endYear) && ($filter_month === $startMonth || $filter_month === $endMonth)) {
  //                         array_push($events, $event_details);
  //                     }
  //                 } elseif ($filter_year !== "") {
  //                     if ($filter_year === $startYear || $filter_year === $endYear) {
  //                         array_push($events, $event_details);
  //                     }
  //                 } elseif ($filter_month !== "") {
  //                     if ($filter_month === $startMonth || $filter_month === $endMonth) {
  //                         array_push($events, $event_details);
  //                     }
  //                 } else {
  //                     array_push($events, $event_details);
  //                 }
  //             }else{
  //                 array_push($events, $event_details);
  //             }
  //         }
  //         usort($events, function($a, $b) {
  //           $events = strtotime($a['event_start']) - strtotime($b['event_start']);
  //         });
  //        //return gil_response(200, 'success', $events);
  //     } else {
  //         //return gil_response(404, 'Events not found', null);
  //     }
  // } else {
  //    //return gil_error(404, 'Events not found', null);
  // }


?>

<!-- 
<p class='form-submit d-none'>
    <input name='user_industry'  class='user_industry' value='<?php echo $user_industry ?>' />
    <input name='user_area_of_interest' class='user_area_of_interest' value='<?php echo $user_area_of_interest ?>' />
    <input name='user_region' class='user_region' value='<?php echo $user_region ?>' />
    <input name='year' class='year' value='' />
    <input name='month' class='month' value='' />
    <input name='all_events' class='all_events' value='true' />
    <input name='message_read' type='submit' class='submit button mark-as-read' value='Fetch Events' />
</p>
<div id='calender_data'>
    <p></p>
</div> -->

<section class="section-growth-calendar"
    style="background-image: url('<?php echo $content['background_image'] ?>') ; background-size: cover;"
    data-aos="fade-in" data-aos-delay="500">

    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="header-box-main text-center text-blue ">
                    <h1>Your Engagement Calendar</h1>
                </div>
                <div class="content-container event-details">
                    <div class="image-container">
                        <div class="slider-overlay"></div>
                        <!-- <img src="https://dev.gilcouncil.com/wp-content/uploads/2023/05/image-52.jpg" alt=""> -->
                        <!-- <img src=" <?php echo $events[0]['image'] ?>" alt=""> -->
                        <div class="image-container-inner"
                            style="background-image: url(https://dev.gilcouncil.com/wp-content/uploads/2023/05/image-52.jpg)">
                            <div class="pill-2 pill-small">
                                <div class="pill-left">
                                    <div class="icon-container">
                                        <svg viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 2.6416H15V0.641602H13V2.6416H5V0.641602H3V2.6416H2C0.89 2.6416 0.00999999 3.5416 0.00999999 4.6416L0 18.6416C0 19.172 0.210714 19.6807 0.585786 20.0558C0.960859 20.4309 1.46957 20.6416 2 20.6416H16C17.1 20.6416 18 19.7416 18 18.6416V4.6416C18 3.5416 17.1 2.6416 16 2.6416ZM16 18.6416H2V8.6416H16V18.6416ZM6 12.6416H4V10.6416H6V12.6416ZM10 12.6416H8V10.6416H10V12.6416ZM14 12.6416H12V10.6416H14V12.6416ZM6 16.6416H4V14.6416H6V16.6416ZM10 16.6416H8V14.6416H10V16.6416ZM14 16.6416H12V14.6416H14V16.6416Z"
                                                fill="#323232" />
                                        </svg>
                                    </div>
                                    <p>21st May, 2023</p>
                                </div>
                                <div class="icon-container dash">
                                    <svg viewBox="0 0 2 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.141602" width="2" height="31" fill="#323232" />
                                    </svg>
                                </div>
                                <div class="pill-right">
                                    <div class="icon-container">
                                        <svg viewBox="0 0 16 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.58333 0.808105C3.39083 0.808105 0 4.19894 0 8.39144C0 14.0789 7.58333 22.4748 7.58333 22.4748C7.58333 22.4748 15.1667 14.0789 15.1667 8.39144C15.1667 4.19894 11.7758 0.808105 7.58333 0.808105ZM7.58333 11.0998C6.86504 11.0998 6.17616 10.8144 5.66825 10.3065C5.16034 9.79861 4.875 9.10973 4.875 8.39144C4.875 7.67314 5.16034 6.98427 5.66825 6.47636C6.17616 5.96845 6.86504 5.68311 7.58333 5.68311C8.30163 5.68311 8.9905 5.96845 9.49841 6.47636C10.0063 6.98427 10.2917 7.67314 10.2917 8.39144C10.2917 9.10973 10.0063 9.79861 9.49841 10.3065C8.9905 10.8144 8.30163 11.0998 7.58333 11.0998Z"
                                                fill="#323232" />
                                        </svg>
                                    </div>
                                    <p>Remote</p>
                                </div>
                            </div>
                            <div class="header-box">
                                <h2>Can Precision Health transform Sickcare to Healthcare?</h2>
                                <h3 class="org-name">Justin Biralo</h3>
                            </div>
                        </div>


                    </div>
                    <div class="content-container-inner">
                        <!-- <h2>Can Precision Health transform Sickcare to Healthcare?</h2>
                        <h3 class="org-name">Justin Biralo</h3> -->
                        <p class="description">APAC Transformational Think Tank: Mobility Series: A collaborative
                            platform to introduce, share and discuss a diverse range of new ideas and provoke discussion
                            on critical issues surrounding the future of Mobility. This is where members engage with one
                            another to share cross-industry perspectives on the forces shaping and driving new growth
                            opportunities and areas of innovation. Topic: Transformative Trends in Software-Defined
                            Vehicles More Details coming soon!!</p>
                        <div class="button-container">
                            <button class="btn btn-primary btn-small btn-arrow btn-arrow-move "
                                data-function="register-event"
                                data-event-id=" <?php echo $highlighted_event[0]['ID'];?>">
                                Register
                                <span class="btn-icon">
                                    <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14 3.5L8 7.25L2 3.5V2L8 5.75L14 2M14 0.5H2C1.1675 0.5 0.5 1.1675 0.5 2V11C0.5 11.3978 0.658035 11.7794 0.93934 12.0607C1.22064 12.342 1.60218 12.5 2 12.5H14C14.3978 12.5 14.7794 12.342 15.0607 12.0607C15.342 11.7794 15.5 11.3978 15.5 11V2C15.5 1.60218 15.342 1.22064 15.0607 0.93934C14.7794 0.658035 14.3978 0.5 14 0.5Z"
                                            fill="white" />
                                    </svg>
                                </span>



                            </button>
                            <button class="btn btn-small btn-loading d-none" disabled>
                                Loading..
                                <span class=" btn-icon loading-icon">
                                    <svg width="19" height="22" viewBox="0 0 19 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8823 11.5C11.1223 11.5 8.88232 13.74 8.88232 16.5C8.88232 19.26 11.1223 21.5 13.8823 21.5C16.6423 21.5 18.8823 19.26 18.8823 16.5C18.8823 13.74 16.6423 11.5 13.8823 11.5ZM15.5323 18.85L13.3823 16.7V13.5H14.3823V16.29L16.2323 18.14L15.5323 18.85ZM14.8823 2.5H11.7023C11.2823 1.34 10.1823 0.5 8.88232 0.5C7.58232 0.5 6.48232 1.34 6.06232 2.5H2.88232C1.78232 2.5 0.882324 3.4 0.882324 4.5V19.5C0.882324 20.6 1.78232 21.5 2.88232 21.5H8.99232C8.4007 20.9258 7.9194 20.2479 7.57232 19.5H2.88232V4.5H4.88232V7.5H12.8823V4.5H14.8823V9.58C15.5923 9.68 16.2623 9.89 16.8823 10.18V4.5C16.8823 3.4 15.9823 2.5 14.8823 2.5ZM8.88232 4.5C8.33232 4.5 7.88232 4.05 7.88232 3.5C7.88232 2.95 8.33232 2.5 8.88232 2.5C9.43232 2.5 9.88232 2.95 9.88232 3.5C9.88232 4.05 9.43232 4.5 8.88232 4.5Z"
                                            fill="#D5D4D4" />
                                    </svg>

                                </span>
                            </button>
                            <button class="btn btn-small btn-success d-none">
                                Registered <span class="btn-icon success-icon"><svg width="21" height="21"
                                        viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.31982 11.4375L8.69482 15.8125L17.4448 6.4375" stroke="#F28E36"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                            <button class="btn btn-small btn-fail d-none">
                                Registration Failed <span class="btn-icon fail-icon">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.52249 2.27L8.38249 6.13L12.2225 2.29C12.3073 2.19972 12.4095 2.12749 12.5229 2.07766C12.6363 2.02783 12.7586 2.00141 12.8825 2C13.1477 2 13.4021 2.10536 13.5896 2.29289C13.7771 2.48043 13.8825 2.73478 13.8825 3C13.8848 3.1226 13.8621 3.24439 13.8156 3.35788C13.7692 3.47138 13.7001 3.57419 13.6125 3.66L9.72249 7.5L13.6125 11.39C13.7773 11.5512 13.8739 11.7696 13.8825 12C13.8825 12.2652 13.7771 12.5196 13.5896 12.7071C13.4021 12.8946 13.1477 13 12.8825 13C12.755 13.0053 12.6279 12.984 12.5091 12.9375C12.3903 12.8911 12.2825 12.8204 12.1925 12.73L8.38249 8.87L4.53249 12.72C4.44799 12.8073 4.34705 12.8769 4.23549 12.925C4.12393 12.9731 4.00395 12.9986 3.88249 13C3.61727 13 3.36292 12.8946 3.17538 12.7071C2.98784 12.5196 2.88249 12.2652 2.88249 12C2.88016 11.8774 2.9029 11.7556 2.94933 11.6421C2.99576 11.5286 3.06489 11.4258 3.15249 11.34L7.04249 7.5L3.15249 3.61C2.98767 3.44876 2.89103 3.23041 2.88249 3C2.88249 2.73478 2.98784 2.48043 3.17538 2.29289C3.36292 2.10536 3.61727 2 3.88249 2C4.12249 2.003 4.35249 2.1 4.52249 2.27Z"
                                            fill="#F23636" />
                                    </svg>

                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="calendar-outer-container">
                    <!-- <div class="dropDown-container">
                        <div class="from-group" for="data-test">
                            <select name="" id="regionType" class="form-control">
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
                            </select>
                        </div>

                    </div> -->
                    <div id="my-calendar" data-month-format="MMM YYYY"></div>
                    <div class="event-list-container">
                        <ul class="event-list"></ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<?php
endif;