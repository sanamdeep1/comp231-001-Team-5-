<?php get_header();?>

<div class="row">

    <div id="carousel" class="col-5">

        <div class="row justify-content-center"><h2 class="">Latest Updates</h2></div>
        <div id="carouselContainer">
            <?php get_template_part('includes/section','carousel'); ?>
        </div>


    </div>

    <div id="pages-cards" class="col-7">
         
        <?php get_template_part('includes/section','frontPageCards'); ?>

    </div>
</div>

<?php get_footer(); ?>