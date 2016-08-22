@extends('layouts.root2')

@section('title')
    <title>Trang chủ</title>
@stop

@section('slider')
    @include('partial.slider')
@stop

@section('content')
    <h2 class="section-title">Sản phẩm</h2>
    <section>
        <div class="row">
            @foreach($products as $product)
                <div class="col-sm-6 col-md-4">
                    <a href="{{ url('products/'.$product->id) }}">
                        <div class="thumbnail">
                            <img src="{{ url('images/product-1.jpg') }}" alt="">
                            <div class="caption">
                                <h5>{{ $product->title }}</h5>
                                {{--<p>{{ $products[$i]->introduction }}</p>--}}
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@stop