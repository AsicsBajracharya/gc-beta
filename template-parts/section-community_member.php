<?php 
$content = get_sub_field('growth_community_member_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    // print_r($content); die;
          
       $current_user_id = get_current_user_id();
   
       $args = array();
       $meta_query = array();
       $args['order'] = 'DESC';
       $args['orderby'] = 'registered_date';
       $args['role'] = '';   
    // if (!empty($url_params['region']) && $url_params['region'] !== 'Region' ) {
        
    //     if($url_params['region'] === 'APAC/MEASA'){
            
    //     //   $args['role'] = array('um_apac');
    //         $args['role__in'] = array('um_apac','um_measa');
    //     }
    //     else{
    //         $data = (explode(" ",$url_params['region']));
    //         $region = 'um_'.strtolower($data[0]);
    //         if($data[1]){
    //             $region = 'um_'.strtolower($data[0]).'-'.strtolower($data[1]);
    //         }
    //         $args['role'] = array($region);
    //     }
        
    // }
    //    else{
    //              $region = '';
    //        }
       
   
       if(!empty($meta_query)){
        $args['meta_query'] = $meta_query;
       }
       
       //return $args;
   
       $user_query = new WP_User_Query($args);
     //return $user_query;
       $users_object = $user_query->get_results();
      // return $users_object;
       $users = array();
     // print_r($users_object); die;
       if (!empty($users_object) && count($users_object) > 0) {
           foreach ($users_object as $key => $user_object) {
                //print_r(get_avatar_url($user_object->ID));
                $user_status = get_user_meta( $user_object->ID, 'pw_user_status', true );
                $user['avatar'] = get_avatar_url($user_object->ID);
            //    $user = get_user_formated_data_by_id($user_object->ID);
                $user['user_status'] = get_user_meta( $user_object->ID, 'pw_user_status', true );
                $udata = get_userdata( $user_object->ID );
                $user['profile'] = get_home_url()."/profile/".$udata->user_login;
                $user['display_name'] = $udata->display_name;
                $user['user_email'] = $udata->user_email;
                $user['company'] = get_field('company', 'user_' . $user_object->ID, false); 
                $user['position'] = get_field('Title', 'user_' . $user_object->ID, false);             
                $roles = ( array ) $udata->roles;              
                //if ($current_user_id == $user_object->ID || $user_status == 'pending'  || $user_status == 'denied' || in_array('administrator', $roles) || in_array('um_inactive', $roles) || in_array('bbp_blocked', $roles) || in_array('um_internal', $roles) ) continue;
                $registered = $udata->user_registered;
                $user['date_register'] = $registered;
                $user['registered_date'] = date( "m/d/Y", strtotime( $registered) );
                $current_date = date_create(date("m/d/Y"));
                $user_date = date_create($user['registered_date']);
                $interval = date_diff($user_date, $current_date);
                $days_interval = $interval->days;
                // print_r( $month_interval. "::".$day_interval); die;
                if(!empty($url_params['region'])){
                        if ($user &&  $days_interval <= 90 ) {
                        array_push($users, $user);
                    }
                }
                else{
                        if ($user &&  $days_interval <= 90 ) {
                        array_push($users, $user);
                    }
                }             
            }
            usort($users, function($left, $right){
                return $right['date_register'] > $left['date_register'];
            });               
        }

    // echo "<pre>";
    // print_r($users);    
?>
<section class="section-new-members">
    <div class="header-box text-blue" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h2>Welcome New Members</h2>
                </div>
                <div class="col">
                    <div class="button-container d-flex justify-content-end">
                        <a href="<?php echo $content['button']['url'] ?>"><button
                                class="btn btn-primary btn-small btn-arrow">
                                <?php echo $content['button']['title'] ?>
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container member-slider-container">
        <?php foreach ($users as $value) : ?>
        <div class="slide" data-aos="flip-left">
            <div class="slide-inner">
                <div class="slide-inner-top">
                    <div class="image-container" style="width:150px; height:150px;">
                        <img src="<?php echo $value['avatar'] ?>" alt=""/>
                    </div>
                    <h4><?php echo $value['display_name'] ?></h4>
                    <p>
                        <?php echo $value['position'] ?>
                    </p>
                </div>

                <div class="slide-inner-bottom">

                    <div class="button-container">
                        <a href="<?php echo $value['profile'] ?>">
                            <button class="btn-message">Message</button></a>
                    </div>
                    <div class="label-bottom">
                        <p><?php echo $value['company'] ?> &nbsp;</p>
                    </div>
                </div>

            </div>

        </div>
        <?php endforeach; ?>
    </div>
</section>


<?php

endif;