<?php 
$content = get_sub_field('why_growth_innovation_leadership_council');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $style = ($content['background_image'] !== 'none') ? 'style="background-image: url('. $content['background_image'] . ');"' : '';
?>
<section class="section-innovation-leadership-council" style="
          background-image: url('<?php echo $content['background_image'] ?>');
        " id="section5">
        <div class="container">
            <div class="header-box text-blue text-center" data-aos="fade-down">
                <h1><?php echo $content['heading'] ?></h1>
                <h2><?php echo $content['sub_heading'] ?></h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <?php foreach ($content['growths'] as  $value) : ?>
                <div class="col-md-4">
                    <div class="content-container" data-aos="fade-up">
                        <div class="image-outer-container">
                            <div class="image-container">
                                <img src="<?php echo $value['image'] ?>"
                                    alt="" />
                            </div>
                        </div>

                        <div class="text-container text-center color-black-light">
                            <h3><?php echo $value['name'] ?></h3>
                            <p><?php echo $value['subtitle'] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>               
            </div>
        </div>
    </section>
<?php
endif;
