@extends('public.layouts.master')
@section('content')
      <!-- donate form start -->
      <section class="contact-page padding-top-120">
         <div class="container">
            <div class="block-title text-center">
               <h4>Help Poor People</h4>
               <h2>Donate Now</h2>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="contact-form">
                     <form
                        action="inc/sendemail.php"
                        class="contact-form-validated contact-one__form"
                     >
                        <div class="row">
                           <div class="col-xl-12">
                              <div class="contact-form__input-box">
                                 <select
                                    name="items"
                                    id=""
                                    class="select-box"
                                 >
                                    <option value="">Donation Type</option>
                                    <option value="food">Food</option>
                                    <option value="cloth">Cloth</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-xl-6">
                              <div class="contact-form__input-box">
                                 <input
                                    type="text"
                                    placeholder="Your name"
                                    name="name"
                                 />
                              </div>
                           </div>
                           <div class="col-xl-6">
                              <div class="contact-form__input-box">
                                 <input
                                    type="email"
                                    placeholder="Email address"
                                    name="email"
                                 />
                              </div>
                           </div>
                           <div class="col-xl-6">
                              <div class="contact-form__input-box">
                                 <input
                                    type="text"
                                    placeholder="Your name"
                                    name="name"
                                 />
                              </div>
                           </div>
                           <div class="col-xl-6">
                              <div class="contact-form__input-box">
                                 <input
                                    type="email"
                                    placeholder="Email address"
                                    name="email"
                                 />
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xl-6">
                              <div class="contact-form__input-box">
                                 <input
                                    type="text"
                                    placeholder="Phone number"
                                    name="phone"
                                 />
                              </div>
                           </div>
                           <div class="col-xl-6">
                              <div class="contact-form__input-box">
                                 <input
                                    type="text"
                                    placeholder="Collection Address"
                                    name="address"
                                 />
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xl-12">
                              <div class="contact-form__input-box">
                                 <textarea
                                    name="note"
                                    placeholder="Specific Note for Donation"
                                 ></textarea>
                              </div>
                              <button
                                 type="submit"
                                 class="thm-btn contact-form__btn"
                              >
                                 Donate
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- donate form end -->
@endsection