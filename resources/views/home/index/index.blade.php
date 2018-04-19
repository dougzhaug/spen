@extends('home.layouts.layout')

@section('header')
    <!-- Header -->
    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead">会员营销，用赛鹏</h1>
                <p class="tagline">精细化门店管理、员工管理、会员管理、商品管理等，为您提供个性化营销建议
                    赛鹏 您的私人订制系统 <a href="{{url('register')}}">注册</a></p>
                <p><a class="btn btn-default btn-lg" href="{{url('register')}}" role="button">马上加入</a> <a class="btn btn-action btn-lg" href="{{url('about')}}" role="button">了解更多</a></p>
            </div>
        </div>
    </header>
    <!-- /Header -->
@endsection

@section('container')
    <!-- Intro -->
    <div class="container text-center">
        <br> <br>
        <h2 class="thin">微会员</h2>
        <p class="text-muted">
            提供多样店铺模板，快速搭建网上商城<br/>

            从渠道打通、会员管理到精准客户营销，全方位覆盖经营场景<br/>

            提供安全可靠的技术支持，你只需专注发展你的业务<br/>
        </p>
    </div>
    <!-- /Intro-->

    <!-- Highlights - jumbotron -->
    <div class="jumbotron top-space">
        <div class="container">

            <h3 class="text-center thin">我们的优势</h3>

            <div class="row">
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-puzzle-piece fa-5"></i>个性化定制</h4></div>
                    <div class="h-body text-center">
                        <p>“彰显自我”已经不是一个简单的口号，付诸实践是时尚达人的不二选择，做最独特的自己，享受“专属”的服务，恰是很多消费者梦寐以求的。消费者通过度身定做这个过程，让自己的个性彰显无遗。
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-weixin fa-5"></i>一键绑定</h4></div>
                    <div class="h-body text-center">
                        <p> 公众号一键绑定后，可在后台设置自定义菜单、自动回复、进行粉丝管理等。公众号是店铺面向粉丝的重要出口，可向粉丝群发推送活动通告、上新通知，和您的粉丝直接的交流和沟通，粉丝可以直接在微信公众号内点击进入您的店铺浏览商品，并完成最终的购买。</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-group fa-5"></i>会员分析</h4></div>
                    <div class="h-body text-center">
                        <p>通过会员分析，店家对于店铺的经营数据可以更加清晰，对于店铺的发展也能有一个更好的规划，可以帮助您更好的管店，是店家不可或缺的经营助手。</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-superpowers fa-5"></i>活动发布</h4></div>
                    <div class="h-body text-center">
                        <p>将有关的客户或者潜在客户邀请到一起，在特定的时间里参与一次活动。对于企业来说，活动发布的流程制定非常重要，由于企业活动发布关系着未来的销售，所以公道甚至出彩的流程策划会给企业的销售形成正面的影响。</p>
                    </div>
                </div>
            </div> <!-- /row  -->

        </div>
    </div>
    <!-- /Highlights -->

    <!-- container -->
    <div class="container">

        <h2 class="text-center top-space">行业支持</h2>
        <br>

        <div class="row">
            <div class="col-sm-6">
                <h3>美发业</h3>
                <p>线上储值卡、次卡、折扣卡，办卡容易成本低，提高顾客粘性和消费频率 顾客微信访问店铺，随时分享和传播;
                    每一笔消费都有短信微信通知，安心周到，顾客更信任</p>
            </div>
            <div class="col-sm-6">
                <h3>餐饮业</h3>
                <p>顾客用微信访问您的店铺，将获得几近完美的浏览体验
                    页面加载和呈现的效果，就像微信自己的界面一样
                    使用最前沿的网页技术，是时候告别那些十年前的网页了</p>
            </div>
        </div> <!-- /row -->

        <div class="row">
            <div class="col-sm-6">
                <h3>酒店业</h3>
                <p>
                    多业态多场景支持，全面解决酒店行业移动营销需求！快速搭建酒店自有直销预订平台，减少佣金支出，降低运营成本
                </p>
            </div>
            <div class="col-sm-6">
                <h3>分销业</h3>
                <p>发动粉丝、员工进行分销，快速招募不断裂变，直接对接百万微商城商家和微小店店主，建立全面的分销网络和多方位推广渠道，实现全网分销</p>
            </div>
        </div> <!-- /row -->

        <div class="jumbotron top-space">
            <h4>赛鹏智联为满足商户多元化的需求而打造的一站式第三方服务选购平台。
                服务市场现已基本涵盖公众号运营所需要的各类应用和服务，包括：电商管理、收银系统、营销插件、客户关系管理等，助力商户解决运营难题。</h4>
            <p class="text-right"><a href="{{url('about')}}" class="btn btn-primary btn-large">了解更多 »</a></p>
        </div>

    </div>	<!-- /container -->
@endsection