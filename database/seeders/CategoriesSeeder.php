<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'id'=>1,
            'name' => "Boucles d'oreilles",
            'description' => '1',
            'slug' => "boucles-d-oreilles",
        ]);
        Category::create([
            'id'=>2,
            'name' => 'Pendentifs',
            'description' => '1',
            'slug' => 'pendentifs',
        ]);
        Category::create([
            'id'=>3,
            'name' => 'Bagues',
            'description' => '1',
            'slug' => 'bagues',
        ]);
        Category::create([
            'id'=>4,
            'name' => 'Chaînes',
            'description' => '1',
            'slug' => 'chaines',
        ]);
        Category::create([
            'id'=>5,
            'name' => 'Bracelets',
            'description' => '1',
            'slug' => 'bracelets',
        ]);
        Category::create([
            'id'=>6,
            'name' => 'Montres en Or',
            'description' => '1',
            'slug' => 'montres-en-or',
        ]);
        Category::create([
            'id'=>7,
            'name' => 'Montres à bracelet',
            'description' => '1',
            'slug' => 'montres-a-bracelet',
        ]);
        Category::create([
            'id'=>8,
            'name' => 'Parures en Or',
            'description' => '1',
            'slug' => 'parures-en-or',
        ]);
    }
}
