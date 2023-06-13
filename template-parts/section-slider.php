<?php 
$content = get_sub_field('slider_settings');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
?>
<section class="fs-section fs-viewport fs-info <?php echo esc_attr((!empty($section_class)) ? $section_class : ''); ?>" <?php echo $section_id ?>>
  <div class="fs-container fs-fade-up">
  <?php if (isset($content['heading']) && !empty($content['heading'])) : ?>
        <h2><?php echo esc_html($content['heading']); ?></h2>
    <?php endif; ?>
    <?php if (isset($content['slides']) && !empty($content['slides'])) : ?>
    <div class="fs-swiper fs-info__slider">
      <div class="fs-swiper-wrapper">
        <?php foreach ($content['slides'] as $index=>$slide) :?>
            <div class="fs-swiper-slide">
                
          <span class="fs-info__num"><?php echo sprintf('%02d', $index+1); ?></span>
          <?php if (isset($slide['text']) && !empty($slide['text'])) : ?>
            <p><?php echo esc_html($slide['text']); ?></p>
          <?php endif; ?>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="fs-swiper-pagination"></div>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php endif ?>