<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header();?>

    <h1><?php the_title(); ?> </h1>

    <div class="row">
        <div class="col-6">
            This is where the contact us form would go.
        </div>

        <div class="col-6">
            <?php get_template_part('includes/section', 'ContactUsForm'); ?>
        </div>
    </div>


<?php get_footer(); ?>