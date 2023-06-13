<?php 
$content = get_sub_field('strategic_imperative_section');
$current_user_id = get_current_user_id();
$user_industry = get_field('industry', 'user_' . $current_user_id, false);
//$user_industry = get_field('industry', 'user_218', false);


if ($content['enable_disable']) : 
  $si_args = array(
  'post_type' => 'strategic_imperative',
  'posts_per_page' => -1,
  );        
  $query_result = new WP_Query($si_args);
  $strategic_imperatives = array();
  foreach($query_result->posts as $data){
    $post_meta_data = get_post_meta($data->ID);        
    $current_date = date_create(date("m/d/Y"));        
    $publishing_date = date_create($post_meta_data['post_publishing_date'][0]);        
    $interval = date_diff($publishing_date, $current_date);
    $days_interval = $interval->days;    
    if($days_interval == 0){
          array_push($strategic_imperatives, $data);
    }
  }
  $quote_list =  get_field('daily_quote_list', 'option');
  $quote_background_image =  get_field('daily_quote_background_image', 'option');
  json_encode($quote_list);  
  //print_r($quote_list);
  $daliy_quote = array();
   foreach($quote_list as $quote_data){
       $current_date = date_create(date("m/d/Y"));       
       $quote_date = date_create($quote_data['quote_date']);
       $interval = date_diff($quote_date, $current_date);
       $days_interval = $interval->days;
       if($days_interval == 0){
        array_push($daliy_quote, $quote_data);
       }
   }
  //array_push($strategic_imperatives, $daliy_quote);
  
  // echo"<pre>";
  // print_r($strategic_imperatives); die;

if( !empty( $strategic_imperatives ) || !empty($daliy_quote) )  : ?>

<section class="section-hero-outer">
    <div class="section-hero ">
        <?php 
    if(!empty( $strategic_imperatives )) :         
      foreach ( $strategic_imperatives  as $value) :      
        if(get_field('industry',$value->ID) == $user_industry) :   
    ?>

        <div class="section-hero slider-1 slider">
            <div class="slider-single-main"
                style="background-image: url('<?php echo isset($value->background_image) ? $value->background_image  :  get_the_post_thumbnail_url($value->ID, 'full'); ?> ')">
                <div class="container">
                    <div class="content-container">
                        <div class="text-box" data-aos="fade-up">
                            <?php if (isset($value->post_content ) && !empty($value->post_content )) : ?>
                            <div class="text-box_primary dashed" data-aos="fade-up">
                                <h1>
                                    <?php echo $value->post_content ?>
                                </h1>
                            </div>
                            <?php endif; ?>

                            <?php if (isset($value->post_title) && !empty($value->post_title)) : ?>
                            <div class="text-box_secondary" data-aos="fade-up" data-aos-delay="100">
                                <h2> <?php echo $value->post_title ?></h2>
                            </div>
                            <?php endif; ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php
    endif;
        
endforeach;
      endif;
      ?>
        <?php if(!empty($daliy_quote)) :  ?>
        <div class="section-hero slider-1 slider">
            <div class="slider-single-main" style="background-image: url('<?php echo $quote_background_image  ?> ')">
                <div class="container">
                    <div class="content-container">
                        <div class="text-box" data-aos="fade-up">
                            <?php if (isset($daliy_quote[0]['daily_quote']) && !empty($daliy_quote[0]['daily_quote'])) : ?>
                            <div class="text-box_primary dashed" data-aos="fade-up">
                                <h1>
                                    <?php echo  $daliy_quote[0]['daily_quote'] ?>
                                </h1>
                            </div>
                            <?php endif; ?>

                            <?php if (isset($daliy_quote[0]['quote_author']) && !empty($daliy_quote[0]['quote_author'])) : ?>
                            <div class="text-box_secondary" data-aos="fade-up" data-aos-delay="100">
                                <h2> <?php echo  $daliy_quote[0]['quote_author'] ?></h2>
                            </div>
                            <?php endif; ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

    </div>
    <div class="button-container">
        <?php if (isset($content['button']['title']) && !empty($content['button']['title'])) : ?>
        <button class="btn btn-primary btn-arrow btn-arrow-no-move">
            <?php echo $content['button']['title'] ?>
            <span class="btn-icon">
                <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

            </span>
        </button>
        <?php endif; ?>

    </div>

</section>


<?php 
endif; 
endif; 
?>