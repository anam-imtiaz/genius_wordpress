<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php bloginfo('name'); ?></title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"

/>

<style>

    .swiper {

        width: 115px;

        height: 1090px;

      }

      .swiper2 {

        width: 110px;

        height: 1090px;

      }

      .swiper-slide {

      text-align: center;

      font-size: 18px;

      background: #444;

      display: flex;

      justify-content: center;

      align-items: center;

    }



    .swiper-slide img {

      display: block;

      width: 100%;

      height: 100%;

      object-fit: cover;

      opacity: 0.6;

    }

</style>



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <link href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <?php wp_head(); ?>

</head>

<?php 

function isMobileDevice() {

    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    $mobileKeywords = [

        'Mobile', 'Android', 'Silk/', 'Kindle', 'BlackBerry', 'Opera Mini', 'Opera Mobi',

        'iPod', 'iPad', 'iPhone', 'iOS' // Specific Apple devices

    ];



    foreach ($mobileKeywords as $keyword) {

        if (stripos($userAgent, $keyword) !== false) {

            return true;

        }

    }

    return false;

}

?>

<body <?php body_class(); ?>>

    <?php if (!isMobileDevice()) { ?>

    <div class="container py-4">

             <div class="row ">

                    <div class="col-9">

                      

                        <header  class=" mb-4 " style="margin-top: 15px;">

                            <a class="d-flex align-items-center text-dark text-decoration-none" href="<?php echo home_url(); ?>"><img class="logo_dir" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a>

                            

                            <div style="float: right;" class=" let-us-prove-container" >

                                <p>Let Us Prove to <span class="you">YOU</span> we are the Planet’s <br>Most Powerful Reading Course</p>

                            </div>

                        </header>

                        <div class="row " >

                                <div class="col-3 godson_eddy">

                                    <span>Godson Eddy</span>

                                    <img class="godson_eddy_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/GodsonEddy.png" alt="">

                                </div>

                                <div class="col-3 strachar" >

                                        <span style="text-align: center;">Ed Strachar </span>

                                        <span class="creator">Creator, Reading Genius</span>

                                            <img class="strachar_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Ed Strachar.png" alt="">

                                           

                                 </div>

                                 <div class="col-6" style="margin-top: -36px;"  >

                                    <div class="video-container">

                                    <iframe class="video_genius_youtube" style="display: none;" id="video_genius_youtube" width="100%" height="100%" src="https://www.youtube.com/embed/eLDf1fbDrN0?controls=1&autoplay=1&mute=1"></iframe>

                                        <video width="100%" height="100%" class="video_genius" id="video_genius" autoplay muted controls >

                                            <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/cover_banner_animation.mp4" type="video/mp4">

                                            <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/cover_banner_animation.ogg" type="video/ogg">



                                            Your browser does not support the video tag.

                                        </video>

                                    </div> 

                                </div>

                        </div>

                        <div class="row py-3 row-cols-1 row-cols-lg-4" style="padding-left: 4px;margin-top:-108px;">

                            <div class="widget_container text-center" >                          

                                    

                                        <p>Real testimonials and results from top readers</p>

                                        <img class="testimonials_icon img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon1.png" alt="">

                                   

                             </div>

                             <div class="widget_container text-center" >

                                

                                    <p>Proven at elite institutions like the Air Force Academy</p>

                                    <img class="elite_icon img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon2.png" alt="">

                                

                            </div>

                            <div class="widget_container text-center" >

                                

                                    <p>Unlock imagination, curiosity, and focus with reading genius</p>

                                    <img class="unlock_icon "  src="<?php echo get_template_directory_uri(); ?>/assets/images/icon3.png" alt="">

                                

                            </div>

                            <div class="widget_container text-center" >

                                

                                        <p>Compare Reading Genius to other program</p>

                                        <img class="genius_icon " src="<?php echo get_template_directory_uri(); ?>/assets/images/icon4.png" alt="">

                                

                            </div>

                        </div>

                            <div class="row">

                                    <div class="col-md-6">

                                        <button class="claim_book"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Freebookbuttonicon.png" alt="">&nbsp;&nbsp;<p> Claim Your FREE Ebook <br><span>The Science Behind Reading Genius 3.0</span></p></button>

                                    </div>

                                    <div class="col-md-6">

                                        <button class="watch_now"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Freelessonbuttonicon.png" alt="">&nbsp;&nbsp;<p> Take a FREE Lesson Today <br><span>Take a free lesson to improve your reading</span></p></button>

                                    </div>

                            </div>

                     </div>

                        

                        

                    <div class="col-1 col-md-1">

                        <!-- Slider main container -->

                        <div class="swiper">

                            <!-- Additional required wrapper -->

                            <div class="swiper-wrapper">

                                <!-- Slides -->

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books about Family/Family_1.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books about Family/Family_2.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books about Family/Family_3.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books about Family/Family_4.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books about Family/Family_5.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books about Family/Family_6.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books about Family/Family_7.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_1.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_2.webp" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_3.webp" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_4.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_5.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_6.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books about Family/Family_7.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_1.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_2.webp" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_3.webp" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_4.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_5.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_6.jpg" alt=""></div>



                            </div>

                            

                            <!-- If we need scrollbar -->

                            <div class="swiper-scrollbar"></div>

                            </div>



                            

                    </div>

                    <div class="col-2 col-md-2">

                        <!-- Slider main container -->

                        <div class="swiper">

                            <!-- Additional required wrapper -->

                            <div class="swiper-wrapper">

                                <!-- Slides -->

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 1.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 2.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 2-.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 3.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 4.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 5.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 6.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 6-.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 8.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 9.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 9-.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 9_.jpg" alt=""></div>

                                

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money_-1.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money_-2.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money1 (1).jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money2 (1).jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money3 (1).jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money4 (1).jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money5 (1).jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money6 (1).jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money7 (1).jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money8.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money9 (1).jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money10 (1).jpg" alt=""></div>



                            </div>

                            

                            <!-- If we need scrollbar -->

                            <div class="swiper-scrollbar"></div>

                            </div>



                            

                    </div>

    		  </div>

    </div>

    		

    <?php }else{ ?>

        

        <div class="container ">

             <div class="row ">

                    <div class="col-12">

                      

                        <header   style=" margin-top: 52px; text-align: center;">

                           

                                <a  href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a>

                            

                            <div  class="let-us-prove-container" >

                                <p>Let Us Prove to <span class="you">YOU</span> we <br> are the Planet’s Most <br>Powerful Reading Course</p>

                            </div>

                        </header>

                        <div class="row " >

                                <div class="col-4 godson_eddy text-center">

                                    <span>Godson Eddy</span>

                                    <img class="godson_eddy_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/GodsonEddy.png" alt="">

                                </div>

                                <div class="col-4 strachar" >

                                        <span style="text-align: center;">Ed Strachar </span>

                                        <span class="creator">Creator, Reading Genius</span>

                                            <img class="strachar_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Ed Strachar.png" alt="">

                                           

                                 </div>

                                 <div class="col-6" style="margin-top: -36px;"  >

                                    <div class="video-container">

                                    <iframe class="video_genius_youtube" style="display: none;" id="video_genius_youtube" width="100%" height="100%" src="https://www.youtube.com/embed/eLDf1fbDrN0?autoplay=1&mute=1&controls=1"></iframe>

                                        <video width="100%" height="100%" class="video_genius" id="video_genius" autoplay muted controls >

                                            <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/cover_banner_animation.mp4" type="video/mp4">

                                            <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/cover_banner_animation.ogg" type="video/ogg">



                                            Your browser does not support the video tag.

                                        </video>

                                    </div> 

                                </div>

                        </div>

                        <div class="row  justify-content-center align-items-center" style="margin-top: 39px;">

                              <div class=" widget_container" >                          

                                    <div class="text-center">

                                        <p>Real testimonials and results from top readers</p>

                                        <img class="testimonials_icon img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon1.png" alt="">

                                    </div>

                             </div>

                             <div class=" widget_container " >

                                <div class="text-center">

                                    <p>Proven at elite institutions like the Air Force Academy</p>

                                    <img class="elite_icon img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon2.png" alt="">

                                </div>

                            </div>

                            <div class=" widget_container " >

                                <div class="text-center">

                                    <p>Unlock imagination, curiosity, and focus with reading genius</p>

                                    <img class="unlock_icon "  src="<?php echo get_template_directory_uri(); ?>/assets/images/icon3.png" alt="">

                                </div>

                            </div>

                            <div class=" widget_container " >

                                <div class="text-center">

                                        <p>Compare Reading Genius to other program</p>

                                        <img class="genius_icon " src="<?php echo get_template_directory_uri(); ?>/assets/images/icon4.png" alt="">

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6 text-center">

                            <button class="claim_book"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Freebookbuttonicon.png" alt="" class="img-fluid">&nbsp;&nbsp;<p> Claim Your FREE Ebook <br><span>The Science Behind Reading Genius 3.0</span></p></button>

                            </div>

                            <div class="col-md-6 text-center">

                                 <button class="watch_now"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Freelessonbuttonicon.png" alt="" class="img-fluid">&nbsp;&nbsp;<p> Take a FREE Lesson Today <br><span>Take a free lesson to improve your reading</span></p></button>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-1 col-md-1">

                                <!-- Slider main container -->

                                <div class="swiper">

                                    <!-- Additional required wrapper -->

                                    <div class="swiper-wrapper">

                                        <!-- Slides -->

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books about Family/Family_1.jpg" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books about Family/Family_2.jpg" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books about Family/Family_3.jpg" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books about Family/Family_4.jpg" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books about Family/Family_5.jpg" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books about Family/Family_6.jpg" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books about Family/Family_7.jpg" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_1.jpg" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_2.webp" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_3.webp" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_4.jpg" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_5.jpg" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_6.jpg" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books about Family/Family_7.jpg" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_1.jpg" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_2.webp" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_3.webp" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_4.jpg" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_5.jpg" alt=""></div>

                                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books About Great Relationship/Relationship_6.jpg" alt=""></div>



                                    </div>

                                    

                                    <!-- If we need scrollbar -->

                                    <div class="swiper-scrollbar"></div>

                                    </div>



                                    

                                </div>

                            </div>

                            <div class="col-2 col-md-2">

                        <!-- Slider main container -->

                        <div class="swiper2">

                            <!-- Additional required wrapper -->

                            <div class="swiper-wrapper">

                                <!-- Slides -->

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 1.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 2.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 2-.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 3.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 4.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 5.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 6.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 6-.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 8.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 9.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 9-.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money 9_.jpg" alt=""></div>

                                

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money_-1.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money_-2.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money1 (1).jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money2 (1).jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money3 (1).jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money4 (1).jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money5 (1).jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money6 (1).jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money7 (1).jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money8.jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money9 (1).jpg" alt=""></div>

                                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/book_covers/Books abaout Money/Money10 (1).jpg" alt=""></div>



                            </div>

                            

                            <!-- If we need scrollbar -->

                            <div class="swiper-scrollbar"></div>

                            </div>



                            

                    </div>

                        </div>

                        

                        

                   

                   

    		  </div>

    </div>

    <?php } ?>

                                        

    

  <?php wp_footer(); ?>

  <script>

    $(document).ready(function() {

        $('#video_genius').on('ended', function() {

            $('#video_genius_youtube').show();

            $('#video_genius_youtube').attr('src', 'https://www.youtube.com/embed/eLDf1fbDrN0?autoplay=1&mute=0&enablejsapi=1&controls=1');

            $('#video_genius').hide();  

            const video = document.getElementById('video_genius');

            video.pause(); 

            

         });

         $(".godson_eddy_img").hover(

         function() {

             $('#video_genius_youtube').hide();

             $('#video_genius').show();

             $('#video_genius_youtube').attr('src', '');

             const video = document.getElementById('video_genius');

             video.src = "<?php echo get_template_directory_uri(); ?>/assets/videos/father_and_son.mp4";

             video.play();

         } );

         $(".strachar_img").hover(

         function() {

             $('#video_genius').hide();

             $('#video_genius_youtube').show();

             $('#video_genius_youtube').attr('src', 'https://www.youtube.com/embed/eLDf1fbDrN0?autoplay=1&mute=1&enablejsapi=1&controls=1');

             const video = document.getElementById('video_genius');

             video.pause();

         });

    });

  </script>

  <?php if (!isMobileDevice()) { ?>

    <script>

    $(document).ready(function() {



        

        const swiper = new Swiper('.swiper', {

            // Optional parameters

            direction: 'vertical',

            loop: true,

            slidesPerView: 5,

            spaceBetween: 30,

            centeredSlides: true,

            autoplay: {

                delay: 2500,

                disableOnInteraction: false,

            },



            scrollbar: {

                el: '.swiper-scrollbar',

                draggable: true,

            },

            });

            const swiper2 = new Swiper('.swiper2', {

                // Optional parameters

                direction: 'vertical',

                loop: true,

                slidesPerView: 5,

                spaceBetween: 30,

                centeredSlides: true,

                

                autoplay: {

                    delay: 3000, // Delay between slides in milliseconds

                    disableOnInteraction: false, // Continue autoplay after user interaction

                    reverseDirection: true, // This enables autoplay in reverse

                },

                scrollbar: {

                    el: '.swiper-scrollbar',

                    draggable: true,

                },

            });

    });

  </script>

    <?php }else{ ?>

        <script>

    $(document).ready(function() {



        const swiper = new Swiper('.swiper', {

            // Optional parameters

            loop: true,

            slidesPerView: 5,

            spaceBetween: 30,

            centeredSlides: true,

            autoplay: {

                delay: 2500,

                disableOnInteraction: false,

            },



            // And if we need scrollbar

            scrollbar: {

                el: '.swiper-scrollbar',

            },

            });

            const swiper2 = new Swiper('.swiper2', {

                loop: true,

                slidesPerView: 5,

                spaceBetween: 30,

                centeredSlides: true,

                

                autoplay: {

                    delay: 3000, // Delay between slides in milliseconds

                    disableOnInteraction: false, // Continue autoplay after user interaction

                    reverseDirection: true, // This enables autoplay in reverse

                },

                scrollbar: {

                    el: '.swiper-scrollbar',

                    draggable: true,

                },

            });

    });

  </script>

        <?php } ?>

  

</body>

</html>

 