<div class="row">
	<div class="col-md-6">
		<div class="product-image">
			@if($variation->image_url)
			<img src="{{ $variation->image_url }}" alt="{{ $variation->product->name }} - {{ $variation->name }}" style="width: 100%; max-width: 400px; border-radius: 8px;" />
			@else
			<img src="{{ asset('images/superiorV4.png') }}" alt="{{ $variation->product->name }} - {{ $variation->name }}" style="width: 100%; max-width: 400px; border-radius: 8px;" />
			@endif
		</div>
	</div>
	<div class="col-md-6">
		<div class="product-details">
			<h2 style="font-size: 32px; margin-bottom: 10px; color: #333;">{{ $variation->product->name }}</h2>
			<h3 style="font-size: 20px; color: #666; margin-bottom: 20px; font-weight: 400;">{{ $variation->name }}</h3>
			
			@if($variation->is_bestseller)
			<span style="display: inline-block; background: #2ecc71; color: #fff; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: bold; margin-bottom: 20px;">BESTSELLER</span>
			@endif
			
			@if($variation->price)
			<div style="font-size: 36px; color: #2ecc71; font-weight: bold; margin: 20px 0;">
				£{{ number_format($variation->price, 2) }}
			</div>
			@endif
			
			@if($variation->size)
			<p style="font-size: 18px; color: #666; margin-bottom: 20px;">
				<strong>Size:</strong> {{ $variation->size }}
			</p>
			@endif
			
			@if($variation->product->description)
			<div style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 20px;">
				<h4 style="font-size: 18px; margin-bottom: 10px; color: #333;">About This Product</h4>
				<p>{{ $variation->product->description }}</p>
			</div>
			@endif
			
			@if($variation->description)
			<div style="font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 30px;">
				<h4 style="font-size: 18px; margin-bottom: 10px; color: #333;">Product Details</h4>
				<p>{{ $variation->description }}</p>
			</div>
			@endif
			
			<div style="margin-top: 30px;">
				<a href="{{ route('product.show', $variation->slug) }}" style="display: inline-block; margin: 10px 10px 10px 0; padding: 12px 25px; background: #2ecc71; color: #fff; text-decoration: none; border-radius: 4px; font-size: 16px; font-weight: bold;">
					View Full Details
				</a>
				@if($variation->yougarden_url)
				<a href="{{ $variation->yougarden_url }}" target="_blank" rel="noopener noreferrer" style="display: inline-block; margin: 10px 10px 10px 0; padding: 12px 25px; background: #2ecc71; color: #fff; text-decoration: none; border-radius: 4px; font-size: 16px; font-weight: bold;">
					<img src="{{ asset('images/yglogosmall.png') }}" alt="Buy on YouGarden" style="height: 24px; vertical-align: middle; margin-right: 10px;" />
					Buy on YouGarden
				</a>
				@endif
				@if($variation->amazon_url)
				<a href="{{ $variation->amazon_url }}" target="_blank" rel="noopener noreferrer" style="display: inline-block; margin: 10px 10px 10px 0; padding: 12px 25px; background: #ff9900; color: #fff; text-decoration: none; border-radius: 4px; font-size: 16px; font-weight: bold;">
					<img src="{{ asset('images/amazoncolour.png') }}" alt="Buy on Amazon" style="height: 24px; vertical-align: middle; margin-right: 10px;" />
					Buy on Amazon
				</a>
				@else
				<a href="https://www.amazon.co.uk/s?k={{ urlencode($variation->product->name . ' ' . $variation->name) }}" target="_blank" rel="noopener noreferrer" style="display: inline-block; margin: 10px 10px 10px 0; padding: 12px 25px; background: #ff9900; color: #fff; text-decoration: none; border-radius: 4px; font-size: 16px; font-weight: bold;">
					<img src="{{ asset('images/amazoncolour.png') }}" alt="Buy on Amazon" style="height: 24px; vertical-align: middle; margin-right: 10px;" />
					Buy on Amazon
				</a>
				@endif
			</div>
		</div>
	</div>
</div>

