<?php 
$content = get_sub_field('executive_coaching_clinic_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';   
?>
<!-- <section class="section-coaching-clinic">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="content-container left" style="
                  background-image: url('  <?php echo $content['background_image'] ?>');
                ">
                    <div class="container">
                        <div class="flex">
                            <div class="offset-md-2 off-width">
                                <div class="header-box">
                                    <h1><?php echo $content['title'] ?></h1>
                                </div>
                                <div class="text-box">
                                    <p>
                                        <?php echo $content['main_content'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 negative-offset">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image-container">
                            <img src="  <?php echo $content['coaching_image'] ?>" alt="" />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="content-container right">
                            <div class="header-box">
                                <h4> <?php echo $content['about_title'] ?></h4>
                            </div>
                            <div class="text-container">
                                <p>
                                    <?php echo $content['about_content'] ?>
                                </p>
                            </div>
                            <div class="button-group d-flex">
                                <div class="button-container">
                                <a href=" <?php echo $content['primary_button_link']['url'] ?>"
                                    <button class="btn btn-primary btn-small btn-arrow">
                                    <?php echo $content['primary_button_link']['title'] ?>
                                    </button>
                                    </a>
                                </div>
                                <div class="button-container">
                                    <a href=" <?php echo $content['seconday_button_link']['url'] ?>"><button
                                            class="btn btn-transparent btn-small">
                                            <?php echo $content['seconday_button_link']['title'] ?>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="section-coaching-clinic">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-container left" style="
                background-image: url('  https://beta.gilcouncil.com/wp-content/uploads/2023/06/executive-coaching-clinic-bg.jpg');
              ">
                    <div class="container">
                        <div class="flex">
                            <div class="content-container-left-inside">
                                <div class="header-box">
                                    <h1>Executive Coaching Clinic</h1>
                                </div>
                                <div class="text-box">
                                    <p>
                                        Executive Coaching Clinics are a quarterly series, each
                                        focused on a different management challenge, to gain
                                        clarity, create change and make progress on your goals,
                                        outcomes, or strategies.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 negative-offset">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="image-container">
                            <img src="  https://beta.gilcouncil.com/wp-content/uploads/2023/06/image-63-1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="content-container right">
                            <div class="header-box">
                                <h3>ABOUT YOUR COACH</h3>
                            </div>
                            <div class="text-container">
                                <p>
                                    Your Executive Coach: Michael O. “Coop” Cooper, Founder of
                                    Innovators + Influencers, will be your virtual Executive
                                    Coach. Coop is an internationally recognized executive
                                    coach, advisor, facilitator and trainer who specializes in
                                    working with executive teams to develop the leadership
                                    skills, alignment and strategies to grow and thrive in a
                                    constantly changing environment.
                                </p>
                            </div>
                            <div class="button-group d-flex">
                                <div class="button-container">
                                    <a href=" https://beta.gilcouncil.com/upcoming-events/">
                                        <button class="btn btn-primary btn-small btn-arrow btn-arrow-move" tabindex="0">
                                            Enroll Now
                                            <span class="btn-icon">
                                                <svg viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                                <div class="button-container">
                                    <a href=" https://innovatorsandinfluencers.com/">
                                        <button class="btn btn-transparent btn-small">
                                            Learn More
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

endif;