<?php 
$content = get_sub_field('executive_mindxchange_prospect');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $style = ($content['background_image'] !== 'none') ? 'style="background-image: url('. $content['background_image'] . ');"' : '';
?>
<section class="section-mindXChange">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="image-container" data-aos="fade-down">
                    <img src="<?php echo $content['image'] ?>" alt="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-container" data-aos="fade-up">
                    <div class="header-box text-blue">
                        <h1><?php echo $content['heading'] ?></h1>
                    </div>
                    <div class="text-box text-blue">
                        <h2>
                            <?php echo $content['description'] ?>
                        </h2>
                    </div>
                    <div class="button-container">

                        <a href="<?php echo $content['button']['url'] ?>"><button
                                class="btn btn-primary btn-arrow btn-small btn-arrow-move">
                                <?php echo $content['button']['title'] ?>
                                <span class="btn-icon">
                                    <svg viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php
endif;