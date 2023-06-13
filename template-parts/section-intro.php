
<?php 
$content = get_sub_field('intro_settings');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
?>
<section class="fs-section fs-intro fs-viewport <?php echo esc_attr((!empty($section_class)) ? $section_class : ''); ?>" <?php echo $section_id ?>>
    <div class="fs-container">
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
        <?php if (isset($content['feature_post']) && !empty($content['feature_post'])) : ?>
        <div class="fs-intro__block">
            <div class="fs-intro__bg" style="background-image: url(<?php echo $content['feature_post']['image'] ?>)"></div>
            <div class="fs-intro__block-txt fs-fade-left">
                <?php if (isset($content['feature_post']['text']) && !empty($content['feature_post']['text'])) : ?>
                <h3><?php echo esc_html($content['feature_post']['text']) ?></h3>
                <?php endif ?>
                <?php if (isset($content['feature_post']['button']) && !empty($content['feature_post']['button'])) : ?>
                    <a class="fs-btn fs-btn--arrow" href="<?php echo (!empty($content['button']['url'])) ? $content['button']['url'] : '#'; ?>" <?php echo (!empty($content['button']['target'])) ? 'target="_blank"' : ''; ?>>
                        <?php echo (!empty($content['feature_post']['button']['title'])) ? $content['feature_post']['button']['title'] : 'button'; ?>
                        <span class="fs-icon fs-icon-arrow-right"></span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <?php endif ?>
        <?php if (isset($content['post_heading']) && !empty($content['post_heading'])) : ?>
            <div class="fs-heading fs-heading-small fs-viewport fs-fade-up">
                <h2><?php echo esc_html($content['post_heading'])?></h2>
            </div>
        <?php endif ?>
        <?php if (isset($content['posts']) && !empty($content['posts'])) : ?>
        <div class="fs-intro__list fs-viewport">
            <?php foreach ($content['posts'] as $index=>$item): ?>
            <div class="fs-intro__item fs-fade-up fs-delay-<?php echo $index+1;?>">
                <div class="fs-intro__hold">
                    <?php if (isset($item['link']) && !empty($item['link'])) : ?>
                    <a href="<?php echo $item['link'] ?>">
                    <?php endif; ?>
                        <div class="fs-intro__img">
                            <?php if (isset($item['image']) && !empty($item['image'])) : ?>
                                <?php echo wp_get_attachment_image($item['image'], '300x200'); ?>
                            <?php endif; ?>
                        </div>
                        <div class="fs-intro__text">
                            <?php if (isset($item['sub_heading']) && !empty($item['sub_heading'])) : ?>
                            <span class="fs-intro__title"><?php echo esc_html($item['sub_heading']) ?></span>
                            <?php endif; ?>
                            <?php if (isset($item['heading']) && !empty($item['heading'])) : ?>
                                <h3><?php echo esc_html($item['heading']) ?></h3>
                            <?php endif; ?>
                           
                        </div>
                    <?php if (isset($item['link']) && !empty($item['link'])) : ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <?php if (isset($content['button']) && !empty($content['button'])) : ?>
        <div class="fs-intro__btn">
            <a class="fs-btn fs-btn--arrow" href="<?php echo (!empty($content['button']['url'])) ? $content['button']['url'] : '#'; ?>" <?php echo (!empty($content['button']['target'])) ? 'target="_blank"' : ''; ?>>
                <?php echo (!empty($content['button']['title'])) ? $content['button']['title'] : 'button'; ?>
                <span class="fs-icon fs-icon-arrow-right"></span>
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif ?>

