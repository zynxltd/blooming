<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'slug',
        'is_active',
        'image_url',
        'video_url',
    ];

    /**
     * Get the variations for the product.
     */
    public function variations(): HasMany
    {
        return $this->hasMany(ProductVariation::class)->orderBy('sort_order');
    }

    /**
     * Get active variations for the product.
     */
    public function activeVariations(): HasMany
    {
        return $this->variations()->where('is_active', true);
    }

    /**
     * Get bestseller variations for the product.
     */
    public function bestsellerVariations(): HasMany
    {
        return $this->variations()
            ->where('is_active', true)
            ->where('is_bestseller', true)
            ->orderBy('sort_order')
            ->limit(3);
    }
}
