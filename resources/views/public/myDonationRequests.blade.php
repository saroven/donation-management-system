@extends('public.layouts.master')
@section('content')
      <!-- donate form start -->

<!--Become Volunteer Start-->
<section class="profile-page padding-top-200">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="profile-page__left">
                    <div class="text-secondary profile-box">
                        <img style="height: 100px;width: 100px;border-radius: 50%; margin-right: 20px" class="profile-img" src="{{ asset(auth()->user()->profile_pic) }}" alt="">
                        Welcome ! {{ auth()->user()->name }}
                    </div>
                    <div class="mt-5">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Item Name</th>
                              <th scope="col">Requested On</th>
                              <th scope="col">Updated On</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($requests as $req)
                                <tr>
                                  <th scope="row">{{ $loop->index + 1 }}</th>
                                  <td>{{ $req->donation->donation_name }}</td>
                                  <td>{{ date('F jS, Y', strtotime($req->created_at)) }}</td>
                                  <td>{{ date('F jS, Y', strtotime($req->updated_at)) }}</td>
                                  <td>
                                      @if($req->status == 0)
                                          <p class="text-primary">Request Placed</p>
                                      @elseif($req->status == 1)
                                         <p class="text-success">Request Accepted</p>
                                      @else
                                       <p class="text-danger">Request Rejected</p>
                                      @endif
                                  </td>
                                    <td><a href="{{ route('myDonationRequestsDetails', $req->id) }}" class="btn btn-primary">Details</a></td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Become Volunteer End-->
@endsection


