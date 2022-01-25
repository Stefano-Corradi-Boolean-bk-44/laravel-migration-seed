<?php

use Faker\Generator as Faker;
use App\House;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i= 0; $i < 100; $i++){
            $new_house = new House();
            $new_house->address = $faker->streetAddress();
            $new_house->postal_code = $faker->postcode();
            $new_house->city = $faker->city();
            $new_house->state = $faker->state();
            $new_house->square_meters = $faker->numberBetween(10,300);
            $new_house->energy_rating = $faker->randomElement(['A','B','C','D','E','AA','AAA']);
            $new_house->rooms = $faker->numberBetween(1,10);
            $new_house->bathrooms = $faker->numberBetween(1,5);
            $new_house->description = $faker->text(200);
            $new_house->price = $faker->numberBetween(50000,900000000);
            $new_house->save();
        }


    }
}
