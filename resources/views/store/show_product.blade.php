@extends('layout.master')

	@section('title' | 'Welcome to Fweshdeals')

	@section('content')
		<div class="row">
			<div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="{{ asset('images/'.$product->image) }}" alt="JBN Creation Girls Sleeveless Ethnic Set  (Pack of 1 Blue)">
			    </div>
			    <div>
				    {{-- <a href="#" class="btn btn-danger btn-lg" role="button"><i class="fa fa-bolt" aria-hidden="true"></i> BUY NOW</a> --}}

				    <a href="{{ route('cart.edit', $product->id) }}" class="btn btn-warning btn-lg pull-right" role="button"><i class="fa fa-cart-plus" aria-hidden="true"></i> ADD TO CART</a>
			    </div>
			</div>

			<div class="col-sm-8 col-md-6 col-md-offset-1">
		      <div class="caption" id="caption">
		        <h4 id="title">{{ $product->title }}</h4><hr>
		        <p class="btn-success text-center btn-lg"><b>Price: ₦ {{ $product->price }}.00</b></p><hr>
		        <p class=""><b>Sizes: </b><select multiple="">
		        	<option>{{ $product->size }}</option>
		        </select></p>
		        <p id="shortDescription"><h4><b>Description</b>: </h4>{{ $product->description }}</p>
		        
		      </div>
			</div>
		  </div>
		</div>

	@endsection
