@extends('masterlayout')
@section('content')
<div class="hero_slide">
    <div class="hero_slide_background" style="background-image:url(images/scholar.jpg)"></div>
    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
        <div class="hero_slide_content text-center">
            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">
                <span>Scholar Ship</span></h1>
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
                <h2 class="text-dark">{{ $scholarship->title }} <span>{{ $scholarship->created_at }}</span> </h2>
                <h3 class="text-uppercase d-flex justify-content-between">
                     <span>{{ $scholarship -> unit_id }}</span>
                     <span>{{ $scholarship->country_id}}</span></h3>
                <h3 class="">
                    <span>Award Amount : {{ $scholarship->pay }}</span>
                </h3>
                <span>{{ $scholarship->content }}</span>

                <div class="scholar-link">
                    <a href="" class="btn btn-outline-dark" style="pading : 0 10px;float: right">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection
