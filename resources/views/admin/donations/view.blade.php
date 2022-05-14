@extends('admin.layouts.app', ['title' => 'Donations'])

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between">
                <h1 class="mt-4">Donations</h1>
            </div>
            <div class="row">
                 <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Users
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Donation Type</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Sl.</th>
                                   <th>Donation Type</th>
                                    <th>Name</th>
                                    <th>Quantity/Weight</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($donations as $donation)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $donation->type->name }}</td>
                                        <td>{{ $donation->donation_name }}</td>
                                        @php
                                        if ($donation->status == 0){
                                            $status = "Available";
                                        }else if($donation->status == 1){
                                            $status = "Donated";
                                        }else{
                                            $status = "Rejected";
                                        }
                                        @endphp
                                        <td>{{ $status }}</td>
                                        <td>{{ date('F jS, Y', strtotime($donation->created_at)) }}</td>
                                        <td> <a href="{{ route('donation.details', $donation->id) }}" class="btn btn-primary">Details</a> </td>
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
        document.getElementById('donations').classList.add('active');
        document.getElementById('collapseDonations').classList.add('show');
        document.getElementById('donations').classList.remove('collapsed');
        document.getElementById('viewDonations').classList.add('active');
    </script>
@endpush
