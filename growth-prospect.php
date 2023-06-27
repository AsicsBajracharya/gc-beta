<?php /* Template Name: GC Prospect Page */ 
include "landing-header.php";

 if (!is_user_logged_in() ) { ?>

<main data-home-url="<?php echo get_home_url(); ?>" class="page-prospects">
    <?php
		if (have_rows('landing_page_content')) :
			get_template_part('template-parts/main', 'content');
		endif;
	?>
    <a href="#page-container" class="fs-back-to-top fs-scroller"><span class="fs-icon fs-icon-angle-down"></span></a>
</main>


<?php 
} 
else { 
  $current_user_id = get_current_user_id();
  $persona = get_field('user_persona', 'user_' . $current_user_id, false) ;
  if( $persona == "Growth Member") :
    wp_redirect( get_home_url()."/growth-member/");
  endif;

  if( $persona == "Growth Partner") :
    wp_redirect( get_home_url()."/growth-partner/");
  endif;
  } 
  include 'landing-footer.php'; ?>