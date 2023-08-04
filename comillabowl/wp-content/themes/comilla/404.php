<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

	<header class="page-header alignwide">
		<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?></h1>
	</header><!-- .page-header -->

	<div class="error-404 not-found default-max-width">
		<section class="pt-5 error-page pb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12 mb-4 mb-lg-0">
      <div class="error-heading">
      <h1>
        404
      </h1>
      <h2>
        FUMBLE!<br>PAGE NOT FOUND
      </h2>
      </div>
      <div class="error-banner">

        <img src="../assests/404-banner.png"/>
      </div>
      </div>
    
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="error-sidebar-wrapper">
                <h4>
                  POPULAR PAGES
                </h4>
                <ul>
                  <li><a class="sidebar-item" href="#">TICKET INFORMATION</a></li>
                  <li><a class="sidebar-item" href="#">STADIUM INFORMATION & POLICIES</a></li>
                  <li><a class="sidebar-item" href="#">STADIUM MAP</a></li>
                  <li><a class="sidebar-item" href="#">TRAVEL</a></li>
                  <li class="border-bottom-0"><a class="sidebar-item" href="#">EVENT SCHEDULE</a></li>

                </ul>
        </div>
  
        <div class="error-sidebar-wrapper trending-post mt-4">
          <h4>
            TRENDING POSTS
          </h4>
          <ul>
            <li><a class="sidebar-item" href="#">FRESNO STATE 31, UTEP 24 - 2021 PUBG</a></li>
            <li><a class="sidebar-item" href="#">FRESNO STATE 31, UTEP 24 - 2021 PUBG MOBILE NEW MEXICO</a></li>
            <li><a class="sidebar-item" href="#">FRESNO STATE 31, UTEP 24 - 2021 PUBG MOBILE NEW</a></li>
            <li><a class="sidebar-item" href="#">2021 PUBG MOBILE NEW MEXICO</a></li>
            <li class="border-bottom-0"><a class="sidebar-item " href="#">FRESNO STATE 31, UTEP 24 - 2021 PUBG MOBILE</a></li>

          </ul>
  </div>
      </div>
    </div>
    <!-- Gallery -->
  </div>
</section>
	</div><!-- .error-404 -->

<?php
get_footer();