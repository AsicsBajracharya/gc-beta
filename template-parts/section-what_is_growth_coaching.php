<?php 
$content = get_sub_field('what_is_growth_coaching');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';   
?>
<section class="section-coaching" style="background-image: url('<?php echo $content['background_image'] ?>')">
    <div class="conatiner">
        <div class="header-box text-center text-white">
            <h1><?php echo $content['heading'] ?></h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="content-container">
                    <div class="image-container">
                        <img src="<?php echo $content['first_icon'] ?>" alt="" />
                    </div>
                    <div class="text-container text-white">
                        <p><?php echo $content['first_description'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="content-container">
                    <div class="image-container">
                        <img src="<?php echo $content['second_icon'] ?>" alt="" />
                    </div>
                    <div class="text-container text-white">
                        <p>
                            <?php echo $content['second_description'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="content-container">
                    <div class="image-container">
                        <img src="<?php echo $content['third_icon'] ?>" alt="" />
                    </div>
                    <div class="text-container text-white">
                        <p><?php echo $content['third_description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="button-congtainer d-flex justify-content-center">
            <a href="<?php echo $content['button_link']['url'] ?>"><button
                    class="btn btn-white-border btn-transparent btn-small btn-arrow">
                    <?php echo $content['button_link']['title'] ?>
                </button>
            </a>
        </div>
    </div>
</section>
<?php

endif;