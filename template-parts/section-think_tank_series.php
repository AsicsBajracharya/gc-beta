<?php 
$content = get_sub_field('event_listing');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $current_user_id = get_current_user_id();
    $user_industry = get_field('industry', 'user_' . $current_user_id, false);
    
    // $args = array(
    //     'post_type' => 'ajde_events',
    //     'posts_per_page' => -1,
    //     'tax_query' => array(
    //         'relation' => 'AND',
    //         array(
    //             'taxonomy' => 'event_type',
    //             'field' => 'slug',
    //             'terms' => array('session'),
    //             'operator' => 'NOT IN'
    //         )
    //     )
    // );
    // $highlighted_event = array();
    // $events = new WP_Query($args);
    // if (!is_wp_error($events)) {
    //     $event_posts = $events->posts;
    //     if (count($event_posts) > 0) {
    //         $events = array();
    //         foreach ($event_posts as $key => $event) {
    //             $event_meta = get_post_meta($event->ID);
    //             if (is_past_event($event_meta) && isset($event_meta['event_industry']) && ($event_meta['event_industry'] !== $user_industry) ) continue;

    //             $event_details = array();
    //             $event_details['ID'] = $event->ID;
    //             $event_details['title'] = $event->post_title;
    //             $event_details['descirption'] =  $event->post_content;
    //             $event_details['post_name'] =  $event->post_name;
    //             $event_details['guid'] =  $event->guid;
    //             $event_details['post_date'] =  $event->post_date;
    //             $event_details['post_date_gmt'] =  $event->post_date_gmt;
    //             $event_details['event_start'] =  date_i18n('Y-m-d H:i:s', is_array($event_meta['evcal_srow']) ? array_pop($event_meta['evcal_srow']) : $event_meta['evcal_srow']);
    //             $event_details['event_end'] =  date_i18n('Y-m-d H:i:s', is_array($event_meta['evcal_erow']) ? array_pop($event_meta['evcal_erow']) : $event_meta['evcal_erow']);
    //             $event_details['time_zone'] =  is_array($event_meta['_evo_tz']) ? array_pop($event_meta['_evo_tz']) : $event_meta['_evo_tz'];
    //             $event_details['image'] =  get_the_post_thumbnail_url($event->ID);
    //             $event_details['pillar_categories'] = get_the_terms($event->ID, 'event_type_3');

    //             $location_term = get_the_terms($event->ID, 'event_location');
    //             $option_value = get_option('evo_tax_meta');
    //             $event_details['location'] = $option_value['event_location'][$location_term[0]->term_id];
    //             $event_details['location_image'] = wp_get_attachment_image_url($event_details['location']['evo_loc_img'], 'full');

    //             $organizer_term = get_the_terms($event->ID, 'event_organizer');
    //             $event_details['organizer'] = $option_value['event_organizer'][$organizer_term[0]->term_id];
    //              $event_details['organizer']['term_name'] = stripslashes($event_details['organizer']['term_name']);
    //             $event_details['organizer_image'] = wp_get_attachment_image_url($event_details['organizer']['evo_org_img'], 'full');

    //             $event_details['event_meta'] = $event_meta;
    //             if(isset($event_meta['highlighted_event']) && $event_meta['highlighted_event'][0] == 1 ) :
    //                 array_push($highlighted_event, $event_details);
    //             endif;
    //             array_push($events, $event_details);
    //         }
            // usort($events, function($a, $b) {
            //     return strtotime($a['event_start']) - strtotime($b['event_start']);
            // }); 
            
          
       // }
    //}
   
?>
<p class='form-submit'>
    <input name='message_read' type='submit' class='submit button mark-as-read' value='Fetch Events' />
</p>
<?php
endif;