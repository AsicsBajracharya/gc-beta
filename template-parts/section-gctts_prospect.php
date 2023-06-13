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
                <a href=" <?php echo $content['button']['url'] ?>"><button class="btn btn-primary btn-small btn-arrow"
                        data-aos="fade-down" data-aos-delay="500">
                        <?php echo $content['button']['title'] ?>
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
            <div class="text-box text-white">
                <h1><?php echo $value['title'] ?></h1>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php

endif;