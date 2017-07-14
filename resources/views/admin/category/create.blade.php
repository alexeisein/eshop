@extends('layout.master')

	@section('title', '| Create Product')

	{{ Html::style('css/style.css')}}

	@section('content')
		<div class="container">
	
			<div class="row">
			@include('partials.adminleft')
			
				<div class="panel panel-default col-md-9">
					<div class="panel-heading">
						<h3 class="text-center"> Create Category</h3><hr>
						<a href="{{ route('category.index')}}" class="btn btn-primary pull-right"> View Categories</a>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">
						@include('err.error')
					  <div class="form-horizontal">

						  	{!! Form::open(['route' => 'category.store', 'class' => 'form-horizontal']) !!}

						  	<div class="form-group">
						  		{{ Form::label('category_name', 'Category Name:', ['class' => 'control-label']) }}
						  		{{ Form::text('category_name', null, ['class'=> 'form-control input-lg', 'placeholder'=>'Enter product name']) }}
						  	</div>

						  	<div class="form-group col-md-3">
						  		{{ Form::submit('Add Category', ['class'=> 'form-control btn btn-info btn-lg input-lg']) }}
						  	</div>
								
							{!! Form::close() !!}

						</div>
					</div>
				</div>
			</div>
		</div>
	@endsection