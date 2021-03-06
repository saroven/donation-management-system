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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addType">
                      Add Type
                    </button>
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


<div class="modal fade" id="addType" tabindex="-1" aria-labelledby="addTypeLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addTypeLabel">Add Type</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" id="addTypeForm">
              <div id="addFormErrorMessage"></div>
              <input id="name" type="text" class="form-control" name="name" placeholder="name">
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" id="save" class="btn btn-primary">Save</button>      </div>
    </div>
  </div>
</div>
 <div class="modal fade" id="editTypeModal" tabindex="-1" aria-labelledby="editTypeModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editTypeModalLabel">Edit Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
               <form action="#" id="editTypeModalForm">
                   <div id="updateFormErrorMessage"></div>
                   <input id="editTypeId" type="hidden" name="id" >
                   <input id="editTypeName" type="text" class="form-control" name="name" placeholder="name">
               </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" id="update" class="btn btn-primary">Update</button>
            </div>
          </div>
        </div>
    </div>
<div class="modal fade" id="deleteTypeModal" tabindex="-1" aria-labelledby="deleteTypeModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="deleteTypeModalLabel">Delete !</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="#" id="deleteTypeModalForm">
                    <div id="updateFormErrorMessage"></div>
                    <input id="deleteTypeId" type="hidden" name="id" >
                     Are you sure ?
               </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" id="delete" class="btn btn-danger">Yes, Delete</button>
            </div>
          </div>
        </div>
    </div>

@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/js/datatables-simple-demo.js') }}"></script>

    <script>
        document.getElementById('donations').classList.add('active');
        document.getElementById('collapseDonations').classList.add('show');
        // document.getElementById('donations').classList.remove('collapsed');
        document.getElementById('donationTypes').classList.add('active');


        $(document).ready(function () {
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
                                    <td><button type="button" value='+item.id+' class="editBtn btn btn-primary">Edit</button></td>\
                                    <td><button type="button" value='+item.id+' class="deleteBtn btn btn-danger">Delete</button></td>\
                                </tr>');
                            });
                    }
                });
            }
             getDonationTypes();
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
                            $("#addFormErrorMessage").html("");
                            $("#addFormErrorMessage").addClass("alert alert-danger");
                            $.each(response.errors, function (key, error) {
                                $("#addFormErrorMessage").append('<li>'+error+'</li>');
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
            $(document).on('click', '.editBtn', function (e) {
                e.preventDefault();
                let typeId = $(this).val();
                let url = "{{ route('editType', ":id") }}";
                url = url.replace(':id', typeId);
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function (response) {
                        if (response.status == 400) {
                            $("#successMessage").html("");
                            $("#successMessage").addClass("alert alert-danger");
                            $("#successMessage").text(response.message);
                        }else{
                            $("#editTypeModal").modal('show');
                            $("#editTypeId").val(response.types.id);
                            $("#editTypeName").val(response.types.name);
                        }
                    }
                });
            });
            $(document).on('click', '#update', function(e){
                e.preventDefault();
                let id =  $("#editTypeId").val();
                let url = "{{ route('updateType', ":id") }}";
                url = url.replace(':id', id);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "PUT",
                    url: url,
                    data: {
                        name: $("#editTypeName").val(),
                    },
                    dataType: "json",
                    success: function (response) {
                        if (response.status == 400) {
                            $("#updateFormErrorMessage").html("");
                            $("#updateFormErrorMessage").addClass("alert alert-danger");
                            $.each(response.errors, function (key, error) {
                                $("#updateFormErrorMessage").append('<li>'+error+'</li>');
                            });
                        }else if(response.status == 400){
                            $("#successMessage").html("");
                            $("#successMessage").addClass("alert alert-danger");
                            $("#successMessage").text(response.message);
                        }else{
                            $("#successMessage").html("");
                            $("#successMessage").addClass("alert alert-success");
                            $("#successMessage").text(response.message);
                            $("#editTypeModal").modal("hide");
                            $("#editTypeModal").find("input").val("");
                            getDonationTypes();
                        }
                    }
                });
            });
            $(document).on('click', '.deleteBtn', function(e){
                $("#deleteTypeModal").modal('show');
                $("#deleteTypeId").val($(this).val());
            });
            $(document).on('click', '#delete', function(e){
                 e.preventDefault();
                let typeId = $("#deleteTypeId").val();
                let url = "{{ route('deleteType', ":id") }}";
                url = url.replace(':id', typeId);

                console.log(url);
                 $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "DELETE",
                    url: url,
                    dataType: "json",
                    success: function (response) {
                        if (response.status == 400) {
                            $("#deleteTypeModal").modal('hide');
                            $("#successMessage").html("");
                            $("#successMessage").addClass("alert alert-danger");
                            $("#successMessage").text(response.message);
                        }else{
                            getDonationTypes();
                            $("#deleteTypeModal").modal('hide');
                            $("#successMessage").html("");
                            $("#successMessage").addClass("alert alert-success");
                            $("#successMessage").text(response.message);
                        }
                    }
                });
            });
        });

    </script>
@endpush
