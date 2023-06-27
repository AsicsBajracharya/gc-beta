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
                <a href="<?php echo $content['button']['url'] ?>"><button
                        class="btn btn-primary btn-small btn-arrow btn-arrow-move">
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
    <div class="right" data-aos="fade-in">
        <img src="<?php echo $content['image'] ?>" alt="" />
    </div>
</section>
<?php
endif;