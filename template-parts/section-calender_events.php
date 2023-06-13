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
</div>

<section class="section-growth-calendar" style="background-image: url('<?php echo $content['background_image'] ?>') ; background-size: cover;"  data-aos="fade-in" data-aos-delay="500">
<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-1">
      <div class="content-container event-details">
        <div class="image-container">
          <img src="https://dev.gilcouncil.com/wp-content/uploads/2023/05/image-52.jpg" alt="">
          <!-- <img src=" <?php echo $events[0]['image'] ?>" alt=""> -->
        </div>
        <div class="content-container-inner">
           <h2>Can Precision Health transform Sickcare to Healthcare?</h2>
           <h3>Justin Biralo</h3>
           <p>Description</p>              
           <div class="button-container">
            <button class="btn btn-primary" data-function="register-event">Register now</button>
           </div>
        </div>
      </div>
    </div>
    <div class="col-md-7">
      <div class="calendar-outer-container">
        <div class="dropDown-container">
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
        
        </div>
      <div id="my-calendar"  data-month-format="MMM YYYY"></div>
      </div>
     
      <div class="event-list-container">
        <ul class="event-list"></ul>
      </div>   
    </div>
  </div>
</div>
</section>
<?php
endif;