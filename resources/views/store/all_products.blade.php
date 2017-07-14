@extends('layout.master')

	@section('title' | 'Welcome to Fweshdeals')

<style type="text/css">
	div.thumbnail{cursor: pointer;}
	#anchorShowPro{text-decoration: none;}
</style>

	@section('content')
		<div class="row">
			@foreach ($products->chunk(3) as $productChunck)
				@foreach ($productChunck as $product)
					<div class="col-sm-6 col-md-4">

					    <a id="anchorShowPro" href="{{ route('store.show-product',$product->id) }}">

					    	<div class="thumbnail" onclick="openProduct();">
					      		<img src="{{ asset('images/'.$product->image) }}" alt="JBN Creation Girls Sleeveless Ethnic Set  (Pack of 1 Blue)">
					      		<hr>

					      	<div class="caption" id="caption">
					        	<h4 id="title">{{ $product->title }}</h4><hr>

					        		<p class="btn-success text-center btn-lg"><b>Price: ₦ {{ $product->price }}.00</b>
					        		</p><hr>

					        		<p class="">
					      {!! $product->size == 0 ? " " : '<b>'.'Size: ' .'</b>' .$product->size !!}
					        		</p>

					        		<p id="shortDescription"><h4><b>Description</b>: </h4>
					        		{{ substr($product->description, 0, 250 ) }}
					        		{{ strlen($product->description) > 250 ? '...' : ''}}
					        		</p>

							        <p>
								        {{-- <a href="" class="btn btn-danger btn-lg" role="button"><i class="fa fa-bolt" aria-hidden="true"></i> BUY NOW</a> --}}

								        <a href="{{ route('cart.edit', $product->id) }}" class="btn btn-warning btn-lg pull-right" role="button"><i class="fa fa-cart-plus" aria-hidden="true"></i> ADD TO CART</a>
							        </p>
					      		</div>
					    	</div>
					    </a>
	 				</div>
				@endforeach
				
			@endforeach
		</div>

		<div class="text-center">
			{{ $products->links() }}
		</div>
	@endsection
