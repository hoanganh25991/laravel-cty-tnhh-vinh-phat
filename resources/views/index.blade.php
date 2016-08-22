@extends('layouts.root)

@section('title')
    <title>Trang chủ</title>
@stop

@section('slider')
<div id="slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class=""></li>
        <li data-target="#slider" data-slide-to="1" class=""></li>
        <li data-target="#slider" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item">
            <img src="{{ url('images/slide-1.jpg') }}">
            <div class="container">
                <div class="carousel-caption">
                    <h1 class="caption-title">Cam Kết</h1>
                    <p class="caption-content">Với phương châm “chất lượng và uy tín” được đặt lên hàng đầu, công ty TNHH TM Vĩnh Thạnh xin cam kết và chịu trách nhiệm với quý công ty, đại lý, bà con nông dân về nguồn gốc xuất xứ, chất lượng và mẫu mã sản phẩm mà công ty đã đăng kí và công bố. Để công ty TNHH TM Vĩnh Thạnh mãi mãi là người bạn đồng hành đáng tin cậy, chúng tôi rất mong nhận được những lời góp ý chân thành từ quý công ty, đại lý và bà con nông dân.</p>
                    <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ url('images/slide-2.jpg') }}">
            <div class="container">
                <div class="carousel-caption">
                    <h1 class="caption-title">Nhà Máy Hiện Đại</h1>
                    <p class="caption-content">Vào ngày 14 tháng 6 năm 2010 công ty TNHH TM Vĩnh Thạnh đã chính thức kí hợp đồng đầu tư tại khu Công Nghiệp Long Hậu. Với diện tích 5000 m2, Vĩnh Thạnh xây dựng 3 kho chứa hàng và 1 nhà máy đóng gói với hệ thống tự động được nhập khẩu từ Châu Âu. Đây là một trong những khu công nghiệp hiệi đại nhất Việt Nam hiện nay, chỉ cách trung tâm Tp. HCM 15km, nằm gần cụm cảng SPCT, Cảng Hiệp Phước , Cảng Khánh Hội… thuận lợi cho việc nhập cũng như vận chuyển hàng hóa đi khắp các tỉnh thành trên cả nước.</p>
                    <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
                </div>
            </div>
        </div>
        <div class="item active">
            <img src="{{ url('images/slide-3.jpg') }}">
            <div class="container">
                <div class="carousel-caption">
                    <h1 class="caption-title">Phân bón - Thuốc BVTV</h1>
                    <p class="caption-title">Các sản phẩm phân bón và thuốc BVTV cao cấp chính hãng nhập từ các nước như Đức, Bỉ, Anh, Pháp, Nga, Mỹ, Bulgari, Hà Lan, Malaysia, Italia, … Với phương châm đặt chất lượng và uy tín lên hàng đầu, chúng tôi cung cấp những sản phẩm chất lượng giúp tăng năng suất cây trồng, giảm chi phí và mang tính xuất khẩu cao trong thị trường cạnh tranh hiện nay.</p>
                    <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#slider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#slider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
@stop

@section('product-index')
    <section>
        <div class="row"><h2 class="section-title">Sản phẩm</h2></div>
        <div class="row">
            @for ($i=0; $i< count($products); $i++)
                <div class="col-sm-6 col-md-4">
                    <a href="{{ url('products/'.$products[$i]->id) }}">
                        <div class="thumbnail">
                            <img src="{{ url('images/p2.jpg') }}" alt="">
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
@stop