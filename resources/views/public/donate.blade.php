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
                      @if(session()->has('error'))
                          <x-alert type="danger" :message="session('error')"/>
                            @elseif(session()->has('success'))
                            <x-alert type="success" :message="session('success')"/>
                      @endif

                     <form
                        action="{{ route('makeDonation') }}"
                        class="contact-form-validated contact-one__form"
                        method="POST"
                        enctype="multipart/form-data"
                     >
                         @csrf
                        <div class="row">
                           <div class="col-xl-6">
                              <div class="donation-form-input-box">
                                 <select
                                    name="donationType"
                                    id=""
                                    class="select-box @error('donationType') donation-form-error-message @enderror"
                                    required
                                 >
                                    <option value="">Donation Type</option>
                                    @foreach($donation_types as $types)
                                        <option value="{{ $types->id }}" @if($types->id == old('donationType'))  {{ "selected" }} @endif>{{ $types->name }}</option>
                                    @endforeach
                                 </select>

                                  @error('donationType')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-xl-6">
                              <div class="donation-form-input-box">
                                 <input
                                    type="text"
                                    placeholder="Donation Name"
                                    name="donationName"
                                    required
                                    value="{{ old('donationName') }}"
                                    class="@error('donationName') donation-form-error-message @enderror"
                                 />

                                  @error('donationName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                           </div>
                           <div class="col-xl-6">
                              <div class="donation-form-input-box">
                                 <input
                                    type="text"
                                    placeholder="Donation Quantity"
                                    name="donationQuantity"
                                    required
                                    value="{{ old('donationQuantity') }}"
                                    class="@error('donationQuantity') donation-form-error-message @enderror"
                                 />

                                  @error('donationQuantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                           </div>
                            <div class="col-xl-6">
                              <div class="donation-form-input-box">
                                 <input
                                    type="text"
                                    placeholder="Donation Weight in KG (Optional)"
                                    name="donationWeight"
                                    value="{{ old('donationWeight') }}"
                                    class="@error('donationWeight') donation-form-error-message @enderror"
                                 />

                                  @error('donationWeight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                           </div>
                            <div class="col-xl-12">
                              <div class="donation-form-input-box">
                                 <input
                                    type="text"
                                    placeholder="Collection Address"
                                    name="collectionAddress"
                                    required
                                    value="{{ old('collectionAddress') }}"
                                    class="@error('collectionAddress') donation-form-error-message @enderror"
                                 />

                                  @error('collectionAddress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                           </div>
                            <div class="col-xl-12">
                              <div class="donation-form-input-box">
                                  <label class="donation-form-label" for="image">Donation Image</label>
                                 <div id="img-inputs">
                                     <input type="file"
                                            name="donationImages[]"
                                            required
                                            class="@error('donationImages') donation-form-error-message @enderror"
                                     />
                                 </div>

                                  @error('donationImages')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  <button id="addImg" type="button" class="donation-form-link">Add Another Image Field</button>
                              </div>
                           </div>
                           <div class="col-xl-12">
                              <div class="donation-form-input-box">
                                 <textarea
                                    name="donationNote"
                                    placeholder="Specific Note for Donation"
                                    class="@error('donationNote') donation-form-error-message @enderror"
                                 >{{ old('donationNote') }}</textarea>

                                  @error('donationNote')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                               <input type="submit" value="Donate" class="thm-btn contact-form__btn">
                           </div>
                        </div>

                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- donate form end -->
      <script>
          let addImgBtn = document.getElementById('addImg');
          let imgInputs = document.getElementById('img-inputs');

          addImgBtn.addEventListener('click', function (){
              const input = document.createElement('input');
                input.type = 'file';
                input.name = 'donationImages[]';
                imgInputs.appendChild(input);

          })
      </script>
@endsection

