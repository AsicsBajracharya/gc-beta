<?php
/* Template Name: Signin template Page */ 
 if (!is_user_logged_in() ) { 
$message = "";
if(isset($_POST['SubmitButton'])) :    
    if (isset($_POST['log']) && !empty($_POST['log']) && isset($_POST['pwd']) && !empty($_POST['pwd']) ) {
        $credentials = array(
            'user_login' => $_POST['log'],
            'user_password' => $_POST['pwd'],       
        );    
        $user = wp_signon($credentials, false);   
    
        if (is_wp_error($user)) {
            $message ='<p class="error">Invalid username or password. Please try again.</p>';
        } else {
            wp_redirect(home_url());
            exit;
        }
    }
endif;
?>

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
    <title>SignIn</title>
</head>

<body>
    <header class="header-logged-out aos-init aos-animate fixed" data-aos="fade-in">
        <div class="container header-inner">
            <div class="row justify-content-between align-items-center flex-nowrap">
                <div class="col">
                    <div class="d-flex flex-nowrap align-items-center">
                        <!-- <div class="fs-ham fs-ham-open">
                            <svg viewBox="0 0 38 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.25 25.5V21.3333H37.75V25.5H0.25ZM0.25 15.0833V10.9167H37.75V15.0833H0.25ZM0.25 4.66667V0.5H37.75V4.66667H0.25Z"
                                    fill="#0C355C"></path>
                            </svg>
                        </div> -->
                        <!-- <div class="fs-ham fs-ham-closed d-none">
                            <svg viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.891113" y="27.1177" width="37.5" height="4.16504"
                                    transform="rotate(-45 0.891113 27.1177)" fill="#0C355C"></rect>
                                <rect x="3.83594" y="0.601074" width="37.5" height="4.16504"
                                    transform="rotate(45 3.83594 0.601074)" fill="#0C355C"></rect>
                            </svg>
                        </div> -->
                        <div class="logo-container">
                            <a href="https://beta.gilcouncil.com" target="_blank"><img
                                    src="https://beta.gilcouncil.com/wp-content/uploads/2023/06/Logo-big.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- <div class="button-group">
                        <div class="button-container">
                            <a href="https://beta.gilcouncil.com/login" target="_blank"><button
                                    class="btn btn-transparent btn-small">
                                    LOGIN
                                </button></a>
                        </div>
                        <div class="button-container">
                            <a href="https://beta.gilcouncil.com/join" target="_blank"><button
                                    class="btn btn-blue btn-small">SIGN UP</button></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </header>
    <div class="page-login">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-container left">
                        <div class="header-box">
                            <h1>LOGIN</h1>
                        </div>
                        <form name="loginform-custom" id="loginform-custom" action="" method="post"
                            class="form login-form form-login gc-form">

                            <label for="email">Email*</label>
                            <div class="input-group">
                                <input type="text" name="log" placeholder="Enter User Email" class="form-control"
                                    id="email" />
                            </div>
                            <p class="error email"></p>
                            <div class="label-container d-flex justify-content-between align-items-center">
                                <label for="passwordLogin">Password*</label>
                                <span>
                                    <p>
                                        <a target="_blank" href="https://www.gilcouncil.com/password-reset/">Forgot
                                            Password ?</a>
                                    </p>
                                </span>
                            </div>
                            <div class="input-group">
                                <input type="password" name="pwd" placeholder="Enter User Password"
                                    class="form-control password" id="passwordLogin" />
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
                                        <path d="M19.0703 5.55634L3.402 18.178" stroke="#86C9F6" stroke-width="1.78794"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <p class="error passwordLogin"></p>
                            <?php 
 if($message) :
    echo $message;
 endif;
?>
                            <div class="button-container">
                                <button class="btn btn-primary login-form-btn">Login</button>

                                <button name="SubmitButton" type="submit"
                                    class="btn btn-primary login-form-dummy d-none">Login</button>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="content-container right" style="
                    background-image: url(https://beta.gilcouncil.com/wp-content/uploads/2023/07/MicrosoftTeams-image-1.jpg);
                  ">
                        <div class="slider-overlay"></div>
                        <div class="header-box">
                            <h1>
                                New to Growth Innovation Leadership Council? Sign Up here!
                            </h1>
                        </div>
                        <!-- <div class="text-box">
                <h3>Get the most form Growth Council;</h3>
              </div>
              <ul>
                <li>Get the most from Growth Council;</li>
                <li>Get the most from Growth Council;</li>
                <li>Get the most from Growth Council;</li>
              </ul> -->
                        <div class="button-container">
                            <a href="https://beta.gilcouncil.com/signup/">
                                <button class="btn btn-primary">Sign Up</button>

                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-bottom">
            <div class="header-box">
                <h3>Not a Member?</h3>
            </div>
            <div class="button-container">
                <div class="btn btn-primary btn-small login-form-btn">Signup</div>
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
<script type="text/javascript" src="<?php echo get_theme_file_uri('/sliderScript.js'); ?>"></script>
<!-- <script type="text/javascript" src="<?php echo get_theme_file_uri('/scriptCalendar.js'); ?>"></script> -->
<script type="text/javascript" src="<?php echo get_theme_file_uri('/script.js'); ?>"></script>
<script type="text/javascript" src="./myscript.js"></script>
<!-- <script
    type="text/javascript"
    src="https://beta.gilcouncil.com/wp-content/themes/divi-child-theme/script.js"
  ></script> -->

</html>

<?php 
 }
 else {
    wp_redirect(home_url());
    exit;
}
?>