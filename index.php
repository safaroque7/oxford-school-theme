<?php get_header();

/**
 * Template Name: Template Home
 */

//banner start
get_template_part('parts/banner');

//history part
get_template_part('parts/history');

//committee part
get_template_part('parts/committee');

?>

<div class="container bg-light">
    <?php  //gallery part
    get_template_part('parts/gallery');
    ?>
</div>

<?php get_footer(); ?>