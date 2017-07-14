@extends('layout.master')

	@section('title' | 'Sign up')


	@section('content')

			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="text-center">Register</h3>
						</div>

						@include('err.error')
						
						<div class="panel-body">
							{{ Form::open(['route' => 'admin.signup','class'=>'form-horizontal']) }}

								<div class="form-group col-md-12">
									{{ Form::label('name', 'Name:', ['class'=> 'control-label' ]) }}

									{{ Form::text('name', null, ['class'=> 'form-control input-lg', 'placeholder' => 'Enter your name' ]) }}
								</div>

								<div class="form-group col-md-12">
									{{ Form::label('email', 'Email:', ['class'=> 'control-label' ]) }}

									{{ Form::text('email', null, ['class'=> 'form-control input-lg', 'placeholder' => 'Enter your email address' ]) }}
								</div>

								<div class="form-group col-md-12">
									{{ Form::label('password', 'Password:', ['class'=> 'control-label' ]) }}

									{{ Form::password('password', ['class'=> 'form-control input-lg', 'placeholder' => 'Enter your password' ]) }}
								</div>

								<div class="form-group col-md-12">
									{{ Form::submit('Sign Up', ['class'=> 'form-control btn btn-primary btn-block btn-lg input-lg' ]) }}
								</div>
							{{ Form::close() }}
						</div>
					</div>
				</div>
			</div>
	@endsection