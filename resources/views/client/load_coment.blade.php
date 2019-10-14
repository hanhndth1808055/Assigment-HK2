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
                    <span class="comment_reply_link"><a>{{ $coment->email }}</a></span>
                </div>
                <p class="comment_text">{{ $coment->messager }}</p>
            </div>

    </div>
</li>
@endforeach
