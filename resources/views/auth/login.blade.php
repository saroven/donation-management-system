@extends('auth.layouts.app', ['title' => 'Login - '])
@section('content')
    <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ __('Login') }}</h3></div>
            <div class="card-body">
               <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="form-floating mb-3">
                        <input id="email" type="email" placeholder="Email Address"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                        <label for="email">{{ __('Email Address') }}</label>

                         @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />
                        <label for="password">{{ __('Password') }}</label>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                        <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                        @if (Route::has('password.request'))
                            <a class="small" href="{{ route('password.request') }}">
                                {{ __('Forgot Password?') }}
                            </a>
                        @endif

                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>
            </div>
            @if (Route::has('register'))
            <div class="card-footer text-center py-3">
                <div class="small"><a href="{{ route('register') }}">{{ __('Need an account? Sign up!') }}</a></div>
            </div>
            @endif
        </div>
    </div>
@endsection
