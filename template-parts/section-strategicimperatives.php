<?php 
$content = get_sub_field('strategic_imperative_section');
$current_user_id = get_current_user_id();
$user_industry = get_field('industry', 'user_' . $current_user_id, false);

if ($content['enable_disable']) : 
$si_args = array(
    'post_type' => 'strategic_imperative',
    'posts_per_page' => -1,
    'tax_query' => array(
        'relation' => 'AND',          
            array(
                'taxonomy' => 'strategic_imperative_tax',
                'field' => 'slug',
                'terms' => 'strategic-imperative',               
            )
        )
);
  
$gou_args = array(
    'post_type' => 'strategic_imperative',
    'posts_per_page' => -1,
    'tax_query' => array(
      'relation' => 'AND',          
        array(
            'taxonomy' => 'strategic_imperative_tax',
            'field' => 'slug',
            'terms' => 'gou',               
        )
    )
); 
    
  $query_result = new WP_Query($si_args);
  $gou_result = new WP_Query($gou_args);
  $strategic_imperatives = array();
  $gou_list= array();
  $current_date = date_create(date("m/d/Y")); 
  foreach($query_result->posts as $data){
    $post_meta_data = get_post_meta($data->ID);               
    $publishing_date = date_create($post_meta_data['post_publishing_date'][0]);        
    $interval = date_diff($publishing_date, $current_date);
    $days_interval = $interval->days;  
    $industry = get_field('industry',$data->ID);
    if(isset( $user_industry) && !empty( $user_industry)) :
        array_push($strategic_imperatives, $data);
    else :
        if( $industry ==  $user_industry) :       
            array_push($strategic_imperatives, $data);  
        endif;
    endif;
   
    //print_r(get_field('interest',$data->ID)); 
    //$intererst = (!empty(get_field('interest',$data->ID)) && !empty(get_field('interest',$data->ID))) ? array_intersect(get_field('interest',$data->ID),$user_industry) : '';
   // print_r($intererst);
   
    //if($days_interval == 0){
          //array_push($strategic_imperatives, $data);
    //}  
  }

if($pagename == 'growth-partner') :
$has_gou = false;
$has_si = false;
  foreach($gou_result->posts as $data){
    $post_meta_data = get_post_meta($data->ID);
    $publish_dates = get_field('publish_dates',$data->ID);
    $industry = get_field('industry',$data->ID);
    if($industry == $user_industry) {
        $has_si = true;
    }    //echo "<pre>";
    // print_r($publish_dates);
    if( $has_gou == false ) : 
        foreach( $publish_dates as $dates){
            $publishing_date = date_create($dates['post_publishing_date']);
            $interval = date_diff($publishing_date, $current_date);
            $days_interval = $interval->days;
            if($days_interval == 0){
                $has_gou = true;
            }
        }
    endif;
    if($has_gou == true && $has_si == true){
        array_push($gou_list, $data); 
    }  
  }
endif;

//   echo "<pre>";
//   print_r($gou_list);
//   die;

//   print_r($strategic_imperatives); die;

  $quote_list =  get_field('daily_quote_list', 'option');
  $quote_background_image =  get_field('daily_quote_background_image', 'option');
  json_encode($quote_list);  
  //print_r($quote_list);
  $daily_quote = array();
   foreach($quote_list as $quote_data){
       $current_date = date_create(date("m/d/Y"));       
       $quote_date = date_create($quote_data['quote_date']);
       $interval = date_diff($quote_date, $current_date);
       $days_interval = $interval->days;
       if($days_interval == 0){
        array_push($daily_quote, $quote_data);
       }
   }
  //array_push($strategic_imperatives, $daily_quote);
  
  // echo"<pre>";
  // print_r($strategic_imperatives); die;

if( !empty( $strategic_imperatives ) || !empty($daily_quote) )  : ?>
<section class="section-hero-outer">
    <div class="section-hero slider-1 slider">
        <?php 
    if(!empty( $strategic_imperatives )) :         
      //foreach ( $strategic_imperatives  as $value) :    
    ?>
        <div class="slider-single-main" style="
            background-image: url('<?php echo isset($strategic_imperatives[0]->background_image) ? $strategic_imperatives[0]->background_image  :  get_the_post_thumbnail_url($strategic_imperatives[0]->ID, 'full'); ?>');
          ">
            <div class="container">
                <div class="content-container">
                    <div class="text-box" data-aos="fade-up">
                        <?php if (isset($strategic_imperatives[0]->post_content ) && !empty($strategic_imperatives[0]->post_content )) : ?>
                        <div class="text-box_primary dashed" data-aos="fade-up">
                            <h1>
                                <?php echo $strategic_imperatives[0]->post_content ?>
                            </h1>
                        </div>
                        <?php endif; ?>

                        <?php if (isset($strategic_imperatives[0]->post_title) && !empty($strategic_imperatives[0]->post_title)) : ?>

                        <div class="text-box_secondary" data-aos="fade-up" data-aos-delay="100">
                            <h2><?php echo $strategic_imperatives[0]->post_title ?></h2>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="button-container-outer">
                    <div class="button-container">
                        <?php if (isset($content['button']['title']) && !empty($content['button']['title'])) : ?>
                        <button class="btn btn-primary btn-arrow btn-arrow-no-move">
                            <?php echo $content['button']['title'] ?>
                            <span class="btn-icon">
                                <svg width="9" height="15" viewBox="0 0 9 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </button>
                        <?php endif; ?>
                    </div>
                    <div class="slide-arrows-container">
                        <div class="slide-arrow-prev">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php           
    //endforeach;
      endif;

      if(!empty($gou_list) && isset($gou_list)) :         
        foreach ($gou_list  as $value) :     
      ?>

        <div class="slider-single-main" style="
              background-image: url('<?php echo isset($value->background_image) ? $value->background_image  :  get_the_post_thumbnail_url($value->ID, 'full'); ?>');
            ">
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
                            <h2><?php echo $value->post_title ?></h2>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="button-container-outer">
                    <div class="button-container">
                        <?php if (isset($content['button']['title']) && !empty($content['button']['title'])) : ?>
                        <button class="btn btn-primary btn-arrow btn-arrow-no-move">
                            <?php echo $content['button']['title'] ?>
                            <span class="btn-icon">
                                <svg width="9" height="15" viewBox="0 0 9 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </button>
                        <?php endif; ?>
                    </div>
                    <div class="slide-arrows-container">
                        <div class="slide-arrow-prev">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php           
      endforeach;
        endif;


      if(!empty($daily_quote)) :  ?>
        <div class="slider-single-main" style="
            background-image: url('<?php echo isset($value->background_image) ? $value->background_image  :  get_the_post_thumbnail_url($value->ID, 'full'); ?>');
          ">
            <div class="container">
                <div class="content-container">
                    <div class="text-box" data-aos="fade-up">
                        <?php if (isset($daily_quote[0]['daily_quote']) && !empty($daily_quote[0]['daily_quote'])) : ?>
                        <div class="text-box_primary dashed" data-aos="fade-up">
                            <h1> ❝
                                <?php echo $daily_quote[0]['daily_quote']?>❞
                            </h1>
                        </div>
                        <?php endif; ?>
                        <?php if (isset($daily_quote[0]['quote_author']) && !empty($daily_quote[0]['quote_author'])) : ?>
                        <div class="text-box_secondary" data-aos="fade-up" data-aos-delay="100">
                            <h2><i> - <?php echo  $daily_quote[0]['quote_author']?></i></h2>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="button-container-outer">
                    <div class="button-container">
                        <?php if (isset($content['button']['title']) && !empty($content['button']['title'])) : ?>
                        <button class="btn btn-primary btn-arrow btn-arrow-no-move gpd-trigger">
                            <?php echo $content['button']['title'] ?>
                            <span class="btn-icon">
                                <svg width="9" height="15" viewBox="0 0 9 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </button>
                        <?php endif; ?>
                    </div>
                    <div class="slide-arrows-container">
                        <div class="slide-arrow-prev">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php  endif; ?>

</section>
<?php 
endif; 
endif; 
?>