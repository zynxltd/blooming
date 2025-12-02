@extends('layouts.app')

@section('content')
	<!-- Start .header-section -->
	<div id="home" class="header-section half-header section gradiant-background header-curbed">
		
		<div class="gradiant-background gradiant-overlay"></div>
		<div id="navigation" class="navigation is-transparent" data-spy="affix" data-offset-top="5">
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<a class="navbar-brand" href="{{ url('/') }}">
							<img class="logo logo-light" src="{{ asset('images/logo.png') }}" alt="logo" />
							<img class="logo logo-color" src="{{ asset('images/logo.png') }}" alt="logo" />
						</a>
					</div>
				</div><!-- /.container -->
			</nav>
		</div><!-- .navigation -->
		
		<div class="header-content pt-90">
			<div class="container">
				<div class="row row-vm">
					<div class="col-md-7">
						<div class="header-texts tab-center mobile-center">
							<h2>{{ $product->name }}</h2>
							<p class="lead">{{ $product->description }}</p>
							<p class="lead">Available in 7 sizes</p>
							<h3 class="heading-light">Click below to buy it from one of our stockists</h3>
							<div class="buttons" style="display: flex; gap: 15px; justify-content: flex-start; flex-wrap: wrap; margin-top: 20px;">
								<!-- YouGarden Button -->
								@if($heroVariation && $heroVariation->yougarden_url)
								<a href="{{ $heroVariation->yougarden_url }}" target="_blank" rel="noopener noreferrer" class="button hero-btn" style="display: inline-flex; align-items: center; justify-content: center; padding: 12px 25px; background: #2ecc71; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px; transition: all 0.3s ease; min-width: 140px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
									<img src="{{ asset('images/yglogosmall.png') }}" alt="Buy on YouGarden" style="height: 24px; vertical-align: middle;" />
								</a>
								@else
								<a href="https://www.yougarden.com/item-p-100062/blooming-fast-superior-soluble-fertiliser" target="_blank" rel="noopener noreferrer" class="button hero-btn" style="display: inline-flex; align-items: center; justify-content: center; padding: 12px 25px; background: #2ecc71; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px; transition: all 0.3s ease; min-width: 140px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
									<img src="{{ asset('images/yglogosmall.png') }}" alt="Buy on YouGarden" style="height: 24px; vertical-align: middle;" />
								</a>
								@endif
								<!-- Amazon Button -->
								@if($heroVariation && $heroVariation->amazon_url)
								<a href="{{ $heroVariation->amazon_url }}" target="_blank" rel="noopener noreferrer" class="button hero-btn" style="display: inline-flex; align-items: center; justify-content: center; padding: 12px 25px; background: #ff9900; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px; transition: all 0.3s ease; min-width: 140px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
									<img src="{{ asset('images/amazoncolour.png') }}" alt="Buy on Amazon" style="height: 24px; vertical-align: middle;" />
								</a>
								@else
								<a href="https://www.amazon.co.uk/s?k={{ urlencode($product->name) }}" target="_blank" rel="noopener noreferrer" class="button hero-btn" style="display: inline-flex; align-items: center; justify-content: center; padding: 12px 25px; background: #ff9900; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px; transition: all 0.3s ease; min-width: 140px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
									<img src="{{ asset('images/amazoncolour.png') }}" alt="Buy on Amazon" style="height: 24px; vertical-align: middle;" />
								</a>
								@endif
							</div>
						</div>
					</div><!-- .col -->
					<div class="col-md-5" style="z-index: 999;">
						<div>
							<img style="z-index: 999;" src="{{ asset('images/superiorV4.png') }}" alt="{{ $product->name }}" />
						</div>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .header-content -->
	</div><!-- .header-section -->
	
	
	<!-- Start .trust-section  -->
	<div class="trust-section section white-bg pt-30 pb-0" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
		<div class="container">
			<div class="row text-center" style="margin: 0;">
				<div class="col-md-3 col-sm-6 mb-20">
					<div class="trust-item" style="margin: 0;">
						<div style="font-size: 48px; color: #2ecc71; margin-bottom: 0;">
							<i class="fa fa-users"></i>
						</div>
						<h3 style="font-size: 32px; color: #333; margin-bottom: 5px; font-weight: bold;">50,000+</h3>
						<p style="color: #666; font-size: 16px; margin-bottom: 0;">Happy Customers</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 mb-20">
					<div class="trust-item" style="margin: 0;">
						<div style="font-size: 48px; color: #2ecc71; margin-bottom: 0;">
							<i class="fa fa-star"></i>
						</div>
						<h3 style="font-size: 32px; color: #333; margin-bottom: 5px; font-weight: bold;">4.8/5</h3>
						<p style="color: #666; font-size: 16px; margin-bottom: 0;">Average Rating</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 mb-20">
					<div class="trust-item" style="margin: 0;">
						<div style="font-size: 48px; color: #2ecc71; margin-bottom: 0;">
							<i class="fa fa-trophy"></i>
						</div>
						<h3 style="font-size: 32px; color: #333; margin-bottom: 5px; font-weight: bold;">10+</h3>
						<p style="color: #666; font-size: 16px; margin-bottom: 0;">Years Experience</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 mb-20">
					<div class="trust-item" style="margin: 0;">
						<div style="font-size: 48px; color: #2ecc71; margin-bottom: 0;">
							<i class="fa fa-check-circle"></i>
						</div>
						<h3 style="font-size: 32px; color: #333; margin-bottom: 5px; font-weight: bold;">100%</h3>
						<p style="color: #666; font-size: 16px; margin-bottom: 0;">Satisfaction Rate</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Start .variations-section  -->
	<div id="variations" class="variations-section section white-bg pt-0 pb-50">
		<div class="container">
			<div class="section-head text-center wow fadeInUp" data-wow-duration="0.8s" style="margin-top: 0; padding-top: 0;">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading">Full <span>Product Range</span></h2>
						<p>Discover our complete range of premium plant feeds and fertilisers, each specially formulated for optimal results.</p>
					</div>
				</div>
			</div><!-- .section-head -->
			
			<div class="variations-content pt-20">
				<div class="row">
					@foreach($allVariations as $index => $variation)
					<div class="col-md-4 col-sm-6 mb-30">
						<div class="variation-box text-center wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="{{ ($index * 0.15) }}s">
							<div class="variation-inner" style="border: 2px solid #e0e0e0; border-radius: 12px; padding: 0; height: 100%; background: #fff; position: relative; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; display: flex; flex-direction: column;">
								@if($variation->is_bestseller)
								<div style="position: absolute; top: 15px; right: 15px; background: #2ecc71; color: #fff; padding: 6px 16px; border-radius: 20px; font-size: 11px; font-weight: bold; box-shadow: 0 3px 10px rgba(46, 204, 113, 0.4); z-index: 10; text-transform: uppercase; letter-spacing: 0.5px;">
									BESTSELLER
								</div>
								@endif
								<!-- Product Image -->
								<div class="variation-image-wrapper" style="position: relative; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 30px 20px 20px; margin-bottom: 0; flex-shrink: 0;">
									@if($variation->image_url)
									<img src="{{ $variation->image_url }}" alt="{{ $variation->product->name }} - {{ $variation->name }}" class="variation-product-image" style="width: 100%; max-width: 200px; height: auto; object-fit: contain; filter: drop-shadow(0 8px 20px rgba(0,0,0,0.15)); transition: transform 0.3s ease;" width="200" height="200" loading="lazy" />
									@else
									<img src="{{ asset('images/superiorV4.png') }}" alt="{{ $variation->product->name }} - {{ $variation->name }}" class="variation-product-image" style="width: 100%; max-width: 200px; height: auto; object-fit: contain; filter: drop-shadow(0 8px 20px rgba(0,0,0,0.15)); transition: transform 0.3s ease;" width="200" height="200" loading="lazy" />
									@endif
								</div>
								<!-- Product Details -->
								<div style="padding: 25px 20px 30px; flex-grow: 1; display: flex; flex-direction: column;">
									<h3 class="variation-name" style="font-size: 22px; margin-bottom: 8px; color: #333; margin-top: 0; font-weight: 600; min-height: 54px; display: flex; align-items: center; justify-content: center;">
										<a href="{{ route('product.show', $variation->slug) }}" style="color: #333; text-decoration: none; transition: color 0.3s ease;">{{ $variation->product->name }}</a>
									</h3>
									@if($variation->size)
									<p class="variation-size" style="font-size: 16px; color: #666; margin-bottom: 15px; font-weight: 500; min-height: 24px;">
										<strong>{{ $variation->size }}</strong>
									</p>
									@else
									<div style="min-height: 24px; margin-bottom: 15px;"></div>
									@endif
									@if($variation->price)
									<p class="variation-price" style="font-size: 32px; color: #2ecc71; font-weight: bold; margin-bottom: 20px; line-height: 1; min-height: 38px;">
										£{{ number_format($variation->price, 2) }}
									</p>
									@else
									<div style="min-height: 38px; margin-bottom: 20px;"></div>
									@endif
									<div class="variation-buttons" style="margin-top: auto; display: flex; gap: 10px; justify-content: center; flex-wrap: wrap;">
										<!-- YouGarden Button -->
										@if($variation->yougarden_url)
										<a href="{{ $variation->yougarden_url }}" target="_blank" rel="noopener noreferrer" class="button" style="display: inline-flex; align-items: center; justify-content: center; margin: 5px; padding: 10px 20px; background: #2ecc71; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px; transition: all 0.3s ease; flex: 1; min-width: 120px;">
											<img src="{{ asset('images/yglogosmall.png') }}" alt="Buy on YouGarden" style="height: 20px; vertical-align: middle;" />
										</a>
										@else
										<a href="https://www.yougarden.com/item-p-100062/blooming-fast-superior-soluble-fertiliser" target="_blank" rel="noopener noreferrer" class="button" style="display: inline-flex; align-items: center; justify-content: center; margin: 5px; padding: 10px 20px; background: #2ecc71; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px; transition: all 0.3s ease; flex: 1; min-width: 120px;">
											<img src="{{ asset('images/yglogosmall.png') }}" alt="Buy on YouGarden" style="height: 20px; vertical-align: middle;" />
										</a>
										@endif
										<!-- Amazon Button -->
										@if($variation->amazon_url)
										<a href="{{ $variation->amazon_url }}" target="_blank" rel="noopener noreferrer" class="button" style="display: inline-flex; align-items: center; justify-content: center; margin: 5px; padding: 10px 20px; background: #ff9900; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px; transition: all 0.3s ease; flex: 1; min-width: 120px;">
											<img src="{{ asset('images/amazoncolour.png') }}" alt="Buy on Amazon" style="height: 20px; vertical-align: middle;" />
										</a>
										@else
										<a href="https://www.amazon.co.uk/s?k={{ urlencode($variation->product->name . ' ' . $variation->name) }}" target="_blank" rel="noopener noreferrer" class="button" style="display: inline-flex; align-items: center; justify-content: center; margin: 5px; padding: 10px 20px; background: #ff9900; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px; transition: all 0.3s ease; flex: 1; min-width: 120px;">
											<img src="{{ asset('images/amazoncolour.png') }}" alt="Buy on Amazon" style="height: 20px; vertical-align: middle;" />
										</a>
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div><!-- .row -->
			</div><!-- .variations-content -->
			
			<!-- Quick View Modal -->
			<div id="quickViewModal" class="quick-view-modal" style="display: none; position: fixed; z-index: 10000; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.7);">
				<div class="quick-view-modal-content" style="background-color: #fefefe; margin: 5% auto; padding: 0; border: none; border-radius: 12px; width: 90%; max-width: 900px; box-shadow: 0 10px 40px rgba(0,0,0,0.3); position: relative; animation: modalFadeIn 0.3s ease;">
					<span class="quick-view-close" style="position: absolute; right: 20px; top: 20px; color: #aaa; font-size: 35px; font-weight: bold; cursor: pointer; z-index: 10001; background: rgba(255,255,255,0.9); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">&times;</span>
					<div id="quickViewContent" style="padding: 40px;">
						<!-- Content will be loaded here via AJAX -->
						<div style="text-align: center; padding: 40px;">
							<div class="spinner" style="border: 4px solid #f3f3f3; border-top: 4px solid #2ecc71; border-radius: 50%; width: 50px; height: 50px; animation: spin 1s linear infinite; margin: 0 auto;"></div>
							<p style="margin-top: 20px; color: #666;">Loading...</p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- .variations-section  -->
	
	
	<!-- Start .about-section  -->
	<div id="about" class="about-section section pb-50 white-bg half-header-about">
		<div class="container tab-fix">
			<div class="section-head text-center">
				<div class="row">
					<div class="col-md-9 col-md-offset-1">
						<h2 class="heading">About <span>Superior Plant Food PLUS</span></h2>
						<p>For stunning displays of first-class flowers and vegetables, this superior plant food is a high potency, professional grade fertiliser for use all year round in your garden, simply mix with water for incredible results.</p>
						<ul style="text-align: left; padding-left: 0; list-style: none;">
							<li class="one" style="text-align: left; margin-bottom: 12px;"> <span>PACKED</span> with Potash for flowers, fruits and veg</li>
							<li class="one" style="text-align: left; margin-bottom: 12px;"> <span>JAMMED</span> with nitrogen and phosphorous for healthy leaves, shoots and roots</li>
							<li class="one" style="text-align: left; margin-bottom: 12px;"> <span>BRIMMING</span> with 7 vital trace elements for maximum health</li>
							<li class="one" style="text-align: left; margin-bottom: 12px;"> Plus we've added the magic ingredient – Humic Acid – to BOOST your plants</li>
							<li class="one" style="text-align: left; margin-bottom: 12px;"> Fast acting and long lasting – the best results for your money, makes approx 500 litres from a 500g bag</li>
						</ul>
					</div>
				</div>
			</div><!-- .section-head -->
			<div class="row tab-center mobile-center">
				<div class="col-md-6">
					<div class="video">
						<img src="{{ asset('images/video.png') }}" alt="Superior Plant Food Video - How to Use Professional Grade Fertilizer" width="600" height="400" loading="lazy" />
						<div class="video-overlay gradiant-background"></div>
						<a href="https://vimeo.com/170471588" class="video-play" data-effect="mfp-3d-unfold"><i class="fa fa-play"></i></a>
					</div>
				</div><!-- .col -->
				<div class="col-md-6">
					<div class="txt-entry">
						<p>Supplied in a resealable pouch,  Superior Plant Food Plus is easy to dissolve in water, giving fast-acting results as it is delivered straight to the plant's roots and leaves.</p>
<p>Superior by name and Superior by nature, the only fertiliser you need for your garden for more flowers and more fruit, as well as better roots and shoots too. You can transform the performance of your plants with regular feeding throughout the main growing season. </p>
<p>Simple to use, just add one 5g scoop, included in the pack, to a gallon of water (4.5 litres) or a standard watering can full, and simply water on weekly during the growing season.</p>
						
					</div>
				</div><!-- .col -->
			</div><!-- .row -->
			
		</div><!-- .container -->
	</div><!-- .about-section  -->
	

	<!-- Start .features-section  -->
	<div id="features" class="features-section section gradiant-background">
		<div class="container tab-fix">
			<div class="section-head heading-light text-center wow fadeInUp" data-wow-duration="0.8s">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading heading-light">What's in our Superior Plant Food</h2>
						<p>We've formulated this superior feed to give you the best results for the least effort.</p><p>
By balancing the key ingredients of nitrogen, phosphorous, potassium and magnesium and combining them with essential trace elements, we've created the ideal formulation to promote superior plant growth.</p>
					</div>
				</div>
			</div><!-- .section-head -->
			<div class="features-content pt-10">
				<div class="row">
					<div class="col-md-3">
						<div class="features-list text-right tab-left mobile-left">
							<div class="single-features icon-right wow fadeInRight" data-wow-duration="0.6s" data-wow-delay="0.1s">
								<em class="ti ti-check"></em>
								<h4>Nitrogen</h4>
								<p>(the N in NPK), essential for making proteins and therefore cell growth </p>
							</div>
							<div class="single-features icon-right wow fadeInRight" data-wow-duration="0.6s" data-wow-delay="0.2s">
								<em class="ti ti-check"></em>
								<h4>Potassium oxide </h4>
								<p>(the K in NPK) for respiration and photosynthesis</p>
							</div>
							<div class="single-features icon-right wow fadeInRight" data-wow-duration="0.6s" data-wow-delay="0.3s">
								<em class="ti ti-check"></em>
								<h4>Boron</h4>
								<p>for healthy cell growth</p>
							</div>
							<div class="single-features icon-right wow fadeInRight" data-wow-duration="0.6s" data-wow-delay="0.4s">
								<em class="ti ti-check"></em>
								<h4>Iron</h4>
								<p>for chlorophyll production</p>
							</div>
						</div>
					</div><!-- .col -->
					<div class="col-md-3 pull-right">
						<div class="features-list">
							<div class="single-features wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay="0.1s">
								<em class="ti ti-check"></em>
								<h4>Phosphorous pentoxide</h4>
								<p>(the P in NPK) for respiration and growth</p>
							</div>
							<div class="single-features wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay="0.2s">
								<em class="ti ti-check"></em>
								<h4>Magnesium oxide </h4>
								<p>for photosynthesis (how plants get their energy)</p>
							</div>
							<div class="single-features wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay="0.3s">
								<em class="ti ti-check"></em>
								<h4>Copper</h4>
								<p>for metabolic and respiratory processes </p>
							</div>
							<div class="single-features wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay="0.4s">
								<em class="ti ti-check"></em>
								<h4>Manganese</h4>
								<p>for photosynthesis</p>
							</div>
						</div>
					</div><!-- .col -->
					<div class="col-md-6 text-center push-left">
						<div class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
							<img src="{{ asset('images/superiorback.png') }}" alt="Superior Plant Food Ingredients - NPK 18:18:24 with Trace Elements" width="500" height="500" loading="lazy" />
						</div>
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- .features-content -->
		</div><!-- .container -->
	</div><!-- .features-section  -->
	
	
	<!-- Start .faq-section  -->
	<div id="faq" class="faq-section section white-bg pt-120 pb-100">
		<div class="container">
			<div class="faq-alt">
				<div class="row tab-fix">
					<div class="col-md-4 tab-center mobile-center col-md-offset-1">
						<div class="side-heading">
							<h2 class="heading">Blooming Fast Superior Plant Feed <span>FAQ's</span></h2>
							
						</div>
					</div><!-- .col  -->
					<div class="col-md-6">
						<!-- Accordion -->
						<div class="panel-group accordion" id="another" role="tablist" aria-multiselectable="true">
							<!-- each panel for accordion -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="accordion-i1">
									<h6 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i1" aria-expanded="false">
											How often should I use it?
											<span class="plus-minus"><span></span></span>
										</a>
									</h6>
								</div>
								<div id="accordion-pane-i1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion-i1">
									<div class="panel-body">
										  <p>From March to April feed your plants once a week while watering.
From May to September feed your plants twice a week while watering.</p>
									</div>
								</div>
							</div> 
							<!-- each panel for accordion -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="accordion-i2">
									<h6 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i2" aria-expanded="false">
											What is the NPK ratio?
											<span class="plus-minus"><span></span></span>
										</a>
									</h6>
								</div>
								<div id="accordion-pane-i2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i2">
									<div class="panel-body">
										  <p>Superior plant food has a ratio of 18:18:24 NPK with trace elements</p>
									</div>
								</div>
							</div>
							<!-- each panel for accordion -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="accordion-i3">
									<h6 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i3" aria-expanded="false">
											How do I store it?
											<span class="plus-minus"><span></span></span>
										</a>
									</h6>
								</div>
								<div id="accordion-pane-i3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i3">
									<div class="panel-body">
										  <p>Store Superior Plant Food in a cool, dry place with the pack closed.</p>
									</div>
								</div>
							</div>
							<!-- each panel for accordion -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="accordion-i3">
									<h6 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i4" aria-expanded="false">
											What kinds of watering devices can I use?
											<span class="plus-minus"><span></span></span>
										</a>
									</h6>
								</div>
								<div id="accordion-pane-i4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i3">
									<div class="panel-body">
										  <p>The soluble powder needs to be dissolved and diluted into water at the correct rate as per the instructions, once it is dissolved / diluted it can be applied to the plants via a watering can or a jug.</p>
									</div>
								</div>
							</div>
							<!-- each panel for accordion -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="accordion-i3">
									<h6 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i5" aria-expanded="false">
											Is it safe for pets and children?
											<span class="plus-minus"><span></span></span>
										</a>
									</h6>
								</div>
								<div id="accordion-pane-i5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i3">
									<div class="panel-body">
										  <p>Best practice is to keep the powder in its original labeled container out of reach of children & pets</p>
									</div>
								</div>
							</div>
							<!-- each panel for accordion -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="accordion-i3">
									<h6 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i6" aria-expanded="false">
											Can I use it in containers?
											<span class="plus-minus"><span></span></span>
										</a>
									</h6>
								</div>
								<div id="accordion-pane-i6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i3">
									<div class="panel-body">
										  <p>Yes apply in its diluted format at least once a week as part of your normal watering.</p>
									</div>
								</div>
							</div>
							<!-- each panel for accordion -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="accordion-i3">
									<h6 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i7" aria-expanded="false">
											Is it suitable for mixing with other products?
											<span class="plus-minus"><span></span></span>
										</a>
									</h6>
								</div>
								<div id="accordion-pane-i7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i3">
									<div class="panel-body">
										  <p>Best to use it on its own and don't mix with other products … except water!</p>
									</div>
								</div>
							</div>
							<!-- each panel for accordion -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="accordion-i3">
									<h6 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i8" aria-expanded="false">
											Can I overdose my plants?
											<span class="plus-minus"><span></span></span>
										</a>
									</h6>
								</div>
								<div id="accordion-pane-i8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i3">
									<div class="panel-body">
										  <p>Yes – please follow the instructions as per the packaging</p>
									</div>
								</div>
							</div>
							<!-- each panel for accordion -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="accordion-i3">
									<h6 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i9" aria-expanded="false">
											Can I water directly onto the plants?
											<span class="plus-minus"><span></span></span>
										</a>
									</h6>
								</div>
								<div id="accordion-pane-i9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i3">
									<div class="panel-body">
										  <p>Yes you can but best practice is to wash plants with fresh water to dilute and remove any fertiliser residues.</p>
									</div>
								</div>
							</div>
							
						</div><!-- Accordion #end -->
					</div><!-- .col  -->
				</div><!-- .row  -->
			</div><!-- .faq  -->
		</div><!-- .container  -->
	</div><!-- .faq-section  -->
	
	<!-- Start .footer-section  -->
	<div class="footer-section gradiant-background section">
		<div class="container">
			<div class="row">
				<!-- Logo and Description -->
				<div class="col-md-4 col-sm-6 mb-40 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.1s">
					<div class="footer-logo">
						<img src="{{ asset('images/logo.png') }}" alt="Blooming Fast - Superior Plant Food Logo" width="200" height="80" class="footer-logo-img" loading="lazy" />
					</div>
					<p style="color: rgba(255,255,255,0.9); line-height: 1.8; margin-bottom: 25px;">
						Superior plant food for bigger, better flowers and vegetables. Trusted by gardeners nationwide for over 10 years.
					</p>
					<div class="social-links" style="display: flex; gap: 15px;">
						<a href="#" style="width: 40px; height: 40px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; text-decoration: none;">
							<i class="fa fa-facebook"></i>
						</a>
						<a href="#" style="width: 40px; height: 40px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; text-decoration: none;">
							<i class="fa fa-twitter"></i>
						</a>
						<a href="#" style="width: 40px; height: 40px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; text-decoration: none;">
							<i class="fa fa-instagram"></i>
						</a>
						<a href="#" style="width: 40px; height: 40px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; text-decoration: none;">
							<i class="fa fa-youtube"></i>
						</a>
					</div>
				</div>
				
				<!-- Quick Links -->
				<div class="col-md-2 col-sm-6 mb-40 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">
					<h4 class="footer-heading" style="color: #fff; font-size: 20px; font-weight: 600; margin-bottom: 25px;">Quick Links</h4>
					<ul class="footer-links-list" style="list-style: none; padding: 0;">
						<li style="margin-bottom: 12px;"><a href="#home" class="smooth-scroll footer-link" style="color: rgba(255,255,255,0.8); text-decoration: none;">Home</a></li>
						<li style="margin-bottom: 12px;"><a href="#about" class="smooth-scroll footer-link" style="color: rgba(255,255,255,0.8); text-decoration: none;">About</a></li>
						<li style="margin-bottom: 12px;"><a href="#variations" class="smooth-scroll footer-link" style="color: rgba(255,255,255,0.8); text-decoration: none;">Products</a></li>
						<li style="margin-bottom: 12px;"><a href="#features" class="smooth-scroll footer-link" style="color: rgba(255,255,255,0.8); text-decoration: none;">Features</a></li>
						<li style="margin-bottom: 12px;"><a href="#faq" class="smooth-scroll footer-link" style="color: rgba(255,255,255,0.8); text-decoration: none;">FAQ</a></li>
						<li style="margin-bottom: 12px;"><a href="{{ route('products.index') }}" class="footer-link" style="color: rgba(255,255,255,0.8); text-decoration: none;">All Products</a></li>
					</ul>
				</div>
				
				<!-- Shop -->
				<div class="col-md-3 col-sm-6 mb-40 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.3s">
					<h4 class="footer-heading" style="color: #fff; font-size: 20px; font-weight: 600; margin-bottom: 25px;">Shop</h4>
					<ul class="footer-links-list" style="list-style: none; padding: 0;">
						<li style="margin-bottom: 12px;"><a href="https://www.yougarden.com/item-p-100062/blooming-fast-superior-soluble-fertiliser" target="_blank" class="footer-link" style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s;">
							<i class="fa fa-shopping-cart" style="margin-right: 8px;"></i> Buy on YouGarden
						</a></li>
						<li style="margin-bottom: 12px;"><a href="https://www.amazon.co.uk/Bloomiing-Soluble-Planter-Fertilsier-litres/dp/B079HYNNN4" target="_blank" class="footer-link" style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s;">
							<i class="fa fa-shopping-cart" style="margin-right: 8px;"></i> Buy on Amazon
						</a></li>
						<li style="margin-bottom: 12px;"><a href="#variations" class="smooth-scroll footer-link" style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s;">
							<i class="fa fa-tag" style="margin-right: 8px;"></i> Best Sellers
						</a></li>
						<li style="margin-bottom: 12px;"><a href="{{ route('products.index') }}" class="footer-link" style="color: rgba(255,255,255,0.8); text-decoration: none; transition: all 0.3s;">
							<i class="fa fa-list" style="margin-right: 8px;"></i> All Variations
						</a></li>
					</ul>
				</div>
				
				<!-- Contact & Support -->
				<div class="col-md-3 col-sm-6 mb-40 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.4s">
					<h4 class="footer-heading" style="color: #fff; font-size: 20px; font-weight: 600; margin-bottom: 25px;">Contact & Support</h4>
					<ul class="footer-contact-list" style="list-style: none; padding: 0;">
						<li style="margin-bottom: 15px; display: flex; align-items: flex-start;">
							<i class="fa fa-envelope" style="color: #2ecc71; margin-right: 12px; margin-top: 5px; font-size: 18px;"></i>
							<span style="color: rgba(255,255,255,0.9);">info@bloomingfast.com</span>
						</li>
						<li style="margin-bottom: 15px; display: flex; align-items: flex-start;">
							<i class="fa fa-phone" style="color: #2ecc71; margin-right: 12px; margin-top: 5px; font-size: 18px;"></i>
							<span style="color: rgba(255,255,255,0.9);">0800 123 4567</span>
						</li>
						<li style="margin-bottom: 15px; display: flex; align-items: flex-start;">
							<i class="fa fa-clock-o" style="color: #2ecc71; margin-right: 12px; margin-top: 5px; font-size: 18px;"></i>
							<span style="color: rgba(255,255,255,0.9);">Mon-Fri: 9am-5pm</span>
						</li>
					</ul>
					<div class="footer-badges" style="margin-top: 25px;">
						<div style="display: flex; flex-wrap: wrap; gap: 10px;">
							<span style="background: rgba(255,255,255,0.2); padding: 8px 15px; border-radius: 20px; font-size: 12px; color: #fff;">
								<i class="fa fa-shield" style="margin-right: 5px;"></i> Money Back Guarantee
							</span>
							<span style="background: rgba(255,255,255,0.2); padding: 8px 15px; border-radius: 20px; font-size: 12px; color: #fff;">
								<i class="fa fa-truck" style="margin-right: 5px;"></i> Free Delivery
							</span>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Footer Bottom -->
			<div class="footer-bottom wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.5s" style="border-top: 1px solid rgba(255,255,255,0.2); margin-top: 50px; padding-top: 30px;">
				<div class="row">
					<div class="col-md-6">
						<p style="color: rgba(255,255,255,0.8); margin: 0; font-size: 14px;">
							Copyright © {{ date('Y') }} Blooming Fast. All rights reserved.
						</p>
					</div>
					<div class="col-md-6 text-right">
						<ul class="footer-legal" style="list-style: none; padding: 0; margin: 0; display: flex; justify-content: flex-end; gap: 20px; flex-wrap: wrap;">
							<li><a href="#" style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 14px; transition: all 0.3s;">Privacy Policy</a></li>
							<li><a href="#" style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 14px; transition: all 0.3s;">Terms & Conditions</a></li>
							<li><a href="#" style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 14px; transition: all 0.3s;">Cookie Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- .container  -->
	</div><!-- .footer-section  -->
@endsection

