@extends('layouts.root2')

@section('title')
	<title>Sản phẩm</title>
@endsection

@section('content')
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">{{ $product->title }}</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
				<tr>
					<th>#</th>
					<th>Xuất xứ</th>
					<th>Loại</th>
					<th>Giai đoạn sử dụng</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<th scope="row">1</th>
					<td>{{ $product->origin }}</td>
					<td>{{ $product->type }}</td>
					<td>{{ $product->using_phase }}</td>
				</tr>
				</tbody>
			</table>
			{!! $product->content !!}
		</div>
	</div>
@stop