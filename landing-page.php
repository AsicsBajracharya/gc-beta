<?php /* Template Name: GC Landing Page */ ?>
<?php if (is_user_logged_in()) { ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="
https://dev.gilcouncil.com/wp-content/themes/divi-child-theme/assets/fonts/stylesheet.css" />
    <!-- <link rel="stylesheet" href="<?php echo get_theme_file_uri('/assets/fonts/stylesheet.css') ?>" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-jscalendar@1.4.4/source/jsCalendar.min.css"
        integrity="sha384-44GnAqZy9yUojzFPjdcUpP822DGm1ebORKY8pe6TkHuqJ038FANyfBYBpRvw8O9w" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="
https://dev.gilcouncil.com/wp-content/themes/divi-child-theme/css-landing/style.css" /> -->
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css-landing/style.css') ?>" />

    <title> <?php echo get_post_field( 'post_title', get_post() ); ?> </title>
</head>
<main class="<?php echo get_post_field( 'post_name', get_post()) == 'growth-prospect' ? "page-prospects" : "" ?> ">
    <?php
		if (have_rows('landing_page_content')) :
			get_template_part('template-parts/main', 'content');
		endif;
	?>
    <a href="#page-container" class="fs-back-to-top fs-scroller"><span class="fs-icon fs-icon-angle-down"></span></a>
</main>

<div class="overlay">
    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" type="text/html"
        src="https://www.youtube.com/embed/DBXH9jJRaDk?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=http://youtubeembedcode.com"></iframe>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-jscalendar@1.4.4/source/jsCalendar.min.js"
    integrity="sha384-0LaRLH/U5g8eCAwewLGQRyC/O+g0kXh8P+5pWpzijxwYczD3nKETIqUyhuA8B/UB" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- <script  type="text/javascript" src="https://dev.gilcouncil.com/wp-content/themes/divi-child-theme/sliderScript.js"></script>
  <script  type="text/javascript" src="https://dev.gilcouncil.com/wp-content/themes/divi-child-theme/script.js"></script> -->
<script type="text/javascript" src="<?php echo get_theme_file_uri('/sliderScript.js'); ?>"></script>
<script type="text/javascript" src="<?php echo get_theme_file_uri('/scriptCalendar.js'); ?>"></script>
<script type="text/javascript" src="<?php echo get_theme_file_uri('/script.js'); ?>"></script>
<?php } else { wp_redirect( 'https://beta.gilcouncil.com/growth-prospect');?>
<?php } ?>