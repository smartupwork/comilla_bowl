<?php
/* Template Name: Home Page */ 

get_header();
?>

<section class="banner" style="background-image: url(<?php echo the_field('banner_background_image'); ?>);">
    <div class="container">
      <div class="banner-wrapper">
        <div class="banner-content text-center text-white">
          
          <h1>
          <?php the_field('banner_heading'); ?>
          </h1>
        </div>
        <div class="box pt-2">
          <div class="borderbottom"></div>
        </div>
        <div class="banner-para text-center text-white pt-5">
          <p>
          <?php the_field('banner_title'); ?>
          </p>
        </div>
        <div class="banner-btn-wrapper pt-5">
          <div class="purchase-btn-wrapper">
            <button type="button" class="btn purchase-btn "><?php the_field('first_button_text'); ?></button>
          </div>
          <div class="view-btn-wrapper">
            <button type="button" class="btn view-btn"><?php the_field('second_button_text'); ?></button>

          </div>
        </div>
        <div class="vertical-togglee">
          <a class="btn togglee-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
            aria-controls="offcanvasExample">
          </a>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <div class="offcanvas-image">
                <div class="logo1">
                  <img src="assests/MIDAMERICAN.png" alt="">
                </div>
                <div class="logo2">
                  <img src="assests/SUNBELT_ALTERNATE.png" alt="">
                </div>
              </div>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <div>
                <h4 class="offcanvas-head-con">
                  <span>
                    December 21, 2023
                  </span> 5:30PM ET/4:30PM CT on ESPN
                </h4>
                <h4 class="offcanvas-head-con2 pt-3">
                  <span>
                    The Historic Cramton Bowl
                  </span> Montgomery, Alabama
                </h4>
              </div>

              <div class="canvas-btn-wrapper pt-5 mt-5">
                <button type="button" class="btn canvas-btn">TICKET INFO</button>
              </div>

              <div class="clock-wrapper  pt-2 pb-2">
                <div class=" text-center">
                  <div class="col-sm-12 pb-1">
                    <h4 id="clock-header" class="pt-2">COUNTDOWN TO KICKOFF</h4>
                  </div>
                  <div class="dates">
                    <div class="col-sm-3 col-xs-6 ">
                      <div class="clock">
                        <div class="well top-section">
                          <div id="days" class="num">00</div>
                        </div>
                        <div class="well bottom-section">
                          <div id="days-text" class="text">DAYS</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                      <div class="clock">
                        <div class="well top-section">
                          <div id="hours" class="num">00</div>
                        </div>
                        <div class="well bottom-section">
                          <div id="hours-text" class="text">HOURS</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                      <div class="clock">
                        <div class="well top-section">
                          <div id="mins" class="num">00</div>
                        </div>
                        <div class="well bottom-section">
                          <div id="mins-text" class="text">MINS</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                      <div class="clock">
                        <div class="well top-section">
                          <div id="secs" class="num">00</div>
                        </div>
                        <div class="well bottom-section">
                          <div id="secs-text" class="text">SECS</div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="info" class="small"></div>
                </div>
              </div>
              <div class="color-line-wrapper mt-5">
                <div class="color-line-1">

                </div>
              </div>
              <div class="color-line-wrapper">
                <div class="color-line-2">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>


<!-- conference and news section  -->

  <section>
    <div class="container pt-5">
      <div class="row">
        <div class="col-lg-6 left-section">
          <h3>Conference Standings</h3>
          <div class="conference-wrapper"> 
            <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">

              <li class="nav-item" role="presentation">

                <a class="nav-link nav-tabss-1 active" id="ex1-tab-4" data-bs-toggle="tab" href="#ex1-tabs-4" role="tab"
                  aria-controls="ex1-tabs-4" aria-selected="true">
                  <img class="img1" src="<?php echo get_template_directory_uri(); ?>/images/SUNBELT_ALTERNATE.png" alt="">
                  <img class="img2" src="<?php echo get_template_directory_uri(); ?>/images/SUNBELT_ALTERNATE-2.png" alt="" />
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link nav-tabss-2" id="ex1-tab-5" data-bs-toggle="tab" href="#ex1-tabs-5" role="tab"
                  aria-controls="ex1-tabs-5" aria-selected="false">
                  <img class="img1" src="<?php echo get_template_directory_uri(); ?>/images/MIDAMERICAN.png" alt="">
                  <img class="img2" src="<?php echo get_template_directory_uri(); ?>/images/MIDAMERICAN-2.png" alt=""></a>
              </li>

            </ul>
            <div class="tab-content" id="ex1-content">
              <div class="tab-pane fade show active" id="ex1-tabs-4" role="tabpanel" aria-labelledby="ex1-tab-4">
                <div class="row tab-panel-titles">
                  <div class="col-6">
                    <h5>
                      SCHOOLS
                    </h5>
                  </div>
                  <div class="col-2">
                    <h5>
                      CONF.
                    </h5>
                  </div>
                  <div class="col-2">
                    <h5>
                      ALL
                    </h5>
                  </div>
                  <div class="col-2">
                    <h5>
                      STREAK
                    </h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 gx-0 east">
                    <h5 class="bg-primary text-white ps-1 pt-2 pb-2">
                      East
                    </h5>
                  </div>
                </div>
                <div class="row ">
                  <div class="col-12">
                    <div class="row justify-content-center align-items-center team-sec bg-white">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/team8.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Coastal Carolina
                            </h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/team9.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              James Madison
                            </h5>
                          </div>

                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec bg-white">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/team10.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Marshall
                            </h5>
                          </div>

                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/team11.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              App State
                            </h5>
                          </div>

                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec bg-white">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/team12.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Georgia Southern
                            </h5>
                          </div>






                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>

                    <div class="row justify-content-center align-items-center team-sec">
                      <div class="col-6">

                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/team13.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Georgia State
                            </h5>
                          </div>






                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec bg-white">
                      <div class="col-6">


                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/team14.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Old Dominion
                            </h5>
                          </div>






                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 gx-0 east">
                    <h5 class="bg-primary text-white ps-1 pt-2 pb-2">
                      West
                    </h5>
                  </div>
                </div>
                <div class="row ">
                  <div class="col-12">
                    <div class="row justify-content-center align-items-center team-sec bg-white">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/team1.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Troy
                            </h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/team2.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              South Alabama
                            </h5>
                          </div>

                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec bg-white">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/team3.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Louisiana
                            </h5>
                          </div>

                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/team4.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Southern Miss
                            </h5>
                          </div>

                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec bg-white">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/team5.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              ULM
                            </h5>
                          </div>






                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>

                    <div class="row justify-content-center align-items-center team-sec">
                      <div class="col-6">

                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/team6.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Texas State
                            </h5>
                          </div>






                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec bg-white">
                      <div class="col-6">


                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/team7.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Arkansas State
                            </h5>
                          </div>






                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



              </div>
              <div class="tab-pane fade" id="ex1-tabs-5" role="tabpanel" aria-labelledby="ex1-tab-5">
                <div class="row tab-panel-titles">
                  <div class="col-6">
                    <h5>
                      SCHOOLS
                    </h5>
                  </div>
                  <div class="col-2">
                    <h5>
                      CONF.
                    </h5>
                  </div>
                  <div class="col-2">
                    <h5>
                      ALL
                    </h5>
                  </div>
                  <div class="col-2">
                    <h5>
                      STREAK
                    </h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 gx-0 east">
                    <h5 class="bg-primary text-white ps-1 pt-2 pb-2">
                      MAC-EAST
                    </h5>
                  </div>
                </div>
                <div class="row ">
                  <div class="col-12">
                    <div class="row justify-content-center align-items-center team-sec bg-white">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/teamb1.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Ohio
                            </h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/teamb2.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Bowling Green
                            </h5>
                          </div>

                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec bg-white">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/teamb3.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Buffalo
                            </h5>
                          </div>

                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/teamb4.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Miami
                            </h5>
                          </div>

                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec bg-white">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/teamb5.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Kent State
                            </h5>
                          </div>






                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>

                    <div class="row justify-content-center align-items-center team-sec ">
                      <div class="col-6">

                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/teamb6.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Akron
                            </h5>
                          </div>






                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col-12 gx-0 east">
                    <h5 class="bg-primary text-white ps-1 pt-2 pb-2">
                      MAC-WEST
                    </h5>
                  </div>
                </div>
                <div class="row ">
                  <div class="col-12">
                    <div class="row justify-content-center align-items-center  team-sec bg-white">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/teamb7.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Eastern Michigan
                            </h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/teamb8.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Toledo
                            </h5>
                          </div>

                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec bg-white">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/teamb9.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Western Michigan
                            </h5>
                          </div>

                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/team10.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Ball State
                            </h5>
                          </div>

                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center align-items-center team-sec bg-white">
                      <div class="col-6">
                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/teamb11.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Central Michigan
                            </h5>
                          </div>






                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>

                    <div class="row justify-content-center align-items-center team-sec ">
                      <div class="col-6">

                        <div class="team-logo-wrapper d-flex justify-content-start align-items-center">
                          <div class="team-logo">
                            <img src="assests/teamb12.png" alt="">
                          </div>
                          <div class="team-name">
                            <h5>
                              Northern Illinois
                            </h5>
                          </div>






                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                      <div class="col-2">
                        <div class="score-wrapper d-flex text-center">
                          <div class="score">
                            <h5>
                              0-0
                            </h5>
                          </div>


                        </div>
                      </div>
                    </div>

                  </div>
                </div>



              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-6 news-section">
          <div class="news-title">
            <h4>
              NEWS
            </h4>
          </div>

                      <?php 
                    query_posts(array(
                      'post_type' => 'news',
                      'post_status' => 'publish',
                    )); ?>
            <?php
            while (have_posts()) : the_post(); ?>

                      <div class="row gx-0 news">
                        <div class="col-4 pt-4 pb-4">

                          <div class="news-image">
                            <?php the_post_thumbnail('thumbnail');?>
                      
                          </div>
                        </div>
                        <div class="col-8 pt-4 pb-4">
                          <div class="news-content-wrapper">
                            <div class="news-content pt-2">
                              <h5>
                                <?php the_date()?>
                  
                              </h5>
                              <p>
                              <?php the_title(); ?>
                              </p>
                            </div>
                          </div>

                        </div>
                      </div>
            
            
            <?php endwhile;
            wp_reset_query();
            ?>

              

          <div class="row pt-2">
            <div class="news-btn-wrapper">
              <button type="button" class="btn news-btn">NEWS ARCHIVE</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<!-- legends section  -->

  <section>
    <div class="container pt-5">
      <div class="legend-heading">
        <h3>
          LEGENDS OF THE GAME
        </h3>
     
      </div>
      <div class="legends-slider">
        <div class="legend-heading">
          <p>
            The Camellia Bowl honors an Alabama Football Legend each year at the Camellia <br> Bowl Luncheon on the 
            Friday before the game. The annual award is presented by Regions Bank.
          </p>
        </div>
        <div id="legend-slider" class="owl-carousel owl-theme">

           <?php
          // Check rows existexists.
          if( have_rows('slider_list') ):
          
              // Loop through rows.
              while( have_rows('slider_list') ) : the_row();
            
              ?>

              <div class="legends-content-1">
                <img src="<?php echo get_sub_field('slider_image');?>" alt="">
                <h4>
                  <?php echo get_sub_field('slider_title');?>
                </h4>
                <h5>
                <?php echo get_sub_field('slider_year');?>
                </h5>
                <a href="<?php echo get_sub_field('read_more_link');?>">LEARN MORE</a>
                <!-- <button type="button" class="btn   p-0 learn-more">LEARN MORE ></button> -->
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
  
      </div>
  

      <div class="mobile-legends p-2">
        <h3>
          LEGENDS OF THE GAME
        </h3>
        <p>
          The Camellia Bowl honors an Alabama Football Legend each year at the Camellia Bowl Luncheon on the
          Friday before the game. The annual award is presented by Regions Bank.
        </p>
        <div class="legends-content-mobile">
          <img src="<?php echo get_template_directory_uri(); ?>/images/legend-2.png" alt="">
          <h4>
            LARRY BLAKENEY
          </h4>
          <h5>
            2019
          </h5>
          <button type="button" class="btn   p-0 learn-more">LEARN MORE ></button>
        </div>
      </div>
      <div class="view-all-btn">
        <button type="button" class="btn   p-0 view-alll">LEARN MORE ></button>
      </div>
     

    </div>

  </section>

<!-- Events section  -->

  <section class="event mt-5">
    <div class="container pt-4">
      <div class="events-wrapper">
        <div class="events">
          <h3>
            EVENTS SCHEDULE
          </h3>
        </div>
        <div class="row gap-3 ">
        

        <?php

        // Check rows existexists.
        if( have_rows('events_schedule') ):
          while( have_rows('events_schedule') ) : the_row();
          ?>
    <div class="col-lg-4 event-row">
            <div class="row  event-height">
              <div class="col-sm-4 bg-primary event-title">
                <h5 class="text-white">
                <?php echo get_sub_field('event_date');?>
                </h5>
              </div>
              <div class="col-sm-8 event-content pt-2">
                <h5>
                <?php echo get_sub_field('event_rally');?>
                </h5>
                <h6>
                <?php echo get_sub_field('event_time');?>
                </h6>
                <p>
                <?php echo get_sub_field('event_sponser');?>
                </p>
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

        <div class="event-btn-wrapper d-flex justify-content-center pt-5 pb-5">
          <button type="button" class="btn event-btn">FULL EVENT SCHEDULE</button>
        </div>

      </div>
    </div>
  </section>

<!-- gallery section  -->

  <section class="gallery">
    <div class="container">
      <div class="gallery-wrapper">
        <div class="row">
          <div class="col-sm-9 img-box-wrapper-1">
            <div class="row">
              <div class="col-1 vertical-text">
                <div class="gallery-title">
                  <h3>
                    IMAGE <span class="text-primary">GALLERY</span>
                  </h3>
    
                </div>
              </div>
              <div class="col-11 img-box-wrapper gx-0">
                <div class="img-box-heading">
                  <h4>
                    VIEW ALL GALLERIES
                  </h4>
                </div>
                <div class="img-box">


                <?php

// Check rows existexists.
                if( have_rows('image_box') ):
                  while( have_rows('image_box') ) : the_row();
                  ?>

                <div class="slide " style="background-image: url(<?php echo the_sub_field('image_box_background'); ?>">
                    
                    <div class="slide-con ">

                      <h3><?php the_sub_field('image_box_title'); ?></h3>

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
            </div>
           

          </div>
        
          <div class="col-sm-3 owl-sliders gx-0">
            
            <div class="sliders-wrapper">
              <div class="owl-carousel owl-theme">





                                    <?php

                      // Check rows existexists.
                      if( have_rows('sponsers_slider') ):
                        while( have_rows('sponsers_slider') ) : the_row();
                        ?>
                        <div class="item">
                          <img src="<?php echo the_sub_field('sponser_logo'); ?>">
                        
                        
                        
                        </div>

                        <?php
                          endwhile;
                      else :
                      endif;
                      wp_reset_query();
                      ?>

              </div>
              <div class="sponser-btn-wrapper">
                <button type="button" class="btn btn-sponser">VIEW ALL SPONSORS</button>
              </div>


            </div>




            <div class="sliders-wrapper-2">
              <div class="slider-heading">
                <img src="<?php echo get_template_directory_uri(); ?>/images/team1.png" alt="">
                <div class="slider-heading-2">
                  <h4>
                    Camellia Bowl
                  </h4>
                  <p>
                    May 2 at 3:49 PM
                  </p>
                </div>
              </div>
              <div class="slider-paragraph">
                <p>
                  We are proud to have one of our conference partners host their annual baseball tourname[…]
                </p>
              </div>

              <div class="owl-carousel owl-theme">




                                    <?php

                      // Check rows existexists.
                      if( have_rows('conference_partner_slider') ):
                        while( have_rows('conference_partner_slider') ) : the_row();
                        ?>
                        <div class="item">
                          <img src="<?php echo the_sub_field('partner_logo'); ?>">
                        
                        
                        
                        </div>

                        <?php
                          endwhile;
                      else :
                      endif;
                      wp_reset_query();
                      ?>

              </div>



            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

	<?php 
get_footer();
	?>
