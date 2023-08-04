<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Comilla
 * @since Twenty Twenty-One 1.0
 */

?>
	<!-- footer starts here  -->
  <footer>
    <!-- grid footer   --> 

    <section class="footer-top pt-5 pb-5">
      <div class="container ">
        
        <div class="row flex-wrap">

        <?php

        // Check rows existexists.
        if( have_rows('footer_card', 'option') ):
          while( have_rows('footer_card','option') ) : the_row();
          ?>

          <div class="col-3  cardss">
            <div class="footer-card-wrapper mt-5" id="overlay" style="background:linear-gradient(0deg, rgb(0 74 255 / 75%), rgb(0 36 255 / 75%)), url(<?php echo the_sub_field('card_background'); ?>)">
              <div class="footer-card pt-4">
                <h3 class="text-white">
                <?php echo get_sub_field('card_title');?>
                </h3>
                <div class="footer-box-wrapper">
                  <div class="footer-box">

                  </div>
                </div>
              </div>

            </div>

          </div>

          <?php
            endwhile;
        else :
        endif;
        wp_reset_query();
?>

        </div>
      </div>
    </section>

 <!-- main footer  -->

    <section class="footer-main pt-5 mt-5">
      <div class="container">

        <div class="footer-main-wrapper pt-5 pb-5">
          <div class="footer-main-content">
            <h3>
              STAY IN THE KNOW
            </h3>
            <p>
              Sign up for our news letters to recieve the latest events,news and promotions.
            </p>
            <form>
              <div class="subscribe">
                <form action="">
                  <input type="text" class="email" placeholder="ENTER YOUR EMAIL HERE" />
                </form>
                <button class="btn-submit subscribe-btn">SUBSCRIBE</button>
              </div>
              <div class="input-group pt-3 justify-content-center">
                <div class="checkbox">
                  <label>
                    <input id="login-remember" type="checkbox" name="remember" value="1"> </label>
                  <p>
                    I'd like receive updates, special offers, and other information via <br>
                    electronic messages from ESPN Events and other members <br> of The Walt Disney Family  of Companies.
                    Privacy Policy
                  </p>
                </div>
              </div>
          </div>
          </form>
        </div>
      </div>

    </section>


    <!-- bottom footer  -->
    <section class="footer-bottom pt-4">
      <div class="container-fluid">
        <div class="bottom-wrapper">
          <div class="bootom-1">
            <h5>
              <a href="<?php the_field('camellia_bowl_link'); ?>">Camellia Bowl</a>
            </h5>
          </div>
          <div class="bootom-1">
            <h5>
              Follow 
              <a href="<?php the_field('twitter_link'); ?>"><span>Twitter</span></a>
            </h5>
          </div>
          <div class="bootom-1">
            <h5>
              Follow
              <a href="<?php the_field('facebook_link'); ?>"><span>Facebook</span></a>
              
            </h5>
          </div>
          <div class="bootom-1">
            <h5>
              Follow
              <a href="<?php the_field('youtube_link'); ?>"><span>YouTube</span></a>
            </h5>
          </div>
          <div class="bootom-1 venture">
            <h5>             
              <a href="<?php the_field('espn_internet_ventures'); ?>">© 2023 ESPN Internet Ventures.</a>
            </h5>
          </div>


        </div>
        <div class="footer-right pt-5">
          <p>
            Terms of Use, Privacy Policy and Safety Information, Your California Privacy Rights,  and Children's Privacy
            Policy are <br> applicable to you. All Rights Reserved. Interest-Based Ads. Website Developed and Designed by
            Power On Marketing
          </p>
        </div>
      </div>
    </section>


  </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
  <script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
  </script>
  <script>
    $('#legend-slider').owlCarousel({
     loop: true,
     margin: 30,
     dots: false,
     nav: true,
     items: 4,
     singleItem: false,
     responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
     
 })
</script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>
  <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('.modal-body input').val(recipient)
    })
  </script>
  <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

<?php wp_footer(); ?>
</body>

</html>
