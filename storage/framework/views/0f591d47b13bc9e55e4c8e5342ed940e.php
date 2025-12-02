<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
	<meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Blooming Fast Superior Plant Food - Professional grade NPK 18:18:24 fertilizer. Available in 7 sizes. Trusted by 50,000+ gardeners. Fast-acting results in 7-14 days. Buy on YouGarden and Amazon.'); ?>">
	<meta name="keywords" content="plant food, fertilizer, garden fertilizer, NPK fertilizer, plant nutrients, garden supplements, blooming fast, superior plant food">
	<meta name="author" content="Blooming Fast">
	<meta name="robots" content="index, follow">
	<meta property="og:title" content="<?php echo $__env->yieldContent('title', 'Blooming Fast Superior Plant Food - Professional Grade Fertilizer'); ?>">
	<meta property="og:description" content="<?php echo $__env->yieldContent('meta_description', 'Trusted by 50,000+ gardeners. Available in 7 sizes. Fast-acting results in 7-14 days.'); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo e(url()->current()); ?>">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo $__env->yieldContent('title', 'Blooming Fast Superior Plant Food'); ?>">
	<meta name="twitter:description" content="<?php echo $__env->yieldContent('meta_description', 'Professional grade NPK 18:18:24 fertilizer. Available in 7 sizes.'); ?>">
	<!-- Fav Icon  -->
	<link rel="shortcut icon" href="<?php echo e(asset('images/favicon.png')); ?>">
	<!-- Site Title  -->
	<title><?php echo $__env->yieldContent('title', 'Blooming Fast Superior Plant Food - Professional Grade Fertilizer | Available in 7 Sizes'); ?></title>
	<!-- Vite CSS - All CSS is now bundled through Vite -->
	<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>
	<!-- Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- Google Fonts for Badges -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
	<style>
		/* Fix scroll issue - CRITICAL FIXES */
		* {
			-webkit-overflow-scrolling: touch;
		}
		/* CRITICAL: Fix scroll issue - ensure page can scroll */
		html {
			overflow-x: hidden !important;
			overflow-y: scroll !important;
			height: 100% !important;
		}
		body {
			overflow-x: hidden !important;
			overflow-y: auto !important;
			height: auto !important;
			min-height: 100vh !important;
			position: relative !important;
		}
		/* Ensure preloader doesn't block scrolling */
		#preloader {
			display: none !important;
			visibility: hidden !important;
			opacity: 0 !important;
			pointer-events: none !important;
			z-index: -1 !important;
		}
		/* Enable WOW.js scroll animations for sections (not hero) */
		.wow {
			visibility: hidden;
		}
		.wow.animated {
			visibility: visible !important;
		}
		/* Disable animations for hero section */
		.header-section .wow,
		.header-section * .wow {
			visibility: visible !important;
			animation: none !important;
		}
		/* Ensure hero buttons are clickable and hover effects work */
		.hero-btn {
			position: relative !important;
			z-index: 9999 !important;
			pointer-events: auto !important;
			cursor: pointer !important;
		}
		.hero-btn::before,
		.hero-btn::after {
			pointer-events: none !important;
			z-index: 1 !important;
		}
		.hero-btn img {
			pointer-events: none !important;
			position: relative;
			z-index: 2;
		}
		.buttons li {
			position: relative;
			z-index: 9999 !important;
		}
		.buttons li a {
			position: relative;
			z-index: 9999 !important;
		}
		/* Ensure hover effects work with proper specificity */
		.buttons li a.hero-btn {
			pointer-events: auto !important;
			cursor: pointer !important;
			z-index: 9999 !important;
		}
		.buttons li a.hero-btn:hover {
			box-shadow: 0 8px 25px rgba(0,0,0,0.2) !important;
			background: #fff !important;
			transform: translateY(-3px) !important;
			opacity: 1 !important;
		}
		.buttons li a.hero-btn:hover img {
			transform: scale(1.05) !important;
		}
		.buttons li a.hero-btn:active {
			transform: translateY(-1px) !important;
		}
		
		/* Leaf trail cursor follower effect - Slow and dragged out */
		.leaf-trail {
			position: fixed;
			width: 24px;
			height: 24px;
			pointer-events: none;
			z-index: 9999;
			opacity: 0;
			transition: opacity 0.8s ease, transform 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
		}
		.leaf-trail.active {
			opacity: 0.8;
		}
		.leaf-trail svg {
			width: 100%;
			height: 100%;
			filter: drop-shadow(0 2px 4px rgba(0,0,0,0.15));
		}
		@keyframes leafFloat {
			0% {
				transform: translate(0, 0) rotate(0deg);
				opacity: 0.8;
			}
			100% {
				transform: translate(var(--tx), var(--ty)) rotate(360deg);
				opacity: 0;
			}
		}
		.leaf-trail.animate {
			animation: leafFloat 4s ease-out forwards;
		}
		
		/* Petals blowing across white background sections */
		.white-bg {
			position: relative;
			overflow: hidden;
		}
		.petal-bg {
			position: absolute;
			width: 50px;
			height: 50px;
			pointer-events: none;
			z-index: 1;
			opacity: 0.6;
		}
		.petal-bg svg {
			width: 100%;
			height: 100%;
		}
		@keyframes petalBlow {
			0% {
				left: -60px;
				top: var(--start-top);
				transform: translateY(0) rotate(0deg);
				opacity: 0;
			}
			5% {
				opacity: 0.6;
			}
			95% {
				opacity: 0.6;
			}
			100% {
				left: calc(100% + 60px);
				top: calc(var(--start-top) + var(--drift));
				transform: rotate(360deg);
				opacity: 0;
			}
		}
		.petal-bg.animate {
			animation: petalBlow var(--duration) linear infinite;
			will-change: left, top, transform, opacity;
		}
		/* Ensure content is above petals */
		.white-bg > .container,
		.white-bg > * {
			position: relative;
			z-index: 2;
		}
		
		/* Keyframe Animations - Entrance and Hover Effects Only */
		@keyframes fadeIn {
			from { opacity: 0; }
			to { opacity: 1; }
		}
		@keyframes slideInUp {
			from {
				opacity: 0;
				transform: translateY(30px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}
		@keyframes slideInLeft {
			from {
				opacity: 0;
				transform: translateX(-30px);
			}
			to {
				opacity: 1;
				transform: translateX(0);
			}
		}
		@keyframes slideInRight {
			from {
				opacity: 0;
				transform: translateX(30px);
			}
			to {
				opacity: 1;
				transform: translateX(0);
			}
		}
		@keyframes scaleIn {
			from {
				opacity: 0;
				transform: scale(0.9);
			}
			to {
				opacity: 1;
				transform: scale(1);
			}
		}
		@keyframes bounce {
			0%, 100% { transform: translateY(0); }
			50% { transform: translateY(-10px); }
		}
		@keyframes pulse {
			0%, 100% { transform: scale(1); }
			50% { transform: scale(1.05); }
		}
		@keyframes shake {
			0%, 100% { transform: translateX(0); }
			25% { transform: translateX(-5px); }
			75% { transform: translateX(5px); }
		}
		@keyframes rotate {
			from { transform: rotate(0deg); }
			to { transform: rotate(360deg); }
		}
		@keyframes glow {
			0%, 100% { box-shadow: 0 0 5px rgba(46, 204, 113, 0.5); }
			50% { box-shadow: 0 0 20px rgba(46, 204, 113, 0.8); }
		}
		@keyframes shimmer {
			0% { background-position: -1000px 0; }
			100% { background-position: 1000px 0; }
		}
		@keyframes buttonShine {
			0% { left: -100%; }
			50% { left: 100%; }
			100% { left: 100%; }
		}
		
		/* Entrance Animations - Apply on page load */
		.header-texts h1 {
			animation: slideInUp 0.8s ease-out;
		}
		.header-texts .lead {
			animation: slideInUp 0.8s ease-out 0.2s both;
		}
		.benefits-list {
			animation: fadeIn 1s ease-out 0.4s both;
		}
		.benefit-item:nth-child(1) {
			animation: slideInLeft 0.6s ease-out 0.5s both;
		}
		.benefit-item:nth-child(2) {
			animation: slideInLeft 0.6s ease-out 0.6s both;
		}
		.benefit-item:nth-child(3) {
			animation: slideInLeft 0.6s ease-out 0.7s both;
		}
		.hero-btn:nth-child(1) {
			animation: slideInLeft 0.6s ease-out 0.8s both;
		}
		.hero-btn:nth-child(2) {
			animation: slideInRight 0.6s ease-out 0.9s both;
		}
		.hero-product-image {
			animation: scaleIn 1s ease-out 0.3s both;
		}
		.floating-badge {
			animation: bounce 2s ease-in-out infinite 1s;
		}
		.trust-badge {
			animation: fadeIn 0.8s ease-out 0.2s both;
		}
		.variation-box:nth-child(1) {
			animation: slideInUp 0.6s ease-out 0.1s both;
		}
		.variation-box:nth-child(2) {
			animation: slideInUp 0.6s ease-out 0.2s both;
		}
		.variation-box:nth-child(3) {
			animation: slideInUp 0.6s ease-out 0.3s both;
		}
		.testimonial-card:nth-child(1) {
			animation: slideInLeft 0.6s ease-out 0.1s both;
		}
		.testimonial-card:nth-child(2) {
			animation: slideInUp 0.6s ease-out 0.2s both;
		}
		.testimonial-card:nth-child(3) {
			animation: slideInRight 0.6s ease-out 0.3s both;
		}
		.section-head {
			animation: fadeIn 0.8s ease-out;
		}
		.single-features {
			animation: fadeIn 0.6s ease-out both;
		}
		.single-features:nth-child(1) { animation-delay: 0.1s; }
		.single-features:nth-child(2) { animation-delay: 0.2s; }
		.single-features:nth-child(3) { animation-delay: 0.3s; }
		.single-features:nth-child(4) { animation-delay: 0.4s; }
		/* Override header-section height that might be preventing scroll */
		.header-section {
			height: auto !important;
			min-height: 100vh !important;
			max-height: none !important;
			position: relative !important;
		}
		.header-section.half-header {
			height: auto !important;
			min-height: 100vh !important;
			max-height: none !important;
			position: relative !important;
		}
		.header-section.half-header.header-curbed {
			height: auto !important;
			min-height: 100vh !important;
			max-height: none !important;
			position: relative !important;
			overflow: visible !important;
			padding: 20px 0 120px !important;
			z-index: 2 !important;
		}
		/* Ensure curved bottom shows - match original exactly */
		.header-curbed::after {
			display: block !important;
			content: '' !important;
			height: 100% !important;
			width: 100% !important;
			background: url(<?php echo e(asset('images/carb.png')); ?>) bottom no-repeat !important;
			background-size: contain !important;
			position: absolute !important;
			bottom: 0 !important;
			left: 0 !important;
			right: 0 !important;
			z-index: 1 !important;
		}
		/* Fix for refresh/scroll issue - ensure proper stacking */
		.header-content {
			position: relative !important;
			z-index: 1 !important;
		}
		/* Hero background - match original exactly */
		.header-section.gradiant-background {
			position: relative;
			overflow: hidden;
		}
		.header-section.gradiant-background .header-content {
			position: relative;
			z-index: 2;
		}
		/* Remove any custom background animations/overlays */
		.header-section.gradiant-background::before,
		.header-section.gradiant-background::after {
			display: none !important;
		}
		/* Original gradiant-overlay styling from style.css */
		.gradiant-overlay {
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			opacity: 0.45;
			pointer-events: none !important;
			z-index: 1 !important;
		}
		.header-section .gradiant-overlay {
			opacity: 0.65;
		}
		/* Ensure left column is interactive */
		.header-content .row,
		.header-content .row *,
		.header-content .col-md-7,
		.header-content .col-md-7 *,
		.header-texts,
		.header-texts * {
			position: relative;
			z-index: 10 !important;
			pointer-events: auto !important;
		}
		/* Override any pointer-events: none on parent elements */
		.header-section.gradiant-background .header-content .row,
		.header-section.gradiant-background .header-content .col-md-7 {
			pointer-events: auto !important;
		}
		/* Ensure buttons container is above everything */
		.cta-section,
		.buttons,
		.buttons li,
		.buttons li a {
			position: relative !important;
			z-index: 9999 !important;
			pointer-events: auto !important;
		}
		/* Ensure text is selectable in hero section */
		.header-section,
		.header-section *,
		.header-content,
		.header-content *,
		.header-texts,
		.header-texts * {
			user-select: text !important;
			-webkit-user-select: text !important;
			-moz-user-select: text !important;
			-ms-user-select: text !important;
		}
		/* Ensure buttons are interactive */
		.header-section .buttons,
		.header-section .buttons li,
		.header-section .buttons li a,
		.header-section .hero-btn,
		.header-section .button {
			pointer-events: auto !important;
			user-select: none !important;
			z-index: 9999 !important;
			position: relative !important;
		}
		.header-section .buttons li a.hero-btn {
			z-index: 9999 !important;
			pointer-events: auto !important;
			cursor: pointer !important;
		}
		/* Ensure all interactive elements in left column work */
		.header-texts a,
		.header-texts button,
		.header-texts .button,
		.header-texts .hero-btn,
		.header-texts .trust-badge,
		.header-texts .benefit-item {
			pointer-events: auto !important;
			cursor: pointer !important;
			position: relative;
			z-index: 15 !important;
		}
		.header-section.gradiant-background .navigation {
			position: fixed;
			z-index: 999998; /* Below logo */
		}
		.navigation {
			z-index: 999998; /* Below logo */
		}
		/* Ensure page scrolls properly */
		html {
			scroll-behavior: smooth;
		}
		/* Fix for refresh/scroll - ensure proper spacing */
		.header-content.pt-90 {
			padding-top: 120px !important;
		}
		@media (max-width: 768px) {
			.header-content.pt-90 {
				padding-top: 100px !important;
			}
		}
		/* Ensure wrapper/main containers don't block scroll */
		.wrapper, .main, #wrapper, #main {
			overflow: visible !important;
			height: auto !important;
		}
		
		/* Enhanced Product Variation Cards with Animations */
		.variation-box .variation-inner {
			position: relative;
			transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
			overflow: hidden;
		}
		/* Product Image Styling - Enhanced */
		.variation-image-wrapper {
			position: relative;
			overflow: hidden;
			background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
			border-radius: 12px 12px 0 0;
		}
		.variation-product-image {
			transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
			display: block;
			margin: 0 auto;
		}
		.variation-box .variation-inner:hover .variation-product-image {
			transform: scale(1.15) translateY(-8px);
			filter: drop-shadow(0 15px 35px rgba(0,0,0,0.3));
		}
		/* Image wrapper hover effect */
		.variation-box .variation-inner:hover .variation-image-wrapper {
			background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
		}
		@media (max-width: 768px) {
			.variation-product-image {
				max-width: 150px !important;
			}
			.variation-image-wrapper {
				padding: 20px 15px 15px !important;
			}
		}
		.variation-box .variation-inner::before {
			content: '';
			position: absolute;
			top: -50%;
			left: -50%;
			width: 200%;
			height: 200%;
			background: radial-gradient(circle, rgba(46, 204, 113, 0.15) 0%, transparent 70%);
			opacity: 0;
			transition: opacity 0.4s ease;
			z-index: 1;
		}
		.variation-box .variation-inner::after {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
			transition: left 0.6s ease;
			z-index: 2;
		}
		.variation-box .variation-inner:hover::before {
			opacity: 1;
		}
		.variation-box .variation-inner:hover::after {
			left: 100%;
		}
		.variation-box .variation-inner:hover {
			border-color: #2ecc71 !important;
			box-shadow: 0 15px 40px rgba(46, 204, 113, 0.35);
			transform: translateY(-10px) scale(1.02);
			animation: glow 2s ease-in-out infinite;
		}
		/* Variation name hover effect */
		.variation-name a:hover {
			color: #2ecc71 !important;
		}
		/* Variation Buttons - No shine effects */
		.variation-buttons a,
		.variation-buttons button {
			transition: all 0.3s ease;
			position: relative;
		}
		.variation-buttons a::before,
		.variation-buttons a::after,
		.variation-buttons button::before,
		.variation-buttons button::after {
			display: none !important;
		}
		.variation-buttons a:hover,
		.variation-buttons button:hover {
			opacity: 0.9;
			transform: scale(1.05);
			box-shadow: 0 4px 12px rgba(46, 204, 113, 0.3);
		}
		
		/* Quick View Modal Styles */
		@keyframes modalFadeIn {
			from {
				opacity: 0;
				transform: scale(0.9);
			}
			to {
				opacity: 1;
				transform: scale(1);
			}
		}
		@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
		}
		.quick-view-modal {
			animation: fadeIn 0.3s ease;
		}
		.quick-view-modal-content {
			max-height: 90vh;
			overflow-y: auto;
		}
		.quick-view-close:hover {
			background: rgba(255,255,255,1) !important;
			color: #333 !important;
		}
		
		/* Equal height cards */
		.variations-content .row {
			display: flex;
			flex-wrap: wrap;
		}
		.variations-content .col-md-4,
		.variations-content .col-sm-6 {
			display: flex;
		}
		.variation-box {
			width: 100%;
			display: flex;
		}
		.variation-inner {
			width: 100%;
		}
		@media (max-width: 768px) {
			.variation-box {
				margin-bottom: 30px;
			}
		}
		
		/* Enhanced FAQ Section Styling */
		.faq-section {
			background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);
		}
		.faq-section .side-heading h2 {
			font-size: 36px;
			line-height: 1.3;
			margin-bottom: 20px;
		}
		.faq-section .side-heading h2 span {
			color: #2ecc71;
			display: block;
			margin-top: 5px;
		}
		.faq-section .panel-group {
			margin-bottom: 0;
		}
		.faq-section .panel {
			border: none;
			border-radius: 8px;
			margin-bottom: 15px;
			box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
			background: #ffffff;
			overflow: hidden;
		}
		.faq-section .panel {
			transition: all 0.3s ease;
		}
		.faq-section .panel:hover {
			box-shadow: 0 6px 20px rgba(46, 204, 113, 0.2);
			transform: translateY(-3px);
		}
		.faq-section .panel-heading {
			background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
			border: none;
			padding: 0;
			border-radius: 8px 8px 0 0;
		}
		.faq-section .panel-title {
			margin: 0;
		}
		.faq-section .panel-title a {
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 20px 25px;
			color: #333;
			font-size: 18px;
			font-weight: 600;
			text-decoration: none;
			transition: all 0.3s ease;
			position: relative;
		}
		.faq-section .panel-title a:hover,
		.faq-section .panel-title a:focus {
			color: #2ecc71;
			background: rgba(46, 204, 113, 0.05);
			text-decoration: none;
		}
		.faq-section .panel-title a[aria-expanded="true"] {
			color: #2ecc71;
			background: rgba(46, 204, 113, 0.08);
		}
		.faq-section .panel-title a[aria-expanded="true"] .plus-minus {
			transform: rotate(45deg);
		}
		.faq-section .plus-minus {
			width: 30px;
			height: 30px;
			position: relative;
			transition: transform 0.3s ease;
			flex-shrink: 0;
			margin-left: 15px;
		}
		.faq-section .plus-minus span {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 20px;
			height: 2px;
			background: #2ecc71;
			transition: all 0.3s ease;
		}
		.faq-section .plus-minus span:before {
			content: '';
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%) rotate(90deg);
			width: 20px;
			height: 2px;
			background: #2ecc71;
			transition: all 0.3s ease;
		}
		.faq-section .panel-title a[aria-expanded="true"] .plus-minus span:before {
			opacity: 0;
		}
		.faq-section .panel-body {
			padding: 20px 25px 25px;
			border-top: 1px solid #e9ecef;
			background: #ffffff;
			color: #555;
			line-height: 1.8;
			font-size: 16px;
		}
		.faq-section .panel-body p {
			margin-bottom: 0;
		}
		.faq-section .panel-collapse {
			border-top: 1px solid #e9ecef;
		}
		.faq-section .panel-collapse.collapse.in {
			animation: slideDown 0.3s ease;
		}
		@keyframes slideDown {
			from {
				opacity: 0;
				transform: translateY(-10px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}
		@media (max-width: 768px) {
			.faq-section .side-heading h2 {
				font-size: 28px;
				margin-bottom: 30px;
			}
			.faq-section .panel-title a {
				padding: 15px 20px;
				font-size: 16px;
			}
			.faq-section .panel-body {
				padding: 15px 20px 20px;
				font-size: 15px;
			}
		}
		
		/* Product Pages Styling */
		.product-detail-section .product-image img {
			border-radius: 8px;
			box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
		}
		/* Enhanced Product Detail Buttons with Shine */
		.product-detail-section .product-buttons a {
			transition: all 0.3s ease;
			position: relative;
			overflow: hidden;
		}
		.product-detail-section .product-buttons a::before {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg, transparent, rgba(255,255,255,0.5), transparent);
			animation: buttonShine 3s ease-in-out infinite;
			z-index: 1;
		}
		.product-detail-section .product-buttons a:hover {
			opacity: 0.9;
			transform: translateY(-3px);
			box-shadow: 0 6px 18px rgba(46, 204, 113, 0.3);
		}
		.product-detail-section .product-buttons a * {
			position: relative;
			z-index: 2;
		}
		.variation-inner a {
			transition: all 0.3s ease;
		}
		.variation-inner a:hover {
			color: #2ecc71 !important;
			text-decoration: none;
		}
		
		/* Footer Enhancements */
		.footer-section {
			padding: 80px 0 40px;
		}
		.footer-logo-img {
			display: block;
			width: auto;
			height: auto;
			max-width: 300px;
			max-height: 120px;
			margin-bottom: 20px;
			filter: brightness(0) invert(1);
		}
		/* Enhanced Footer Links */
		.footer-link {
			transition: all 0.3s ease;
		}
		.footer-link:hover {
			color: #2ecc71 !important;
			padding-left: 5px;
		}
		/* Enhanced Social Links with Animations */
		.social-links a {
			transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
			position: relative;
			overflow: hidden;
		}
		.social-links a::before {
			content: '';
			position: absolute;
			top: 50%;
			left: 50%;
			width: 0;
			height: 0;
			border-radius: 50%;
			background: rgba(255,255,255,0.3);
			transform: translate(-50%, -50%);
			transition: width 0.6s ease, height 0.6s ease;
		}
		.social-links a:hover::before {
			width: 100px;
			height: 100px;
		}
		.social-links a:hover {
			background: #2ecc71 !important;
			transform: translateY(-5px) rotate(5deg) scale(1.1);
			box-shadow: 0 8px 20px rgba(46, 204, 113, 0.5);
			animation: bounce 0.8s ease-in-out infinite;
		}
		.social-links a i {
			position: relative;
			z-index: 1;
			transition: transform 0.3s ease;
		}
		.social-links a:hover i {
			transform: scale(1.2);
		}
		.footer-legal a {
			transition: color 0.3s ease;
		}
		.footer-legal a:hover {
			color: #2ecc71 !important;
		}
		/* Mobile Optimization - Comprehensive Responsive Styles */
		@media (max-width: 768px) {
			/* Typography */
			.header-texts h1 {
				font-size: 32px !important;
				line-height: 1.3 !important;
			}
			.header-texts .lead {
				font-size: 16px !important;
			}
			.trust-badge {
				font-size: 12px !important;
				padding: 8px 16px !important;
			}
			.benefit-item span {
				font-size: 14px !important;
			}
			/* Hero buttons */
			.hero-btn {
				padding: 14px 20px !important;
				font-size: 14px !important;
			}
			.hero-btn img {
				height: 24px !important;
			}
			/* Section spacing */
			.section {
				padding-top: 60px !important;
				padding-bottom: 60px !important;
			}
			.pt-90, .pb-90 {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
			}
			.pt-120 {
				padding-top: 60px !important;
			}
			.pb-100 {
				padding-bottom: 50px !important;
			}
			/* Trust section */
			.trust-item h3 {
				font-size: 24px !important;
			}
			.trust-item p {
				font-size: 14px !important;
			}
			/* Variation cards */
			.variation-box .variation-inner {
				padding: 20px 15px !important;
			}
			.variation-name {
				font-size: 20px !important;
			}
			.variation-price {
				font-size: 24px !important;
			}
			/* Footer */
			.footer-bottom .text-right {
				text-align: left !important;
				margin-top: 20px;
			}
			.footer-legal {
				justify-content: flex-start !important;
			}
			.footer-section {
				padding: 50px 0 30px !important;
			}
			/* Navigation */
			.navigation {
				padding: 15px 0 !important;
			}
			.navbar-brand img {
				max-height: 50px !important;
			}
			/* Hero image */
			.hero-product-image {
				max-width: 100% !important;
				height: auto !important;
			}
			/* Badges positioning on mobile */
			.badge-1, .badge-2 {
				padding: 6px 12px !important;
				font-size: 11px !important;
			}
			/* Testimonials */
			.testimonial-card {
				padding: 20px !important;
				margin-bottom: 20px !important;
			}
			/* FAQ */
			.faq-section .panel-title a {
				padding: 12px 15px !important;
				font-size: 14px !important;
			}
		}
		@media (max-width: 480px) {
			.header-texts h1 {
				font-size: 28px !important;
			}
			.header-texts .lead {
				font-size: 14px !important;
			}
			.hero-btn {
				padding: 12px 16px !important;
				width: 100% !important;
				margin-bottom: 10px !important;
			}
			.trust-signals {
				flex-direction: column !important;
				align-items: flex-start !important;
				gap: 10px !important;
			}
			.trust-signals > div {
				font-size: 12px !important;
			}
		}
		/* Touch optimization */
		@media (hover: none) and (pointer: coarse) {
			.hero-btn, .button, .cta-primary {
				min-height: 44px;
				min-width: 44px;
			}
			.navbar-nav > li > a {
				padding: 15px 20px !important;
			}
		}
		/* SEO Optimization - Semantic HTML improvements */
		.header-texts h1 {
			font-weight: 700;
		}
		img {
			height: auto;
			max-width: 100%;
		}
		/* Performance optimization */
		.hero-product-image,
		.floating-badge {
			will-change: transform;
		}
		
		/* 04. Navigation - Original Styles - Fixed for refresh/scroll */
		.navigation {
			padding: 29px 0;
			position: fixed;
			width: 100%;
			top: 0;
			left: 0;
			z-index: 99999;
			-webkit-transition: all .5s ease;
			-moz-transition: all .5s ease;
			transition: all .5s ease;
			background: transparent !important;
		}
		.navigation.affix {
			padding: 14px 0;
			z-index: 99999;
			background: transparent !important;
			box-shadow: none !important;
		}
		/* Remove white background from navbar */
		.navbar-default {
			background-color: transparent !important;
		}
		.navigation .navbar {
			background: transparent !important;
		}
		/* Ensure navigation doesn't overlap content on refresh */
		body {
			padding-top: 0;
		}
		.navigation.affix + .header-section,
		.header-section:first-of-type {
			margin-top: 0;
		}
		.navbar-default {
			background-color: transparent;
		}
		.navbar {
			position: relative;
			min-height: 40px;
			margin-bottom: 0;
			border: none;
			border-radius: 0;
		}
		@media (min-width: 769px) {
			.navbar {
				display: flex;
				align-items: center;
				justify-content: space-between;
				position: relative;
			}
		}
		.navbar-header {
			display: flex;
			align-items: center;
			width: auto;
		}
		.navbar-brand {
			height: auto;
			background-color: rgba(255, 255, 255, 0.95);
			border-radius: 0 0 30px 30px;
			box-shadow: 0 1px 5px rgba(0,0,0,.2);
			top: 0;
			margin-top: -30px;
			padding: 30px 15px;
			margin-right: 0;
			flex-shrink: 0;
			position: relative;
			z-index: 999999 !important; /* Maximum z-index for logo */
		}
		/* Keep logo background white even when nav is transparent */
		.navigation.affix .navbar-brand {
			background-color: rgba(255, 255, 255, 0.95) !important;
			z-index: 999999 !important; /* Maximum z-index for logo */
		}
		.navbar-brand img {
			max-height: 100px;
			position: relative;
			z-index: 999999 !important; /* Maximum z-index for logo */
		}
		.navbar-nav {
			margin-top: -30px;
			padding-right: 30px;
		}
		/* Hide navigation links completely */
		.navbar-collapse,
		#site-collapse-nav {
			display: none !important;
			visibility: hidden !important;
		}
		.navbar-nav,
		.navbar-nav > li,
		.navbar-nav > li > a {
			display: none !important;
			visibility: hidden !important;
		}
		@media (min-width: 769px) {
			.navbar-collapse,
			#site-collapse-nav {
				display: none !important;
				visibility: hidden !important;
			}
		}
		.nav > li > a {
			padding: 15px 0;
			margin: 0 15px;
		}
		.is-transparent .navbar-default .navbar-nav > li > a {
			color: #fff;
		}
		.affix .navbar-default .navbar-nav > li > a {
			color: #333;
		}
		.navbar-nav > li > a:after {
			position: absolute;
			left: 0;
			bottom: 0;
			width: 100%;
			height: 2px;
			content: "";
			background: #fff;
			transform: scale(0);
			-webkit-transition: all .5s ease;
			-moz-transition: all .5s ease;
			transition: all .5s ease;
		}
		.affix .navbar-nav > li > a:after {
			bottom: 2px;
		}
		.is-transparent .navbar-default .navbar-nav > li > a:after {
			background: #fff;
		}
		.affix .navbar-default .navbar-nav > li > a:after {
			background: #333;
		}
		.navbar-default .navbar-nav > li > a:hover,
		.navbar-default .navbar-nav > li > a:focus {
			color: #2ecc71;
		}
		.navbar-default .navbar-nav > li > a:hover:after,
		.navbar-default .navbar-nav > li > a:focus:after {
			transform: scale(1);
		}
		@media only screen and (max-width: 375px) {
			.navbar-brand img {
				max-height: 60px;
			}
		}
		
		/* Enhanced CTA Buttons with Shine Effect */
		.cta-primary,
		.button {
			transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
			position: relative;
			overflow: hidden;
		}
		/* Shine effect removed from buttons */
		.variation-buttons .button::before,
		.variation-buttons .button::after {
			display: none !important;
		}
		/* Hover ripple effect */
		.cta-primary::after,
		.button::after {
			content: '';
			position: absolute;
			top: 50%;
			left: 50%;
			width: 0;
			height: 0;
			border-radius: 50%;
			background: rgba(255,255,255,0.3);
			transform: translate(-50%, -50%);
			transition: width 0.6s ease, height 0.6s ease;
			z-index: 0;
		}
		.cta-primary:hover::after,
		.button:hover::after {
			width: 300px;
			height: 300px;
		}
		.cta-primary:hover,
		.button:hover {
			transform: translateY(-5px) scale(1.05) !important;
			box-shadow: 0 12px 35px rgba(0,0,0,0.35) !important;
			animation: pulse 0.6s ease;
		}
		.cta-primary:active,
		.button:active {
			transform: translateY(-2px) scale(0.98) !important;
		}
		.button.button-primary {
			background: #2ecc71;
			color: #fff;
		}
		.button.button-primary::before {
			background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
		}
		.button.button-primary:hover {
			background: #27ae60;
			color: #fff;
			animation: glow 1.5s ease-in-out infinite;
		}
		/* Ensure button text is above shine */
		.cta-primary *,
		.button * {
			position: relative;
			z-index: 2;
		}
		
		/* Enhanced Hero Buttons with Hover Effects */
		.hero-btn {
			position: relative !important;
			overflow: hidden;
			transition: all 0.3s ease !important;
			z-index: 9999 !important;
			pointer-events: auto !important;
			cursor: pointer !important;
		}
		/* Continuous shine effect */
		.hero-btn::before {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg, transparent, rgba(255,255,255,0.8), transparent);
			animation: buttonShine 3s ease-in-out infinite;
			z-index: 1;
			pointer-events: none !important;
		}
		/* Enhanced shine on hover - faster animation */
		.hero-btn:hover::before {
			animation: buttonShine 1.5s ease-in-out infinite !important;
			background: linear-gradient(90deg, transparent, rgba(255,255,255,1), transparent) !important;
		}
		/* Hover effects - with higher specificity */
		a.hero-btn:hover,
		.button.hero-btn:hover,
		.buttons li a.hero-btn:hover {
			box-shadow: 0 8px 25px rgba(0,0,0,0.2) !important;
			background: #fff !important;
			transform: translateY(-3px) !important;
			z-index: 9999 !important;
		}
		.hero-btn:active {
			transform: translateY(-1px) !important;
		}
		.hero-btn img {
			position: relative;
			z-index: 2;
			transition: transform 0.3s ease !important;
			pointer-events: none !important;
		}
		.hero-btn:hover img {
			transform: scale(1.05) !important;
		}
		
		/* Hero Image - Enhanced styling, no scroll effects */
		.hero-image-wrapper {
			position: relative !important;
			transform: none !important;
		}
		.hero-product-image {
			max-width: 100%;
			height: auto;
			filter: drop-shadow(0 15px 40px rgba(0,0,0,0.3));
			position: relative !important;
			transform: none !important;
		}
		/* Prevent any scroll-based transforms on hero section - AGGRESSIVE FIX */
		.header-section .col-md-5,
		.header-section .hero-image-wrapper,
		.header-section .hero-product-image,
		.header-section .col-md-5 > div:not(.floating-badge) {
			transform: none !important;
			-webkit-transform: none !important;
			-moz-transform: none !important;
			-ms-transform: none !important;
			-o-transform: none !important;
			position: relative !important;
			will-change: auto !important;
		}
		/* Exclude badges from transform prevention - they need absolute positioning */
		.header-section .col-md-5 .floating-badge {
			position: absolute !important;
		}
		/* Ensure header section scrolls normally */
		.header-section {
			position: relative !important;
			transform: none !important;
			-webkit-transform: none !important;
		}
		.header-content {
			position: relative !important;
			transform: none !important;
			-webkit-transform: none !important;
		}
		/* Override any header-mockup styles that might affect hero image */
		.header-section .col-md-5.header-mockup,
		.header-section .col-md-5 .header-mockup {
			position: relative !important;
			top: auto !important;
			transform: none !important;
		}
		/* Enhanced Floating Badges with Animations and Shine - PERFECT POSITIONING */
		.hero-image-wrapper {
			position: relative !important;
		}
		.floating-badge {
			position: absolute !important;
			background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
			padding: 14px 28px;
			border-radius: 35px;
			box-shadow: 0 8px 25px rgba(0,0,0,0.3), 0 0 0 3px rgba(46, 204, 113, 0.2);
			display: flex;
			align-items: center;
			gap: 12px;
			font-size: 15px;
			font-weight: 700;
			font-family: 'Poppins', 'Montserrat', sans-serif;
			color: #2ecc71;
			z-index: 100;
			border: 2px solid rgba(46, 204, 113, 0.3);
			transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
			overflow: hidden;
			text-transform: uppercase;
			letter-spacing: 0.5px;
			white-space: nowrap;
		}
		/* Enhanced shine effect - continuous animation */
		.floating-badge::before {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg, transparent, rgba(255,255,255,0.9), transparent);
			animation: buttonShine 2.5s ease-in-out infinite;
			z-index: 1;
		}
		/* Additional shine overlay on hover */
		.floating-badge::after {
			content: '';
			position: absolute;
			top: -50%;
			left: -50%;
			width: 200%;
			height: 200%;
			background: radial-gradient(circle, rgba(255,255,255,0.5) 0%, transparent 70%);
			opacity: 0;
			transition: opacity 0.4s ease;
			z-index: 0;
		}
		.floating-badge:hover::after {
			opacity: 1;
		}
		.floating-badge:hover {
			transform: scale(1.15) translateY(-3px) !important;
			box-shadow: 0 12px 35px rgba(46, 204, 113, 0.5), 0 0 0 4px rgba(46, 204, 113, 0.3);
			border-color: #2ecc71;
			background: linear-gradient(135deg, #ffffff 0%, #f0fdf4 100%);
			animation: glow 2s ease-in-out infinite;
		}
		.floating-badge i {
			font-size: 20px;
			color: #2ecc71;
			transition: transform 0.4s ease;
			position: relative;
			z-index: 2;
		}
		.floating-badge span {
			position: relative;
			z-index: 2;
		}
		.floating-badge:hover i {
			transform: rotate(360deg) scale(1.2);
			animation: rotate 1s ease-in-out;
		}
		/* Badge 1 - Best Seller - Top Right */
		.badge-1 {
			top: 10% !important;
			right: 0% !important;
			left: auto !important;
			bottom: auto !important;
		}
		/* Badge 2 - #1 Choice - Bottom Left */
		.badge-2 {
			bottom: 15% !important;
			left: 0% !important;
			top: auto !important;
			right: auto !important;
		}
		@media (min-width: 992px) {
			.badge-1 {
				top: 8% !important;
				right: -5% !important;
			}
			.badge-2 {
				bottom: 20% !important;
				left: -5% !important;
			}
		}
		@media (max-width: 991px) {
			.badge-1 {
				top: 5% !important;
				right: -2% !important;
			}
			.badge-2 {
				bottom: 15% !important;
				left: -2% !important;
			}
			.floating-badge {
				padding: 10px 20px;
				font-size: 13px;
			}
		}
		@media (max-width: 768px) {
			.badge-1 {
				top: 3% !important;
				right: 0% !important;
			}
			.badge-2 {
				bottom: 10% !important;
				left: 0% !important;
			}
			.floating-badge {
				padding: 8px 16px;
				font-size: 12px;
			}
		}
		/* Hero Content Spacing */
		.header-content.pt-90 {
			padding-top: 120px !important;
		}
		@media (min-width: 769px) {
			/* Align trust badge with nav links */
			/* Navigation: padding 29px top, nav links margin-top -30px, link padding 15px 0 */
			/* So nav link text center is at: 29px (nav padding) - 30px (margin) + 15px (link padding) = 14px from nav top */
			/* Header content: 120px padding-top */
			/* Trust badge needs to align with nav link baseline */
			.header-texts .trust-badge {
				margin-top: 0;
				margin-bottom: 25px;
			}
			/* Adjust header-texts padding to align badge with nav */
			.header-content.pt-90 .header-texts {
				padding-top: calc(120px + 29px - 30px + 15px - 20px);
			}
			/* When navigation is affixed, padding changes to 14px */
			.navigation.affix ~ .header-content .header-texts,
			.navigation.affix ~ * .header-content .header-texts {
				padding-top: calc(120px + 14px - 30px + 15px - 20px);
			}
		}
		@keyframes bounce {
			0%, 100% {
				transform: translateY(0);
			}
			50% {
				transform: translateY(-5px);
			}
		}
		@keyframes fadeInScale {
			from {
				opacity: 0;
				transform: scale(0.9);
			}
			to {
				opacity: 1;
				transform: scale(1);
			}
		}
		@keyframes slideInLeft {
			from {
				opacity: 0;
				transform: translateX(-30px);
			}
			to {
				opacity: 1;
				transform: translateX(0);
			}
		}
		@keyframes checkmark {
			0% {
				transform: scale(0) rotate(-45deg);
			}
			50% {
				transform: scale(1.2) rotate(-45deg);
			}
			100% {
				transform: scale(1) rotate(0deg);
			}
		}
		.benefit-icon {
			animation: checkmark 0.6s ease-out;
		}
		
		/* Enhanced Trust Signals */
		.trust-signals > div {
			transition: all 0.3s ease;
			padding: 10px 15px;
			border-radius: 8px;
		}
		.trust-signals > div:hover {
			background: rgba(255,255,255,0.1);
			transform: translateY(-2px);
		}
		.trust-signals > div i {
			transition: all 0.3s ease;
		}
		.trust-signals > div:hover i {
			transform: scale(1.2);
		}
		
		@media (max-width: 768px) {
			.hero-btn {
				min-width: 100%;
			}
			.floating-badge {
				display: none;
			}
			.hero-product-image {
				max-width: 100%;
			}
		}
		
		/* Trust Section - No animations */
		.trust-item {
			padding: 25px 20px;
		}
		.trust-item > div {
			margin-bottom: 0 !important;
		}
		.trust-item > div i {
			display: inline-block;
			margin-bottom: 0 !important;
		}
		/* Force remove any margin on icon containers */
		.trust-item > div[style*="font-size: 48px"] {
			margin-bottom: 0 !important;
		}
		
		/* Enhanced Testimonial Cards with Animations */
		.testimonial-card {
			transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
			position: relative;
			overflow: hidden;
		}
		.testimonial-card::before {
			content: '';
			position: absolute;
			top: -50%;
			right: -50%;
			width: 200%;
			height: 200%;
			background: radial-gradient(circle, rgba(46, 204, 113, 0.1) 0%, transparent 70%);
			opacity: 0;
			transition: opacity 0.4s ease;
		}
		.testimonial-card:hover::before {
			opacity: 1;
		}
		.testimonial-card:hover {
			box-shadow: 0 15px 40px rgba(0,0,0,0.25) !important;
			transform: translateY(-10px) scale(1.02);
			animation: glow 2s ease-in-out infinite;
		}
		
		/* Smooth Scroll - disabled */
		.smooth-scroll {
			cursor: pointer;
		}
		
		/* Enhanced Typography */
		.header-texts h1 {
			text-shadow: 0 2px 10px rgba(0,0,0,0.1);
		}
		.header-texts .lead {
			text-shadow: 0 1px 5px rgba(0,0,0,0.1);
		}
		
		/* Enhanced Section Spacing */
		.section {
			position: relative;
		}
		
		/* Enhanced Cards and Boxes */
		.box,
		.card {
			transition: all 0.3s ease;
		}
		.box:hover,
		.card:hover {
			box-shadow: 0 8px 25px rgba(0,0,0,0.15);
			transform: translateY(-3px);
		}
		
		/* Enhanced Navigation & Logo */
		.navbar-brand {
			transition: all 0.3s ease;
		}
		.navbar-brand:hover {
			transform: translateY(-2px);
			box-shadow: 0 3px 10px rgba(0,0,0,0.2);
		}
		.navbar-brand img {
			transition: transform 0.3s ease;
		}
		.navbar-brand:hover img {
			transform: scale(1.05);
		}
		
		/* Enhanced Benefit Items */
		.benefit-item {
			transition: all 0.3s ease;
			padding: 8px 0;
		}
		.benefit-item:hover {
			transform: translateX(5px);
		}
		.benefit-item i {
			transition: all 0.3s ease;
		}
		.benefit-item:hover i {
			transform: scale(1.2);
			color: #fff !important;
		}
		
		/* Enhanced Section Headings */
		.section-head h2.heading {
			position: relative;
			padding-bottom: 20px;
		}
		.section-head h2.heading::after {
			content: '';
			position: absolute;
			bottom: 0;
			left: 50%;
			transform: translateX(-50%);
			width: 60px;
			height: 3px;
			background: linear-gradient(90deg, transparent, #2ecc71, transparent);
		}
		.section-head h2.heading span {
			position: relative;
		}
		
		/* Remove top spacing from Full Product Range section */
		.variations-section.pt-0 {
			padding-top: 0 !important;
		}
		.variations-section .section-head {
			margin-top: 0 !important;
			padding-top: 0 !important;
		}
		.variations-section .variations-content.pt-20 {
			padding-top: 20px !important;
		}
		
		/* Enhanced Video Section with Animations */
		.video {
			position: relative;
			border-radius: 12px;
			overflow: hidden;
			transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
		}
		.video:hover {
			transform: translateY(-8px) scale(1.02);
			box-shadow: 0 15px 40px rgba(0,0,0,0.3);
			animation: glow 2s ease-in-out infinite;
		}
		.video img {
			transition: transform 0.5s ease;
		}
		.video:hover img {
			transform: scale(1.1);
		}
		.video-play {
			transition: all 0.4s ease;
			position: relative;
		}
		.video-play::before {
			content: '';
			position: absolute;
			top: 50%;
			left: 50%;
			width: 0;
			height: 0;
			border-radius: 50%;
			background: rgba(46, 204, 113, 0.3);
			transform: translate(-50%, -50%);
			transition: width 0.6s ease, height 0.6s ease;
		}
		.video-play:hover::before {
			width: 200px;
			height: 200px;
		}
		.video-play:hover {
			transform: scale(1.2);
			background: rgba(46, 204, 113, 0.95) !important;
			animation: pulse 1s ease-in-out infinite;
		}
		.video-play i {
			position: relative;
			z-index: 1;
			transition: transform 0.3s ease;
		}
		.video-play:hover i {
			transform: scale(1.2);
		}
		
		/* Enhanced Features List with Animations */
		.single-features {
			transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
			position: relative;
			overflow: visible;
			/* Keep original padding from theme for proper alignment */
			padding-left: 83px;
			margin-bottom: 45px;
		}
		.single-features.icon-right {
			padding-right: 83px;
			padding-left: 0;
		}
		/* Ensure icons are properly aligned with text */
		.single-features em.ti,
		.single-features .fa {
			line-height: 60px;
			width: 60px;
			border-radius: 6px;
			text-align: center;
			font-size: 2.25em;
			position: absolute;
			top: 0;
			left: 0;
			display: inline-block;
			transition: all 0.4s ease;
		}
		.single-features.icon-right em.ti,
		.single-features.icon-right .fa {
			left: auto;
			right: 0;
		}
		/* Align h4 with icon vertically */
		.single-features h4 {
			margin-top: 0;
			margin-bottom: 10px;
			line-height: 1.3;
			padding-top: 0;
			transition: all 0.3s ease;
			/* Ensure h4 aligns with icon top */
			display: block;
		}
		.single-features p {
			margin-top: 0;
			line-height: 1.6em;
			transition: color 0.3s ease;
		}
		/* Hover effects */
		.single-features:hover {
			background: rgba(46, 204, 113, 0.08);
			transform: translateX(5px);
			box-shadow: 0 8px 25px rgba(46, 204, 113, 0.2);
		}
		.single-features.icon-right:hover {
			transform: translateX(-5px);
		}
		.single-features:hover em.ti,
		.single-features:hover .fa {
			transform: scale(1.1) rotate(5deg);
			color: #2ecc71 !important;
		}
		.single-features:hover h4 {
			color: #2ecc71;
		}
		.single-features:hover p {
			color: rgba(255, 255, 255, 0.9);
		}
		
		/* Enhanced About Section List with Animations */
		.about-section ul {
			text-align: left !important;
		}
		.about-section ul li {
			text-align: left !important;
			transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
			padding: 12px 0;
			position: relative;
			padding-left: 30px;
		}
		.about-section ul li::before {
			content: '';
			position: absolute;
			left: 0;
			top: 50%;
			width: 0;
			height: 2px;
			background: #2ecc71;
			transform: translateY(-50%);
			transition: width 0.4s ease;
		}
		.about-section ul li:hover::before {
			width: 20px;
		}
		.about-section ul li:hover {
			transform: translateX(15px);
			color: #2ecc71;
			padding-left: 35px;
		}
		.about-section ul li span {
			font-weight: 700;
			color: #2ecc71;
			transition: all 0.3s ease;
			display: inline-block;
		}
		.about-section ul li:hover span {
			transform: scale(1.1);
			animation: shake 0.5s ease;
		}
		
		/* Enhanced Variation Cards with Animations */
		.variation-name a {
			transition: all 0.3s ease;
			position: relative;
		}
		.variation-name a::after {
			content: '';
			position: absolute;
			bottom: -2px;
			left: 0;
			width: 0;
			height: 2px;
			background: #2ecc71;
			transition: width 0.3s ease;
		}
		.variation-name:hover a::after {
			width: 100%;
		}
		.variation-name:hover a {
			color: #2ecc71 !important;
		}
		.variation-price {
			transition: all 0.4s ease;
			display: inline-block;
		}
		.variation-box:hover .variation-price {
			transform: scale(1.15);
			animation: pulse 1s ease-in-out infinite;
		}
		.variation-box:hover .variation-name {
			color: #2ecc71;
			transform: translateX(5px);
		}
		.variation-size {
			transition: all 0.3s ease;
		}
		.variation-box:hover .variation-size {
			color: #2ecc71;
		}
		
		/* Enhanced Bestseller Badge with Animations */
		.variation-inner [style*="BESTSELLER"] {
			transition: all 0.4s ease;
			position: relative;
		}
		.variation-inner [style*="BESTSELLER"]::before {
			content: '';
			position: absolute;
			top: -2px;
			left: -2px;
			right: -2px;
			bottom: -2px;
			background: linear-gradient(45deg, #2ecc71, #27ae60, #2ecc71);
			border-radius: 20px;
			z-index: -1;
			opacity: 0;
			transition: opacity 0.3s ease;
		}
		.variation-box:hover [style*="BESTSELLER"]::before {
			opacity: 0.3;
			animation: glow 1.5s ease-in-out infinite;
		}
		.variation-box:hover [style*="BESTSELLER"] {
			transform: scale(1.15) rotate(5deg);
			box-shadow: 0 6px 20px rgba(46, 204, 113, 0.5);
			animation: bounce 1s ease-in-out infinite;
		}
		
		/* Enhanced Testimonial Elements */
		.testimonial-card .stars {
			transition: all 0.3s ease;
		}
		.testimonial-card:hover .stars {
			transform: scale(1.1);
		}
		.testimonial-card .author > div:first-child {
			transition: all 0.3s ease;
		}
		.testimonial-card:hover .author > div:first-child {
			transform: scale(1.1) rotate(5deg);
			background: #27ae60 !important;
		}
		.testimonial-card .author h4 {
			transition: color 0.3s ease;
		}
		.testimonial-card:hover .author h4 {
			color: #2ecc71;
		}
		
		/* Enhanced Footer Elements */
		.footer-heading {
			transition: all 0.3s ease;
			position: relative;
			padding-bottom: 15px;
		}
		.footer-heading::after {
			content: '';
			position: absolute;
			bottom: 0;
			left: 0;
			width: 40px;
			height: 2px;
			background: #2ecc71;
		}
		.footer-contact-list li {
			transition: all 0.3s ease;
		}
		.footer-contact-list li:hover {
			transform: translateX(5px);
		}
		.footer-contact-list li i {
			transition: all 0.3s ease;
		}
		.footer-contact-list li:hover i {
			transform: scale(1.2);
		}
		.footer-badges span {
			transition: all 0.3s ease;
		}
		.footer-badges span:hover {
			background: rgba(46, 204, 113, 0.3) !important;
			transform: translateY(-2px);
		}
		
		/* Enhanced Trust Badge with Animations */
		.trust-badge {
			transition: all 0.3s ease;
			position: relative;
			overflow: hidden;
		}
		.trust-badge::after {
			content: '';
			position: absolute;
			top: -50%;
			left: -50%;
			width: 200%;
			height: 200%;
			background: linear-gradient(45deg, transparent, rgba(255,255,255,0.3), transparent);
			transform: rotate(45deg);
			transition: left 0.5s ease;
		}
		.trust-badge:hover::after {
			left: 100%;
		}
		.trust-badge:hover {
			background: rgba(255,255,255,0.3) !important;
			transform: scale(1.1);
			/* Pulse animation removed as requested */
		}
		.trust-badge i {
			transition: transform 0.3s ease;
			display: inline-block;
		}
		.trust-badge:hover i {
			animation: rotate 1s ease-in-out;
		}
		
		/* Enhanced Heading Spans */
		.heading span {
			position: relative;
			display: inline-block;
		}
		.heading span::after {
			content: '';
			position: absolute;
			bottom: 0;
			left: 0;
			width: 100%;
			height: 2px;
			background: #2ecc71;
			transform: scaleX(0);
			transition: transform 0.3s ease;
		}
		.heading:hover span::after {
			transform: scaleX(1);
		}
		
		/* Enhanced Images with Animations */
		img {
			transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
		}
		.variation-box:hover img,
		.about-section:hover img,
		.features-section:hover img {
			transform: scale(1.08) rotate(1deg);
		}
		.hero-product-image {
			transition: filter 0.3s ease;
		}
		.hero-image-wrapper:hover .hero-product-image {
			filter: drop-shadow(0 20px 50px rgba(0,0,0,0.4));
		}
		
		/* Enhanced Text Entry with Animations */
		.txt-entry p {
			transition: all 0.4s ease;
			padding: 15px 0;
			position: relative;
		}
		.txt-entry p::before {
			content: '';
			position: absolute;
			left: 0;
			top: 0;
			width: 0;
			height: 100%;
			background: rgba(46, 204, 113, 0.1);
			transition: width 0.4s ease;
		}
		.txt-entry p:hover::before {
			width: 4px;
		}
		.txt-entry p:hover {
			padding-left: 15px;
			border-left: 3px solid #2ecc71;
			transform: translateX(5px);
		}
		
		/* Mobile Responsive - Comprehensive Optimization */
		@media (max-width: 768px) {
			.navbar-nav {
				margin-top: 0;
				padding-right: 0;
			}
			.header-texts h1 {
				font-size: 32px !important;
				line-height: 1.3 !important;
			}
			.header-texts .lead {
				font-size: 16px !important;
			}
			.trust-badge {
				font-size: 12px !important;
				padding: 8px 16px !important;
			}
			.benefit-item span {
				font-size: 14px !important;
			}
			.trust-signals {
				flex-direction: column;
				align-items: flex-start !important;
				gap: 10px !important;
			}
			.hero-btn {
				min-width: 100%;
				margin-bottom: 15px;
				padding: 14px 20px !important;
			}
			.hero-btn img {
				height: 24px !important;
			}
			.section {
				padding-top: 60px !important;
				padding-bottom: 60px !important;
			}
			.pt-90, .pb-90 {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
			}
			.trust-item h3 {
				font-size: 24px !important;
			}
			.variation-box .variation-inner {
				padding: 20px 15px !important;
			}
			.testimonial-card {
				padding: 20px !important;
				margin-bottom: 20px !important;
			}
		}
		@media (max-width: 480px) {
			.header-texts h1 {
				font-size: 28px !important;
			}
			.header-texts .lead {
				font-size: 14px !important;
			}
			.hero-btn {
				padding: 12px 16px !important;
			}
			.trust-signals > div {
				font-size: 12px !important;
			}
		}
		/* Touch optimization for mobile devices */
		@media (hover: none) and (pointer: coarse) {
			.hero-btn, .button, .cta-primary {
				min-height: 44px;
				min-width: 44px;
			}
			.navbar-nav > li > a {
				padding: 15px 20px !important;
			}
		}
	</style>
</head>
<body>
	
	<?php echo $__env->yieldContent('content'); ?>
	
	<!-- Preloader !remove please if you do not want -->
	<div id="preloader"><div id="status">&nbsp;</div></div> 
	<!-- Preloader End -->
	
</body>
</html>
<?php /**PATH /Users/tom/Herd/bloom/resources/views/layouts/app.blade.php ENDPATH**/ ?>