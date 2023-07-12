<?php 
$content = get_sub_field('growth_council_think_tanks_series_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $backgroung_image = $content['background_image'];
    $current_user_id = get_current_user_id();
    $user_industry = get_field('industry', 'user_' . $current_user_id, false);
    $user_area_of_interest = get_field('areas_of_interests','user_' . $current_user_id, false);
    $user_region = get_field('region','user_' . $current_user_id, false);

//   $user_industry = get_field('industry', 'user_423', false);
//   $user_area_of_interest = get_field('areas_of_interests', 'user_423', false);
//   $user_region = get_field('region', 'user_423', false);


if($user_region === 'APAC/MEASA' || $user_region === 'MEASA' || $user_region === 'APAC'){
    $user_region = 'apac';
}


//print_r($current_user_id);
if( $current_user_id == 0){

    $think_tank = array(
        'post_type' => 'ajde_events',
        'posts_per_page' => -1,
        'tag' => 'think-tank',
        
    );

    $exclusive_think_tank = array(
        'post_type' => 'ajde_events',
        'posts_per_page' => -1,
        'tag' => 'think-tank+partner-exclusive',
            );
    $events = new WP_Query($think_tank);
    $exclusive_think_tank = new WP_Query($exclusive_think_tank);
    $partner_exclusive_think_tank = array();
    $think_tank = array();

    if (!is_wp_error($events)) {
        $event_posts = $events->posts;
        if (count($event_posts) > 0) {
            //echo "<pre>";print_r($event_posts); die;          
            foreach ($event_posts as $key => $event) {         
                $event_meta = get_post_meta($event->ID);     
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
                        $event_details['industry'] = $event_meta['event_industry'][0];
                        $event_details['zoom_link'] = $event_meta['zoom_link'][0];

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

                        $event_details['event_meta'] = $event_meta;
                        // if(isset($event_meta['highlighted_event']) && $event_meta['highlighted_event'][0] == 1 ) :
                        //     array_push($highlighted_event, $event_details);
                        // else :
                        array_push($think_tank, $event_details);
               
            }            
            usort($think_tank, function($a, $b) {
                return strtotime($a['event_start']) - strtotime($b['event_start']);
            }); 
                       
       }
    }

    if (!is_wp_error($exclusive_think_tank)) {
        $event_posts = $exclusive_think_tank->posts;
        if (count($event_posts) > 0) {          
            foreach ($event_posts as $key => $event) {         
                $event_meta = get_post_meta($event->ID);     
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
                        $event_details['industry'] = $event_meta['event_industry'][0];
                        $event_details['zoom_link'] = $event_meta['zoom_link'][0];
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

                        $event_details['event_meta'] = $event_meta;
                        // if(isset($event_meta['highlighted_event']) && $event_meta['highlighted_event'][0] == 1 ) :
                        //     array_push($highlighted_event, $event_details);
                        // else :
                        array_push($partner_exclusive_think_tank, $event_details);
                        // endif;                   
                
            }           
            usort($partner_exclusive_think_tank, function($a, $b) {
                return strtotime($a['event_start']) - strtotime($b['event_start']);
            }); 
                       
       }
    }

}
else {

//print_r($user_industry); die;
$think_tank = array(
    'post_type' => 'ajde_events',
    'posts_per_page' => -1,
    'tag' => 'think-tank',
    'tax_query' => array(
        'relation' => 'AND',          
        array(
            'taxonomy' => 'event_type_2',
            'field' => 'slug',
            'terms' => $user_region,               
        )
    )
); 

$exclusive_think_tank = array(
    'post_type' => 'ajde_events',
    'posts_per_page' => -1,
    'tag' => 'think-tank+partner-exclusive',
    'tax_query' => array(
        'relation' => 'AND',          
        array(
            'taxonomy' => 'event_type_2',
            'field' => 'slug',
            'terms' => $user_region,               
        )
    )
);  


    $highlighted_event = array();
    $events = new WP_Query($think_tank);
    $exclusive_think_tank = new WP_Query($exclusive_think_tank);
    $partner_exclusive_think_tank = array();
    $think_tank = array();    
   

if (!is_wp_error($events)) {
    $event_posts = $events->posts;
    if (count($event_posts) > 0) {
        //echo "<pre>";print_r($event_posts); die;
        $events = array();
        $personalized_events = array();
        foreach ($event_posts as $key => $event) {         
            $event_meta = get_post_meta($event->ID);       
            $event_aoi = !empty($event_meta['event_area_of_interest'][0]) ? unserialize($event_meta['event_area_of_interest'][0]) : '';
            $intererst = (!empty($event_aoi) && !empty($user_area_of_interest)) ? array_intersect($event_aoi,$user_area_of_interest) : '';
            
            if (is_past_event($event_meta)  ) continue;  

           // if(isset($event_meta['event_industry']) && ($event_meta['event_industry'][0] == $user_industry) && $event_meta['event_region'][0] == $user_region && !empty($intererst)) :
            if( (isset($user_industry) && !empty($user_industry && $user_industry !== 'None')) || ( !empty( $user_area_of_interest) && isset($user_area_of_interest) && $user_area_of_interest !== 'None') ) :
                if($event_meta['event_industry'][0] == $user_industry || !empty($intererst)) : 
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
                    $event_details['industry'] = $event_meta['event_industry'][0];
                    $event_details['zoom_link'] = $event_meta['zoom_link'][0];
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

                    $registered_events = get_field('registered_events', 'user_' . $current_user_id, false);
                    //$registered_events = get_field('registered_events', 'user_218', false);
                    if(isset($registered_events) && !empty($registered_events)) :
                        if (in_array($event->ID, $registered_events)) {
                            $event_details['register_status'] = true;
                        } else {
                            $event_details['register_status'] = false;
                        }
                    endif;

                    $event_details['event_meta'] = $event_meta;
                    // if(isset($event_meta['highlighted_event']) && $event_meta['highlighted_event'][0] == 1 ) :
                    //     array_push($highlighted_event, $event_details);
                    // else :
                    array_push($personalized_events, $event_details);
                    // endif;
                endif;

            else :                                          

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
                $event_details['industry'] = $event_meta['event_industry'][0];
                $event_details['zoom_link'] = $event_meta['zoom_link'][0];


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

                $registered_events = get_field('registered_events', 'user_' . $current_user_id, false);
                //$registered_events = get_field('registered_events', 'user_218', false);
                if(isset($registered_events) && !empty($registered_events)) :
                    if (in_array($event->ID, $registered_events)) {
                        $event_details['register_status'] = true;
                    } else {
                        $event_details['register_status'] = false;
                    }
                endif;

                $event_details['event_meta'] = $event_meta;
                // if(isset($event_meta['highlighted_event']) && $event_meta['highlighted_event'][0] == 1 ) :
                //     array_push($highlighted_event, $event_details);
                // else :
                array_push($events, $event_details);
                //endif;

            endif;
        }
        if( (isset($user_industry) && !empty($user_industry && $user_industry !== 'None')) || ( !empty( $user_area_of_interest) && isset($user_area_of_interest) && $user_area_of_interest !== 'None') ) :
            $think_tank = $personalized_events;                
            else :
                $think_tank = $events;                    
        endif;
        usort($think_tank, function($a, $b) {
            return strtotime($a['event_start']) - strtotime($b['event_start']);
        }); 
                   
   }
}

if (!is_wp_error($exclusive_think_tank)) {
    $event_posts = $exclusive_think_tank->posts;
    if (count($event_posts) > 0) {
        //echo "<pre>";print_r($event_posts); die;
        $events = array();
        $personalized_events = array();
        foreach ($event_posts as $key => $event) {         
            $event_meta = get_post_meta($event->ID);       
            $event_aoi = !empty($event_meta['event_area_of_interest'][0]) ? unserialize($event_meta['event_area_of_interest'][0]) : '';
            $intererst = (!empty($event_aoi) && !empty($user_area_of_interest)) ? array_intersect($event_aoi,$user_area_of_interest) : '';
            
            if (is_past_event($event_meta)  ) continue;  

           // if(isset($event_meta['event_industry']) && ($event_meta['event_industry'][0] == $user_industry) && $event_meta['event_region'][0] == $user_region && !empty($intererst)) :
            if( (isset($user_industry) && !empty($user_industry && $user_industry !== 'None')) || ( !empty( $user_area_of_interest) && isset($user_area_of_interest) && $user_area_of_interest !== 'None') ) :
                if($event_meta['event_industry'][0] == $user_industry || !empty($intererst)) : 
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
                    $event_details['industry'] = $event_meta['event_industry'][0];
                    $event_details['zoom_link'] = $event_meta['zoom_link'][0];

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

                    $registered_events = get_field('registered_events', 'user_' . $current_user_id, false);
                    //$registered_events = get_field('registered_events', 'user_218', false);
                    if(isset($registered_events) && !empty($registered_events)) :
                        if (in_array($event->ID, $registered_events)) {
                            $event_details['register_status'] = true;
                        } else {
                            $event_details['register_status'] = false;
                        }
                    endif;

                    $event_details['event_meta'] = $event_meta;
                    // if(isset($event_meta['highlighted_event']) && $event_meta['highlighted_event'][0] == 1 ) :
                    //     array_push($highlighted_event, $event_details);
                    // else :
                    array_push($personalized_events, $event_details);
                    // endif;
                endif;

            else :                                          

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
                $event_details['industry'] = $event_meta['event_industry'][0];
                $event_details['zoom_link'] = $event_meta['zoom_link'][0];


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

                $registered_events = get_field('registered_events', 'user_' . $current_user_id, false);
                //$registered_events = get_field('registered_events', 'user_218', false);
                if(isset($registered_events) && !empty($registered_events)) :
                    if (in_array($event->ID, $registered_events)) {
                        $event_details['register_status'] = true;
                    } else {
                        $event_details['register_status'] = false;
                    }
                endif;

                $event_details['event_meta'] = $event_meta;
                // if(isset($event_meta['highlighted_event']) && $event_meta['highlighted_event'][0] == 1 ) :
                //     array_push($highlighted_event, $event_details);
                // else :
                array_push($events, $event_details);
                //endif;

            endif;
        }
        if( (isset($user_industry) && !empty($user_industry && $user_industry !== 'None')) || ( !empty( $user_area_of_interest) && isset($user_area_of_interest) && $user_area_of_interest !== 'None') ) :
            $partner_exclusive_think_tank = $personalized_events;                
            else :
                $partner_exclusive_think_tank = $events;                    
        endif;
        usort($partner_exclusive_think_tank, function($a, $b) {
            return strtotime($a['event_start']) - strtotime($b['event_start']);
        }); 
                   
   }
}

}

//     echo "<pre>";
//     print_r($partner_exclusive_think_tank);
//    echo "<pre>";
//    print_r(count($think_tank) );
   
?>

<section class="section-think-tank-series" style="
        background-image: url('https://dev.gilcouncil.com/wp-content/uploads/2023/05/GC-Think-tank-series-bg.jpg');
      ">
    <div class="header-box-outer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="header-box-inner text-white">
                        <h1><?php echo $content['heading'] ?></h1>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="button-container d-flex">
                        <form action="<?php echo $content['button']['url'] ?>" method="post">
                            <?php if (!is_user_logged_in() ) : ?>
                            <input name="cta-prospect" value="think_tank" hidden>
                            <?php else : ?>
                            <input name="cta-member" value="think_tank" hidden>
                            <?php endif;?>
                            <button type="submit"
                                class="btn btn-small btn-transparent btn-white-border btn-arrow btn-arrow-move btn-transparent-arrow-move">
                                <?php echo $content['button']['title'] ?>
                                <span class="btn-icon">
                                    <svg viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="think-tank-content">
        <div class="container">
            <div class="row">
                <?php if(isset($partner_exclusive_think_tank[0]) && !empty($partner_exclusive_think_tank[0])) : ?>

                <div class="col-md-8">
                    <a href="<?php echo (isset($partner_exclusive_think_tank[0]['zoom_link']) && !empty($partner_exclusive_think_tank[0]['zoom_link']))  ? $partner_exclusive_think_tank[0]['zoom_link'] : "https://www.frost.com/event/growth-council-think-tanks/" ?>"
                        target="_blank">
                        <div class="think-tank-main"
                            style="background-image: url('<?php echo $partner_exclusive_think_tank[0]['image']; ?>'); ">
                            <?php if(isset($partner_exclusive_think_tank[0]['industry']) && !empty($partner_exclusive_think_tank[0]['industry']) && $partner_exclusive_think_tank[0]['industry'] !== 'None') :?>
                            <div class="pill-secondary pill-industry">
                                <?php echo $partner_exclusive_think_tank[0]['industry']; ?>
                            </div>
                            <?php  endif; ?>
                            <div class="content-container">
                                <div class="pill-secondary">
                                    <span class="left">
                                        <span class="icon">
                                            <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.1934 2H15.1934V0H13.1934V2H5.19336V0H3.19336V2H2.19336C1.08336 2 0.203359 2.9 0.203359 4L0.193359 18C0.193359 18.5304 0.404073 19.0391 0.779146 19.4142C1.15422 19.7893 1.66293 20 2.19336 20H16.1934C17.2934 20 18.1934 19.1 18.1934 18V4C18.1934 2.9 17.2934 2 16.1934 2ZM16.1934 18H2.19336V8H16.1934V18ZM6.19336 12H4.19336V10H6.19336V12ZM10.1934 12H8.19336V10H10.1934V12ZM14.1934 12H12.1934V10H14.1934V12ZM6.19336 16H4.19336V14H6.19336V16ZM10.1934 16H8.19336V14H10.1934V16ZM14.1934 16H12.1934V14H14.1934V16Z"
                                                    fill="#323232" />
                                            </svg> </span>
                                        <?php echo $partner_exclusive_think_tank[0]['event_start_format']; ?>
                                    </span>

                                    <div class="right">
                                        <span class="icon"><svg width="16" height="22" viewBox="0 0 16 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.77669 0.166504C3.58419 0.166504 0.193359 3.55734 0.193359 7.74984C0.193359 13.4373 7.77669 21.8332 7.77669 21.8332C7.77669 21.8332 15.36 13.4373 15.36 7.74984C15.36 3.55734 11.9692 0.166504 7.77669 0.166504ZM7.77669 10.4582C7.0584 10.4582 6.36952 10.1728 5.86161 9.66492C5.3537 9.15701 5.06836 8.46813 5.06836 7.74984C5.06836 7.03154 5.3537 6.34267 5.86161 5.83476C6.36952 5.32685 7.0584 5.0415 7.77669 5.0415C8.49499 5.0415 9.18386 5.32685 9.69177 5.83476C10.1997 6.34267 10.485 7.03154 10.485 7.74984C10.485 8.46813 10.1997 9.15701 9.69177 9.66492C9.18386 10.1728 8.49499 10.4582 7.77669 10.4582Z"
                                                    fill="#323232" />
                                            </svg>
                                        </span>
                                        <?php echo explode(",", $partner_exclusive_think_tank[0]['location_name'])[0]; ?>
                                    </div>
                                </div>
                                <div class="text-container text-white">
                                    <h3><?php echo $partner_exclusive_think_tank[0]['title'] ?></h3>
                                </div>
                                <div class="button-container">
                                    <?php if($partner_exclusive_think_tank[0]['register_status'] == false) :?>
                                    <button class="btn btn-primary btn-small btn-arrow btn-message-arrow"
                                        data-function="register-event" data-register="9580"
                                        data-event-id="<?php echo $partner_exclusive_think_tank[0]['ID'];?>">
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
                                                <path d="M4.31982 11.4375L8.69482 15.8125L17.4448 6.4375"
                                                    stroke="#F28E36" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
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
                                    <?php else : ?>
                                    <button class="btn btn-small btn-success" data-function="register-event"
                                        data-register="9580"
                                        data-event-id="<?php echo $partner_exclusive_think_tank[0]['ID'];?>">

                                        Registered
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.31982 11.4375L8.69482 15.8125L17.4448 6.4375" stroke="#F28E36"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        </span>
                                    </button>
                                    <?php endif; ?>


                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endif; ?>


                <div class="col-md-4">
                    <?php  if(isset($partner_exclusive_think_tank[1]) && !empty($partner_exclusive_think_tank[1])) : ?>
                    <a href="<?php echo (isset($partner_exclusive_think_tank[1]['zoom_link']) && !empty($partner_exclusive_think_tank[1]['zoom_link']))  ? $partner_exclusive_think_tank[1]['zoom_link'] : "https://www.frost.com/event/growth-council-think-tanks/" ?>"
                        target="_blank">
                        <div class="think-tank-sub" style="background-image: url('<?php echo $partner_exclusive_think_tank[1]['image']; ?>');
                ">
                            <?php if(isset($partner_exclusive_think_tank[1]['industry']) && !empty($partner_exclusive_think_tank[1]['industry']) && $partner_exclusive_think_tank[1]['industry'] !=='None') :?>
                            <div class="pill-secondary pill-industry">
                                <?php echo $partner_exclusive_think_tank[1]['industry']; ?>
                            </div>
                            <?php  endif; ?>
                            <div class="content-container">
                                <div class="pill-secondary pill-small">
                                    <div class="left">
                                        <span class="icon">
                                            <svg width="7" height="11" viewBox="0 0 19 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.1934 2H15.1934V0H13.1934V2H5.19336V0H3.19336V2H2.19336C1.08336 2 0.203359 2.9 0.203359 4L0.193359 18C0.193359 18.5304 0.404073 19.0391 0.779146 19.4142C1.15422 19.7893 1.66293 20 2.19336 20H16.1934C17.2934 20 18.1934 19.1 18.1934 18V4C18.1934 2.9 17.2934 2 16.1934 2ZM16.1934 18H2.19336V8H16.1934V18ZM6.19336 12H4.19336V10H6.19336V12ZM10.1934 12H8.19336V10H10.1934V12ZM14.1934 12H12.1934V10H14.1934V12ZM6.19336 16H4.19336V14H6.19336V16ZM10.1934 16H8.19336V14H10.1934V16ZM14.1934 16H12.1934V14H14.1934V16Z"
                                                    fill="#323232"></path>
                                            </svg>
                                        </span><?php echo isset($partner_exclusive_think_tank[1]['event_start_format']) ? $partner_exclusive_think_tank[1]['event_start_format'] : ''; ?>
                                    </div>
                                    <div class="right">
                                        <span class="icon">
                                            <svg width="7" height="11" viewBox="0 0 16 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.77669 0.166504C3.58419 0.166504 0.193359 3.55734 0.193359 7.74984C0.193359 13.4373 7.77669 21.8332 7.77669 21.8332C7.77669 21.8332 15.36 13.4373 15.36 7.74984C15.36 3.55734 11.9692 0.166504 7.77669 0.166504ZM7.77669 10.4582C7.0584 10.4582 6.36952 10.1728 5.86161 9.66492C5.3537 9.15701 5.06836 8.46813 5.06836 7.74984C5.06836 7.03154 5.3537 6.34267 5.86161 5.83476C6.36952 5.32685 7.0584 5.0415 7.77669 5.0415C8.49499 5.0415 9.18386 5.32685 9.69177 5.83476C10.1997 6.34267 10.485 7.03154 10.485 7.74984C10.485 8.46813 10.1997 9.15701 9.69177 9.66492C9.18386 10.1728 8.49499 10.4582 7.77669 10.4582Z"
                                                    fill="#323232"></path>
                                            </svg>
                                        </span><?php echo isset($partner_exclusive_think_tank[1]['location_name']) ? explode(",", $partner_exclusive_think_tank[1]['location_name'])[0] : '' ?>
                                    </div>
                                </div>
                                <p class="tagline-small">Also to be available on demand</p>
                                <div class="text-container text-white">
                                    <p><?php echo $partner_exclusive_think_tank[1]['title']; ?></p>
                                </div>
                                <div class="button-container">
                                    <?php if($partner_exclusive_think_tank[1]['register_status'] == false) : ?>
                                    <button class="btn btn-primary btn-small btn-arrow btn-message-arrow"
                                        data-function="register-event" data-register="9580"
                                        data-event-id="(<?php echo $partner_exclusive_think_tank[1]['ID']; ?>">
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
                                                <path d="M4.31982 11.4375L8.69482 15.8125L17.4448 6.4375"
                                                    stroke="#F28E36" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
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
                                    <?php else : ?>
                                    <button class="btn btn-small btn-success" data-function="register-event"
                                        data-register="9580"
                                        data-event-id="<?php echo $partner_exclusive_think_tank[1]['ID'];?>">

                                        Registered
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.31982 11.4375L8.69482 15.8125L17.4448 6.4375" stroke="#F28E36"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        </span>
                                    </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </a>


                    <?php endif; ?>

                    <?php  if(isset($partner_exclusive_think_tank[2]) && !empty($partner_exclusive_think_tank[2])) : ?>
                    <a href="<?php echo (isset($partner_exclusive_think_tank[2]['zoom_link']) && !empty($partner_exclusive_think_tank[2]['zoom_link']))  ? $partner_exclusive_think_tank[2]['zoom_link'] : "https://www.frost.com/event/growth-council-think-tanks/" ?>"
                        target="_blank">
                        <div class="think-tank-sub" style="background-image: url('<?php echo $partner_exclusive_think_tank[2]['image']; ?>');
                ">
                            <?php if(isset($partner_exclusive_think_tank[2]['industry']) && !empty($partner_exclusive_think_tank[2]['industry']) && $partner_exclusive_think_tank[2]['industry'] !=='None') :?>
                            <div class="pill-secondary pill-industry">
                                <?php echo $partner_exclusive_think_tank[2]['industry']; ?>
                            </div>
                            <?php  endif; ?>
                            <div class="content-container">
                                <div class="pill-secondary pill-small">
                                    <div class="left">
                                        <span class="icon">
                                            <svg width="7" height="11" viewBox="0 0 19 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.1934 2H15.1934V0H13.1934V2H5.19336V0H3.19336V2H2.19336C1.08336 2 0.203359 2.9 0.203359 4L0.193359 18C0.193359 18.5304 0.404073 19.0391 0.779146 19.4142C1.15422 19.7893 1.66293 20 2.19336 20H16.1934C17.2934 20 18.1934 19.1 18.1934 18V4C18.1934 2.9 17.2934 2 16.1934 2ZM16.1934 18H2.19336V8H16.1934V18ZM6.19336 12H4.19336V10H6.19336V12ZM10.1934 12H8.19336V10H10.1934V12ZM14.1934 12H12.1934V10H14.1934V12ZM6.19336 16H4.19336V14H6.19336V16ZM10.1934 16H8.19336V14H10.1934V16ZM14.1934 16H12.1934V14H14.1934V16Z"
                                                    fill="#323232"></path>
                                            </svg>
                                        </span><?php echo isset($partner_exclusive_think_tank[2]['event_start_format']) ? $partner_exclusive_think_tank[2]['event_start_format'] : ''; ?>
                                    </div>
                                    <div class="right">
                                        <span class="icon">
                                            <svg width="7" height="11" viewBox="0 0 16 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.77669 0.166504C3.58419 0.166504 0.193359 3.55734 0.193359 7.74984C0.193359 13.4373 7.77669 21.8332 7.77669 21.8332C7.77669 21.8332 15.36 13.4373 15.36 7.74984C15.36 3.55734 11.9692 0.166504 7.77669 0.166504ZM7.77669 10.4582C7.0584 10.4582 6.36952 10.1728 5.86161 9.66492C5.3537 9.15701 5.06836 8.46813 5.06836 7.74984C5.06836 7.03154 5.3537 6.34267 5.86161 5.83476C6.36952 5.32685 7.0584 5.0415 7.77669 5.0415C8.49499 5.0415 9.18386 5.32685 9.69177 5.83476C10.1997 6.34267 10.485 7.03154 10.485 7.74984C10.485 8.46813 10.1997 9.15701 9.69177 9.66492C9.18386 10.1728 8.49499 10.4582 7.77669 10.4582Z"
                                                    fill="#323232"></path>
                                            </svg>
                                        </span><?php echo isset($partner_exclusive_think_tank[2]['location_name']) ? explode(",", $partner_exclusive_think_tank[2]['location_name'])[0] : '' ?>
                                    </div>
                                </div>
                                <p class="tagline-small">Also to be available on demand</p>
                                <div class="text-container text-white">
                                    <p><?php echo $partner_exclusive_think_tank[2]['title']; ?></p>
                                </div>
                                <div class="button-container">
                                    <?php if($partner_exclusive_think_tank[2]['register_status'] == false) : ?>
                                    <button class="btn btn-primary btn-small btn-arrow btn-message-arrow"
                                        data-function="register-event" data-register="9580"
                                        data-event-id="(<?php echo $partner_exclusive_think_tank[2]['ID']; ?>">
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
                                                <path d="M4.31982 11.4375L8.69482 15.8125L17.4448 6.4375"
                                                    stroke="#F28E36" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
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
                                    <?php else : ?>
                                    <button class="btn btn-small btn-success" data-function="register-event"
                                        data-register="9580"
                                        data-event-id="<?php echo $partner_exclusive_think_tank[2]['ID'];?>">

                                        Registered
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.31982 11.4375L8.69482 15.8125L17.4448 6.4375" stroke="#F28E36"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        </span>
                                    </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </a>

                    <?php endif; ?>
                </div>
            </div>


        </div>
        <div class="container">
            <div class="think-tank-slider-outer-container">
                <div class="think-tank-slider">
                    <?php for($x = 0; $x < count($think_tank); $x++) { ?>
                    <a href="<?php echo (isset($partner_exclusive_think_tank[$x]['zoom_link']) && !empty($partner_exclusive_think_tank[$x]['zoom_link']))  ? $partner_exclusive_think_tank[$x]['zoom_link'] : "https://www.frost.com/event/growth-council-think-tanks/" ?>"
                        target="_blank">
                        <div class="slide">
                            <div class="content-container">
                                <div class="image-container" style="
                      background-image: url(<?php echo $think_tank[$x]['image']; ?>);
                    ">
                                    <div class="slider-overlay"></div>
                                    <?php if(isset($think_tank[$x]['industry']) && !empty($think_tank[$x]['industry']) && $think_tank[$x]['industry'] !== 'None') : ?>
                                    <div class="pill-secondary pill-industry">
                                        <?php echo $think_tank[$x]['industry']; ?>
                                    </div>
                                    <?php  endif; ?>
                                    <div class="pill-secondary pill-small">
                                        <div class="left">
                                            <span class="icon">
                                                <svg width="7" height="11" viewBox="0 0 19 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.1934 2H15.1934V0H13.1934V2H5.19336V0H3.19336V2H2.19336C1.08336 2 0.203359 2.9 0.203359 4L0.193359 18C0.193359 18.5304 0.404073 19.0391 0.779146 19.4142C1.15422 19.7893 1.66293 20 2.19336 20H16.1934C17.2934 20 18.1934 19.1 18.1934 18V4C18.1934 2.9 17.2934 2 16.1934 2ZM16.1934 18H2.19336V8H16.1934V18ZM6.19336 12H4.19336V10H6.19336V12ZM10.1934 12H8.19336V10H10.1934V12ZM14.1934 12H12.1934V10H14.1934V12ZM6.19336 16H4.19336V14H6.19336V16ZM10.1934 16H8.19336V14H10.1934V16ZM14.1934 16H12.1934V14H14.1934V16Z"
                                                        fill="#323232" />
                                                </svg> </span><?php echo $think_tank[$x]['event_start_format']; ?>
                                        </div>
                                        <div class="right">
                                            <span class="icon">
                                                <svg width="7" height="11" viewBox="0 0 16 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.77669 0.166504C3.58419 0.166504 0.193359 3.55734 0.193359 7.74984C0.193359 13.4373 7.77669 21.8332 7.77669 21.8332C7.77669 21.8332 15.36 13.4373 15.36 7.74984C15.36 3.55734 11.9692 0.166504 7.77669 0.166504ZM7.77669 10.4582C7.0584 10.4582 6.36952 10.1728 5.86161 9.66492C5.3537 9.15701 5.06836 8.46813 5.06836 7.74984C5.06836 7.03154 5.3537 6.34267 5.86161 5.83476C6.36952 5.32685 7.0584 5.0415 7.77669 5.0415C8.49499 5.0415 9.18386 5.32685 9.69177 5.83476C10.1997 6.34267 10.485 7.03154 10.485 7.74984C10.485 8.46813 10.1997 9.15701 9.69177 9.66492C9.18386 10.1728 8.49499 10.4582 7.77669 10.4582Z"
                                                        fill="#323232" />
                                                </svg>
                                            </span><?php $location = explode (",", $think_tank[$x]['location_name']);  echo $location[0]; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-container-inner">
                                    <div class="text-box">
                                        <p><?php echo $think_tank[$x]['title'] ?></p>
                                    </div>
                                    <div class="button-container">
                                        <?php if($think_tank[$x]['register_status'] == false) : ?>
                                        <button class="btn btn-primary btn-small btn-arrow btn-message-arrow"
                                            data-function="register-event" data-register="9580"
                                            data-event-id="(<?php echo $think_tank[$x]['ID']; ?>">
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
                                                    <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
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
                                                    <path d="M4.31982 11.4375L8.69482 15.8125L17.4448 6.4375"
                                                        stroke="#F28E36" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
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
                                        <?php else : ?>
                                        <button class="btn btn-small btn-success" data-function="register-event"
                                            data-register="9580"
                                            data-event-id="<?php echo $highlighted_event[0]['ID'];?>">

                                            Registered
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.31982 11.4375L8.69482 15.8125L17.4448 6.4375"
                                                    stroke="#F28E36" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            </span>
                                        </button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
</section>




<?php
endif;