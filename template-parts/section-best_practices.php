<?php 
$content = get_sub_field('best_practices_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';   
?>
<section class="section-best-practices" style="background-image: url('./assets/images/bg-light.jpg')">
    <?php if (isset( $content['heading']) && !empty( $content['heading'])) : ?>
    <div class="container">
        <div class="content-container text-white title">
            <div class="header-box primary text-center" data-aos="fade-down">

                <h1><?php echo $content['heading'] ?></h1>

            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="container">
        <div class="content-container-main">
            <!-- <div class="left all-articles" data-aos="fade-right">
                <div class="header-box">
                    <h1><?php
                    
                     echo $content['left_heading'] 
                     
                     ?></h1>
                </div>
                <div class="button-container">
                    <button class="btn btn-primary btn-small btn-arrow btn-arrow-move">
                        <?php echo $content['button'] ?>
                        <span class="btn-icon">
                            <svg viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </span>
                    </button>
                </div>
            </div> -->

            <div class="right article-slider slider-3">
                <?php foreach ($content['slides'] as  $value) : ?>
                <div class="slide-card" data-aos="flip-left">
                    <a href="#">
                        <div class="content-container">
                            <div class="image-container">
                                <img src="<?php echo $value['bp_image'] ?>" alt="" />
                            </div>
                            <div class="text-container">
                                <h3><?php echo $value['bp_heading'] ?></h3>
                                <p>
                                    <?php echo $value['bp_content'] ?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
</section>
<?php

endif;