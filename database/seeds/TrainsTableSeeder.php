<?php
use App\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 30; $i++) { 
            $newTrain = new Train();
            $newTrain->agency = $faker->company();
            $newTrain->departure_time = $faker->dateTimeBetween('now', '+1 week');
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_time = $faker->dateTimeBetween($newTrain->departure_time, '+1 week');
            $newTrain->arrival_station = $faker->city();
            $newTrain->train_code = $faker->numberBetween(1000, 9000);
            $newTrain->number_carriages = $faker->numberBetween(15,30);
            $newTrain->in_time = 1;
            $newTrain->deleted = 0;

            $newTrain->save();


        }
    }
}
