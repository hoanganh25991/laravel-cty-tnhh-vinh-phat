<div class="ti-navbar">
    <nav class="navbar navbar-default" role="navigation">
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Sản phẩm <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @foreach($products as $product)
                                <li>
                                    <a href="{{ url('products/'.$product->id) }}">
                                        {{ $product->title }}
                                    </a>
                                </li>
                            @endforeach
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
</div>