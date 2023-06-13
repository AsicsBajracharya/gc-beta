<?php 
$content = get_sub_field('gpd_dialogue_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $growth_coach = get_field('assigned_growth_coach', 'user_218', false);   
?>
<section class="section-pipeline"
    style="background-image: url(https://dev.gilcouncil.com/wp-content/uploads/2023/05/unsplash_qIZMt-o2RIk.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="header-box text-white text-left">
                    <h1><?php echo $content['primary_heading'] ?></h1>
                    <h3><?php echo $content['primary_content'] ?></h3>
                </div>
                <div class="pill d-flex">
                    <div class="left">
                        <div class="icon-container">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M26.1953 3.15796H23.1953V1.65796C23.1953 1.26013 23.0373 0.878603 22.756 0.597299C22.4747 0.315994 22.0931 0.157959 21.6953 0.157959C21.2975 0.157959 20.916 0.315994 20.6347 0.597299C20.3533 0.878603 20.1953 1.26013 20.1953 1.65796V3.15796H11.1953V1.65796C11.1953 1.26013 11.0373 0.878603 10.756 0.597299C10.4747 0.315994 10.0931 0.157959 9.69531 0.157959C9.29749 0.157959 8.91596 0.315994 8.63465 0.597299C8.35335 0.878603 8.19531 1.26013 8.19531 1.65796V3.15796H5.19531C4.00184 3.15796 2.85725 3.63206 2.01333 4.47598C1.16942 5.31989 0.695313 6.46448 0.695312 7.65796V25.658C0.695313 26.8514 1.16942 27.996 2.01333 28.8399C2.85725 29.6839 4.00184 30.158 5.19531 30.158H26.1953C27.3888 30.158 28.5334 29.6839 29.3773 28.8399C30.2212 27.996 30.6953 26.8514 30.6953 25.658V7.65796C30.6953 6.46448 30.2212 5.31989 29.3773 4.47598C28.5334 3.63206 27.3888 3.15796 26.1953 3.15796ZM27.6953 25.658C27.6953 26.0558 27.5373 26.4373 27.256 26.7186C26.9747 26.9999 26.5931 27.158 26.1953 27.158H5.19531C4.79749 27.158 4.41596 26.9999 4.13465 26.7186C3.85335 26.4373 3.69531 26.0558 3.69531 25.658V15.158H27.6953V25.658ZM27.6953 12.158H3.69531V7.65796C3.69531 7.26013 3.85335 6.8786 4.13465 6.5973C4.41596 6.31599 4.79749 6.15796 5.19531 6.15796H8.19531V7.65796C8.19531 8.05578 8.35335 8.43731 8.63465 8.71862C8.91596 8.99992 9.29749 9.15796 9.69531 9.15796C10.0931 9.15796 10.4747 8.99992 10.756 8.71862C11.0373 8.43731 11.1953 8.05578 11.1953 7.65796V6.15796H20.1953V7.65796C20.1953 8.05578 20.3533 8.43731 20.6347 8.71862C20.916 8.99992 21.2975 9.15796 21.6953 9.15796C22.0931 9.15796 22.4747 8.99992 22.756 8.71862C23.0373 8.43731 23.1953 8.05578 23.1953 7.65796V6.15796H26.1953C26.5931 6.15796 26.9747 6.31599 27.256 6.5973C27.5373 6.8786 27.6953 7.26013 27.6953 7.65796V12.158Z"
                                    fill="#29B1E6" />
                            </svg>
                        </div>

                        <h2><?php $date = date_create(get_field('meeting_date',$growth_coach[0])); echo date_format($date,"jS F, Y"); ?>
                        </h2>
                    </div>
                    <div class="right">
                        <div class="icon-container">
                            <svg width="26" height="30" viewBox="0 0 26 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.0684 0.328552C16.4395 0.328552 19.6726 1.66774 22.0563 4.0515C24.4401 6.43526 25.7793 9.66834 25.7793 13.0395C25.7793 18.3018 21.7683 23.8155 13.9158 29.7049C13.6713 29.8883 13.3739 29.9874 13.0684 29.9874C12.7628 29.9874 12.4654 29.8883 12.221 29.7049C4.36843 23.8155 0.357422 18.3018 0.357422 13.0395C0.357422 9.66834 1.69661 6.43526 4.08037 4.0515C6.46413 1.66774 9.69721 0.328552 13.0684 0.328552ZM13.0684 8.80251C11.9446 8.80251 10.8669 9.24891 10.0724 10.0435C9.27777 10.8381 8.83138 11.9158 8.83138 13.0395C8.83138 14.1632 9.27777 15.2409 10.0724 16.0355C10.8669 16.8301 11.9446 17.2765 13.0684 17.2765C14.1921 17.2765 15.2698 16.8301 16.0644 16.0355C16.8589 15.2409 17.3053 14.1632 17.3053 13.0395C17.3053 11.9158 16.8589 10.8381 16.0644 10.0435C15.2698 9.24891 14.1921 8.80251 13.0684 8.80251Z"
                                    fill="#29B1E6" />
                            </svg>

                        </div>
                        <h2>Location</h2>
                    </div>

                </div>
            </div>
            <div class="col-md-5">
                <div class="content-container">
                    <div class="image-container"
                        style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($growth_coach[0])); ?>)">
                        <!-- <img src="https://dev.gilcouncil.com/wp-content/uploads/2023/05/image-52.jpg"  alt=""> -->
                    </div>
                    <div class="button-container">
                        <a href="mailto:<?php echo get_field('coach_email',$growth_coach[0])?>">
                            <button class="btn btn-primary">
                                <?php echo $content['button_text']['title'] ?>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="content-container">
          <div class="header-box text-white">
            
            <h2><?php echo $content['secondary_heading'] ?></h2>
            <h3><?php echo $content['date_and_time'] ?> <?php echo $content['location'] ?></h3>
          </div>
        </div> -->
        <!-- <div class="button-container d-flex justify-content-center">
          <button class="btn btn-primary">
          <?php echo $content['button_text']['title'] ?>
          </button>
        </div> -->
    </div>
</section>
<?php

endif;