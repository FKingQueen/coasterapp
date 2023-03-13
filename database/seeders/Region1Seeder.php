<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region1;

class Region1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region1::create([
            'name' => 'Ilocos Norte',
            'latitude' => '18.1947',
            'longitude' => '120.5216',
        ]);
        Region1::create([
            'name' => 'Ilocos Sur',
            'latitude' => '17.2279',
            'longitude' => '120.3940',
        ]);
        Region1::create([
            'name' => 'La Union',
            'latitude' => '16.6159',
            'longitude' => '120.2540',
        ]);
        Region1::create([
            'name' => 'Pangasinan',
            'latitude' => '16.4049',
            'longitude' => '119.8250',
        ]);
    }
}
