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
                                <div class="col-xl-12 col-lg-12">
                                    <div class="make-donation-two__single-img">
                                        <img src="{{ asset('assets') }}/images/resources/make-donation-two-img.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Make Donation Two End-->
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
