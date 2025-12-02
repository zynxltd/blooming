<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductVariation extends Model
{
    protected $fillable = [
        'product_id',
        'name',
        'slug',
        'size',
        'price',
        'description',
        'yougarden_url',
        'amazon_url',
        'image_url',
        'video_url',
        'sort_order',
        'is_active',
        'is_bestseller',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean',
        'is_bestseller' => 'boolean',
        'sort_order' => 'integer',
    ];

    /**
     * Get the product that owns the variation.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
