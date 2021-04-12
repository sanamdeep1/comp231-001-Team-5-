    <!doctype html>
    <html>
        <head lang="en">
            <meta charset="<?php bloginfo('charset') ?>">
            <title><?php wp_title('|', true, 'right') ?></title>
            <link type="text/css" rel="stylesheet" href="">
            <?php
                wp_head();
            ?>
        </head>
        <body>
                <header class="mt-3">
                    <div id="title-card" class="row">
                        <div class="col-3">
                            <?php 
                                if(function_exists('the_custom_logo')){
                                    
                                    $custom_logo_id = get_theme_mod('custom_logo');
                                    $logo = wp_get_attachment_image_src($custom_logo_id);
                                }
                            ?>
                            
                            <a class="gsp-logo" href="<?php echo home_url() ?>">
                                <img class="gsp-logo-img img-fluid" src="<?php echo $logo[0] ?>" alt="Logo of Global Summitry Project">
                            </a>
                        </div>
                        <div class="col-">
                            <h3 class="gsp-byline">Providing a more comprehensive perspective on meetings...</h3>
                        </div>
                        <div class="col-3" id="formContainter">
                            <?php
                                get_search_form()
                            ?>
                        </div>
                    </div>

                                
                    <?php if( ! is_front_page()): ?>

                            <nav class="navigation">
                                <?php
                            
                                    wp_nav_menu(array(
                                        'menu' => 'primary',
                                        'depth' => 2,
                                        'theme_location' => 'primary',
                                        'menu_class' => 'customNav',
                                        'menu_id'=>'headerMenu'
                                    ));
                                ?>
                            </nav>

                    <?php endif; ?>

                    
                </header>
                <div id="mainBody" class="container">
                <main class="page-wrap">
                 