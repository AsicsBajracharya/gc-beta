<?php 
$content = get_sub_field('growth_council');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $style = ($content['background_image'] !== 'none') ? 'style="background-image: url('. $content['background_image'] . ');"' : '';
?>

<section class="section-hero slider-1 slider no-padding" data-aos="fade-in" data-aos-duration="1000"
    data-aos-delay="500">
    <?php foreach ($content['posts'] as  $value) : ?>
    <div class="slider-single-main" style="background-image: url('<?php echo $value['featured_img_url'] ?>')">
        <div class="container">
            <div class="content-container">
                <div class="text-box">
                    <div class="text-box_primary dashed
                data-aos=" fade-left" data-aos-duration="1000" data-aos-delay="" ">
                  <h1><?php echo $value['title'] ?></h1>
                </div>
                <div class=" text-box_secondary" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
                        <h2>
                            <?php echo $value['content'] ?>
                        </h2>
                    </div>
                </div>
                <div class="button-container">
                    <a href="<?php echo $content['button']['url'] ?>">
                        <button class="btn btn-primary" data-aos="fade-left" data-aos-duration="1000"
                            data-aos-delay="100"><?php echo $content['button']['title'] ?></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

</section>

<?php
endif;