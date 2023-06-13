<?php 
$content = get_sub_field('growth_community_hero_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';   
?>
 <section
        class="section-growth-community no-padding section3"  
      id="section3"
      >
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5">
              <div class="content-outer-container" data-aos = "fade-top"   style="background-image: url('<?php echo $content['background_image'] ?>')">
                <div class="header-box text-white">
                  <h1><?php echo $content['heading'] ?></h1>
                </div>
                <div class="text-box text-white">
                  <p>
                  <?php echo $content['description'] ?>
                  </p>
                </div>
                <div class="button-container">
                  <a href="<?php echo $content['button_link']['url'] ?>" ><button class="btn btn-primary btn-small btn-arrow">
                  <?php echo $content['button_link']['title'] ?>
                  <span class="btn-icon">
                 <svg viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                 </span>
                  </button>
</a>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="row slide-container-outer growth-community-slider" data-aos = "fade-bottom">
              <?php foreach ($content['slides'] as  $value) : ?>
                <div
                  class="slide-container"
                  style="
                    background-image: url('<?php echo $value['image'] ?>');
                  "
                >
                  <div class="text-box text-white">
                  <h2>    <?php echo $value['heading'] ?></h2>
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
