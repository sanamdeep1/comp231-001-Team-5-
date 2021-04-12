<?php get_header();?>

    <h1><?php the_title(); ?> </h1>

    <?php get_template_part('includes/section', 'content'); ?>

    <p>Tags: 
        <?php $articleTerms = wp_get_post_terms($post->ID, 'article-tags');
                if ($articleTerms) {
                        $tagsArray = array();
                        foreach ($articleTerms as $articleTerm) {
                                $tagsArray[] = '<span><i class="fas fa-tag"></i><a class="' .$articleTerm->slug .'" href="' .get_term_link( $articleTerm->slug, 'article-tags') .'" target="_blank">' .$articleTerm->name .'</a></span>';
                        }
                        echo join( '&nbsp;&nbsp;&nbsp;&nbsp;', $tagsArray );
                };
        ?>
    </p>
    <h5>Abstract:</h5>
    <p class="px-5"><?php echo get_post_meta($post->ID, 'abstract', true) ?></p>

    <p><a href="<?php the_field('pdf_file'); ?>" class="btn btn-dark">Click here for article</a></p>

<?php get_footer(); ?>