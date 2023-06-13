
<?php 
$content = get_sub_field('expert_settings');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
?>
<section class="fs-section fs-viewport fs-expert <?php echo esc_attr((!empty($section_class)) ? $section_class : ''); ?>" <?php echo $section_id ?>>
    <div class="fs-container">
        <div class="fs-expert__block">
        <?php if (isset($content['text']) && !empty($content['text'])) : ?>
        <div class="fs-expert__text fs-fade-left">
            <?php echo wp_kses_post($content['text']) ?>
        </div>
        <?php endif; ?>
        <?php if (isset($content['team_list']) && !empty($content['team_list'])) : ?>
            <ul class="fs-expert__list fs-fade-right">
                <?php foreach ($content['team_list'] as $index=>$team): ?>
                    <li class="fs-expert__item">
                        <?php if (isset($team['image']) && !empty($team['image'])) : ?>
                        <div class="fs-expert__img">
                            <?php echo wp_get_attachment_image($team['image'], '95x95'); ?>
                        </div>
                        <?php endif ?>
                        <div class="fs-expert__info">
                            <?php if (isset($team['title']) && !empty($team['title'])) : ?>
                            <span class="fs-expert__title"><?php echo esc_html($team['title']) ?></span>
                            <?php endif ?>
                            <?php if (isset($team['designation']) && !empty($team['designation'])) : ?>
                            <span class="fs-expert__description"><?php echo esc_html($team['designation']) ?></span>
                            <?php endif ?>
                            <?php if (isset($team['email']) && !empty($team['email'])) : ?>
                            <div><a href="mailto:<?php echo esc_html($team['email']) ?>" class="fs-read-more"><?php echo esc_html($team['email']) ?> <span class="fs-icon fs-icon-arrow-small"></span><span class="fs-btn-arrow-right"></span></a></div>
                            <?php endif ?>
                            <?php if (isset($team['linkedin']) && !empty($team['linkedin'])) : ?>
                            <a href="<?php echo esc_html($team['linkedin']) ?>" class="fs-linkedin" target="_blank"><span class="fs-icon fs-icon-linkedin"></span></a>
                            <?php endif ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        </div>
    </div>
</section>
<?php endif ?>


