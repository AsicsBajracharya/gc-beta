
<?php 
$content = get_sub_field('road_settings');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
?>
<section class="fs-section fs-viewport fs-road <?php echo esc_attr((!empty($section_class)) ? $section_class : ''); ?>" <?php echo $section_id ?>>
    <div class="fs-container fs-fade-up">
        <div class="fs-heading" >
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
            <div class="fs-road__img">
                <div class="fs-road__wrap">
                <?php if (isset($content['circle_image']) && !empty($content['circle_image'])) : ?>
                    <?php echo wp_get_attachment_image($content['circle_image'], ''); ?>
                <?php endif; ?>
                <div class="fs-road__community">
                    <?php if (isset($content['first_text']) && !empty($content['first_text'])) : ?>
                    <a  class="fs-road__link" href="<?php echo (!empty($content['first_text']['url'])) ? $content['first_text']['url'] : '#'; ?>" <?php echo (!empty($content['first_text']['target'])) ? 'target="_blank"' : ''; ?>>
                        <span class="fs-road__title"><?php echo (!empty($content['first_text']['title'])) ? $content['first_text']['title'] : 'link'; ?></span>   
                        <span class="fs-road-more">Learn More <span class="fs-icon-arrow"></span></span>
                    </a>
                    <?php endif; ?>
                    <div class="fs-tooltip">
                    <?php if (isset($content['first_anchor_list']) && !empty($content['first_anchor_list'])) : ?>
                        <ul>
                            <?php foreach ($content['first_anchor_list'] as $link) : ?>
                            <li>
                                <a href="<?php echo (!empty($link['link']['url'])) ? $link['link']['url'] : '#'; ?>" <?php echo (!empty($link['link']['target'])) ? 'target="_blank"' : ''; ?>>
                                    <?php echo (!empty($link['link']['title'])) ? $link['link']['title'] : 'link'; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="fs-road__content">
                    <?php if (isset($content['second_text']) && !empty($content['second_text'])) : ?>
                     <a  class="fs-road__link" href="<?php echo (!empty($content['second_text']['url'])) ? $content['second_text']['url'] : '#'; ?>" <?php echo (!empty($content['second_text']['target'])) ? 'target="_blank"' : ''; ?>>
                        <span class="fs-road__title"><?php echo (!empty($content['second_text']['title'])) ? $content['second_text']['title'] : 'link'; ?></span>   
                        <span class="fs-road-more">Learn More <span class="fs-icon-arrow"></span></span>
                    </a>
                    <?php endif; ?>
                  <div class="fs-tooltip">
                  <?php if (isset($content['second_anchor_list']) && !empty($content['second_anchor_list'])) : ?>
                        <ul>
                            <?php foreach ($content['second_anchor_list'] as $link) : ?>
                            <li>
                                <a href="<?php echo (!empty($link['link']['url'])) ? $link['link']['url'] : '#'; ?>" <?php echo (!empty($link['link']['target'])) ? 'target="_blank"' : ''; ?>>
                                    <?php echo (!empty($link['link']['title'])) ? $link['link']['title'] : 'link'; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                  <?php endif; ?>
                  </div>
                </div>
                <div class="fs-road__coaching">
                    <?php if (isset($content['third_text']) && !empty($content['third_text'])) : ?>
                     <a  class="fs-road__link" href="<?php echo (!empty($content['third_text']['url'])) ? $content['third_text']['url'] : '#'; ?>" <?php echo (!empty($content['third_text']['target'])) ? 'target="_blank"' : ''; ?>>
                        <span class="fs-road__title"><?php echo (!empty($content['third_text']['title'])) ? $content['third_text']['title'] : 'link'; ?></span>   
                        <span class="fs-road-more">Learn More <span class="fs-icon-arrow"></span></span>
                    </a>
                    <?php endif; ?>
                  <div class="fs-tooltip">
                  <?php if (isset($content['third_anchor_list']) && !empty($content['third_anchor_list'])) : ?>
                        <ul>
                            <?php foreach ($content['third_anchor_list'] as $link) : ?>
                            <li>
                                <a href="<?php echo (!empty($link['link']['url'])) ? $link['link']['url'] : '#'; ?>" <?php echo (!empty($link['link']['target'])) ? 'target="_blank"' : ''; ?>>
                                    <?php echo (!empty($link['link']['title'])) ? $link['link']['title'] : 'link'; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                  <?php endif; ?>
                  </div>
                </div>
                <div class="fs-road__main">
                    <?php if (isset($content['center_title']) && !empty($content['center_title'])) : ?>
                  <span class="fs-road__main-txt"><?php echo esc_html($content['center_title'])  ?> </span>
                  <?php endif; ?>
                  <?php if (isset($content['center_text']) && !empty($content['center_text'])) : ?>
                  <span class="fs-road__main-desc"><?php echo esc_html($content['center_text'])  ?></span>
                  <?php endif; ?>
                </div>
                 
                </div>
            </div>
    </div>
</section>
<?php endif ?>
