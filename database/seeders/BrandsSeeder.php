<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Brand::create([
            'id'=>1,
            'name' => 'Bvlgari',
        ]);
        Brand::create([
            'id'=>2,
            'name' => 'Cartier',
        ]);
        Brand::create([
            'id'=>3,
            'slug' => 'innova',
        ]);
        Brand::create([
            'id'=>4,
            'name' => 'Goldy',
        ]);

    }
}
