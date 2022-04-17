@extends('admin.layouts.app', ['title' => 'Users'])

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between">
                <h1 class="mt-4">Users</h1>

            </div>
            <div id="successMessage"></div>
            <div class="row">
                 <div class="card mb-4">
                    <div class="card-header">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adduserModal">
                      Add Users
                    </button>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>View</th>
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
<div class="modal fade" id="viewDetailsModal" tabindex="-1" aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewDetailsModalLabel">View User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
          <li class="list-group-item">ID: <span id="viewId"></span></li>
          <li class="list-group-item">Name: <span id="viewName"></span></li>
          <li class="list-group-item">Email: <span id="viewEmail"></span></li>
          <li class="list-group-item">Gender: <span id="viewGender"></span></li>
          <li class="list-group-item">Address: <span id="viewAddress"></span></li>
          <li class="list-group-item">Mobile: <span id="viewMobile"></span></li>
          <li class="list-group-item">User Type: <span id="viewUserType"></span></li>
          <li class="list-group-item">Profile Picture: <span id="viewProfilePic"></span></li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="adduserModal" tabindex="-1" aria-labelledby="adduserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adduserModalLabel">Add User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" id="adduserModalForm">
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
 <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
               <form action="#" id="editUserModalForm">
                   <div id="updateFormErrorMessage"></div>
                   <input id="editUserId" type="hidden" name="id" >
                   <input id="editUserName" type="text" class="form-control" name="name" placeholder="name">
               </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" id="update" class="btn btn-primary">Update</button>
            </div>
          </div>
        </div>
    </div>
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="deleteUserModalLabel">Delete !</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="#" id="deleteUserModalForm">
                    <div id="updateFormErrorMessage"></div>
                    <input id="deleteUserId" type="hidden" name="id" >
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
        document.getElementById('users').classList.add('active');


        $(document).ready(function () {
            let getUsers = function(){
                $.ajax({
                    type: "get",
                    url: "{{ route('fetchUsers') }}",
                    dataType: "json",
                    success: function (response) {
                            $('#tblBody').html('');
                            $.each(response.users, function (key, item) {
                                $('#tblBody').append('<tr>\
                                    <td>'+item.id+'</td>\
                                    <td>'+item.name+'</td>\
                                    <td>'+item.email+'</td>\
                                    <td><button type="button" value='+item.id+' class="viewBtn btn btn-primary">View Details</button></td>\
                                    <td><button type="button" value='+item.id+' class="editBtn btn btn-primary">Edit</button></td>\
                                    <td><button type="button" value='+item.id+' class="deleteBtn btn btn-danger">Delete</button></td>\
                                </tr>');
                            });
                    }
                });
            }
             getUsers();
            $(document).on('click', '.viewBtn',function (e){
                e.preventDefault();
                let userId = $(this).val();

                let url = "{{ route('getSingleUser', ":id") }}";
                url = url.replace(':id', userId);
                 $.ajax({
                    type: "get",
                    url: url,
                    dataType: "json",
                    success: function (response) {
                        if(response.status == 400){
                            $("#viewDetailsModal").modal("hide");
                            $("#successMessage").html('');
                            $("#successMessage").addClass('alert alert-danger');
                            $("#successMessage").text(response.message);
                        }else{
                             $("#viewDetailsModal").modal("show");
                            $("#viewId").text(response.user.id);
                            $("#viewName").text(response.user.name);
                            $("#viewEmail").text(response.user.email);
                            $("#viewGender").text(response.user.gender);
                            $("#viewMobile").text(response.user.mobile);
                            $("#viewAddress").text(response.user.address);
                            $("#viewUserType").text(response.user.user_type);
                            $("#viewProfilePic").html('');
                            $("#viewProfilePic").append('<img style="width: 100px;height: auto;" src="'+response.user.profile_pic+'">');
                        }
                    }
                });
            });
            {{-- $("#save").on('click', function (e) {--}}
            {{--    e.preventDefault();--}}
            {{--    $.ajax({--}}
            {{--        type: "POST",--}}
            {{--        url: "{{ route('addDonationUser') }}",--}}
            {{--        data: {--}}
            {{--            name: $("#name").val(),--}}
            {{--            _token: '{{ csrf_token() }}',--}}
            {{--        },--}}
            {{--        dataType: "json",--}}
            {{--        success: function (response) {--}}
            {{--            if (response.status == 400) {--}}
            {{--                $("#addFormErrorMessage").html("");--}}
            {{--                $("#addFormErrorMessage").addClass("alert alert-danger");--}}
            {{--                $.each(response.errors, function (key, error) {--}}
            {{--                    $("#addFormErrorMessage").append('<li>'+error+'</li>');--}}
            {{--                });--}}
            {{--            }else{--}}
            {{--                $("#successMessage").html("");--}}
            {{--                $("#successMessage").addClass("alert alert-success");--}}
            {{--                $("#successMessage").text(response.message);--}}
            {{--                $("#adduserModal").modal("hide");--}}
            {{--                $("#adduserModal").find("input").val("");--}}

            {{--                getUsers();--}}
            {{--            }--}}
            {{--        }--}}
            {{--    });--}}
            {{--});--}}
            {{--$(document).on('click', '.editBtn', function (e) {--}}
            {{--    e.preventDefault();--}}
            {{--    let typeId = $(this).val();--}}
            {{--    let url = "{{ route('editUser', ":id") }}";--}}
            {{--    url = url.replace(':id', typeId);--}}
            {{--    $.ajax({--}}
            {{--        type: "GET",--}}
            {{--        url: url,--}}
            {{--        dataType: "json",--}}
            {{--        success: function (response) {--}}
            {{--            if (response.status == 400) {--}}
            {{--                $("#successMessage").html("");--}}
            {{--                $("#successMessage").addClass("alert alert-danger");--}}
            {{--                $("#successMessage").text(response.message);--}}
            {{--            }else{--}}
            {{--                $("#editUserModal").modal('show');--}}
            {{--                $("#editUserId").val(response.types.id);--}}
            {{--                $("#editUserName").val(response.types.name);--}}
            {{--            }--}}
            {{--        }--}}
            {{--    });--}}
            {{--});--}}
            {{--$(document).on('click', '#update', function(e){--}}
            {{--    e.preventDefault();--}}
            {{--    let id =  $("#editUserId").val();--}}
            {{--    let url = "{{ route('updateUser', ":id") }}";--}}
            {{--    url = url.replace(':id', id);--}}

            {{--    $.ajaxSetup({--}}
            {{--        headers: {--}}
            {{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
            {{--        }--}}
            {{--    });--}}

            {{--    $.ajax({--}}
            {{--        type: "PUT",--}}
            {{--        url: url,--}}
            {{--        data: {--}}
            {{--            name: $("#editUserName").val(),--}}
            {{--        },--}}
            {{--        dataType: "json",--}}
            {{--        success: function (response) {--}}
            {{--            if (response.status == 400) {--}}
            {{--                $("#updateFormErrorMessage").html("");--}}
            {{--                $("#updateFormErrorMessage").addClass("alert alert-danger");--}}
            {{--                $.each(response.errors, function (key, error) {--}}
            {{--                    $("#updateFormErrorMessage").append('<li>'+error+'</li>');--}}
            {{--                });--}}
            {{--            }else if(response.status == 400){--}}
            {{--                $("#successMessage").html("");--}}
            {{--                $("#successMessage").addClass("alert alert-danger");--}}
            {{--                $("#successMessage").text(response.message);--}}
            {{--            }else{--}}
            {{--                $("#successMessage").html("");--}}
            {{--                $("#successMessage").addClass("alert alert-success");--}}
            {{--                $("#successMessage").text(response.message);--}}
            {{--                $("#editUserModal").modal("hide");--}}
            {{--                $("#editUserModal").find("input").val("");--}}
            {{--                getUsers();--}}
            {{--            }--}}
            {{--        }--}}
            {{--    });--}}
            {{--});--}}
            // $(document).on('click', '.deleteBtn', function(e){
            //     $("#deleteUserModal").modal('show');
            //     $("#deleteUserId").val($(this).val());
            // });
            {{--$(document).on('click', '#delete', function(e){--}}
            {{--     e.preventDefault();--}}
            {{--    let typeId = $("#deleteUserId").val();--}}
            {{--    let url = "{{ route('deleteUser', ":id") }}";--}}
            {{--    url = url.replace(':id', typeId);--}}

            {{--    console.log(url);--}}
            {{--     $.ajaxSetup({--}}
            {{--        headers: {--}}
            {{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
            {{--        }--}}
            {{--    });--}}
            {{--    $.ajax({--}}
            {{--        type: "DELETE",--}}
            {{--        url: url,--}}
            {{--        dataType: "json",--}}
            {{--        success: function (response) {--}}
            {{--            if (response.status == 400) {--}}
            {{--                $("#deleteUserModal").modal('hide');--}}
            {{--                $("#successMessage").html("");--}}
            {{--                $("#successMessage").addClass("alert alert-danger");--}}
            {{--                $("#successMessage").text(response.message);--}}
            {{--            }else{--}}
            {{--                getUsers();--}}
            {{--                $("#deleteUserModal").modal('hide');--}}
            {{--                $("#successMessage").html("");--}}
            {{--                $("#successMessage").addClass("alert alert-success");--}}
            {{--                $("#successMessage").text(response.message);--}}
            {{--            }--}}
            {{--        }--}}
            {{--    });--}}
            {{--});--}}
        });

    </script>
@endpush
