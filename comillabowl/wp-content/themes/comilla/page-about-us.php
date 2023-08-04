  <?php
  get_header(); ?>
 
  <section class="pt-5 breadcrumb-section">
      
    <div class="container">
      <div aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.html">HOME</a></li>
            <li class="breadcrumb-item"><a href="../index.html">THE BOWL</a></li>
            <li class="breadcrumb-item active" aria-current="page">ABOUT</li>
          </ol>
       
      </div>
    </div>
 
    
</section>
<section class="bowl-results-heading">
  <div class="container">
  <?php
          // Check rows existexists.
          if( have_rows('about_us_content') ):
          
              // Loop through rows.
              while( have_rows('about_us_content') ) : the_row();
            
              ?>
      <div class="about-cotent-wrapper">
        <div class="content-inner-wrap">
          <div class="bowl-results-wrapper">
            
            <div class="bowl-result-heading pt-3">
              <h1> <?php echo get_sub_field('about_us_heading');?></h1>
            </div>
          </div>
          <div class="underline">
            <div class="under-line"></div>
          </div>

          <p>
          <?php echo get_sub_field('about_description');?>
          </p>
        </div>
        </div>
    <?php     

// End loop.
endwhile;

// No value.
else :
// Do something...
endif;
wp_reset_query();
?>

  </div>
</section>


<section class="pt-5 about-us-slider">

  <div class=" quote-slider-wrapper" style="<?php echo get_template_directory_uri(); ?>/images/legend-2.png" alt="">
    <!-- Slideshow container -->
    <div class="slideshow-container">


                  <?php
                        // Check rows existexists.
                        if( have_rows('quote_slider') ):
                        
                            // Loop through rows.
                            while( have_rows('quote_slider') ) : the_row();
                          
                            ?>

                              <div class="mySlides">
                                      <div class="slider-image">
                                        <div class="slider-image-1">

                                          <img src="<?php echo get_template_directory_uri(); ?>/images/quote-slider-1.png" alt="">
                                        </div>
                                        <div class="slider-image-2">

                                          <img src="<?php echo get_template_directory_uri(); ?>/images/quote-slider-2.png" alt="">
                                        </div>
                                      </div>
                                      <p class="author"> <?php echo get_sub_field('quote-description');?>
                                    </p>
                                      <h3 class="pt-4">
                                      <h1> <?php echo get_sub_field('quote_title');?></h1>
                                      </h3>
                                    </div>
                                
                                 
                          <?php     

                            // End loop.
                            endwhile;

                        // No value.
                        else :
                            // Do something...
                        endif;
                        wp_reset_query();
                        ?>

      <!-- Full-width slides/quotes -->
  
    
      <!-- Next/prev buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
       <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
    <!-- Dots/bullets/indicators -->
    <div class="dot-container ab-dot-container">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
    </div>
  </div>
</section>




<!-- footer starts here  -->
<?php
get_footer(); ?>