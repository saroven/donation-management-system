@extends('auth.layouts.app', ['title' => 'Register - '])
@section('content')
    <div class="col-lg-7">
        <div class="card shadow-lg border-0 rounded-lg mt-3">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                @csrf
                     <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Full Name" />
                                <label for="name">Full Name</label>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" type="email" placeholder="name@example.com" />
                                <label for="email">Email Address</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" id="address" type="text" placeholder="Address" />
                                <label for="address">{{ __('Address') }}</label>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input name="mobile" class="form-control @error('mobile') is-invalid @enderror" value="{{ old('mobile') }}" required autocomplete="mobile" id="mobile" type="tel" placeholder="Mobile Number" />
                                <label for="mobile">{{ __('Mobile Number') }}</label>

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" />
                                <label for="password">Password</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="confirmPassword" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                                <label for="confirmPassword">Confirm Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="gender" id="gender" class="form-control genderInput @error('gender') is-invalid @enderror" required autocomplete="gender">
                            <option @if(!old('gender')) {{ "selected" }} @endif disabled>Select Gender</option>
                            <option value="male" @if(old('gender') == 'male') {{ "selected" }} @endif >Male</option>
                            <option value="female" @if(old('gender') == 'female') {{ "selected" }} @endif >Female</option>
                            <option value="other" @if(old('gender') == 'other') {{ "selected" }} @endif >Other</option>
                        </select>
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Create Account') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="{{ route('login') }}">Have an account? Go to login</a></div>

            </div>
        </div>
    </div>
@endsection
