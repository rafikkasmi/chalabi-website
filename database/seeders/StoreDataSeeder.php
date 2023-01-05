<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\StoreData;

class StoreDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        StoreData::create([
            'phone_number' => '0555555555',
            'secondary_phone_number' => '0777777777',
            'address' => 'Reghaia , Alger',
        ]);
    }
}
