<?php 
$content = get_sub_field('stories');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
   
?>
<!-- <section class="section-stories">
    <div class="header-box text-center text-blue-dark" data-aos="fade-down">
        <h1><?php echo $content['heading'] ?></h1>
    </div>
    <div class="stories-slider-container container">
        <?php foreach ($content['stories'] as  $value) : ?>
        <div class="item" data-aos="fade-left" data-aos-delay="500">
            <div class="content-container-outer">

                <div class="image-container">
                    <img src="<?php echo $value['image'] ?>" alt="" />
                </div>
                <div class="content-container">
                    <h3>
                        <?php echo $value['title'] ?>
                    </h3>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section> -->

<section class="section-stories-2">
    `
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="image-container">
                    <img src="./assets/images/growth-community-slider-bg.jpg" alt="" />
                </div>
            </div>
            <div class="col-md-6 negative-margin">
                <div class="content-container">
                    <p>Content to be provided by Customer Experience Team</p>
                    <div class="read-more-container">
                        <p>Read More</p>
                        <div class="icon-container">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.586 10.657L11.636 6.70704C11.4538 6.51844 11.353 6.26584 11.3553 6.00364C11.3576 5.74144 11.4628 5.49063 11.6482 5.30522C11.8336 5.11981 12.0844 5.01465 12.3466 5.01237C12.6088 5.01009 12.8614 5.11088 13.05 5.29304L18.707 10.95C18.8002 11.0427 18.8741 11.1529 18.9246 11.2742C18.9751 11.3955 19.001 11.5256 19.001 11.657C19.001 11.7884 18.9751 11.9186 18.9246 12.0399C18.8741 12.1612 18.8002 12.2714 18.707 12.364L13.05 18.021C12.9578 18.1166 12.8474 18.1927 12.7254 18.2451C12.6034 18.2976 12.4722 18.3251 12.3394 18.3263C12.2066 18.3274 12.0749 18.3021 11.952 18.2519C11.8291 18.2016 11.7175 18.1273 11.6236 18.0334C11.5297 17.9395 11.4555 17.8279 11.4052 17.705C11.3549 17.5821 11.3296 17.4504 11.3307 17.3176C11.3319 17.1849 11.3595 17.0536 11.4119 16.9316C11.4643 16.8096 11.5405 16.6993 11.636 16.607L15.586 12.657H6C5.73478 12.657 5.48043 12.5517 5.29289 12.3641C5.10536 12.1766 5 11.9223 5 11.657C5 11.3918 5.10536 11.1375 5.29289 10.9499C5.48043 10.7624 5.73478 10.657 6 10.657H15.586Z"
                                    fill="#F28E36" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

endif;