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
                  @foreach($sliders as $slider)
                      <div class="swiper-slide">
                     <div
                        class="image-layer"
                        style="
                           background-image: url(assets/sliders/{{$slider->slider_img}});
                        "
                     ></div>
                     <div class="container">
                        <div class="swiper-slide__inner">
                           <div class="row">
                              <div class="col-xl-12">
                                 <p>{{ $slider->short_title }}</p>
                                 <h2>
                                    {{ $slider->long_title }}
                                 </h2>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                   @endforeach
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
                                    Donate <br> Items
                                 </h4>
                              </div>
                           </div>
{{--                           <p class="feature-one__icons-single-text">--}}
{{--                              There are many of lorem Ipsum, but the majori have--}}
{{--                              suffered alteration in some form.--}}
{{--                           </p>--}}
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
                                   Money <br />
                                    Donation
                                 </h4>
                              </div>
                           </div>
{{--                           <p class="feature-one__icons-single-text">--}}
{{--                              There are many of lorem Ipsum, but the majori have--}}
{{--                              suffered alteration in some form.--}}
{{--                           </p>--}}
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
{{--                           <p class="feature-one__icons-single-text">--}}
{{--                              There are many of lorem Ipsum, but the majori have--}}
{{--                              suffered alteration in some form.--}}
{{--                           </p>--}}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Three Icon End-->
         <!--Counter One Start-->
         <!--Counter One End-->

         <!--We Need Help Start-->
         <section class="we-need-help" style="margin-top: 35px;padding-bottom: 70px;">
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
         <section class="newsletter-one" style="padding-bottom: 40px;">
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
                           @guest
                               <a href="{{ route('login') }}" class="thm-btn">Join Now</a>
                            @else
                               <a href="{{ route('donate') }}" class="thm-btn">Donate Now</a>
                            @endguest
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
