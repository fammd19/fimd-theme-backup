<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template"> 
    <link rel="shortcut icon" href="/assets/images/favicon.svg"> 

    <?php
    wp_head();
    ?>

</head>
<body id="body"> 
<header>      
    <nav class="navbar navbar-expand-lg fixed-top light navbar-dark">
        <?php 
            if (function_exists('the_custom_logo')){
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
    
            }
        ?>
        <img class="navbar-brand order-1 icon" alt="" src="<?php echo $logo[0] ?>">
        <div class="title order-1">
            <?php echo get_bloginfo('name'); ?>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
        <div class="offcanvas-header">
					<button
						type="button"
						class="btn-close text-reset btn-close-white"
						data-bs-dismiss="offcanvas"
						aria-label="Close"
					></button>
				</div>
        <div class="offcanvas-body">

          <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="" class="navbar-nav">%3$s</ul',
                )
                );
          ?>

          </div>
        </div>
      </nav>

</header>