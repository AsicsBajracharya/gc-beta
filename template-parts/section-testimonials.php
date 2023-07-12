<?php 
$content = get_sub_field('testimonials');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $style = ($content['background_image'] !== 'none') ? 'style="background-image: url('. $content['background_image'] . ');"' : '';
?>
<section class="section-community-slider">
    <div class="left" data-aos="fade-up">
        <div class="text-box text-blue">
            <!-- <h1><?php //echo $content['heading'] ?></h1> -->
            <h1> Hear From the<br />
                Community</h1>
        </div>
        <div class="quote-image">
            <img src="<?php echo $content['icon'] ?>" alt="" />
        </div>
    </div>
    <div class="right" data-aos="fade-up">
        <div class="community-slider-container container">
            <?php foreach ($content['people'] as  $value) : ?>
            <div class="community-slide-item">
                <div class="content-container">
                    <div class="profile d-flex align-items-center">
                        <div class="image-container">
                            <img src="<?php echo $value['person_image'] ?>" alt="" />
                        </div>
                        <div class="profile-description">
                            <h4><?php echo $value['name'] ?></h4>
                            <p><?php echo $value['position'] ?></p>
                        </div>
                    </div>
                    <div class="text-box">
                        <p>
                            <?php echo $value['testimonial'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="background-abstract-image">
            <img src="<?php echo $content['background_image'] ?>" alt="" />
        </div>
    </div>
</section>
<?php

endif;