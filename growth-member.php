<?php /* Template Name: GC Member Page */ 
include "landing-header.php";

 $current_user_id = get_current_user_id();
 $persona = get_field('user_persona', 'user_' . $current_user_id, false) ;
  if (is_user_logged_in() && $persona == "Growth Member"  ) { ?>

<main data-home-url="<?php echo get_home_url(); ?>">
    <?php
		if (have_rows('landing_page_content')) :
			get_template_part('template-parts/main', 'content');
		endif;
	?>
    <a href="#page-container" class="fs-back-to-top fs-scroller"><span class="fs-icon fs-icon-angle-down"></span></a>
</main>


<?php } 
else {
     wp_redirect( get_home_url()."/growth-prospect/");
     }
 include 'landing-footer.php'; ?>