<?php 
$content = get_sub_field('strategic_imperative_section');
$current_user_id = get_current_user_id();
$user_industry = get_field('industry', 'user_' . $current_user_id, false);
// echo "<pre>";
// print_r($user_industry); 
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
    $industry = get_field('industry',$data->ID); 
    if( $industry == 'Health Science') :       
        array_push($strategic_imperatives, $data);  
    endif;
    //print_r(get_field('interest',$data->ID)); 
    //$intererst = (!empty(get_field('interest',$data->ID)) && !empty(get_field('interest',$data->ID))) ? array_intersect(get_field('interest',$data->ID),$user_industry) : '';
   // print_r($intererst);
   
    //if($days_interval == 0){
          //array_push($strategic_imperatives, $data);
    //}  
  }
  //die;

  //print_r($strategic_imperatives); die;

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

//if( !empty( $strategic_imperatives ) || !empty($daliy_quote) )  : ?>
<!-- 
<section class="section-hero-outer">
    <div class="section-hero ">
        <?php 
    if(!empty( $strategic_imperatives )) :         
      foreach ( $strategic_imperatives  as $value) :      
         
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

</section> -->


<!-- Modal -->
<div class="modal fade" id="msmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg gpd-modal" role="document">
        <div class="modal-content">
            <div class="modal-header" style="
              background-image: url('https://beta.gilcouncil.com/wp-content/uploads/2023/07/MicrosoftTeams-image-4.jpg');
            ">
                <span aria-hidden="true" class="icon-close" data-dismiss="modal" aria-label="Close"><svg width="29"
                        height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="14.627" cy="14.1063" r="13.6543" fill="#15426B" />
                        <path
                            d="M19.4331 20.3376L14.626 15.5304L9.81887 20.3376L8.39453 18.9132L13.2017 14.1061L8.39453 9.29897L9.81887 7.87463L14.626 12.6818L19.4331 7.87463L20.8575 9.29897L16.0503 14.1061L20.8575 18.9132L19.4331 20.3376Z"
                            fill="white" />
                    </svg>
                </span>
            </div>
            <div class="modal-body">
                <div class="header-box">
                    <h1>
                        I would like to initiate my personal Growth Pipeline Dialog
                    </h1>
                </div>
                <form>
                    <div class="input-group">
                        <textarea rows="8" cols="30" class="form-control">
Default value here</textarea>
                    </div>

                    <!-- <div class="button-container">
                <button class="btn btn-small">Send</button>
              </div> -->
                </form>
            </div>
            <div class="modal-footer">
                <!-- <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button> -->
                <button type="button" class="btn btn-primary btn-small send-msm">
                    Send
                </button>
            </div>
        </div>
    </div>
</div>

<?php if( !empty( $strategic_imperatives ) || !empty($daliy_quote) )  : ?>
<section class="section-hero-outer">
    <div class="section-hero slider-1 slider">
        <?php 
    if(!empty( $strategic_imperatives )) :         
      foreach ( $strategic_imperatives  as $value) :     
      
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
                            <!-- <svg
                    width="52"
                    height="53"
                    viewBox="0 0 52 53"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="26"
                      cy="26"
                      r="25.5"
                      transform="matrix(-1 0 0 1 52 0.5)"
                      stroke="white"
                    />
                    <path
                      d="M29.3308 19.9506C29.4456 20.0652 29.5366 20.2012 29.5988 20.351C29.6609 20.5008 29.6929 20.6613 29.6929 20.8235C29.6929 20.9856 29.6609 21.1462 29.5988 21.296C29.5366 21.4457 29.4456 21.5818 29.3308 21.6963L24.527 26.5001L29.3308 31.304C29.5623 31.5355 29.6923 31.8494 29.6923 32.1768C29.6923 32.5042 29.5623 32.8182 29.3308 33.0497C29.0993 33.2812 28.7853 33.4112 28.4579 33.4112C28.1306 33.4112 27.8166 33.2812 27.5851 33.0497L21.9022 27.3668C21.7874 27.2523 21.6964 27.1162 21.6343 26.9664C21.5721 26.8167 21.5402 26.6561 21.5402 26.494C21.5402 26.3318 21.5721 26.1712 21.6343 26.0215C21.6964 25.8717 21.7874 25.7356 21.9022 25.6211L27.5851 19.9382C28.0556 19.4678 28.8479 19.4678 29.3308 19.9506Z"
                      fill="#B3B3B3"
                    />
                  </svg> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php           
    endforeach;
      endif;
      ?>

        <?php if(!empty($daliy_quote)) :  ?>
        <div class="slider-single-main" style="
            background-image: url('<?php echo isset($value->background_image) ? $value->background_image  :  get_the_post_thumbnail_url($value->ID, 'full'); ?>');
          ">
            <div class="container">
                <div class="content-container">
                    <div class="text-box" data-aos="fade-up">
                        <?php if (isset($daliy_quote[0]['daily_quote']) && !empty($daliy_quote[0]['daily_quote'])) : ?>
                        <div class="text-box_primary dashed" data-aos="fade-up">
                            <h1>
                                <?php echo $daliy_quote[0]['daily_quote'] ?>
                            </h1>
                        </div>
                        <?php endif; ?>
                        <?php if (isset($daliy_quote[0]['quote_author']) && !empty($daliy_quote[0]['quote_author'])) : ?>
                        <div class="text-box_secondary" data-aos="fade-up" data-aos-delay="100">
                            <h2><?php echo  $daliy_quote[0]['quote_author'] ?> - Daily Quotes </h2>
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
                            <!-- <svg
                    width="52"
                    height="53"
                    viewBox="0 0 52 53"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="26"
                      cy="26"
                      r="25.5"
                      transform="matrix(-1 0 0 1 52 0.5)"
                      stroke="white"
                    />
                    <path
                      d="M29.3308 19.9506C29.4456 20.0652 29.5366 20.2012 29.5988 20.351C29.6609 20.5008 29.6929 20.6613 29.6929 20.8235C29.6929 20.9856 29.6609 21.1462 29.5988 21.296C29.5366 21.4457 29.4456 21.5818 29.3308 21.6963L24.527 26.5001L29.3308 31.304C29.5623 31.5355 29.6923 31.8494 29.6923 32.1768C29.6923 32.5042 29.5623 32.8182 29.3308 33.0497C29.0993 33.2812 28.7853 33.4112 28.4579 33.4112C28.1306 33.4112 27.8166 33.2812 27.5851 33.0497L21.9022 27.3668C21.7874 27.2523 21.6964 27.1162 21.6343 26.9664C21.5721 26.8167 21.5402 26.6561 21.5402 26.494C21.5402 26.3318 21.5721 26.1712 21.6343 26.0215C21.6964 25.8717 21.7874 25.7356 21.9022 25.6211L27.5851 19.9382C28.0556 19.4678 28.8479 19.4678 29.3308 19.9506Z"
                      fill="#B3B3B3"
                    />
                  </svg> -->
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