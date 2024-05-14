<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new_train = new Train();
        $new_train->agency = 'trenitalia';
        $new_train->departure_station = 'Catania Centrale';
        $new_train->arrival_station = 'Roma Termini';
        $new_train->departure_time = 103000;
        $new_train->arrival_time = 170000;
        $new_train->train_code = 'je2301fd';
        $new_train->carriages_number = 4;
        $new_train->is_full = 0;

        $new_train->save();
        // dump($new_train);
    }
}
