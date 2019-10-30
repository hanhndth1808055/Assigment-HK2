@extends('masterlayout')
@section('content')
<div class="home" style="height: 100vh;">

    <!-- Hero Slider -->
    <div class="hero_slider_container">
        <div class="hero_slider owl-carousel">

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url({{asset('images/slider_background.jpg')}})"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your
                            <span>Education</span> today!</h1>
                    </div>
                </div>
            </div>

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url({{asset('images/slider_background.jpg')}})"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your
                            <span>Education</span> today!</h1>
                    </div>
                </div>
            </div>

            <!-- Hero Slide -->


        </div>

        <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
        <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
    </div>

</div>

<div class="hero_boxes">
    <div class="hero_boxes_inner">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="images/earth-globe.svg" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Our Scholarship</h2>
                            <a href="{{ url('scholarship') }}" class="hero_box_link">view more</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="images/books.svg" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Our Gallery</h2>
                            <a href="courses.html" class="hero_box_link">view more</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="images/professor.svg" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Our Teachers</h2>
                            <a href="teachers.html" class="hero_box_link">view more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Popular -->

<div class="popular page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Popular Scholarship</h1>
                </div>
            </div>
        </div>

        <div class="row course_boxes">

            <!-- Popular Course Item -->
            @foreach ($scholarships as $scholarship )
            <div class="col-lg-4 course_box">
                <div class="card">
                    <img class="card-img-top"
                        style="    width: 100%;height: 200px;object-fit: cover"
                        src="{{asset('images/scholarship').'/'.$scholarship->image}}"
                        alt="https://unsplash.com/@kellybrito">
                    <div class="card-body text-center">
                        <div style="height:55px;overflow-y: hidden;" class="card-title">
                            <a style="font-size:16px" href="{{ url('detai/'.$scholarship->id) }}">{{ $scholarship->title }}</a>
                        </div>
                        <div style="height:100px;overflow-y: hidden;" class="card-text">
                            {{ $scholarship->brief_content }}</div>
                    </div>
                    <div class="price_box d-flex flex-row align-items-center">
                        <div class="course_author_image">
                            <img src="images/author.jpg" alt="">
                        </div>
                        <div class="course_author_name">{{ $scholarship->unit_id }}, <span>Unit</span></div>
                        {{--  <div class="course_price d-flex flex-column align-items-center justify-content-center">
                                <span>$29</span></div>  --}}
                    </div>
                </div>
            </div>
            @endforeach
            {{--  <div class="d-flex justify-content-end" style="width : 100%">
                    <a style="float : right" class="mt-4 mr-4" href="{{ url('scholars-ship') }}">Show All</a>
            </div>  --}}

        </div>
    </div>
</div>

<!-- Register -->

<div class="register">

    <div class="container-fluid">

        <div class="row row-eq-height">
            <div class="col-lg-6 nopadding">

                <!-- Register -->

                <div class="register_section d-flex flex-column align-items-center justify-content-center">
                    <div class="register_content text-center">
                        <h1 class="register_title">Register now and get a discount <span>50%</span> discount until 1
                            January</h1>
                        <p class="register_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae
                            tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Aliquam,
                            augue a gravida rutrum, ante nisl fermentum nulla, vitae tempo.</p>
                        {{--  <div class="button button_1 register_button mx-auto trans_200"><a href="#">register now</a></div>  --}}
                    </div>
                </div>

            </div>

            <div class="col-lg-6 nopadding">

                <!-- Search -->

                <div class="search_section d-flex flex-column align-items-center justify-content-center">
                    <div class="search_background" style="background-image:url({{asset('images/search_background.jpg')}});"></div>
                    <div class="search_content text-center">
                        {{--  <h1 class="search_title">Search for your course</h1>  --}}
                        <h1 class="search_title">Registration</h1>
                        <form role="form" action="{{route('scholarship.register')}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <select  class="form-control"  name="id" id="">
                                    @foreach ($scholarships as $scholarship)
                                        <option value="{{ $scholarship->id }}">
                                            {{ $scholarship->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <input name="name" id="comment_form_name" class="input_field contact_form_name" type="text"
                                placeholder="Name" required="required" data-error="Name is required.">
                            <input name="email" id="comment_form_email" class="input_field contact_form_email"
                                type="email" placeholder="E-mail" required="required"
                                data-error="Valid email is required.">
                            <input name="phone" id="comment_form_email" class="input_field contact_form_email"
                                type="number" placeholder="Phone" required="required"
                                data-error="Valid phone is required.">
                            <button id="comment_send_btn" type="submit" class="comment_send_btn trans_200 mt-2"
                                value="submit">Register Now</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Services -->

<div class="services page_section">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Our Services</h1>
                </div>
            </div>
        </div>

        <div class="row services_row">

            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/earth-globe.svg" alt="">
                </div>
                <h3>Online Courses</h3>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                    Proin quis mi malesuada, finibus tortor fermentum.</p>
            </div>

            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/exam.svg" alt="">
                </div>
                <h3>Indoor Courses</h3>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                    Proin quis mi malesuada, finibus tortor fermentum.</p>
            </div>

            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/books.svg" alt="">
                </div>
                <h3>Amazing Library</h3>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                    Proin quis mi malesuada, finibus tortor fermentum.</p>
            </div>

            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/professor.svg" alt="">
                </div>
                <h3>Exceptional Professors</h3>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                    Proin quis mi malesuada, finibus tortor fermentum.</p>
            </div>

            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/blackboard.svg" alt="">
                </div>
                <h3>Top Programs</h3>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                    Proin quis mi malesuada, finibus tortor fermentum.</p>
            </div>

            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/mortarboard.svg" alt="">
                </div>
                <h3>Graduate Diploma</h3>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                    Proin quis mi malesuada, finibus tortor fermentum.</p>
            </div>

        </div>
    </div>
</div>

<!-- Testimonials -->

<div class="testimonials page_section">
    <!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
    <div class="testimonials_background_container prlx_parent">
        <div class="testimonials_background prlx" style="background-image:url({{asset('images/testimonials_background.jpg')}})">
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>What our students say</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">

                <div class="testimonials_slider_container">

                    <!-- Testimonials Slider -->
                    <div class="owl-carousel owl-theme testimonials_slider">

                        <!-- Testimonials Item -->
                        @foreach ($feedbacks as $feedback )
                        <div class="owl-item">
                                <div class="testimonials_item text-center">
                                    <div class="quote">“</div>
                                    <p class="testimonials_text" style="color : white">{{ $feedback->messager }}</p>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="images/testimonials_user.jpg" alt="">
                                        </div>
                                        <div class="testimonial_name">{{ $feedback->name }}</div>
                                        <div class="testimonial_title">{{ $feedback->id }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach




                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- Events -->

<div class="events page_section">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    {{--  <h1>Upcoming Events</h1>  --}}
                    <h1>Upcoming Campaigns</h1>
                </div>
            </div>
        </div>

        <div class="event_items">

            <!-- Event Item -->
            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">

                        <div class="col-lg-2 order-lg-1 order-2">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <div class="event_day">07</div>
                                <div class="event_month">January</div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name"><a class="trans_200" href="#">Student Festival</a></div>
                                <div class="event_location">Grand Central Park</div>
                                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                    ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 order-lg-3 order-1">
                            <div class="event_image">
                                <img src="images/event_1.jpg" alt="https://unsplash.com/@theunsteady5">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Event Item -->
            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">

                        <div class="col-lg-2 order-lg-1 order-2">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <div class="event_day">07</div>
                                <div class="event_month">January</div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name"><a class="trans_200" href="#">Open day in the Univesrsity
                                        campus</a></div>
                                <div class="event_location">Grand Central Park</div>
                                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                    ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 order-lg-3 order-1">
                            <div class="event_image">
                                <img src="images/event_2.jpg" alt="https://unsplash.com/@claybanks1989">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Event Item -->
            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">

                        <div class="col-lg-2 order-lg-1 order-2">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <div class="event_day">07</div>
                                <div class="event_month">January</div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name"><a class="trans_200" href="#">Student Graduation Ceremony</a>
                                </div>
                                <div class="event_location">Grand Central Park</div>
                                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
                                    ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 order-lg-3 order-1">
                            <div class="event_image">
                                <img src="images/event_3.jpg" alt="https://unsplash.com/@juanmramosjr">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
    {{--  <!-- Milestones -->
        <div class="milestones">
            <div class="milestones_container">
                <div class="milestones_background" style="background-image:url(images/milestones_background.jpg)"></div>

                <div class="container">
                    <div class="row">

                        <!-- Milestone -->
                        <div class="col-lg-3 milestone_col">
                            <div class="milestone text-center">
                                <div class="milestone_icon"><img src="images/milestone_1.svg"
                                        alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
                                <div class="milestone_counter" data-end-value="750">0</div>
                                <div class="milestone_text">Current Students</div>
                            </div>
                        </div>

                        <!-- Milestone -->
                        <div class="col-lg-3 milestone_col">
                            <div class="milestone text-center">
                                <div class="milestone_icon"><img src="images/milestone_2.svg"
                                        alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
                                <div class="milestone_counter" data-end-value="120">0</div>
                                <div class="milestone_text">Certified Teachers</div>
                            </div>
                        </div>

                        <!-- Milestone -->
                        <div class="col-lg-3 milestone_col">
                            <div class="milestone text-center">
                                <div class="milestone_icon"><img src="images/milestone_3.svg"
                                        alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
                                <div class="milestone_counter" data-end-value="39">0</div>
                                <div class="milestone_text">Approved Courses</div>
                            </div>
                        </div>

                        <!-- Milestone -->
                        <div class="col-lg-3 milestone_col">
                            <div class="milestone text-center">
                                <div class="milestone_icon"><img src="images/milestone_4.svg"
                                        alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
                                <div class="milestone_counter" data-end-value="3500" data-sign-before="+">0</div>
                                <div class="milestone_text">Graduate Students</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>  --}}
</div>

@endsection
