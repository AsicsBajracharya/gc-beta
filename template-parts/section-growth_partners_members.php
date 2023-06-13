<?php 
$content = get_sub_field('growth_partners_members');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $style = ($content['background_image'] !== 'none') ? 'style="background-image: url('. $content['background_image'] . ');"' : '';
?>
 <section class="section-growth-partners">
        <div class="header-box text-center" data-aos="fade-down">
            <h1><?php echo $content['heading'] ?></h1>
        </div>
        <div class="container">
            <ul class="partner-list">
            <?php foreach ($content['partners'] as  $value) : ?>
                <li class="partner-item">
                    <div class="image-container" data-aos="fade-left" data-aos-delay="500">
                        <img src="<?php echo $value['image'] ?>" alt="" />
                    </div>
                </li>  
                <?php endforeach; ?>             
            </ul>
        </div>
    </section>
<?php
endif;
