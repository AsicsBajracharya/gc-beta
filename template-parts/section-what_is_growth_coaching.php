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
            <div class="col-md-2 offset-md-1">
                <div class="content-container">
                    <div class="image-container">
                        <img src="<?php echo $content['first_icon'] ?>" alt="" />
                    </div>
                    <div class="text-container text-white">
                        <p><?php echo $content['first_description'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-container">
                    <div class="image-container">
                        <img src="<?php echo $content['second_icon'] ?>" alt="" />
                    </div>
                    <div class="text-container text-white main-text">
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
                    class="btn btn-white-border btn-small btn-arrow btn-arrow-move btn-transparent-arrow-move">
                    <?php echo $content['button_link']['title'] ?>
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
</section>
<?php

endif;