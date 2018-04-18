<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

    <title>Progressus - Free business bootstrap template by GetTemplate</title>

    <link rel="shortcut icon" href="{{asset_home('images/gt_favicon.png')}}">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{{asset_home('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset_home('css/font-awesome.min.css')}}">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="{{asset_home('css/bootstrap-theme.css')}}" media="screen" >
    <link rel="stylesheet" href="{{asset_home('css/main.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset_home('js/html5shiv.js')}}"></script>
    <script src="{{asset_home('js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body class="home">
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="{{url('')}}"><img src="{{asset_home('images/logo.png')}}" alt="赛鹏科技"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="{{url('')}}">首页</a></li>
                <li><a href="{{url('about')}}">关于我们</a></li>
                <li><a href="{{url('help')}}">帮助中心</a></li>
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="sidebar-left.html">Left Sidebar</a></li>--}}
                        {{--<li class="active"><a href="sidebar-right.html">Right Sidebar</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <li><a href="{{url('contact')}}">联系我们</a></li>
                <li><a class="btn" style="line-height:12px;" href="signin.html">登陆</a></li>
                <li><a class="btn" style="line-height:12px;" href="signin.html">注册</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->

@section('header')
    <header id="head" class="secondary"></header>
@show

@yield('container')


<footer id="footer" class="top-space">

    <div class="footer1">
        <div class="container">
            <div class="row">

                <div class="col-md-3 widget">
                    <h3 class="widget-title">联系我们</h3>
                    <div class="widget-body">
                        <p>+86 18830102005<br>
                            <a href="mailto:#">doug@spen.vip</a><br>
                            <br>
                            周一到周日 9:00 ~ 18:00
                        </p>
                    </div>
                </div>

                {{--<div class="col-md-3 widget">--}}
                    {{--<h3 class="widget-title">Follow me</h3>--}}
                    {{--<div class="widget-body">--}}
                        {{--<p class="follow-me-icons">--}}
                            {{--<a href=""><i class="fa fa-twitter fa-2"></i></a>--}}
                            {{--<a href=""><i class="fa fa-dribbble fa-2"></i></a>--}}
                            {{--<a href=""><i class="fa fa-github fa-2"></i></a>--}}
                            {{--<a href=""><i class="fa fa-facebook fa-2"></i></a>--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-6 widget">--}}
                    {{--<h3 class="widget-title">Text widget</h3>--}}
                    {{--<div class="widget-body">--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>--}}
                        {{--<p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div> <!-- /row of widgets -->
        </div>
    </div>

    <div class="footer2">
        <div class="container">
            <div class="row">

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="simplenav">
                            <a href="#">首页</a> |
                            <a href="about.html">关于我们</a> |
                            <a href="sidebar-right.html">帮助中心</a> |
                            <a href="contact.html">联系我们</a> |
                            <b><a href="signup.html">登陆</a></b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="text-right">
                            Copyright &copy; 2018, www.spen.vip <a href="http://www.spen.vip/" target="_blank" title="赛鹏">赛鹏科技</a></p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>

</footer>

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="{{asset_home('js/headroom.min.js')}}"></script>
<script src="{{asset_home('js/jQuery.headroom.min.js')}}"></script>
<script src="{{asset_home('js/template.js')}}"></script>
</body>
</html>