@extends('masterlayout')
@section('content')
    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url('https://www.uni-bonn.de/the-university/images/unilebenslider2.jpg')"></div>
        </div>
        <div class="home_content">
            <h1>Partnership</h1>
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
                    @if($partnership->active == 1)
                <div class="col-lg-6 course_box  ">
                    <div class="card card-partnership">
                        <div class="card-partnership-row">
                            <div class="card-logo-partnership mt-5">
                                <div class="logo-partnership-center">
                                <img src="{{$partnership->partnership_edu_logo}}" alt="" style="width: 200px ;">
                                </div>
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
                    @endif
                @endforeach




            </div>
        </div>


    </div>
    <div class="register mb-5">

        <div class="container-fluid">

            <div class="row row-eq-height">
                <div class="col-lg-6 nopadding">

                    <img src="images/partnership.gif" style="width: 100%; height: auto">

                </div>

                <div class="col-lg-6 nopadding">

                    <!-- Search -->

                    <div class="search_section d-flex flex-column align-items-center justify-content-center">
                        <div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
                        <div class="search_content text-center">
                            <h1 class="search_title">Feedback</h1>
                            <form id="search_form" class="search_form" action="{{url('/addFeedbackPartnership')}}" method="POST">
                                @csrf
                                <input id="search_form_name" name="name" class="input_field search_form_name" type="text" placeholder="Name" required="required" data-error="Course name is required.">
                                <input id="search_form_category" name="email" class="input_field search_form_category" type="email" placeholder="Email">
                                <select id="search_form_degree" name="partnership_id" class="input_field search_form_degree mt-4   " type="text" >
                                    <option value="{{$partnership->partnership_id}}" @if($partnership->partnership_id == old("partnership_id"))selected @endif>
                                        {{$partnership ->partnership_edu_name}}
                                    </option>
                                </select>
                                <textarea id="contact_form_message" class="text_field contact_form_message" name="partnership_review" placeholder="Review"  required="required" data-error="Please, write us a message."> </textarea>
                                <button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">Submit</button>
                                <div class="mt-2">
                                    @if (session()->has('submit_success_feedback'))
                                        <div class="alert alert-success">
                                            {{ session('submit_success_feedback') }}
                                        </div>
                                    @endif
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
