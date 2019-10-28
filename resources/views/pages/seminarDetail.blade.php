@extends('master_layout_2')
@section('content')
    <!-- Home -->


    <div class="popular page_section partnership_seminar_research" style="margin-top: 100px" >
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center text-title-seminar">
                        <h1>{{$seminar->seminar_name}}</h1>
                    </div>
                    <div class="img-research mt-5">
                        <img src="{{$seminar->seminar_picture}}" style="width: 100%; height: auto">
                    </div>
                    <div class="text-left mt-5 text-content-seminar ">
                        <h1>Content</h1>
                    </div>
                    <div class="content-about-edupan mt-5">
                        {!!$seminar->seminar_content!!}
                    </div>
                    <div class="text-left mt-5 text-content-seminar ">
                        <h1>TIME </h1>
                    </div>

                    <div class="text-dark" style="font-size: 20px">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="mt-4"> - Time : {{$seminar->seminar_time}}</div>
                                <div class="mt-3">- Address : {{$seminar->seminar_address}}</div>
                            </div>
                            <div class="col-lg-4 text-center mt-4 ">
                                <button data-target="#modalLoginForm" data-toggle="modal"
                                        class="btn btn-warning btn-border-none" onclick="clickRegisterSeminar();">
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                    &nbsp; Register Now
                                </button>
                            </div>
                        </div>

                    </div>
                    <form action="{{url('/addSeminarRegister')}}" method="POST">
                        @csrf
                        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">Seminar Register</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body mx-3">
                                        <form action="{{url('/addSeminarRegister')}}" method="POST">
                                            @csrf
                                        <div class="md-form mb-4">
                                            <select type="text" name="seminar_id"
                                                    style="border: none;border-bottom: 1px solid silver;"
                                                    class="form-control validate btn-border-none input-seminar-register">
                                                    <option value="{{$seminar->seminar_id}}" @if($seminar->seminar_id == old("seminar_id"))selected @endif>
                                                        {{$seminar->seminar_name}}
                                                    </option>
                                            </select>
                                        </div>
                                        <div class="md-form mb-4">
                                            <input type="text" name="name"
                                                   style="border: none;border-bottom: 1px solid silver;"
                                                   class="form-control validate btn-border-none input-seminar-register"
                                                   placeholder="Name .  .  ."
                                                   value="{{old('name')}}"
                                                   required>
                                        </div>

                                        <div class="md-form mb-4">
                                            <input type="email" name="email"
                                                   style="border: none;border-bottom: 1px solid silver;"
                                                   value="{{old('email')}}"
                                                   class="form-control validate btn-border-none input-seminar-register"
                                                   placeholder="Email .  .  .">
                                        </div>

                                        <div class="md-form mb-4">
                                            <input type="text" name="phone"
                                                   value="{{old('phone')}}"
                                                   style="border: none;border-bottom: 1px solid silver;"
                                                   class="form-control validate btn-border-none input-seminar-register"
                                                   placeholder="Phone .  .  .">
                                        </div>

                                        <div class="md-form mb-4">
                                            <input type="text" name="address"
                                                   value="{{old('address')}}"
                                                   style="border: none;border-bottom: 1px solid silver;"
                                                   class="form-control validate btn-border-none input-seminar-register"
                                                   placeholder="Address .  .  .">
                                        </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button id="send_submit" class="btn btn-warning btn-border-none"
                                                        onclick="showSubmit();">Submit
                                                    <span style="display: none" id="showLoading">
                                             &nbsp; <i class="fa fa-refresh fa-spin fa-1x fa-fw"></i>
                                            </span>
                                                </button>
                                                <br>
                                            </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="mt-5">
                        @if (session()->has('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                </div>

            </div>
        </div>

        <div class="register mb-5">

            <div class="container-fluid">

                <div class="row row-eq-height">
                    <div class="col-lg-6 nopadding">

                        <!-- Register -->

                        <div class="register_section d-flex flex-column align-items-center justify-content-center">
                            <div class="register_content text-center">
                                <h1 class="register_title">Register now and get a discount <span>50%</span> discount until 1 January</h1>
                                <p class="register_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempo.</p>
                                <div class="button button_1 register_button mx-auto trans_200"><a href="#">register now</a></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 nopadding">

                        <!-- Search -->

                        <div class="search_section d-flex flex-column align-items-center justify-content-center">
                            <div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
                            <div class="search_content text-center">
                                <h1 class="search_title">Feedback</h1>
                                <form id="search_form" class="search_form" action="{{url('/addFeedbackSeminar')}}" method="POST">
                                    @csrf
                                    <input id="search_form_name" name="name" class="input_field search_form_name" type="text" placeholder="Name" required="required" data-error="Course name is required.">
                                    <input id="search_form_category" name="email" class="input_field search_form_category" type="email" placeholder="Email">
                                    <select id="search_form_degree" name="seminar_id" class="input_field search_form_degree mt-4   " type="text" >
                                        <option value="{{$seminar->seminar_id}}" @if($seminar->seminar_id == old("seminar_id"))selected @endif>
                                            {{$seminar ->seminar_name}}
                                        </option>
                                    </select>
                                    <textarea id="contact_form_message" class="text_field contact_form_message" name="seminar_review" placeholder="Review"  required="required" data-error="Please, write us a message."> </textarea>
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
