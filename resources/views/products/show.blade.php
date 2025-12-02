@extends('layouts.app')

@section('title', $variation->product->name . ' - ' . $variation->name . ' | Blooming Fast')

@section('meta_description', $variation->product->description . ' ' . ($variation->description ?? ''))

@section('content')
	<!-- Start .product-detail-section -->
	<div class="product-detail-section section white-bg pt-120 pb-90">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="product-image wow fadeInLeft" data-wow-duration=".5s">
						@if($variation->image_url)
						<img src="{{ $variation->image_url }}" alt="{{ $variation->product->name }} - {{ $variation->name }}" style="width: 100%; max-width: 500px;" width="500" height="500" loading="eager" />
						@else
						<img src="{{ asset('images/superiorV4.png') }}" alt="{{ $variation->product->name }} - {{ $variation->name }}" style="width: 100%; max-width: 500px;" width="500" height="500" loading="eager" />
						@endif
						@if($variation->video_url)
						<div style="margin-top: 20px;">
							<video controls style="width: 100%; max-width: 500px; border-radius: 8px;">
								<source src="{{ $variation->video_url }}" type="video/mp4">
								Your browser does not support the video tag.
							</video>
						</div>
						@endif
					</div>
				</div>
				<div class="col-md-6">
					<div class="product-details wow fadeInRight" data-wow-duration=".5s">
						<h1 class="heading" style="font-size: 36px; margin-bottom: 10px;">{{ $variation->product->name }}</h1>
						<h2 style="font-size: 24px; color: #666; margin-bottom: 20px; font-weight: 400;">{{ $variation->name }}</h2>
						@if($variation->is_bestseller)
						<span style="display: inline-block; background: #2ecc71; color: #fff; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: bold; margin-bottom: 20px;">BESTSELLER</span>
						@endif
						
						@if($variation->price)
						<div class="product-price" style="font-size: 32px; color: #2ecc71; font-weight: bold; margin: 20px 0;">
							£{{ number_format($variation->price, 2) }}
						</div>
						@endif
						
						@if($variation->size)
						<p style="font-size: 18px; color: #666; margin-bottom: 20px;">
							<strong>Size:</strong> {{ $variation->size }}
						</p>
						@endif
						
						@if($variation->product->description)
						<div class="product-info" style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px;">
							<h3 style="font-size: 20px; margin-bottom: 10px; color: #333;">About This Product</h3>
							<p>{{ $variation->product->description }}</p>
						</div>
						@endif
						
						@if($variation->description)
						<div class="variation-info" style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 30px;">
							<h3 style="font-size: 20px; margin-bottom: 10px; color: #333;">Product Details</h3>
							<p>{{ $variation->description }}</p>
						</div>
						@endif
						
						<div class="product-buttons" style="margin-top: 30px;">
							@if($variation->yougarden_url)
							<a href="{{ $variation->yougarden_url }}" target="_blank" class="button" style="display: inline-block; margin: 10px 10px 10px 0; padding: 15px 30px; background: #2ecc71; color: #fff; text-decoration: none; border-radius: 4px; font-size: 16px; font-weight: bold;">
								<img src="{{ asset('images/yglogosmall.png') }}" alt="Buy on YouGarden" style="height: 24px; vertical-align: middle; margin-right: 10px;" />
								Buy on YouGarden
							</a>
							@endif
							@if($variation->amazon_url)
							<a href="{{ $variation->amazon_url }}" target="_blank" class="button" style="display: inline-block; margin: 10px 10px 10px 0; padding: 15px 30px; background: #ff9900; color: #fff; text-decoration: none; border-radius: 4px; font-size: 16px; font-weight: bold;">
								<img src="{{ asset('images/amazoncolour.png') }}" alt="Buy on Amazon" style="height: 24px; vertical-align: middle; margin-right: 10px;" />
								Buy on Amazon
							</a>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	@if($relatedVariations->count() > 0)
	<!-- Start .related-products-section -->
	<div class="related-products-section section white-bg pt-90 pb-90" style="background: #f8f9fa;">
		<div class="container">
			<div class="section-head text-center">
				<h2 class="heading">Other <span>Sizes Available</span></h2>
				<p>Check out other sizes of {{ $variation->product->name }}</p>
			</div>
			
			<div class="row" style="margin-top: 40px;">
				@foreach($relatedVariations as $related)
				<div class="col-md-4 col-sm-6 mb-30">
					<div class="variation-box text-center">
						<div class="variation-inner" style="border: 2px solid #e0e0e0; border-radius: 8px; padding: 30px 20px; height: 100%; transition: all 0.3s ease; background: #fff;">
							@if($related->is_bestseller)
							<div style="position: absolute; top: -10px; right: 15px; background: #2ecc71; color: #fff; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: bold;">
								BESTSELLER
							</div>
							@endif
							<h3 style="font-size: 24px; margin-bottom: 15px; color: #333;">
								<a href="{{ route('product.show', $related->slug) }}" style="color: #333; text-decoration: none;">{{ $related->name }}</a>
							</h3>
							@if($related->size)
							<p style="font-size: 18px; color: #666; margin-bottom: 15px;">
								<strong>{{ $related->size }}</strong>
							</p>
							@endif
							@if($related->price)
							<p style="font-size: 28px; color: #2ecc71; font-weight: bold; margin-bottom: 20px;">
								£{{ number_format($related->price, 2) }}
							</p>
							@endif
							<a href="{{ route('product.show', $related->slug) }}" class="button" style="display: inline-block; padding: 10px 20px; background: #2ecc71; color: #fff; text-decoration: none; border-radius: 4px;">
								View Details
							</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	@endif
@endsection

