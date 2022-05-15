                  @extends('public.layouts.master')
@section('content')
      <!-- donate form start -->

<!--Become Volunteer Start-->
<section class="profile-page padding-top-200">
    <div class="container">
        <div class="row">
                 <div class="card mb-4">
                    <div class="card-header">
                        <h1 class="mt-4">Donation Details</h1>
                        @if(session()->has('error'))
                          <x-alert type="danger" :message="session('error')"/>
                            @elseif(session()->has('success'))
                            <x-alert type="success" :message="session('success')"/>
                      @endif
                    </div>
                    <div class="card-body">

                        <div class="donorDetails">
                            <h4 class="text-center">Donor Details</h4>
                            <hr style="color: red; padding: 1px">
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Name:</p> {{ $request->donation->donor->name }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Email:</p> {{ $request->donation->donor->email }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Contact Number:</p> {{ $request->donation->donor->mobile }}</div>
                            <div class="d-flex"><p style="font-weight: bold; margin-right: 20px"> Profile Picture:</p>
                                <img height="80px" width="80px" src="{{ asset($request->donation->donor->profile_pic)  }}" alt=""></div>

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
                                          <p class="text-primary">Request Placed, waiting for donor response</p>
                                      @elseif($request->status == 1)
                                         <p class="text-success">Request Accepted</p>
                                      @elseif($request->status == 2)
                                       <p class="text-success">Received</p>
                                      @endif
                            </div>

                            @if($request->status != 0)

                            <form method="post" action="{{ route('myDonationRequests.update', $request->id) }}" enctype="multipart/form-data">
                                @csrf
                                @if($request->status != 2)
                                    <div class="d-flex flex-column pt-2"><p style="font-weight: bold; margin-right: 20px"> Donation Received ?</p>
                                        <select name="status" class="form-control" id="status">
                                            <option>Not Received</option>
                                            <option value="2" @if($request->status == 2) selected @endif>Received</option>
                                        </select>
                                    </div>
                                @endif
                                <div class="d-flex flex-column pt-2"><p style="font-weight: bold; margin-right: 20px"> Received Proof: </p>
                                    @if($request->status != 2)
                                    <input type="file" class="form-control" name="received_img">
                                    @endif
                                    <img class="mt-2" height="100px" width="100px" src="{{ asset("assets/donatedProof/$request->received_img") }}" alt="">
                                </div>

                                <div class="d-flex flex-column pt-2"><p style="font-weight: bold; margin-right: 20px"> Feedback(not required): </p>
                                    @if($request->status != 2)
                                        <textarea name="feedback" id="feedback" class="form-control"></textarea>
                                    @else
                                    <p>{{ $request->feedback ?? '' }}</p>
                                    @endif
                                </div>
                                @if($request->status != 2)
                                <button type="submit" class="mt-3 btn btn-primary">Update</button>
                                    @endif
                            </form>
                            @endif



                        </div>

                    </div>
                 </div>
            </div>
    </div>
</section>
<!--Become Volunteer End-->
@endsection


