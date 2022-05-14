@extends('admin.layouts.app', ['title' => 'Settings'])

@section('content')
    <main>
        <div class="container-fluid px-4">
             <div class="row mt-3">
                 <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Site Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ route('settings.update') }}" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="site_title">Site Title</label>
                    <input type="text" name="site_title" class="form-control @error('site_title') is-invalid @enderror" value="{{ $setting->site_title ?? old('site_title') }}" required autocomplete="site_title" id="site_title" placeholder="Site Title">
                    @error('site_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                  </div>
                    <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $setting->email ?? old('email') }}" required autocomplete="email" id="email" placeholder="Email Address">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $setting->phone ?? old('phone') }}" required autocomplete="phone" id="phone" placeholder="Phone Number">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ $setting->address ?? old('address') }}" required autocomplete="address" id="address" placeholder="Address">
                    @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                  </div>
                    <div class="form-group">
                    <label for="about_title">About Title</label>
                    <input type="text" name="about_title" class="form-control @error('about_title') is-invalid @enderror" value="{{ $setting->about_title ?? old('about_title') }}" required autocomplete="about_title" id="about_title" placeholder="About Title">
                    @error('about_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                  </div>
                    <div class="form-group">
                    <label for="about_content">About Content</label>
                        <textarea name="about_content" class="form-control @error('about_content') is-invalid @enderror" id="about_content">{{ $setting->about_content ?? old('about_content') }}</textarea>
                        @error('about_content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="about_img">About Image</label> <br>
                      @php($about_img = $setting->about_img ?? null)
                      @if($about_img) <img src="{{ asset('assets/about_img/'.$setting->about_img) }}" height="120px" width="250px" alt="about_img"> @endif
                      <input type="file" name="about_img" class="form-control @error('about_img') is-invalid @enderror" id="about_img ">
                          @error('about_img')
                          <span class="text-danger" style="font-weight: bolder; font-size: 80%"><strong>{{$errors->first('about_img')}}</strong> </span>
                          @enderror
                  </div>

                    <div class="form-group">
                    <label for="logo">Site Logo</label> <br>
                      @php($logo = $setting->logo ?? null)
                      @if($logo) <img src="{{ asset('assets/logo/'.$setting->logo) }}" height="120px" width="250px" alt="site_logo"> @endif
                      <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror" id="logo ">
                          @error('logo')
                          <span class="text-danger" style="font-weight: bolder; font-size: 80%"><strong>{{$errors->first('logo')}}</strong> </span>
                          @enderror
                  </div>
                    <div class="form-group">
                    <label for="icon">Site Icon</label> <br>
                      @php($icon = $setting->icon ?? null)
                      @if($icon) <img src="{{ asset('assets/icon/'.$setting->icon) }}" height="120px" width="250px" alt="site_icon"> @endif
                      <input type="file" name="icon" class="form-control @error('icon') is-invalid @enderror" id="icon ">
                          @error('icon')
                          <span class="text-danger" style="font-weight: bolder; font-size: 80%"><strong>{{$errors->first('icon')}}</strong> </span>
                          @enderror
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
             </div>
        </div>
    </main>
@endsection
@push('js')
    <script>
        document.getElementById('settings').classList.add('active');

    </script>
@endpush
