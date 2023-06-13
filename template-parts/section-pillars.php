<?php 
$content = get_sub_field('three_pillars');
if ($content['enable_disable']) :
	//print_r($content['first_anchor_list']);
    $section_class = $content['custom_classes'];
    $section_id = (!empty($content['section_id'])) ? 'id="'. $content['section_id'] .'"' : '';   
?>
 <section class="section-road section-with-image fs-road" 
 style = "background-image:url('https://dev.gilcouncil.com/wp-content/uploads/2023/05/fs-white-bg.jpg')"
 >
        <div class="container">
          <div class="header-box text-center"  data-aos="fade-down">  
            <h1><?php echo $content['heading'] ?></h1>
          </div>
          <div class="fs-road__img"  data-aos="fade-up">
            <div class="fs-road__wrap">
              <img src="<?php echo $content['circle_image'] ?>" alt="Circle" />
              <div class="fs-road__community">
                <a href="<?php echo $content['first_text']['url'] ?>" class="fs-road__link">
                  <span class="fs-road__title"><?php echo $content['first_text']['title'] ?></span>
                  <span class="fs-road-more"
                    >Learn More <span class="fs-icon-arrow"></span
                  ></span>
                </a>
                <div class="fs-tooltip">
                  <ul>
                  	<?php foreach ($content['first_anchor_list'] as  $value) : ?>
                    <li>
                      <a href="#" class="fs-scroller"><?php echo $value['link']['title'] ?></a>
                    </li>
                <?php endforeach; ?>
                  
                  </ul>
                </div>
              </div>
              <div class="fs-road__content">
                <a href="<?php echo $content['second_text']['url'] ?>" class="fs-road__link">
                  <span class="fs-road__title"><?php echo $content['second_text']['title'] ?></span>
                  <span class="fs-road-more"
                    >Learn More <span class="fs-icon-arrow"></span
                  ></span>
                </a>
                <div class="fs-tooltip">
                  <ul>
                   	<?php foreach ($content['second_anchor_list'] as  $value) : ?>
                    <li>
                      <a href="#" class="fs-scroller"><?php echo $value['link']['title'] ?></a>
                    </li>
                <?php endforeach; ?>
                  </ul>
                </div>
              </div>
              <div class="fs-road__coaching">
                <a href="<?php echo $content['third_text']['url'] ?>" class="fs-road__link">
                  <span class="fs-road__title"><?php echo $content['third_text']['title'] ?></span>
                  <span class="fs-road-more"
                    >Learn More <span class="fs-icon-arrow"></span
                  ></span>
                </a>
                <div class="fs-tooltip">
                  <ul>
                   	<?php foreach ($content['third_anchor_list'] as  $value) : ?>
                    <li>
                      <a href="#" class="fs-scroller"><?php echo $value['link']['title'] ?></a>
                    </li>
                <?php endforeach; ?>
                  </ul>
                </div>
              </div>
              <div class="fs-road__main">
                <span class="fs-road__main-txt"><?php echo $content['center_title'] ?> </span>
                <span class="fs-road__main-desc"><?php echo $content['center_text'] ?></span>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php
endif;
