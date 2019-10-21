@extends('masterlayout')
@section('content')
    <!-- Home -->

    <div class="popular page_section " style="margin-top: 150px">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Our Research</h1>
                        <span class="identifying-content ">Identifying how to improve learning and public health through action-oriented research</span>
                    </div>
                    <div class="img-research mt-5">
                        <img src="images/EDC-Research-Full.png" style="width: 100%; height: auto">
                    </div>
                    <div class="content-about-edupan mt-5" >
                        <div>EDC’s staff provides expertise in education and social science research.
                            We design and conduct large-scale randomized controlled trials,
                            quasi-experimental evaluations, research syntheses, and secondary data analyses.</div>
                        <div class="mt-5" >
                            Our staff also has extensive experience in conducting surveys and formative and marketing research, including focus groups and interviews.
                            Findings are used to inform policy and program strategies as well as to identify communication strategies, provide input on how programs are working, and determine what actions are needed to promote education, health, and livelihoods.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row course_boxes project-box" >

                <div class="border-project">
                    <h3 class="text-project  p-5">PROJECT</h3>
                </div>
                <div class="row view-content ml-4 p-2 mb-4">
                    @foreach($researchs as $research)
                    <div class="col-lg-6 view-text  mt-5">
                        <a href="{{url('researchDetail?id='.$research->research_project_id)}}" class="view-text"> {{$research->research_project_name}}</a>
                    </div>

                    @endforeach

                </div>


                <!-- Popular Course Item -->
            </div>
            <div class="list-expert">
                <div class="section_title text-center mt-5">
                    <h1>Our Experts Of Education</h1>
                    <span class="identifying-content ">" Education has limit but learning not! Be a good learner lifelong "</span>
                </div>
                <div class="row">
                    @foreach( $experts as $expert)
                    <div class="col-lg-4 border-warning mt-5 " >
                        <div class="text-center">
                            <div class="mt-5 box_expert" >
                                <img class="img-expert" src="{{$expert->expert_picture}}">
                                <div class="mt-4">
                                    <h4 class="expertise mb-2 font-italic " >{{$expert->expert_expertise}}</h4>
                                    <h2 class="name">{{$expert->expert_name}}</h2>
                                </div>

                                <div class="content-expert mt-4" >{{$expert->expert_content}}</div>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>

            </div>


        </div>
    </div>
@endsection
