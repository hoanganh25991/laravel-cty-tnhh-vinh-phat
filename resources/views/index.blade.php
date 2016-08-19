<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fonts/flat-icon/flaticon.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,500,500italic,700,700italic&subset=latin,vietnamese'
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
            <a class="navbar-brand" href="#">Vinh Phát</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/') }}">Trang chủ</a></li>
                <li><a href="{{ url('/intro') }}">Giới thiệu</a></li>
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
                <li><a href="{{ url('/partners') }}">Đối tác</a></li>
                <li><a href="{{ url('/contact') }}">Liên hệ</a></li>
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
<div id="slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class=""></li>
        <li data-target="#slider" data-slide-to="1" class=""></li>
        <li data-target="#slider" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item">
            <img src="images/slide-1.jpg">
            <div class="container">
                <div class="carousel-caption">
                    <h1 class="caption-title">Cam Kết</h1>
                    <p class="caption-content">Với phương châm “chất lượng và uy tín” được đặt lên hàng đầu, công ty TNHH TM Vĩnh Thạnh xin cam kết và chịu trách nhiệm với quý công ty, đại lý, bà con nông dân về nguồn gốc xuất xứ, chất lượng và mẫu mã sản phẩm mà công ty đã đăng kí và công bố. Để công ty TNHH TM Vĩnh Thạnh mãi mãi là người bạn đồng hành đáng tin cậy, chúng tôi rất mong nhận được những lời góp ý chân thành từ quý công ty, đại lý và bà con nông dân.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="images/slide-2.jpg">
            <div class="container">
                <div class="carousel-caption">
                    <h1 class="caption-title">Nhà Máy Hiện Đại</h1>
                    <p class="caption-content">Vào ngày 14 tháng 6 năm 2010 công ty TNHH TM Vĩnh Thạnh đã chính thức kí hợp đồng đầu tư tại khu Công Nghiệp Long Hậu. Với diện tích 5000 m2, Vĩnh Thạnh xây dựng 3 kho chứa hàng và 1 nhà máy đóng gói với hệ thống tự động được nhập khẩu từ Châu Âu. Đây là một trong những khu công nghiệp hiệi đại nhất Việt Nam hiện nay, chỉ cách trung tâm Tp. HCM 15km, nằm gần cụm cảng SPCT, Cảng Hiệp Phước , Cảng Khánh Hội… thuận lợi cho việc nhập cũng như vận chuyển hàng hóa đi khắp các tỉnh thành trên cả nước.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item active">
            <img src="images/slide-3.jpg">
            <div class="container">
                <div class="carousel-caption">
                    <h1 class="caption-title">Phân bón - Thuốc BVTV</h1>
                    <p class="caption-title">Các sản phẩm phân bón và thuốc BVTV cao cấp chính hãng nhập từ các nước như Đức, Bỉ, Anh, Pháp, Nga, Mỹ, Bulgari, Hà Lan, Malaysia, Italia, … Với phương châm đặt chất lượng và uy tín lên hàng đầu, chúng tôi cung cấp những sản phẩm chất lượng giúp tăng năng suất cây trồng, giảm chi phí và mang tính xuất khẩu cao trong thị trường cạnh tranh hiện nay.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#slider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#slider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<div class="container" id="main-content">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="active"><a href="#">Home</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9" id="main-column">
            {{-- <div class="row"><h2 class="section-title">Hoạt động</h2></div>
            <section>
                    <div class="row">
                        <div class="col-xs-12 col-md-4 col-sm-6">
                            <div class="box">
                                <div class="box-left">
                                    <span class="icon icon-md icon-primary flaticon-rain-weather-cloud-outline-symbol-with-raindrops-lines"></span>
                                </div>
                                <div class="box-body">
                                    <h3>Hoạt động số 1</h3>
                                </div>
                                <div class="description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-sm-6">
                            <div class="box">
                                <div class="box-left">
                                    <span class="icon icon-md icon-primary flaticon-circular-outlined-badge-with-ribbon-recognition-prize-symbol"></span>
                                </div>
                                <div class="box-body">
                                    <h3>Hoạt động số 2</h3>
                                </div>
                                <div class="description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-sm"></div>
                        <div class="col-xs-12 col-md-4 col-sm-6">
                            <div class="box">
                                <div class="box-left">
                                    <span class="icon icon-md icon-primary flaticon-foggy-day-fog-at-sunset-or-sunrise"></span>
                                </div>
                                <div class="box-body">
                                    <h3>Hoạt động số 3</h3>
                                </div>
                                <div class="description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-xs hidden-sm"></div>
                        <div class="col-xs-12 col-md-4 col-sm-6">
                            <div class="box">
                                <div class="box-left">
                                    <span class="icon icon-md icon-primary flaticon-four-rounded-squares-button"></span>
                                </div>
                                <div class="box-body">
                                    <h3>Hoạt động số 4</h3>
                                </div>
                                <div class="description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-sm"></div>
                        <div class="col-xs-12 col-md-4 col-sm-6">
                            <div class="box">
                                <div class="box-left">
                                    <span class="icon icon-md icon-primary flaticon-hot-interface-symbol-of-fire-flames-outline"></span>
                                </div>
                                <div class="box-body">
                                    <h3>Hoạt động số 5</h3>
                                </div>
                                <div class="description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-sm-6">
                            <div class="box">
                                <div class="box-left">
                                    <span class="icon icon-md icon-primary flaticon-two-drops-sizes-outlined-shapes"></span>
                                </div>
                                <div class="box-body">
                                    <h3>Hoạt động số 6</h3>
                                </div>
                                <div class="description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <hr> --}}
            <section>
                <div class="row"><h2 class="section-title">Sản phẩm</h2></div>
                <div class="row">
                    @for ($i=0; $i< count($products); $i++)
                        <div class="col-sm-6 col-md-4">
                            <a href="{{ url('/products/'.$products[$i]->id) }}">
                                <div class="thumbnail">
                                    <img src="images/p2.jpg" alt="">
                                    <div class="caption">
                                        <h4>{{ $products[$i]->title }}</h4>
                                        <p>{{ $products[$i]->introduction }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    @endfor
                </div>
            </section>
        </div>
        <div class="col-md-3" id="side-bar">
            <h3>Tư vấn kỹ thuật</h3>
            <div class="panel panel-success">
                {{-- <div class="panel-heading">
                    <h3 class="panel-title">Tư vấn kỹ thuật</h3>
                </div> --}}
                <div class="panel-body">
                    <p><strong>Nguyễn Văn A</strong></p>
                    <p>0903 000 111</p>
                    <br>
                    <p><strong>Nguyễn Văn B</strong></p>
                    <p>0903 999 888</p>
                </div>
            </div>
            <h3>Phân vi lượng</h3>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                Collapsible Group 1</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                Collapsible Group 2</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                Collapsible Group 3</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                        </div>
                    </div>
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
                            <a class="left glyphicon glyphicon-menu-left btn btn-success" href="#carousel-example"
                                data-slide="prev"></a><a class="right glyphicon glyphicon-menu-right btn btn-success" href="#carousel-example"
                                    data-slide="next"><span></span></a>
                        </div>
                    </div>
                </div>
                <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="images/p1.jpg" class="img-responsive" alt="a" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="images/p1.jpg" class="img-responsive" alt="a" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="images/p1.jpg" class="img-responsive" alt="a" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="images/p1.jpg" class="img-responsive" alt="a" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="images/p1.jpg" class="img-responsive" alt="a" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="images/p1.jpg" class="img-responsive" alt="a" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="images/p1.jpg" class="img-responsive" alt="a" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="images/p1.jpg" class="img-responsive" alt="a" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <label for="email" class="control-label">&nbsp;</label>
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
                    <li><a href="{{ url('/intro') }}">Giới thiệu</a></li>
                    <li><a href="{{ url('/partners') }}">Đối tác</a></li>
                    <li><a href="{{ url('/contact') }}">Liên hệ</a></li>
                </ul>
            </div>
        </div>
        <p>Copyright <span class="glyphicon glyphicon-copyright-mark"></span> 2016 .:Vinh Phát:.</p>
    </div>
</footer>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>