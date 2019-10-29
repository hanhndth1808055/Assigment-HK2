<!-- Footer -->
<footer class="footer">
    <div class="container">

        <!-- Newsletter -->

        <div class="newsletter">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Subscribe to newsletter</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <div class="newsletter_form_container mx-auto">
                        <form action="{{route('contact')}}" method="post">
                            @csrf
                            <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                                <input name="email" id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address"
                                 required="required" data-error="Valid email is required." value="{{old('country_name')}}">

                                <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
                            </div>
                            @if($errors -> has("email"))
                                <p class="error">{{ $errors -> first("email") }}</p>
                                @endif
                                @if(Session::has("success"))
                                <p class="text-center" style="color:green">{{ Session::get("success") }}</p>
                                @endif
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer Content -->

        <div class="footer_content">
            <div class="row">

                <!-- Footer Column - About -->
                <div class="col-lg-5 footer_col">

                    <!-- Logo -->
                    <div class="logo_container">
                        <div class="logo">
                            <img src="images/logo.png" alt="">
                            <span>edupan</span>
                        </div>
                    </div>

                    <p class="footer_about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum, tempor lacus.</p>

                </div>

                <!-- Footer Column - Menu -->

                <div class="col-lg-3 pl-4 footer_col">
                    <div class="footer_column_title">Menu</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_list_item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="footer_list_item"><a href="{{url('research')}}">Research</a></li>
                            <li class="footer_list_item"><a href="{{url('seminar')}}">Seminar</a></li>
                            <li class="footer_list_item"><a href="{{ url('campaigns') }}">Campaings</a></li>
                            <li class="footer_list_item"><a href="{{ url('scholarship') }}">Scholarship</a></li>
                            <li class="footer_list_item"><a href="{{ url('gallery') }}">Gallery</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column - Usefull Links -->

                {{-- <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Usefull Links</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_list_item"><a href="#">Testimonials</a></li>
                            <li class="footer_list_item"><a href="#">FAQ</a></li>
                            <li class="footer_list_item"><a href="#">Community</a></li>
                            <li class="footer_list_item"><a href="#">Campus Pictures</a></li>
                            <li class="footer_list_item"><a href="#">Tuitions</a></li>
                        </ul>
                    </div>
                </div> --}}

                <!-- Footer Column - Contact -->

                <div class="col-lg-4 footer_col">
                    <div class="footer_column_title">Contact</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                               Ton That Thuyet - My Dinh - Ha Noi
                            </li>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                0123456678
                            </li>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>edupan@gamil.com
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer Copyright -->

        <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
            <div class="footer_copyright">
                <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
            </div>
            <div class="footer_social ml-sm-auto">
                <ul class="menu_social">
                    <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>

    </div>
</footer>
