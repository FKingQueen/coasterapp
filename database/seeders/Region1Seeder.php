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
            'latitude' => '18.1647',
            'longitude' => '120.7116',
        ]);
        Region1::create([
            'name' => 'Ilocos Sur',
            'latitude' => '17.2279',
            'longitude' => '120.5740',
        ]);
        Region1::create([
            'name' => 'La Union',
            'latitude' => '16.6159',
            'longitude' => '120.3209',
        ]);
        Region1::create([
            'name' => 'Pangasinan',
            'latitude' => '15.8949',
            'longitude' => '120.2863',
        ]);
    }
}
