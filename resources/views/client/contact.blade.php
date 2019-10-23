@extends('masterlayout')
@section('content')
<div class="home">
    <div class="home_background_container prlx_parent">
        <div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
    </div>
    <div class="home_content">
        <h1>Contact</h1>
    </div>
</div>

<!-- Contact -->

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <!-- Contact Form -->
                <div class="contact_form">
                    <div class="contact_title">Get in touch</div>

                    <div class="contact_form_container">
                        <form role="form" action="{{route('contactus')}}" method="post">
                            @csrf
                            <input id="contact_form_name" name="name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
                            <input id="contact_form_email"  name="email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
                            <textarea id="contact_form_message" name="messager" class="text_field contact_form_message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                            <button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" value="Submit">send message</button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="about">
                    <div class="about_title">Join Courses</div>
                    <p class="about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec eros varius luctus.</p>

                    <div class="contact_info">
                        <ul>
                            <li class="contact_info_item">
                                <div class="contact_info_icon">
                                    <img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                Ton That Thuyet - My Dinh - Ha Noi
                            </li>
                            <li class="contact_info_item">
                                <div class="contact_info_icon">
                                    <img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                0034 37483 2445 322
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0955246324947!2d105.779400715165!3d21.028863493150087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b32ecb92db%3A0x3964e6238a3bd088!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1571800793827!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
