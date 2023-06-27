<?php 
$content = get_sub_field('transformational_journey_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';   
?>
<section id="journey-section" class="section-cta"
    style="background-image: url('<?php echo $content['background_image'] ?> ')">
    <div class="container">
        <div class="content-container">
            <div class="header-box text-white text-center">
                <h1><?php echo $content['heading'] ?></h1>
            </div>

        </div>
        <div class="button-container d-flex justify-content-center">
            <button class="btn btn-primary btn-arrow btn-arrow-no-move gpd-trigger" tabindex="0">
                <?php echo $content['button_text'] ?>
                <span class="btn-icon">
                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </span>
            </button>
        </div>
    </div>
</section>



<?php

endif;