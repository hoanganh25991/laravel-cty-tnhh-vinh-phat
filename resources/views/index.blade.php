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
            <a class="navbar-brand" href="#">Vĩnh Phát</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
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
<section class="jumbotron">
    <div class="container">
        <h1>Hello, world!</h1>

        <p></p>

        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>
</section>
<section>
    <div class="container">
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
    </div>
</section>
<section>
    <div class="container">
        <div class="row"><h2 class="section-title">Our Products</h2></div>
        <div class="row">
            @for ($i=0; $i< count($products); $i++)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/product-1.jpg" alt="">
                        <div class="caption">
                            <h4>{{ $products[$i]->title }}</h4>
                            <p>{{ $products[$i]->introduction }}</p>
                        </div>
                    </div>
                </div>
                @if (($i+1)%2 == 0)
                    <div class="clearfix visible-sm"></div>
                @endif
                @if (($i+1)%3 == 0)
                    <div class="clearfix hidden-xs hidden-sm"></div>
                @endif
            @endfor
        </div>
    </div>
</section>
<section class="message">
    <div class="container">
        <div class="row"><h2 class="section-title">Liên hệ</h2></div>
        <div class="row">
            <div class="col-md-8">
    
            </div>
            <div class="col-md-8">
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
    </div>
</section>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>