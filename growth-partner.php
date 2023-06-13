<?php /* Template Name: GC Partner Page */ ?>

<?php if (is_user_logged_in()) { ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="
https://dev.gilcouncil.com/wp-content/themes/divi-child-theme/assets/fonts/stylesheet.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="https://unpkg.com/simple-jscalendar@1.4.4/source/jsCalendar.min.css" integrity="sha384-44GnAqZy9yUojzFPjdcUpP822DGm1ebORKY8pe6TkHuqJ038FANyfBYBpRvw8O9w" crossorigin="anonymous">

  <link rel="stylesheet" href="
https://dev.gilcouncil.com/wp-content/themes/divi-child-theme/css-landing/style.css" />

  <title>Growth Partner</title>
 <header class="">
      <div class="container">
      <!-- <div class="row justify-content-between align-items-center flex-nowrap">
        <div class="col">
          <div class="d-flex flex-nowrap align-items-center">
            <div class="fs-ham"><span></span><span></span><span></span></div>
            <div class="logo-container">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo $content['banner_logo'] ?>" alt="" /></a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="d-flex icon-group justify-content-end align-items-center">
            <div class="icon-container icon-search-container">
              <img class = "search-icon" src="<?php echo $content['search_icon'] ?>" alt="" />
              <div class="search-input-container">
                <form action="">
                  <div class="input-group">
                    <input type="text" class="form-control">
                    <div class="input-group-append"> <img class="input-group-text" src="<?php echo $content['search_icon'] ?>" alt="" /></div>
                  </div>
                  
                </form>
              </div>
            </div>
            
            <div class="icon-container notification">
              <img class="bell" src="<?php echo $content['bell_icon'] ?>" alt="" />
              <div class="notification-container">
                <div class="notification-header d-flex">
                  <p>Notifications</p>
                  <p class="active">
                    Mark as read
                    <span class="icon-container">
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            </div>
            <p class="hello-text">Hi <strong><?php echo $name ?></strong></p>
            <div class="avatar-container">
              <a href="<?php echo $profile_link ?>"><img src="<?php echo $profile_image ?>" alt="" /></a>
            </div>
          </div>
        </div>
      </div> -->
    </div>
    <div class="menu">
      <div class="container">
        <ul class="menu-list">
          <li class="menu-item">
            What is Growth Innovation Leadership Council ?
          </li>
          <li class="menu-item">Growth Council Experince</li>
          <li class="menu-item">Growth Diagnostic</li>
          <li class="menu-item">Visionary Trends Analytics</li>
          <li class="menu-item">Frost Product/ Platform Subscription</li>
        </ul>
      </div>
    </div>
  </header>
  <nav class = "nav-fixed">
    <div class="container">
      <ul class="nav-list">
        <li class="nav-item pill active">
          <a href="#section3">Growth Community</a>
        </li>
        <li class="nav-item pill">
          <a href="#section3">Growth Content</a>
        </li>
        <li class="nav-item pill">
          <a href="#section3">Growth Coaching</a>
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
</head> 


  <main>
	<?php
		if (have_rows('landing_page_content')) :
			get_template_part('template-parts/main', 'content');
		endif;
	?>
	<a href="#page-container" class="fs-back-to-top fs-scroller"><span class="fs-icon fs-icon-angle-down"></span></a>
 </main>
  
  <div class="overlay">
    <iframe src="" frameborder="0"></iframe>
  </div>
  <div class="floating-button">
    <svg width="139" height="136" viewBox="0 0 139 136" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g filter="url(#filter0_d_512_4155)">
        <path
          d="M69.5 121C101.256 121 127 95.9279 127 65C127 34.0721 101.256 9 69.5 9C37.7436 9 12 34.0721 12 65C12 95.9279 37.7436 121 69.5 121Z"
          fill="white" />
      </g>
      <g filter="url(#filter1_d_512_4155)">
        <path
          d="M69.556 24.8457C77.7231 24.8457 85.7068 27.2044 92.4975 31.6234C99.2882 36.0425 104.581 42.3234 107.706 49.672C110.832 57.0206 111.65 65.1068 110.056 72.9081C108.463 80.7093 104.53 87.8752 98.755 93.4996C92.98 99.124 85.6222 102.954 77.612 104.506C69.6018 106.058 61.299 105.261 53.7535 102.217C46.2081 99.1736 39.7589 94.0189 35.2215 87.4053C30.684 80.7918 28.2622 73.0163 28.2622 65.0622C28.2622 54.3961 32.6128 44.1669 40.3569 36.6248C48.1009 29.0828 58.6042 24.8457 69.556 24.8457Z"
          fill="#FA9A48" />
      </g>
      <path
        d="M63.3579 42.9364C63.403 42.969 63.4467 43.0059 63.4933 43.0371C63.6727 43.1277 63.8144 43.2762 63.894 43.4572C63.9736 43.6381 63.9864 43.8404 63.93 44.0295C63.8743 44.2254 63.7498 44.3961 63.5783 44.5119C63.4067 44.6276 63.1989 44.6812 62.991 44.6632C61.0152 44.6632 59.0383 44.6632 57.0605 44.6632C56.1582 44.6578 55.2663 44.8516 54.4519 45.2303C53.2542 45.7792 52.2739 46.6948 51.6609 47.8374C51.0479 48.98 50.8359 50.2866 51.0572 51.5576C51.2888 52.8106 51.9233 53.9595 52.8693 54.8382C53.8152 55.7169 55.0235 56.2799 56.3196 56.4459C57.1028 56.5622 57.3182 56.8046 57.3313 57.5801C57.3459 58.442 57.3575 59.3026 57.3721 60.166C57.3721 60.3191 57.3924 60.4736 57.407 60.7076C58.049 60.2128 58.6356 59.7648 59.2179 59.3125C60.2922 58.4817 61.349 57.6311 62.4466 56.8287C62.7436 56.6301 63.0901 56.513 63.4496 56.4898C64.1367 56.4388 64.8325 56.4742 65.5167 56.4742C65.6303 56.0816 65.7649 55.695 65.9199 55.316C66.2887 54.3888 66.9368 53.5919 67.779 53.03C68.6213 52.468 69.6183 52.1673 70.6393 52.1672C74.5464 52.1006 78.4564 52.1445 82.3664 52.1417H82.9195C83.1471 51.3687 83.2059 50.5579 83.0924 49.7614C82.9788 48.9649 82.6953 48.2004 82.2601 47.5171C81.7388 46.6408 80.988 45.915 80.0845 45.4139C79.1809 44.9127 78.1569 44.6542 77.1171 44.6646C75.1257 44.6306 73.1343 44.6646 71.1488 44.6547C70.4588 44.6547 69.9959 44.15 70.2084 43.5758C70.303 43.3249 70.6 43.1505 70.8052 42.9336H77.8872C78.4156 43.0541 78.9571 43.1377 79.471 43.3008C81.2662 43.8583 82.7943 45.0283 83.7745 46.5955C84.7547 48.1628 85.121 50.0219 84.8061 51.8312C84.7872 51.9446 84.7741 52.0595 84.7552 52.2027C84.8571 52.2409 84.9604 52.2906 85.0681 52.3203C86.1784 52.6082 87.1634 53.2378 87.8764 54.1152C88.5895 54.9926 88.9924 56.0708 89.0251 57.1893C89.0578 58.3078 88.7186 59.4067 88.0581 60.3222C87.3975 61.2377 86.4509 61.9209 85.3593 62.2699C85.2922 62.2789 85.2277 62.3008 85.1694 62.3343C85.1111 62.3677 85.0602 62.4121 85.0196 62.4648C84.979 62.5175 84.9495 62.5776 84.9328 62.6414C84.9162 62.7053 84.9127 62.7718 84.9226 62.837C84.9328 63.526 84.8978 64.215 84.8745 64.9054C84.8944 65.0762 84.8612 65.2488 84.7792 65.4009C84.6971 65.5531 84.5701 65.6777 84.4145 65.7587C84.2588 65.8396 84.0818 65.8732 83.9064 65.8551C83.7309 65.8369 83.5651 65.7678 83.4305 65.6568C81.8976 64.7126 80.3822 63.7457 78.8436 62.8115C78.5847 62.6578 78.2892 62.5728 77.9862 62.5648C75.7444 62.5449 73.5012 62.5549 71.2594 62.5549C69.9493 62.6543 68.6473 62.2817 67.6007 61.5079C66.5541 60.734 65.8358 59.6127 65.5822 58.357C65.5705 58.3159 65.5545 58.2762 65.5298 58.2039C64.9067 58.2039 64.2721 58.1897 63.6374 58.2138C63.4679 58.2475 63.3118 58.3277 63.1876 58.4449C61.2098 59.9694 59.2353 61.4977 57.2643 63.0298C57.1396 63.1631 56.9788 63.2595 56.8003 63.3079C56.6219 63.3563 56.4331 63.3547 56.2555 63.3034C56.0651 63.2415 55.9014 63.1192 55.7908 62.9559C55.6802 62.7927 55.6291 62.5981 55.6456 62.4032C55.6238 61.096 55.5816 59.7889 55.5728 58.4817C55.5728 58.167 55.4782 58.0479 55.1579 57.9685C53.454 57.5599 51.9404 56.6055 50.8601 55.2585C49.7799 53.9116 49.1957 52.2502 49.2012 50.5411C49.2068 48.832 49.8017 47.1743 50.8907 45.834C51.9796 44.4938 53.4994 43.5487 55.206 43.1505C55.5306 43.0725 55.861 43.0087 56.1886 42.9378L63.3579 42.9364ZM83.1815 63.4268C83.1815 62.8597 83.1815 62.3748 83.1815 61.8914C83.1903 61.1485 83.4246 60.899 84.1802 60.787C85.0563 60.6605 85.8537 60.2234 86.4194 59.5597C86.9852 58.896 87.2795 58.0522 87.2459 57.1902C87.2136 56.3185 86.8413 55.4916 86.2049 54.8779C85.5686 54.2642 84.7159 53.9098 83.8206 53.8869C79.4419 53.8586 75.0631 53.8515 70.6859 53.8869C70.142 53.9012 69.6089 54.0378 69.1281 54.2859C68.6474 54.534 68.2321 54.887 67.9146 55.3173C67.597 55.7476 67.386 56.2435 67.2978 56.7664C67.2096 57.2892 67.2467 57.8249 67.4062 58.3315C67.6329 59.0818 68.1123 59.7361 68.7671 60.1889C69.4219 60.6418 70.2142 60.8669 71.0163 60.8281C73.4779 60.8366 75.9409 60.8181 78.4025 60.8437C78.7621 60.8554 79.1127 60.9559 79.4215 61.1357C80.5307 61.7879 81.605 62.4868 82.7041 63.1645C82.822 63.2368 82.9472 63.3062 83.1714 63.4253L83.1815 63.4268Z"
        fill="white" />
      <path
        d="M46.8955 82.0742C47.0018 81.6744 47.0847 81.2676 47.2201 80.8763C47.5039 80.0419 47.9669 79.2759 48.5784 78.6293C49.1898 77.9827 49.9356 77.4704 50.7662 77.1264C50.2911 76.4143 49.987 75.607 49.8766 74.7645C49.7662 73.9221 49.8524 73.0663 50.1286 72.2608C50.5254 71.077 51.3223 70.059 52.3893 69.3729C53.4984 68.6496 54.8299 68.3215 56.1587 68.4441C57.4875 68.5668 58.7321 69.1326 59.6819 70.046C60.6317 70.9593 61.2284 72.1641 61.3712 73.4566C61.514 74.7491 61.1941 76.0499 60.4655 77.1392C61.6232 77.6284 62.6089 78.4366 63.3012 79.4642C63.9679 80.455 64.3222 81.6141 64.3202 82.7987C64.3289 83.8322 64.3013 84.8686 64.3304 85.9021C64.3587 86.1366 64.3147 86.374 64.204 86.584C64.0933 86.7941 63.9209 86.9673 63.7088 87.0816H46.8955V82.0742ZM62.5413 85.335C62.5413 84.3313 62.6228 83.363 62.5239 82.4117C62.4687 81.551 62.145 80.7272 61.5961 80.0505C61.0472 79.3738 60.2993 78.8764 59.4523 78.6249C59.2513 78.5707 59.0364 78.5957 58.8541 78.6944C57.9018 79.3267 56.7767 79.6662 55.6241 79.669C54.4716 79.6718 53.3447 79.3377 52.3893 78.71C52.1957 78.6031 51.9669 78.5741 51.7517 78.6292C50.9679 78.8567 50.2685 79.3002 49.7377 79.9062C49.2069 80.5122 48.8674 81.2548 48.7603 82.0445C48.6642 83.0444 48.6335 84.0492 48.6685 85.0529C48.6739 85.1483 48.687 85.2431 48.7078 85.3364H62.537L62.5413 85.335ZM55.5729 77.9359C56.3658 77.9415 57.1426 77.7178 57.8049 77.2932C58.4672 76.8685 58.9852 76.262 59.2933 75.5504C59.6014 74.8388 59.6857 74.0542 59.5356 73.2959C59.3856 72.5376 59.0078 71.8398 58.4501 71.2907C57.8925 70.7417 57.1801 70.3662 56.4032 70.2117C55.6263 70.0573 54.8198 70.1308 54.0858 70.4231C53.3519 70.7154 52.7235 71.2132 52.2802 71.8535C51.837 72.4939 51.5989 73.2479 51.596 74.0202C51.5982 75.0507 52.0165 76.039 52.7606 76.7717C53.5047 77.5043 54.5149 77.9225 55.5729 77.9359Z"
        fill="white" />
      <path
        d="M75.3969 87.0752C75.1834 86.9631 75.0097 86.7907 74.8985 86.5807C74.7874 86.3707 74.7439 86.133 74.7739 85.8985C74.8205 84.6084 74.7229 83.3069 74.8656 82.0296C74.9709 81.0015 75.3527 80.0186 75.9725 79.18C76.5922 78.3415 77.428 77.6769 78.3956 77.2533L78.6577 77.1243C78.2117 76.4536 77.9164 75.6986 77.7909 74.909C77.6655 74.1193 77.7128 73.3128 77.9298 72.5422C78.2633 71.3238 79.0174 70.2544 80.0653 69.5139C81.1576 68.7299 82.4979 68.3443 83.8524 68.4245C85.2068 68.5046 86.4893 69.0455 87.476 69.9527C88.4627 70.8598 89.0911 72.0756 89.2513 73.3879C89.4115 74.7002 89.0934 76.0256 88.3526 77.1328C89.273 77.5244 90.0891 78.1161 90.7385 78.8624C91.4636 79.7006 91.9443 80.7132 92.1301 81.7942C92.1523 81.8903 92.1805 81.985 92.2146 82.0778V87.0781H75.3984L75.3969 87.0752ZM90.4313 85.33C90.4313 84.3376 90.4881 83.3622 90.4197 82.3954C90.3496 81.5386 90.018 80.7219 89.4676 80.0501C88.9171 79.3783 88.1729 78.8822 87.3307 78.6256C87.1284 78.5778 86.9151 78.6067 86.7339 78.7064C85.7812 79.336 84.6564 79.6726 83.5051 79.6726C82.3538 79.6726 81.2291 79.336 80.2764 78.7064C80.0966 78.603 79.8823 78.5724 79.6796 78.6214C78.8879 78.8456 78.1801 79.2887 77.6419 79.8969C77.1037 80.5051 76.7582 81.2524 76.6474 82.048C76.5548 82.9462 76.5237 83.8494 76.5542 84.7516C76.5542 84.9444 76.5542 85.1386 76.5542 85.3286H90.4357L90.4313 85.33ZM83.5503 70.1349C82.7591 70.1266 81.9832 70.3467 81.3203 70.7673C80.6574 71.1879 80.1373 71.7903 79.8254 72.4985C79.5136 73.2066 79.424 73.9888 79.5681 74.7465C79.7121 75.5042 80.0833 76.2033 80.6348 76.7558C81.1862 77.3083 81.8934 77.6894 82.6669 77.851C83.4405 78.0126 84.2459 77.9476 84.9815 77.664C85.7172 77.3804 86.3502 76.891 86.8006 76.2576C87.2511 75.6241 87.4988 74.8749 87.5127 74.1045C87.5267 73.0667 87.1173 72.0658 86.3744 71.3216C85.6316 70.5774 84.6159 70.1506 83.5503 70.1349Z"
        fill="white" />
      <path
        d="M67.3421 42.9354C67.6885 43.1692 67.9942 43.4315 67.9389 43.9005C67.916 44.0911 67.829 44.2688 67.6916 44.4058C67.5543 44.5427 67.3743 44.631 67.1801 44.6568C66.9859 44.6826 66.7884 44.6444 66.6188 44.5482C66.4491 44.4521 66.3169 44.3035 66.243 44.1257C66.1658 43.9442 66.1547 43.7423 66.2117 43.5538C66.2687 43.3653 66.3903 43.2018 66.556 43.0908C66.6375 43.0323 66.7263 42.9824 66.8107 42.9297H67.3421V42.9354Z"
        fill="white" />
      <path
        d="M82.2657 56.4814C82.5025 56.4848 82.7286 56.5789 82.8954 56.7436C83.0622 56.9083 83.1565 57.1304 83.158 57.3624C83.1517 57.5865 83.0574 57.7996 82.8947 57.9573C82.732 58.115 82.5135 58.2052 82.2846 58.2092C82.1716 58.2111 82.0593 58.1911 81.9541 58.1504C81.849 58.1097 81.7531 58.049 81.672 57.9719C81.5908 57.8949 81.526 57.8029 81.4813 57.7012C81.4365 57.5995 81.4127 57.4902 81.4112 57.3795C81.4055 57.2645 81.4236 57.1495 81.4644 57.0415C81.5052 56.9335 81.5678 56.8346 81.6486 56.7509C81.7293 56.6672 81.8265 56.6003 81.9343 56.5542C82.0421 56.5081 82.1583 56.4839 82.2759 56.4829L82.2657 56.4814Z"
        fill="white" />
      <path
        d="M73.1032 57.3641C73.1028 57.479 73.0785 57.5926 73.0318 57.6979C72.9851 57.8033 72.917 57.8982 72.8316 57.9769C72.7461 58.0556 72.6452 58.1164 72.535 58.1557C72.4248 58.1949 72.3076 58.2118 72.1905 58.2052C71.9615 58.1942 71.7457 58.097 71.5881 57.9339C71.4305 57.7708 71.3433 57.5545 71.3447 57.3299C71.3539 57.1045 71.45 56.8908 71.6137 56.7321C71.7774 56.5733 71.9966 56.4813 72.2269 56.4746C72.3442 56.4745 72.4603 56.4976 72.5683 56.5425C72.6764 56.5873 72.774 56.653 72.8555 56.7356C72.9371 56.8182 73.0007 56.9161 73.0428 57.0234C73.0848 57.1306 73.1044 57.245 73.1003 57.3599L73.1032 57.3641Z"
        fill="white" />
      <path
        d="M78.132 57.3378C78.132 57.5669 78.0391 57.7866 77.8736 57.9486C77.7082 58.1106 77.4838 58.2016 77.2498 58.2016C77.0159 58.2016 76.7915 58.1106 76.626 57.9486C76.4606 57.7866 76.3677 57.5669 76.3677 57.3378C76.3677 57.1088 76.4605 56.8893 76.6258 56.7274C76.7911 56.5655 77.0153 56.4746 77.2491 56.4746C77.4829 56.4746 77.7071 56.5655 77.8724 56.7274C78.0377 56.8893 78.1305 57.1088 78.1305 57.3378H78.132Z"
        fill="white" />
      <g filter="url(#filter2_d_512_4155)">
        <path
          d="M69.5064 112.151C96.238 112.151 117.908 91.0456 117.908 65.0113C117.908 38.977 96.238 17.8721 69.5064 17.8721C42.7748 17.8721 21.1045 38.977 21.1045 65.0113C21.1045 91.0456 42.7748 112.151 69.5064 112.151Z"
          stroke="#FC9C49" stroke-width="2.5" />
      </g>
      <defs>
        <filter id="filter0_d_512_4155" x="0" y="0" width="139" height="136" filterUnits="userSpaceOnUse"
          color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
            result="hardAlpha" />
          <feOffset dy="3" />
          <feGaussianBlur stdDeviation="6" />
          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.161 0" />
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_512_4155" />
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_512_4155" result="shape" />
        </filter>
        <filter id="filter1_d_512_4155" x="17.2622" y="16.8457" width="104.587" height="102.433"
          filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
            result="hardAlpha" />
          <feOffset dy="3" />
          <feGaussianBlur stdDeviation="5.5" />
          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.161 0" />
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_512_4155" />
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_512_4155" result="shape" />
        </filter>
        <filter id="filter2_d_512_4155" x="8.85449" y="8.62207" width="121.304" height="118.778"
          filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
            result="hardAlpha" />
          <feOffset dy="3" />
          <feGaussianBlur stdDeviation="5.5" />
          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.161 0" />
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_512_4155" />
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_512_4155" result="shape" />
        </filter>
      </defs>
    </svg>
  </div>
  <script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"    crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-jscalendar@1.4.4/source/jsCalendar.min.js" integrity="sha384-0LaRLH/U5g8eCAwewLGQRyC/O+g0kXh8P+5pWpzijxwYczD3nKETIqUyhuA8B/UB" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script  type="text/javascript" src="https://dev.gilcouncil.com/wp-content/themes/divi-child-theme/sliderScript.js"></script>
  <script  type="text/javascript" src="https://dev.gilcouncil.com/wp-content/themes/divi-child-theme/script.js"></script>

<?php } else { wp_redirect( 'https://dev.gilcouncil.com/growth-prospect');?>
<?php } ?>