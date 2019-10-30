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
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">See our
                                <span>Milestones</span> here!</h1>
                        </div>
                    </div>
                </div>

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:url({{asset('images/slider_background.jpg')}})"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Join our
                                <span>hand</span> together!</h1>
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
        <div class="row">
            <div class="col-1">
                <h2>GALLERY</h2>
            </div>
        </div>
        <div class="row">
            <div class="column">
                @foreach($galleryImages as $image)
                    @if($loop->index < 8)
                    <a href="#" data-toggle="modal" data-target="#myModal{{$image->id}}">
                        <div class="container-img">
                            <img id="myImg{{$image->id}}" src="{{$image->link}}"
                                 alt="Img{{$image->id}}"
                                 class="image">
                            <div class="overlay">
                                <div class="img-title font-weight-bolder" style="font-size: 35px"><i
                                        class="fas fa-hand-pointer"></i></div>
                            </div>
                        </div>
                    </a>

                    <div class="modal fade" id="myModal{{$image->id}}">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" style="background: rgba(255, 255, 255, 0)">

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                    <img id="img{{$image->id}}" src="{{$image->link}}"
                                         alt="Img{{$image->id}}"
                                         class="image">
                                    <div id="caption">{{$image->description}}</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="column">
                @foreach($galleryImages as $image)
                    @if($loop->index > 7)
                        <a href="#" data-toggle="modal" data-target="#myModal{{$image->id}}">
                            <div class="container-img">
                                <img id="myImg{{$image->id}}" src="{{$image->link}}"
                                     alt="Img{{$image->id}}"
                                     class="image">
                                <div class="overlay">
                                    <div class="img-title font-weight-bolder" style="font-size: 35px"><i
                                            class="fas fa-hand-pointer"></i></div>
                                </div>
                            </div>
                        </a>

                        <div class="modal fade" id="myModal{{$image->id}}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background: rgba(255, 255, 255, 0)">

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                                        <img id="img{{$image->id}}" src="{{$image->link}}"
                                             alt="Img{{$image->id}}"
                                             class="image">
                                        <div id="caption">{{$image->description}}</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
