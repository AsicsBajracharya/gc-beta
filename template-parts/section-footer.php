<?php 
$content = get_sub_field('footer');
if ($content['enable_disable']) :
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';
    $style = ($content['background_image'] !== 'none') ? 'style="background-image: url('. $content['background_image'] . ');"' : '';
?>
<!-- <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="content-container left text-white">
                    <div class="header-box">
                        <h1><?php echo $content['heading'] ?></h1>
                    </div>
                    <div class="text-box">
                        <p>
                        <?php echo $content['content'] ?>
                        </p>
                    </div>
                    <div class="footer-bottom">
                        <p>
                        <?php echo $content['copyright_text'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-container right text-white">
                    <div class="location footer-list">
                        <div class="d-flex">
                            <div class="icon-container">
                                <img src="<?php echo $content['location_icon'] ?>" alt="" />
                            </div>
                            <div class="text-container">
                            <?php echo $content['location_content'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="email footer-list">
                        <div class="d-flex">
                            <div class="icon-container">
                                <img src="<?php echo $content['mail_icon'] ?>" alt="" />
                            </div>
                            <div class="text-container">
                            <?php echo $content['email_content'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> -->





<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="content-container left text-white">
                    <div class="header-box">
                        <h1><?php echo $content['heading'] ?></h1>
                    </div>
                    <div class="text-box">
                        <p>
                            <?php echo $content['content'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-container right text-white">
                    <div class="location footer-list">
                        <div class="d-flex">
                            <div class="icon-container">
                                <img src="<?php echo $content['location_icon'] ?>" alt="" />
                            </div>
                            <div class="text-container">
                                <?php echo $content['location_content'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="email footer-list">
                        <div class="d-flex">
                            <div class="icon-container">
                                <img src="<?php echo $content['mail_icon'] ?>" alt="" />
                            </div>
                            <div class="text-container">
                                <?php echo $content['email_content'] ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>
                <?php echo $content['copyright_text'] ?>
            </p>
        </div>
    </div>

</footer>
<?php
endif;