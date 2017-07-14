@extends('layout.master')

	@section('title', '| All products')

	@section('content')
		<div class="container">

			<div class="row">
			
				<div class="panel panel-default col-md-8 col-md-offset-2">
					<div class="panel-heading">
						<p class="pull-left"> Cart</p>
						<p class="text-center"> Product</p>
						<a href="" class="btn btn-primary pull-right"> Add Product</a>
						<div class="clearfix"></div>
					</div>
					
					<div class="panel-body">
						
						<div class="col-md-12">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Product</th>
										<th>Quantity</th>
										<th>₦.Price </th>
										<th>Size</th>
									</tr>
								</thead>

								<tbody>
									{{-- @foreach ($cartItems as $cartItems) --}}
										<tr>
											<td>
												<p>{{ $cartItems->name }}</p>
												<p>{{ $cartItems->options->has('size') ? $cartItems->options->size : ''}}</p>
											</td>

											<td>
												<input type="text" value="{{ $cartItems->qty }}">
											</td>

											<td>₦{{ $cartItems->price }}.00</td>

											
										</tr>
									{{-- @endforeach --}}
								</tbody>

								{{-- <tfoot>
							        <tr>
							            <td colspan="2">&nbsp;</td>
							            <td>Subtotal</td>
							            <td>{{ Cart::subtotal() }}</td>
							        </tr>
							        <tr>
							            <td colspan="2">&nbsp;</td>
							            <td>Tax</td>
							            <td>{{ Cart::tax() }}</td>
							        </tr>
							        <tr>
							            <td colspan="2">&nbsp;</td>
							            <td>Total</td>
							            <td>{{ Cart::total() }}</td>
							        </tr>
							    </tfoot> --}}


							</table>
					   </div>
					</div>
				</div>
			</div>
		</div>
		
	@endsection