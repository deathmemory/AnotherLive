<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>{{ $title or '' }} - AnotherLive</title>
    <link rel="shortcut icon" href="{{ url('/favicon.ico') }}">
    <link rel="stylesheet" href="{{ url('/css/0.1/bootstrap.min.css') }}">
    <link rel="stylesheet" href="//cdn.bootcss.com/tether/1.3.2/css/tether.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel='stylesheet' href="//fonts.iwch.me/css?family=Open+Sans:600">
    <link rel="stylesheet" href="{{ url('/css/0.1/style.css') }}">
    @yield('css')
</head>
<script src="//cdn.bootcss.com/jquery/2.2.0/jquery.js"></script>
@yield('top-js')
<body>
<div class="container-fluid top-bar">
    <nav class="navbar navbar-inverse navbar-fixed-top live-nav-top">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="fa fa-home"></i> AnotherLive
        </a>
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url(route('video_index')) }}"><i class="fa fa-genderless"></i> 视频首页</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-genderless"></i> 全部视频</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url(route('video_ac_all')) }}"><i class="fa fa-genderless"></i> 直播视频</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-genderless"></i> 分类</a>
            </li>
        </ul>
        <ul class="nav navbar-nav pull-right">
            @if (Auth::guest())
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}"><i class="fa fa-user-plus"></i> 注册</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> 登录</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/account') }}"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> 登出</a>
                </li>
            @endif
        </ul>
    </nav>
    @yield('banner')
</div>
<div class="main-content">
    @yield('content')
    <div class="container-fluid">
        <footer class="content-footer">
            © 2016 <a href="https://niconiconi.org" target="_blank">Volio</a> All right reserved
            <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">&nbsp;&nbsp;赣ICP备14006361号-4</a>
        </footer>
    </div>
</div>
<script src="//cdn.bootcss.com/tether/1.3.2/js/tether.min.js"></script>
<script src="{{ url('/js/vendor/bootstrap.min.js') }}"></script>
@yield('js')
</body>
</html>