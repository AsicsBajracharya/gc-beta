<?php 
$content = get_sub_field('critical_issues_section');
if ($content['enable_disable']) :
  // echo "<pre>";
  // print_r($content);
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';   
?>
<section class="section-growth " style="background-image: url('<?php echo $content['background_image'] ?>')">
    <div class="content-container-top text-white title" data-aos="fade-down">
        <div class="header-box text-center">
            <h1 class="secondary-heading"><?php echo $content['heading'] ?></h1>
        </div>
        <div class="text-box text-center title">
            <p>
                <?php echo $content['sub_heading'] ?>
            </p>
        </div>
    </div>


    <div class="slider-container growth-slider slider-2">
        <?php foreach ($content['slides'] as  $value) : ?>
        <div class="slide-card-1" data-aos="flip-left">
            <a href="#">

                <div class="content-container">
                    <div class="icon-container">
                        <a href="<?php echo $value['link']; ?>"><img src=" <?php echo $value['icon']; ?>" alt="" /></a>
                    </div>
                    <div class="text-box">
                        <p>
                            <?php echo $value['text']; ?>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
    <!-- <div class="collapse" id="collapseExample">
        <div class="growth-slider no-slide">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="slide-card-1">
                            <div class="content-container">
                                <div class="icon-container">
                                    <a href="https://www.gilcouncil.com/critical_issues/embracing-opportunities-of-disruptive-technologies/"
                                        tabindex="0"><img
                                            src=" https://beta.gilcouncil.com/wp-content/uploads/2023/06/g2-1.png"
                                            alt="" /></a>
                                </div>
                                <div class="text-box">
                                    <p>Embracing Opportunities of Disruptive Technologies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="slide-card-1">
                            <div class="content-container">
                                <div class="icon-container">
                                    <a href="https://www.gilcouncil.com/critical_issues/embracing-opportunities-of-disruptive-technologies/"
                                        tabindex="0"><img
                                            src=" https://beta.gilcouncil.com/wp-content/uploads/2023/06/g2-1.png"
                                            alt="" /></a>
                                </div>
                                <div class="text-box">
                                    <p>Embracing Opportunities of Disruptive Technologies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="slide-card-1">
                            <div class="content-container">
                                <div class="icon-container">
                                    <a href="https://www.gilcouncil.com/critical_issues/embracing-opportunities-of-disruptive-technologies/"
                                        tabindex="0"><img
                                            src=" https://beta.gilcouncil.com/wp-content/uploads/2023/06/g2-1.png"
                                            alt="" /></a>
                                </div>
                                <div class="text-box">
                                    <p>Embracing Opportunities of Disruptive Technologies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="slide-card-1">
                            <div class="content-container">
                                <div class="icon-container">
                                    <a href="https://www.gilcouncil.com/critical_issues/embracing-opportunities-of-disruptive-technologies/"
                                        tabindex="0"><img
                                            src=" https://beta.gilcouncil.com/wp-content/uploads/2023/06/g2-1.png"
                                            alt="" /></a>
                                </div>
                                <div class="text-box">
                                    <p>Embracing Opportunities of Disruptive Technologies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="slide-card-1">
                            <div class="content-container">
                                <div class="icon-container">
                                    <a href="https://www.gilcouncil.com/critical_issues/embracing-opportunities-of-disruptive-technologies/"
                                        tabindex="0"><img
                                            src=" https://beta.gilcouncil.com/wp-content/uploads/2023/06/g2-1.png"
                                            alt="" /></a>
                                </div>
                                <div class="text-box">
                                    <p>Embracing Opportunities of Disruptive Technologies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="slide-card-1">
                            <div class="content-container">
                                <div class="icon-container">
                                    <a href="https://www.gilcouncil.com/critical_issues/embracing-opportunities-of-disruptive-technologies/"
                                        tabindex="0"><img
                                            src=" https://beta.gilcouncil.com/wp-content/uploads/2023/06/g2-1.png"
                                            alt="" /></a>
                                </div>
                                <div class="text-box">
                                    <p>Embracing Opportunities of Disruptive Technologies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="container">
        <div class="view-all-btn" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
            aria-controls="collapseExample">
            <span class="icon-container text-center">
                <svg width="28" height="17" viewBox="0 0 28 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M26.7133 0.977344C26.491 0.754518 26.2268 0.577737 25.9361 0.457119C25.6453 0.336501 25.3336 0.274414 25.0188 0.274414C24.704 0.274414 24.3923 0.336501 24.1015 0.457119C23.8107 0.577737 23.5466 0.754518 23.3242 0.977344L13.9981 10.3035L4.67197 0.977344C4.22255 0.527918 3.61299 0.275432 2.97741 0.275432C2.34182 0.275432 1.73227 0.527918 1.28284 0.977345C0.833412 1.42677 0.580933 2.03632 0.580933 2.67191C0.580933 3.30749 0.833412 3.91705 1.28284 4.36647L12.3155 15.3992C12.5379 15.622 12.802 15.7988 13.0928 15.9194C13.3836 16.04 13.6953 16.1021 14.0101 16.1021C14.3249 16.1021 14.6366 16.04 14.9274 15.9194C15.2182 15.7988 15.4823 15.622 15.7047 15.3992L26.7374 4.36647C27.6508 3.45309 27.6508 1.91476 26.7133 0.977344Z"
                        fill="white" />
                </svg>
            </span>
            <span class="text-container text-center text-white">
                <h3>View All</h3>
            </span>
        </div>
    </div> -->

    <?php if(isset($content['button']) && !empty($content['button'])) :?>
    <div class="button-container d-flex justify-content-center">

        <a href="<?php echo $content['button']['url']; ?>">
            <button class="btn btn-white-border btn-small btn-arrow btn-arrow-move btn-transparent-arrow-move">
                <?php echo $content['button']['title']; ?>
                <span class="btn-icon">
                    <svg viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 1.25L7.75 7.5L1.5 13.75" stroke="white" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </span>
            </button>
        </a>

    </div>
    <?php endif; ?>




</section>

<?php
endif;