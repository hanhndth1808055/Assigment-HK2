@extends('masterlayout')
@section('content')
    <div class="home" style="height: 100vh;">

        <!-- Hero Slider -->
        <div class="hero_slider_container">
            <div class="hero_slider owl-carousel">

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background"
                         style="background-image:url({{asset('images/slider_background.jpg')}})"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your
                                <span>Education</span> today!</h1>
                        </div>
                    </div>
                </div>

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background"
                         style="background-image:url({{asset('images/slider_background.jpg')}})"></div>
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
    <div class="super-container pb-5 pt-5">
        <div class="news">
            <div class="container">
                <div class="row">

                    <!-- News Post Column -->

                    <div class="col-lg-8">

                        <div class="news_post_container">
                            <!-- News Post -->
                            <div class="news_post">
                                <div class="news_post_image">
                                    <img src="{{$campaignDetail->full_size_thumbnail}}"
                                         alt="https://unsplash.com/@dsmacinnes">
                                </div>
                                <div class="news_post_top d-flex flex-column flex-sm-row">
                                    <div class="news_post_date_container">
                                        <div
                                            class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                            <div>{{$campaignDetail->created_at->format('d')}}</div>
                                            <div>{{$campaignDetail->created_at->format('M')}}</div>
                                        </div>
                                    </div>
                                    <div class="news_post_title_container">
                                        <div class="news_post_title">
                                            <a href="news_post.html">{{$campaignDetail->name}}</a>
                                        </div>
                                        <div class="news_post_meta">
                                            <span class="news_post_author"><a
                                                    href="#">By {{$campaignDetail->campaign_chairman}}</a></span>
                                            {{--                                            <span>|</span>--}}
                                            {{--                                            <span class="news_post_comments"><a href="#">3 Comments</a></span>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="news_post_text">
                                    {!!$campaignDetail->long_description!!}
                                </div>

                                <div class="news_post_quote">
                                    <p class="news_post_quote_text"><span>E</span>ducation is the most powerful weapon
                                        which you can use to change the world.</p>
                                </div>

                                <p class="news_post_text text-center" style="margin-top: 59px;">We cherish any support
                                    in terms of property, things or voices. Thank you! </p>
                            </div>

                        </div>

                        <!-- Comments -->
                        <div class="news_post_comments">
                            <div class="comments_title">Comments</div>
                            <ul class="comments_list">

                                <!-- Comment -->
                                <li class="comment">
                                    <div class="comment_container d-flex flex-row">
                                        <div>
                                            <div class="comment_image">
                                                <img src="images/comment_1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="comment_content">
                                            <div class="comment_meta">
                                                <span class="comment_name"><a href="#">Mark Smith</a></span>
                                                <span class="comment_separator">|</span>
                                                <span class="comment_date">Dec 18, 2017</span>
                                                <span class="comment_separator">|</span>
                                                <span class="comment_reply_link"><a href="#">Reply</a></span>
                                            </div>
                                            <p class="comment_text">Aliquam rhoncus, purus in vehicula porttitor, lacus
                                                ante consequat purus, id elementum enim purus nec enim. In sed odio
                                                rhoncus, tristique ipsum id, pharetra neque. </p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Comment -->
                                <li class="comment">
                                    <div class="comment_container d-flex flex-row">
                                        <div>
                                            <div class="comment_image">
                                                <img src="images/comment_2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="comment_content">
                                            <div class="comment_meta">
                                                <span class="comment_name"><a href="#">Mark Smith</a></span>
                                                <span class="comment_separator">|</span>
                                                <span class="comment_date">Dec 18, 2017</span>
                                                <span class="comment_separator">|</span>
                                                <span class="comment_reply_link"><a href="#">Reply</a></span>
                                            </div>
                                            <p class="comment_text">Aliquam rhoncus, purus in vehicula porttitor, lacus
                                                ante consequat purus, id elementum enim purus nec enim. In sed odio
                                                rhoncus, tristique ipsum id, pharetra neque. </p>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                        </div>

                        <!-- Leave Comment -->

                        <div class="leave_comment">
                            <div class="leave_comment_title">Leave a comment</div>

                            <div class="leave_comment_form_container">
                                <form action="post">
                                    <input id="comment_form_name" class="input_field contact_form_name" type="text"
                                           placeholder="Name" required="required" data-error="Name is required.">
                                    <input id="comment_form_email" class="input_field contact_form_email" type="email"
                                           placeholder="E-mail" required="required"
                                           data-error="Valid email is required.">
                                    <textarea id="comment_form_message" class="text_field contact_form_message"
                                              name="message" placeholder="Message" required="required"
                                              data-error="Please, write us a message."></textarea>
                                    <button id="comment_send_btn" type="submit" class="comment_send_btn trans_200"
                                            value="Submit">send message
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>

                    <!-- Sidebar Column -->

                    <div class="col-lg-4">
                        <div class="sidebar">

                            <!-- Latest Posts -->

                            <div class="sidebar_section">
                                <div class="sidebar_section_title">
                                    <h3>Latest posts</h3>
                                </div>

                                <div class="latest_posts">

                                    <!-- Latest Post -->
                                    @foreach($campaigns as $campaign)
                                        @if($campaign->id == $campaignDetail->id)
                                            @continue
                                        @endif
                                        @if($loop->index == 6)
                                            @break
                                        @endif
                                        <div class="latest_post">
                                            <div class="latest_post_image">
                                                <a href="campaigns/{{$campaign->id}}">
                                                    <img src="{{$campaign->thumbnail}}"
                                                         alt="https://unsplash.com/@dsmacinnes">
                                                </a>
                                            </div>
                                            <div class="latest_post_title"><a
                                                    href="campaigns/{{$campaign->id}}">{{$campaign->name}}</a></div>
                                            <div class="latest_post_meta">
                                                <span class="latest_post_author"><a
                                                        href="#">By {{$campaign->campaign_chairman}}</a></span>
                                                {{--                                            <span>|</span>--}}
                                                {{--                                            <span class="latest_post_comments"><a href="#">3 Comments</a></span>--}}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
