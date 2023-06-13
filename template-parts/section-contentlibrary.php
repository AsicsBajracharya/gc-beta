
<?php 
$content = get_sub_field('growth_content_section');
$current_user_id = get_current_user_id();
$user_industry = get_field('industry', 'user_' . $current_user_id, false);
$user_area_of_interest = get_field('areas_of_interests', 'user_' . $current_user_id, false);
$user_region = get_field('region', 'user_' . $current_user_id, false);
 $args = array(
        'post_type' => 'kb',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'orderby' => 'publish_date',
        'order'   => 'DESC',
    );   
    $query_result = new WP_Query($args);
    // if (!is_wp_error($query_result)) {
    $content_libraries = array();
    while( $query_result->have_posts() ) : $query_result->the_post();
    $common_intererst=array_intersect(get_field('content_library_area_of_interest'),$user_area_of_interest);
    if(get_field('content_library_industry') == $user_industry && !empty( $common_intererst) && get_field('content_library_region') == $user_region){
            $content_library = array();
            $content_library['ID'] = get_the_ID();
            $content_library['title'] = get_the_title();
            $content_library['content'] =  get_the_content(); 
            $content_library['industry'] = get_field('critical_issue_industry');
            $content_library['published_date'] =  get_the_date();          
            $content_library['featured_img_url'] = get_the_post_thumbnail_url(get_the_ID(), 'full');         
            array_push($content_libraries, $content_library);
        }
    endwhile;  
    // array_push($contents, );

      
echo "<pre/>";
die;


if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
?>
<section class="fs-section fs-viewport fs-growth <?php echo esc_attr((!empty($section_class)) ? $section_class : ''); ?>" <?php echo $section_id ?>>
    <div class="fs-container">
        <div class="fs-heading fs-fade-up">
        <?php if (isset($content['sub_heading']) && !empty($content['sub_heading'])) : ?>
            <span class="fs-heading__title"><?php echo esc_html($content['sub_heading']); ?></span>
        <?php endif; ?>
        <?php if (isset($content['heading']) && !empty($content['heading'])) : ?>
            <h2><?php echo esc_html($content['heading']); ?></h2>
        <?php endif; ?>
        <?php if (isset($content['heading_description']) && !empty($content['heading_description'])) : ?>
            <p><?php echo wp_kses_post($content['heading_description']); ?></p>
        <?php endif; ?>
        </div>
        <?php if (isset($content['posts']) && !empty($content['posts'])) : ?>
        <div class="fs-growth__list">
        <?php foreach ($content['posts'] as $index=>$blog) : ?>
        <div class="fs-growth__item fs-fade-up fs-delay-<?php $index+1 ?>">
            <?php if (isset($blog['link']) && !empty($blog['link'])) : ?>
            <a href="<?php echo $blog['link'] ?>">
            <?php else: ?>
            <div class="fs-growth__link">
            <?php endif; ?>
            <?php if (isset($blog['image']) && !empty($blog['image'])) : ?>
            <div class="fs-growth__img">
                <?php echo wp_get_attachment_image($blog['image'], '342x152'); ?>
            </div>
            <?php endif; ?>
            <div class="fs-growth__text">
                <?php if (isset($blog['text']) && !empty($blog['text'])) : ?>
                <h3 class="fs-growth__title"><?php echo $blog['text']; ?></h3>
                <?php endif; ?>
            </div>
            <?php if (isset($blog['link']) && !empty($blog['link'])) : ?>
            </a>
            <?php else: ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif ?>
