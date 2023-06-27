<?php 
$content = get_sub_field('growth_content_section');
$article = get_sub_field('growth_content_articles_section');
$generator = get_sub_field('growth_generator');
$subscription = get_sub_field('growth_subscription');

$current_user_id = get_current_user_id();

$user_industry = get_field('industry', 'user_' . $current_user_id, false);
$user_area_of_interest = get_field('areas_of_interests','user_' . $current_user_id, false);
$user_region = get_field('region','user_' . $current_user_id, false);
$subscription_plan = get_field('subscribed_plans', 'user_' . $current_user_id, false);

// $user_industry = get_field('industry', 'user_218', false);
// $user_area_of_interest = get_field('areas_of_interests', 'user_218', false);
// $user_region = get_field('region', 'user_218', false);
// $subscription_plan = get_field('subscribed_plans', 'user_218', false);


//  print_r($user_industry);
//  print_r($user_area_of_interest);
// print_r($user_region);
// print_r($subscription_plan);
   
     $args = array(
            'post_type' => 'kb',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'orderby' => 'publish_date',
            'order'   => 'DESC',
            'meta_query' => array(
                'relation' => 'AND',
                array(
                    'key' => 'content_library_region',
                    'value' => sanitize_text_field($user_region),
                    'compare' => 'LIKE'
                ),
            )
        );
   
   
        $query_result = new WP_Query($args);
        if (!is_wp_error($query_result)) {
        $content_libraries = array();
        $personalised_content_libraries = array();
        $highlighted_content = array();     
        foreach( $query_result->posts as $content_library ) :           
          $content_library_meta = get_post_meta($content_library->ID);      
          $content_library_aoi = !empty($content_library_meta['content_library_area_of_interest'][0]) ? unserialize($content_library_meta['content_library_area_of_interest'][0]) : '' ;
          $intersect= ( !empty($user_area_of_interest) && !empty($content_library_aoi) ) ? array_intersect($content_library_aoi,$user_area_of_interest) : ''; 
           
        if( (isset($user_industry) && !empty($user_industry) && $user_industry !== 'None' ) || ( !empty( $user_area_of_interest) && isset($user_area_of_interest)) ) :
            if($content_library_meta['content_library_industry'][0] == $user_industry || !empty($intersect)) :
                $content_library_details = array();
                $content_library_details['ID'] = $content_library->ID;
                $content_library_details['title'] = $content_library->post_title;
                $content_library_details['description'] =  $content_library->post_content;
                $content_library_details['content'] =  get_field('landing_page_description',$content_library->ID);
                $content_library_details['post_name'] =  $content_library->post_name;
                $content_library_details['guid'] =  $content_library->guid;
                $content_library_details['post_date'] =  $content_library->post_date;
                $content_library_details['post_date_gmt'] =  $content_library->post_date_gmt;            
                $content_library_details['image'] =  get_the_post_thumbnail_url($content_library->ID);                       
                $content_library_details['content_library_meta'] = $content_library_meta;         
                if($content_library_meta['highlighted_article'] && $content_library_meta['highlighted_article'][0] == 1 ) :
                    array_push($highlighted_content, $content_library_details);                                     
                else :                  
                    array_push($personalised_content_libraries, $content_library_details);               
                endif;
            endif;          
            
        else :
                $content_library_details = array();
                $content_library_details['ID'] = $content_library->ID;
                $content_library_details['title'] = $content_library->post_title;
                $content_library_details['description'] =  $content_library->post_content;
                $content_library_details['content'] =  get_field('landing_page_description',$content_library->ID);
                $content_library_details['post_name'] =  $content_library->post_name;
                $content_library_details['guid'] =  $content_library->guid;
                $content_library_details['post_date'] =  $content_library->post_date;
                $content_library_details['post_date_gmt'] =  $content_library->post_date_gmt;            
                $content_library_details['image'] =  get_the_post_thumbnail_url($content_library->ID);                       
                $content_library_details['content_library_meta'] = $content_library_meta;         
                if($content_library_meta['highlighted_article'] && $content_library_meta['highlighted_article'][0] == 1 ) :
                    array_push($highlighted_content, $content_library_details);                                     
                else :                  
                    array_push($content_libraries, $content_library_details);               
                endif;
               
        endif;               
        endforeach;

        if( (isset($user_industry) && !empty($user_industry) && $user_industry !== 'None' ) || ( !empty( $user_area_of_interest) && isset($user_area_of_interest)) ) :
            $all_contents = $personalised_content_libraries;
            else :
                $all_contents = $content_libraries;
            endif;



     // print_r(count($content_libraries));

        // echo "<pre>";
        // print_r($content_libraries);
        // while( $query_result->have_posts() ) : $query_result->the_post();
        //     $common_intererst=array_intersect(get_field('content_library_area_of_interest'),$user_area_of_interest);
        //     if(get_field('content_library_industry') == $user_industry && !empty( $common_intererst) && get_field('content_library_region') == $user_region){
        //         $content_library = array();
        //         $content_library['ID'] = get_the_ID();
        //         $content_library['title'] = get_the_title();
        //         $content_library['content'] =  get_the_content(); 
        //         $content_library['industry'] = get_field('critical_issue_industry');
        //         $content_library['area_of_interest'] = get_field('content_library_area_of_interest');  
        //         $content_library['description'] =  get_field('landing_page_description');
        //         $content_library['image'] =  get_field('landing_page_image');       
        //         $content_library['region'] = get_field('content_library_region');
        //         $content_library['published_date'] =  get_the_date();          
        //         $content_library['featured_img_url'] = get_the_post_thumbnail_url(get_the_ID(), 'full');
        //         if(get_field('highlighted_article') == 1 ) :
        //             array_push($highlighted_content, $content_library);
        //         else :                   
        //         array_push($content_libraries, $content_library);
        //         endif;
        //     }
        // endwhile;
    } 
    
    // echo "<pre>";
    // print_r($highlighted_content);

       
?>
<section class="section-growth-content-articles" style="background-image: url('<?php echo $content['background_image']?>')
      ">
    <?php if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : ''; 
   
?>
    <?php if(!empty($all_contents)) : ?>
    <div class="header-box-outer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-box-inner">
                        <h1>Growth Content</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="button-container d-flex">
                        <a href=" <?php echo $content['button']['url'] ?>"><button
                                class="btn btn-primary btn-small btn-arrow btn-arrow-move">
                                <?php echo $content['button']['title'] ?>
                                <span class="btn-icon">
                                    <svg viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                </span>
                            </button>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="growth-content-articles-main">
        <?php if(!empty($highlighted_content)) : ?>
        <div class="article-main-container-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="article-main-container" style="
                    background-image: url('<?php if (isset($highlighted_content[0]['image']) && !empty($highlighted_content[0]['image'])) : echo $highlighted_content[0]['image'];  endif; ?>');
                  ">
                            <div class="content-container">
                                <?php if (isset($content['button']) && !empty($content['button'])) : ?>
                                <div class="pill">
                                    <p><?php $date=date_create($highlighted_content[0]['post_date']); echo date_format($date,"jS F, Y"); ?>
                                    </p>
                                </div>
                                <?php endif; ?>
                                <?php if (isset($highlighted_content[0]['title']) && !empty($highlighted_content[0]['title'])) : ?>
                                <div class="header-box text-white">
                                    <h1>
                                        <?php echo $highlighted_content[0]['title']?>
                                    </h1>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php if(!empty($all_contents)) : ?>
                    <div class="col-md-4">
                        <div class="mini-article-container d-flex flex-column">
                            <?php foreach ($all_contents as  $value) : ?>
                            <div class="mini-article content-container">
                                <div class="content-container-inner">

                                    <?php if(!empty($value['post_date'])) : ?>
                                    <div class="pill">
                                        <p><?php $date=date_create($value['post_date']); echo date_format($date,"jS F, Y"); ?>
                                        </p>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (isset($value['title']) && !empty($value['title'])) : ?>
                                    <div class="header-box">
                                        <h3>
                                            <?php echo $value['title']?>
                                        </h3>
                                    </div>
                                    <?php endif; ?>

                                    <?php if (isset($value['content']) && !empty($value['content'])) : ?>
                                    <div class="text-box">
                                        <p>
                                            <?php echo $value['content']?>
                                        </p>
                                    </div>
                                    <?php endif; ?>

                                    <?php if (isset($value['post_name']) && !empty($value['post_name'])) : ?>
                                    <div class="read-more">
                                        <a href="<?php echo get_home_url()."/content-library/".$value['post_name']; ?>">
                                            <p>Read More &rarr;</p>
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                           
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; endif; ?>

        <?php     if ($article['enable_disable']) :
    $article_class = $article['custom_classes'];
    $article_id = (!empty($article['section_id'])) ? 'id="'. $article['section_id'] .'"' : '';   

?>
        <div class="container">
            <div class="growth-content-article-slider">
                <?php foreach ($article['slides'] as  $value) : ?>
                <div class="slide-item">
                    <?php if (isset($value['article_image']) && !empty($value['article_image'])) : ?>
                    <div class="image-container">
                        <img src="<?php echo $value['article_image']?>" alt="" />
                    </div>
                    <?php endif; ?>

                    <div class="content-container">
                        <div class="content-top">
                            <?php if (isset($value['article_date']) && !empty($value['article_date'])) : ?>
                            <div class="caption date">
                                <p><?php echo $value['article_date']?></p>
                            </div>
                            <?php endif; ?>
                            <?php if (isset($value['article_heading']) && !empty($value['article_heading'])) : ?>
                            <div class="text-box">
                                <p>
                                    <?php echo $value['article_heading']?>
                                </p>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="content-bottom">
                            <div class="button-container">
                                <?php if (isset($article['slide_button_text']) && !empty($article['slide_button_text'])) : ?>
                                <button class="btn btn-primary btn-transparent btn-small btn-transparent-arrow-no-move">
                                    <?php echo $article['slide_button_text']?>
                                    <span class="btn-icon">
                                        <svg width="8" height="13" viewBox="0 0 8 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.75 0.875L6.375 6.5L0.75 12.125" stroke="" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="slide-item">
                    <div class="image-container">
                        <img src="https://dev.gilcouncil.com/wp-content/uploads/2023/05/Rectangle-112.png" alt="" />
                    </div>
                    <div class="content-container">
                        <div class="content-top">
                            <div class="caption date">
                                <p>May 27, 2023</p>
                            </div>
                            <div class="text-box">
                                <p>
                                    2023: Case History on Digital Transformation: The Post-it®
                                    Journey
                                </p>
                            </div>
                        </div>
                        <div class="content-bottom">
                            <div class="button-container">
                                <button class="btn btn-primary btn-transparent btn-small btn-transparent-arrow-no-move">
                                    Read More
                                    <span class="btn-icon">
                                        <svg width="8" height="13" viewBox="0 0 8 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.75 0.875L6.375 6.5L0.75 12.125" stroke="" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-container">
                        <img src="https://dev.gilcouncil.com/wp-content/uploads/2023/05/Rectangle-212.png" alt="" />
                    </div>
                    <div class="content-container">
                        <div class="content-top">
                            <div class="caption date">
                                <p>May 29, 2023</p>
                            </div>
                            <div class="text-box">
                                <p>2023: Case History on Digital</p>
                            </div>
                        </div>
                        <div class="content-bottom">
                            <div class="button-container">
                                <button class="btn btn-primary btn-transparent btn-small btn-transparent-arrow-no-move">
                                    Read More
                                    <span class="btn-icon">
                                        <svg width="8" height="13" viewBox="0 0 8 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.75 0.875L6.375 6.5L0.75 12.125" stroke="" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-container">
                        <img src="https://dev.gilcouncil.com/wp-content/uploads/2023/05/Rectangle-12-1.jpg" alt="" />
                    </div>
                    <div class="content-container">
                        <div class="content-top">
                            <div class="caption date">
                                <p>May 29, 2023</p>
                            </div>
                            <div class="text-box">
                                <p>
                                    2023: Case History on Digital Transformation: The Post-it®
                                    Journey
                                </p>
                            </div>
                        </div>
                        <div class="content-bottom">
                            <div class="button-container">
                                <button class="btn btn-primary btn-transparent btn-small btn-transparent-arrow-no-move">
                                    Read More
                                    <span class="btn-icon">
                                        <svg width="8" height="13" viewBox="0 0 8 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.75 0.875L6.375 6.5L0.75 12.125" stroke="" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> -->
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php endif; ?>
    <?php     if ($subscription['enable_disable']) :
    $subscription_class = $subscription['custom_classes'];
    $subscription_id = (!empty($subscription['section_id'])) ? 'id="'. $subscription['section_id'] .'"' : '';   
?>
    <?php if (isset($subscription_plan) && !empty($subscription_plan)) : ?>
    <div class="frost-subscriptions">
        <div class="container">
            <div class="row">
                <?php if (isset($subscription['heading']) && !empty($subscription['heading'])) : ?>
                <div class="col-md-4 offset-md-2">
                    <div class="header-box">
                        <h2><?php echo $subscription['heading']?></h2>
                    </div>
                </div>
                <?php endif; ?>


                <div class="row">
                    <?php foreach($subscription_plan as  $value) : 
                        $link = get_field('link',$value) ?>
                    <div class="col">
                        <div class="image-container">
                            <a href="<?php echo $link['url'];  ?>"><img
                                    src="<?php echo get_the_post_thumbnail_url($value); ?>" alt="" /></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
</section>