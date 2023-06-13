<?php 

$content = get_sub_field('header_section');
if ($content['enable_disable']) :  
  $current_user_id = get_current_user_id();
  $user_object = get_user_by('ID', $current_user_id);
  $user_data = $user_object->data;
  $profile_link = get_home_url()."/profile/".$user_data->user_login;
  $name = $user_data->display_name;
  $profile_image = get_avatar_url($user_data->ID);
//   echo "<pre>"; print_r($user_object); die; 
?>


<header class="header-for-menu">
    <div class="menu">
        <div class="container">
            <ul class="menu-list">
                <?php foreach ($content['links'] as  $value) : ?>
                <a href=" <?php echo $value['link']['url'] ?>">
                    <li class="menu-item">
                        <?php echo $value['link']['title'] ?>
                    </li>
                </a>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</header>

<header class="<?php echo get_post_field( 'post_name', get_post()) == 'growth-prospect' ? "header-logged-out" : "" ?>"
    data-aos="fade-in">


    <div class="container header-inner">   
        <div class="row justify-content-between align-items-center flex-nowrap">
            <div class="col">  
                <div class="d-flex flex-nowrap align-items-center">
                  
                    <div class="fs-ham fs-ham-open">     
                        <svg viewBox="0 0 38 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.25 25.5V21.3333H37.75V25.5H0.25ZM0.25 15.0833V10.9167H37.75V15.0833H0.25ZM0.25 4.66667V0.5H37.75V4.66667H0.25Z"
                                fill="#0C355C" />
                        </svg>


                    </div>
                    <div class="fs-ham fs-ham-closed d-none"><svg  viewBox="0 0 31 31" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.891113" y="27.1177" width="37.5" height="4.16504"
                                transform="rotate(-45 0.891113 27.1177)" fill="#0C355C" />
                            <rect x="3.83594" y="0.601074" width="37.5" height="4.16504"
                                transform="rotate(45 3.83594 0.601074)" fill="#0C355C" />
                        </svg>
                    </div>
                    <div class="logo-container">
                        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo $content['banner_logo'] ?>"
                                alt="" /></a>

                    </div>
                </div>
            </div>
            <?php if(get_post_field( 'post_name', get_post()) == 'growth-prospect') : ?>
            <div class="col">
                <div class="button-group">
                    <div class="button-container">
                        <a href="<?php echo get_home_url().'/login'; ?>"><button
                                class="btn btn-transparent btn-small">LOGIN</button></a>
                    </div>
                    <div class="button-container">
                        <a href="<?php echo get_home_url().'/join'; ?>"><button class="btn btn-blue btn-small">SIGN
                                UP</button></a>
                    </div>
                </div>
            </div>
            <?php else : ?>

            <div class="col">
                <div class="d-flex icon-group justify-content-end align-items-center">
                    <div class="icon-container icon-search-container">
                        <img class="search-icon" src="<?php echo $content['search_icon'] ?>" alt="" />
                        <div class="search-input-container">
                            <form action="" id="search-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="search-input"
                                        placeholder="Press Enter to Search">
                                    <div class="input-group-append"> <img class="input-group-text"
                                            src="<?php echo $content['search_icon'] ?>" alt="" /></div>
                                </div>
                            </form>
                            <div class="search-results-container hidden">
                                <div class="search-results">
                                    <ul></ul>
                                </div>

                                <div class="search-results-bottom hidden">
                                    <a href="#" class="link">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="icon-container notification">
                        <img class="bell" src="<?php echo $content['bell_icon'] ?>" alt="" />
                        <div class="notification-container">
                            <div class="notification-header d-flex">
                                <p>Notifications</p>
                                <p class="active">
                                    Mark as read
                                    <span class="icon-container">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_549_3660)">
                                                <path
                                                    d="M12.0001 4.66656L11.0601 3.72656L6.83344 7.95323L7.77344 8.89323L12.0001 4.66656ZM14.8268 3.72656L7.77344 10.7799L4.98677 7.9999L4.04677 8.9399L7.77344 12.6666L15.7734 4.66656L14.8268 3.72656ZM0.273438 8.9399L4.0001 12.6666L4.9401 11.7266L1.2201 7.9999L0.273438 8.9399Z"
                                                    fill="#1E75E5" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_549_3660">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </p>
                            </div>
                            <div class="notification-body">
                                <ul class="notification-list">
                                    <li class="notification-item d-flex">
                                        <div class="image-container">
                                            <img src="./assets/images/bill.jpg" alt="" />
                                        </div>
                                        <div class="content-container">
                                            <h4>Your have a new message from Yin</h4>
                                            <p>
                                                Hello there, check this new items in from the your
                                                may interested from the motion school
                                            </p>
                                        </div>
                                    </li>
                                    <li class="notification-item d-flex">
                                        <div class="image-container">
                                            <img src="./assets/images/bill.jpg" alt="" />
                                        </div>
                                        <div class="content-container">
                                            <h4>Your have a new message from Yin</h4>
                                            <p>
                                                Hello there, check this new items in from the your
                                                may interested from the motion school
                                            </p>
                                        </div>
                                    </li>
                                    <li class="notification-item d-flex">
                                        <div class="image-container">
                                            <img src="./assets/images/bill.jpg" alt="" />
                                        </div>
                                        <div class="content-container">
                                            <h4>Your have a new message from Yin</h4>
                                            <p>
                                                Hello there, check this new items in from the your
                                                may interested from the motion school
                                            </p>
                                        </div>
                                    </li>
                                    <li class="notification-item d-flex">
                                        <div class="image-container">
                                            <img src="./assets/images/bill.jpg" alt="" />
                                        </div>
                                        <div class="content-container">
                                            <h4>Your have a new message from Yin</h4>
                                            <p>
                                                Hello there, check this new items in from the your
                                                may interested from the motion school
                                            </p>
                                        </div>
                                    </li>
                                    <li class="notification-item d-flex">
                                        <div class="image-container">
                                            <img src="./assets/images/bill.jpg" alt="" />
                                        </div>
                                        <div class="content-container">
                                            <h4>Your have a new message from Yin</h4>
                                            <p>
                                                Hello there, check this new items in from the your
                                                may interested from the motion school
                                            </p>
                                        </div>
                                    </li>
                                    <li class="notification-item d-flex">
                                        <div class="image-container">
                                            <img src="./assets/images/bill.jpg" alt="" />
                                        </div>
                                        <div class="content-container">
                                            <h4>Your have a new message from Yin</h4>
                                            <p>
                                                Hello there, check this new items in from the your
                                                may interested from the motion school
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="notification-footer">
                                <p>View all Notifications</p>
                            </div>
                        </div>
                    </div> -->
                    <p class="hello-text">Hi <strong><?php echo $name ?></strong></p>
                    <div class="avatar-container">
                        <a href="<?php echo $profile_link ?>"><img src="<?php echo $profile_image ?>" alt="" width="60"
                                height="60" /></a>
                    </div>
                </div>
            </div>

            <?php endif; ?>
        </div>
    </div>

</header>
<nav class="nav-fixed">
    <div class="container">
        <ul class="nav-list">
            <li class="nav-item pill section1 active">
                <a href="#section3">Growth Community</a>
            </li>
            <li class="nav-item section2 pill">
                <a href="#section4">Growth Content</a>
            </li>
            <li class="nav-item section3 pill">
                <a href="#section5">Growth Coaching</a>
            </li>
        </ul>
        <!-- <div class="row justify-content-center">
          <div class="col">
            <div class="pill d-flex justify-content-center active">
              <a href="#section3">Growth Community</a>
            </div>
          </div>
          <div class="col">
            <div class="pill d-flex justify-content-center">
              <a>Growth Content</a>
            </div>
          </div>
          <div class="col">
            <div class="pill d-flex justify-content-center">
              <a>Growth Coaching</a>
            </div>
          </div>
        </div> -->
    </div>
</nav>
<!-- <header>
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-5 col-sm-4">
            <div class="row no-wrap align-items-center">
              <div class="col">
                <div class="fs-ham">
                  <span></span><span></span><span></span>
                </div>
              </div>
              <div class="col">
                <div class="logo-container">
                  <img src="<?php echo $content['banner_logo'] ?>" alt="" />
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div
              class="d-flex icon-group justify-content-end align-items-center"
            >
              <div class="icon-container">
                <img src="<?php echo $content['search_icon'] ?>" alt="" />
              </div>
              <div class="icon-container">
                <img src="<?php echo $content['bell_icon'] ?>" alt="" />
              </div>
              <p>Hi <strong><?php echo $content['user_text'] ?></strong></p>
              <div class="avatar-container">
                <img src="<?php echo $content['profile_image'] ?>" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
     <nav>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col">
            <div class="pill d-flex justify-content-center active">
              <p>Growth Community</p>
            </div>
          </div>
          <div class="col">
            <div class="pill d-flex justify-content-center">
              <p>Growth Community</p>
            </div>
          </div>
          <div class="col">
            <div class="pill d-flex justify-content-center">
              <p>Growth Community</p>
            </div>
          </div>
        </div>
      </div>
    </nav> -->

<?php
endif;