@extends('layout.master')

	@section('title' | 'Dashboard')


	@section('content')

		<div class="row">
			@include('partials.adminleft')
			
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="text-center">Admin</h3><hr class="btn-default" ">
						<p class="text-center">Welcome, {{ Auth::user()->name }}</p>
					</div>
					<div class="panel-body">
						
					</div>
				</div>
			</div>
		</div>

	@endsection