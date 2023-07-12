<?php 
$content = get_sub_field('growth_innovation_float_prospect');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
   
?>

<section class="section-growth-innovation no-padding" data-aos="fade-up" data-aos-offset="-300">
    <div class="container">
        <div class="content-container-outer d-flex">
            <div class="left">
                <div class="image-container video-thumbnail" style="
                  background-image: url('<?php echo $content['image'] ?>');
                ">
                    <div class="slider-overlay"></div>
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
                        <form action="<?php echo $content['button_link']['url'] ?>" method="post">
                        <input name="cta-prospect" value="growth_council" hidden>
                            <button type="submit" class="btn btn-transparent btn-white-border btn-arrow btn-small btn-arrow-move">
                                <?php echo $content['button_link']['title'] ?>
                                <span class="btn-icon">
                                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<div class="overlay-video overlay"
    data-src-video="<?php echo (isset($content['video_link']) && !empty($content['video_link']) ) ? $content['video_link'] : $content['video_file'] ?>">

    <iframe src="">
    </iframe>

</div>
<?php
endif;