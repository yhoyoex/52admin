<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v4.0/frontend/blog/index_transparent_header.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 15:39:09 GMT -->
<head>
    <meta charset="utf-8" />
    <title>52 Blog | Blog Page</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('public/plugins/bootstrap/3.3.7/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/plugins/font-awesome/5.0/css/fontawesome-all.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/plugins/animate/animate.min.css ') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/blog/style.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/blog/style-responsive.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/blog/theme/default.css') }}" id="theme" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('public/plugins/pace/pace.min.js ') }}"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body>
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-transparent navbar-fixed-top">
        <!-- begin container -->
        <div class="container">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="navbar-brand">
                    <span class="brand-logo"></span>
                    <span class="brand-text">
                        52 BLOG
                    </span>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- begin navbar-collapse -->
            <div class="collapse navbar-collapse" id="header-navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="javascript:;">HOME</a></li>
                    <li>
                        <a href="javascript:;" data-toggle="dropdown">POSTS <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="post_grid.html">Page with Grid View Blog Post</a></li>
                            <li><a href="post_without_sidebar.html">Page without Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="about_me.html">ABOUT ME</a></li>
                    <li><a href="contact_us.html">CONTACT US</a></li>
                    <li><a href="{{ url('forum') }}">FORUM</a></li>
                    @if(Auth::user())
                    <li>
                        <a href="javascript:;" data-toggle="dropdown">{{ strtoupper(Auth::user()->name) }} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('admin') }}">{{strtoupper(__('Admin') )}}</a></li>
                            <li><a href="{{ route('logout') }}">{{strtoupper(__('Logout') )}}</a></li>
                        </ul>
                    </li>
                    @else
                    <li><a href="{{ route('login') }}">{{ strtoupper(__('Login')) }}</a></li>
                    @endif
                </ul>
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #header -->
    
    <!-- begin #page-title -->
    <div id="page-title" class="page-title has-bg">
        <div class="bg-cover"><img src="{{ asset('public/img/cover/cover-5.jpg') }}" alt="" /></div>
        <div class="container">
            <h1>Official 52 Admin Blog</h1>
            <p>Blog Concept Front End Page</p>
        </div>
    </div>
    <!-- end #page-title -->
    
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row row-space-30">
                <!-- begin col-9 -->
                <div class="col-md-9">
                    <!-- begin post-list -->
                    <ul class="post-list">
                        <li>
                            <!-- begin post-left-info -->
                            <div class="post-left-info">
                                <div class="post-date">
                                    <span class="day">03</span>
                                    <span class="month">SEPT</span>
                                </div>
                                <div class="post-likes">
                                    <i class="fa fa-heart-o"></i>
                                    <span class="number">520</span>
                                </div>
                            </div>
                            <!-- end post-left-info -->
                            <!-- begin post-content -->
                            <div class="post-content">
                                <!-- begin post-image -->
                                <div class="post-image post-image-with-carousel">
                                    <!-- begin carousel -->
                                    <div id="carousel-post" class="carousel slide" data-ride="carousel">
                                        <!-- begin carousel-indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-post" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-post" data-slide-to="1"></li>
                                            <li data-target="#carousel-post" data-slide-to="2"></li>
                                        </ol>
                                        <!-- end carousel-indicators -->
                                        <!-- begin carousel-inner -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="post_detail.html"><img src="{{ asset('public/img/post/post-1.jpg') }}" alt="" /></a>
                                            </div>
                                            <div class="item">
                                                <a href="post_detail.html"><img src="{{ asset('public/img/post/post-2.jpg') }}" alt="" /></a>
                                            </div>
                                            <div class="item">
                                                <a href="post_detail.html"><img src="{{ asset('public/img/post/post-3.jpg') }}" alt="" /></a>
                                            </div>
                                        </div>
                                        <!-- end carousel-inner -->
                                        <!-- begin carousel-control -->
                                        <a class="left carousel-control" href="#carousel-post" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-post" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        </a>
                                        <!-- end carousel-control -->
                                    </div>
                                    <!-- end carousel -->
                                </div>
                                <!-- end post-image -->
                                <!-- begin post-info -->
                                <div class="post-info">
                                    <h4 class="post-title">
                                        <a href="post_detail.html">Bootstrap Carousel Blog Post</a>
                                    </h4>
                                    <div class="post-by">
                                        Posted By <a href="#">admin</a> <span class="divider">|</span> <a href="#">Sports</a>, <a href="#">Mountain</a>, <a href="#">Bike</a> <span class="divider">|</span> 2 Comments
                                    </div>
                                    <div class="post-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit dolor, elementum ut ligula ultricies, 
                                        aliquet eleifend risus. Vivamus ut auctor sapien. Morbi at nibh id lorem viverra commodo augue dui, in pellentesque odio tempor.
                                         Etiam lobortis vel enim vitae facilisis. Suspendisse ac faucibus diam, non malesuada nisl. Maecenas vel aliquam eros, sit amet gravida lacus. 
                                         nteger dictum, nulla [...]
                                    </div>
                                </div>
                                <!-- end post-info -->
                                <!-- begin read-btn-container -->
                                <div class="read-btn-container">
                                    <a href="post_detail.html">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                                <!-- end read-btn-container -->
                            </div>
                            <!-- end post-content -->
                        </li>
                        <li>
                            <!-- begin post-left-info -->
                            <div class="post-left-info">
                                <div class="post-date">
                                    <span class="day">21</span>
                                    <span class="month">OCT</span>
                                </div>
                                <div class="post-likes">
                                    <i class="fa fa-heart-o"></i>
                                    <span class="number">1,292</span>
                                </div>
                            </div>
                            <!-- end post-left-info -->
                            <!-- begin post-content -->
                            <div class="post-content">
                                <!-- begin post-image -->
                                <div class="post-image">
                                    <a href="post_detail.html"><img src="{{ asset('public/img/post/post-4.jpg') }}" alt="" /></a>
                                </div>
                                <!-- end post-image -->
                                <!-- begin post-info -->
                                <div class="post-info">
                                    <h4 class="post-title">
                                        <a href="post_detail.html">Demonstration Blog Post</a>
                                    </h4>
                                    <div class="post-by">
                                        Posted By <a href="#">admin</a> <span class="divider">|</span> <a href="#">Sports</a>, <a href="#">Parachute</a>, <a href="#">Blue Sky</a> <span class="divider">|</span> 12 Comments
                                    </div>
                                    <div class="post-desc">
                                         Pellentesque sit amet lectus at urna tempus tincidunt. Curabitur aliquet nisl ut magna efficitur scelerisque. 
                                         Mauris molestie elementum massa eget bibendum. Sed mauris tortor, condimentum nec efficitur lobortis, tempus ac metus. 
                                         Donec molestie, tortor ut rhoncus consectetur, ipsum elit maximus nulla, a vulputate augue massa ac dolor. 
                                         Quisque euismod ornare cursus. Ut consequat pellentesque mattis [...]
                                    </div>
                                </div>
                                <!-- end post-info -->
                                <!-- begin read-btn-container -->
                                <div class="read-btn-container">
                                    <a href="post_detail.html" class="read-btn">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                                <!-- end read-btn-container -->
                            </div>
                            <!-- end post-content -->
                        </li>
                        <li>
                            <!-- begin post-left-info -->
                            <div class="post-left-info">
                                <div class="post-date">
                                    <span class="day">18</span>
                                    <span class="month">OCT</span>
                                </div>
                                <div class="post-likes">
                                    <i class="fa fa-heart-o"></i>
                                    <span class="number">1,743</span>
                                </div>
                            </div>
                            <!-- end post-left-info -->
                            <!-- begin post-content -->
                            <div class="post-content">
                                <!-- begin post-video -->
                                <div class="post-video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_5aKcpAhTOk" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <!-- end post-video -->
                                <!-- begin post-info -->
                                <div class="post-info">
                                    <h4 class="post-title">
                                        <a href="post_detail.html">Blog Post Video</a>
                                    </h4>
                                    <div class="post-by">
                                        Posted By <a href="#">admin</a> <span class="divider">|</span> <a href="#">Movies</a>, <a href="#">Minions</a>, <a href="#">Trailer</a> <span class="divider">|</span> 1,292 Comments
                                    </div>
                                    <div class="post-desc">
                                        Praesent maximus malesuada purus, sit amet auctor velit scelerisque nec. Suspendisse eget pellentesque dui, ut egestas orci. 
                                        Proin eget massa et magna faucibus pulvinar. Quisque tortor orci, volutpat vel auctor non, varius a augue. Cras non ante arcu. 
                                        Phasellus sit amet dolor non est dictum convallis vel eu lectus. 
                                        Etiam consectetur non leo at auctor. Proin porttitor tellus arcu, in accumsan eros tincidunt eget[...]
                                    </div>
                                </div>
                                <!-- end post-info -->
                                <!-- begin read-btn-container -->
                                <div class="read-btn-container">
                                    <a href="post_detail.html">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                                <!-- end read-btn-container -->
                            </div>
                            <!-- end post-content -->
                        </li>
                        <li>
                            <!-- begin post-left-info -->
                            <div class="post-left-info">
                                <div class="post-date">
                                    <span class="day">12</span>
                                    <span class="month">OCT</span>
                                </div>
                                <div class="post-likes">
                                    <i class="fa fa-heart-o"></i>
                                    <span class="number">3,673</span>
                                </div>
                            </div>
                            <!-- end post-left-info -->
                            <!-- begin post-content -->
                            <div class="post-content">
                                <!-- begin blockquote -->
                                <blockquote>
                                    "What is design? It's where you stand with a foot in two worlds - the world of technology and the world of people and human purposes - and you try to bring the two together."
                                </blockquote>
                                <!-- end blockquote -->
                                <!-- begin post-info -->
                                <div class="post-info">
                                    <h4 class="post-title">
                                        <a href="post_detail.html">Blockquote Post</a>
                                    </h4>
                                    <div class="post-by">
                                        Posted By <a href="#">admin</a> <span class="divider">|</span> <a href="#">Animals</a>, <a href="#">Mountain</a>, <a href="#">Natural</a> <span class="divider">|</span> 2 Comments
                                    </div>
                                    <div class="post-desc">
                                        Ut vulputate sem id egestas faucibus. Phasellus volutpat malesuada lacus, eu semper enim hendrerit a. 
                                        Mauris vehicula sapien sit amet eros pharetra dignissim. Quisque sed elit hendrerit, tempor sem ut, faucibus massa. 
                                        Aliquam rutrum id massa interdum dapibus. Proin augue massa, feugiat eu velit vitae, vulputate ullamcorper turpis. 
                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.  [...]
                                    </div>
                                </div>
                                <!-- end post-info -->
                                <!-- begin read-btn-container -->
                                <div class="read-btn-container">
                                    <a href="post_detail.html" class="read-btn">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                                <!-- begin read-btn-container -->
                            </div>
                            <!-- end post-content -->
                        </li>
                    </ul>
                    <!-- end post-list -->
                    
                    <!-- begin pagination -->
                    <div class="section-container">
                        <div class="pagination-container text-center">
                            <ul class="pagination m-t-0 m-b-0">
                                <li class="disabled"><a href="javascript:;">Prev</a></li>
                                <li class="active"><a href="javascript:;">1</a></li>
                                <li><a href="javascript:;">2</a></li>
                                <li><a href="javascript:;">3</a></li>
                                <li><span class="text">...</span></li>
                                <li><a href="javascript:;">1797</a></li>
                                <li><a href="javascript:;">Next</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end pagination -->
                </div>
                <!-- end col-9 -->
                <!-- begin col-3 -->
                <div class="col-md-3">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <div class="input-group sidebar-search">
                            <input type="text" class="form-control" placeholder="Search Our Stories..." />
                            <span class="input-group-btn">
                                <button class="btn btn-inverse" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title"><span>Categories</span></h4>
                        <ul class="sidebar-list">
                            <li><a href="#">Sports (20)</a></li>
                            <li><a href="#">Outdoor Sports (45)</a></li>
                            <li><a href="#">Indoor Sports (1,292)</a></li>
                            <li><a href="#">Video Shooting (12)</a></li>
                            <li><a href="#">Drone (229)</a></li>
                            <li><a href="#">Uncategorized (1,482)</a></li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title"><span>Recent Post</span></h4>
                        <ul class="sidebar-recent-post">
                            <li>
                                <div class="info">
                                    <h4 class="title"><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                    <div class="date">23 December 2015</div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h4 class="title"><a href="#">Vestibulum a cursus arcu.</a></h4>
                                    <div class="date">16 December 2015</div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h4 class="title"><a href="#">Nullam vel condimentum lectus. </a></h4>
                                    <div class="date">7 December 2015</div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h4 class="title"><a href="#">Proin in dui egestas libero posuere ullamcorper. </a></h4>
                                    <div class="date">20 November 2015</div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h4 class="title"><a href="#">Interdum et malesuada fames ac ante.</a></h4>
                                    <div class="date">5 November 2015</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title"><span>Follow Us</span></h4>
                        <ul class="sidebar-social-list">
                            <li><a href="#"><i class="fab fa-fw m-r-10 fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-fw m-r-10 fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-fw m-r-10 fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fab fa-fw m-r-10 fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #content -->
    
    <!-- begin #footer -->
    <div id="footer" class="footer">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row">
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-3">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="footer-title">Categories</h4>
                        <ul class="categories">
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Outdoor Sports</a></li>
                            <li><a href="#">Indoor Sports</a></li>
                            <li><a href="#">Video Shooting</a></li>
                            <li><a href="#">Drone</a></li>
                            <li><a href="#">Uncategorized</a></li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-3">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="footer-title">Archives</h4>
                        <ul class="archives">
                            <li><a href="#">June 2015</a> <span class="total">(102)</span></li>
                            <li><a href="#">May 2015</a> <span class="total">(46)</span></li>
                            <li><a href="#">April 2015</a> <span class="total">(84)</span></li>
                            <li><a href="#">March 2015</a> <span class="total">(67)</span></li>
                            <li><a href="#">February 2015</a> <span class="total">(99)</span></li>
                            <li><a href="#">January 2015</a> <span class="total">(113)</span></li>
                            <li><a href="#">December 2014</a> <span class="total">(25)</span></li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-3">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="footer-title">Recent Posts</h4>
                        <ul class="recent-post">
                            <li>
                                <h4>
                                    <a href="#">Nam ut urna hendrerit</a>
                                    <span class="time">February 22, 2015</span>
                                </h4>
                            </li>
                            <li>
                                <h4>
                                    <a href="#">Class aptent taciti sociosqu</a>
                                    <span class="time">July 15, 2015</span>
                                </h4>
                            </li>
                            <li>
                                <h4>
                                    <a href="#">Donec rhoncus arcu</a>
                                    <span class="time">March 21, 2015</span>
                                </h4>
                            </li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-3">
                    <div class="section-container">
                        <h4 class="footer-title">About Fifty Two</h4>
                        <address>
                            <strong>Twitter, Inc.</strong><br />
                            795 Folsom Ave, Suite 600<br />
                            San Francisco, CA 94107<br />
                            P: (123) 456-7890<br />
                            <br />
                            <strong>Bayu Trisnapati</strong><br />
                            <a href="#">bayutrisnapati@gmail.com</a>
                        </address>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #footer -->
    <!-- begin #footer-copyright -->
    <div id="footer-copyright" class="footer-copyright">
        <!-- begin container -->
        <div class="container">
            <span class="copyright">&copy; 2018 Fifty Two All Right Reserved</span>
            <ul class="social-media-list">
                <li><a href="#"><i class="fab fa-fw m-r-10 fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-fw m-r-10 fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fab fa-fw m-r-10 fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-fw m-r-10 fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
        </div>
        <!-- end container -->
    </div>
    <!-- end #footer-copyright -->
    
    <!-- begin theme-panel -->
    <div class="theme-panel">
        <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
        <div class="theme-panel-content">
            <ul class="theme-list clearfix">
                <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="{{ asset('public/css/blog/theme/purple.css') }}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="{{ asset('public/css/blog/theme/blue.css') }}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                <li class="active"><a href="javascript:;" class="bg-green" data-theme-file="{{ asset('public/css/blog/theme/default.css') }}" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="{{ asset('public/css/blog/theme/orange.css') }}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="{{ asset('public/css/blog/theme/red.css') }}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
            </ul>
        </div>
    </div>
    <!-- end theme-panel -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('public/plugins/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/plugins/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
    <!--[if lt IE 9]>
        <script src="{{ asset('public/crossbrowserjs/html5shiv.js') }}"></script>
        <script src="{{ asset('public/crossbrowserjs/respond.min.js') }}"></script>
        <script src="../asset('public/crossbrowserjs/excanvas.min.js') }}"></script>
    <![endif]-->
    <script src="{{ asset('public/plugins/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('public/js/blog/apps.min.js') }}"></script>
    <!-- ================== END BASE JS ================== -->
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
</body>
