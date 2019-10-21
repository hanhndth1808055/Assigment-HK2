@extends('masterlayout')
@section('content')
    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url(images/courses_background.jpg)"></div>
        </div>
        <div class="home_content">
            <h1>Courses</h1>
        </div>
    </div>

    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Our Partnership</h1>
                    </div>
                </div>
            </div>

            <div class="row course_boxes partnership_seminar_research" >
                <!-- Popular Course Item -->
                @foreach($partnerships as $partnership)
                <div class="col-lg-6 course_box  ">
                    <div class="card card-partnership">
                        <div class="card-partnership-row">
                            <div class="card-logo">
                                <img src="{{$partnership->partnership_edu_logo}}" alt="" style="width: 200px ;margin-left: 168px">
                            </div>
                            <div class="card-title-logo text-center" >
                                {{$partnership->partnership_edu_name}}
                            </div>
                            <div class="card-content-logo ">
                                <div class="card-address-logo row">
                                    <div class="col-lg-2">
                                        <img src="images/icon-information.png" style="width: 30px">
                                    </div>
                                    <div class="col-lg-8 address-logo-partnership">
                                        <div class="text-address">Information detail</div>
                                        <div class="text-address-detail">{{$partnership->partnership_edu_infor}}
                                            <span id="dots">...</span><span id="more">
                                            {{$partnership->partnership_edu_infor_readmore}}
                                            </span></div>
                                        <button onclick="readmoreInforLogo()" id="myBtn" class="button-read-more"> <a  class="hover-partnership">Read more &nbsp;
                                                <i class="fa fa-arrow-down" aria-hidden="true">
                                                </i>
                                            </a>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-address-logo row">
                                    <div class="col-lg-2">
                                        <img src="images/icon-adrress.png" style="width: 30px">
                                    </div>
                                    <div class="col-lg-8 address-logo-partnership">
                                        <div class="text-address">Address</div>
                                        <div class="text-address-detail">{{$partnership->partnership_edu_address}}</div>
                                    </div>
                                </div>
                                <div class="card-address-logo row">
                                    <div class="col-lg-2">
                                        <img src="images/icon-tuition.png" style="width: 30px">
                                    </div>
                                    <div class="col-lg-8 address-logo-partnership">
                                        <div class="text-address">Tuition</div>
                                        <div class="text-address-detail">{{$partnership->partnership_edu_tuition}}</div>
                                    </div>
                                </div>
                                <div class="card-address-logo row">
                                    <div class="col-lg-2">
                                        <img src="images/icons-average.png" style="width: 30px">
                                    </div>
                                    <div class="col-lg-8 address-logo-partnership">
                                        <div class="text-address">Average tuition </div>
                                        <div class="text-address-detail">{{$partnership->partnership_edu_average_tuition}}</div>
                                    </div>
                                </div>
                                <div class="card-address-logo row">
                                    <div class="col-lg-2">
                                        <img src="images/icon-international-student.png" style="width: 30px">
                                    </div>
                                    <div class="col-lg-8 address-logo-partnership">
                                        <div class="text-address">Percentage of International Students </div>
                                        <div class="text-address-detail">{{$partnership->partnership_edu_percentage}} %</div>
                                    </div>
                                </div>
                                <div class="card-address-logo row">
                                    <div class="col-lg-2">
                                        <img src="images/icon-rating.png" style="width: 30px">
                                    </div>
                                    <div class="col-lg-8 address-logo-partnership">
                                        <div class="text-address">Value Score </div>
                                        <div class="text-address-detail">{{$partnership->partnership_edu_value}}</div>
                                    </div>
                                </div>
                                <div class="button-website"><p class="text-website "><a href="{{$partnership->partnership_edu_website}}" class="hover-partnership">PARTENRSHIP WEBSITE &nbsp;
                                            <i class="fa fa-arrow-right " aria-hidden="true"></i>
                                        </a></p></div>
                            </div>
                        </div>


                    </div>
                </div>
                @endforeach




            </div>
        </div>
    </div>
@endsection
