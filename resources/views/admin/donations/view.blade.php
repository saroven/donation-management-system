@extends('admin.layouts.app', ['title' => 'Users'])

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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Joined on</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                     <th>Name</th>
                                    <th>Email</th>
                                    <th>Joined on</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
{{--                                @foreach($users as $user)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{ $user->name }}</td>--}}
{{--                                        <td>{{ $user->email }}</td>--}}
{{--                                        <td>{{ date('F jS, Y', strtotime($user->created_at)) }}</td>--}}
{{--                                        <td><a href="#" class="btn btn-warning">Edit</a> <a href="#" class="btn btn-danger">Delete</a> </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
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
