<?php 
$content = get_sub_field('service_manager_section');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $current_user_id = get_current_user_id();
    $service_manager = get_field('service_manager', 'user_218', false);
    $user_object = get_user_by('ID', $service_manager);
    if (!empty($user_object)) {
      $user = array();
      $user_data = $user_object->data;
      $user['ID'] = $user_data->ID;
      $user['user_login'] = $user_data->user_login;
      $user['user_email'] = $user_data->user_email;
      $user['user_nicename'] = $user_data->user_nicename;   
      $user['display_name'] = $user_data->display_name;
      $user['profile_image'] = get_avatar_url($user_data->ID);
      $user_meta = get_user_meta($user_data->ID);
      $user['phone'] =  $user_meta['business_phone'];
  } 
    // print_r($user); die;

?>
<!-- <section class="section-service-manager" style="background-image: url('<?php echo $content['background_image'] ?>')">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="content-container left text-white">
              <h3>Concierge</h3>
              <h1>Your Member Service Manager</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="content-container right d-flex align-items-center">
              <div class="image-container">
                <img src="<?php echo $user['profile_image'] ?>" alt="" />
              </div>
              <div class="content-container right text-white">
                <h3><?php echo $user['display_name'] ?></h3>
                <p>Membership Service Manager</p>
                <p>phone : <?php echo $user['phone'][0] ?></p>
                <div class="button-container w-100">
                  <a href="mailto:<?php echo $user['user_email'] ?>">
                  <button class="btn btn-primary btn-white-bg btn-small btn-message w-100">
                  <div class="message-icon">
                  <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.5 3.62109L7.5 7.37109L1.5 3.62109V2.12109L7.5 5.87109L13.5 2.12109M13.5 0.621094H1.5C0.6675 0.621094 0 1.28859 0 2.12109V11.1211C0 11.5189 0.158035 11.9004 0.43934 12.1818C0.720644 12.4631 1.10218 12.6211 1.5 12.6211H13.5C13.8978 12.6211 14.2794 12.4631 14.5607 12.1818C14.842 11.9004 15 11.5189 15 11.1211V2.12109C15 1.72327 14.842 1.34174 14.5607 1.06043C14.2794 0.779129 13.8978 0.621094 13.5 0.621094Z" fill="#F28E36"/>
                  </svg>

                  </div>  
                  Email Now
                  </button>
</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
<!-- MSM Modal -->
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
            <div class="modal-body initial">
                <div class="header-box">
                    <h1>
                        I would like to initiate my personal Growth Pipeline Dialog
                    </h1>
                </div>
                <form>
                    <div class="input-group">
                        <textarea rows="4" cols="30" class="form-control msm-message">
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
                <button type="button" class="btn btn-primary btn-small msm-send">
                    Send
                </button>
            </div>
        </div>
    </div>
</div>

<section class="section-service-manager" style="
        background-image: url(<?php echo $content['background_image'] ?>);
      ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-container left text-white">
                    <h3>Concierge</h3>
                    <h1>Your Member Service Manager</h1>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-container right d-flex align-items-center">
                    <div class="image-container">
                        <img src="<?php echo $user['profile_image'] ?>" alt="" />
                    </div>
                    <div class="content-container right text-white">
                        <h3><?php echo $user['display_name'] ?></h3>
                        <p>Membership Service Manager</p>
                        <p><?php echo $user['phone'][0] ?></p>
                        <div class="button-container w-100">
                            <a data-mail="brittney.gasca@frost.com" class="msm-trigger"
                                data-function="service_manager_mail_function">
                                <button class="btn btn-white-bg btn-small btn-message w-100">
                                    <div class="message-icon">
                                        <svg width="15" height="13" viewBox="0 0 15 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.5 3.62109L7.5 7.37109L1.5 3.62109V2.12109L7.5 5.87109L13.5 2.12109M13.5 0.621094H1.5C0.6675 0.621094 0 1.28859 0 2.12109V11.1211C0 11.5189 0.158035 11.9004 0.43934 12.1818C0.720644 12.4631 1.10218 12.6211 1.5 12.6211H13.5C13.8978 12.6211 14.2794 12.4631 14.5607 12.1818C14.842 11.9004 15 11.5189 15 11.1211V2.12109C15 1.72327 14.842 1.34174 14.5607 1.06043C14.2794 0.779129 13.8978 0.621094 13.5 0.621094Z"
                                                fill="#F28E36" />
                                        </svg>
                                    </div>
                                    Email Now
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

endif;