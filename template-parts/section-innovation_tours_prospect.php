<?php 
$content = get_sub_field('innovation_tours_prospect');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $style = ($content['background_image'] !== 'none') ? 'style="background-image: url('. $content['background_image'] . ');"' : '';
?>
<section class="section-innovation">
        <div class="left" style="
            background-image: url('<?php echo $content['background_image'] ?>');
          ">
            <div class="content-container" data-aos="fade-down">
                <div class="header-box text-white">
                    <h1><?php echo $content['heading'] ?></h1>
                </div>
                <div class="text-box text-white">
                    <h2>
                    <?php echo $content['description'] ?>
                    </h2>
                </div>
                <div class="button-container">
                    <a href="<?php echo $content['button']['url'] ?>"><button class="btn btn-white-bg btn-small btn-arrow">
                    <?php echo $content['button']['title'] ?>
                    </button>
</a>
                </div>
            </div>
        </div>
        <div class="right" data-aos="fade-in">
            <img src="<?php echo $content['image'] ?>"
                alt="" />
        </div>
    </section>
<?php
endif;
