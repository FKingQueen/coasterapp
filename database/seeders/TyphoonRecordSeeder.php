<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TyphoonRecord;

class TyphoonRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TyphoonRecord::create([
            'typhoon_id' => '1',
            'title' => 'Sample Title Ilocos Norte',
            'description' => 'Sample Description Ilocos Norte',
            'graph' => 'Sample Graph Ilocos Norte',
            'link' => 'Sample Link Ilocos Norte'
        ]);
        TyphoonRecord::create([
            'typhoon_id' => '1',
            'title' => 'Sample Title Typhoon Ilocos Sur',
            'description' => 'Sample Description Ilocos Sur',
            'graph' => 'Sample Graph Ilocos Sur',
            'link' => 'Sample Link Ilocos Sur'
        ]);
        TyphoonRecord::create([
            'typhoon_id' => '1',
            'title' => 'Sample Title La Union',
            'description' => 'Sample Description La Union',
            'graph' => 'Sample Graph La Union',
            'link' => 'Sample Link La Union'
        ]);
        TyphoonRecord::create([
            'typhoon_id' => '1',
            'title' => 'Sample Title Pangasinan',
            'description' => 'Sample Description Pangasinan',
            'graph' => 'Sample Graph Pangasinan',
            'link' => 'Sample Link Pangasinan'
        ]);
    }
}
