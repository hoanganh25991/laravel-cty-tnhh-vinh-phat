@extends('layouts.single')

@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">{{ $product->title }}</h3>
		</div>
		<div class="panel-body">
			{!! $product->content !!}
		</div>
	</div>
@stop