@extends('public.layouts.master', ['title' => 'About'])
@section('content')


        <!--Make Donation Two Start-->
        <section class="make-donation-two" style="padding-top: 200px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="make-donation-two__left">
                            <div class="block-title text-left">
                               <h4>Make a Donation</h4>
                               <h2>We Make a Difference in their Life</h2>
                            </div>
                            <p class="make-donation-two__text">Tincidunt elit magnis nulla facilisis sagittis is maecenas. Sapien nunced amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, aut consequuntur cumque doloribus eius exercitationem ipsa iusto minima natus nobis, placeat unde. Ad ducimus facere quo ullam. Incidunt iste, nulla.q Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, alias aliquid dolore dolores earum enim error, illo iste iusto laboriosam magni nulla quasi recusandae rem soluta tenetur ut veritatis vitae?</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="make-donation-two__right">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="make-donation-two__single-img">
                                        <img src="{{ asset('assets') }}/images/resources/make-donation-two-img.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="make-donation-two__single-img">
                                        <img src="{{ asset('assets') }}/images/resources/welcome_one_img_1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Make Donation Two End-->
        <!--Testimonials Three Start-->
        <section class="testimonials-two testimonials-three jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/testimonials-two-bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonials-two__carousel owl-theme owl-carousel">
                            <div class="testimonials-two__item">
                                <div class="testimonials-two__img">
                                   <div class="testimonials-two__img-shape" style="background-image: url(assets/images/shapes/testimonials-two-shape.png)"></div>
                                    <img src="assets/images/testimonials/testimonials_two-img-1.png" alt="">
                                    <div class="testimonials-two__quote">
                                        <img src="assets/images/testimonials/testimonials-two-icon-1.png" alt="">
                                    </div>
                                </div>
                                <div class="testimonials-two__text">
                                    <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.</p>
                                    <h3>Mike Hardson</h3>
                                </div>
                            </div>
                            <div class="testimonials-two__item">
                                <div class="testimonials-two__img">
                                   <div class="testimonials-two__img-shape" style="background-image: url(assets/images/shapes/testimonials-two-shape.png)"></div>
                                    <img src="assets/images/testimonials/testimonials_two-img-1.png" alt="">
                                    <div class="testimonials-two__quote">
                                        <img src="assets/images/testimonials/testimonials-two-icon-1.png" alt="">
                                    </div>
                                </div>
                                <div class="testimonials-two__text">
                                    <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.</p>
                                    <h3>Mike Hardson</h3>
                                </div>
                            </div>
                            <div class="testimonials-two__item">
                                <div class="testimonials-two__img">
                                   <div class="testimonials-two__img-shape" style="background-image: url(assets/images/shapes/testimonials-two-shape.png)"></div>
                                    <img src="assets/images/testimonials/testimonials_two-img-1.png" alt="">
                                    <div class="testimonials-two__quote">
                                        <img src="assets/images/testimonials/testimonials-two-icon-1.png" alt="">
                                    </div>
                                </div>
                                <div class="testimonials-two__text">
                                    <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.</p>
                                    <h3>Mike Hardson</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonials Three End-->

        <!--Brand Four Start-->
        <div class="brand-two brand-four">
           <div class="brand-four-bg" style="background-image: url(assets/images/backgrounds/brand-four-bg.jpg)"></div>
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_5.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_5.png" alt="">
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </div>
        <!--Brand Four End-->

        <!--Meet Donors One Start-->
        <section class="meet-volunteers-one">
            <div class="container">
                <div class="block-title text-center">
                   <h4>Helping Hands</h4>
                   <h2>Meet Our Donors</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Meet Volunteers One Single-->
                        <div class="meet-volunteers-one__single">
                            <div class="meet-volunteers-one__img">
                                <img src="assets/images/resources/Volunteer_one_img-1.jpg" alt="">
                            </div>
                            <div class="meet-volunteers-one__content">
                                <div class="meet-volunteers-one__name">
                                    <h3>Jessica Brown</h3>
                                </div>
                                <div class="meet-volunteers-one__social-info">
                                    <div class="left">
                                        <p>Volunteer</p>
                                    </div>
                                    <div class="meet-volunteers-one__social-info-box">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--Meet Volunteers One Single-->
                        <div class="meet-volunteers-one__single">
                            <div class="meet-volunteers-one__img">
                                <img src="assets/images/resources/Volunteer_one_img-2.jpg" alt="">
                            </div>
                            <div class="meet-volunteers-one__content">
                                <div class="meet-volunteers-one__name">
                                    <h3>Kevin Martin</h3>
                                </div>
                                <div class="meet-volunteers-one__social-info">
                                    <div class="left">
                                        <p>Volunteer</p>
                                    </div>
                                    <div class="meet-volunteers-one__social-info-box">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--Meet Volunteers One Single-->
                        <div class="meet-volunteers-one__single">
                            <div class="meet-volunteers-one__img">
                                <img src="assets/images/resources/Volunteer_one_img-3.jpg" alt="">
                            </div>
                            <div class="meet-volunteers-one__content">
                                <div class="meet-volunteers-one__name">
                                    <h3>Christine Eve</h3>
                                </div>
                                <div class="meet-volunteers-one__social-info">
                                    <div class="left">
                                        <p>Volunteer</p>
                                    </div>
                                    <div class="meet-volunteers-one__social-info-box">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--Meet Volunteers One Single-->
                        <div class="meet-volunteers-one__single">
                            <div class="meet-volunteers-one__img">
                                <img src="assets/images/resources/Volunteer_one_img-3.jpg" alt="">
                            </div>
                            <div class="meet-volunteers-one__content">
                                <div class="meet-volunteers-one__name">
                                    <h3>Christine Eve</h3>
                                </div>
                                <div class="meet-volunteers-one__social-info">
                                    <div class="left">
                                        <p>Volunteer</p>
                                    </div>
                                    <div class="meet-volunteers-one__social-info-box">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--Meet Volunteers One Single-->
                        <div class="meet-volunteers-one__single">
                            <div class="meet-volunteers-one__img">
                                <img src="assets/images/resources/Volunteer_one_img-3.jpg" alt="">
                            </div>
                            <div class="meet-volunteers-one__content">
                                <div class="meet-volunteers-one__name">
                                    <h3>Christine Eve</h3>
                                </div>
                                <div class="meet-volunteers-one__social-info">
                                    <div class="left">
                                        <p>Volunteer</p>
                                    </div>
                                    <div class="meet-volunteers-one__social-info-box">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--Meet Volunteers One Single-->
                        <div class="meet-volunteers-one__single">
                            <div class="meet-volunteers-one__img">
                                <img src="assets/images/resources/Volunteer_one_img-3.jpg" alt="">
                            </div>
                            <div class="meet-volunteers-one__content">
                                <div class="meet-volunteers-one__name">
                                    <h3>Christine Eve</h3>
                                </div>
                                <div class="meet-volunteers-one__social-info">
                                    <div class="left">
                                        <p>Volunteer</p>
                                    </div>
                                    <div class="meet-volunteers-one__social-info-box">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="text-center more-post__btn">
                    <a href="#" class="thm-btn">Load More</a>
                </div><!-- /.text-center -->
            </div>
        </section>
        <!--Meet Donors One End-->

        <!--CTA Two Start-->
        <section class="cta-one" style="background-image: url(assets/images/backgrounds/cta-two-bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__inner">
                            <div class="cta-one__text">
                                <p>Help People in Need</p>
                                <h3>Become a Donor Now</h3>
                            </div>
                            <div class="cta-one__btn">
                                <a href="become-volunteer.html" class="thm-btn">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA Two End-->
       <script>
          let navItem = document.getElementById('about');
          navItem.classList.add('current');
       </script>
@endsection