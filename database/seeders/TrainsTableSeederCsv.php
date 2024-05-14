<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeederCsv extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_str = fopen(__DIR__ . '/trains.csv', 'r');

        $c = 0;

        while(($row = fgetcsv($data_str))!== false){
            if($c > 0){
                $new_train = new Train();
                $new_train->agency = $row[0];
                $new_train->departure_station = $row[1];
                $new_train->arrival_station =  $row[2];
                $new_train->departure_time =  $row[3];
                $new_train->arrival_time =  $row[4];
                $new_train->train_code =  $row[5];
                $new_train->carriages_number = $row[6];
                $new_train->in_time = $row[7];
                $new_train->cancelled = $row[8];

                $new_train->save();
            }

            $c++;
        }
    }
}
