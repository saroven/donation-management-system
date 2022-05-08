@extends('public.layouts.master' , ['title' => 'Donations'])
@section('content')
    <section class="filter container">

        <select class="form-control" id="filter" style=" margin-top: 200px">
            <option value="all-donations" @if($filter == 'all-donations') selected @endif>All Donations</option>
            <option value="successful-donations" @if($filter == 'successful-donations') selected @endif>Successful Donations</option>
            <option value="pending-donations" @if($filter == 'pending-donations') selected @endif>Pending Donations</option>
        </select>
    </section>
    <div id="errorMsg"></div>
        <!--Event Page Start-->
        <section class="event-page" style="padding-top: 20px">
            <div class="container">
                <div class="row" id="donations">
                    @foreach($donations as $donation)
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="{{ $loop->index + 1 }}00ms">
                        <!--Event Page Single-->
                        <div class="event-page__single">
                            <div class="event-page__img-box">
                                <div class="event-page__img">
                                    @php
                                        $image = $donation->images->first();
                                    @endphp
                                    <img src="{{$image->path}}" alt="">
                                </div>
                            </div>
                            <div class="event-page__content">
                                <h3 class="event-page__title"><a href="event-details.html">{{ $donation->donation_name }}</a></h3>
                                <ul class="event-page__meta-box list-unstyled">
                                    <li><b>Posted On:</b> {{ $donation->created_at->diffForHumans() }}</li>
                                    <li><b>Quantity/Weight:</b> {{ $donation->donation_quantity ?? $donation->donation_weight }}</li>
                                    <li><b>Collection Address:</b> {{ $donation->collection_address }}</li>
                                </ul>
                                <button id="viewDetailsButton" value="{{ $donation->id }}" class="thm-btn event-page__btn">View Details</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="text-center more-post__btn">
                    <a href="#" class="thm-btn">Load More</a>
                </div><!-- /.text-center -->
            </div>
        </section>
        <!--Event Page End-->
    <div class="modal fade" id="viewDetailsModal" tabindex="-1" aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewDetailsModalLabel">Modal title</h5>
            <button type="button" class="btn-close close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div id="title"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    @push('js')
        <script>

            $(document).ready(function () {
            $("#filter").on('change',function (e){
               location.href = "{{ route('get-user-donations') }}"+"?filter="+$("#filter").val();
            });
            $("#viewDetailsButton").click(function (){
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
                            console.log(response.donation);
                            $("#title").html(response.donation.donation_name);
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
@endsection
