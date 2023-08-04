<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <link rel="stylesheet" href="	<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.min.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.min.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/mjz4fsu.css">
    <link rel="stylesheet" href="https://use.typekit.net/mjz4fsu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <div class="row mx-0" id="header">
    <header class="container-fluid gx-0  ">
      <nav class="navbar navbar-expand-lg navbar-light  p-0  ">

        <div class="col-sm-3 logo-section">
          <div class="logo  d-flex justify-content-center">
            <img src="  <?php the_field('site_logo', 'option'); ?>" alt="">
          </div>
        </div>
        <div class="tablet-header">
          <h2>
            Tickets
          </h2>

          <!-- Button trigger modal -->
          <button type="button" class="btn " data-toggle="modal" data-target="#exampleModal">
            <img src="<?php echo get_template_directory_uri(); ?>/images/search-icon-png-5.png" id="basic-primary-trigger" alt="">
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-sm-9 ">
          <div class="row gx-0 align-items-center">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="col-sm-7 menu-col">

              <?php
              // Display custom menu
              wp_nav_menu(
                array(
                    'theme_location'  => 'primary',
                    'menu_class'      => 'menu-wrapper',
                    'container_class' => 'primary-menu-container',
                    'items_wrap'      => '<ul  id="primary-menu-list" class="%2$s">%3$s</ul>',
                    'fallback_cb'     => true,
                )
            );
              ?>
              
              </div>
              <div class="col-sm-5">
                <div class="input-group">
                  <div class="form-outline">
                    <span class="search-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/SearchIcon.svg" alt=""> </span>
                    <input class="search" type="search" placeholder="Search..">
                
                  </div>

                </div>
              </div>


            </div>
          </div>
        </div>

      </nav>
    </header>

  </div>
  <div class="bottom-header bg-dark pt-1 pb-1">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-sm-8">
          <div class="december">
            <h2 class="mb-0">
            <?php the_field('bottom_header_title', 'option'); ?>
            </h2>
          </div>
        </div>
        <div class="col-sm-4 d-flex justify-content-center">
          <div class="nav-lists d-flex justify-content-start">
            <ul class="navbar-nav sec-navbar mr-auto">
              <li class="nav-items">
                <a class="nav-links" href="#">Contact</a>
              </li>
              <li class="nav-items">
                <a class="nav-links" href="#">Shop</a>
              </li>
              <li class="nav-items">
                <a class="nav-links" href="#">Visit Montgomery</a>
              </li>
            </ul>
            <div class="social-icons">
              <svg xmlns="http://www.w3.org/2000/svg" height="0.875em"
                viewBox="0 0 320 512">     <style>
                  svg {
                    fill: #ffffff
                  }
                </style>
                <path
                  d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                viewBox="0 0 512 512">  <style>
                  svg {
                    fill: #ffffff
                  }
                </style>
                <path
                  d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
              </svg>
              <svg xmlns="<?php the_field('youtube', 'option'); ?>" height="1em"
                viewBox="0 0 576 512">           <style>
                  svg {
                    fill: #ffffff
                  }
                </style>
                <path
                  d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>