<?php 
$content = get_sub_field('banner_settings');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $style = ($content['background_image'] !== 'none') ? 'style="background-image: url('. $content['background_image'] . ');"' : '';
?>
<section class="fs-section fs-viewport fs-banner <?php echo esc_attr((!empty($section_class)) ? $section_class : ''); ?>" <?php echo $style; echo $section_id; ?>>
    <div class="fs-container">
        <div class="fs-banner__wrap">
            <div class="fs-fade-up">
                <div class="fs-banner__text">
                <?php if (isset($content['sub_heading']) && !empty($content['sub_heading'])) : ?>
                    <span class="fs-title"><?php echo esc_html($content['sub_heading']); ?></span>
                <?php endif; ?>
                <?php if (isset($content['heading']) && !empty($content['heading'])) : ?>
                    <h1><?php echo esc_html($content['heading']); ?></h1>
                <?php endif; ?>
                </div>
                <?php if (isset($content['anchor_list']) && !empty($content['anchor_list'])) : ?>
                <ul class="fs-banner__list">
                    <?php foreach ($content['anchor_list'] as $link) : ?>
                    <li>
                        <?php if (isset($link['image']) && !empty($link['image'])) : ?>
                            <div class="fs-banner__img">
                            <?php if (isset($link['section_id']) && !empty($link['section_id'])) : ?>
                            <a href="<?php echo $link['section_id'] ?>" class="fs-scroller">
                            <?php endif ?>
                                <?php echo wp_get_attachment_image($link['image'], ''); ?>
                            <?php if (isset($link['section_id']) && !empty($link['section_id'])) : ?>
                            </a>
                            <?php endif ?>
                            </div>
                        <?php endif ?>
                        <?php if (isset($link['heading']) && !empty($link['heading'])) : ?>
                        <span class="fs-banner__title">
                        <?php echo $link['heading'] ?>
                        </span>
                        <?php endif ?>
                    </li>
                    <?php endforeach ?>
                </ul>
                <?php endif ?>
                <div class="fs-banner__btn">
                <?php if (isset($content['button']) && !empty($content['button'])) : ?>
                    <a class="fs-btn fs-btn--arrow fs-btn--xl" href="<?php echo (!empty($content['button']['url'])) ? $content['button']['url'] : '#'; ?>" <?php echo (!empty($content['button']['target'])) ? 'target="_blank"' : ''; ?>>
                        <?php echo (!empty($content['button']['title'])) ? $content['button']['title'] : 'button'; ?>
                        <span class="fs-icon fs-icon-arrow-right"></span>
                    </a>
                <?php endif; ?>
                </div>
                <?php if (isset($content['info_text']) && !empty($content['info_text'])) : ?>
                <span class="fs-banner__small"><?php echo $content['info_text'] ?></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php
endif;
