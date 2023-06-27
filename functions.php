<?php
/*-------------------------------------------------------
 * Brand & Demand Child Theme Functions.php
------------------ ADD YOUR PHP HERE ------------------*/


// add_action('init', 'start_session', 1);

// session_start();
// $current_user_id = get_current_user_id();
// $user_object = get_user_by('ID', $current_user_id);
// $user_data = $user_object->data;
// $user_id = $user_data->ID;
// $user_name = $user_data->user_login;
// // print_r($user_name);
// $_SESSION['data'] = $user_name."-".$user_id;
//print_r( $_SESSION['data']);


//  print_r(get_stylesheet_directory_uri()); die;
 
function divichild_enqueue_styles() {
  
 $parent_style = 'parent-style';
 wp_enqueue_script(  'wpclct ajax calls', get_template_directory_uri() .'/js/wpclt_customjs.js', array('jquery'), '1.0', true);
 wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
 wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version'));
//  wp_enqueue_style('landing-page-style',get_stylesheet_directory_uri() . '/css-landing/style.css', array( 'style' ) );
//  wp_enqueue_style('landing-page-stylesheet',get_stylesheet_directory_uri() . '/assets/fonts/stylesheet.css', array( 'style' ) );
}
add_action( 'wp_enqueue_scripts', 'divichild_enqueue_styles', 1 );

// function divichild_enqueue_scripts() {
//     wp_enqueue_script( 'jquery-js-new', 'http://code.jquery.com/jquery-1.11.0.min.js', array( 'jquery' ),'',true );
//     wp_enqueue_script( 'jquery-migrate-new', 'http://code.jquery.com/jquery-migrate-1.2.1.min.js', array( 'jquery' ),'',true );
//     wp_enqueue_script( 'jquery-migrate-new', 'http://code.jquery.com/jquery-migrate-1.2.1.min.js', array( 'jquery' ),'',true );
//     wp_enqueue_script( 'jquery-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js', array( 'jquery' ),'',true );
//     wp_enqueue_script( 'jquery-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', array( 'jquery' ),'',true );
//     wp_enqueue_script( 'jquery-slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array( 'jquery' ),'',true );
//     wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/script.js', array( 'jquery' ),'',true );
    
// }
// add_action( 'wp_enqueue_scripts', 'divichild_enqueue_scripts', 1 );

function remove_dashboard_widgets() {
    global $wp_meta_boxes; 
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); 
}
 
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );
function my_login_logo() { ?>
<style type="text/css">
#login h1 a,
.login h1 a {
    background-image: url(https://www.pdsxchange.com/wp-content/uploads/2018/09/FS-Logo-Blue-600x315.jpg);
    height: 151px;
    width: 300px;
    background-size: 300px 151px;
    background-repeat: no-repeat;
}

body.login div#login form#loginform input#wp-submit {
    background-color: #ea7200;
    border: medium none;
    border-radius: 0;
    box-shadow: none;
    padding: 0 36px 2px;
    text-shadow: none;
}

.login form {
    padding: 40px 40px 60px;
    border-radius: 20px;

}

.login #backtoblog a,
.login #nav a {
    color: #FFFFFF !important;
}

body.login {
    background: #183f6a;
    background-size: 100%;
    background-attachment: fixed;
}
</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );



/**
 * Returns a user meta value
 * Usage [um_user user_id="" meta_key="" ] // leave user_id empty if you want to retrive the current user's meta value.
 * meta_key is the field name that you've set in the UM form builder
 * You can modify the return meta_value with filter hook 'um_user_shortcode_filter__{$meta_key}'
 */
add_action('template_redirect','sc_init_um_user_shortcode');
add_action('init','sc_init_um_user_shortcode');
function sc_init_um_user_shortcode(){
	add_shortcode( 'um_user', 'sc_um_user_shortcode' );
} 

function sc_um_user_shortcode( $atts ) {
	$atts = shortcode_atts( array(
		'user_id' => get_current_user_id(),
		'meta_key' => ''
	), $atts );
	extract( $atts );
	if ( ! $user_id || empty( $meta_key ) ) return;
    
    $raw_meta_value  = get_user_meta( $user_id, $meta_key, true );
    
    if( is_serialized( $raw_meta_value ) ){
       $meta_value = unserialize( $raw_meta_value );
    }else if( is_array( $raw_meta_value ) ){
         $meta_value = implode(",",$raw_meta_value);
    }else{
    	$meta_value = $raw_meta_value;
    } 

    return apply_filters("um_user_shortcode_filter__{$meta_key}", $meta_value,  $raw_meta_value );
 
}

add_action('minerva_loop_entry_inside_before', 'clc_add_featured_image');
function clc_add_featured_image(){
	//die();
	
	if ( has_post_thumbnail() ) {
    	$featured_image = get_the_post_thumbnail(null, 'thumbnail', array( 'class' => 'alignleft' ));
	}
	
	echo $featured_image;
}

function ntwb_bbp_forum_form() {
	if ( um_user('um_associate-member') && current_user_can( 'edit_others_forums' ) ) {
		echo do_shortcode( '[bbp-forum-form]' );
	}
}
add_action( 'bbp_template_after_user_profile', 'ntwb_bbp_forum_form' );

add_action( 'bbp_new_forum_post_extras', 'ltc_limit_forum', 10 ,1  );

function ltc_limit_forum ($forum_id) {
	//this function is fired when a forum is created
	//set post parent to zero
	wp_update_post(
		array(
			'ID' => $forum_id, 
			'post_parent' => 0
			)
	);
}

/* Check visitors country by IP */
function check_visitors_country( $atts = array(), $content = null ){
	
	// set up default parameters
	extract(shortcode_atts(array(
		'show'	  => 'Yes',		// Option will be Yes/No
		'country' => ''			// Need to add 2 digit country code i.e. US,UK,IN,CA 
	), $atts));
	
	$ip = $_SERVER['REMOTE_ADDR']; // This will contain the ip of the request
	
	$dataArray = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
	//$dataArray = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=102.129.157.0"));
	
	// outputs something like (obviously with the data of your IP) :
	// geoplugin_countryCode => "DE",
	// geoplugin_countryName => "Germany"
	
	$list_country = explode(',', $country);
	
	if($show == 'Yes'){
		if (in_array($dataArray->geoplugin_countryCode, $list_country)) {
			$output = $content;
		} else {
			$output = '';
		}
	} else if($show == 'No'){
		if (in_array($dataArray->geoplugin_countryCode, $list_country)) {
			$output = '';
		} else {
			$output = $content;
		}
	}	

	/*for($i=0; $i<count($list_country); $i++){
		echo $list_country[$i];
		echo $dataArray->geoplugin_countryCode;
		if($list_country[$i] == $dataArray->geoplugin_countryCode){
			return "Hello visitor from: ".$dataArray->geoplugin_countryName." - ".$content;
		} else {
			return false;
		}
	}*/
	
	return $output;
	
} 

add_shortcode('DISPLAY_VISITOR_COUNTRY', 'check_visitors_country');

function change_columns( $cols ) {
    $cols = array(
        'cb'        => '<input type="checkbox" />',
        'title'     => 'Title',
        'featimg'   => 'Featured Image',
        'author'    => 'Author',
        'region'    => 'Region',
        'year'      => 'Year',
    );
    return $cols;
}
function custom_columns( $column ) {
    global $post;
    
    if( $column == 'featimg' ) {
        if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'thumbnail' );
        } else {
            echo '';
        }
	}
	
	if( $column == 'region' ) {
	    $region = get_field('region');
	    if( $region ) {
	        echo '<strong>'. $region .'</strong>';
		} else {
			echo '';
		}
	}
	
	if( $column == 'year' ) {
	    $year = get_field('year');
	    if( $year ) {
	        echo $year;
		} else {
			echo '';
		}
	}
}

add_action( 'manage_critical_issues_posts_custom_column', 'custom_columns', 10, 2 );
add_filter( 'manage_critical_issues_posts_columns', 'change_columns' );

add_action('admin_head', 'critical_issues_css');
function critical_issues_css() {
  echo '<style>
    .wp-list-table.widefat tbody tr td {
        vertical-align: top;
    }
  </style>';
}

/**
 * Add a select dropdown filter with meta values.
 */
function ci_admin_region_dropdown() {
    global $typenow;
    
    if ($typenow=='critical_issues') {
        $selected = filter_input(INPUT_GET, 'region', FILTER_SANITIZE_STRING );
    
        $choices = [
          'America' 	 => 'America',
          'APAC & MEASA' => 'APAC & MEASA',
        ];
    
        echo'<select name="region">';
            echo '<option value="all" '. (( $selected == 'all' ) ? 'selected="selected"' : "") . '>' . __( 'All Regions' ) . '</option>';
            foreach( $choices as $key => $value ) {
                echo '<option value="' . $key . '" '. (( $selected == $key ) ? 'selected="selected"' : "") . '>' . $value . '</option>';
            }
        echo '</select>';
    }
}

add_action('restrict_manage_posts', 'ci_admin_region_dropdown');


/**
 * Filter the results based on meta data.
 */
function ci_admin_region_filter($query) {
    if ( is_admin() && $query->is_main_query() ) {
      $scr = get_current_screen();
      if ( $scr->base !== 'edit' && $scr->post_type !== 'critical_issues' ) return;

      if (isset($_GET['region']) && $_GET['region'] != 'all') {
        $query->set('meta_query', array( array(
          'key' => 'region',
          'value' => sanitize_text_field($_GET['region'])
        ) ) );
      }
    }
}

add_action('pre_get_posts','ci_admin_region_filter'); 


/**  Code for ACF field custom in option page / email content change / auto delete FCM token : Added by FDV */

if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title'     => 'Theme General Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'        => false
	));
}

add_filter( 'retrieve_password_message', 'my_retrieve_password_message', 10, 4 );
function my_retrieve_password_message( $message, $key, $user_login, $user_data ) {

    // Start with the default content.
    $site_name = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES );
    $message = sprintf( __( 'Hello %s,' ), $user_login ) . "\r\n\r\n";
    $message .= __( 'A Growth Innovation Leadership Council Community Portal password reset has been requested for your account. Please click the below link to begin your password reset and do not hesitate to reach out to your Membership Services Manager with questions.' ) . "\r\n\r\n";
        // /* translators: %s: site name */
    // $message .= sprintf( __( 'Site Name: %s' ), $site_name ) . "\r\n\r\n";
    // /* translators: %s: user login */
    // $message .= sprintf( __( 'Username: %s' ), $user_login ) . "\r\n\r\n";
    // $message .= __( 'To reset your password, visit the following address:' ) . "\r\n\r\n";
    $message .= '' . network_site_url( "wp-login.php?action=rp&key=$key&login=" . rawurlencode( $user_login ), 'login' ) . "\r\n\r\n";
     $message .= __( 'Sincerely, The Growth Innovation Leadership Council Team' ) . "\r\n\r\n";
    // $message .= '<http://yoursite.com/wp-login.php?action=rp&key=' . $key . '&login=' . rawurlencode( $user_login ) . ">\r\n";

    return $message;

}

add_filter( 'password_change_email', 'wpse207879_change_password_mail_message', 10, 3 );
function wpse207879_change_password_mail_message( $pass_change_mail, $user, $userdata ) {
    $message = __( 'Hello ###USERNAME###,' ) . "\r\n\r\n";
    $message .= __( 'Your password has been updated successfully.' ) . "\r\n\r\n";
    $message .= __( 'If you did not make this request, please contact our Site Administrator at james.evans@frost.com immediately.' ) . "\r\n\r\n";
    $message .= __( 'This email has been sent to ###EMAIL###' ) . "\r\n\r\n";
    $message .= __( 'Sincerely, The Growth Innovation Leadership Council' ) . "\r\n\r\n";
  $pass_change_mail[ 'message' ] = $message;
  return $pass_change_mail;
}

//delete all FCM device token

//add_action( 'init', 'delete_all_token' );
function delete_all_token() {
    $reset_date = date_create(get_field('reset_date', 'option'));
    $current_date = date_create(date("m/d/Y"));
    $interval = date_diff($reset_date, $current_date);
    $days_interval = $interval->days;
    if($days_interval > 30){
        global $wpdb;
        $post_table = $wpdb->prefix.'posts';
    	$token_table = $wpdb->prefix.'pd_android_fcm';
    	$results = $wpdb->get_results("SELECT * FROM $token_table");

         if ( $results ) {
             foreach ($results as $post) {
                //$wpdb->delete( $token_table, array( 'post_ID' => $post->post_ID ) );
                //$wpdb->delete( $post_table, array( 'ID' => $post->post_ID ) );
                }
            update_field('reset_date',date_format($current_date,"Y-m-d"), 'option');
            }
      }
   
}

add_action( 'new_user_approve_deny_user', 'remove_my_action', 1 );
function remove_my_action(){
    remove_action('new_user_approve_deny_user', 'deny_user', 10, 2);
}
function allowAuthorEditing()
{
  add_post_type_support( 'critical_issues', 'author' );
}

function send_content_notification_func($ID,$post,$update) {    
    global $wpdb;
    $table = $wpdb->prefix.'pd_android_fcm';
     $notificationTable = $wpdb->prefix . 'notification';
     $post_status = get_post_status( $ID );
    if($post_status == "auto-draft"){
       // print_r($ID); exit();
    }

    function content_push_notification($wpdb, $user, $post, $table, $key){
        $content_notification_option = get_user_meta($user->ID, 'content_notification', true);
        if ($content_notification_option && $key->ID ) :
            $device_token = $wpdb->get_results("SELECT device_token FROM $table WHERE post_ID =  $key->ID");
            $token = $device_token[0]->device_token;
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://fcm.googleapis.com/fcm/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
                "to" : "'.$token.'",
                "notification": {
                    "id" : "Content_notification",
                    "title":"New Growth Content resources added!",
                    "body":"Review resources now...",
                },
                "data":{
                    "post_id":'.$post->ID.',
                    "type": "content"
                },
            }',
            CURLOPT_HTTPHEADER => array(
                'Authorization: key='.get_field('fcm_key', 'option'),
                'Content-Type: application/json'
            ),
            ));
            date_default_timezone_set('America/New_York');
            $data = array();
            $receiver_user_id = $user->ID;
            $receiver_user_email= $key->post_title;
            $data['event_id'] = $post->ID;
            $data['sender_user_id'] = '';
            $data['sender_user_email'] = '';
            $data['notification_type'] = 'Content_notification';
            $data['notification_title'] = 'New Growth Content resources added!';
            $data['notification_content'] = 'Review resources now...';
            $data['status'] = 0;
            $data['triggered_date'] = date('Y-m-d h:i:s');
            $data['expiration_date'] = date('Y-m-d', strtotime(' + 3 months'));
            insert_notification($receiver_user_id,$receiver_user_email,$data);
            
            $response = curl_exec($curl);
            curl_close($curl);
        endif;
    }
    
	$args = array(
		'post_type' => 'pdandroidfcm',
		'posts_per_page' => -1,
		'post_status'    => 'publish'
	);
	
	$terms = get_posts($args);
    echo "<pre>";
    //print_r($terms); die;
   
   if($post->post_type == 'kb' && $post_status !== "auto-draft" ){
     foreach ($terms as $key) {
        $user = get_user_by('email', $key->post_title);
        $result = $wpdb->get_results("SELECT * FROM $notificationTable WHERE receiver_user_id = $user->ID AND event_id = $post->ID AND status = 0 ");
        
        $user_industry = get_field('industry', 'user_' . $user->ID, false);
        $user_area_of_interest = get_field('areas_of_interests','user_' . $user->ID, false);
        $user_region = get_field('region','user_' . $user->ID, false);

        // print_r($user->ID."==");`
        // print_r($user_region);

        $content_library_region = get_field('content_library_region',$post->ID);        
        $content_library_meta = get_post_meta($post->ID);      
        $content_library_aoi = !empty($content_library_meta['content_library_area_of_interest'][0]) ? unserialize($content_library_meta['content_library_area_of_interest'][0]) : '' ;
        $intersect= ( !empty($user_area_of_interest) && !empty($content_library_aoi) ) ? array_intersect($content_library_aoi,$user_area_of_interest) : ''; 
        
        //if(!empty($user) && isset($user_industry) && !empty($user_industry) && (count($result) == 0) ) :        
            if($content_library_region == $user_region) :
                if( (isset($user_industry) && !empty($user_industry) && $user_industry !== 'None' ) || ( !empty( $user_area_of_interest) && isset($user_area_of_interest)) ) :
                    if($content_library_meta['content_library_industry'][0] == $user_industry || !empty($intersect)) :
                        //print_r("user industry"); die;
                        content_push_notification($wpdb, $user, $post, $table, $key);
                    endif;                    
                else :
                    //print_r("User industry not mentioned");die;
                    content_push_notification($wpdb, $user, $post, $table, $key);
                endif;            
            endif;
        //endif;
    }
  }
    
}

add_action( 'save_post_kb', 'send_content_notification_func', 10, 3 );
   
add_action('init','allowAuthorEditing');

// register the ajax action for authenticated users
add_action('wp_ajax_fetch_calender_events', 'fetch_calender_events');

// register the ajax action for unauthenticated users
add_action('wp_ajax_nopriv_fetch_calender_events', 'fetch_calender_events');

// handle the ajax request
function fetch_calender_events() {
   //$new_data = array(); 
    $current_user_id = get_current_user_id();  
    $filter_year = !empty($_POST['year'])?$_POST['year']:date('Y');//"2023"; //date('Y')
    $filter_month = !empty($_POST['month'])?$_POST['month']:sprintf("%02d", date('m')); //date('m')
    $user_industry = !empty($_POST['user_industry'])?$_POST['user_industry']:"";
    $user_area_of_interest = isset($_POST['user_area_of_interest'])?$_POST['user_area_of_interest']:"";  
    $user_region = !empty($_POST['user_region'])?$_POST['user_region']:"";
    $all_events = !empty($_POST['all_events'])? ( ($_POST['all_events'] == 'All Events') ? true : false ) : true;
    //array_push($new_data, [$filter_month, $filter_year, $user_industry, $user_area_of_interest, $user_region]);    
    //$filter_month = sprintf("%02d", '06'); //date('m')
       // print_r($user_area_of_interest);   
   //$all_events = true;
   $region = '';   
    
    if(!empty($user_region)){
        if($user_region === 'APAC/MEASA'){
              $region = 'apac';
         }
        else{
            $data = (explode(" ",$user_region));
        $region = strtolower($data[0]);
            if($data[1]){
                    $region = strtolower($data[0]).'-'.strtolower($data[1]);
            }
        }
    }
    
    $args = array(
        'post_type' => 'ajde_events',
        'posts_per_page' => -1,
    );
    
    $current_user_id = get_current_user_id();    
    if ($all_events == true) {          
        if($user_region === 'ALL REGIONS' || $user_region === 'Region' || $user_region === 'region' || $user_region === ''){
            $args = array(
               'post_type' => 'ajde_events',
               'posts_per_page' => -1,
           );
       }
       else{
            $args = array(
               'post_type' => 'ajde_events',
               'posts_per_page' => -1,
               'tax_query' => array(
                   'relation' => 'AND',
                    array(
                       'taxonomy' => 'event_type_2',
                        'field' => 'slug',
                        'terms' => $region                 
                   )
               )
           );                
       }
           
        $events_query = new WP_Query($args);
        $event_session = $events_query->posts;
    } else {
        $events_array = get_field('registered_events', 'user_' . $current_user_id);
        $sessions_array = get_field('registered_sessions', 'user_' . $current_user_id);
        // $events_array = get_field('registered_events', 'user_218');
        // $sessions_array = get_field('registered_sessions', 'user_218');
       
        if( $events_array && $sessions_array){
            $event_session = array_merge($events_array, $sessions_array);
        }elseif($events_array){
            $event_session = $events_array;
        }elseif($sessions_array){
            $event_session = $sessions_array;
        }else{
            $event_session = null;
        }        
    }

    if ($event_session) {
        if (count($event_session) > 0) {
            $events = array();
            foreach ($event_session as $key => $event) {
                $event_meta = get_post_meta($event->ID);
                $event_aoi = unserialize($event_meta['event_area_of_interest'][0]);
                // $intererst= array_intersect($event_aoi,$user_area_of_interest);  

                //if (is_past_event($event_meta)) continue;
                
                $event_details = array();
                $event_details['ID'] = $event->ID;
                $event_details['title'] = $event->post_title;
                $event_details['description'] =  $event->post_content;
                $event_details['post_name'] =  $event->post_name;
                $event_details['guid'] =  $event->guid;
                $event_details['post_date'] =  $event->post_date;
                $event_details['areas_of_interest'] = $event_aoi;
                $event_details['post_date_gmt'] =  $event->post_date_gmt;
                $event_details['event_type'] = get_the_terms($event->ID, 'event_type');
                $event_details['event_start'] =  date_i18n('Y-m-d H:i:s', is_array($event_meta['evcal_srow']) ? array_pop($event_meta['evcal_srow']) : $event_meta['evcal_srow']);
                $event_details['event_end'] =  date_i18n('Y-m-d H:i:s', is_array($event_meta['evcal_erow']) ? array_pop($event_meta['evcal_erow']) : $event_meta['evcal_erow']);
                if (!empty($event_meta['_evo_tz'])) {
                    $event_details['time_zone'] =  is_array($event_meta['_evo_tz']) ? array_pop($event_meta['_evo_tz']) : $event_meta['_evo_tz'];
                }
                $event_details['image'] =  get_the_post_thumbnail_url($event->ID);
                $event_details['pillar_categories'] = get_the_terms($event->ID, 'event_type_3');
                $persona = array();
                    foreach( $event_details['pillar_categories'] as $pillar ){
                        if( get_field('growth_council_persona_classifcation', 'event_type_3_' . $pillar->term_id) !== null) {
                           $persona = array_merge( $persona, get_field('growth_council_persona_classifcation', 'event_type_3_' . $pillar->term_id));
                        }
                    }
                $event_details['persona'] =   $persona;
                $event_details['event_region'] = get_the_terms($event->ID, 'event_type_2');             
                
                $location_term = get_the_terms($event->ID, 'event_location');
                $option_value = get_option('evo_tax_meta');
                if (!empty($location_term[0])) {
                    $event_details['location'] = $option_value['event_location'][$location_term[0]->term_id];
                    if (!empty($event_details['location']['evo_loc_img'])) {
                        $event_details['location_image'] = wp_get_attachment_image_url($event_details['location']['evo_loc_img'], 'full');
                    }
                }
                $organizer_term = get_the_terms($event->ID, 'event_organizer');
                if (!empty($organizer_term[0])) {
                    $event_details['organizer'] = $option_value['event_organizer'][$organizer_term[0]->term_id];
                    $event_details['organizer']['term_name'] = stripslashes($event_details['organizer']['term_name']);
                    $event_details['organizer_image'] = wp_get_attachment_image_url($event_details['organizer']['evo_org_img'], 'full');
                }
              
                //$registered_events = get_field('registered_events', 'user_' . $current_user_id, false);
                $registered_events = get_field('registered_events', 'user_218', false);
                if (in_array($event->ID, $registered_events)) {
                    $event_details['register_status'] = true;
                } else {
                    $event_details['register_status'] = false;
                }
                

                // $event_details['event_meta'] = $event_meta;
                if($filter_year && $filter_month){
                    $startDateUnix = strtotime($event_details['event_start']);
                    $startYear = date("Y", $startDateUnix);
                    $startMonth = date("m", $startDateUnix);
    
                    $endDateUnix = strtotime($event_details['event_end']);
                    $endYear = date("Y", $endDateUnix);
                    $endMonth = date("m", $endDateUnix);
                    // return $startMonth;
                    if ($filter_year !== "" && $filter_month !== "") {
                        if (($filter_year === $startYear || $filter_year === $endYear) && ($filter_month === $startMonth || $filter_month === $endMonth)) {
                            array_push($events, $event_details);
                        }
                    } elseif ($filter_year !== "") {
                        if ($filter_year === $startYear || $filter_year === $endYear) {
                            array_push($events, $event_details);
                        }
                    } elseif ($filter_month !== "") {
                        if ($filter_month === $startMonth || $filter_month === $endMonth) {
                            array_push($events, $event_details);
                        }
                    } else {
                        array_push($events, $event_details);
                    }
                }else{
                    array_push($events, $event_details);
                }
            }         
            usort($events, function($a, $b) {
                return strtotime($a['event_start']) - strtotime($b['event_start']);
            });
            // return gil_response(200, 'success', $events);
        } 
    } 

    // in the end, returns success json data
    wp_send_json_success( $events); 

    // or, on error, return error json data
    wp_send_json_error(['Events not found']);
}

// register the ajax action for authenticated users
add_action('wp_ajax_register_event', 'register_event');

// register the ajax action for unauthenticated users
add_action('wp_ajax_nopriv_register_event', 'register_event');

// handle the ajax request
function register_event() {  
    $event_id = isset($_POST['event_id'])?$_POST['event_id']: "";
    $current_user_id = get_current_user_id();
    //$current_user_id = 218;
    $user_object = get_user_by('ID',   $current_user_id);
    $events = new WP_Query(array(
        'post_type' => 'ajde_events',
        'post__in' => array($event_id),
    ));
    $title= $events->posts[0]->post_title;
    $event_start_date = $events->posts[0]->event_start;
    $send_to = get_field('rsvp_email', 'option');
    $second_email = get_field('second_rsvp_email', 'option');
    // print_r($admin_email);
    // die;
    
     $args = array(
        'post_type' => 'ajde_events',
        'post__in' => array($event_id),
    );
    $message = "";
    $events = new WP_Query($args);
    
    if ($current_user_id != 0 && !empty($event_id) && $events->found_posts > 0) {
        //add event to user register field
        $registered_events = get_field('registered_events', 'user_' . $current_user_id, false);
        if (is_array($registered_events) && !in_array($event_id, $registered_events)) {
            array_push($registered_events, $event_id);          
            
            $to =   $send_to;
            $subject = 'Event Registration';
            $mail_message =  'Growth Innovation Leadership Member: '.$user_object->user_email.' has requested RSVP for " '.$title.'. If this is your client, please document their interest and follow up with the client and coordinating AE, if necessary. Thank you';
            $mailResult = wp_mail($to, $subject, $mail_message );
         
        } 
        elseif(!in_array($event_id, $registered_events)) {
            $registered_events = array($event_id);
        }
        $register_event = update_field('registered_events', $registered_events, 'user_' . $current_user_id);

        $registered_users = get_field('event_registered_user', $event_id, false);
        if (is_array($registered_users) && !in_array($current_user_id, $registered_users)) {
            array_push($registered_users, $current_user_id);
        } elseif (!in_array($current_user_id, $registered_users)) {
            $registered_users = array($current_user_id);
        }
        update_field('event_registered_user', $registered_users, $event_id);
        if ($register_event) {
            //add user as member to pillar
            $pillar_array = get_the_terms($event_id, 'event_type_3');
            if (!is_wp_error($pillar_array) && count($pillar_array) > 0) {
                $pillar = (array) $pillar_array[0];
                $members_id = get_field('event_registered_members', 'event_type_3_' . $pillar['term_id'], false);
                if (is_array($members_id) && !in_array($current_user_id, $members_id)) {
                    array_push($members_id, $current_user_id);
                } elseif (!in_array($current_user_id, $members_id)) {
                    $members_id = array($current_user_id);
                }
                update_field('event_registered_members', $members_id, 'event_type_3_' . $pillar['term_id']);
            }
            $message = "Event registration succesfull";
            wp_send_json_success($message);
            //return gil_response(200, 'Event registration succesfull', null);
        } else {
            $message = "Event registration failed";
           // return gil_error(409 , 'Event registration failed', null);
        }
    } elseif (empty($event_id) || $events->found_posts === 0) {
        $message = "User or Event not found";
        //return gil_error(404, 'Event not found', null);
    } else {
        $message = "Unauthorized";
        //return gil_error(401, 'Unauthorized', null);
    }
    // in the end, returns success json data
   

    // or, on error, return error json data
    wp_send_json_error(['Events not found']);
}

// register the ajax action for authenticated users
add_action('wp_ajax_gpd_email_request', 'gpd_email_request');

// register the ajax action for unauthenticated users
add_action('wp_ajax_nopriv_gpd_email_request', 'gpd_email_request');

// handle the ajax request
function gpd_email_request() {  
    $email_list =  get_field('growth_pipeline_dialogue_email', 'option');
    $current_user_id = get_current_user_id();
    $user_object = get_user_by('ID', $current_user_id);
    $user_data = $user_object->data;
    $user['user_meta'] = get_user_meta($user_data->ID);
    $user['user_email'] = $user_data->user_email;
    $res_message = '';
    
    foreach ($email_list as $data) {
        $to = $data['gpd_email_address'];
        $subject = 'Growth Innovation Leadership Council Request';
        $msg = __( $user_data->user_login." has initiated a Growth Pipeline Dialog." ) . "\r\n\r\n";
        $msg .= __( "Please review their Membership details, connect with the appropriate internal team members, and reach out accordingly.") . "\r\n\r\n";
    	$msg .=  __( "- The Growth Innovation Leadership Council") . "\r\n\r\n";
        $message =  $msg;
        $mailResult = wp_mail($to, $subject, $message );
    }
    
        $to =  $user['user_email'];
        $subject = 'Request for Growth Pipeline Dialog';
         $msg = __( "Hello ".$user_data->user_login. ",") . "\r\n\r\n";
        $msg .= __( "You have initiated a Growth Pipeline Dialog and a member from our team will contact you shortly. We thank you for reaching out and look forward to connecting more soon.") . "\r\n\r\n";
    	$msg .=  __( "Sincerely,") . "\r\n";
    	$msg .=  __( "The Growth Innovation Leadership Council") . "\r\n";
        $message = $msg;
        $mailResult = wp_mail($to, $subject, $message );

        $res_message = 'Mail sent Successfully';
        
    // return gil_response(200, 'Success', 'Mail sent Successfully!');
    // in the end, returns success json data
    wp_send_json_success($res_message);

    // or, on error, return error json data
    wp_send_json_error(['Events not found']);
}

add_action('wp_ajax_content_search', 'content_search');

// register the ajax action for unauthenticated users
add_action('wp_ajax_nopriv_content_search', 'content_search');

function content_search(){
    $search_string = $_POST['search'];

    // $search_query = new WP_Query(array(
    //     's' => $search_text,
    //     'post_type' => array('kb'),
    //     'posts_per_page' => -1
    // ));

    $events_sessions_object = new WP_Query(array(
        's' => $search_string,
        'post_type' => array('ajde_events','kb'),
        'posts_per_page' => -1
    ));

    $pillars = get_terms(array(
        'search' => $search_string,
        'taxonomy' => array('event_type_3'),
        'hide_empty' => false,
        'parent' => 0
    ));

    $poes_object = get_terms(array(
        'search' => $search_string,
        'taxonomy' => array('event_type_3'),
        'hide_empty' => false
    ));

    $search_results = array(
        'events_sessions' => array(),
        'pillars' => array(),
        'poes' => array()
    );

    if ($events_sessions_object) {
        $events = array();
        foreach ($events_sessions_object->posts as $key => $event) {
            $event_meta = get_post_meta($event->ID);
            if (is_past_event($event_meta)) continue;

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
            if (!empty($event_meta['_evo_tz'])) {
                $event_details['time_zone'] =  is_array($event_meta['_evo_tz']) ? array_pop($event_meta['_evo_tz']) : $event_meta['_evo_tz'];
            }
            $event_details['image'] =  get_the_post_thumbnail_url($event->ID);
            $event_details['pillar_categories'] = get_the_terms($event->ID, 'event_type_3');

            $location_term = get_the_terms($event->ID, 'event_location');
            $option_value = get_option('evo_tax_meta');
            if (!empty($location_term[0])) {
                $event_details['location'] = $option_value['event_location'][$location_term[0]->term_id];
                if (!empty($event_details['location']['evo_loc_img'])) {
                    $event_details['location_image'] = wp_get_attachment_image_url($event_details['location']['evo_loc_img'], 'full');
                }
            }


            $organizer_term = get_the_terms($event->ID, 'event_organizer');
            if (!empty($organizer_term[0])) {
                $event_details['organizer'] = $option_value['event_organizer'][$organizer_term[0]->term_id];
                $event_details['organizer']['term_name'] = stripslashes($event_details['organizer']['term_name']);
                $event_details['organizer_image'] = wp_get_attachment_image_url($event_details['organizer']['evo_org_img'], 'full');
            }

            // $event_details['event_meta'] = $event_meta;
            array_push($events, $event_details);
        }
        $search_results['events_sessions'] = $events;
    }
    if ($pillars) {
        $search_results['pillars'] = $pillars;
    }

    if ($poes_object) {
        $poes = array();
        foreach ($poes_object as $poe) {
            if ($poe->parent) {
                $poe_image = array(
                    'image' => get_field('pillar_image', 'event_type_3_' . $poe->term_id)
                );
                $poe_object =  (object) array_merge((array) $poe, $poe_image);
                array_push($poes, $poe_object);
            }
        }
        $search_results['poes'] = $poes;
    }
     // in the end, returns success json data
     wp_send_json_success($search_results);

     // or, on error, return error json data
     wp_send_json_error(['Events not found']);
    //return gil_response(200, 'success', $search_results);
}

add_action('wp_ajax_send_mail_functionh', 'send_mail_functionh');

// register the ajax action for unauthenticated users
add_action('wp_ajax_nopriv_send_mail_functionh', 'send_mail_functionh');

function send_mail_function(){

    $current_user_id = get_current_user_id();
    $user_object = get_user_by('ID', $current_user_id);
    $user_data = $user_object->data;
    // $user['user_meta'] = get_user_meta($user_data->ID);
    $user_email= $user_data->user_email;

    $subject = isset($_POST['subject'])?$_POST['subject']:"";
    $message = isset($_POST['message'])?$_POST['message']:'';
    $receiver_email = isset($_POST['receiver_email'])?$_POST['receiver_email']:"";

    //$message = 'Growth Innovation Leadership Council Member: '.$user_email.' has requested additional contact, " '.$message.'" . If this is your client, please note their communication in SalesLogix and follow up accordingly. Thank you.';

    $to =  $receiver_email;
    $subject = 'Growth Innovation Leadership Council Request';
    $msg = __( $user_data->user_login." has initiated a Growth Pipeline Dialog." ) . "\r\n\r\n";
    $msg .= __( "Please review their Membership details, connect with the appropriate internal team members, and reach out accordingly.") . "\r\n\r\n";
    $msg .=  __( "- The Growth Innovation Leadership Council") . "\r\n\r\n";
    $mail_message = $msg;
    if(empty($receiver_email)) :
     $mailResult = wp_mail($to, $subject, $mail_message); 
    endif;     
  
     // in the end, returns success json data
     wp_send_json_success('Mail sent Successfully');

     // or, on error, return error json data
     wp_send_json_error(['Events not found']);
    //return gil_response(200, 'success', $search_results);
}

add_action('wp_ajax_get_users_notification_list', 'get_users_notification_list');

// register the ajax action for unauthenticated users
add_action('wp_ajax_nopriv_get_users_notification_list', 'get_users_notification_list');

function get_users_notification_list(){
    	// WP Globals
	global $table_prefix, $wpdb;
    $user_id = get_current_user_id(); 
    //$user_id = 218;
	
	// Customer Table
	$notificationTable = $table_prefix . 'notification';
   $result = $wpdb->get_results("SELECT * FROM $notificationTable WHERE receiver_user_id = $user_id AND (notification_type = 'event_notification' OR notification_type = 'Content_notification') ORDER BY triggered_date DESC ");
  
     // in the end, returns success json data
     wp_send_json_success( $result);

     // or, on error, return error json data
     wp_send_json_error(['']);
    //return gil_response(200, 'success', $search_results);
}

add_action('wp_ajax_update_users_notification_status', 'update_users_notification_status');

// register the ajax action for unauthenticated users
add_action('wp_ajax_nopriv_update_users_notification_status', 'update_users_notification_status');

// Pass Notification id as POST value in name notification_id .
function update_users_notification_status(){

    	// WP Globals
	global $table_prefix, $wpdb;
    $notification_id = $_POST['notification_id'];
    //$notification_id = 34;	
	// Customer Table	
    $notificationTable = $table_prefix . 'notification';
    $result = $wpdb->get_results("SELECT * FROM $notificationTable WHERE id = $notification_id AND status = 0");
    if(!empty($result)) :
	$wpdb->update($notificationTable,array('status' => 1,),array('id' => $notification_id));
    // in the end, returns success json data
    wp_send_json_success("Notification status updated");
    else :
        // in the end, returns success json data
     wp_send_json_success("Notification Status already Read");    
    endif; 
     // or, on error, return error json data
     wp_send_json_error("Notification not found !");
    //return gil_response(200, 'success', $search_results);
}
