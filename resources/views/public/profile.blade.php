@extends('public.layouts.master')
@section('content')
      <!-- donate form start -->

<!--Become Volunteer Start-->
<section class="profile-page padding-top-200">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="profile-page__left">
                    <div class="text-secondary profile-box">
                        <img style="height: 100px;width: 100px;border-radius: 50%; margin-right: 20px" class="profile-img" src="{{ asset(auth()->user()->profile_pic) }}" alt="">
                        Welcome ! {{ auth()->user()->name }}
                    </div>
                    <div class="card mb-3 mt-5">
                        <div class="card-body">
                            <h5>Total Donation</h5>
                            {{ count($totalDonations) }}
                        </div>
                        <div class="card-footer">
                            <a href="#">View Details</a>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5>Successful Donation</h5>
                            {{ count($successfulDonations) }}
                        </div>
                        <div class="card-footer">
                            <a href="#">View Details</a>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5>Pending Donation</h5>
                            {{ count($pendingDonations) }}
                        </div>
                        <div class="card-footer">
                            <a href="#">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <h2 class="text-center pb-3">Profile Information</h2>
                <div class="profile-page__right">
                    @if(session()->has('error'))
                          <x-alert type="danger" :message="session('error')"/>
                            @elseif(session()->has('success'))
                            <x-alert type="success" :message="session('success')"/>
                      @endif
                    <form class="profile-page__form" method="POST" action="{{ route('updateProfile') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="profile-page__input">
                            <input type="text" placeholder="Full name" class="@error('name') profile-form-error-message @enderror" value="{{ old('name') ?? auth()->user()->name }}" name="name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile-page__input">
                            <input type="email" value="{{ old('email') ?? auth()->user()->email  }}" class="@error('email') profile-form-error-message @enderror" placeholder="Email address" name="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile-page__input">
                            <input type="number" class="@error('mobile') profile-form-error-message @enderror" value="{{ old('mobile') ?? auth()->user()->mobile  }}" placeholder="Mobile number" name="mobile">

                            @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile-page__input">
                            <input type="text" value="{{ old('address') ?? auth()->user()->address }}" class="@error('address') profile-form-error-message @enderror" placeholder="Address" name="address">

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile-page__input">
                            <select
                                name="gender"
                                id=""
                                class="select-box @error('gender') profile-form-error-message @enderror"
                                required>
                                <option value="male" @if(old('gender') == 'male' || auth()->user()->gender == 'male') {{ 'selected' }} @endif>Male</option>
                                <option value="female" @if(old('gender') == 'female' || auth()->user()->gender == 'female') {{ 'selected' }} @endif>Female</option>
                                <option value="other" @if(old('gender') == 'other' || auth()->user()->gender == 'other') {{ 'selected' }} @endif>Other</option>
                            </select>

                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile-page__input">
                            <input type="file" class="@error('profile_pic') profile-form-error-message @enderror" name="profile_pic">
                            @error('profile_pic')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile-page__input">
                            <input type="password" class="@error('password') profile-form-error-message @enderror" placeholder="Password" name="password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="thm-btn profile-page__form-btn">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Become Volunteer End-->
@endsection



