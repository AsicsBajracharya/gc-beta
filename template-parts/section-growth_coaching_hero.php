<?php 
$content = get_sub_field('growth_coaching_hero_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';   
?>
<section class="section-growth-community no-padding section5" id = "section5" style="background-image: url('<?php echo $content['background_image'] ?>')">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="content-outer-container">
                    <div class="header-box text-white">
                        <h1><?php echo $content['heading'] ?></h1>
                    </div>
                    <div class="text-box text-white">
                        <p>
                            <?php echo $content['description'] ?>
                        </p>
                    </div>
                    <div class="button-container">
                        
                        <a href=" <?php
                         echo $content['button_link']['url'] ?>"><button
                                class="btn btn-primary btn-small btn-arrow">
                                <?php echo $content['button_link']['title'] ?>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row slide-container-outer growth-community-slider">
                    <?php foreach ($content['slides'] as  $value) : ?>
                    <div class="slide-container" style="
                    background-image: url('<?php echo $value['image'] ?>');
                  ">
                        <div class="text-box text-white">
                            <h2> <?php echo $value['heading'] ?></h2>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

endif;