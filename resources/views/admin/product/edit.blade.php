@extends('layout.master')

	@section('title', '| Create Product')

	@section('content')
		<div class="container">
			<div class="row">
			@include('partials.adminleft')
			
				<div class="panel panel-default col-md-9">
					<div class="panel-heading">
						<h3 class="text-center"> Edit Product</h3>
						<hr>
						<a href="{{ route('product.index')}}" class="btn btn-primary pull-right"> View Products</a>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">
						@include('err.error')
					  <div class="form-horizontal">

						  	{!! Form::model($product,['method'=>'PUT','route' => ['product.update', $product->id], 'class' => 'form-horizontal', 'files' => true]) !!}

								@include('partials.form.create',['submitBtn' => 'Save'])

							{!! Form::close() !!}

						</div>
					</div>
				</div>
			</div>
		</div>
		
	@endsection