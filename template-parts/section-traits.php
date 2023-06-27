<?php 
$content = get_sub_field('traits_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';   
?>


<section class="section-growth-coaching-program" style="
        background-image: url('<?php echo $content['background_image'] ?>');
      ">
    <div class="container">
        <div class="header-box text-center">
            <h1><?php echo $content['heading'] ?></h1>
        </div>
    </div>
    <div class="">
        <div class="container">
       
            <div class="traits-slider-container">
            <?php foreach ($content['slides'] as  $value) : ?> 
                <div class="slide">
                    <div class="row">
                        <div class="offset-lg-1 col-md-6 col-lg-5 to-order">
                            <div class="content-container">
                                <div class="header-box-secondary">
                                    <h2>
                                    <?php echo $value['title'] ?>
                                    </h2>
                                </div>
                                <div class="text-box">
                                    <p>
                                    <?php echo $value['description'] ?>
                                    </p>
                                </div>
                                <div class="button-container">
                                  <?php if(isset($content['button_link']['title']) && !empty($content['button_link']['title']) ) : ?>
                                    <button class="btn btn-primary btn-white-border btn-small btn-arrow btn-arrow-move">
                                    <?php echo $content['button_link']['title']?>
                                        <span class="btn-icon">
                                            <svg viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </button>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 to-order">
                            <div class="image-container">
                                <img src=" <?php echo $value['image'] ?>" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
        </div>
    </div>
</section>

<?php

endif;