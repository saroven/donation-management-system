@extends('admin.layouts.app', ['title' => 'Donation Types'])

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between">
                <h1 class="mt-4">Donation Types</h1>

            </div>
            <div id="successMessage"></div>
            <div class="row">
                 <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Donation Types <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#addType">Add Type</a>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody id="tblBody">
                            </tbody>
                        </table>
                    </div>
                 </div>
            </div>
        </div>
    </main>
   <div class="modal fade" id="addType" tabindex="-1" role="dialog" aria-labelledby="addTypeLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addTypeLabel">Add Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="#" id="addTypeForm">
              <div id="errorMessage"></div>
              <input id="name" type="text" class="form-control" name="name" placeholder="name">

      </div>
      <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" id="save" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/js/datatables-simple-demo.js') }}"></script>

    <script>
        let getDonationTypes = function(){
            $.ajax({
                type: "get",
                url: "{{ route('fetchTypes') }}",
                dataType: "json",
                success: function (response) {
                        $('#tblBody').html('');

                        $.each(response.types, function (key, item) {

                            $('#tblBody').append('<tr>\
                                <td>'+item.id+'</td>\
                                <td>'+item.name+'</td>\
                                <td><button type="button" value='+item.id+' class="btn btn-primary">Edit</button></td>\
                                <td><button type="button" value='+item.id+' class="btn btn-danger">Delete</button></td>\
                            </tr>');
                        });
                }
            });
        }

        $(document).ready(function () {
             getDonationTypes();
        });

        $("#save").on('click', function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{ route('addDonationType') }}",
                data: {
                    name: $("#name").val(),
                     _token: '{{ csrf_token() }}',
                },
                dataType: "json",
                success: function (response) {
                    if (response.status == 400) {
                        $("#errorMessage").html("");
                        $("#errorMessage").addClass("alert alert-danger");
                        $.each(response.errors, function (key, error) {
                            $("#errorMessage").append('<li>'+error+'</li>');
                        });
                    }else{
                        $("#successMessage").html("");
                        $("#successMessage").addClass("alert alert-success");
                        $("#successMessage").text(response.message);
                        $("#addType").modal("hide");
                        $("#addType").find("input").val("");

                        getDonationTypes();
                    }
                }
            });
        });

    </script>
@endpush
