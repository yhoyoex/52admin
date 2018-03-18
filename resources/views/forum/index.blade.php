<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v4.0/frontend/forum/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 15:40:45 GMT -->
<head>
    <meta charset="utf-8" />
    <title>52 Forum | Support Forum</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('public/plugins/bootstrap/3.3.7/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/plugins/font-awesome/5.0/css/fontawesome-all.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/plugins/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/forum/style.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/forum/style-responsive.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/forum/theme/default.css') }}" id="theme" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('public/plugins/pace/pace.min.js') }}"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body>
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
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
                    <span class="navbar-logo"></span>
                    <span class="brand-text">
                        52 Forum
                    </span>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- begin #header-navbar -->
            <div class="collapse navbar-collapse" id="header-navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="navbar-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Keywords..." />
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                    <li><a href="{{ url('/') }}">{{ strtoupper(__('Home')) }}</a></li>
                    <li>
                        <a href="javascript:;" data-toggle="dropdown">{{ strtoupper(Auth::user()->name) }}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('admin') }}">{{strtoupper(__('Admin') )}}</a></li>
                            <li><a href="{{ route('logout') }}">{{strtoupper(__('Logout') )}}</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- end #header-navbar -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #header -->
    
    <!-- begin search-banner -->
    <div class="search-banner has-bg">
        <!-- begin bg-cover -->
        <div class="bg-cover">
            <img src="{{ asset('public/img/cover/cover-1.jpg') }}" alt="" />
        </div>
        <!-- end bg-cover -->
        <!-- begin container -->
        <div class="container">
            <h1>1,293 Post for discussion</h1>
            <div class="input-group m-b-20">
                <input type="text" class="form-control input-lg" placeholder="Search the forums" />
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-lg"><i class="fa fa-search"></i></button>
                </span>
            </div>
            <h5>Browse by Popular Categories</h5>
            <ul class="popular-tags">
                <li><a href="#"><i class="fa fa-circle text-danger"></i> CSS</a></li>
                <li><a href="#"><i class="fa fa-circle text-primary"></i> Bootstrap</a></li>
                <li><a href="#"><i class="fa fa-circle text-warning"></i> Javascript</a></li>
                <li><a href="#"><i class="fa fa-circle"></i> jQuery</a></li>
                <li><a href="#"><i class="fa fa-circle text-success"></i> Android</a></li>
                <li><a href="#"><i class="fa fa-circle text-muted"></i> iOS</a></li>
                <li><a href="#"><i class="fa fa-circle text-purple"></i> Template</a></li>
            </ul>
        </div>
        <!-- end container -->
    </div>
    <!-- end search-banner -->
    
    <!-- begin content -->
    <div class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin panel-forum -->
            <div class="panel panel-forum">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Official Management District</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin forum-list -->
                <ul class="forum-list">
                    <li>
                        <!-- begin media -->
                        <div class="media">
                            <img src="{{ asset('public/img/icon/icon-gold-note.png') }}" alt="" />
                        </div>
                        <!-- end media -->
                        <!-- begin info-container -->
                        <div class="info-container">
                            <div class="info">
                                <h4 class="title"><a href="category_list.html">Announcement</a></h4>
                                <p class="desc">
                                    The latest official news, events , announcements, updates and other information released .
                                </p>
                            </div>
                            <div class="total-count">
                                <span class="total-post">1,293</span> <span class="divider">/</span> <span class="total-comment">9,291</span>
                            </div>
                            <div class="latest-post">
                                <h4 class="title"><a href="category_list.html">Migrate from jQuery 1.8.x to jQuery 2.0.x</a></h4>
                                <p class="time">Yesterday 10:49pm <a href="category_list.html" class="user">admin</a></p>
                            </div>
                        </div>
                        <!-- end info-container -->
                    </li>
                    <li>
                        <!-- begin media -->
                        <div class="media">
                            <img src="{{ asset('public/img/icon/icon-cone.png') }}" alt="" />
                        </div>
                        <!-- end media -->
                        <!-- begin info-container -->
                        <div class="info-container">
                            <div class="info">
                                <h4 class="title"><a href="category_list.html">Bug / Suggestion</a></h4>
                                <p class="desc">
                                    Template development proposals, content-related complaints and bug submission.
                                </p>
                            </div>
                            <div class="total-count">
                                <span class="total-post">1,293</span> <span class="divider">/</span> <span class="total-comment">9,291</span>
                            </div>
                            <div class="latest-post">
                                <h4 class="title"><a href="category_list.html">Migrate from jQuery 1.8.x to jQuery 2.0.x</a></h4>
                                <p class="time">Yesterday 10:49pm <a href="category_list.html" class="user">admin</a></p>
                            </div>
                        </div>
                        <!-- end info-container -->
                    </li>
                </ul>
                <!-- end forum-list -->
            </div>
            <!-- end panel-forum -->
            <!-- begin panel-forum -->
            <div class="panel panel-forum">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">General Bootstrap Discussion</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin forum-list -->
                <ul class="forum-list">
                    <li>
                        <!-- begin media -->
                        <div class="media">
                            <img src="{{ asset('public/img/icon/icon-chat-bubble.png') }}" alt="" />
                        </div>
                        <!-- end media -->
                        <!-- begin info-container -->
                        <div class="info-container">
                            <div class="info">
                                <h4 class="title"><a href="category_list.html">CSS</a></h4>
                                <p class="desc">
                                    The latest official news, events , announcements, updates and other information released .
                                </p>
                            </div>
                            <div class="total-count">
                                <span class="total-post">1,293</span> <span class="divider">/</span> <span class="total-comment">9,291</span>
                            </div>
                            <div class="latest-post">
                                <h4 class="title"><a href="category_list.html">Migrate from jQuery 1.8.x to jQuery 2.0.x</a></h4>
                                <p class="time">Yesterday 10:49pm <a href="category_list.html" class="user">admin</a></p>
                            </div>
                        </div>
                        <!-- end info-container -->
                    </li>
                    <li>
                        <!-- begin media -->
                        <div class="media">
                            <img src="{{ asset('public/img/icon/icon-chat-bubble.png') }}" alt="" />
                        </div>
                        <!-- end media -->
                        <!-- begin info-container -->
                        <div class="info-container">
                            <div class="info">
                                <h4 class="title"><a href="category_list.html">Javascript / jQuery</a></h4>
                                <p class="desc">
                                    Template introduction, installation, and integration in different framework.
                                </p>
                            </div>
                            <div class="total-count">
                                <span class="total-post">1,293</span> <span class="divider">/</span> <span class="total-comment">9,291</span>
                            </div>
                            <div class="latest-post">
                                <h4 class="title"><a href="category_list.html">Migrate from jQuery 1.8.x to jQuery 2.0.x</a></h4>
                                <p class="time">Yesterday 10:49pm <a href="category_list.html" class="user">admin</a></p>
                            </div>
                        </div>
                        <!-- end info-container -->
                    </li>
                    <li>
                        <!-- begin media -->
                        <div class="media">
                            <img src="{{ asset('public/img/icon/icon-chat-bubble.png') }}" alt="" />
                        </div>
                        <!-- end media -->
                        <!-- begin info-container -->
                        <div class="info-container">
                            <div class="info">
                                <h4 class="title"><a href="category_list.html">Twitter Bootstrap</a></h4>
                                <p class="desc">
                                    Template development proposals, content-related complaints and bug submission.
                                </p>
                            </div>
                            <div class="total-count">
                                <span class="total-post">1,293</span> <span class="divider">/</span> <span class="total-comment">9,291</span>
                            </div>
                            <div class="latest-post">
                                <h4 class="title"><a href="category_list.html">Migrate from jQuery 1.8.x to jQuery 2.0.x</a></h4>
                                <p class="time">Yesterday 10:49pm <a href="category_list.html" class="user">admin</a></p>
                            </div>
                        </div>
                        <!-- end info-container -->
                    </li>
                </ul>
                <!-- end forum-list -->
            </div>
            <!-- end panel-forum -->
            <!-- begin panel-forum -->
            <div class="panel panel-forum">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Mobile Apps Discussion</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin forum-list -->
                <ul class="forum-list">
                    <li>
                        <!-- begin media -->
                        <div class="media">
                            <img src="{{ asset('public/img/icon/icon-discussion-grey.png') }}" alt="" />
                        </div>
                        <!-- end media -->
                        <!-- begin info-container -->
                        <div class="info-container">
                            <div class="info">
                                <h4 class="title"><a href="category_list.html">Android</a></h4>
                                <p class="desc">
                                    Template development proposals, content-related complaints and bug submission.
                                </p>
                            </div>
                            <div class="total-count">
                                <span class="total-post">1,293</span> <span class="divider">/</span> <span class="total-comment">9,291</span>
                            </div>
                            <div class="latest-post">
                                <h4 class="title"><a href="category_list.html">Migrate from jQuery 1.8.x to jQuery 2.0.x</a></h4>
                                <p class="time">Yesterday 10:49pm <a href="category_list.html" class="user">admin</a></p>
                            </div>
                        </div>
                        <!-- end info-container -->
                    </li>
                    <li>
                        <!-- begin media -->
                        <div class="media">
                            <img src="{{ asset('public/img/icon/icon-discussion-grey.png') }}" alt="" />
                        </div>
                        <!-- end media -->
                        <!-- begin info-container -->
                        <div class="info-container">
                            <div class="info">
                                <h4 class="title"><a href="category_list.html">iOS</a></h4>
                                <p class="desc">
                                    Template development proposals, content-related complaints and bug submission.
                                </p>
                            </div>
                            <div class="total-count">
                                <span class="total-post">1,293</span> <span class="divider">/</span> <span class="total-comment">9,291</span>
                            </div>
                            <div class="latest-post">
                                <h4 class="title"><a href="category_list.html">Migrate from jQuery 1.8.x to jQuery 2.0.x</a></h4>
                                <p class="time">Yesterday 10:49pm <a href="category_list.html" class="user">admin</a></p>
                            </div>
                        </div>
                        <!-- end info-container -->
                    </li>
                </ul>
                <!-- end forum-list -->
            </div>
            <!-- end panel-forum -->
        </div>
        <!-- end container -->
    </div>
    <!-- end content -->
    
    <!-- begin #footer -->
    <div id="footer" class="footer">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row">
                <!-- begin col-4 -->
                <div class="col-md-4">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4>About Color Admin</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices ipsum in elementum porttitor. 
                            Cras porttitor fermentum nisl non elementum. Nulla in placerat libero. Nulla pharetra purus eget diam dictum 
                            ullamcorper nec et eros. Suspendisse consectetur nulla ut volutpat aliquam.
                        </p>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4>Latest Post</h4>
                        <ul class="latest-post">
                            <li>
                                <h4 class="title"><a href="#">Consectetur adipiscing elit ultrices</a></h4>
                                <p class="time">yesterday 10:42am</p>
                            </li>
                            <li>
                                <h4 class="title"><a href="#">Fusce ultrices ipsum porttitor</a></h4>
                                <p class="time">10/04/2015</p>
                            </li>
                            <li>
                                <h4 class="title"><a href="#">Cras porttitor fermentum adipiscing</a></h4>
                                <p class="time">02/04/2015</p>
                            </li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-4">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4>New Users</h4>
                        <ul class="new-user">
                            <li><a href="#"><img src="{{ asset('public/img/user/user-1.jpg') }}" alt="" /></a></li>
                            <li><a href="#"><img src="{{ asset('public/img/user/user-2.jpg') }}" alt="" /></a></li>
                            <li><a href="#"><img src="{{ asset('public/img/user/user-3.jpg') }}" alt="" /></a></li>
                            <li><a href="#"><img src="{{ asset('public/img/user/user-4.jpg') }}" alt="" /></a></li>
                            <li><a href="#"><img src="{{ asset('public/img/user/user-5.jpg') }}" alt="" /></a></li>
                            <li><a href="#"><img src="{{ asset('public/img/user/user-6.jpg') }}" alt="" /></a></li>
                            <li><a href="#"><img src="{{ asset('public/img/user/user-7.jpg') }}" alt="" /></a></li>
                            <li><a href="#"><img src="{{ asset('public/img/user/user-8.jpg') }}" alt="" /></a></li>
                            <li><a href="#"><img src="{{ asset('public/img/user/user-9.jpg') }}" alt="" /></a></li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #footer -->
    <!-- begin #footer-copyright -->
    <div id="footer-copyright" class="footer-copyright">
        <div class="container">
            &copy; 2018 Fifty Two All Right Reserved
            <a href="#">Contact Us</a> 
            <a href="#">Knowledge Base</a>
        </div>
    </div>
    <!-- end #footer-copyright -->
    <!-- begin theme-panel -->
    <div class="theme-panel">
        <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
        <div class="theme-panel-content">
            <ul class="theme-list clearfix">
                <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="{{ asset('public/css/forum/theme/purple.css') }}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="{{ asset('public/css/forum/theme/blue.css') }}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                <li class="active"><a href="javascript:;" class="bg-green" data-theme-file="{{ asset('public/css/forum/theme/default.css') }}" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="{{ asset('public/css/forum/theme/orange.css') }}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="{{ asset('public/css/forum/theme/red.css') }}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
            </ul>
        </div>
    </div>
    <!-- end theme-panel -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('public/plugins/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/plugins/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
    <!--[if lt IE 9]>
        <script src="assets/crossbrowserjs/html5shiv.js"></script>
        <script src="assets/crossbrowserjs/respond.min.js"></script>
        <script src="assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="{{ asset('public/plugins/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('public/js/forum/apps.min.js') }}"></script>
    <!-- ================== END BASE JS ================== -->
    
    <script>    
        $(document).ready(function() {
            App.init();
        });
    </script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v4.0/frontend/forum/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 15:43:39 GMT -->
</html>
