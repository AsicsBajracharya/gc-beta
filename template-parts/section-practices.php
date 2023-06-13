
<?php 
$content = get_sub_field('practices_settings');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
?>
<section class="fs-section fs-viewport fs-practices fs-fade-up <?php echo esc_attr((!empty($section_class)) ? $section_class : ''); ?>" <?php echo $section_id ?>>
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
    </div>
    <?php if (isset($content['slides']) && !empty($content['slides'])) : ?>
    <div class="fs-swiper fs-practices__slider">
        <div class="fs-swiper-wrapper">
            <?php foreach ($content['slides'] as $index=>$item) : ?>
            <div class="fs-swiper-slide">
                <div class="fs-practices__img" style="background-image: url(<?php echo $item['image'] ?>);">
                <?php if (isset($item['video_url']) && !empty($item['video_url'])) : ?>
                <a href="<?php echo esc_html($item['video_url']) ?>" class="glightbox fs-btn-play"></a>
                <?php endif ?>
                </div>
                <div class="fs-practices__text">
                <span class="fs-practices__num"><?php echo $index+1 ?></span>
                <div class="fs-practices__wrap">
                    <?php if (isset($item['title']) && !empty($item['title'])) : ?>
                    <span class="fs-practices__title"><?php echo esc_html($item['title']) ?></span>
                    <?php endif; ?>
                    <?php if (isset($item['description']) && !empty($item['description'])) : ?>
                        <?php echo wp_kses_post($item['description']) ?>
                    <?php endif; ?>
                    <?php if (isset($item['link']) && !empty($item['link'])) : ?>
                    <a href="<?php echo esc_html($item['link']) ?>" class="fs-btn-more">Read More <span class="fs-icon fs-icon-arrow-small"></span></a>
                    <?php endif; ?>
                </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <?php endif; ?>
    <div class="fs-practices__row">
        <?php if (isset($content['info_list']) && !empty($content['info_list'])) : ?>
        <div class="fs-practices__hold">
            <?php foreach ($content['info_list'] as $item) : ?>
            <div class="fs-practices__row-text fs-fade-left">
                <?php if (isset($item['number']) && !empty($item['number'])) : ?>
                <span class="fs-practices__row-num"><?php  echo esc_html($item['number'])?></span>
                <?php endif; ?>
                <?php if (isset($item['text']) && !empty($item['text'])) : ?>
                <span class="fs-practices__txt"><?php  echo wp_kses_post($item['text'])?></span>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <div class="fs-practices__btn fs-fade-right">
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

