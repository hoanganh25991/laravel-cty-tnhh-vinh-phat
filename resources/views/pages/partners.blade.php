@extends('layouts.single');

@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Đối tác</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3">
					<img class="img-responsive" src="{{ url('/images/partner-1.jpg') }}" alt="">
				</div>
				<div class="col-md-3">
					<img lass="img-responsive" src="{{ url('/images/partner-2.jpg') }}" alt="">
				</div>
				<div class="col-md-3">
					<img class="img-responsive" src="{{ url('/images/partner-3.jpg') }}" alt="">
				</div>
				<div class="col-md-3">
					<img class="img-responsive" src="{{ url('/images/partner-4.jpg') }}" alt="">
				</div>
			</div>
		</div>
	</div>
@stop