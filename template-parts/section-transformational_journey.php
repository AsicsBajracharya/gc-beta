<?php 
$content = get_sub_field('transformational_journey_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';   
?>
 <section id="journey-section" class="section-cta" style="background-image: url('<?php echo $content['background_image'] ?> ')">
      <div class="container">
        <div class="content-container">
          <div class="header-box text-white text-center">
            <h1><?php echo $content['heading'] ?></h1>
          </div>
          <div class="button-container">
            <button class="btn btn-primary w-100">
            <?php echo $content['button_text'] ?>
            </button>
          </div>
        </div>
      </div>
    </section>

<?php

endif;
