<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1;$i<40;$i++){
            $product= Product::create([
                'id'=>$i,
                'name' => 'Bijou en or blanc 18 carats',
                'slug' => 'boucles-d-oreilles-en-or-blanc-18-carats',
                'brand'=>rand(1,4),
                'cate_id' => rand(1,8),
                'gender'=>Product::WOMEN,
                'type'=>Product::GOLD,
                'original_price' => rand(10000,30000),
                'description' => 'Bijou en or blanc 18 carats avec diamants et saphirs',
                'image' => "/images/product/$i.jpg",
            ]);
            for($j=0;$j<3;$j++){
                $imagerand=rand(1,50);
                ProductImage::create([
                    'product_id'=>$i,
                    'path' => "/images/product/$imagerand.jpg",
                ]);
            }

        }
        


    }
}
