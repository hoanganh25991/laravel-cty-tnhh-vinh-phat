<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<h1>title go here</h1>--}}
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/fonts/flat-icon/flaticon.css') }}">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,500,500italic,700,700italic&subset=latin,vietnamese'
          rel='stylesheet' type='text/css'>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('') }}">Vinh Phát</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('') }}">Trang chủ</a></li>
                <li><a href="{{ url('intro') }}">Giới thiệu</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li style="position:relative">
                            <a href="#">Phân bón phức hợp</a>
                            <ul class="" style="position:absolute; top:0; left:140px; white-space:nowrap;background:#75992e;list-style:none;z-index:-5">
                                <li><a href="#" style="padding:3px 20px;display:block">Phan bon 1</a></li>
                                <li><a href="#" style="padding:3px 20px;display:block">Phan bon 2</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Phân bón hữu cơ</a></li>
                        <li><a href="#">Phân bón vi lượng</a></li>
                        <li><a href="#">Phân bón hữu cơ</a></li>
                        <li><a href="#">Thuốc trị nấm</a></li>
                        <li><a href="#">Thuốc trừ cỏ</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('partners') }}">Đối tác</a></li>
                <li><a href="{{ url('contact') }}">Liên hệ</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
{{--<h1>slider go here</h1>--}}
@yield('slider')
<div class="container" id="main-content" style="margin-top: 50px;">
    <h1>breadcrumbs go here</h1>
    <div class="row">
        <div class="col-md-9" id="main-column">
            @yield('product-index')
        </div>
        <div class="col-md-3" id="side-bar">
            <h3>Phân vi lượng</h3>
            <h1>Loop some product go out here</h1>

            <h3>Tư vấn kỹ thuật</h3>
            <div class="panel panel-success">
                <div class="panel-body">
                    <p><strong>Nguyễn Văn A</strong></p>
                    <p>0903 000 111</p>
                    <br>
                    <p><strong>Nguyễn Văn B</strong></p>
                    <p>0903 999 888</p>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr>
    <section id="product-slider" style="padding-bottom:20px;">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-9">
                        <h3>Sản phẩm mới</h3>
                    </div>
                    <div class="col-md-3">
                        <!-- Controls -->
                        <div class="controls pull-right hidden-xs">
                            <a class="left glyphicon glyphicon-menu-left btn btn-default" href="#carousel-example"
                                data-slide="prev"></a><a class="right glyphicon glyphicon-menu-right btn btn-default" href="#carousel-example"
                                    data-slide="next"><span></span></a>
                        </div>
                    </div>
                </div>
                <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <h1>brief products go here</h1>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="message">
        <div class="row"><h2 class="section-title">Liên hệ</h2></div>
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <form action="" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">
                            <label for="ho_va_ten" class="control-label">Họ và tên</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">
                            <label for="message" class="control-label">Lời nhắn</label>
                            <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-xs-12">
                            <label for="email" class="control-label">Email</label>
                            <input id="email" type="text" name="email" class="form-control">
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <label class="control-label">&nbsp;</label>
                            <button class="btn btn-primary btn-block">GỬI</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-xs-12 contact-block">
                <div class="col-md-12">
                    <dl>
                        <dt><span class="flaticon-big-map-placeholder-outlined-symbol-of-interface"></span> Địa chỉ</dt>
                        <dd>ABC</dd>
                        <dt><span class="flaticon-phone-auricular-outline"></span> Điện thoại</dt>
                        <dd>0900000</dd>
                        <dt><span class="flaticon-email-closed-outlined-back-envelope-interface-symbol"></span> Email</dt>
                        <dd>abcd@example.com</dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>
</div>
<footer class="footer">
    <div class="container">
        <div class="row  hidden-xs">
            <div class="col-md-6 col-md-offset-3">
                <ul class="nav nav-justified">
                    <li class="active"><a href="{{ url('/') }}">Trang chủ</a></li>
                    <li><a href="{{ url('intro') }}">Giới thiệu</a></li>
                    <li><a href="{{ url('partners') }}">Đối tác</a></li>
                    <li><a href="{{ url('contact') }}">Liên hệ</a></li>
                </ul>
            </div>
        </div>
        <p>Copyright <span class="glyphicon glyphicon-copyright-mark"></span> 2016 .:Vinh Phát:.</p>
    </div>
</footer>
<script type="text/javascript" src="{{ url('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
</body>
</html>