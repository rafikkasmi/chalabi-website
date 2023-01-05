<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PricesTable;
class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PricesTable::create([
            'name' => 'Or Local 18k',
            'from' => 10000,
            'to' => 10900
        ]);
         PricesTable::create([
            'name' => 'Or Importation 18k',
            'from' => 12000,
            'to' => 12900
        ]);
         PricesTable::create([
            'name' => 'Or Serti 18k',
            'from' => 10900,
            'to' => 12000
        ]);
    }
}
