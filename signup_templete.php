<?php 
/* Template Name: SignUp Page */ 

if (!is_user_logged_in() ) {
 
// if (isset($_POST['user_registeration']) ) :
//     $random_number = rand(0,1000);
//         $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
//         $pass = array(); //remember to declare $pass as an array
//         $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
//         for ($i = 0; $i < 15; $i++) {
//             $n = rand(0, $alphaLength);
//             $pass[] = $alphabet[$n];
//         }
//        $password = implode($pass); //turn the array into a string
//   //  print_r("POST data ");
//     // die;
//     // global $reg_errors;
//     // $reg_errors = new WP_Error;
 
//     $first_name = str_replace(" ","", $_POST['first_name']);
//     $last_name = str_replace(" ","", $_POST['last_name']);
//     $useremail = $_POST['useremail'];
//     $username = $_POST['first_name']."".$_POST['last_name']."".$random_number;
//     //$password = $pass;
//     $title =  $_POST['title'];
//     $company =  $_POST['company'];
//     $phone =  $_POST['business_phone'];
//     $country =  $_POST['country'];
//     $subscription = $_POST['subscription'];
//     $agree_tc = $_POST['agree_tc'];   

//     // if ( 1 > count( $reg_errors->get_error_messages() ) )
//     // {
//         // sanitize user form input
//         // global $username, $useremail;
//         // $username   =   sanitize_user($username);
//         // $useremail  =   sanitize_email( $_POST['useremail'] );
//         // $password   =   esc_attr( $_POST['password'] );

//         $user_data = array(
//             'user_pass'             =>  $password,
//             'user_login'            =>  $username,
//             'user_email'            =>  $useremail,
//             'first_name'            =>  $first_name,
//             'last_name'             =>  $last_name,       
//         );

//     $user_id = wp_insert_user($user_data);

  
//     // On success.
//     if ( is_wp_error( $user_id ) ) {
//         $message = $user_id->get_error_message();        
//     }
    
  
//     $measa_country = [
//         "India",
//         "Pakistan",
//         "Sri Lanka ",
//         "Middle east",
//         "Nepal",
//         "Bangladesh",
//         "Bhutan",
//         "Maldives",
//       ];
    
//       $apac_country = [
//         "Brunei",
//         "Burma",
//         "Cambodia",
//         "Timor- Leste ",
//         "Indonesia ",
//         "Laos",
//         "Malaysia",
//         "Philippines",
//         "Singapore",
//         "Thailand",
//         "Vietnam",
//         "Australia",
//         "Japan",
//       ];
    
//       $americas_country = ["United States", "Canada", "Mexico"];

//       if(in_array($country, $measa_country)){
//         $region = "APAC/MEASA";
//         $role = 'um_measa';
//       }
//       elseif(in_array($country, $apac_country)){
//         $role = 'um_apac';
//         $region = "APAC/MEASA";
//       }
//       elseif(in_array($country, $americas_country)){
//         $role = 'um_americas';
//         $region = "AMERICAS";
//       }
//       else{
//         $role = 'um_americas';
//         $region = "AMERICAS";
//       }   
     

//     //  if (!empty($url_params['region']) && $url_params['region'] !== 'Region' ) {
//     //     $data = (explode(" ",$url_params['region']));
//     //     $role = 'um_'.strtolower($data[0]);
//     //     if($data[1]){
//     //          $role = 'um_'.strtolower($data[0]).'-'.strtolower($data[1]);
//     //     }
//     //  }
//     //  else{
//     //       $role = '';
//     // }    
           
        
//     if (!is_wp_error($user_id) && $user_id) {
//         $wp_user_object = new WP_User($user_id);
//         $wp_user_object->remove_role('pending_user');
//         $wp_user_object->set_role('um_growth-member'); 
//         $wp_user_object->add_role($role);     
        
//         do_action( 'profile_update', $user_id, $wp_user_object, $wp_user_object );

//         $id = $user_id;
//         update_field('Title', $title, 'user_' . $id);
//         //update_field('title', $title, 'user_' . $id);
//         update_field('company', $company, 'user_' . $id);
//         update_field('business_phone', $phone, 'user_' . $id);
//         update_field('country', $country, 'user_' . $id);    
//         update_field('user_persona','Growth Member', 'user_' . $id);
//         update_field('region', $region, 'user_' . $id);        
//         update_field('event_notification', true, 'user_' . $id);
//         update_field('chat_notification', true, 'user_' . $id);
//         update_field('content_notification', true, 'user_' . $id);
//         update_field('member_connection_add_delete_notification', true, 'user_' . $id);
//         update_field('discussion_board_notification', true, 'user_' . $id);
//         update_field('registered_event_notification', true, 'user_' . $id);
//         update_field('frost_subscription',$subscription, 'user_' . $id);
//         update_field('agree_tc',$agree_tc, 'user_' . $id);
               
//         $msg = __( "Hello ".$username."," ) . "\r\n\r\n";
//         $msg .= __( "Thank you for becoming a valued member of our growing community! We are delighted to welcome you as a Growth Member and are confident that our services will provide you with valuable insights and resources to enhance your professional journey.") . "\r\n\r\n";
//         $msg .= __( "Your account has been successfully registered, and we are pleased to share your login details. Please find your member login credentials below:") . "\r\n";
//         $msg .= __( "Email : ".$useremail) . "\r\n";
//         $msg .= __( "Password: ".$password) . "\r\n";
//         $msg .=  __( "With your Growth Membership, you gain access to a range of benefits, including educational materials, industry insights, exclusive events, and networking opportunities. We believe that this membership will support your ongoing professional development and help you stay ahead in your field.") . "\r\n\r\n";
//         $msg .=  __( "At the Growth Innovation Leadership Council, we are committed to delivering high-quality services and continuously adding value to your membership experience. Our dedicated team is available to assist you with any queries, offer guidance, and ensure that you maximize the benefits of your membership.") . "\r\n\r\n";
//         $msg .=  __( "We encourage you to explore our platform, participate in discussions, and connect with fellow Growth Members who share your passion for innovation and growth. Together, we can create a thriving community that fosters collaboration and learning.") . "\r\n\r\n";
//         $msg .=  __( "Once again, welcome to our Growth Membership! We are excited to have you on board and look forward to supporting your growth and success.") . "\r\n\r\n";
//         $msg .=  __( "Best regards,") . "\r\n\r\n";
//         $msg .=  __( "The Growth Innovation Leadership Council") . "\r\n\r\n";     
//         generic_mail_function($useremail, 'Registration Verification', $msg);       
               
//         $msg = __( "Hello " ) . "\r\n\r\n";
//         $msg .= __( "I hope this email finds you well. I am writing to inform you that we have successfully registered a new Growth Member in our system. Please find the member's details below: ") . "\r\n\r\n";
//         $msg .= __( "Your account has been successfully registered, and we are pleased to share your login details. Please find your member login credentials below:") . "\r\n";
//         $msg .= __( "Name : ".$_POST['first_name']." ".$_POST['last_name']) . "\r\n";
//         $msg .= __( "Company: ".$company) . "\r\n";
//         $msg .= __( "Email : ".$useremail) . "\r\n";
//         $msg .= __( "Username: ".$username) . "\r\n";
//         $msg .= __( "Registration Date: ".date("m/d/Y")). "\r\n";
//         $msg .=  __( "Thank you for your dedication to delivering exceptional service to our members.") . "\r\n\r\n";      
//         $msg .=  __( "Best regards,") . "\r\n\r\n";         
//         generic_mail_function("councils@frost.com", 'New Registration', $msg);

        
//        // Start the session
//        session_start();
//        // Set session variables
//        $_SESSION["signup_success"] = "Thank you for Registration. The login credentials has been emailed to you. Pleas contact us for if you didn't receiced. ";     
//        wp_redirect( home_url()."/signin" );

//     } elseif (is_wp_error($user_id)) {
//         $message = $user_id->get_error_message();
//         //return gil_error($user_id->get_error_code(), $user_id->get_error_message(), null);
//     } else {
//         //return gil_error(500, 'Something is wrong, please contact admin', null);
//     }
//endif;

//}  

// else {  
//    wp_redirect( home_url() ); exit;  
// }

?>

<!-- <h3>Create your account</h3>
<form action="" method="post" name="user_registeration">
    <label>Username <span class="error">*</span></label>
    <input type="text" name="username" placeholder="Enter Your Username" class="text" required /><br />
    <label>Email address <span class="error">*</span></label>
    <input type="text" name="useremail" class="text" placeholder="Enter Your Email" required /> <br />
    <label>Password <span class="error">*</span></label>
    <input type="password" name="password" class="text" placeholder="Enter Your password" required /> <br />
    <input type="submit" name="user_registeration" value="SignUp" />
</form> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-jscalendar@1.4.4/source/jsCalendar.min.css"
        integrity="sha384-44GnAqZy9yUojzFPjdcUpP822DGm1ebORKY8pe6TkHuqJ038FANyfBYBpRvw8O9w" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css-landing/style.css') ?>" />
    <title>Signup</title>
</head>


<body>
    <header class="" data-aos="fade-in">

        <div class="header-inner">
            <div class="container">
                <div class="row justify-content-between align-items-center flex-nowrap">
                    <div class="col">
                        <div class="d-flex flex-nowrap align-items-center">


                            <div class="logo-container">
                                <a href="https://beta.gilcouncil.com"><img
                                        src="https://beta.gilcouncil.com/wp-content/uploads/2023/06/Logo-big.png"
                                        alt="" /></a>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>


    </header>
    <div class="page-signup">
        <?php 
    if (!$user_ID) {  
?>
        <form action="" method="post" name="user_registeration" class="form signup-form gc-form" id="signup-form">
            <!-- <label>Username <span class="error">*</span></label>
        <input type="text" name="username" placeholder="Enter Your Username" class="text" required /><br />
        <label>Email address <span class="error">*</span></label>
        <input type="text" name="useremail" class="text" placeholder="Enter Your Email" required /> <br />
        <label>Password <span class="error">*</span></label>
        <input type="password" name="password" class="text" placeholder="Enter Your password" required /> <br /> -->


            <!-- <div class="signup-form-step-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="content-container left">
                                <div class="header-box">
                                    <h1>Signup</h1>
                                </div>
                                <label for="email">Businesss Email*</label>
                                <div class="input-group">
                                    <input name="useremail" type="text" placeholder="Enter your Business Email"
                                        class="form-control" id="emailSignup" />
                                </div>
                                <p class="error email"></p>
                                <div class="label-container d-flex justify-content-between align-items-center">
                                    <label for="password">Create Password*</label>

                                </div>
                                <div class="input-group">
                                    <input name="password" type="password" placeholder="Must be 8 characters long"
                                        class="form-control password" id="password" />
                                    <div class="input-group-append form-icon cursor-pointer toggle-visibility">
                                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="visible-icon open d-none">
                                            <path
                                                d="M8.79851 1.60546C11.7402 1.60546 14.3637 3.25872 15.6444 5.87445C14.3637 8.49017 11.748 10.1434 8.79851 10.1434C5.84903 10.1434 3.2333 8.49017 1.95261 5.87445C3.2333 3.25872 5.85679 1.60546 8.79851 1.60546ZM8.79851 0.0531006C5.08395 0.0531006 1.88846 2.26453 0.443944 5.44191C0.319018 5.7167 0.319018 6.03219 0.443945 6.30698C1.88847 9.48436 5.08395 11.6958 8.79851 11.6958C12.5131 11.6958 15.7086 9.48436 17.1531 6.30698C17.278 6.03219 17.278 5.7167 17.1531 5.44191C15.7086 2.26453 12.5131 0.0531006 8.79851 0.0531006ZM8.79851 3.934C9.86964 3.934 10.739 4.80332 10.739 5.87445C10.739 6.94557 9.86964 7.81489 8.79851 7.81489C7.72738 7.81489 6.85806 6.94557 6.85806 5.87445C6.85806 4.80332 7.72738 3.934 8.79851 3.934ZM8.79851 2.38164C6.87358 2.38164 5.3057 3.94952 5.3057 5.87445C5.3057 7.79937 6.87358 9.36725 8.79851 9.36725C10.7234 9.36725 12.2913 7.79937 12.2913 5.87445C12.2913 3.94952 10.7234 2.38164 8.79851 2.38164Z"
                                                fill="#86C9F6" />
                                        </svg>
                                        <svg class="visible-icon closed" width="22" height="20" viewBox="0 0 22 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.01175 13.6515C8.4406 13.1923 8.09295 12.5681 8.09295 11.868C8.09295 10.4653 9.49549 9.33469 11.2358 9.33469C12.0969 9.33469 12.8896 9.61554 13.4508 10.0748"
                                                stroke="#86C9F6" stroke-width="1.78794" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M14.3202 12.3171C14.0897 13.3493 13.0805 14.1639 11.8001 14.3511"
                                                stroke="#86C9F6" stroke-width="1.78794" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M5.92654 16.1365C4.35017 15.1396 3.01518 13.6833 2.0477 11.8677C3.02511 10.0441 4.36905 8.57985 5.95535 7.57485C7.53172 6.56985 9.35045 6.02414 11.2357 6.02414C13.1319 6.02414 14.9497 6.57785 16.536 7.59005"
                                                stroke="#86C9F6" stroke-width="1.78794" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M18.6338 9.35001C19.3172 10.0814 19.9182 10.9255 20.4238 11.8673C18.4699 15.5136 15.0172 17.7101 11.2357 17.7101C10.3785 17.7101 9.53322 17.598 8.7207 17.3796"
                                                stroke="#86C9F6" stroke-width="1.78794" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M19.0703 5.55634L3.402 18.178" stroke="#86C9F6"
                                                stroke-width="1.78794" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="error password"></p>
                                <div class="label-container d-flex justify-content-between align-items-center">
                                    <label for="passwordConfirm">Confirm Password*</label>

                                </div>
                                <div class="input-group">
                                    <input type="password" placeholder="Confirm Password"
                                        class="form-control passwordConfirm" id="passwordConfirm" />
                                    <div class="input-group-append form-icon cursor-pointer toggle-visibility-confirm">
                                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="visible-icon open d-none">
                                            <path
                                                d="M8.79851 1.60546C11.7402 1.60546 14.3637 3.25872 15.6444 5.87445C14.3637 8.49017 11.748 10.1434 8.79851 10.1434C5.84903 10.1434 3.2333 8.49017 1.95261 5.87445C3.2333 3.25872 5.85679 1.60546 8.79851 1.60546ZM8.79851 0.0531006C5.08395 0.0531006 1.88846 2.26453 0.443944 5.44191C0.319018 5.7167 0.319018 6.03219 0.443945 6.30698C1.88847 9.48436 5.08395 11.6958 8.79851 11.6958C12.5131 11.6958 15.7086 9.48436 17.1531 6.30698C17.278 6.03219 17.278 5.7167 17.1531 5.44191C15.7086 2.26453 12.5131 0.0531006 8.79851 0.0531006ZM8.79851 3.934C9.86964 3.934 10.739 4.80332 10.739 5.87445C10.739 6.94557 9.86964 7.81489 8.79851 7.81489C7.72738 7.81489 6.85806 6.94557 6.85806 5.87445C6.85806 4.80332 7.72738 3.934 8.79851 3.934ZM8.79851 2.38164C6.87358 2.38164 5.3057 3.94952 5.3057 5.87445C5.3057 7.79937 6.87358 9.36725 8.79851 9.36725C10.7234 9.36725 12.2913 7.79937 12.2913 5.87445C12.2913 3.94952 10.7234 2.38164 8.79851 2.38164Z"
                                                fill="#86C9F6" />
                                        </svg>
                                        <svg class="visible-icon closed" width="22" height="20" viewBox="0 0 22 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.01175 13.6515C8.4406 13.1923 8.09295 12.5681 8.09295 11.868C8.09295 10.4653 9.49549 9.33469 11.2358 9.33469C12.0969 9.33469 12.8896 9.61554 13.4508 10.0748"
                                                stroke="#86C9F6" stroke-width="1.78794" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M14.3202 12.3171C14.0897 13.3493 13.0805 14.1639 11.8001 14.3511"
                                                stroke="#86C9F6" stroke-width="1.78794" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M5.92654 16.1365C4.35017 15.1396 3.01518 13.6833 2.0477 11.8677C3.02511 10.0441 4.36905 8.57985 5.95535 7.57485C7.53172 6.56985 9.35045 6.02414 11.2357 6.02414C13.1319 6.02414 14.9497 6.57785 16.536 7.59005"
                                                stroke="#86C9F6" stroke-width="1.78794" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M18.6338 9.35001C19.3172 10.0814 19.9182 10.9255 20.4238 11.8673C18.4699 15.5136 15.0172 17.7101 11.2357 17.7101C10.3785 17.7101 9.53322 17.598 8.7207 17.3796"
                                                stroke="#86C9F6" stroke-width="1.78794" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M19.0703 5.55634L3.402 18.178" stroke="#86C9F6"
                                                stroke-width="1.78794" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="error passwordConfirm"></p>

                                <div class="button-container">
                                    <div class="btn btn-primary signup-form-1 btn-small">
                                        Next
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-1">
                            <div class="content-container right">
                                <div class="header-box">
                                    <h1>Already a growth council member</h1>
                                </div>

                                <div class="button-container">
                                    <button class="btn btn-primary btn-small">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="signup-form-step-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="content-container left">
                                <div class="inner">
                                    <div class="header-box">
                                        <h1>SIGN UP</h1>
                                    </div>
                                    <div class="input-group-outer">
                                        <label for="email">Business Email*</label>
                                        <div class="input-group">
                                            <input type="text" name="useremail" placeholder="Enter your Business Email"
                                                class="form-control" id="emailSignup" />
                                        </div>
                                        <p class="error email"></p>
                                    </div>
                                    <div class="input-group-outer">
                                        <div class="label-container d-flex justify-content-between align-items-center">
                                            <label for="password">Create Password*</label>
                                        </div>
                                        <div class="input-group">
                                            <input type="password" placeholder="Must be 8 characters long"
                                                class="form-control password" id="password" name="password" />
                                            <div class="input-group-append form-icon cursor-pointer toggle-visibility">
                                                <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" class="visible-icon open d-none">
                                                    <path
                                                        d="M8.79851 1.60546C11.7402 1.60546 14.3637 3.25872 15.6444 5.87445C14.3637 8.49017 11.748 10.1434 8.79851 10.1434C5.84903 10.1434 3.2333 8.49017 1.95261 5.87445C3.2333 3.25872 5.85679 1.60546 8.79851 1.60546ZM8.79851 0.0531006C5.08395 0.0531006 1.88846 2.26453 0.443944 5.44191C0.319018 5.7167 0.319018 6.03219 0.443945 6.30698C1.88847 9.48436 5.08395 11.6958 8.79851 11.6958C12.5131 11.6958 15.7086 9.48436 17.1531 6.30698C17.278 6.03219 17.278 5.7167 17.1531 5.44191C15.7086 2.26453 12.5131 0.0531006 8.79851 0.0531006ZM8.79851 3.934C9.86964 3.934 10.739 4.80332 10.739 5.87445C10.739 6.94557 9.86964 7.81489 8.79851 7.81489C7.72738 7.81489 6.85806 6.94557 6.85806 5.87445C6.85806 4.80332 7.72738 3.934 8.79851 3.934ZM8.79851 2.38164C6.87358 2.38164 5.3057 3.94952 5.3057 5.87445C5.3057 7.79937 6.87358 9.36725 8.79851 9.36725C10.7234 9.36725 12.2913 7.79937 12.2913 5.87445C12.2913 3.94952 10.7234 2.38164 8.79851 2.38164Z"
                                                        fill="#86C9F6" />
                                                </svg>
                                                <svg class="visible-icon closed" width="22" height="20"
                                                    viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.01175 13.6515C8.4406 13.1923 8.09295 12.5681 8.09295 11.868C8.09295 10.4653 9.49549 9.33469 11.2358 9.33469C12.0969 9.33469 12.8896 9.61554 13.4508 10.0748"
                                                        stroke="#86C9F6" stroke-width="1.78794" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M14.3202 12.3171C14.0897 13.3493 13.0805 14.1639 11.8001 14.3511"
                                                        stroke="#86C9F6" stroke-width="1.78794" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M5.92654 16.1365C4.35017 15.1396 3.01518 13.6833 2.0477 11.8677C3.02511 10.0441 4.36905 8.57985 5.95535 7.57485C7.53172 6.56985 9.35045 6.02414 11.2357 6.02414C13.1319 6.02414 14.9497 6.57785 16.536 7.59005"
                                                        stroke="#86C9F6" stroke-width="1.78794" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M18.6338 9.35001C19.3172 10.0814 19.9182 10.9255 20.4238 11.8673C18.4699 15.5136 15.0172 17.7101 11.2357 17.7101C10.3785 17.7101 9.53322 17.598 8.7207 17.3796"
                                                        stroke="#86C9F6" stroke-width="1.78794" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M19.0703 5.55634L3.402 18.178" stroke="#86C9F6"
                                                        stroke-width="1.78794" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="error password"></p>
                                    </div>

                                    <div class="label-container d-flex justify-content-between align-items-center">
                                        <label for="passwordConfirm">Confirm Password*</label>
                                    </div>

                                    <div class="input-group-outer">
                                        <div class="input-group">
                                            <input type="password" placeholder="Confirm Password"
                                                class="form-control passwordConfirm" id="passwordConfirm"
                                                name="password" />
                                            <div
                                                class="input-group-append form-icon cursor-pointer toggle-visibility-confirm">
                                                <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" class="visible-icon open d-none">
                                                    <path
                                                        d="M8.79851 1.60546C11.7402 1.60546 14.3637 3.25872 15.6444 5.87445C14.3637 8.49017 11.748 10.1434 8.79851 10.1434C5.84903 10.1434 3.2333 8.49017 1.95261 5.87445C3.2333 3.25872 5.85679 1.60546 8.79851 1.60546ZM8.79851 0.0531006C5.08395 0.0531006 1.88846 2.26453 0.443944 5.44191C0.319018 5.7167 0.319018 6.03219 0.443945 6.30698C1.88847 9.48436 5.08395 11.6958 8.79851 11.6958C12.5131 11.6958 15.7086 9.48436 17.1531 6.30698C17.278 6.03219 17.278 5.7167 17.1531 5.44191C15.7086 2.26453 12.5131 0.0531006 8.79851 0.0531006ZM8.79851 3.934C9.86964 3.934 10.739 4.80332 10.739 5.87445C10.739 6.94557 9.86964 7.81489 8.79851 7.81489C7.72738 7.81489 6.85806 6.94557 6.85806 5.87445C6.85806 4.80332 7.72738 3.934 8.79851 3.934ZM8.79851 2.38164C6.87358 2.38164 5.3057 3.94952 5.3057 5.87445C5.3057 7.79937 6.87358 9.36725 8.79851 9.36725C10.7234 9.36725 12.2913 7.79937 12.2913 5.87445C12.2913 3.94952 10.7234 2.38164 8.79851 2.38164Z"
                                                        fill="#86C9F6" />
                                                </svg>
                                                <svg class="visible-icon closed" width="22" height="20"
                                                    viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.01175 13.6515C8.4406 13.1923 8.09295 12.5681 8.09295 11.868C8.09295 10.4653 9.49549 9.33469 11.2358 9.33469C12.0969 9.33469 12.8896 9.61554 13.4508 10.0748"
                                                        stroke="#86C9F6" stroke-width="1.78794" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M14.3202 12.3171C14.0897 13.3493 13.0805 14.1639 11.8001 14.3511"
                                                        stroke="#86C9F6" stroke-width="1.78794" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M5.92654 16.1365C4.35017 15.1396 3.01518 13.6833 2.0477 11.8677C3.02511 10.0441 4.36905 8.57985 5.95535 7.57485C7.53172 6.56985 9.35045 6.02414 11.2357 6.02414C13.1319 6.02414 14.9497 6.57785 16.536 7.59005"
                                                        stroke="#86C9F6" stroke-width="1.78794" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M18.6338 9.35001C19.3172 10.0814 19.9182 10.9255 20.4238 11.8673C18.4699 15.5136 15.0172 17.7101 11.2357 17.7101C10.3785 17.7101 9.53322 17.598 8.7207 17.3796"
                                                        stroke="#86C9F6" stroke-width="1.78794" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M19.0703 5.55634L3.402 18.178" stroke="#86C9F6"
                                                        stroke-width="1.78794" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="error passwordConfirm"></p>
                                    </div>

                                    <div class="button-container">
                                    <?php 
                                if($message) :
                                    echo '<p class="error">'.$message.'</p>';
                                endif;
                                ?>  
                                        <div class="btn btn-primary btn-small signup-form-1">
                                            Next
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content-container right" style="
                    background-image: url(https://beta.gilcouncil.com/wp-content/uploads/2023/07/MicrosoftTeams-image-1.jpg);
                  ">
                                <div class="slider-overlay"></div>
                                <div class="header-box">
                                    <h1>Already with Growth Innovation Leadership Council?</h1>
                                </div>

                                <div class="button-container">
                                    <a href=" <?php get_home_url().'/signin/' ?>">
                                        <button class="btn btn-primary">Log in</button>

                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-bottom">
                        <div class="header-box">
                            <h3>Already a Member?</h3>
                        </div>
                        <div class="button-container">
                            <a href="http://www.google.com">
                                <button class="btn btn-primary btn-small  btn-small">Log
                                    In</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="signup-form-step-1" style="
            background-image: url(https://beta.gilcouncil.com/wp-content/uploads/2023/07/MicrosoftTeams-image-1.jpg);
          ">
                <div class="slider-overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="content-container left">
                                <div class="inner">
                                    <div class="header-box">
                                        <h1>Sign Up Now!</h1>
                                    </div>
                                    <div class="form-content">
                                        <div class="input-group-outer">
                                            <label for="email">Businesss Email*</label>
                                            <div class="input-group">
                                                <input type="text" name="useremail" class="form-control"
                                                    id="emailSignup" />
                                            </div>
                                            <p class="error email"></p>
                                        </div>
                                        <!-- <div class="input-group-outer">
                        <div
                          class="label-container d-flex justify-content-between align-items-center"
                        >
                          <label for="password">Create Password*</label>
                        </div>
                        <div class="input-group">
                          <input
                            type="password"
                            placeholder="Must be 8 characters long"
                            class="form-control password"
                            id="password"
                            name="password"
                          />
                          <div
                            class="input-group-append form-icon cursor-pointer toggle-visibility"
                          >
                            <svg
                              width="18"
                              height="12"
                              viewBox="0 0 18 12"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                              class="visible-icon open d-none"
                            >
                              <path
                                d="M8.79851 1.60546C11.7402 1.60546 14.3637 3.25872 15.6444 5.87445C14.3637 8.49017 11.748 10.1434 8.79851 10.1434C5.84903 10.1434 3.2333 8.49017 1.95261 5.87445C3.2333 3.25872 5.85679 1.60546 8.79851 1.60546ZM8.79851 0.0531006C5.08395 0.0531006 1.88846 2.26453 0.443944 5.44191C0.319018 5.7167 0.319018 6.03219 0.443945 6.30698C1.88847 9.48436 5.08395 11.6958 8.79851 11.6958C12.5131 11.6958 15.7086 9.48436 17.1531 6.30698C17.278 6.03219 17.278 5.7167 17.1531 5.44191C15.7086 2.26453 12.5131 0.0531006 8.79851 0.0531006ZM8.79851 3.934C9.86964 3.934 10.739 4.80332 10.739 5.87445C10.739 6.94557 9.86964 7.81489 8.79851 7.81489C7.72738 7.81489 6.85806 6.94557 6.85806 5.87445C6.85806 4.80332 7.72738 3.934 8.79851 3.934ZM8.79851 2.38164C6.87358 2.38164 5.3057 3.94952 5.3057 5.87445C5.3057 7.79937 6.87358 9.36725 8.79851 9.36725C10.7234 9.36725 12.2913 7.79937 12.2913 5.87445C12.2913 3.94952 10.7234 2.38164 8.79851 2.38164Z"
                                fill="#86C9F6"
                              />
                            </svg>
                            <svg
                              class="visible-icon closed"
                              width="22"
                              height="20"
                              viewBox="0 0 22 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M9.01175 13.6515C8.4406 13.1923 8.09295 12.5681 8.09295 11.868C8.09295 10.4653 9.49549 9.33469 11.2358 9.33469C12.0969 9.33469 12.8896 9.61554 13.4508 10.0748"
                                stroke="#86C9F6"
                                stroke-width="1.78794"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M14.3202 12.3171C14.0897 13.3493 13.0805 14.1639 11.8001 14.3511"
                                stroke="#86C9F6"
                                stroke-width="1.78794"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M5.92654 16.1365C4.35017 15.1396 3.01518 13.6833 2.0477 11.8677C3.02511 10.0441 4.36905 8.57985 5.95535 7.57485C7.53172 6.56985 9.35045 6.02414 11.2357 6.02414C13.1319 6.02414 14.9497 6.57785 16.536 7.59005"
                                stroke="#86C9F6"
                                stroke-width="1.78794"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M18.6338 9.35001C19.3172 10.0814 19.9182 10.9255 20.4238 11.8673C18.4699 15.5136 15.0172 17.7101 11.2357 17.7101C10.3785 17.7101 9.53322 17.598 8.7207 17.3796"
                                stroke="#86C9F6"
                                stroke-width="1.78794"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M19.0703 5.55634L3.402 18.178"
                                stroke="#86C9F6"
                                stroke-width="1.78794"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </div>
                        </div>
                        <p class="error password"></p>
                      </div>
  
                      <div
                        class="label-container d-flex justify-content-between align-items-center"
                      >
                        <label for="passwordConfirm">Confirm Password*</label>
                      </div>
  
                      <div class="input-group-outer">
                        <div class="input-group">
                          <input
                            type="password"
                            placeholder="Confirm Password"
                            class="form-control passwordConfirm"
                            id="passwordConfirm"
                            name="password"
                          />
                          <div
                            class="input-group-append form-icon cursor-pointer toggle-visibility-confirm"
                          >
                            <svg
                              width="18"
                              height="12"
                              viewBox="0 0 18 12"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                              class="visible-icon open d-none"
                            >
                              <path
                                d="M8.79851 1.60546C11.7402 1.60546 14.3637 3.25872 15.6444 5.87445C14.3637 8.49017 11.748 10.1434 8.79851 10.1434C5.84903 10.1434 3.2333 8.49017 1.95261 5.87445C3.2333 3.25872 5.85679 1.60546 8.79851 1.60546ZM8.79851 0.0531006C5.08395 0.0531006 1.88846 2.26453 0.443944 5.44191C0.319018 5.7167 0.319018 6.03219 0.443945 6.30698C1.88847 9.48436 5.08395 11.6958 8.79851 11.6958C12.5131 11.6958 15.7086 9.48436 17.1531 6.30698C17.278 6.03219 17.278 5.7167 17.1531 5.44191C15.7086 2.26453 12.5131 0.0531006 8.79851 0.0531006ZM8.79851 3.934C9.86964 3.934 10.739 4.80332 10.739 5.87445C10.739 6.94557 9.86964 7.81489 8.79851 7.81489C7.72738 7.81489 6.85806 6.94557 6.85806 5.87445C6.85806 4.80332 7.72738 3.934 8.79851 3.934ZM8.79851 2.38164C6.87358 2.38164 5.3057 3.94952 5.3057 5.87445C5.3057 7.79937 6.87358 9.36725 8.79851 9.36725C10.7234 9.36725 12.2913 7.79937 12.2913 5.87445C12.2913 3.94952 10.7234 2.38164 8.79851 2.38164Z"
                                fill="#86C9F6"
                              />
                            </svg>
                            <svg
                              class="visible-icon closed"
                              width="22"
                              height="20"
                              viewBox="0 0 22 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M9.01175 13.6515C8.4406 13.1923 8.09295 12.5681 8.09295 11.868C8.09295 10.4653 9.49549 9.33469 11.2358 9.33469C12.0969 9.33469 12.8896 9.61554 13.4508 10.0748"
                                stroke="#86C9F6"
                                stroke-width="1.78794"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M14.3202 12.3171C14.0897 13.3493 13.0805 14.1639 11.8001 14.3511"
                                stroke="#86C9F6"
                                stroke-width="1.78794"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M5.92654 16.1365C4.35017 15.1396 3.01518 13.6833 2.0477 11.8677C3.02511 10.0441 4.36905 8.57985 5.95535 7.57485C7.53172 6.56985 9.35045 6.02414 11.2357 6.02414C13.1319 6.02414 14.9497 6.57785 16.536 7.59005"
                                stroke="#86C9F6"
                                stroke-width="1.78794"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M18.6338 9.35001C19.3172 10.0814 19.9182 10.9255 20.4238 11.8673C18.4699 15.5136 15.0172 17.7101 11.2357 17.7101C10.3785 17.7101 9.53322 17.598 8.7207 17.3796"
                                stroke="#86C9F6"
                                stroke-width="1.78794"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M19.0703 5.55634L3.402 18.178"
                                stroke="#86C9F6"
                                stroke-width="1.78794"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </div>
                        </div>
                        <p class="error passwordConfirm"></p>
                      </div> -->

                                        <div class="button-container">
                                            <div class="btn btn-primary btn-small signup-form-1">
                                                Next
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content-container right">
                                <div class="inner">
                                    <div class="header-box">
                                        <h2>
                                            Already with Growth <br />Innovation Leadership
                                            Council?
                                        </h2>
                                    </div>

                                    <div class="button-container">
                                        <a href="<?php echo get_home_url()."/signin" ?>">

                                            <button class="btn btn-primary btn-small">Login</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-bottom">
                        <div class="header-box">
                            <h3>Already a Member?</h3>
                        </div>
                        <a href="<?php echo get_home_url()."/signin" ?>">

                            <button class="btn btn-primary btn-small">Login</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="signup-form-step-2 d-none">
                <div class="container">
                    <div class="header-box">
                        <h1>Sign Up</h1>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <label for="firstName">First Name*</label>
                            <div class="input-group">
                                <input type="text" required class="form-control page2-input" id="firstName"
                                    name="first_name" />
                            </div>
                            <p class="error firstName"></p>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label for="firstName">Last Name*</label>
                            <div class="input-group">
                                <input type="text" required class="form-control page2-input" id="lastName"
                                    name="last_name" />
                            </div>
                            <p class="error lastName"></p>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label for="title">Title*</label>
                            <div class="input-group">
                                <input type="text" required class="form-control page2-input" id="title" name="title" />
                            </div>
                            <p class="error title"></p>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label for="company">Company*</label>
                            <div class="input-group">
                                <input type="text" required class="form-control page2-input" id="company"
                                    name="company" />
                            </div>
                            <p class="error company"></p>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label for="phone">Business Phone*</label>
                            <div class="input-group">
                                <input type="number" required class="form-control page2-input" id="phone"
                                    name="business_phone" />
                            </div>
                            <p class="error phone"></p>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="input-container">
                                <label for="contry">Country*</label>
                                <select name="country" required id="country" class="page2-select">
                                    <option value="" selected="selected">
                                        Please select one
                                    </option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Åland Islands">Åland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">
                                        Antigua and Barbuda
                                    </option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">
                                        Bosnia and Herzegovina
                                    </option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">
                                        British Indian Ocean Territory
                                    </option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">
                                        Central African Republic
                                    </option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">
                                        Cocos (Keeling) Islands
                                    </option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">
                                        Congo, The Democratic Republic of The
                                    </option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">
                                        Dominican Republic
                                    </option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">
                                        Falkland Islands (Malvinas)
                                    </option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">
                                        French Southern Territories
                                    </option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">
                                        Heard Island and Mcdonald Islands
                                    </option>
                                    <option value="Holy See (Vatican City State)">
                                        Holy See (Vatican City State)
                                    </option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">
                                        Iran, Islamic Republic of
                                    </option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">
                                        Korea, Democratic People's Republic of
                                    </option>
                                    <option value="Korea, Republic of">
                                        Korea, Republic of
                                    </option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">
                                        Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">
                                        Libyan Arab Jamahiriya
                                    </option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">
                                        Macedonia, The Former Yugoslav Republic of
                                    </option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">
                                        Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova, Republic of">
                                        Moldova, Republic of
                                    </option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">
                                        Netherlands Antilles
                                    </option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">
                                        Northern Mariana Islands
                                    </option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">
                                        Palestinian Territory, Occupied
                                    </option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">
                                        Russian Federation
                                    </option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">
                                        Saint Kitts and Nevis
                                    </option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">
                                        Saint Pierre and Miquelon
                                    </option>
                                    <option value="Saint Vincent and The Grenadines">
                                        Saint Vincent and The Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">
                                        Sao Tome and Principe
                                    </option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">
                                        South Georgia and The South Sandwich Islands
                                    </option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">
                                        Svalbard and Jan Mayen
                                    </option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">
                                        Syrian Arab Republic
                                    </option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">
                                        Tanzania, United Republic of
                                    </option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">
                                        Trinidad and Tobago
                                    </option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">
                                        Turks and Caicos Islands
                                    </option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">
                                        United Arab Emirates
                                    </option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">
                                        United States Minor Outlying Islands
                                    </option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">
                                        Virgin Islands, British
                                    </option>
                                    <option value="Virgin Islands, U.S.">
                                        Virgin Islands, U.S.
                                    </option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                            <p class="error country"></p>
                        </div>
                        <div class="terms-conditions-box">
                            <div class="input-group d-flex align-items-center">
                                <input name="subscription" required type="checkbox" class="page2-input" id="terms1" />
                                <p class="terms1">
                                    Frost & Sullivan may use your contact information to provide
                                    you information about our research, insights, services or
                                    events. You can unsubscribe anytime.
                                </p>
                            </div>
                            <div class="input-group d-flex align-items-center">
                                <input name="agree_tc" required type="checkbox" class="page2-input" id="terms2" />
                                <p class="terms2">
                                    By clicking submit, I agree to Frost & Sullivan's Terms of
                                    Use and Privacy Policy*
                                </p>
                            </div>
                        </div>
                        <div class="button-container">
                            <!-- <button class="btn btn-primary btn-small signup-form-submit-btn" type="submit"
                                id="submitBtn">
                                Submit
                            </button> -->
                            <button type="submit" name="user_registeration" class="btn btn-primary btn-small"
                                value="SignUp">Sign Up </button>
                            <?php 
                                if($message) :
                                    echo '<p class="error">'.$message.'</p>';
                                endif;
                                ?>
                        </div>
                    </div>
                </div>

                <!-- <div class="container">
        <div class="form-bottom">
          <div class="header-box">
            <h1>Already a Member ?</h1>
          </div>
          <div class="button-container">
            <button class="btn btn-primary">Login</button>
          </div>
        </div>
      </div> -->
                <div class="container">
                    <div class="banner-bottom">
                        <div class="header-box">
                            <h3>Already a Member?</h3>
                        </div>
                        <div class="button-container">
                            <div class="btn btn-primary btn-small">Login</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <input type="text" name="username"> -->
            <button type="button" class="d-none">submit here</button>
            <input type="submit" name="user_registeration" class="d-none" value="SignUp" />
            <h2 class="error from-error"></h2>
        </form>

        <?php } ?>
    </div>

    <!-- error modal   -->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalLongTitle"> Oops...</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body text-center">
                    <div class="icon-container">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Group 5173">
                                <circle id="Ellipse 2947" cx="32.3398" cy="32.4479" r="30" stroke="#15426B"
                                    stroke-width="3" />
                                <path id="!"
                                    d="M33.9228 39.0578C33.9228 39.1719 33.8943 39.2717 33.8372 39.3573C33.7945 39.4428 33.7089 39.5141 33.5805 39.5712C33.4522 39.6282 33.2882 39.671 33.0885 39.6995C32.8889 39.728 32.6393 39.7423 32.3398 39.7423C32.0404 39.7423 31.7908 39.728 31.5911 39.6995C31.3915 39.671 31.2275 39.6282 31.0991 39.5712C30.9708 39.5141 30.8781 39.4428 30.8211 39.3573C30.7783 39.2717 30.7569 39.1719 30.7569 39.0578L30.3932 18.6504C30.379 18.4793 30.4004 18.3295 30.4574 18.2012C30.5144 18.0728 30.6143 17.9659 30.7569 17.8803C30.9138 17.7948 31.1134 17.7377 31.3558 17.7092C31.6125 17.6664 31.9405 17.645 32.3398 17.645C32.7249 17.645 33.0386 17.6664 33.2811 17.7092C33.5378 17.752 33.7374 17.8162 33.88 17.9017C34.0369 17.9873 34.1438 18.0942 34.2009 18.2226C34.2579 18.3367 34.2865 18.4793 34.2865 18.6504L33.9228 39.0578ZM34.5859 44.8121C34.5859 45.2827 34.5503 45.6748 34.479 45.9886C34.4219 46.2881 34.3007 46.5376 34.1153 46.7373C33.9442 46.9227 33.716 47.051 33.4308 47.1223C33.1456 47.2079 32.7819 47.2507 32.3398 47.2507C31.8978 47.2507 31.527 47.2079 31.2275 47.1223C30.9423 47.051 30.7141 46.9227 30.543 46.7373C30.3718 46.5376 30.2506 46.2881 30.1793 45.9886C30.1223 45.6748 30.0938 45.2827 30.0938 44.8121C30.0938 44.3414 30.1223 43.9493 30.1793 43.6355C30.2506 43.3075 30.3718 43.058 30.543 42.8868C30.7141 42.7014 30.9423 42.5731 31.2275 42.5018C31.527 42.4162 31.8978 42.3734 32.3398 42.3734C32.7819 42.3734 33.1456 42.4162 33.4308 42.5018C33.716 42.5731 33.9442 42.7014 34.1153 42.8868C34.3007 43.058 34.4219 43.3075 34.479 43.6355C34.5503 43.9493 34.5859 44.3414 34.5859 44.8121Z"
                                    fill="#15426B" />
                            </g>
                        </svg>


                    </div>
                    <h2>An error occurred, please try again</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-small" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- success modal -->

    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalLongTitle"></h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body text-center">
                    <div class="icon-container">
                        <svg width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_4816_12439)">
                                <path
                                    d="M16.332 29.9991L28.332 39.9991L44.332 19.9991M30.332 57.9991C26.655 57.9991 23.014 57.2748 19.6169 55.8677C16.2198 54.4606 13.1331 52.3981 10.533 49.7981C7.933 47.198 5.87054 44.1113 4.4634 40.7142C3.05627 37.3171 2.33203 33.6761 2.33203 29.9991C2.33203 26.3221 3.05627 22.6811 4.4634 19.2839C5.87054 15.8868 7.933 12.8001 10.533 10.2001C13.1331 7.60005 16.2198 5.53759 19.6169 4.13046C23.014 2.72333 26.655 1.99908 30.332 1.99908C37.7581 1.99908 44.88 4.94908 50.131 10.2001C55.382 15.4511 58.332 22.573 58.332 29.9991C58.332 37.4251 55.382 44.5471 50.131 49.7981C44.88 55.0491 37.7581 57.9991 30.332 57.9991Z"
                                    stroke="#29B1E6" stroke-width="3" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4816_12439">
                                    <rect width="60" height="60" fill="white"
                                        transform="translate(0.332031 -0.000915527)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <h2>Email was sent successfully.</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-small" data-dismiss="modal">Close</button>
                    <a href="https://beta.gilcouncil.com/signin/">
                        <button type="button" class="btn btn-primary btn-small">Go to Login</button>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="content-container left text-white">
                        <div class="header-box">
                            <h1>About The Growth Innovation Leadership Council</h1>
                        </div>
                        <div class="text-box">
                            <p>
                                The Growth Innovation Leadership Council’s mission is to
                                enable executives to achieve transformational growth for
                                themselves, their companies and for industry and society at
                                large through enlightened leadership.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-container right text-white">
                        <div class="location footer-list">
                            <div class="d-flex">
                                <div class="icon-container">
                                    <img src="https://beta.gilcouncil.com/wp-content/uploads/2023/06/location-1.png"
                                        alt="" />
                                </div>
                                <div class="text-container">
                                    <h3>OFFICE LOCATION</h3>
                                    <p>Frost &amp; Sullivan</p>
                                    <p>7550 1H 10 West, Suite 400</p>
                                    <p>San Antonio, TX 78229-5616 USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="email footer-list">
                            <div class="d-flex">
                                <div class="icon-container">
                                    <img src="https://beta.gilcouncil.com/wp-content/uploads/2023/06/mail-1.png"
                                        alt="" />
                                </div>
                                <div class="text-container">
                                    <h3>EMAIL</h3>
                                    <p>
                                        <a href="mailto:councils@frost.com" target="_blank">councils@frost.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p></p>
                <p>
                    Copyright © 2023 Frost &amp; Sullivan. All Rights Reserved.
                    <a href="https://www.frost.com/privacy-notice/" target="_blank">Privacy Policy</a>
                    &amp;
                    <a href="https://www.frost.com/terms-of-use/" target="_blank">Terms of Service</a>.
                </p>
                <p></p>
            </div>
        </div>
    </footer>

</body>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-jscalendar@1.4.4/source/jsCalendar.min.js"
    integrity="sha384-0LaRLH/U5g8eCAwewLGQRyC/O+g0kXh8P+5pWpzijxwYczD3nKETIqUyhuA8B/UB" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="./sliderScript.js"></script>
<script type="text/javascript" src="./scriptCalendar.js"></script>
<script type="text/javascript" src="./script.js"></script>
<script type="text/javascript" src="./myscript.js"></script>
<script type="text/javascript" src="https://beta.gilcouncil.com/wp-content/themes/divi-child-theme/script.js"></script>

</html>
<?php 
}else{
    wp_redirect( get_home_url());
}
?>