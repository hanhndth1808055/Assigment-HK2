@extends('masterlayout')
@section('content')
    <!-- Home -->

    <div class="popular page_section " style="margin-top: 100px">
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
                        {{$seminar->seminar_content}}
{{--                        <div>The Health Education England (Department of Health) has commissioned the Council of Deans--}}
{{--                            of Health to work with universities across England on the development of advanced clinical--}}
{{--                            practice (ACP).--}}
{{--                            The main areas of this include:--}}
{{--                        </div>--}}

{{--                        <div class="list-seminar mt-5 ml-4">--}}
{{--                            --}}
{{--                            <ol>--}}
{{--                                <li><p>Raising awareness</p></li>--}}
{{--                                <li><p>Understanding by Deans and programme leads in HEIs of national ACP policy--}}
{{--                                        developments.</p></li>--}}
{{--                                <li><p>Identifying opportunities, pressures and obstacles to implement the principles of--}}
{{--                                        higher education framework.</p></li>--}}
{{--                                <li><p>Developing in higher education to support the current and future needs of--}}
{{--                                        employers.</p></li>--}}
{{--                            </ol>--}}
{{--                        </div>--}}

{{--                        <div class="mt-5">To gain awareness a conference is being held at the Woburn House Conference--}}
{{--                            Centre on the 18th of March 2019.--}}
{{--                        </div>--}}

{{--                        <div class="mt-5">The conference will focus on the development of HEEs Academy for Advanced and--}}
{{--                            Consultant Practice, new standards for education and training, and apprenticeship--}}
{{--                            procurement.--}}
{{--                        </div>--}}

{{--                        <div class="mt-5">Some bodies who will be attending this event include the HEI representatives--}}
{{--                            and stakeholders, Health Education England, and NHS employers and professional bodies.--}}
{{--                        </div>--}}
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
                            <div class="col-lg-4 text-center " >
                                <button class="btn btn-warning btn-border-none" onclick="clickRegisterSeminar();">
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                    &nbsp;  Register Now</button>
                            </div>
                        </div>

                    </div>

                    <div class="regiss_seminar" id="registerSeminar" >
                        <div class="text-left mt-5 text-content-seminar " >
                            <h1>REGISTER </h1>
                        </div>
                        <div class="form-register-seminar mt-5">
                            <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
                                <div class="wrapper wrapper--w780">
                                    <div class="card card-3">
                                        <div class="card-body">
                                            <h2 class="title text-center">Seminar Ticket Register</h2>
                                            <form>
                                                <div class="input-group">
                                                    <input class="input--style-3" type="text" placeholder="Seminar"
                                                           name="Seminar">
                                                </div>
                                                <div class="input-group">
                                                    <input class="input--style-3" type="text" placeholder="Name"
                                                           name="name">
                                                </div>
                                                <div class="input-group">
                                                    <input class="input--style-3 js-datepicker" type="text"
                                                           placeholder="Birthdate" name="birthday">
                                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                                </div>
                                                <div class="input-group">
                                                    <div class="rs-select2 js-select-simple select--no-search">
                                                        <select name="gender">
                                                            <option disabled="disabled" selected="selected">Gender</option>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                            <option>Other</option>
                                                        </select>
                                                        <div class="select-dropdown text-right"></div>
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <input class="input--style-3" type="email" placeholder="Email"
                                                           name="email">
                                                </div>
                                                <div class="input-group">
                                                    <input class="input--style-3" type="text" placeholder="Phone"
                                                           name="phone">
                                                </div>
                                                <div class="input-group">
                                                    <input class="input--style-3" type="text" placeholder="Address"
                                                           name="address">
                                                </div>
                                                <div class="p-t-10 text-center">
                                                    <button  id="send_submit" class="btn btn-warning btn-border-none" onclick="showSubmit();" >Submit
                                                        <span style="display: none" id="showLoading">
                                             &nbsp; <i class="fa fa-refresh fa-spin fa-1x fa-fw"></i>
                                            </span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <div class="footer mt-5" style="margin-bottom: -120px; border-bottom: 3px solid #2b2c2c">
            <div class="container">
                <!-- Feedback -->
                <div class="newsletter">
                    <div class="row">
                        <div class="col">
                            <div class="section_title text-center">
                                <h1>Feedback</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center">
                            <div class="newsletter_form_container mx-auto">
                                <div class="container">
                                    <form class="form-feedback">
                                        <div class="newsletter_form  flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                                            <div class="form-group">
                                                <input class="newsletter_email" type="text" placeholder="Name .  .  .">
                                            </div>
                                            <div class="form-group">
                                                <input class="newsletter_email" type="email" placeholder="Email .  .  .">
                                            </div>
                                            <div class="form-group">
                                                <input class="newsletter_email" type="text" placeholder="Subject .  .  .">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="newsletter_email " placeholder="Reviews  .  .  ."></textarea>
                                            </div>

                                            <button id="send_submit" type="submit"
                                                    class="newsletter_submit_btn trans_300 "
                                                    onclick="showSubmit();" value="Submit">
                                                SEND
                                                <span style="display: none" id="showLoading">
                                             &nbsp; <i class="fa fa-refresh fa-spin fa-1x fa-fw"></i>
                                            </span>
                                            </button>
                                        </div>

                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection
