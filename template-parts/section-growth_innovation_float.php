<?php 
$content = get_sub_field('growth_innovation_float_prospect');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $style = ($content['background_image'] !== 'none') ? 'style="background-image: url('. $content['background_image'] . ');"' : '';
?>

<section class="section-growth-innovation no-padding" data-aos="fade-up" data-aos-offset="-300">
    <div class="container">
        <div class="content-container-outer d-flex">
            <div class="left">
                <div class="image-container video-thumbnail" style="
                  background-image: url('<?php echo $content['image'] ?>');
                ">
                    <img src="<?php echo $content['play_icon']?>" alt="" />
                </div>
            </div>
            <div class="right">
                <div class="content-container-inner">
                    <div class="header-box-secondary">
                        <h2><?php echo $content['heading']?></h2>
                    </div>
                    <div class="header-box">
                        <h1><?php echo $content['sub_heading'] ?></h1>
                    </div>
                    <div class="button-container">
                        <a href = "<?php echo $content['button_link']['url'] ?>" ><button class="btn btn-primary btn-arrow btn-small">
                                <?php echo $content['button_link']['title'] ?>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay">
          <div class="growth-innovation-video">
            <iframe
              width="420"
              height="315"
              src="<?php echo $content['video'] ?>"
            >
            </iframe>
          </div>
        </div>
</section>
<?php
endif;