
<?php 
$content = get_sub_field('feature_settings');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
?>
<section class="fs-section fs-viewport fs-feature <?php echo esc_attr((!empty($section_class)) ? $section_class : ''); ?>" <?php echo $section_id ?>>
    <div class="fs-container">
        <div class="fs-heading fs-fade-up">
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
        <?php if (isset($content['feature_list']) && !empty($content['feature_list'])) : ?>
        <div class="fs-feature__list">
            <?php foreach ($content['feature_list'] as $index=>$item): ?>
            <div class="fs-feature__item fs-fade-up fs-delay-<?php echo $index+1 ?>">
                <div class="fs-feature__img">
                    <?php if (isset($item['image']) && !empty($item['image'])) : ?>
                        <?php echo wp_get_attachment_image($item['image'], ''); ?>
                    <?php endif; ?>
                </div>
                <?php if (isset($item['title']) && !empty($item['title'])) : ?>
                <span class="fs-feature__title"><?php echo esc_html($item['title']) ?></span>
                <?php endif; ?>
                <?php if (isset($item['description']) && !empty($item['description'])) : ?>
                    <p><?php echo esc_html($item['description']) ?></p>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif ?>
    </div>
</section>
<?php endif ?>

