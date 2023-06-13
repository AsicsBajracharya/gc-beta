
<?php 
$content = get_sub_field('navigation_settings');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
?>
<?php if (isset($content['links']) && !empty($content['links'])) : ?>
<section class="fs-section fs-scroll <?php echo esc_attr((!empty($section_class)) ? $section_class : ''); ?>" <?php echo $section_id ?> >
<a href="#" class="fs-scroll-opener">Strategic Imperative</a>

    <div class="fs-container">
        <ul class="fs-scroll__list">
        <?php
            foreach ($content['links'] as $link) :
            ?>
            <li>
                <?php if (isset($link['link']) && !empty($link['link'])) : ?>
                    <a href="<?php echo (!empty($link['link']['url'])) ? $link['link']['url'] : '#'; ?>" <?php echo (!empty($link['link']['target'])) ? 'target="_blank"' : ''; ?>>
                        <?php echo (!empty($link['link']['title'])) ? $link['link']['title'] : 'link'; ?>
                    </a>
                <?php endif; ?>
            </li>
            <?php
            endforeach;
        ?>
        </ul>
    </div>
</section>

<?php 
endif;
endif; 