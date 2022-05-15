                  @extends('public.layouts.master')
@section('content')
      <!-- donate form start -->

<!--Become Volunteer Start-->
<section class="profile-page padding-top-200">
    <div class="container">
        <div class="row">
                 <div class="card mb-4">
                    <div class="card-header">
                        <h1 class="mt-4">Received Request Details</h1>
                        @if(session()->has('error'))
                          <x-alert type="danger" :message="session('error')"/>
                            @elseif(session()->has('success'))
                            <x-alert type="success" :message="session('success')"/>
                      @endif
                    </div>
                    <div class="card-body">

                        <div class="donorDetails">
                            <h4 class="text-center">Requester Details</h4>
                            <hr style="color: red; padding: 1px">
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Name:</p> {{ $requester->name }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Email:</p> {{ $requester->email }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Contact Number:</p> {{ $requester->mobile }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Profile Picture:</p>
                                <img height="80px" width="80px" src="{{ asset($requester->profile_pic)  }}" alt=""></div>

                        </div>
                        <div class="donationDetails">
                            <h4 class="text-center">Donation Details</h4>
                            <hr style="color: red; padding: 1px">
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Type:</p> {{ $request->donation->type->name }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Item Name:</p> {{ $request->donation->donation_name }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Quantity/Weight:</p> {{ $request->donation->donation_quantity }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Collection Address:</p> {{ $request->donation->collection_address }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Note:</p> {{ $request->donation->note }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Created_at</p> {{ date('F jS, Y', strtotime($request->donation->created_at)) }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Update_at</p> {{ date('F jS, Y', strtotime($request->donation->updated_at)) }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Picture</p>
                                <img height="100px" width="100px" src="{{ asset($request->donation->images->first()->path)  }}" alt="">
                            </div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Request Status</p>
                            @if($request->status == 0)
                                  <p class="text-primary">Request Placed</p>
                              @elseif($request->status == 1)
                                 <p class="text-success">Request Accepted</p>
                              @elseif($request->status == 2)
                               <p class="text-success">Donation Successful</p>
                              @endif
                            </div>
                            @if($request->status != 2)
                                <form method="post" action="{{ route('receiveRequest.update', $request->id) }}">
                                    @csrf
                                    <div class="d-flex pt-2"><p style="font-weight: bold; margin-right: 20px"> Status</p>
                                        <select name="status" id="status">
                                            <option value="1" @if($request->status == 1) selected @endif>Accept</option>
                                            <option value="2" @if($request->status == 2) selected @endif>Reject</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="mt-3 btn btn-primary">Update</button>
                                </form>
                            @else
                             <div class="d-flex flex-column pt-2"><p style="font-weight: bold; margin-right: 20px"> Received Proof: </p>
                                    <img class="mt-2" height="100px" width="100px" src="{{ asset("assets/donatedProof/$request->received_img") }}" alt="">
                                </div>

                                <div class="d-flex flex-column pt-2"><p style="font-weight: bold; margin-right: 20px"> Feedback(not required): </p>
                                    <p>{{ $request->feedback }}</p>
                                </div>
                            @endif

                        </div>

                    </div>
                 </div>
            </div>
    </div>
</section>
<!--Become Volunteer End-->
@endsection


