<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post();?>

    <p><?php echo get_the_date() ?></p>

    <?php the_content() ?>

    <?php

        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');

    ?>

    <p>Posted by: <?php echo $fname ?> <?php echo $lname ?> </p>

    <?php endwhile; ?>
<?php endif; ?>