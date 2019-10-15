@extends('masterlayout')
@section('content')
<div class="home">
    <div class="home_background_container prlx_parent">
        <div class="home_background prlx" style="background-image:url(images/news_background.jpg)"></div>
    </div>
    <div class="home_content">
        <h1>The Scholarship</h1>
    </div>
</div>

<!-- News -->

<div class="news">
    <div class="container">
        <div class="row">

            <!-- News Post Column -->

            <div class="col-lg-8">
                @foreach ($detais as $detai )
                    <h2 class="text-dark d-flex justify-content-between">
                        <span>{{ $detai -> title }}</span> <span style="font-size:12px;width:130px;margin-top:10px;">{{ $detai -> created_at }}</span>
                    </h2>
                    <h4 class="text-dark d-flex">
                        <span>DeadLine : {{ $detai -> enddate }}</span>
                        <span class="ml-5">Study in : {{ $detai -> country_id }}</span>
                        <span class="ml-5">Unit : {{ $detai -> unit_id }}</span>
                    </h4>
                    <img width="100%" style="margin-bottom : 20px" src="{{asset('images/scholarship').'/'.$detai->image}}" alt="">
                    <span class="text-dark" style="font-size : 16px">
                            {{ $detai -> content }}
                    </span><br>
                    <a class="btn btn-primary mt-5" style="float:right" href="{{ url('registerScholarship/'.$detai->id) }}">Registration</a>
                @endforeach
                <div class="news_post_comments">
						<div class="comments_title">Comments</div>
						<ul class="comments_list">

                            <!-- Comment -->
                            @foreach ( $coments as  $coment )
							<li class="comment">
								<div class="comment_container d-flex flex-row">

                                        <div>
                                            <div class="comment_image">
                                                <img src="images/comment_1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="comment_content">
                                            <div class="comment_meta">
                                                <span class="comment_name"><a href="#">{{  $coment->name }}</a></span>
                                                <span class="comment_separator">|</span>
                                                <span class="comment_date">{{ $coment->created_at }}</span>
                                                <span class="comment_separator">|</span>
                                                <span class="comment_reply_link"><a >{{ $coment->email }}</a></span>
                                            </div>
                                            <p class="comment_text">{{ $coment->messager }}</p>
                                        </div>

								</div>
                            </li>
                            @endforeach
                            {{-- {!! $coments -> Links() !!} --}}


                        </ul>
                        <a id="loadmore" class="btn btn-outline-dark  mt-4">Load More <span>3 in {{ $totalcomment }} Comment</span> </a>
                        <div class="leave_comment">
                                <div class="leave_comment_title">Leave a comment</div>
                                <div class="leave_comment_form_container">
                                    <form role="form" action="{{route('scholarship.coment')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input style="display : none" type="text" name="id" value="{{ $detai->id }}">
                                        <input name="name" id="comment_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
                                        <input name="email" id="comment_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
                                        <textarea name="messager" id="comment_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                                        <button id="comment_send_btn" type="submit" class="comment_send_btn trans_200" value="submit">send Coment</button>
                                    </form>
                                </div>
                            </div>

					</div>
            </div>

            <!-- Sidebar Column -->

            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">
                            <h3>Latest posts</h3>
                        </div>

                        <div class="latest_posts">

                            <!-- Latest Post -->
                            @foreach ($latestposts as $latestpost )
                            <div class="latest_post">
                                <div class="latest_post_image">
                                    <img style="object-fit:cover;height:180px" width="100%"  src="{{asset('images/scholarship').'/'.$latestpost->image}}" alt="">
                                </div>
                                <div class="latest_post_title"><a href="">{{ $latestpost->title }}</a></div>
                                <div class="latest_post_meta">
                                    <span class="latest_post_author"><a href="#">{{ $latestpost->unit_id }}</a></span>
                                    <span>|</span>
                                    <span class="latest_post_comments"><a href="#">3 Comments</a></span>
                                </div>
                            </div>
                            @endforeach
                            <div style="width:100%">
                                    <a style="float:right" href="{{ url('/scholars-ship') }}">Show all</a>
                            </div>

                        </div>

                    </div>

                    <!-- Tags -->

                    <div class="sidebar_section">
                        <div class="sidebar_section_title">
                            <h3>Tags</h3>
                        </div>
                        <div class="tags d-flex flex-row flex-wrap">
                            <div class="tag"><a href="#">USA</a></div>
                            <div class="tag"><a href="#">UK</a></div>
                            <div class="tag"><a href="#">10000$</a></div>
                            {{-- <div class="tag"><a href="#">Teachers</a></div>
                            <div class="tag"><a href="#">School</a></div>
                            <div class="tag"><a href="#">Graduate</a></div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
        var load = document.getElementById('loadmore');
        var page = 1;
        load.addEventListener('click',function LoadComent() {

            $.ajax({
                url: '{{url('/load-coment-scholarship')}}',
                data: {
                    page: ++page,
                    page_id: {{ $detai->id }}
                },
                method: 'GET',
                //console.log('results'),
                success: function (result) {
                    $(".comments_list").append(result);
                }
            });
        })

</script>
@endsection
