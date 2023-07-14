<?php 
$content = get_sub_field('gpd_dialogue_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $growth_coach = get_field('assigned_growth_coach', 'user_218', false);   
?>
<!-- <section class="section-pipeline"
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
<!-- <div class="button-container">
    <a href="mailto:<?php echo get_field('coach_email',$growth_coach[0])?>">
        <button class="btn btn-primary">
            <?php echo $content['button_text']['title'] ?>
        </button>
    </a>
</div> -->
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
        </div> 
</div>
</section> -->

<!-- gcm Modal -->
<div class="modal fade" id="gcmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
                        <textarea rows="4" cols="30" class="form-control gcm-message">
                            Default value here
                        </textarea>
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
                <button type="button" class="btn btn-primary btn-small gcm-send">
                    Send
                </button>
            </div>
        </div>
    </div>
</div>


<section class="section-pipeline" style="
        background-image: url(https://dev.gilcouncil.com/wp-content/uploads/2023/05/unsplash_qIZMt-o2RIk.jpg);
      ">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="header-box text-white">
                    <h1>Your personalized growth pipeline dialogue</h1>
                    <h3>
                        Welcome to Frost & Sullivan’s Growth Pipeline Dialog™: Your
                        first step on the path to sustainable growth. This dialog will
                        spark innovative thinking, identify ground-breaking
                        opportunities, and capture insights that will benefit your
                        organization for years to come.
                    </h3>
                </div>
                <span class="pill d-flex">
                    <div class="left">
                        <div class="icon-container">
                            <svg viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M26.1953 3.15796H23.1953V1.65796C23.1953 1.26013 23.0373 0.878603 22.756 0.597299C22.4747 0.315994 22.0931 0.157959 21.6953 0.157959C21.2975 0.157959 20.916 0.315994 20.6347 0.597299C20.3533 0.878603 20.1953 1.26013 20.1953 1.65796V3.15796H11.1953V1.65796C11.1953 1.26013 11.0373 0.878603 10.756 0.597299C10.4747 0.315994 10.0931 0.157959 9.69531 0.157959C9.29749 0.157959 8.91596 0.315994 8.63465 0.597299C8.35335 0.878603 8.19531 1.26013 8.19531 1.65796V3.15796H5.19531C4.00184 3.15796 2.85725 3.63206 2.01333 4.47598C1.16942 5.31989 0.695313 6.46448 0.695312 7.65796V25.658C0.695313 26.8514 1.16942 27.996 2.01333 28.8399C2.85725 29.6839 4.00184 30.158 5.19531 30.158H26.1953C27.3888 30.158 28.5334 29.6839 29.3773 28.8399C30.2212 27.996 30.6953 26.8514 30.6953 25.658V7.65796C30.6953 6.46448 30.2212 5.31989 29.3773 4.47598C28.5334 3.63206 27.3888 3.15796 26.1953 3.15796ZM27.6953 25.658C27.6953 26.0558 27.5373 26.4373 27.256 26.7186C26.9747 26.9999 26.5931 27.158 26.1953 27.158H5.19531C4.79749 27.158 4.41596 26.9999 4.13465 26.7186C3.85335 26.4373 3.69531 26.0558 3.69531 25.658V15.158H27.6953V25.658ZM27.6953 12.158H3.69531V7.65796C3.69531 7.26013 3.85335 6.8786 4.13465 6.5973C4.41596 6.31599 4.79749 6.15796 5.19531 6.15796H8.19531V7.65796C8.19531 8.05578 8.35335 8.43731 8.63465 8.71862C8.91596 8.99992 9.29749 9.15796 9.69531 9.15796C10.0931 9.15796 10.4747 8.99992 10.756 8.71862C11.0373 8.43731 11.1953 8.05578 11.1953 7.65796V6.15796H20.1953V7.65796C20.1953 8.05578 20.3533 8.43731 20.6347 8.71862C20.916 8.99992 21.2975 9.15796 21.6953 9.15796C22.0931 9.15796 22.4747 8.99992 22.756 8.71862C23.0373 8.43731 23.1953 8.05578 23.1953 7.65796V6.15796H26.1953C26.5931 6.15796 26.9747 6.31599 27.256 6.5973C27.5373 6.8786 27.6953 7.26013 27.6953 7.65796V12.158Z"
                                    fill="#29B1E6"></path>
                            </svg>
                        </div>

                        <h3>31st May, 2023</h3>
                    </div>
                    <div class="right">
                        <div class="icon-container">
                            <svg viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.0684 0.328552C16.4395 0.328552 19.6726 1.66774 22.0563 4.0515C24.4401 6.43526 25.7793 9.66834 25.7793 13.0395C25.7793 18.3018 21.7683 23.8155 13.9158 29.7049C13.6713 29.8883 13.3739 29.9874 13.0684 29.9874C12.7628 29.9874 12.4654 29.8883 12.221 29.7049C4.36843 23.8155 0.357422 18.3018 0.357422 13.0395C0.357422 9.66834 1.69661 6.43526 4.08037 4.0515C6.46413 1.66774 9.69721 0.328552 13.0684 0.328552ZM13.0684 8.80251C11.9446 8.80251 10.8669 9.24891 10.0724 10.0435C9.27777 10.8381 8.83138 11.9158 8.83138 13.0395C8.83138 14.1632 9.27777 15.2409 10.0724 16.0355C10.8669 16.8301 11.9446 17.2765 13.0684 17.2765C14.1921 17.2765 15.2698 16.8301 16.0644 16.0355C16.8589 15.2409 17.3053 14.1632 17.3053 13.0395C17.3053 11.9158 16.8589 10.8381 16.0644 10.0435C15.2698 9.24891 14.1921 8.80251 13.0684 8.80251Z"
                                    fill="#29B1E6"></path>
                            </svg>
                        </div>
                        <h3>Location</h3>
                    </div>
                </span>
            </div>
            <div class="col-lg-5">
                <div class="content-container">
                    <div class="content-container-top">
                        <div class="image-container" style="
                    background-image: url(https://beta.gilcouncil.com/wp-content/uploads/2023/05/Swati-Mohtra.png);
                  ">
                            <img src="https://dev.gilcouncil.com/wp-content/uploads/2023/05/image-52.jpg" alt="" />
                        </div>
                        <div class="text-container">
                            <h2>Aroop Zutshi</h2>
                            <p class="title">Growth Coach</p>
                            <div class="icon-container">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.75 4.29492C24.413 4.29492 25.0489 4.54953 25.5178 5.00275C25.9866 5.45596 26.25 6.07065 26.25 6.71159V23.6283C26.25 24.2692 25.9866 24.8839 25.5178 25.3371C25.0489 25.7903 24.413 26.0449 23.75 26.0449H6.25C5.58696 26.0449 4.95107 25.7903 4.48223 25.3371C4.01339 24.8839 3.75 24.2692 3.75 23.6283V6.71159C3.75 6.07065 4.01339 5.45596 4.48223 5.00275C4.95107 4.54953 5.58696 4.29492 6.25 4.29492H23.75ZM23.125 23.0241V16.6199C23.125 15.5752 22.6957 14.5732 21.9315 13.8345C21.1672 13.0958 20.1308 12.6808 19.05 12.6808C17.9875 12.6808 16.75 13.3091 16.15 14.2516V12.9103H12.6625V23.0241H16.15V17.067C16.15 16.1366 16.925 15.3753 17.8875 15.3753C18.3516 15.3753 18.7967 15.5536 19.1249 15.8708C19.4531 16.1881 19.6375 16.6183 19.6375 17.067V23.0241H23.125ZM8.6 11.0133C9.15695 11.0133 9.6911 10.7994 10.0849 10.4187C10.4788 10.038 10.7 9.52165 10.7 8.98326C10.7 7.85951 9.7625 6.94117 8.6 6.94117C8.03973 6.94117 7.50241 7.15632 7.10624 7.53928C6.71007 7.92225 6.4875 8.44166 6.4875 8.98326C6.4875 10.107 7.4375 11.0133 8.6 11.0133ZM10.3375 23.0241V12.9103H6.875V23.0241H10.3375Z"
                                        fill="white" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="button-container">
                        <a data-mail="swati.mohtra@frost.com" class="gcm-trigger">
                            <button class="btn btn-primary">
                                Connect with your Growth Coach
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="content-container">
          <div class="header-box text-white">
            
            <h2>YOUR GROWTH PIPE DIALOGUE </h2>
            <h3>31 JULY 2023 - 04:00PM EST  America</h3>
          </div>
        </div> -->
        <!-- <div class="button-container d-flex justify-content-center">
          <button class="btn btn-primary">
          Connect with your Growth Coach          </button>
        </div> -->
    </div>
</section>
<?php

endif;