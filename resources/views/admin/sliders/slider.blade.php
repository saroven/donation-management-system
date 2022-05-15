@extends('admin.layouts.app', ['title' => 'Sliders'])

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between">
                <h1 class="mt-4">Sliders</h1> <h4><a class="btn btn-primary mt-5" href="{{ route('sliders.add') }}">Add Slider</a></h4>
            </div>
            @if(session()->has('error'))
                  <x-alert type="danger" :message="session('error')"/>
                    @elseif(session()->has('success'))
                    <x-alert type="success" :message="session('success')"/>
              @endif
            <div class="row">
                 <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Sliders
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                   <th>Short Title</th>
                                    <th>Long Title</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Sl.</th>
                                   <th>Short Title</th>
                                    <th>Long Title</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($sliders as $slider)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $slider->short_title }}</td>
                                        <td>{{ $slider->long_title }}</td>
                                        <td><img height="80px" width="80px" src="{{asset('assets/sliders').'/'.$slider->slider_img}}" alt=""></td>

                                        <td>{{ date('F jS, Y', strtotime($slider->created_at)) }}</td>
                                        <td> <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-primary">Edit</a> <a href="{{ route('sliders.delete', $slider->id) }}" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                 </div>
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
