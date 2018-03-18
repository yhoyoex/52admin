<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>52 Admin | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <!-- <link href="{{ asset('public/css/fontgoogleapis.css') }}" rel="stylesheet" /> -->
    <link href="{{ asset('public/css/cssff98.css?family=Open+Sans:300,400,600,700') }}" rel="stylesheet" />
    <link href="{{ asset('public/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/plugins/bootstrap/4.0.0/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/plugins/font-awesome/5.0/css/fontawesome-all.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/plugins/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/admin/style.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/admin/style-responsive.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/admin/theme/default.css') }}" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('public/plugins/pace/pace.min.js') }}"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    
    <div class="login-cover">
        <div class="login-cover-image" style="background-image: url({{ asset('public/img/login-bg/login-bg-15.jpg') }})" data-id="login-cover-image"></div>
        <div class="login-cover-bg"></div>
    </div>
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> <b>52</b> Admin
                    <small>Laravel Admin Project by Fifty Two</small>
                </div>
                <div class="icon">
                    <i class="fa fa-lock"></i>
                </div>
            </div>
            <!-- end brand -->
            <!-- begin login-content -->
            <div class="login-content">
                @if(session()->has('errors'))
                    <span class="help-block">
                        @foreach($errors->all() as $error)
                            <strong><span class="text-danger">{{ $error }}</span></strong><br>
                        @endforeach
                    </span>
                @endif
                <form action="{{ route('login') }}" method="POST" class="margin-bottom-0">
                    @csrf
                    <div class="form-group m-b-20">
                        <input type="text" class="form-control{{ $errors->has('login') ? ' is-invalid' : ''}} form-control-lg" placeholder="{{ __('E-Mail Address') }}" name="login" value="{{ old('login') }}" required autofocus />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-lg" placeholder="{{ __('Password') }}" name="password" required />
                    </div>
                    <div class="checkbox checkbox-css m-b-20">
                        <input type="checkbox" id="remember_checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/> 
                        <label for="remember_checkbox">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Sign in</button>
                    </div>
                    <div class="m-t-20">
                        Click <a href="{{ route('register') }}">here</a> to register or click <a href="{{ route('password.request') }}">here</a> to reset your password.
                    </div>
                </form>
            </div>
            <!-- end login-content -->
        </div>
        <!-- end login -->
        
        <ul class="login-bg-list clearfix">
            <li class="active"><a href="javascript:;" data-click="change-bg" data-img="{{ asset('public/img/login-bg/login-bg-15.jpg') }}" style="background-image: url({{ asset('img/login-bg/login-bg-15.jpg') }})"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="{{ asset('public/img/login-bg/login-bg-16.jpg') }}" style="background-image: url({{ asset('public/img/login-bg/login-bg-16.jpg') }})"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="{{ asset('public/img/login-bg/login-bg-17.jpg') }}" style="background-image: url({{ asset('public/img/login-bg/login-bg-17.jpg') }})"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="{{ asset('public/img/login-bg/login-bg-14.jpg') }}" style="background-image: url({{ asset('public/img/login-bg/login-bg-14.jpg') }})"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="{{ asset('public/img/login-bg/login-bg-13.jpg') }}" style="background-image: url({{ asset('public/img/login-bg/login-bg-13.jpg') }})"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="{{ asset('public/img/login-bg/login-bg-12.jpg') }}" style="background-image: url({{ asset('public/img/login-bg/login-bg-12.jpg') }})"></a></li>
        </ul>
        
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-theme-file="{{ asset('public/css/admin/theme/default.css') }}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="{{ asset('public/css/admin/theme/red.css') }}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="../assets/css/admin/theme/blue.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../assets/css/admin/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../assets/css/admin/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="../assets/css/admin/theme/black.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control form-control-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Content Styling</div>
                    <div class="col-md-7">
                        <select name="content-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">black</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="javascript:;" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage">Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
    </div>
    <!-- end page container -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('public/plugins/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('public/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js') }}"></script>
    <!--[if lt IE 9]>
        <script src="{{ asset('public/crossbrowserjs/html5shiv.js') }}"></script>
        <script src="{{ asset('public/crossbrowserjs/respond.min.js') }}"></script>
        <script src="{{ asset('public/crossbrowserjs/excanvas.min.js') }}"></script>
    <![endif]-->
    <script src="{{ asset('public/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('public/plugins/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('public/js/theme/default.min.js') }}"></script>
    <script src="{{ asset('public/js/apps.min.js') }}"></script>
    <!-- ================== END BASE JS ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{ asset('js/demo/login-v2.demo.min.js') }}"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
            LoginV2.init();
        });
    </script>
<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../analytics.js','ga');

  ga('create', 'UA-53034621-1', 'auto');
  ga('send', 'pageview');

</script> -->
</body>
</html>

