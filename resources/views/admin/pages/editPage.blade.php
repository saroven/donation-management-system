@push('css')
    <!-- include libraries(jQuery, bootstrap) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>\

    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endpush

@extends('admin.layouts.app', ['title' => 'Pages'])

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between">
                <h1 class="mt-4">{{ $page->title }}</h1> <h4><a class="btn btn-primary mt-5" href="/">View as Public</a></h4>
            </div>
            @if(session()->has('error'))
                  <x-alert type="danger" :message="session('error')"/>
                    @elseif(session()->has('success'))
                    <x-alert type="success" :message="session('success')"/>
              @endif
            <div class="row">
                 <form method="post" action="{{ route('pages.update', $page->id) }}" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="title"> Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $page->title ?? old('title') }}" required autocomplete="title" id="title">
                    @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                  </div>
                    <div class="form-group">
                        <textarea class="form-control" name="content" id="summernote"></textarea>
                    </div>
                  <div class="form-group">
                    <label for="image"> Image</label> <br>
                      @php($page_img = $page->image ?? null)
                      @if($page_img) <img src="{{ asset('assets/pageImage/'.$page->image) }}" height="120px" width="250px" alt="image"> @endif
                      <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image ">
                          @error('image')
                          <span class="text-danger" style="font-weight: bolder; font-size: 80%"><strong>{{$errors->first('image')}}</strong> </span>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js" integrity="sha512-8cU710tp3iH9RniUh6fq5zJsGnjLzOWLWdZqBMLtqaoZUA6AWIE34lwMB3ipUNiTBP5jEZKY95SfbNnQ8cCKvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Write your page here...',
                height: 300,
                minHeight: null,
                maxHeight: null,
                focus: false,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ]
            });
        });
    </script>
    <script>
        document.getElementById('pages').classList.add('active');
    </script>


@endpush
