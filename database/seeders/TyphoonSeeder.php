<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Typhoon;

class TyphoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Typhoon::create([
            'name' => 'Sample Typhoon',
            'province_id' => 1,
        ]);
    }
}
