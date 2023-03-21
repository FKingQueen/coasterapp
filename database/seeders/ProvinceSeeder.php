<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::create([
            'name' => 'Ilocos Norte',
        ]);
        Province::create([
            'name' => 'Ilocos Sur',
        ]);
        Province::create([
            'name' => 'La Union',
        ]);
        Province::create([
            'name' => 'Pangasinan',
        ]);
    }
}
