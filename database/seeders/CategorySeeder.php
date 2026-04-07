<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $categories = [
            ['name' => 'Electronics', 'sub' => ['Laptops', 'Smartphones', 'Cameras']],
            ['name' => 'Fashion', 'sub' => ['Men\'s Clothing', 'Women\'s Clothing', 'Accessories']],
            ['name' => 'Home & Garden', 'sub' => ['Furniture', 'Decor', 'Kitchenware']],
            ['name' => 'Beauty', 'sub' => ['Skincare', 'Makeup', 'Fragrance']],
        ];

        foreach ($categories as $item) {
            $parent = Category::create([
                'name' => $item['name'],
                'slug' => Str::slug($item['name']),
                'parent_id' => null,
            ]);

            foreach ($item['sub'] as $subName) {
                Category::create([
                    'name' => $subName,
                    'slug' => Str::slug($subName),
                    'parent_id' => $parent->id,
                ]);
            }
    }
    }
}
