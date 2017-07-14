@extends('layout.master')

	@section('title', '| All products')

	@section('content')
		<div class="container">

			<div class="row">
			@include('partials.adminleft')
			
				<div class="panel panel-default col-md-9">
					<div class="panel-heading">
						<h3 class="text-center"> All Products</h3><hr>
						<a href="{{ route('product.create')}}" class="btn btn-primary pull-right"> Add Product</a>
						<div class="clearfix"></div>
					</div>
					
					<div class="panel-body">
						
						<div class="col-md-12">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>No.#</th>
										<th>Title</th>
										<th>Size</th>
										<th>Description</th>
										<th>₦.Price </th>
									</tr>
								</thead>

								<tbody>
									@foreach ($products as $product)
										<tr>
											<td>{{ $product->id }}</td>
											<td>
											{{ substr($product->title, 0,50) }}
											{{ strlen($product->title) > 50 ? '...' : '' }}
											</td>
											<td>{{ $product->size }}</td>
											<td>
											{{ substr($product->description, 0, 30)  }}
											{{ strlen($product->description) > 30 ? '...' : '' }}
											</td>
											<td>₦{{ $product->price }}.00</td>

											<td>
												<a href="{{route('product.edit', $product->id)}}" class="btn btn-warning">Edit
												</a>
											</td>

											<td>

											{{Form::open(['method' => 'DELETE', 'route' => ['product.destroy', $product->id],])}}

											{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }} 

											{{Form::close()}}
												
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
					   </div>
					</div>
				</div>
			</div>
		</div>
		
	@endsection