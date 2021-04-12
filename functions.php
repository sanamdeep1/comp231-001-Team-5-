<?php


/* Setting up the layout for adding/updating pages and posts */
function gsp_setup(){
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('title_tag');
    add_theme_support('custom-logo');

    add_image_size('carousel', 800, 400, array('center', 'center'));
}
add_action('after_setup_theme', 'gsp_setup');


/* Adding stylesheets to the wp_head hook to add to head element */
function gsp_registerStyles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('gsp_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css", array(), '4.5.2', 'all');
    wp_enqueue_style('gsp_fontAwesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), '5.15.3', 'all');
    wp_enqueue_style('gsp_customStyle', get_template_directory_uri() . "/style.css", array('gsp_bootstrap'), $version, 'all');


}
add_action('wp_head', 'gsp_registerStyles');


/* Adding required scripts */
function gsp_registerScripts(){

    wp_enqueue_script('gsp_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array('gsp_jQuery'), '4.5.2', true);
    wp_enqueue_script('gsp_jQuery', "https://code.jquery.com/jquery-3.6.0.min.js", array(), '3.6.0', true);
    wp_enqueue_script('gsp_customScript', get_template_directory_uri() . '/assets/scripts/script.js', array('gsp_jQuery'), '1.0', true);


}
add_action('wp_enqueue_scripts', 'gsp_registerScripts');

/* Adding nav menu support */
function gsp_menus(){

    register_nav_menus(array(
        'primary' => 'Top of page'
    ));

}


/*Creating custom "article" post type */
function article_post_type(){

    $args = array(
        'labels' => array(
            'name' => 'Articles',
            'singular_name' => 'Article',
            'menu_name' => 'Articles',
            'name_admin_bar' => 'Articles',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Article',
            'edit_item' => 'Edit Article',
            'new_item' => 'New Article',
            'view_item' => 'View Article',
            'search_items' => 'Search Articles',
            'item_published' => 'Article Published'
        ),
        'public' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'hierarchical' => true,
        'menu_icon' => 'dashicons-media-spreadsheet',
        'has_archive' => true,
        'supports' => array('title', 'excerpt','custom-fields')
    );
    register_post_type('article', $args);
}
add_action('init','article_post_type');



/* Adding tag support for custom "article" post type */
function article_taxonomy(){

    $args = array(
        'labels' => array(
                'name' => ' Tags',
                'singular_name' => 'Tag'
        ),
        'public' => true,
        'hierarchical' => false,
        'query_var' => true,
        'show_ui' => true,
        'rewrite'     => array( 'slug' => 'article-tags' )
    );

    register_taxonomy('article-tags', array('article'), $args);
}
add_action('init', 'article_taxonomy');

?>