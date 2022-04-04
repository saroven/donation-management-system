@extends('admin.layouts.app', ['title' => 'Users'])

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between">
                <h1 class="mt-4">Add User</h1> <a href="{{ route('users') }}" class="btn btn-lg btn-primary my-4">View Users</a>
            </div>
            <div class="row">
                 <div class="card mb-4">
                    <div class="card-header">
                        Fill Information
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'addUser']) !!}
                        <div class="form-group mb-2">
                            {!! Form::label('Name', 'Name') !!}
                            {!! Form::text('name' ,'', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group mb-2">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::email('email' ,$value=null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group mb-2">
                            {!! Form::label('gender', 'Gender') !!}
                            {!! Form::select('gender', ['' => 'Select Gender', 'male' => 'Male', 'female' => 'Female', 'other' => 'other'],null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group mb-2">
                            {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group mb-2">
                            {!! Form::label('confirmPassword', 'Confirm Password') !!}
                            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group mb-2">
                            {!! Form::submit('Save', ['class' => 'btn btn-md btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}

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
        document.getElementById('users').classList.add('active');
        document.getElementById('collapseUsers').classList.add('show');
        document.getElementById('users').classList.remove('collapsed');
        document.getElementById('addUser').classList.add('active');
    </script>
@endpush
