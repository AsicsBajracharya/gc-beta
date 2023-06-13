<?php 
$content = get_sub_field('executive_coaching_clinic_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';   
?>
<section class="section-coaching-clinic">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="content-container left" style="
                  background-image: url('  <?php echo $content['background_image'] ?>');
                ">
                    <div class="container">
                        <div class="flex">
                            <div class="offset-md-2 off-width">
                                <div class="header-box">
                                    <h1><?php echo $content['title'] ?></h1>
                                </div>
                                <div class="text-box">
                                    <p>
                                        <?php echo $content['main_content'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 negative-offset">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image-container">
                            <img src="  <?php echo $content['coaching_image'] ?>" alt="" />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="content-container right">
                            <div class="header-box">
                                <h4> <?php echo $content['about_title'] ?></h4>
                            </div>
                            <div class="text-container">
                                <p>
                                    <?php echo $content['about_content'] ?>
                                </p>
                            </div>
                            <div class="button-group d-flex">
                                <div class="button-container">
                                <a href=" <?php echo $content['primary_button_link']['url'] ?>"
                                    <button class="btn btn-primary btn-small btn-arrow">
                                    <?php echo $content['primary_button_link']['title'] ?>
                                    </button>
                                    </a>
                                </div>
                                <div class="button-container">
                                    <a href=" <?php echo $content['seconday_button_link']['url'] ?>"><button
                                            class="btn btn-transparent btn-small">
                                            <?php echo $content['seconday_button_link']['title'] ?>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

endif;