<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariation;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('activeVariations')
            ->where('is_active', true)
            ->get();

        return view('products.index', compact('products'));
    }

    public function show($slug)
    {
        $variation = ProductVariation::with('product')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $relatedVariations = ProductVariation::where('product_id', $variation->product_id)
            ->where('id', '!=', $variation->id)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('products.show', compact('variation', 'relatedVariations'));
    }

    public function quickView($slug)
    {
        $variation = ProductVariation::with('product')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('products.quick-view', compact('variation'))->render();
    }
}
