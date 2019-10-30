@extends('masterlayout')
@section('content')
    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url(images/courses_background.jpg)"></div>
        </div>
        <div class="home_content">
            <h1> Seminar</h1>
        </div>
    </div>

    <div class="popular page_section partnership_seminar_research">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1> Our Seminar</h1>
                    </div>
                </div>
            </div>
            <div class="row course_boxes">
                @foreach($seminars as $seminar)
                    @if($seminar->active == 1)
                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="{{$seminar->seminar_picture}}" alt="https://unsplash.com/@kellybrito">
                        <div class="card-body ">
                            <div class="card-title"><a href="{{url('seminarDetail?id='.$seminar->seminar_id)}}"><h3 class="card-title">{{$seminar->seminar_name}}</h3></a></div>
                            <div class="card-time">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                DATE: &nbsp;&nbsp;{{$seminar->seminar_time}}
                            </div>
                            <div class="card-address">
                                <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                ADDRESS:  &nbsp;&nbsp;{{$seminar->seminar_address}}
                            </div>
                            <div class="mt-2" hidden>1</div>
                        </div>

                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
