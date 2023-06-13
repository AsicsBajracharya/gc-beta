<?php 
$content = get_sub_field('best_practices_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';   
?>
 <section
        class="section-best-practices"
        style="background-image: url('./assets/images/bg-light.jpg')"
      >
        <div class="container">
          <div class="content-container text-white title">
            <div class="header-box primary text-center">
              <h1><?php echo $content['heading'] ?></h1>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="content-container-main d-flex">
            <div class="left all-articles">
              <div class="header-box">
                <h1><?php echo $content['left_heading'] ?></h1>
              </div>
              <div class="button-container">
                <button class="btn btn-primary"><?php echo $content['button'] ?></button>
              </div>
            </div>
            <div class="slider-container right article-slider">
            <?php foreach ($content['slides'] as  $value) : ?>
                <div class="slide-card">
                <div class="content-container">
                  <div class="image-container">
                    <img src="<?php echo $value['bp_image'] ?>" alt="" />
                  </div>
                  <div class="text-container">
                    <h3><?php echo $value['bp_heading'] ?></h3>
                    <p>
                    <?php echo $value['bp_content'] ?>
                    </p>
                  </div>
                </div>
                <?php endforeach; ?>            
            </div>
          </div>
        </div>
      </section>
<?php

endif;
