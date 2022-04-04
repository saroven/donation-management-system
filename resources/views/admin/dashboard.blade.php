@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.headers.cards')
    
    <div class="container-fluid mt--7">

        <div class="row mt-5">
           hello
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection

@push('js')
@endpush