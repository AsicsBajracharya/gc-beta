<?php 
$content = get_sub_field('growth_council_think_tank_series_prospect');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $style = ($content['background_image'] !== 'none') ? 'style="background-image: url('. $content['background_image'] . ');"' : '';
?>
<section class="section-growth-council-think-tank" style="
          background-image: url('  <?php echo $content['background_image'] ?>');
        ">
    <div class="container">
        <div class="header-with-button">
            <div class="header-box text-white" data-aos="fade-down">
                <h1><?php echo $content['heading'] ?></h1>
            </div>
            <div class="button-container">
                <a href=" <?php echo $content['button']['url'] ?>"><button
                        class="btn btn-primary btn-small btn-arrow btn-arrow-move" data-aos="fade-down"
                        data-aos-delay="500">
                        <?php echo $content['button']['title'] ?>
                        <span class="btn-icon">
                            <svg viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="think-tank-series-slider">
        <?php foreach ($content['think_tanks'] as  $value) : ?>
        <div class="slide content-container" data-aos="fade-up" data-aos-delay="1000">
            <div class="image-container">
                <img src="<?php echo $value['image'] ?>" alt="" />
            </div>
            <div class="slider-overlay"></div>
            <div class="text-box text-white">
                <h1><?php echo $value['title'] ?></h1>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php

endif;