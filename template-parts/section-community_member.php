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
                $user = array();
                $user_status = get_user_meta( $user_object->ID, 'pw_user_status', true );
                $user['avatar'] = get_avatar_url($user_object->ID);
                //$user = get_user_formated_data_by_id($user_object->ID);
                $user['user_status'] = get_user_meta( $user_object->ID, 'pw_user_status', true );
                $udata = get_userdata( $user_object->ID );
                $profile = get_home_url()."/profile/".$udata->user_login;
                $user['profile'] = str_replace(' ', '+', $profile);
                $user['display_name'] = $udata->display_name;
                $user['user_email'] = $udata->user_email;
                $user['company'] = get_field('company', 'user_' . $user_object->ID, false); 
                $user['position'] = get_field('Title', 'user_' . $user_object->ID, false);             
                $roles = ( array ) $udata->roles;              
                if ($current_user_id == $user_object->ID || $user_status == 'pending'  || $user_status == 'denied' || in_array('administrator', $roles) || in_array('um_inactive', $roles) || in_array('bbp_blocked', $roles) || in_array('um_internal', $roles) ) continue;
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
                <div class="col-lg-6">
                    <h2>Welcome New Members</h2>
                </div>
                <div class="col-lg-6">
                    <div class="button-container d-flex">
                        <a href="<?php echo $content['button']['url'] ?>"><button
                                class="btn btn-primary btn-small btn-arrow btn-arrow-move">
                                <?php echo $content['button']['title'] ?>
                                <span class="btn-icon">
                                    <svg viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
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
                        <img src="<?php echo $value['avatar'] ?>" alt="" />
                    </div>
                    <h4><?php echo $value['display_name'] ?></h4>
                    <p>
                        <?php echo $value['position'] ?>
                    </p>
                </div>

                <div class="slide-inner-bottom">

                    <div class="button-container">
                        <a href="<?php echo $value['profile'] ?>">
                            <button class="btn-message">Message
                                <div class="btn-icon">
                                    <svg viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2655_10402)">
                                            <path
                                                d="M2.5166 5.20947V15.2095C2.5166 15.541 2.6483 15.8589 2.88272 16.0934C3.11714 16.3278 3.43508 16.4595 3.7666 16.4595H16.2666C16.5981 16.4595 16.9161 16.3278 17.1505 16.0934C17.3849 15.8589 17.5166 15.541 17.5166 15.2095V5.20947H2.5166ZM2.5166 3.95947L17.5166 3.95947C17.8481 3.95947 18.1661 4.09117 18.4005 4.32559C18.6349 4.56001 18.7666 4.87795 18.7666 5.20947V15.2095C18.7666 15.8725 18.5032 16.5084 18.0344 16.9772C17.5655 17.4461 16.9296 17.7095 16.2666 17.7095H3.7666C3.10356 17.7095 2.46768 17.4461 1.99883 16.9772C1.52999 16.5084 1.2666 15.8725 1.2666 15.2095L1.2666 5.20947C1.2666 4.87795 1.3983 4.56001 1.63272 4.32559C1.86714 4.09117 2.18508 3.95947 2.5166 3.95947Z"
                                                fill="#15426B" />
                                            <path
                                                d="M7.57041 10.4052L3.46214 5.70947H3.79468L7.75773 10.2399C7.75774 10.2399 7.75776 10.2399 7.75777 10.2399C8.03934 10.5619 8.3865 10.8199 8.77597 10.9967C9.16545 11.1735 9.58824 11.265 10.016 11.265C10.4437 11.265 10.8665 11.1735 11.256 10.9967C11.6454 10.8199 11.9926 10.5619 12.2741 10.24C12.2742 10.2399 12.2742 10.2399 12.2742 10.2399L16.2385 5.70947H16.5711L12.4628 10.4052L12.4628 10.4053C12.1577 10.754 11.7816 11.0335 11.3598 11.2249C10.9379 11.4164 10.4799 11.5155 10.0166 11.5155C9.55329 11.5155 9.09534 11.4164 8.67345 11.2249C8.25156 11.0335 7.87548 10.754 7.57044 10.4053L7.57041 10.4052Z"
                                                fill="#15426B" stroke="#15426B" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2655_10402">
                                                <rect width="20" height="20" fill="white"
                                                    transform="translate(0.0166016 0.834473)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>


                            </button></a>
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