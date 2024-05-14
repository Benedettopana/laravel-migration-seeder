<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 100; $i++){
            $new_train = new Train();

            $new_train->agency = $faker->word(1, true);
            $new_train->departure_station = $faker->word(3, true);
            $new_train->arrival_station = $faker->word(3, true);
            $new_train->departure_time = $faker->Time();
            $new_train->arrival_time = $faker->Time();
            $new_train->train_code = $faker->regexify('[A-Z]{5}[0-4]{3}');;
            $new_train->carriages_number = $faker->randomDigitNotNull();
            $new_train->is_full = $faker->boolean();
            $new_train->in_time = $faker->boolean();
            $new_train->cancelled = $faker->boolean();

            $new_train->save();
        }
    }
}
