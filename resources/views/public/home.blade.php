@extends('public.layouts.master')
@section('content')

         <!-- Main Slider Start -->
            <section class="main-slider">
            <div
               class="swiper-container thm-swiper__slider"
               data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": ".main-slider-button-next",
        "prevEl": ".main-slider-button-prev",
        "clickable": true
    },
    "autoplay": {
        "delay": 5000
    }}'
            >
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div
                        class="image-layer"
                        style="
                           background-image: url(assets/images/main-slider/slider-1-1.jpg);
                        "
                     ></div>
                     <div class="container">
                        <div class="swiper-slide__inner">
                           <div class="row">
                              <div class="col-xl-12">
                                 <p>Helping Them Today</p>
                                 <h2>
                                    Help the Poor <br />
                                    in Need
                                 </h2>
                                 <a href="about.blade.php" class="thm-btn"
                                    >Learn More</a
                                 >
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div
                        class="image-layer"
                        style="
                           background-image: url(assets/images/main-slider/slider-1-2.jpg);
                        "
                     ></div>
                     <div class="container">
                        <div class="swiper-slide__inner">
                           <div class="row">
                              <div class="col-xl-12">
                                 <p>Helping Them Today</p>
                                 <h2>
                                    Help the Poor <br />
                                    in Need
                                 </h2>
                                 <a href="about.blade.php" class="thm-btn"
                                    >Learn More</a
                                 >
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div
                        class="image-layer"
                        style="
                           background-image: url(assets/images/main-slider/slider-1-3.jpg);
                        "
                     ></div>
                     <div class="container">
                        <div class="swiper-slide__inner">
                           <div class="row">
                              <div class="col-xl-12">
                                 <p>Helping Them Today</p>
                                 <h2>
                                    Help the Poor <br />
                                    in Need
                                 </h2>
                                 <a href="about.blade.php" class="thm-btn"
                                    >Learn More</a
                                 >
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-pagination" id="main-slider-pagination"></div>
               <div class="main-slider-nav">
                  <div class="main-slider-button-prev">
                     <span class="icon-right-arrow"></span>
                  </div>
                  <div class="main-slider-button-next">
                     <span class="icon-right-arrow"></span>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main Slider End -->

         <!--Three Icon Start-->
         <section class="feature-one">
            <div class="container">
               <div class="feature-one__inner">
                  <div class="row">
                     <div class="col-xl-4 col-lg-4">
                        <!--Three Icon Single-->
                        <div
                           class="feature-one__single feature-one__single-first-item"
                        >
                           <div class="feature-one__icon-wrap">
                              <div class="feature-one__icon-box">
                                 <span class="icon-heart"></span>
                                 <div class="feature-one__icon-box-img">
                                    <img
                                       src="./assets/images/resources/three_iocn_box_bg.png"
                                       alt=""
                                    />
                                 </div>
                              </div>
                              <div class="feature-one__icon-text-box">
                                 <h4>
                                    Become <br />
                                    Donor
                                 </h4>
                              </div>
                           </div>
                           <p class="feature-one__icons-single-text">
                              There are many of lorem Ipsum, but the majori have
                              suffered alteration in some form.
                           </p>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4">
                        <!--Three Icon Single-->
                        <div
                           class="feature-one__single feature-one__single-second-item"
                        >
                           <div class="feature-one__icon-wrap">
                              <div
                                 class="feature-one__icon-box feature-one__icon-box-two"
                              >
                                 <span
                                    class="icon-wallet-filled-money-tool"
                                 ></span>
                                 <div class="feature-one__icon-box-img">
                                    <img
                                       src="./assets/images/resources/three_iocn_box_bg-2.png"
                                       alt=""
                                    />
                                 </div>
                              </div>
                              <div class="feature-one__icon-text-box">
                                 <h4>
                                    Quick <br />
                                    Fundraise
                                 </h4>
                              </div>
                           </div>
                           <p class="feature-one__icons-single-text">
                              There are many of lorem Ipsum, but the majori have
                              suffered alteration in some form.
                           </p>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4">
                        <!--Three Icon Single-->
                        <div
                           class="feature-one__single feature-one__single-third-item"
                        >
                           <div class="feature-one__icon-wrap">
                              <div
                                 class="feature-one__icon-box feature-one__icon-box-three"
                              >
                                 <span class="icon-charity"></span>
                                 <div class="feature-one__icon-box-img">
                                    <img
                                       src="./assets/images/resources/three_iocn_box_bg-3.png"
                                       alt=""
                                    />
                                 </div>
                              </div>
                              <div class="feature-one__icon-text-box">
                                 <h4>
                                    Start <br />
                                    Donating
                                 </h4>
                              </div>
                           </div>
                           <p class="feature-one__icons-single-text">
                              There are many of lorem Ipsum, but the majori have
                              suffered alteration in some form.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Three Icon End-->
         <!--Welcome One Start-->
         <section
            class="welcome-two"
            style="
               background-image: url(assets/images/backgrounds/welcome_one_bg.jpg);
            "
         >
            <div
               class="welcome-one-hands"
               style="
                  background-image: url(assets/images/backgrounds/welcome_one_hands.png);
               "
            ></div>
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-lg-6">
                     <div class="welcome-one__left">
                        <div
                           class="welcome-one__img wow slideInLeft"
                           data-wow-delay="100ms"
                        >
                           <img
                              src="./assets/images/resources/welcome_one_img_1.jpg"
                              alt=""
                           />
                           <div class="welcome-one__badge">
                              <img
                                 src="./assets/images/resources/welcome_one_badge.png"
                                 alt=""
                              />
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                     <div class="welcome-one__right">
                        <div class="block-title text-left">
                           <h4>Helping Today</h4>
                           <h2>Our Goal is to Help Poor People</h2>
                        </div>
                        <p class="welcome-one__text">
                           Lorem ipsum dolor sit amet, consectetur notted
                           adipisicing elit sed do eiusmod tempor incididunt ut
                           labore et simply free text dolore magna aliqua lonm
                           andhn.
                        </p>
                        <ul class="welcome-one__list list-unstyled">
                           <li>
                              <span class="icon-confirmation"></span>Nsectetur
                              cing do not elit.
                           </li>
                           <li>
                              <span class="icon-confirmation"></span>Suspe
                              ndisse suscipit sagittis in leo.
                           </li>
                           <li>
                              <span class="icon-confirmation"></span>Entum
                              estibulum dignissim lipsm posuere.
                           </li>
                        </ul>
                        <div class="welcome-one__campaigns">
                           <div class="iocn">
                              <span class="icon-donation"></span>
                           </div>
                           <div class="text">
                              <h2 class="counter">86,700</h2>
                              <p>Successfull Campaigns</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Welcome One End-->
         <!--Counter One Start-->
         <section
            class="counter-one jarallax"
            data-jarallax
            data-speed="0.2"
            data-imgPosition="50% 0%"
            style="
               background-image: url(assets/images/backgrounds/counter_one_bg.jpg);
            "
         >
            <div class="container">
               <ul class="counter-one__box list-unstyled">
                  <li
                     class="counter-one__single wow fadeInLeft"
                     data-wow-delay="100ms"
                  >
                     <div class="counter-one__icon">
                        <i class="icon-campaign"></i>
                     </div>
                     <h3 class="counter">4850</h3>
                     <p class="counter-one__text">Successful Campaigns</p>
                  </li>
                  <li
                     class="counter-one__single wow fadeInLeft"
                     data-wow-delay="200ms"
                  >
                     <div class="counter-one__icon">
                        <i class="icon-budget"></i>
                     </div>
                     <h3 class="counter">3456</h3>
                     <p class="counter-one__text">Raised Funds</p>
                  </li>
                  <li
                     class="counter-one__single wow fadeInLeft"
                     data-wow-delay="300ms"
                  >
                     <div class="counter-one__icon">
                        <i class="icon-social-campaign"></i>
                     </div>
                     <h3 class="counter">460</h3>
                     <p class="counter-one__text">Satisfied Donors</p>
                  </li>
                  <li
                     class="counter-one__single wow fadeInLeft"
                     data-wow-delay="400ms"
                  >
                     <div class="counter-one__icon">
                        <i class="icon-help"></i>
                     </div>
                     <h3 class="counter">2060</h3>
                     <p class="counter-one__text">Best Volunteers</p>
                  </li>
               </ul>
            </div>
         </section>
         <!--Counter One End-->

         <!--We Need Help Start-->
         <section class="we-need-help">
            <div class="we-nned-help-bg"></div>
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-lg-6">
                     <div class="we-need-help__left">
                        <div class="block-title text-left">
                           <h4>Asked Quesitons</h4>
                           <h2>We Need Your Help</h2>
                        </div>
                        <div class="we-need-help__faqs">
                           <div
                              class="accrodion-grp"
                              data-grp-name="faq-one-accrodion"
                           >
                              <div class="accrodion">
                                 <div class="accrodion-title">
                                    <h4>
                                       How to process the charity functions?
                                    </h4>
                                 </div>
                                 <div class="accrodion-content">
                                    <div class="inner">
                                       <p>
                                          There are many variations of passages
                                          of available but the majority have
                                          suffered alteration in that some form
                                          by words which don’t look even as
                                          slightly believable now.
                                       </p>
                                    </div>
                                    <!-- /.inner -->
                                 </div>
                              </div>
                              <div class="accrodion active">
                                 <div class="accrodion-title">
                                    <h4>
                                       How to process the charity functions?
                                    </h4>
                                 </div>
                                 <div class="accrodion-content">
                                    <div class="inner">
                                       <p>
                                          There are many variations of passages
                                          of available but the majority have
                                          suffered alteration in that some form
                                          by words which don’t look even as
                                          slightly believable now.
                                       </p>
                                    </div>
                                    <!-- /.inner -->
                                 </div>
                              </div>
                              <div class="accrodion">
                                 <div class="accrodion-title">
                                    <h4>
                                       How to process the charity functions?
                                    </h4>
                                 </div>
                                 <div class="accrodion-content">
                                    <div class="inner">
                                       <p>
                                          There are many variations of passages
                                          of available but the majority have
                                          suffered alteration in that some form
                                          by words which don’t look even as
                                          slightly believable now.
                                       </p>
                                    </div>
                                    <!-- /.inner -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                     <div class="we-need-help__right">
                        <div class="we-need-help__img">
                           <img
                              src="./assets/images/resources/we_need_help_img.jpg"
                              alt=""
                           />
                           <div class="we-need-help__give">
                              <div class="icon">
                                 <span class="icon-charity-1"></span>
                              </div>
                              <div class="text">
                                 <h4>
                                    Let’s Give us your <br />
                                    Helping Hand
                                 </h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--We Need Help End-->

         <!--Testimonials One Start-->
         <section class="testimonials-one">
            <div
               class="testimonials-one-bg"
               style="
                  background-image: url({{ asset('assets/images/backgrounds/testimonials_one_bg.jpg') }});
               "
            ></div>
            <div class="testimonials-one__container-box">
               <div class="block-title text-center">
                  <h4>Happy People</h4>
                  <h2>What They Say</h2>
               </div>
               <div class="row">
                  <div class="col-xl-12">
                     <div
                        class="thm-swiper__slider swiper-container"
                        data-swiper-options='{"spaceBetween": 100, "slidesPerView": 4, "autoplay": { "delay": 5000 }, "pagination": {
                "el": "#testimonials-one__pagination",
                "type": "bullets",
                "clickable": true
              },
              "navigation": {
                "nextEl": ".latest_properties_next",
                "prevEl": ".latest_properties_prev",
                "clickable": true
            },
            "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "425": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "767": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "991": {
                    "spaceBetween": 20,
                    "slidesPerView": 3
                },
                "1289": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "1440": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                }
            }}'
                     >
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <!--Testimonials One Single-->
                              <div class="testimonials-one__single">
                                 <div class="testimonials-one__quote">
                                    <img
                                       src="./assets/images/testimonials/testimonials-one-icon-1.png"
                                       alt=""
                                    />
                                 </div>
                                 <div class="testimonials-one__text">
                                    <p>
                                       There are many variations of passages of
                                       lorem ipsum available but the majority
                                       have suffered alteration in some form.
                                    </p>
                                    <h3>- Kevin Martin</h3>
                                 </div>
                                 <div class="testimonials-one__author-img">
                                    <img
                                       src="./assets/images/testimonials/testimonials_one_au_img_1.png"
                                       alt=""
                                    />
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <!--Testimonials One Single-->
                              <div class="testimonials-one__single">
                                 <div class="testimonials-one__quote">
                                    <img
                                       src="./assets/images/testimonials/testimonials-one-icon-1.png"
                                       alt=""
                                    />
                                 </div>
                                 <div class="testimonials-one__text">
                                    <p>
                                       There are many variations of passages of
                                       lorem ipsum available but the majority
                                       have suffered alteration in some form.
                                    </p>
                                    <h3>- Jessica Brown</h3>
                                 </div>
                                 <div class="testimonials-one__author-img">
                                    <img
                                       src="./assets/images/testimonials/testimonials_one_au_img_2.png"
                                       alt=""
                                    />
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <!--Testimonials One Single-->
                              <div class="testimonials-one__single">
                                 <div class="testimonials-one__quote">
                                    <img
                                       src="./assets/images/testimonials/testimonials-one-icon-1.png"
                                       alt=""
                                    />
                                 </div>
                                 <div class="testimonials-one__text">
                                    <p>
                                       There are many variations of passages of
                                       lorem ipsum available but the majority
                                       have suffered alteration in some form.
                                    </p>
                                    <h3>- David Cooper</h3>
                                 </div>
                                 <div class="testimonials-one__author-img">
                                    <img
                                       src="./assets/images/testimonials/testimonials_one_au_img_3.png"
                                       alt=""
                                    />
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <!--Testimonials One Single-->
                              <div class="testimonials-one__single">
                                 <div class="testimonials-one__quote">
                                    <img
                                       src="./assets/images/testimonials/testimonials-one-icon-1.png"
                                       alt=""
                                    />
                                 </div>
                                 <div class="testimonials-one__text">
                                    <p>
                                       There are many variations of passages of
                                       lorem ipsum available but the majority
                                       have suffered alteration in some form.
                                    </p>
                                    <h3>- Kevin Martin</h3>
                                 </div>
                                 <div class="testimonials-one__author-img">
                                    <img
                                       src="./assets/images/testimonials/testimonials_one_au_img_1.png"
                                       alt=""
                                    />
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <!--Testimonials One Single-->
                              <div class="testimonials-one__single">
                                 <div class="testimonials-one__quote">
                                    <img
                                       src="./assets/images/testimonials/testimonials-one-icon-1.png"
                                       alt=""
                                    />
                                 </div>
                                 <div class="testimonials-one__text">
                                    <p>
                                       There are many variations of passages of
                                       lorem ipsum available but the majority
                                       have suffered alteration in some form.
                                    </p>
                                    <h3>- Jessica Brown</h3>
                                 </div>
                                 <div class="testimonials-one__author-img">
                                    <img
                                       src="./assets/images/testimonials/testimonials_one_au_img_2.png"
                                       alt=""
                                    />
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div
                        class="swiper-pagination"
                        id="testimonials-one__pagination"
                     ></div>
                  </div>
               </div>
            </div>
         </section>
         <!--Testimonials One End-->

         <!--Join One Start-->
         <section
            class="join-one jarallax"
            data-jarallax
            data-speed="0.2"
            data-imgPosition="50% 0%"
            style="
               background-image: url(assets/images/backgrounds/join_one_bg.jpg);
            "
         >
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="join-one__inner">
                        <div class="join-one__icon">
                           <span class="icon-helping-hand"></span>
                        </div>
                        <h2>Join the Helpers Group</h2>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Join One End-->

         <!--Newsletter One Start-->
         <section class="newsletter-one">
            <div class="container">
               <div class="newsletter-one__inner">
                  <div class="row">
                     <div class="col-xl-8">
                        <div class="newsletter-one__left">
                           <div class="newsletter-one__subscriber-box">
                              <div class="text">
                                 <p>Help People in Need</p>
                                 <h4>Become a Donor Now</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="newsletter-one__right">
                           <a href="#" class="thm-btn"
                              >Join Now</a
                           >
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Newsletter One End-->
   <script>
      let navItem = document.getElementById('home');
      navItem.classList.add('current');
   </script>
@endsection