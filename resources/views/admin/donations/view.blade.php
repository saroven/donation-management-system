@extends('admin.layouts.app', ['title' => 'Donations'])

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between">
                <h1 class="mt-4">Donations</h1>
                <div id="errorMsg"></div>
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
                                        if ($donation->status == 1){
                                            $status = "Available";
                                        }else{
                                            $status = "Unavailable";
                                        }
                                        @endphp
                                        <td>{{ $status }}</td>
                                        <td>{{ date('F jS, Y', strtotime($donation->created_at)) }}</td>
                                        <td><button id="details" value="{{ $donation->id }}" class="btn btn-primary">View Details</button> <a href="#" class="btn btn-warning">Edit</a> <a href="#" class="btn btn-danger">Delete</a> </td>
                                    </tr>
                                @endforeach
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
            <h5 class="modal-title" id="title" style="text-transform: capitalize">Donation Details</h5>
            <button type="button" class="btn-close close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div id="body"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
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
        document.getElementById('donations').classList.remove('collapsed');
        document.getElementById('viewDonations').classList.add('active');

        $(document).ready(function () {
            $("#details").click(function (){
                document.getElementById("errorMsg").innerHTML = "";
                 $("#errorMsg").html("");
                let donationId = $(this).val();
                let url = "{{ route('get-donation-details', ":id") }}";
                url = url.replace(':id', donationId);
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function (response) {
                        if (response.status == 400) {

                            $("#viewDetailsModal").modal('hide');

                            $("#errorMsg").html(`<div class="alert alert-danger mt-2" style="width: 86.5%;margin: auto;">`+response.msg+`</div>`);

                        }else{
                            $("#viewDetailsModal").modal('show');
                            let html = '<strong>'+ response.donation.donation_name + '</strong>' +
                                '<div>Quantity/Weight: '+ response.donation.donation_quantity + '</div>' +
                                '<div>Collection Address: '+ response.donation.collection_address + '</div>' +
                                '<div>Note: '+ response.donation.note + '</div>'
                            $("#body").html(html);
                        }
                    }
                });

            });
            $(".close-btn").click(function (){
                $("#viewDetailsModal").modal('hide');
            });
        });
    </script>
@endpush
