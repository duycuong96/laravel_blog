@extends('client.layouts.layout')

@section('contents')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <div class="popular-posts-area">
                <h2 class="section-title">Bài viết nổi bật</h2>
                <div class="row">
                    @include('client.homepage.posts')
                </div>
            </div><!-- /.popular-posts-area -->

            <!-- featured-posts-area start -->
            <div id="featured-post" class="featured-posts-area">
                <h2 class="section-title">featured posts</h2>
                <div class="row">
                    @include('client.homepage.posts')
                </div>
            </div>
            <!-- featured-posts-area end -->
        </div>

        <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
            <div class="sidebar-area fix">
                <div class="single-sidebar-widget">
                    <h6 class="widget-title">about me</h6>
                    <div class="sidebar-content about-me">
                        <div class="my-photo">
                            <a href="#"><img class="img-circle" src="img/sidebar/me.jpg" alt="My Image" /></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consecteturs adipisicing elit, sed do
                        eiusmod tempor incididunt labore et dolore aliqua. Ut enim ad minim veniam,</p>
                    </div><!-- /.sidebar-content -->
                </div><!-- /.single-sidebar-widget -->
                <div class="single-sidebar-widget">
                    <h6 class="widget-title">follow me on</h6>
                    <div class="sidebar-content">
                        <div class="social-links-area">
                            <div class="single-icon">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                    <p>Facebook</p>
                                </a>
                            </div><!-- /.single-icon -->
                            <div class="single-icon">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                    <p>Twitter</p>
                                </a>
                            </div><!-- /.single-icon -->
                            <div class="single-icon">
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                    <p>Google Plus</p>
                                </a>
                            </div><!-- /.single-icon -->
                            <div class="single-icon">
                                <a href="#">
                                    <i class="fa fa-pinterest"></i>
                                    <p>Pinterest</p>
                                </a>
                            </div><!-- /.single-icon -->
                            <div class="single-icon">
                                <a href="#">
                                    <i class="fa fa-rss"></i>
                                    <p>RSS</p>
                                </a>
                            </div><!-- /.single-icon -->
                            <div class="single-icon">
                                <a href="#">
                                    <i class="fa fa-dribbble"></i>
                                    <p>Dribbble</p>
                                </a>
                            </div><!-- /.single-icon -->
                            <div class="single-icon">
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                    <p>Instagram</p>
                                </a>
                            </div><!-- /.single-icon -->
                            <div class="single-icon">
                                <a href="#">
                                    <i class="fa fa-heart"></i>
                                    <p>Bloginlove</p>
                                </a>
                            </div><!-- /.single-icon -->
                            <div class="single-icon">
                                <a href="#">
                                    <i class="fa fa-envelope-o"></i>
                                    <p>Email</p>
                                </a>
                            </div><!-- /.single-icon -->
                        </div><!-- /.social-links-area -->
                    </div><!-- /.sidebar-content -->
                </div><!-- /.single-sidebar-widget -->
                <div class="single-sidebar-widget">
                    <h6 class="widget-title">mailchimp widget</h6>
                    <div class="sidebar-content newsletter">
                        <h6>newsletter</h6>
                        <p>Lorem ipsum dolor sit amet, consecteturs adipisicing elit,
                        sed do eiusmod tempor incididunt.</p>
                        <div class="newsletter-form">
                            <form action="#" method="post">
                                <input type="text" placeholder="First name" />
                                <input type="text" placeholder="Your email address" />
                                <input type="submit" value="submit"/>
                            </form>
                        </div>
                    </div><!-- /.sidebar-content -->
                </div><!-- /.single-sidebar-widget -->
                <div class="single-sidebar-widget">
                    <div class="sidebar-content ad-design">
                        <div class="ad-banner">
                            <a href="#"><img src="img/sidebar/ad.jpg" alt="Ad Banner" /></a>
                            <div class="ad-banner-overlay">
                                <div class="banner-text">
                                    <p>ad design</p>
                                    <span>310&nbsp;X&nbsp;200</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.sidebar-content -->
                </div><!-- /.single-sidebar-widget -->
                <div class="single-sidebar-widget">
                    <h6 class="widget-title">categories</h6>
                    <div class="sidebar-content">
                        <div class="categories-list">
                            <ul>
                                <li><a href="#"><span class="category">breaking</span><span class="number">(85)</span></a></li>
                                <li><a href="#"><span class="category">business</span><span class="number">(75)</span></a></li>
                                <li><a href="#"><span class="category">ecommerce</span><span class="number">(66)</span></a></li>
                                <li><a href="#"><span class="category">fashion</span><span class="number">(63)</span></a></li>
                                <li><a href="#"><span class="category">science</span><span class="number">(55)</span></a></li>
                                <li><a href="#"><span class="category">girl</span><span class="number">(50)</span></a></li>
                                <li><a href="#"><span class="category">technology</span><span class="number">(42)</span></a></li>
                                <li><a href="#"><span class="category">shopping</span><span class="number">(29)</span></a></li>
                                <li><a href="#"><span class="category">magazine</span><span class="number">(15)</span></a></li>
                            </ul>
                        </div>
                    </div><!-- /.sidebar-content -->
                </div><!-- /.single-sidebar-widget -->
                <div class="single-sidebar-widget">
                    <h6 class="widget-title">archive</h6>
                    <div class="sidebar-content">
                        <div class="archive-list">
                            <ul>
                                <li><a href="#"><span class="month">march</span><span class="number">(98)</span></a></li>
                                <li><a href="#"><span class="month">january</span><span class="number">(80)</span></a></li>
                                <li><a href="#"><span class="month">february</span><span class="number">(60)</span></a></li>
                                <li><a href="#"><span class="month">december</span><span class="number">(40)</span></a></li>
                                <li><a href="#"><span class="month">october</span><span class="number">(10)</span></a></li>
                            </ul>
                        </div>
                    </div><!-- /.sidebar-content -->
                </div><!-- /.single-sidebar-widget -->
                <div class="single-sidebar-widget">
                    <h6 class="widget-title">tags cloud</h6>
                    <div class="sidebar-content">
                        <div class="tags-list">
                            <ul>
                                <li><a href="#">politics</a></li>
                                <li><a href="#">business</a></li>
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">music</a></li>
                                <li><a href="#">travel</a></li>
                                <li><a href="#">food</a></li>
                                <li><a href="#">photography</a></li>
                                <li><a href="#">technology</a></li>
                                <li><a href="#">sport</a></li>
                            </ul>
                        </div>
                    </div><!-- /.sidebar-content -->
                </div><!-- /.single-sidebar-widget -->
            </div><!-- /.sidebar-area -->
        </div>
    </div>
</div>
@endsection
