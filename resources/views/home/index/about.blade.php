@extends('home.layouts.layout')

@section('container')
    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="{{url('')}}">首页</a></li>
            <li class="active">关于我们</li>
        </ol>

        <div class="row">

            <!-- Article main content -->
            <article class="col-sm-8 maincontent">
                <header class="page-header">
                    <h1 class="page-title">关于我们</h1>
                </header>
                <h3>做会员，用赛鹏</h3>
                <p><img src="assets/images/mac.jpg" alt="" class="img-rounded pull-right" width="300" > 赛鹏智联是一个商家服务公司。
                    我们通过产品和服务，帮助互联网时代的生意人私有化顾客资产、拓展互联网客群、提高经营效率，全面助力商家成功。

                    我们致力于成为商家服务领域里最被信任的引领者；
                    并持续作一个Enjoy的组织。</p>
                {{--<p>Quos, aliquam nam velit impedit minus tenetur beatae voluptas facere sint pariatur! Voluptatibus, quisquam, error, est assumenda corporis inventore illo nesciunt iure aut dolor possimus repellat minima veniam alias eius!</p>--}}
                <h3>系统化管理客户，更多会员更多成交</h3>
                <p>客户标签画像，帮你了解你的客户；会员卡/储值卡/会员权益，精准营销拉升客单</p>
                <h3>分销拓展销售渠道，让更多人帮你卖货</h3>
                <p>你的员工帮你卖；你的客户帮你卖；300万商家帮你卖</p>
                <h3>安全稳定</h3>
                <p>集多年技术积累，混合云部署，云防火墙，多地互备，服务治理，弹性伸缩能力，全方位监控，为超百万商户的业务保驾护航。</p>
                {{--<p>Eum, quasi, est, vitae, ipsam nobis consectetur ea aspernatur ad eos voluptatibus fugiat nisi perferendis impedit. Quam, nulla, excepturi, voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia voluptatem natus velit fugiat omnis rem eos sapiente quasi quaerat aspernatur quisquam deleniti accusantium laboriosam odio id?</p>--}}

            </article>
            <!-- /Article -->

            <!-- Sidebar -->
            {{--<aside class="col-sm-4 sidebar sidebar-right">--}}

                {{--<div class="widget">--}}
                    {{--<h4>Vacancies</h4>--}}
                    {{--<ul class="list-unstyled list-spaces">--}}
                        {{--<li><a href="">Lorem ipsum dolor</a><br><span class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</span></li>--}}
                        {{--<li><a href="">Totam, libero, quis</a><br><span class="small text-muted">Suscipit veniam debitis sed ipsam quia magnam eveniet perferendis nisi.</span></li>--}}
                        {{--<li><a href="">Enim, sequi dignissimos</a><br><span class="small text-muted">Reprehenderit illum quod unde quo vero ab inventore alias veritatis.</span></li>--}}
                        {{--<li><a href="">Suscipit, consequatur, aut</a><br><span class="small text-muted">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span></li>--}}
                        {{--<li><a href="">Nam, illo, veritatis</a><br><span class="small text-muted">Delectus, sapiente illo provident quo aliquam nihil beatae dignissimos itaque.</span></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}

            {{--</aside>--}}
            <!-- /Sidebar -->

        </div>
    </div>	<!-- /container -->
@endsection