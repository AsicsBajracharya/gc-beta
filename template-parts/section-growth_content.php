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


// print_r($user_industry);
// print_r($user_area_of_interest);
// print_r($user_region);
// print_r($subscription_plan);die;
   
     $args = array(
            'post_type' => 'kb',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'orderby' => 'publish_date',
            'order'   => 'DESC',
        );
   
   
        $query_result = new WP_Query($args);
        if (!is_wp_error($query_result)) {
        $content_libraries = array();
        $highlighted_content = array();

        foreach( $query_result->posts as $content_library ) :
          $content_library_meta = get_post_meta($content_library->ID);
          $content_library_aoi = !empty($content_library_meta['content_library_area_of_interest'][0]) ? unserialize($content_library_meta['content_library_area_of_interest'][0]) : '' ;
          $intersect= ( !empty($user_area_of_interest) && !empty($content_library_aoi) ) ? array_intersect($content_library_aoi,$user_area_of_interest) : ''; 
       
        if( $content_library_meta['content_library_industry'][0] == $user_industry && $content_library_meta['content_library_region'][0] == $user_region && !empty($intersect) ) :     
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
<section class="section-growth-content-articles"
    style="background-image: url('<?php echo $content['background_image']?>')">
    <?php if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : ''; 
   
?>
    <?php if(!empty($content_libraries)) : ?>
    <div class="header-box-outer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-box-inner">
                        <h1>Growth Content</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="button-container d-flex justify-content-end">
                        <a href=" <?php echo $content['button']['url'] ?>"><button
                                class="btn btn-primary btn-transparent btn-small">
                                <?php echo $content['button']['title'] ?>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="growth-content-articles-main">
        <?php if(!empty($content_libraries)) : ?>
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

                    <div class="col-md-4">
                        <div class="mini-article-container d-flex flex-column">
                            <?php foreach ($content_libraries as  $value) : ?>
                            <div class="mini-article content-container">
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
                            <?php endforeach; ?>
                        </div>
                    </div>
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
                                <button class="btn btn-primary btn-transparent btn-small btn-transparent-arrow">
                                    <?php echo $article['slide_button_text']?>
                                </button>
                                <?php endif; ?>

                            </div>
                        </div>

                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php     if ($generator['enable_disable']) :
    $generator_class = $generator['custom_classes'];
    $generator_id = (!empty($generator['section_id'])) ? 'id="'. $generator['section_id'] .'"' : '';   
?>
    <div class="growth-generation-demo">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php if (isset($generator['image']) && !empty($generator['image'])) : ?>
                    <div class="image-container video-thumbnail" style="
                    background-image: url('<?php echo $generator['image']?>');
                  ">
                        <img src="<?php echo $generator['play_icon']?>" alt="" />
                    </div>
                    <?php endif; ?>

                </div>
                <div class="col-md-6">
                    <div class="content-container">
                        <?php if (isset($generator['heading']) && !empty($generator['heading'])) : ?>
                        <div class="header-box">
                            <h1><?php echo $generator['heading'] ?></h1>
                        </div>
                        <?php endif; ?>

                        <?php if (isset($generator['sub_heading']) && !empty($generator['sub_heading'])) : ?>
                        <div class="text-box">
                            <h2>
                                <?php echo $generator['sub_heading'] ?>
                            </h2>
                        </div>
                        <?php endif; ?>

                        <div class="button-container">
                            <?php if (isset($generator['button_text']) && !empty($generator['button_text'])) : ?>
                            <button class="btn btn-primary btn-small btn-arrow">
                                <?php echo $generator['button_text'] ?>
                            </button>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
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