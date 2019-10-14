@extends('masterlayout')
@section('content')
<div class="home">
    <div class="home_background_container prlx_parent">
        <div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
    </div>
    <div class="home_content">
        <h1>Register</h1>
    </div>
</div>
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <!-- Contact Form -->
                <div class="contact_form">
                    <div class="contact_title mb-5">Register Scholarship Now</div>

                    <div class="">
                        @foreach ($scholarships as $scholarship )
                        <h2 class="text-dark">Name Scholarship : {{ $scholarship->title }}</h2>
                        <h3 class="text-dark">DeadLine : {{ $scholarship->enddate }}</h3>
                        <img width="100%" src="{{asset('images/scholarship').'/'.$scholarship->image}}" alt="">
                        @endforeach

                        <form role="form" action="{{route('scholarship.register')}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input style="display : none" type="text" name="id" value="{{ $scholarship->id }}">
                            <input name="name" id="comment_form_name" class="input_field contact_form_name" type="text"
                                placeholder="Name" required="required" data-error="Name is required.">
                            <input name="email" id="comment_form_email" class="input_field contact_form_email"
                                type="email" placeholder="E-mail" required="required"
                                data-error="Valid email is required.">
                            <input name="phone" id="comment_form_email" class="input_field contact_form_email"
                                type="number" placeholder="Phone" required="required"
                                data-error="Valid phone is required.">
                            <textarea name="note" id="" class="text_field contact_form_message mt-4"
                                placeholder="Note">Note</textarea>
                            <button id="comment_send_btn" type="submit" class="comment_send_btn trans_200"
                                value="submit">Register Now</button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="about">
                    <div class="about_title">Join Scholarship</div>
                    <p class="about_text">{{ $scholarship->brief_content }}</p>

                    <div class="contact_info">
                        <ul>
                            <li class="contact_info_item">
                                <div class="contact_info_icon">
                                    <img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                {{  $scholarship->country_id }}
                            </li>
                            <li class="contact_info_item">
                                <div class="contact_info_icon">
                                    <img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                {{ $scholarship->unit_id }}
                            </li>
                            <li class="contact_info_item">
                                <div class="contact_info_icon">
                                    <img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>hello@company.com
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

        <!-- Google Map -->

        <div class="row">
            <div class="col">
                <div id="google_map">
                    <div class="map_container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.095649750517!2d105.77940071494638!3d21.02885848599833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b32ecb92db%3A0x3964e6238a3bd088!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1571038435873!5m2!1svi!2s"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
