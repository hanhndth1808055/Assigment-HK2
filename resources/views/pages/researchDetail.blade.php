@extends('masterlayout')
@section('content')
    <!-- Home -->
<div class="partnership_seminar_research">
    <div class="popular page_section mt-5 seminar-detail">
        <div class="container mt-5 ">
            <div class="row partnership_seminar_research">
                <div class="col">
                    <div class="section_title text-center">
                        <span class="identifying-content "><p class="title-content-research-detail">{{$research->research_project_name}}</p></span>
                    </div>
                    <div class="img-research mt-5">
                        <img src="{{$research->research_picture}}" style="width: 100%; height: auto">
                    </div>
                    <div class="text-left mt-5 text-content-seminar ">
                        <h1>Challenge</h1>
                    </div>
                    <div class="content-about-edupan mt-5">
                        <div  style="text-align: left">
                            {!!$research->challenge!!}
                        </div>
                    </div>

                    <div class="text-left mt-5 text-content-seminar " style="width: 260px">
                        <h1>Key Activities</h1>
                    </div>
                    <div class="content-about-edupan mt-5">
                        <div  style="text-align: left">
                            {!!$research->key_Activities!!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row course_boxes impact-box partnership_seminar_research mb-5">

                <div class="border-impact partnership_seminar_research">
                    <h3 class="text-project  p-5">IMPACT</h3>
                </div>
                <div class="content-impact p-5" >
                    {!!$research->impact !!}
                </div>
                <!-- Popular Course Item -->
            </div>

            <div class="row course_boxes learn-more-box partnership_seminar_research mt-5" >

                <div class="border-impact mt">
                    <h3 class="text-learn-more  p-5" >LEARN MORE </h3>
                </div>

                <div class="content-impact p-5" >
                    @foreach($learnMoreResearch as $learn_more_research)
                    <div class ="row mt-1 " >
                        <div class="col-md-4 style-item-learn-more">
                            DURATION
                            <div class="mt-2" style="color: #333333" @if($learn_more_research->learn_more_id == $research->learn_more_id) selected @endif>
                                {{ $learn_more_research->duration}}
                            </div>
                        </div>
                        <div class="col-md-4 style-item-learn-more">
                            PARTNERS
                            <div class="mt-2" style="color: #333333" @if($learn_more_research->learn_more_id == $research->learn_more_id) selected @endif>{{ $learn_more_research->funded_by }}</div>
                        </div>
                        <div class="col-md-4 style-item-learn-more">
                            FUNDED BY
                            <div class="mt-2" style="color: #333333" @if($learn_more_research->learn_more_id == $research->learn_more_id) selected @endif>{{ $learn_more_research->partners }}</div>
                        </div>
                        @endforeach

                    </div>

                </div>

                <!-- Popular Course Item -->
            </div>
            @foreach($learnMoreResearch as $learn_more_research)
            <div class="row learn-more-box partnership_seminar_research" style=" background-color: #101c28;">
                <div class="col-lg-4 style-item-learn-more-2 " >
                    BODIES OF WORK
                    <div class="mt-2" style="color:#3ab6df" @if($learn_more_research->learn_more_id == $research->learn_more_id) selected @endif>{{ $learn_more_research->bodies_of_work }}</div>
                </div>
                <div class="col-lg-4 style-item-learn-more-2 " >
                    SERVICES
                    <div class="mt-2"  style="color:#3ab6df" @if($learn_more_research->learn_more_id == $research->learn_more_id) selected @endif>{{ $learn_more_research->services }}</div>
                </div>
                <div class="col-lg-4 style-item-learn-more-2 " >
                    REGIONS
                    <div class="mt-2"  style="color:#3ab6df" @if($learn_more_research->learn_more_id == $research->learn_more_id) selected @endif>{{ $learn_more_research->regions }}</div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
    <div class="register mb-5 mt-5">

        <div class="container-fluid">

            <div class="row row-eq-height">
                <div class="col-lg-6 nopadding">

                    <!-- Register -->

                    <img src="images/research-feedback.jpg" style="width: 100%; height: auto">

            </div>

                <div class="col-lg-6 nopadding">

                    <!-- Search -->

                    <div class="search_section d-flex flex-column align-items-center justify-content-center">
                        <div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
                        <div class="search_content text-center">
                            <h1 class="search_title">Feedback</h1>
                            <form id="search_form" class="search_form" action="{{url('/addFeedbackResearch')}}" method="POST">
                                @csrf
                                <input id="search_form_name" name="name" class="input_field search_form_name" type="text" placeholder="Name" required="required" data-error="Course name is required.">
                                <input id="search_form_category" name="email" class="input_field search_form_category" type="email" placeholder="Email">
                                <select id="search_form_degree" name="research_project_id" class="input_field search_form_degree mt-4   " type="text" >
                                    <option value="{{$research->research_project_id}}" @if($research->research_project_id == old("research_project_id"))selected @endif>
                                        {{$research ->research_project_name}}
                                    </option>
                                </select>
                                <textarea id="contact_form_message" class="text_field contact_form_message" name="research_review" placeholder="Review"  required="required" data-error="Please, write us a message."> </textarea>
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


</div>


@endsection
