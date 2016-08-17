@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
                <div class="x_title">
                    <h2>Thêm sản phẩm</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toogle" data-toogle="dropdown" role="button"
                               aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Setting 1</a></li>
                                ;<i><a href="#">Setiing 2</a></i>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form method="POST" action="{{ url('/admin/products/store') }}" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tên sản phẩm</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" name="title" class="form-control" placeholder="Nhập tên sản phẩm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Giới thiệu về sản phẩm</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" name="introduction" class="form-control" placeholder="Nhập phần giới thiệu cho sản phẩm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Ảnh đại diện</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" name="thumbnail" class="form-control" placeholder="Nhập tên sản phẩm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Nội dung</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="content" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Xuất xứ</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" name="origin" class="form-control" placeholder="Chọn xuất xứ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Loại</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" name="type" class="form-control" placeholder="Chọn loại">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Giai đoạn sử dụng</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" name="using_phase" class="form-control" placeholder="Chọn giai đoạn sử dụng">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop