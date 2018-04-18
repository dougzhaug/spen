@extends('home.layouts.layout')

@section('container')
    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.html">首页</a></li>
            <li class="active">联系我们</li>
        </ol>

        <div class="row">

            <!-- Article main content -->
            <article class="col-sm-9 maincontent">
                <header class="page-header">
                    <h1 class="page-title">联系我们</h1>
                </header>

                <p>
                    我们很乐意听取您的意见。有兴趣一起工作？填写下面的表格并附上关于您的项目的一些信息，我们会尽快回复您。
                </p>
                <br>
                <form>
                    <div class="row">
                        <div class="col-sm-4">
                            <input class="form-control" type="text" placeholder="姓名">
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" placeholder="Email">
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" placeholder="手机号">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <textarea placeholder="详细信息..." class="form-control" rows="9"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            {{--<label class="checkbox"><input type="checkbox"> Sign up for newsletter</label>--}}
                        </div>
                        <div class="col-sm-6 text-right">
                            <input class="btn btn-action" type="submit" value="提交">
                        </div>
                    </div>
                </form>

            </article>
            <!-- /Article -->

            <!-- Sidebar -->
            <aside class="col-sm-3 sidebar sidebar-right">

                <div class="widget">
                    <h4>通信地址:</h4>
                    <address>
                        河北省、石家庄市、新华区、中储广场A座1801
                    </address>
                    <h4>电话:</h4>
                    <address>
                        (0311) 87797888
                    </address>
                </div>

            </aside>
            <!-- /Sidebar -->

        </div>
    </div>	<!-- /container -->

    <section class="container-full top-space">
        <div id="map"></div>
    </section>
@endsection