@extends('layouts.main')

@push('styles')
    <link rel="stylesheet" type="text/css" href="/frontend/styles/cart_styles.css">
	<link rel="stylesheet" type="text/css" href="/frontend/styles/cart_responsive.css">
@endpush

@section('header')
	@include('layouts.header')
@endsection

@section('content')
	<!-- Cart -->
	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Shopping Cart</div>
						<div class="cart_items">
						@if(Cart::count() == 0)
							<h3>Cart is Empty</h3>
						@else
							<ul class="cart_list">
								@foreach(Cart::content() as $item)
								<li class="cart_item clearfix">
									<div class="cart_item_image"><img src="{{$item->model->getImage()}}" alt=""></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text"><a href="{{route('index.show', $item->model->slug)}}">{{$item->model->name}}</a></div>
										</div>
										<div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text"><span style="background-color:#999999;"></span>Silver</div>
										</div>
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Actions</div>
											<div class="cart_item_text">
												<form action="{{route('cart.destroy', $item->rowId) }}" method="POST">
													{{ csrf_field() }}
                                					{{ method_field('DELETE') }}
													<button type="submit" class="btn btn-danger" style="display:block">Remove</button>		
												</form>
											</div>
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Price</div>
											<div class="cart_item_text">${{$item->model->price}}</div>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
						@endif
						</div>			
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Order Total:</div>
								<div class="order_total_amount">${{Cart::subtotal()}}</div>
							</div>
						</div>

						<div class="cart_buttons" style="display: flex">
								<a href="{{route('cart.clear')}}" class="button cart_button_clear">Clear Cart</a>

							<button type="button" class="button cart_button_checkout" >Checkout</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection