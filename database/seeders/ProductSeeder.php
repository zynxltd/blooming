<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductVariation;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define all products
        $products = [
            [
                'name' => 'Ultimate Rose Bloom Booster',
                'slug' => 'ultimate-rose-bloom-booster',
                'description' => 'Complete fertiliser specially formulated for roses. Promotes bigger, more vibrant blooms and healthier plants.',
                'image_url' => 'https://www.yougarden.com/images/item-p-100196/ultimate-rose-bloom-booster-complete-fertiliser-750g.jpg',
                'yougarden_url' => 'https://www.yougarden.com/item-p-100196/ultimate-rose-bloom-booster-complete-fertiliser-750g',
                'variations' => [
                    [
                        'name' => '750g',
                        'size' => '750g',
                        'price' => 12.99,
                        'description' => 'Perfect size for regular rose feeding. Makes approximately 750 litres of feed.',
                        'image_url' => 'https://www.yougarden.com/images/item-p-100196/ultimate-rose-bloom-booster-complete-fertiliser-750g.jpg',
                        'yougarden_url' => 'https://www.yougarden.com/item-p-100196/ultimate-rose-bloom-booster-complete-fertiliser-750g',
                        'sort_order' => 1,
                        'is_bestseller' => false,
                    ],
                ],
            ],
            [
                'name' => 'Swell Gell & Feed',
                'slug' => 'swell-gell-feed',
                'description' => 'Revolutionary water-retaining gel combined with plant feed. Reduces watering frequency and feeds your plants at the same time.',
                'image_url' => 'https://www.yougarden.com/images/item-p-100118/blooming-fast-swell-gel-and-feed-250g.jpg',
                'yougarden_url' => 'https://www.yougarden.com/item-p-100118/blooming-fast-swell-gel-and-feed-250g',
                'variations' => [
                    [
                        'name' => '250g',
                        'size' => '250g',
                        'price' => 8.99,
                        'description' => 'Ideal for potted plants and hanging baskets. Reduces watering by up to 75%.',
                        'image_url' => 'https://www.yougarden.com/images/item-p-100118/blooming-fast-swell-gel-and-feed-250g.jpg',
                        'yougarden_url' => 'https://www.yougarden.com/item-p-100118/blooming-fast-swell-gel-and-feed-250g',
                        'sort_order' => 1,
                        'is_bestseller' => false,
                    ],
                ],
            ],
            [
                'name' => 'Superior Soluble Fertiliser',
                'slug' => 'superior-soluble-fertiliser',
                'description' => 'Our best-ever formulation for use all round the garden for more flowers, more fruit, better roots and better shoots.',
                'image_url' => 'https://www.yougarden.com/images/item-p-100062/blooming-fast-superior-soluble-fertiliser-500g.jpg',
                'yougarden_url' => 'https://www.yougarden.com/item-p-100062/blooming-fast-superior-soluble-fertiliser-500g',
                'variations' => [
                    [
                        'name' => '50g Trial Sachet',
                        'size' => '50g',
                        'price' => 4.99,
                        'description' => 'Perfect for trying out our superior plant food. Makes approximately 50 litres.',
                        'image_url' => 'https://www.yougarden.com/images/item-p-100062/blooming-fast-superior-soluble-fertiliser-50g.jpg',
                        'yougarden_url' => 'https://www.yougarden.com/item-p-100062/blooming-fast-superior-soluble-fertiliser',
                        'sort_order' => 1,
                        'is_bestseller' => true,
                    ],
                    [
                        'name' => '500g Bag',
                        'size' => '500g',
                        'price' => 12.99,
                        'description' => 'Our most popular size. Makes approximately 500 litres from a 500g bag.',
                        'image_url' => 'https://www.yougarden.com/images/item-p-100062/blooming-fast-superior-soluble-fertiliser-500g.jpg',
                        'yougarden_url' => 'https://www.yougarden.com/item-p-100062/blooming-fast-superior-soluble-fertiliser',
                        'sort_order' => 2,
                        'is_bestseller' => true,
                    ],
                    [
                        'name' => '1.25kg Bag',
                        'size' => '1.25kg',
                        'price' => 24.99,
                        'description' => 'Best value for larger gardens. Makes approximately 1,250 litres.',
                        'image_url' => 'https://www.yougarden.com/images/item-p-100062/blooming-fast-superior-soluble-fertiliser-125kg.jpg',
                        'yougarden_url' => 'https://www.yougarden.com/item-p-100062/blooming-fast-superior-soluble-fertiliser',
                        'sort_order' => 3,
                        'is_bestseller' => true,
                    ],
                    [
                        'name' => '2.5kg Bag',
                        'size' => '2.5kg',
                        'price' => 44.99,
                        'description' => 'Ideal for professional gardeners and large-scale growing. Makes approximately 2,500 litres.',
                        'image_url' => 'https://www.yougarden.com/images/item-p-100062/blooming-fast-superior-soluble-fertiliser-25kg.jpg',
                        'yougarden_url' => 'https://www.yougarden.com/item-p-100062/blooming-fast-superior-soluble-fertiliser',
                        'sort_order' => 4,
                        'is_bestseller' => false,
                    ],
                    [
                        'name' => '5kg Bag',
                        'size' => '5kg',
                        'price' => 79.99,
                        'description' => 'Maximum value for commercial use. Makes approximately 5,000 litres.',
                        'image_url' => 'https://www.yougarden.com/images/item-p-100062/blooming-fast-superior-soluble-fertiliser-5kg.jpg',
                        'yougarden_url' => 'https://www.yougarden.com/item-p-100062/blooming-fast-superior-soluble-fertiliser',
                        'sort_order' => 5,
                        'is_bestseller' => false,
                    ],
                    [
                        'name' => '10kg Bag',
                        'size' => '10kg',
                        'price' => 149.99,
                        'description' => 'Bulk size for nurseries and large operations. Makes approximately 10,000 litres.',
                        'image_url' => 'https://www.yougarden.com/images/item-p-100062/blooming-fast-superior-soluble-fertiliser-10kg.jpg',
                        'yougarden_url' => 'https://www.yougarden.com/item-p-100062/blooming-fast-superior-soluble-fertiliser',
                        'sort_order' => 6,
                        'is_bestseller' => false,
                    ],
                    [
                        'name' => '25kg Bulk Bag',
                        'size' => '25kg',
                        'price' => 349.99,
                        'description' => 'Ultimate bulk size for commercial growers. Makes approximately 25,000 litres.',
                        'image_url' => 'https://www.yougarden.com/images/item-p-100062/blooming-fast-superior-soluble-fertiliser-25kg.jpg',
                        'yougarden_url' => 'https://www.yougarden.com/item-p-100062/blooming-fast-superior-soluble-fertiliser',
                        'sort_order' => 7,
                        'is_bestseller' => false,
                    ],
                ],
            ],
            [
                'name' => 'Citrus Feed',
                'slug' => 'citrus-feed',
                'description' => 'Specially formulated feed for citrus trees and plants. Promotes healthy growth, abundant fruit, and vibrant foliage.',
                'image_url' => 'https://www.yougarden.com/images/item-p-100016/blooming-fast-citrus-feed-150g.jpg',
                'yougarden_url' => 'https://www.yougarden.com/item-p-100016/blooming-fast-citrus-feed-150g',
                'variations' => [
                    [
                        'name' => '150g',
                        'size' => '150g',
                        'price' => 6.99,
                        'description' => 'Perfect for potted citrus trees. Makes approximately 150 litres of feed.',
                        'image_url' => 'https://www.yougarden.com/images/item-p-100016/blooming-fast-citrus-feed-150g.jpg',
                        'yougarden_url' => 'https://www.yougarden.com/item-p-100016/blooming-fast-citrus-feed-150g',
                        'sort_order' => 1,
                        'is_bestseller' => false,
                    ],
                ],
            ],
            [
                'name' => 'Acer Feed',
                'slug' => 'acer-feed',
                'description' => 'Specialist feed for Japanese maples and acer trees. Enhances leaf colour and promotes healthy growth.',
                'image_url' => 'https://www.yougarden.com/images/item-p-100105/blooming-fast-acer-feed-900g.jpg',
                'yougarden_url' => 'https://www.yougarden.com/item-p-100105/blooming-fast-acer-feed-900g',
                'variations' => [
                    [
                        'name' => '900g',
                        'size' => '900g',
                        'price' => 14.99,
                        'description' => 'Ideal for multiple acer trees. Makes approximately 900 litres of feed.',
                        'image_url' => 'https://www.yougarden.com/images/item-p-100105/blooming-fast-acer-feed-900g.jpg',
                        'yougarden_url' => 'https://www.yougarden.com/item-p-100105/blooming-fast-acer-feed-900g',
                        'sort_order' => 1,
                        'is_bestseller' => false,
                    ],
                ],
            ],
            [
                'name' => 'Clematis Feed',
                'slug' => 'clematis-feed',
                'description' => 'Specially formulated feed for clematis plants. Promotes abundant flowering and strong, healthy growth.',
                'image_url' => 'https://www.yougarden.com/images/item-p-100106/blooming-fast-clematis-feed-900g.jpg',
                'yougarden_url' => 'https://www.yougarden.com/item-p-100106/blooming-fast-clematis-feed-900g',
                'variations' => [
                    [
                        'name' => '900g',
                        'size' => '900g',
                        'price' => 14.99,
                        'description' => 'Perfect for feeding multiple clematis plants. Makes approximately 900 litres of feed.',
                        'image_url' => 'https://www.yougarden.com/images/item-p-100106/blooming-fast-clematis-feed-900g.jpg',
                        'yougarden_url' => 'https://www.yougarden.com/item-p-100106/blooming-fast-clematis-feed-900g',
                        'sort_order' => 1,
                        'is_bestseller' => false,
                    ],
                ],
            ],
            [
                'name' => 'Fish Blood & Bone',
                'slug' => 'fish-blood-bone',
                'description' => 'Traditional organic fertiliser made from fish meal and bone meal. Excellent for general garden use and soil improvement.',
                'image_url' => 'https://www.yougarden.com/images/item-p-100046/blooming-fast-fish-blood-and-bone-1-5kg-tub.jpg',
                'yougarden_url' => 'https://www.yougarden.com/item-p-100046/blooming-fast-fish-blood-and-bone-1-5kg-tub',
                'variations' => [
                    [
                        'name' => '1.5kg Tub',
                        'size' => '1.5kg',
                        'price' => 9.99,
                        'description' => 'Convenient tub size. Perfect for regular garden feeding throughout the season.',
                        'image_url' => 'https://www.yougarden.com/images/item-p-100046/blooming-fast-fish-blood-and-bone-1-5kg-tub.jpg',
                        'yougarden_url' => 'https://www.yougarden.com/item-p-100046/blooming-fast-fish-blood-and-bone-1-5kg-tub',
                        'sort_order' => 1,
                        'is_bestseller' => false,
                    ],
                ],
            ],
        ];

        // Create products and their variations
        foreach ($products as $productData) {
            $product = Product::firstOrCreate(
                ['slug' => $productData['slug']],
                [
                    'name' => $productData['name'],
                    'description' => $productData['description'],
                    'image_url' => $productData['image_url'] ?? null,
                    'is_active' => true,
                ]
            );

            foreach ($productData['variations'] as $variationData) {
                $slug = \Illuminate\Support\Str::slug($productData['slug'] . '-' . $variationData['name']);
                ProductVariation::updateOrCreate(
                    [
                        'product_id' => $product->id,
                        'slug' => $slug,
                    ],
                    array_merge($variationData, [
                        'slug' => $slug,
                        'is_active' => true,
                        'is_bestseller' => $variationData['is_bestseller'] ?? false,
                    ])
                );
            }
        }
    }
}
