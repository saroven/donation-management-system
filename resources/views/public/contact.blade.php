@extends('public.layouts.master', ['title' => 'Contact'])
@section('content')
        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="block-title text-center">
                    <h4>Asked Quesitons</h4>
                    <h2>Contact With Us</h2>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="contact-form">
                            <form method="post" action="{{ route('sendContactMessage') }}" class="contact-form-validated contact-one__form">
                               @csrf
                                <div class="row">
                                     @if(session()->has('error'))
                                          <x-alert type="danger" :message="session('error')"></x-alert>
                                            @elseif(session()->has('success'))
                                            <x-alert type="success" :message="session('success')"></x-alert>
                                      @endif
                                    <div class="col-xl-6">
                                        <div class="contact-form__input-box">
                                            <input type="text" placeholder="Your name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-form__input-box">
                                            <input type="email" placeholder="Email address" name="email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="contact-form__input-box">
                                            <input type="text" placeholder="Phone number" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-form__input-box">
                                            <input type="text" placeholder="Subject" name="subject" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-form__input-box">
                                            <textarea name="message" placeholder="Write message" required></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn contact-form__btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 d-flex align-items-stretch">
                        <div class="contact-page__info-box">
                            <div class="contact-page__info-box-address">
                                <h4 class="contact-page__info-box-tilte">Address</h4>
                                <p class="contact-page__info-box-address-text">220/D-Begum Rokeya Sarani, 1207</p>
                            </div>
                            <div class="contact-page__info-box-phone">
                                <h4 class="contact-page__info-box-tilte">Phone</h4>
                                <p class="contact-page__info-box-phone-number">
                                    <a href="tel:0123456789">Local: 666 888 0000</a> <br>
                                    <a href="tel:0123456789">Mobile: 000 8888 999</a>
                                </p>
                            </div>
                            <div class="contact-page__info-box-email">
                                <h4 class="contact-page__info-box-tilte">Email</h4>
                                <p class="contact-page__info-box-email-address">
                                    <a href="mailto:needhelp@company.com">needhelp@company.com</a> <br>
                                    <a href="mailto:inquiry@asting.com">inquiry@asting.com</a>
                                </p>
                            </div>
                            <div class="contact-page__info-box-follow">
                                <h4 class="contact-page__info-box-tilte">Follow</h4>
                                <div class="contact-page__info-box-follow-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="clr-fb"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                                    <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->
         <!--Contact Page Google Map Start-->
        <section class="contact-page-google-map">
            <iframe
                src="https://maps.google.com/maps?q=green%20university%20of%20bangladesh&t=&z=15&ie=UTF8&iwloc=&output=embed"
                class="contact-page-google-map__one" allowfullscreen></iframe>

        </section>
        <!--Contact Page Google Map End-->
        <script>
          let navItem = document.getElementById('contact');
          navItem.classList.add('current');
       </script>
@endsection
