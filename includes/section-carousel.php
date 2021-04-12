<?php 

$args = array('post_type' => 'post', 'numberpost'=>3);
$query = new WP_Query($args);

?>



<div id="courselIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">

    <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
    <li data-target="#courselIndicators" data-slide-to="<?php echo $query->current_post ?>" class="<?php if($query->current_post == 0) : ?>active<?php endif; ?>"></li>
    <?php endwhile; endif; ?>
  </ol>
  <?php rewind_posts() ?>

  <div class="carousel-inner">

    <?php if($query->have_posts()) : while($query->have_posts()) :
        $query->the_post();
        $thumbnailID = get_post_thumbnail_id();
        $imageURL = wp_get_attachment_image_src($thumbnailID, 'full');
        $altText = get_post_meta($thumbnailID, '_wp_attachment_alt', true);

        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
    ?>


<div class="carousel-item <?php if ( $query->current_post == 0 ) : ?>active<?php endif; ?>">
            <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <?php the_post_thumbnail('carousel'); ?>
            </a>
            <?php endif; ?>

            <div class="container bg-dark">
              <div class="carousel-caption text-left">
                <h1><?php the_title(); ?></h1>
                <p>Posted by: <?php echo $fname?> <?php echo $lname ?></p>
                <p class="d-flex d-sm-block"><?php the_excerpt(); ?>
                    <a class="btn btn-primary" href="<?php the_permalink();?>">Continue Reading</a>
                </p>
              </div>
            </div>
    	   </div>

	<?php endwhile;	endif; ?>
    </div>
</div>