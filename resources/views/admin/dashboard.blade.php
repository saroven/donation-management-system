@extends('admin.layouts.app', ['title' => 'Dashboard'])

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                         <div class="card-header">
                            All Donation
                        </div>
                        <div class="card-body">
                            {{ count($allDonation) }}
                        </div>
{{--                        <div class="card-footer d-flex align-items-center justify-content-between">--}}
{{--                            <a class="small text-white stretched-link" href="#">View Details</a>--}}
{{--                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                         <div class="card-header">
                             Successful Donation
                        </div>
                        <div class="card-body">
                            {{ count($successfulDonation) }}

                        </div>
{{--                        <div class="card-footer d-flex align-items-center justify-content-between">--}}
{{--                            <a class="small text-white stretched-link" href="#">View Details</a>--}}
{{--                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-header">
                            Pending Donation
                        </div>
                        <div class="card-body">{{ count($pendingDonation) }}</div>
{{--                        <div class="card-footer d-flex align-items-center justify-content-between">--}}
{{--                            <a class="small text-white stretched-link" href="#">View Details</a>--}}
{{--                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-secondary text-white mb-4">
                        <div class="card-header">
                            Total Users
                        </div>
                        <div class="card-body">{{ count($users) }}</div>
{{--                        <div class="card-footer d-flex align-items-center justify-content-between">--}}
{{--                            <a class="small text-white stretched-link" href="#">View Details</a>--}}
{{--                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('js')
    <script>
        document.getElementById('dashboard').classList.add('active');
    </script>
@endpush
