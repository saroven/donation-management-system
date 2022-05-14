@extends('admin.layouts.app', ['title' => 'Donations'])

@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                 <div class="card mb-4">
                    <div class="card-header">
                        <h1 class="mt-4">Donation Details</h1>
                    </div>
                    <div class="card-body">

                        <div class="donorDetails">
                            <h4 class="text-center">Donor Details</h4>
                            <hr style="color: red; padding: 1px">
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Name:</p> {{ $donation->donor->name }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Email:</p> {{ $donation->donor->email }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Contact Number:</p> {{ $donation->donor->mobile }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Profile Picture:</p>
                                <img height="80px" width="80px" src="{{ asset($donation->donor->profile_pic)  }}" alt=""></div>

                        </div>
                        <div class="donationDetails">
                            <h4 class="text-center">Donation Details</h4>
                            <hr style="color: red; padding: 1px">
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Type:</p> {{ $donation->type->name }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Item Name:</p> {{ $donation->donation_name }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Quantity/Weight:</p> {{ $donation->donation_quantity }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Collection Address:</p> {{ $donation->collection_address }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Note:</p> {{ $donation->note }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Created_at</p> {{ date('F jS, Y', strtotime($donation->created_at)) }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Update_at</p> {{ date('F jS, Y', strtotime($donation->updated_at)) }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Picture</p>
                                <img height="100px" width="100px" src="{{ asset($donation->images->first()->path)  }}" alt=""></div>


                        </div>

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

    </script>
@endpush
