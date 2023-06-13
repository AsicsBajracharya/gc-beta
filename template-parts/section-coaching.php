
<?php 
$content = get_sub_field('coaching_settings');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
?>
<section class="fs-section fs-viewport fs-hero <?php echo esc_attr((!empty($section_class)) ? $section_class : ''); ?>" <?php echo $section_id ?>>
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
        <div class="fs-hero__text">
            <div class="fs-hero__wrap">
                <?php echo wp_kses_post($content['text']) ?>
            </div>
            <?php if (isset($content['button']) && !empty($content['button'])) : ?>
                <a class="fs-btn fs-btn--arrow" href="<?php echo (!empty($content['button']['url'])) ? $content['button']['url'] : '#'; ?>" <?php echo (!empty($content['button']['target'])) ? 'target="_blank"' : ''; ?>>
                    <?php echo (!empty($content['button']['title'])) ? $content['button']['title'] : 'button'; ?>
                    <span class="fs-icon fs-icon-arrow-right"></span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif ?>

