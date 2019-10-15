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

    </div>
    <div class="container pb-5 pt-5">
        <div class="row pt-5">
            <div class="col-12">
                <h2>CAMPAIGNS</h2>
            </div>
        </div>
        <div class="row">
            <div class="card-deck">
                <div class="card">
                    <img src="http://www.givnow.in/wp-content/uploads/2018/02/MVKS_featured-400x204.jpg"
                         class="card-img-top" alt="...">
                    <div class="card-body text-justify">
                        <h3 class="card-title text-center">Children’s Education nomadic tribes</h3>
                        <p class="card-text text-center">Campaign by : Swa Sahyog Sanstha
                        </p>
                        <p>Swa Sahyog Sanstha is a Non government Organization (NGO) registered under Rajasthan Society
                            Registration Act 28, 1958.
                        </p>
                    </div>
                    <a href="http://www.givnow.in/education-campaigns/">
                        <div class="card-footer text-center">
                            <small class="text-muted"><i class="fas fa-heart"
                                                         style="font-size: 30px; color: #e53935;"></i><span
                                    style="font-size: 20px; color: #e53935; font-weight: bolder; font-family: 'Open Sans', sans-serif;">  DONATE NOW</span></small>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <img src="http://www.givnow.in/wp-content/uploads/2018/02/MVKS_featured-400x204.jpg"
                         class="card-img-top" alt="...">
                    <div class="card-body text-justify">
                        <h3 class="card-title text-center">Children’s Education nomadic tribes</h3>
                        <p class="card-text text-center">Campaign by : Swa Sahyog Sanstha
                        </p>
                        <p>Swa Sahyog Sanstha is a Non government Organization (NGO) registered under Rajasthan Society
                            Registration Act 28, 1958.
                        </p>
                    </div>
                    <a href="http://www.givnow.in/education-campaigns/">
                        <div class="card-footer text-center">
                            <small class="text-muted"><i class="fas fa-heart"
                                                         style="font-size: 30px; color: #e53935;"></i><span
                                    style="font-size: 20px; color: #e53935; font-weight: bolder; font-family: 'Open Sans', sans-serif;">  DONATE NOW</span></small>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <img src="http://www.givnow.in/wp-content/uploads/2018/02/MVKS_featured-400x204.jpg"
                         class="card-img-top" alt="...">
                    <div class="card-body text-justify">
                        <h3 class="card-title text-center">Children’s Education nomadic tribes</h3>
                        <p class="card-text text-center">Campaign by : Swa Sahyog Sanstha
                        </p>
                        <p>Swa Sahyog Sanstha is a Non government Organization (NGO) registered under Rajasthan Society
                            Registration Act 28, 1958.
                        </p>
                    </div>
                    <a href="http://www.givnow.in/education-campaigns/">
                        <div class="card-footer text-center">
                            <small class="text-muted"><i class="fas fa-heart"
                                                         style="font-size: 30px; color: #e53935;"></i><span
                                    style="font-size: 20px; color: #e53935; font-weight: bolder; font-family: 'Open Sans', sans-serif;">  DONATE NOW</span></small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
