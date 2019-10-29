<header class="header d-flex flex-row">
    <div class="header_content d-flex flex-row align-items-center">
        <!-- Logo -->
        <div class="logo_container">
            <div class="logo">
                <img src="images/logo.png" alt="">
                <span>edupan</span>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="main_nav_container">
            <div class="main_nav">
                <ul class="main_nav_list"><li class="main_nav_item"><a href="#">home</a></li>
                    <li class="main_nav_item"><a href="{{url('research')}}">Research </a></li>
                    <li class="main_nav_item"><a href="{{url('seminar')}}">seminar</a></li>
                    <li class="main_nav_item"><a href="elements.html">Campaigns</a></li>
                    <li class="main_nav_item"><a href="{{ url('scholarship') }}">Scholarship</a></li>
                    <li class="main_nav_item ">
                        <div class="dropdown-about-us">
                            <a class="main_nav_item" style="margin-right: -12px ; color: #3a3a3a">About Us
                                <i class="fa fa-caret-down ml-1" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-content-about-us">
                                <a href="{{url('partnership')}}">Partnership</a>
                                <a href="#">Gallery</a>
                            </div>
                        </div>
                    </li>
                    {{-- <li><a href="{!! route('user.change-language', ['en']) !!}">English</a></li>
                       <li> <a href="{!! route('user.change-language', ['vi']) !!}">Vietnam</a></li> --}}
                    {{--  <li class="main_nav_item"><a href="contact.html">About Work</a></li>  --}}
                </ul>
            </div>
        </nav>
    </div>
    <div class="header_side d-flex flex-row justify-content-center align-items-center">
        <img src="images/phone-call.svg" alt="">
        <span><a href="{{ url('contact') }}" style="color : #fff">Contact Us</a></span>
    </div>

    <!-- Hamburger -->
    <div class="hamburger_container">
        <i class="fas fa-bars trans_200"></i>
    </div>

</header>
<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
					<li class="menu_item menu_mm"><a href="#">Reseach</a></li>
					<li class="menu_item menu_mm"><a href="courses.html">Serminar</a></li>
					<li class="menu_item menu_mm"><a href="elements.html">Campaigns</a></li>
					<li class="menu_item menu_mm"><a href="{{ url('scholars-ship') }}">Scholarship</a></li>
                    <li class="main_nav_item ">
                        <div class="dropdown-about-us">
                            <a class="main_nav_item" style="margin-right: -12px ; color: #3a3a3a">About Us
                                <i class="fa fa-caret-down ml-1" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-content-about-us">
                                <a href="#">Partnership</a>
                                <a href="#">Gallery</a>
                            </div>
                        </div>
                    </li>
                    <li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>

				</ul>

				<!-- Menu Social -->

				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>

					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>


