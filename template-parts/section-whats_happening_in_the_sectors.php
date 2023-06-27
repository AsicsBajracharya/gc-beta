<?php 
$content = get_sub_field('whats_happening_in_the_sectors');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    

    // echo "<pre>";
    // print_r($content['sectors']); die;
?>
<section class="section-sectors">
    <div class="container">
        <div class="header-box text-blue-dark text-center" data-aos="fade-down">
            <h1><?php echo $content['heading'] ?></h1>
        </div>
    </div>

    <div class="container">
        <div class="sector-slide-container" data-aos="fade-up">
        <?php for ($x = 0; $x < count($content['sectors']); $x++) { ?>
            <div class="sector-slide-item" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8">
                        <div class="image-container image-container-main" style="
                      background-image: url('<?php echo $content['sectors'][$x]['image'] ?>');
                    ">
                            <div class="content-container-inner">
                                <div class="pill">
                                    <p><?php echo $content['sectors'][$x]['title'] ?></p>
                                </div>
                                <div class="header-box text-white">
                                    <h1>
                                    <?php echo $content['sectors'][$x]['sector_name'] ?>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $x++; ?>
                    <div class="col-md-4">
                        <div class="content-container-outer d-flex flex-column">
                            <div class="item" style="
                        background-image: url('<?php echo $content['sectors'][$x]['image'] ?>');
                      ">
                                <div class="content-container-inner">
                                    <div class="pill">
                                        <p><?php echo $content['sectors'][$x]['title'] ?></p>
                                    </div>
                                    <div class="text-box text-white">
                                        <h3>
                                        <?php echo $content['sectors'][$x]['sector_name'] ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <?php $x++; ?>
                            <div class="item">
                                <div class="content-container-inner" style="
                          background-image: url('<?php echo $content['sectors'][$x]['image'] ?>');
                        ">
                                    <div class="pill">
                                        <p><?php echo $content['sectors'][$x]['title'] ?></p>
                                    </div>
                                    <div class="text-box text-white">
                                        <h3>
                                        <?php echo $content['sectors'][$x]['sector_name'] ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>
<?php
endif;