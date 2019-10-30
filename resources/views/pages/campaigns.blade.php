@extends('masterlayout')
@section('content')
    <div class="home" style="height: 100vh;">

        <!-- Hero Slider -->
        <div class="hero_slider_container">
            <div class="hero_slider owl-carousel">

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background"
                         style="background-image:url({{asset('images/campaigns/banner1.jpg')}})"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Find the
                                <span>Campaigns</span> you care!</h1>
                        </div>
                    </div>
                </div>

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background"
                         style="background-image:url('https://www.opml.co.uk/files/Projects/Images/nigeria-schoolchildren-banner.png')"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Give one
                                <span>kind hand</span> today!</h1>
                        </div>
                    </div>
                </div>

                <!-- Hero Slide -->


            </div>

            <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
            <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
        </div>
    </div>

    </div>
    <div class="container pb-5 pt-5">
{{--        <div class="row pt-5">--}}
{{--            <div class="col-12">--}}
{{--                <h2>CAMPAIGNS</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row">
            <div class="card-deck">
                @foreach($campaigns as $campaign)
                    @if($loop->index < 3)
                    <div class="card">
                        <img src="{{$campaign->thumbnail}}"
                             class="card-img-top" alt="...">
                        <div class="card-body text-justify">
                            <h3 class="card-title text-center">{{$campaign->name}}</h3>
                            <p class="card-text text-center">Campaign by : {{$campaign->campaign_chairman}}</p>
                            <p>{{ $campaign->short_description }}
                            </p>
                        </div>
                        <a href="{{url('campaigns/'.$campaign->id)}}">
                            <div class="card-footer text-center">
                                <small class="text-muted"><i class="fas fa-heart"
                                                             style="font-size: 30px; color: #ffb606;"></i><span
                                        style="font-size: 20px; color: #ffb606; font-weight: bolder; font-family: 'Open Sans', sans-serif;">  DONATE NOW</span></small>
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>
            <br>
            <br>
            <div class="card-deck">
                @foreach($campaigns as $campaign)
                    @if($loop->index >=3 && $loop->index < 6)
                    <div class="card">
                        <img src="{{$campaign->thumbnail}}"
                             class="card-img-top" alt="...">
                        <div class="card-body text-justify">
                            <h3 class="card-title text-center">{{$campaign->name}}</h3>
                            <p class="card-text text-center">Campaign by : {{$campaign->campaign_chairman}}</p>
                            <p>{{$campaign->short_description}}
                            </p>
                        </div>
                        <a href="{{url('campaigns/'.$campaign->id)}}">
                            <div class="card-footer text-center">
                                <small class="text-muted"><i class="fas fa-heart"
                                                             style="font-size: 30px; color: #ffb606;"></i><span
                                        style="font-size: 20px; color: #ffb606; font-weight: bolder; font-family: 'Open Sans', sans-serif;">  DONATE NOW</span></small>
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
{{--        <div class="row pt-5">--}}
{{--            <div class="col-12 text-center">--}}
{{--                <button class="newsletter_submit_btn trans_300">LOAD MORE</button>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
