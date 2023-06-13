
<?php 
$content = get_sub_field('form_settings');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
?>
<section class="fs-section fs-viewport fs-form <?php echo esc_attr((!empty($section_class)) ? $section_class : ''); ?>" <?php echo $section_id ?>>
    <div class="fs-container">
        <?php gravity_form( $content['form']['id'], false, false, false, '', false );?>
       
        
    </div>
</section>
<?php endif ?>

