@foreach ($posts as $post)
<div class="col-md-6 col-sm-6">
    <div class="single-popular-post">
        <div class="post-img">
            <a href="#"><img src="img/blog/5.jpg" alt="Popular Post" /></a>
            <a href="#" class="post-tag">Bài viết</a>
            <div class="post-info">
                <p>
                    <span class="post-date"><a href="#">{{ $post->created_at}}</a></span>
                    <span class="post-comments"><a href="#">{{ $post->like}} like</a></span>
                    <span class="post-social-links">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Likes"><i class="fa fa-heart"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                    </span>
                </p>
            </div>
        </div>
        <div class="post-content">
            <h6 class="post-title"><a href="#">{{ $post->title}}</a></h6>
            <p class="post-short-desc" style="overflow: hidden;-webkit-line-clamp: 3;height: 75px;display: -webkit-box;-webkit-box-orient: vertical;">{{ $post->content}}</p>
            <a href="#" class="continue-link">Continue Reading...</a>
        </div>
    </div><!-- /.single-popular-post -->
</div>
@endforeach
