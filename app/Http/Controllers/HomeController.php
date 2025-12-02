<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get the main product for hero section (Superior Soluble Fertiliser)
        $product = Product::with(['activeVariations'])
            ->where('slug', 'superior-soluble-fertiliser')
            ->firstOrFail();

        // Get the first variation for hero buttons (preferably bestseller or first available)
        $heroVariation = $product->activeVariations()
            ->where('is_bestseller', true)
            ->orderBy('sort_order')
            ->first() ?? $product->activeVariations()->orderBy('sort_order')->first();

        // Get all product variations for the full product range display
        $allVariations = \App\Models\ProductVariation::with('product')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get()
            ->groupBy('product_id')
            ->map(function($variations) {
                return $variations->first(); // Get first variation of each product for display
            })
            ->values();

        return view('home', compact('product', 'allVariations', 'heroVariation'));
    }
}
