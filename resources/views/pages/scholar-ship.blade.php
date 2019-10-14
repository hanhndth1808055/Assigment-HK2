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
        <div class="row">
            <div class="col-md-6">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTygVv7fcLd76jMD8XQ3pR7uBvyCOWS-IZOI6FL_e49TT9emt-y"
                    width="100%" height="100%" style="" alt="">
            </div>
            <div class="col-md-6 d-flex flex-column box-scholar">
                <h2>Fulbright Foreign Student Program (USA)</h2>
                <span>The Fulbright Foreign Student Program are prestigious scholarships for international students who
                    wants to pursue a Master’s or PhD degree in the United States. Generally, the grant funds tuition,
                    airfare, a living stipend, and health insurance, etc. The Fulbright program provides funding for the
                    duration of the study.</span>
                <div class="scholar-link">
                    <a href="" class="btn btn-outline-dark" style="pading : 0 10px;float: right">Detail</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
