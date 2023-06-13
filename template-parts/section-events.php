<?php 
$content = get_sub_field('events_listing_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
   
?>
<p class='form-submit'>
    <input name='message_read' type='submit' class='submit button mark-as-read' value='Fetch Events' />
</p>
<?php
endif;