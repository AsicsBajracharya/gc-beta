<?php 
$content = get_sub_field('critical_issues_section');
if ($content['enable_disable']) :
  // echo "<pre>";
  // print_r($content);
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';   
?>
<section class="section-growth " style="background-image: url('<?php echo $content['background_image'] ?>')">
    <div class="content-container-top text-white title"  data-aos = "fade-down">
        <div class="header-box text-center">
            <h1><?php echo $content['heading'] ?></h1>
        </div>
        <div class="text-box text-center title">
            <p>
                <?php echo $content['sub_heading'] ?>
            </p>
        </div>
    </div>


    <div class="slider-container growth-slider slider-2">
    <?php foreach ($content['slides'] as  $value) : ?>   
        <div class="slide-card-1" data-aos = "flip-left">
            <div class="content-container">
                <div class="icon-container">
                    <a href="<?php echo $value['link']; ?>"><img src=" <?php echo $value['icon']; ?>" alt="" /></a>
                </div>
                <div class="text-box">
                    <p>
                        <?php echo $value['text']; ?>
                    </p>
                </div>
            </div>
        </div>   
    <?php endforeach; ?>
    </div>

</section>

<?php
endif;