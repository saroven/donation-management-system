@extends('admin.layouts.app', ['title' => 'Sliders'])

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between">
                <h1 class="mt-4">Sliders</h1> <h4><a class="btn btn-primary mt-5" href="{{ route('sliders') }}">View Slider</a></h4>
            </div>
            @if(session()->has('error'))
                  <x-alert type="danger" :message="session('error')"/>
                    @elseif(session()->has('success'))
                    <x-alert type="success" :message="session('success')"/>
              @endif
            <div class="row">
                 <form method="post" action="{{ route('sliders.update', $slider->id) }}" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="short_title">Short Title</label>
                    <input type="text" name="short_title" class="form-control @error('short_title') is-invalid @enderror" value="{{ $slider->short_title ?? old('short_title') }}" required autocomplete="short_title" id="short_title">
                    @error('short_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                  </div>
                    <div class="form-group">
                    <label for="long_title">Long Title</label>
                    <input type="text" name="long_title" class="form-control @error('long_title') is-invalid @enderror" value="{{ $slider->long_title ?? old('long_title') }}" required autocomplete="long_title" id="long_title">
                        @error('long_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  <div class="form-group">
                    <label for="slider_img">Slider Image</label> <br>
                      @php($slider_img = $slider->slider_img ?? null)
                      @if($slider_img) <img src="{{ asset('assets/sliders/'.$slider->slider_img) }}" height="120px" width="250px" alt="slider_img"> @endif
                      <input type="file" name="slider_img" class="form-control @error('slider_img') is-invalid @enderror" id="slider_img ">
                          @error('slider_img')
                          <span class="text-danger" style="font-weight: bolder; font-size: 80%"><strong>{{$errors->first('slider_img')}}</strong> </span>
                          @enderror
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
        </div>
    </main>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/js/datatables-simple-demo.js') }}"></script>

    <script>
        document.getElementById('sliders').classList.add('active');
    </script>
@endpush
