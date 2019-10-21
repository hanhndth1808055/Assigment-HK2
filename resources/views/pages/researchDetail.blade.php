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

                    <div class="text-left mt-5 text-content-seminar ">
                        <h1>Challenge</h1>
                    </div>
                    <div class="content-about-edupan mt-5">
                        <div  style="text-align: left">
                            {{$research->challenge}}
                        </div>
                    </div>

                    <div class="text-left mt-5 text-content-seminar " style="width: 260px">
                        <h1>Key Activities</h1>
                    </div>
                    <div class="content-about-edupan mt-5">
                        <div  style="text-align: left">
                            {{$research->key_Activities}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row course_boxes impact-box partnership_seminar_research">

                <div class="border-impact partnership_seminar_research">
                    <h3 class="text-project  p-5">IMPACT</h3>
                </div>
                <div class="content-impact p-5" >
                    {{$research->impact}}
                </div>
                <!-- Popular Course Item -->
            </div>

            <div class="row course_boxes learn-more-box partnership_seminar_research">

                <div class="border-impact">
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
</div>

@endsection
