@extends('layouts.app')

@section('content')
	<!-- Start .products-section -->
	<div class="products-section section white-bg pt-120 pb-90">
		<div class="container">
			<div class="section-head text-center">
				<h2 class="heading">All <span>Product Variations</span></h2>
				<p>Browse all available sizes and variations of our products</p>
			</div>
			
			<div class="products-content pt-40">
				@foreach($products as $product)
				<div class="product-group mb-60">
					<h3 class="heading" style="font-size: 28px; margin-bottom: 30px;">{{ $product->name }}</h3>
					<div class="row">
						@foreach($product->activeVariations as $variation)
						<div class="col-md-4 col-sm-6 mb-30">
							<div class="variation-box text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay="{{ $loop->index * 0.1 }}s">
								<div class="variation-inner" style="border: 2px solid #e0e0e0; border-radius: 8px; padding: 30px 20px; height: 100%; transition: all 0.3s ease; background: #fff; position: relative;">
									@if($variation->is_bestseller)
									<div style="position: absolute; top: -10px; right: 15px; background: #2ecc71; color: #fff; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: bold; box-shadow: 0 2px 8px rgba(46, 204, 113, 0.3);">
										BESTSELLER
									</div>
									@endif
									<h3 class="variation-name" style="font-size: 24px; margin-bottom: 15px; color: #333; margin-top: 10px;">
										<a href="{{ route('product.show', $variation->slug) }}" style="color: #333; text-decoration: none;">{{ $variation->name }}</a>
									</h3>
									@if($variation->size)
									<p class="variation-size" style="font-size: 18px; color: #666; margin-bottom: 15px;">
										<strong>{{ $variation->size }}</strong>
									</p>
									@endif
									@if($variation->price)
									<p class="variation-price" style="font-size: 28px; color: #2ecc71; font-weight: bold; margin-bottom: 20px;">
										£{{ number_format($variation->price, 2) }}
									</p>
									@endif
									@if($variation->description)
									<p class="variation-description" style="font-size: 14px; color: #777; margin-bottom: 25px; min-height: 60px;">
										{{ Str::limit($variation->description, 100) }}
									</p>
									@endif
									<a href="{{ route('product.show', $variation->slug) }}" class="button" style="display: inline-block; padding: 10px 20px; background: #2ecc71; color: #fff; text-decoration: none; border-radius: 4px; margin-top: 10px;">
										View Details
									</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection

