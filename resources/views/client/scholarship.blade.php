@extends('masterlayout')
@section('content')
<div class="hero_slide">
    <div class="hero_slide_background" style="background-image:url({{ asset('images/slider_background.jpg') }})"></div>
    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
        <div class="hero_slide_content text-center">
            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">
                <span>Scholarship</span></h1>
        </div>
    </div>
</div>
<div class="container-fluid py-5 bg-light">
    <div class="container">
        @foreach ($scholarships as $scholarship)
        <div class="row py-4 text-dark">
            <div class="col-md-6">
                <img class="scholar-img" src="{{asset('images/scholarship').'/'.$scholarship->image}}">
            </div>
            <div class="col-md-6 d-flex flex-column box-scholar">
                <h2 class="text-dark">
                     <a class="text-dark text-capitalize" href="{{ url('/detai/'.$scholarship->id) }}">{{ $scholarship->title }}</a>
                     <span>{{ $scholarship->created_at }}</span> </h2>
                <h3 class="text-uppercase d-flex justify-content-between">
                     <span>{{ $scholarship -> unit_id }}</span>
                     <span>{{ $scholarship->country_id}}</span></h3>
                <h3 class="">
                    <span>Award Amount : {{ $scholarship->pay }}</span>
                </h3>
                <span>{{ $scholarship->brief_content }}</span>
                <span>Deadline : {{ $scholarship -> enddate }}</span>
                <div class="scholar-link">
                    <a href="{{ url('registerScholarship/'.$scholarship->id) }}" class="btn btn-outline-primary mr-1">Register</a>
                    <a href="{{ url('/detai/'.$scholarship->id) }}" class="btn btn-outline-dark" style="pading : 0 10px;float: right">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection
