
<?php 
$content = get_sub_field('content_settings');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
?>

<section class="fs-section fs-viewport fs-content <?php echo esc_attr((!empty($section_class)) ? $section_class : ''); ?>" <?php echo $section_id ?>>
    <div class="fs-container fs-fade-up">
    <div class="fs-heading">
    <?php if (isset($content['sub_heading']) && !empty($content['sub_heading'])) : ?>
        <span class="fs-heading__title"><?php echo esc_html($content['sub_heading']); ?></span>
    <?php endif; ?>
    <?php if (isset($content['heading']) && !empty($content['heading'])) : ?>
        <h2><?php echo esc_html($content['heading']); ?></h2>
    <?php endif; ?>
    <?php if (isset($content['heading_description']) && !empty($content['heading_description'])) : ?>
        <p><?php echo esc_html($content['heading_description']); ?></p>
    <?php endif; ?>
    </div>
        <?php if (isset($content['posts']) && !empty($content['posts'])) : ?>
        <div class="fs-swiper fs-swiper__content fs-same-height">
            <div class="fs-swiper-wrapper">
                <?php foreach ($content['posts'] as $blog) : ?>
                <div class="fs-swiper-slide">
                <?php if (isset($blog['image']) && !empty($blog['image'])) : ?>
                    <div class="fs-content__img fs-height-js">
                        <?php echo wp_get_attachment_image($blog['image'], ''); ?>
                    </div>
                    <?php endif;  ?>
                    <?php if (isset($blog['text']) && !empty($blog['text'])) : ?>
                    <div class="fs-content__text fs-height-js">
                        <?php echo wp_kses_post($blog['text']);  ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach;  ?>
                
            </div>
            <div class="fs-button__wrap">
                <div class="fs-swiper-button-prev"><span class="fs-icon fs-icon-angle-left"></span></div>
                <div class="fs-swiper-button-next"><span class="fs-icon fs-icon-angle-right"></span></div>
            </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php endif ?>
