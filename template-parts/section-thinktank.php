<?php 
$content = get_sub_field('growth_council_think_tanks_series_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $backgroung_image = $content['background_image'];
    $current_user_id = get_current_user_id();
    // $user_industry = get_field('industry', 'user_' . $current_user_id, false);
    // $user_area_of_interest = get_field('areas_of_interests','user_' . $current_user_id, false);
    // $user_region = get_field('region','user_' . $current_user_id, false);

  $user_industry = get_field('industry', 'user_218', false);
  $user_area_of_interest = get_field('areas_of_interests', 'user_218', false);
  $user_region = get_field('region', 'user_218', false);

  //print_r($user_industry); die;
    
    $args = array(
        'post_type' => 'ajde_events',
        'posts_per_page' => -1,
        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'event_type',
                'field' => 'slug',
                'terms' => array('session'),
                'operator' => 'NOT IN'
            )
        )
    );
    $highlighted_event = array();
    $events = new WP_Query($args);
    if (!is_wp_error($events)) {
        $event_posts = $events->posts;
        if (count($event_posts) > 0) {
            $events = array();
            foreach ($event_posts as $key => $event) {
                $event_meta = get_post_meta($event->ID);
                //print_r($event_meta);
                $event_aoi = !empty($event_meta['event_area_of_interest'][0]) ? unserialize($event_meta['event_area_of_interest'][0]) : '';
                $intererst= !empty($event_aoi) ? array_intersect($event_aoi,$user_area_of_interest) : '';    

                if(isset($event_meta['event_industry']) && ($event_meta['event_industry'][0] == $user_industry) && $event_meta['event_region'][0] == $user_region && !empty($intererst)) :
                    if (is_past_event($event_meta)  ) continue;
                 
                    $event_details = array();
                    $event_details['ID'] = $event->ID;
                    $event_details['title'] = $event->post_title;
                    $event_details['descirption'] =  $event->post_content;
                    $event_details['post_name'] =  $event->post_name;
                    $event_details['guid'] =  $event->guid;
                    $event_details['post_date'] =  $event->post_date;
                    $event_details['post_date_gmt'] =  $event->post_date_gmt;
                    $event_details['event_start'] =  date_i18n('Y-m-d H:i:s', is_array($event_meta['evcal_srow']) ? array_pop($event_meta['evcal_srow']) : $event_meta['evcal_srow']);
                    $event_details['event_end'] =  date_i18n('Y-m-d H:i:s', is_array($event_meta['evcal_erow']) ? array_pop($event_meta['evcal_erow']) : $event_meta['evcal_erow']);
                    $date = date_create($event_details['event_start']);
                    $event_details['event_start_format'] = date_format($date, 'jS F');// date_i18n('j S F', is_array($event_meta['evcal_srow']) ? array_pop($event_meta['evcal_srow']) : $event_meta['evcal_srow']);
                    $event_details['time_zone'] =  is_array($event_meta['_evo_tz']) ? array_pop($event_meta['_evo_tz']) : $event_meta['_evo_tz'];
                    $event_details['image'] =  get_the_post_thumbnail_url($event->ID);
                    $event_details['pillar_categories'] = get_the_terms($event->ID, 'event_type_3');
                    $event_details['event_type'] = get_the_terms($event->ID, 'event_type');
                    $event_details['date'] = date_create($event_details['event_start']); 
                    $event_details['date_format'] = date_format($date,"jS F, Y");

                    $location_term = get_the_terms($event->ID, 'event_location');
                    //$event_details['location_meta'] = $location_term;
                    $option_value = get_option('evo_tax_meta');
                    $event_details['location'] = $option_value['event_location'][$location_term[0]->term_id];
                    $event_details['location_name'] = $location_term[0]->name;                    
                    $event_details['location_image'] = isset($event_details['location']['evo_loc_img']) ? wp_get_attachment_image_url($event_details['location']['evo_loc_img'], 'full') : '';

                    $organizer_term = get_the_terms($event->ID, 'event_organizer');
                    $event_details['organizer'] = $option_value['event_organizer'][$organizer_term[0]->term_id];
                    $event_details['organizer']['term_name'] = isset($event_details['organizer']['term_name']) ? stripslashes($event_details['organizer']['term_name']) : '';
                    $event_details['organizer_image'] = isset($event_details['organizer']['evo_org_img']) ? wp_get_attachment_image_url($event_details['organizer']['evo_org_img'], 'full') : '';

                    //$registered_events = get_field('registered_events', 'user_' . $current_user_id, false);
                    $registered_events = get_field('registered_events', 'user_218', false);
                    if (in_array($event->ID, $registered_events)) {
                        $event_details['register_status'] = true;
                    } else {
                        $event_details['register_status'] = false;
                    }

                    $event_details['event_meta'] = $event_meta;
                    if(isset($event_meta['highlighted_event']) && $event_meta['highlighted_event'][0] == 1 ) :
                        array_push($highlighted_event, $event_details);
                    else :
                    array_push($events, $event_details);
                    endif;
                endif;
            }
            usort($events, function($a, $b) {
                return strtotime($a['event_start']) - strtotime($b['event_start']);
            });            
       }
    }

    // echo "<pre>";
    // print_r($highlighted_event[0]);
   
?>
<section class="section-think-tank-series" style="background-image: url('<?php echo $backgroung_image; ?>')">
   <div class="header-box-outer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-9">
                    <div class="header-box-inner text-black">
                        <h1 >Growth Council Think Tanks Series</h1>
                    </div>
                </div>
                <div class="col">
                    <div class="button-container d-flex justify-content-end">
                        <a href="<?php echo $content['button']['url'] ?>"><button
                                class="btn btn-primary btn-transparent btn-small btn-white-border btn-arrow btn-inverted">
                                <?php echo $content['button']['title'] ?>
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="growth-thinktank-main">
        <div class="growth-thinktank-main-container">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <div class="article-main-container" style="
                      background-image: url('<?php echo $highlighted_event[0]['image']; ?>');
					  background-size: cover;
				padding:200px 30px 100px 30px;
				border-bottom:10px solid red;
				border-radius:10px;
                    ">
                  <div class="content-container">
                    <div class="pill">
                      <p>21st May, 2023</p>
                    </div>
                    <div class="header-box text-white">
                      <h1>
                        Emerging Models, Changing Landscape & Breaking
                        Barriers
                      </h1>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
			  		<div class="article-main-container" style="
						background-image: url('<?php echo $highlighted_event[0]['image']; ?>');
						height:240px;
						padding-left:20px;
						padding-top:20px;
						border-bottom:10px solid #f28e36;
						background-size: cover;">
				  		<div class="pill-secondary pill-small">
                                <div class="left">
                                    <span class="icon">

                                        <svg width="7" height="11" viewBox="0 0 19 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.1934 2H15.1934V0H13.1934V2H5.19336V0H3.19336V2H2.19336C1.08336 2 0.203359 2.9 0.203359 4L0.193359 18C0.193359 18.5304 0.404073 19.0391 0.779146 19.4142C1.15422 19.7893 1.66293 20 2.19336 20H16.1934C17.2934 20 18.1934 19.1 18.1934 18V4C18.1934 2.9 17.2934 2 16.1934 2ZM16.1934 18H2.19336V8H16.1934V18ZM6.19336 12H4.19336V10H6.19336V12ZM10.1934 12H8.19336V10H10.1934V12ZM14.1934 12H12.1934V10H14.1934V12ZM6.19336 16H4.19336V14H6.19336V16ZM10.1934 16H8.19336V14H10.1934V16ZM14.1934 16H12.1934V14H14.1934V16Z"
                                                fill="#323232" />
                                        </svg>
                                    </span>20 may
                                </div>
                                <div class="right">
                                    <span class="icon">
                                        <svg width="7" height="11" viewBox="0 0 16 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.77669 0.166504C3.58419 0.166504 0.193359 3.55734 0.193359 7.74984C0.193359 13.4373 7.77669 21.8332 7.77669 21.8332C7.77669 21.8332 15.36 13.4373 15.36 7.74984C15.36 3.55734 11.9692 0.166504 7.77669 0.166504ZM7.77669 10.4582C7.0584 10.4582 6.36952 10.1728 5.86161 9.66492C5.3537 9.15701 5.06836 8.46813 5.06836 7.74984C5.06836 7.03154 5.3537 6.34267 5.86161 5.83476C6.36952 5.32685 7.0584 5.0415 7.77669 5.0415C8.49499 5.0415 9.18386 5.32685 9.69177 5.83476C10.1997 6.34267 10.485 7.03154 10.485 7.74984C10.485 8.46813 10.1997 9.15701 9.69177 9.66492C9.18386 10.1728 8.49499 10.4582 7.77669 10.4582Z"
                                                fill="#323232" />
                                        </svg>
                                    </span>Remote
                                </div>
                        </div>
						<div class="text-container text-white" style="margin-top:10px;">
								<p style="font-size:20px; font-weight:400,">
									Emerging Models, Changing Landscape & Breaking Barriers
								</p>
						</div>
						<div class="button-container">
								<button class="btn btn-primary btn-small btn-arrow btn-message-arrow" data-event-id = "<?php echo $highlighted_event[0]['ID'];?>" >
									Register
									<span class="message-icon">
										<svg width="16" height="13" viewBox="0 0 16 13" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M14 3.5L8 7.25L2 3.5V2L8 5.75L14 2M14 0.5H2C1.1675 0.5 0.5 1.1675 0.5 2V11C0.5 11.3978 0.658035 11.7794 0.93934 12.0607C1.22064 12.342 1.60218 12.5 2 12.5H14C14.3978 12.5 14.7794 12.342 15.0607 12.0607C15.342 11.7794 15.5 11.3978 15.5 11V2C15.5 1.60218 15.342 1.22064 15.0607 0.93934C14.7794 0.658035 14.3978 0.5 14 0.5Z"
												fill="white" />
										</svg>

									</span>
								</button>
						</div>
					
					</div>
              </div>
            </div>
          </div>
		  <div class="container">
            <div class="row">
              <div class="col-md-12" style="display:flex; flex-direction:row;">
			  <?php foreach ($events as  $value) : ?>
                <div class="slide" style="margin-top:30px; margin-right:20px; border-bottom:10px solid #f28e36;  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.05), 0 2px 2px 0 rgba(0, 0, 0, 0.19) !important; ">
                    <div class="content-container">
                        <div class="image-container" style="background-image: url(<?php echo $value['image']; ?>); background-repeat: no-repeat; height:150px; !important; padding-top:50px; padding-left:20px;">
                            <div class="pill-secondary pill-small">
                                <div class="left">
                                    <span class="icon">

                                        <svg width="7" height="11" viewBox="0 0 19 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.1934 2H15.1934V0H13.1934V2H5.19336V0H3.19336V2H2.19336C1.08336 2 0.203359 2.9 0.203359 4L0.193359 18C0.193359 18.5304 0.404073 19.0391 0.779146 19.4142C1.15422 19.7893 1.66293 20 2.19336 20H16.1934C17.2934 20 18.1934 19.1 18.1934 18V4C18.1934 2.9 17.2934 2 16.1934 2ZM16.1934 18H2.19336V8H16.1934V18ZM6.19336 12H4.19336V10H6.19336V12ZM10.1934 12H8.19336V10H10.1934V12ZM14.1934 12H12.1934V10H14.1934V12ZM6.19336 16H4.19336V14H6.19336V16ZM10.1934 16H8.19336V14H10.1934V16ZM14.1934 16H12.1934V14H14.1934V16Z"
                                                fill="#323232" />
                                        </svg>
                                    </span><?php echo $value['event_start_format']; ?>
                                </div>
                                <div class="right">
                                    <span class="icon">
                                        <svg width="7" height="11" viewBox="0 0 16 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.77669 0.166504C3.58419 0.166504 0.193359 3.55734 0.193359 7.74984C0.193359 13.4373 7.77669 21.8332 7.77669 21.8332C7.77669 21.8332 15.36 13.4373 15.36 7.74984C15.36 3.55734 11.9692 0.166504 7.77669 0.166504ZM7.77669 10.4582C7.0584 10.4582 6.36952 10.1728 5.86161 9.66492C5.3537 9.15701 5.06836 8.46813 5.06836 7.74984C5.06836 7.03154 5.3537 6.34267 5.86161 5.83476C6.36952 5.32685 7.0584 5.0415 7.77669 5.0415C8.49499 5.0415 9.18386 5.32685 9.69177 5.83476C10.1997 6.34267 10.485 7.03154 10.485 7.74984C10.485 8.46813 10.1997 9.15701 9.69177 9.66492C9.18386 10.1728 8.49499 10.4582 7.77669 10.4582Z"
                                                fill="#323232" />
                                        </svg>
                                    </span><?php $location = explode (",", $value['location_name']);  echo $location[0]; ?>
                                </div>
                            </div>
                        </div>
                        <div class="content-container-inner" style=" padding:20px;">
                            <div class="text-box">
                                <p>
                                    <?php echo $value['title'] ?>
                                </p>
                            </div>
                            <div class="button-container">
                                <button class="btn btn-primary btn-small btn-message-arrow btn-arrow" data-event-id = "<?php echo $value['ID'];?>" >
                                    <span class="message-icon">
                                        <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 3.5L8 7.25L2 3.5V2L8 5.75L14 2M14 0.5H2C1.1675 0.5 0.5 1.1675 0.5 2V11C0.5 11.3978 0.658035 11.7794 0.93934 12.0607C1.22064 12.342 1.60218 12.5 2 12.5H14C14.3978 12.5 14.7794 12.342 15.0607 12.0607C15.342 11.7794 15.5 11.3978 15.5 11V2C15.5 1.60218 15.342 1.22064 15.0607 0.93934C14.7794 0.658035 14.3978 0.5 14 0.5Z"
                                                fill="white" />
                                        </svg>

                                    </span>
                                    Register

                                    <span class="btn-icon chev-icon">
                                        <svg width="9" height="15" viewBox="0 0 9 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
			</div>
			</div>
			</div>
        </div>




 
      </div>

      </div>
</section>

 
<?php
endif;