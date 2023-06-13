<?php /* Template Name: Prospect Page */ ?>

<?php 

//  get_header(); 
 
 ?>


<!-- <main>
	<?php
		// if (have_rows('landing_page_content')) :
		// 	get_template_part('template-parts/main', 'content');
		// endif;
	?>
	<a href="#page-container" class="fs-back-to-top fs-scroller"><span class="fs-icon fs-icon-angle-down"></span></a>
 </main> -->


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/fonts/stylesheet.css" />
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

    <link rel="stylesheet"
        href=" http://localhost/GC_landing_page/wp-content/themes/divi-child-theme/css-landing/style.css" />

    <title>Growth Partner</title>
</head>

<header class="" data-aos="fade-in" data-aos-duration="1000">
    <div class="container">
        <div class="row justify-content-between align-items-center flex-nowrap">
            <div class="col">
                <div class="d-flex flex-nowrap align-items-center">
                    <div class="fs-ham clickable"><span></span><span></span><span></span></div>

                    <div class="logo-container clickable">
                        <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Logo-big.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex icon-group justify-content-end align-items-center">
                    <div class="icon-container clickable">
                        <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/icon-search.svg" alt="" />
                    </div>
                    <div class="icon-container notification clickable">
                        <img class="bell"
                            src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/icon-bell.svg" alt="" />
                        <div class="notification-container">
                            <div class="notification-header d-flex">
                                <p>Notifications</p>
                                <p class="active">
                                    Mark as read
                                    <span class="icon-container clickable">
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
                                    <li class="notification-item d-flex" clickable>
                                        <div class="image-container">
                                            <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/bill.jpg"
                                                alt="" />
                                        </div>
                                        <div class="content-container">
                                            <h4>Your have a new message from Yin</h4>
                                            <p>
                                                Hello there, check this new items in from the your
                                                may interested from the motion school
                                            </p>
                                        </div>
                                    </li>
                                    <li class="notification-item d-flex clickable">
                                        <div class="image-container">
                                            <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/bill.jpg"
                                                alt="" />
                                        </div>
                                        <div class="content-container">
                                            <h4>Your have a new message from Yin</h4>
                                            <p>
                                                Hello there, check this new items in from the your
                                                may interested from the motion school
                                            </p>
                                        </div>
                                    </li>
                                    <li class="notification-item d-flex clickable">
                                        <div class="image-container">
                                            <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/bill.jpg"
                                                alt="" />
                                        </div>
                                        <div class="content-container">
                                            <h4>Your have a new message from Yin</h4>
                                            <p>
                                                Hello there, check this new items in from the your
                                                may interested from the motion school
                                            </p>
                                        </div>
                                    </li>
                                    <li class="notification-item d-flex clickable">
                                        <div class="image-container">
                                            <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/bill.jpg"
                                                alt="" />
                                        </div>
                                        <div class="content-container">
                                            <h4>Your have a new message from Yin</h4>
                                            <p>
                                                Hello there, check this new items in from the your
                                                may interested from the motion school
                                            </p>
                                        </div>
                                    </li>
                                    <li class="notification-item d-flex clickable">
                                        <div class="image-container">
                                            <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/bill.jpg"
                                                alt="" />
                                        </div>
                                        <div class="content-container">
                                            <h4>Your have a new message from Yin</h4>
                                            <p>
                                                Hello there, check this new items in from the your
                                                may interested from the motion school
                                            </p>
                                        </div>
                                    </li>
                                    <li class="notification-item d-flex clickable">
                                        <div class="image-container">
                                            <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/bill.jpg"
                                                alt="" />
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
                    <p class="hello-text clickable">Hi <strong>John</strong></p>
                    <div class="avatar-container clickable">
                        <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/avatar.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
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
<nav class="nav-fixed">
    <div class="container">
        <ul class="nav-list">
            <li class="nav-item pill active section1">
                <a href="#section3">Growth Community</a>
            </li>
            <li class="nav-item pill section2">
                <a href="#section4">Growth Content</a>
            </li>
            <li class="nav-item pill section3">
                <a href="#section5">Growth Coaching</a>
            </li>
        </ul>

    </div>
</nav>


<main class="page-prospects">
    <section class="section-hero slider no-padding" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="500">
        <div class="slider-single-main"
            style="background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/hero-prospects.jpg')">
            <div class="container">
                <div class="content-container">
                    <div class="text-box">
                        <div class="text-box_primary dashed
                data-aos=" fade-left" data-aos-duration="1000" data-aos-delay="" ">
                  <h1>Growth Council</h1>
                </div>
                <div class=" text-box_secondary" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
                            <h2>
                                Explore radical new concepts without pressure, build strong
                                peer connections across industries and navigate the future
                                with confidence.
                            </h2>
                        </div>
                    </div>
                    <div class="button-container">
                        <button class="btn btn-primary" data-aos="fade-left" data-aos-duration="1000"
                            data-aos-delay="100">Join Growth Council</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-single-main"
            style="background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/hero.jpg')">
            <div class="container">
                <div class="content-container">
                    <div class="text-box">
                        <div class="text-box_primary">
                            <h1>
                                Developing innovative reimbursement models for optimal risk
                                sharing and improved patient outcomes.
                            </h1>
                        </div>
                        <div class="text-box_secondary">
                            <h2>Strategic Imperatives For Precision Health</h2>
                        </div>
                    </div>
                    <div class="button-container">
                        <button class="btn btn-primary">
                            Begin Your Transformation Growth Journey
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-growth-innovation no-padding" data-aos="fade-up" data-aos-offset="-300">
        <div class="container">
            <div class="content-container-outer d-flex">
                <div class="left">
                    <div class="image-container video-thumbnail" style="
                  background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/demo-video-bg.jpg');
                ">
                        <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/play-button.png" alt="" />
                    </div>
                </div>
                <div class="right">
                    <div class="content-container-inner">
                        <div class="header-box-secondary">
                            <h2>Navigate the future with confidence</h2>
                        </div>
                        <div class="header-box">
                            <h1>The Growth Innovation Leadership Council is Growing</h1>
                        </div>
                        <div class="button-container">
                            <button class="btn btn-primary btn-arrow btn-small">
                                Join Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="overlay">
          <div class="growth-innovation-video">
            <iframe
              width="420"
              height="315"
              src="https://www.youtube.com/embed/tgbNymZ7vqY"
            >
            </iframe>
          </div>
        </div> -->
    </section>
    <section class="section-road section-with-image fs-road"
        style="background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/bg-light.jpg')">
        <div class="container">
            <div class="header-box text-center" data-aos="fade-down" data-aos-offset="-600">
                <h1>The Three Pillars of Transformational Growth</h1>
            </div>
            <div class="fs-road__img" data-aos="fade-up" data-aos-offset="-600">
                <div class="fs-road__wrap">
                    <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/circle.svg" alt="Circle" />
                    <div class="fs-road__community">
                        <a href="#" class="fs-road__link">
                            <span class="fs-road__title">Growth Community</span>
                            <span class="fs-road-more">Learn More
                                <span class="fs-icon-arrow"><svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 5.87988H12.5716" stroke="#FAFAFA" stroke-width="2" />
                                        <path d="M5.93066 0.907227L12.5717 5.87924L5.93066 10.8519" stroke="#FAFAFA"
                                            stroke-width="2" />
                                    </svg> </span></span>
                        </a>
                        <div class="fs-tooltip">
                            <ul>
                                <li>
                                    <a href="#" class="fs-scroller">Growth Opportunities</a>
                                </li>
                                <li>
                                    <a href="#" class="fs-scroller">Companies to Action</a>
                                </li>
                                <li><a href="#" class="fs-scroller">Best Practices</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="fs-road__content">
                        <a href="#" class="fs-road__link">
                            <span class="fs-road__title">Growth Content</span>
                            <span class="fs-road-more">Learn More
                                <span class="fs-icon-arrow">
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 5.87988H12.5716" stroke="#FAFAFA" stroke-width="2" />
                                        <path d="M5.93066 0.907227L12.5717 5.87924L5.93066 10.8519" stroke="#FAFAFA"
                                            stroke-width="2" />
                                    </svg></span></span>
                        </a>
                        <div class="fs-tooltip">
                            <ul>
                                <li>
                                    <a href="#" class="fs-scroller">Growth Opportunities</a>
                                </li>
                                <li>
                                    <a href="#" class="fs-scroller">Companies to Action</a>
                                </li>
                                <li><a href="#" class="fs-scroller">Best Practices</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="fs-road__coaching">
                        <a href="#" class="fs-road__link">
                            <span class="fs-road__title">Growth Coaching</span>
                            <span class="fs-road-more">Learn More
                                <span class="fs-icon-arrow">
                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 5.87988H12.5716" stroke="#FAFAFA" stroke-width="2" />
                                        <path d="M5.93066 0.907227L12.5717 5.87924L5.93066 10.8519" stroke="#FAFAFA"
                                            stroke-width="2" />
                                    </svg></span></span>
                        </a>
                        <div class="fs-tooltip">
                            <ul>
                                <li>
                                    <a href="#" data-id="#section_3_growth_coaching">
                                        Executive Coaching Clinic
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-id="#section_3_growth_coaching">
                                        Growth Leadership Coaching Series
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-id="#section_3_growth_coaching">
                                        Expert Growth Coaches Assigned to Each Client
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-id="#section_3_growth_coaching">
                                        Designed and Ad Hoc Interactions
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="fs-road__main">
                        <span class="fs-road__main-txt">Transformational Growth </span>
                        <span class="fs-road__main-desc">for Leaders & Companies</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-growth-community no-padding"
        style="background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/growth-hero-bg.jpg')"
        id="section3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="content-outer-container" data-aos="fade-up">
                        <div class="header-box text-white dashed">
                            <h1>Growth Community</h1>
                        </div>
                        <div class="text-box text-white">
                            <h2>
                                Explore radical new concepts without pressure, build strong
                                peer connections across industries and navigate the future
                                with confidence.
                            </h2>
                        </div>
                        <div class="button-container">
                            <button class="btn btn-primary btn-small btn-arrow" data-aos="fade-left">
                                Explore All
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row slide-container-outer growth-community-slider">
                        <div class="slide-container" data-aos="fade-in" data-aos-duration="500" style="
                    background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/growth-community-slider-bg.jpg');
                  ">
                            <div class="text-box text-white">
                                <h2>Executive MindXchange Events & Innovation Workshops</h2>
                            </div>
                        </div>
                        <div class="slide-container" style="
                    background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/growth-community-slider-bg.jpg');
                  ">
                            <div class="text-box text-white">
                                <h2>Executive MindXchange Events & Innovation Workshops</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-growth-partners">
        <div class="header-box text-center" data-aos="fade-down">
            <h1>Growth Partners & Members</h1>
        </div>
        <div class="container">
            <ul class="partner-list">
                <li class="partner-item">
                    <div class="image-container" data-aos="fade-left" data-aos-delay="500">
                        <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/partner1.png" alt="" />
                    </div>
                </li>
                <li class="partner-item">
                    <div class="image-container" data-aos="fade-left" data-aos-delay="1000">
                        <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/partner1.png" alt="" />
                    </div>
                </li>
                <li class="partner-item">
                    <div class="image-container" data-aos="fade-left" data-aos-delay="1500">
                        <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/partner1.png" alt="" />
                    </div>
                </li>
                <li class="partner-item">
                    <div class="image-container" data-aos="fade-left" data-aos-delay="2000">
                        <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/partner1.png" alt="" />
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="section-growth-council-think-tank" style="
          background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/prospects-think-tank-blue.jpg');
        ">
        <div class="container">
            <div class="header-with-button">
                <div class="header-box text-white" data-aos="fade-down">
                    <h1>Growth Council Think Tank Series</h1>
                </div>
                <div class="button-container">
                    <button class="btn btn-primary btn-small btn-arrow" data-aos="fade-down" data-aos-delay="500">
                        View All
                    </button>
                </div>
            </div>
        </div>

        <div class="think-tank-series-slider">
            <div class="slide content-container" data-aos="fade-up" data-aos-delay="1000">
                <div class="image-container">
                    <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Card.jpg" alt="" />
                </div>
                <div class="text-box text-white">
                    <h1>Think Tank 1</h1>
                </div>
            </div>
            <div class="slide content-container" data-aos="fade-up" data-aos-delay="1500">
                <div class="image-container">
                    <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Card.jpg" alt="" />
                </div>
                <div class="text-box text-white">
                    <h1>Think Tank 1</h1>
                </div>
            </div>
            <div class="slide content-container" data-aos="fade-up" data-aos-delay="2000">
                <div class="image-container">
                    <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Card.jpg" alt="" />
                </div>
                <div class="text-box text-white">
                    <h1>Think Tank 1</h1>
                </div>
            </div>
            <div class="slide content-container" data-aos="fade-up" data-aos-delay="2500">
                <div class="image-container">
                    <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Card.jpg" alt="" />
                </div>
                <div class="text-box text-white">
                    <h1>Think Tank 1</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section-strategic-imperative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="image-container" data-aos="fade-down">
                        <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/vr.jpg" alt="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-container" data-aos="fade-up">
                        <div class="header-box text-blue">
                            <h1>2023 Strategic Imperative for Growth</h1>
                        </div>
                        <div class="text-box text-blue">
                            <h2>
                                Council members vote each year to determine which industry
                                challenges, or critical issues, will be the Council’s focus
                                for the year ahead.
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-innovation">
        <div class="left" style="
            background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/prospects-think-tank-blue.jpg');
          ">
            <div class="content-container" data-aos="fade-down">
                <div class="header-box text-white">
                    <h1>Innovation Tours</h1>
                </div>
                <div class="text-box text-white">
                    <h2>
                        Assessing the Readiness of Countries to Implement Precision
                        Health
                    </h2>
                </div>
                <div class="button-container">
                    <button class="btn btn-white-bg btn-small btn-arrow">
                        Explore All
                    </button>
                </div>
            </div>
        </div>
        <div class="right" data-aos="fade-in">
            <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Best Home Section (right).jpg"
                alt="" />
        </div>
    </section>
    <section class="section-mindXChange">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="image-container" data-aos="fade-down">
                        <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Best Home Section (right).jpg"
                            alt="" />
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="content-container" data-aos="fade-up">
                        <div class="header-box text-blue">
                            <h1>Executive MindXChange</h1>
                        </div>
                        <div class="text-box text-blue">
                            <h2>
                                Council members vote each year to determine which industry
                                challenges, or critical issues, will be the Council’s focus
                                for the year ahead.
                            </h2>
                        </div>
                        <button-container>
                            <button class="btn btn-primary btn-arrow btn-small">
                                View All
                            </button>
                        </button-container>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-growth-community no-padding"
        style="background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/growth-hero-bg.jpg')"
        id="section4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="content-outer-container" data-aos="fade-up">
                        <div class="header-box text-white dashed">
                            <h1>Growth Community</h1>
                        </div>
                        <div class="text-box text-white">
                            <h2>
                                Explore radical new concepts without pressure, build strong
                                peer connections across industries and navigate the future
                                with confidence.
                            </h2>
                        </div>
                        <div class="button-container">
                            <button class="btn btn-primary btn-small btn-arrow">
                                Explore All
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row slide-container-outer growth-community-slider" data-aos="fade-down">
                        <div class="slide-container" style="
                    background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/growth-community-slider-bg.jpg');
                  ">
                            <div class="text-box text-white">
                                <h2>Executive MindXchange Events & Innovation Workshops</h2>
                            </div>
                        </div>
                        <div class="slide-container" style="
                    background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/growth-community-slider-bg.jpg');
                  ">
                            <div class="text-box text-white">
                                <h2>Executive MindXchange Events & Innovation Workshops</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-stories">
        <div class="header-box text-center text-blue-dark" data-aos="fade-down">
            <h1>Stories</h1>
        </div>
        <div class="stories-slider-container container">
            <div class="item" data-aos="fade-left" data-aos-delay="500">
                <div class="image-container">
                    <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Best Home Section (right).jpg"
                        alt="" />
                </div>
                <div class="content-container px-2 py-2">
                    <h2>
                        2023: Case History on Digital Transformation: The Post-it®
                        Journey
                    </h2>
                </div>
            </div>
            <div class="item" data-aos="fade-left" data-aos-delay="1000">
                <div class="image-container">
                    <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Best Home Section (right).jpg"
                        alt="" />
                </div>
                <div class="content-container color-gc-blue">
                    <h2>
                        2023: Case History on Digital Transformation: The Post-it®
                        Journey
                    </h2>
                </div>
            </div>
            <div class="item" data-aos="fade-left" data-aos-delay="1500">
                <div class="image-container">
                    <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Best Home Section (right).jpg"
                        alt="" />
                </div>
                <div class="content-container px-2 py-2">
                    <h2>
                        2023: Case History on Digital Transformation: The Post-it®
                        Journey
                    </h2>
                </div>
            </div>
            <div class="item" data-aos="fade-left" data-aos-delay="2000">
                <div class="image-container">
                    <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Best Home Section (right).jpg"
                        alt="" />
                </div>
                <div class="content-container px-2 py-2">
                    <h2>
                        2023: Case History on Digital Transformation: The Post-it®
                        Journey
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="section-sectors">
        <div class="container">
            <div class="header-box text-blue-dark text-center" data-aos="fade-down">
                <h1>What's Happening in the Sectors</h1>
            </div>
        </div>

        <div class="container">
            <div class="sector-slide-container" data-aos="fade-up">
                <div class="sector-slide-item">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="image-container image-container-main" style="
                      background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/growth-content-article.jpg');
                    ">
                                <div class="content-container-inner">
                                    <div class="pill">
                                        <p>Oil & Gas</p>
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
                            <div class="content-container-outer d-flex flex-column">
                                <div class="item" style="
                        background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/growth-content-article.jpg');
                      ">
                                    <div class="content-container-inner">
                                        <div class="pill">
                                            <p>Percison Health</p>
                                        </div>
                                        <div class="text-box text-white">
                                            <h3>
                                                Emerging Models, Changing Landscape & Breaking
                                                Barriers
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="content-container-inner" style="
                          background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/growth-content-article.jpg');
                        ">
                                        <div class="pill">
                                            <p>Percison Health</p>
                                        </div>
                                        <div class="text-box text-white">
                                            <h3>
                                                Emerging Models, Changing Landscape & Breaking
                                                Barriers
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sector-slide-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="image-container image-container-main" style="
                      background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/growth-content-article.jpg');
                    ">
                                <div class="content-container-inner">
                                    <div class="pill">
                                        <p>Oil & Gas</p>
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
                            <div class="content-container-outer d-flex flex-column">
                                <div class="item" style="
                        background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/growth-content-article.jpg');
                      ">
                                    <div class="content-container-inner">
                                        <div class="pill">
                                            <p>Percison Health</p>
                                        </div>
                                        <div class="text-box text-white">
                                            <h3>
                                                Emerging Models, Changing Landscape & Breaking
                                                Barriers
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="content-container-inner" style="
                          background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/growth-content-article.jpg');
                        ">
                                        <div class="pill">
                                            <p>Percison Health</p>
                                        </div>
                                        <div class="text-box text-white">
                                            <h3>
                                                Emerging Models, Changing Landscape & Breaking
                                                Barriers
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-growth-community no-padding"
        style="background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/growth-hero-bg.jpg')"
        id="section3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="content-outer-container" data-aos="fade-up">
                        <div class="header-box text-white dashed">
                            <h1>Growth Community</h1>
                        </div>
                        <div class="text-box text-white">
                            <h2>
                                Explore radical new concepts without pressure, build strong
                                peer connections across industries and navigate the future
                                with confidence.
                            </h2>
                        </div>
                        <div class="button-container">
                            <button class="btn btn-primary btn-small btn-arrow">
                                Explore All
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row slide-container-outer growth-community-slider">
                        <div class="slide-container" style="
                    background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/growth-community-slider-bg.jpg');
                  " data-aos="fade-down">
                            <div class="text-box text-white">
                                <h2>Executive MindXchange Events & Innovation Workshops</h2>
                            </div>
                        </div>
                        <div class="slide-container" style="
                    background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/growth-community-slider-bg.jpg');
                  ">
                            <div class="text-box text-white">
                                <h2>Executive MindXchange Events & Innovation Workshops</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-coaching  match-height"
        style="background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/blue-bg.jpg')">
        <div class="conatiner">
            <div class="header-box text-center text-white" data-aos="fade-up">
                <h1>What is growth coaching?</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="content-container" data-aos="fade-up" data-aos-delay="500">
                        <div class="image-container">
                            <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/chat.png" alt="" />
                        </div>
                        <div class="text-container text-white">
                            <p>Conversations for your benefit</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content-container" data-aos="fade-up" data-aos-delay="1000">
                        <div class="image-container">
                            <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/arrow.png" alt="" />
                        </div>
                        <div class="text-container text-white">
                            <p>
                                Questions to guide you, explore your goals and desires,
                                identify your barriers and block and suggested structures to
                                help you get into action, faster so you can make progress
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="content-container" data-aos="fade-up" data-aos-delay="1500">
                        <div class="image-container">
                            <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/idea.png" alt="" />
                        </div>
                        <div class="text-container text-white">
                            <p>It’s about change</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="button-congtainer d-flex justify-content-center">
                <button class="btn btn-primary btn-transparent btn-small" data-aos="fade-up" data-aos-delay="2000">
                    Learn More
                </button>
            </div>
        </div>
    </section>

    <section class="section-innovation-leadership-council" style="
          background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/unsplash_0ksHInXh-tc.jpg');
        " id="section5">
        <div class="container">
            <div class="header-box text-blue text-center" data-aos="fade-down">
                <h1>Why Growth Innovation Leadership Council</h1>
                <h2>Growth for Leaders and Companies</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="content-container" data-aos="fade-up">
                        <div class="image-outer-container">
                            <div class="image-container">
                                <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Future Growth Potential.png"
                                    alt="" />
                            </div>
                        </div>

                        <div class="text-container text-center color-black-light">
                            <h3>Future Growth Potential</h3>
                            <p>Maximized through collaboration</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-container" data-aos="fade-up">
                        <div class="image-outer-container">
                            <div class="image-container">
                                <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Future Growth Potential.png"
                                    alt="" />
                            </div>
                        </div>

                        <div class="text-container text-center color-black-light">
                            <h3>Future Growth Potential</h3>
                            <p>Maximized through collaboration</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-container" data-aos="fade-up">
                        <div class="image-outer-container">
                            <div class="image-container">
                                <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Future Growth Potential.png"
                                    alt="" />
                            </div>
                        </div>

                        <div class="text-container text-center color-black-light">
                            <h3>Future Growth Potential</h3>
                            <p>Maximized through collaboration</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-container" data-aos="fade-up">
                        <div class="image-outer-container">
                            <div class="image-container">
                                <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Future Growth Potential.png"
                                    alt="" />
                            </div>
                        </div>

                        <div class="text-container text-center color-black-light">
                            <h3>Future Growth Potential</h3>
                            <p>Maximized through collaboration</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-container" data-aos="fade-up">
                        <div class="image-outer-container">
                            <div class="image-container">
                                <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Future Growth Potential.png"
                                    alt="" />
                            </div>
                        </div>

                        <div class="text-container text-center color-black-light">
                            <h3>Future Growth Potential</h3>
                            <p>Maximized through collaboration</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-container" data-aos="fade-up">
                        <div class="image-outer-container">
                            <div class="image-container">
                                <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Future Growth Potential.png"
                                    alt="" />
                            </div>
                        </div>

                        <div class="text-container text-center color-black-light">
                            <h3>Future Growth Potential</h3>
                            <p>Maximized through collaboration</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-community-slider">
        <div class="left" data-aos="fade-up">
            <div class="text-box text-blue">
                <h1>Hear from the Community</h1>
            </div>
            <div class="quote-image">
                <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Qotes.png" alt="" />
            </div>
        </div>
        <div class="right" data-aos="fade-up">
            <div class="community-slider-container container">
                <div class="community-slide-item">
                    <div class="content-container">
                        <div class="profile d-flex align-items-center">
                            <div class="image-container">
                                <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/bill.jpg"
                                    alt="" />
                            </div>
                            <div class="profile-description">
                                <h4>Esther Hills</h4>
                                <p>Lead Intranet Technician</p>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>
                                Omnis totam molestiae delectus nemo alias nesciunt harum et.
                                Nobis dolorum excepturi quod vel. Sunt est qui ab non
                                dolores repellat rem impedit dolores. Ut ea rerum cum eum.
                                Alias dolores tempore illo accusantium est et voluptatem
                                voluptas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="community-slide-item">
                    <div class="content-container">
                        <div class="profile d-flex align-items-center">
                            <div class="image-container">
                                <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/bill.jpg"
                                    alt="" />
                            </div>
                            <div class="profile-description">
                                <h4>Esther Hills</h4>
                                <p>Lead Intranet Technician</p>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>
                                Omnis totam molestiae delectus nemo alias nesciunt harum et.
                                Nobis dolorum excepturi quod vel. Sunt est qui ab non
                                dolores repellat rem impedit dolores. Ut ea rerum cum eum.
                                Alias dolores tempore illo accusantium est et voluptatem
                                voluptas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="community-slide-item">
                    <div class="content-container">
                        <div class="profile d-flex align-items-center">
                            <div class="image-container">
                                <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/bill.jpg"
                                    alt="" />
                            </div>
                            <div class="profile-description">
                                <h4>Esther Hills</h4>
                                <p>Lead Intranet Technician</p>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>
                                Omnis totam molestiae delectus nemo alias nesciunt harum et.
                                Nobis dolorum excepturi quod vel. Sunt est qui ab non
                                dolores repellat rem impedit dolores. Ut ea rerum cum eum.
                                Alias dolores tempore illo accusantium est et voluptatem
                                voluptas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="community-slide-item">
                    <div class="content-container">
                        <div class="profile d-flex align-items-center">
                            <div class="image-container">
                                <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/bill.jpg"
                                    alt="" />
                            </div>
                            <div class="profile-description">
                                <h4>Esther Hills</h4>
                                <p>Lead Intranet Technician</p>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>
                                Omnis totam molestiae delectus nemo alias nesciunt harum et.
                                Nobis dolorum excepturi quod vel. Sunt est qui ab non
                                dolores repellat rem impedit dolores. Ut ea rerum cum eum.
                                Alias dolores tempore illo accusantium est et voluptatem
                                voluptas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background-abstract-image">
                <img src="http://localhost/GC_landing_page/wp-content/uploads/2023/05/Rectangle 1567.jpg" alt="" />
            </div>
        </div>
    </section>
    <section class="section-cta"
        style="background-image: url('http://localhost/GC_landing_page/wp-content/uploads/2023/05/cta-bg.jpg')">
        <div class="container">
            <div class="content-container">
                <div class="header-box text-white text-center" data-aos="fade-down">
                    <h1>Start your Transformational Journey</h1>
                </div>
                <div class="button-container">
                    <button class="btn btn-primary w-100" data-aos="fade-up">
                        Engage in our Growth Dialogue
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>













<?php

get_footer();

?>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script
      type="text/javascript"
      src="https://unpkg.com/default-passive-events"
    ></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="http://localhost/GC_landing_page/wp-content/themes/divi-child-theme/script.js"></script>