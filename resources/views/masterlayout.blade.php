<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EduPan</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png"/>
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/news_post_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/news_post_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/partnership_seminar_research.css" class="partnership_seminar_research seminar-detail">
    <link rel="stylesheet" href="css/gallery.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .dropdown-about-us {
            position: relative;
            display: inline-block;
        }

        .dropdown-content-about-us {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content-about-us a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content-about-us a:hover {background-color: #f1f1f1}

        .dropdown-about-us:hover .dropdown-content-about-us {
            display: block;
        }

    </style>
    <link href="registerFormSeminar/vendor/select2/select2.min.css" rel="stylesheet" class="form-register-seminar">
    <link href="registerFormSeminar/vendor/datepicker/daterangepicker.css" rel="stylesheet" class="form-register-seminar">
    <link href="registerFormSeminar/css/main.css" rel="stylesheet" class="form-register-seminar">

</head>
<body>
@include('header')
@yield('content')
@include('footer')


<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script src="js/partnership_research_seminar.js" class="partnership_seminar_research"></script>
{{--  <script src="js/elements_custom.js"></script>
<script src="js/news_post_custom.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>  --}}
</body>
</html>
