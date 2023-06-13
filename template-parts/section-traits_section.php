<?php 
$content = get_sub_field('traits_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';   
?>
  <section class="section-growth-coaching-program" style="background-image: url('<?php echo $content['background_image'] ?>')">
      <div class="container">
        <div class="header-box text-center">
          <h1><?php echo $content['heading'] ?></h1>
        </div>
      </div>
      <?php foreach ($content['slides'] as  $value) : ?> 
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
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
                  <button class="btn btn-primary w-100"><?php echo $content['button'] ?></button>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="image-container">
                <img src=" <?php echo $value['image'] ?>" alt="" />
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </section>

<?php

endif;
