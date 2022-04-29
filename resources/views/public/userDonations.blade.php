@extends('public.layouts.master' , ['title' => 'Donations'])
@section('content')
    <section class="filter container">
        <select class="form-control" id="filter" style=" margin-top: 200px">
            <option value="all-donations" @if($filter == 'all-donations') selected @endif>All Donations</option>
            <option value="successful-donations" @if($filter == 'successful-donations') selected @endif>Successful Donations</option>
            <option value="pending-donations" @if($filter == 'pending-donations') selected @endif>Pending Donations</option>
        </select>
    </section>
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
                                    <li><i class="far fa-clock"></i>04:00 am / 06:00 am</li>
                                    <li><i class="far fa-map"></i>66 broklyn Street, New York</li>
                                </ul>
                                <a href="event-details.html" class="thm-btn event-page__btn">More</a>
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
    @push('js')
        <script>

            $(document).ready(function () {
            $("#filter").on('change',function (e){
               location.href = "{{ route('get-user-donations') }}"+"?filter="+$("#filter").val();
            });
        });
        </script>
    @endpush
@endsection
