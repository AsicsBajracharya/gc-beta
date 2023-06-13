<?php 
$content = get_sub_field('stories');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $style = ($content['background_image'] !== 'none') ? 'style="background-image: url('. $content['background_image'] . ');"' : '';
?>
<section class="section-stories">
        <div class="header-box text-center text-blue-dark" data-aos="fade-down">
            <h1><?php echo $content['heading'] ?></h1>
        </div>
        <div class="stories-slider-container container">
        <?php foreach ($content['stories'] as  $value) : ?>
            <div class="item" data-aos="fade-left" data-aos-delay="500">
                <div class="image-container">
                    <img src="<?php echo $value['image'] ?>"
                        alt="" />
                </div>
                <div class="content-container px-2 py-2">
                    <h2>
                    <?php echo $value['title'] ?>
                    </h2>
                </div>
            </div>
            <?php endforeach; ?>           
        </div>
    </section>
<?php

endif;
