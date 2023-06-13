
<?php 
$content = get_sub_field('news_settings');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
?>
<section class="fs-section fs-viewport fs-news <?php echo esc_attr((!empty($section_class)) ? $section_class : ''); ?>" <?php echo $section_id ?>>
    <div class="fs-news__wrap fs-fade-up">
        <div class="fs-container">
        <?php if (isset($content['heading']) && !empty($content['heading'])) : ?>
        <div class="fs-news__txt"><?php echo esc_html($content['heading']) ?></div>
        <?php endif; ?>
        <?php if (isset($content['news']) && !empty($content['news'])) : ?>
        <div class="fs-news__wrapper">
            <div class="fs-swiper fs-swiper__tabset fs-tabset">
            <div class="fs-swiper-wrapper">
                <?php foreach($content['news'] as $news): ?>
                <div class="fs-swiper-slide">
                    <div class="fs-news__item">
                        <div class="fs-news__link"> 
                            <?php if (isset($news['image']) && !empty($news['image'])) : ?>
                            <?php echo wp_get_attachment_image($news['image'], '150x84'); ?>
                            <?php endif; ?>
                            <div class="fs-news__text">
                                <?php if (isset($news['title']) && !empty($news['title'])) : ?>
                                <p><?php echo esc_html($news['title']) ?></p>
                                <?php endif; ?>
                                <?php if (isset($news['info_text']) && !empty($news['info_text'])) : ?>
                                <span class="fs-news__info"><?php echo esc_html($news['info_text']) ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="fs-swiper-button-prev"><span class="fs-icon fs-icon-angle-left"></span></div>
            <div class="fs-swiper-button-next"><span class="fs-icon fs-icon-angle-right"></span></div>
            </div>
        </div>
        </div>
    </div>
    <div class="fs-news__content fs-fade-up">
        <div class="fs-container">
            <div class="fs-tab-content">
                 <?php foreach($content['news'] as $news): ?>
                <div class="fs-tab" id="tab1">
                    <?php if (isset($news['title']) && !empty($news['title'])) : ?>
                    <h2 class="fs-tab__title"><?php echo $news['title'] ?></h2>
                    <?php endif; ?>
                    <?php if (isset($news['text']) && !empty($news['text'])) : ?>
                        <?php echo wp_kses_post($news['text']) ?>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>

<?php endif ?>

