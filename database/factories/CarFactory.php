<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        return [

            "name" => $faker->vehicle,
            "brand" => $faker->vehicleModel,
            "price" => fake()->numberBetween(10000, 1000000),
            "fuel" => $faker->vehicleFuelType,
            "seatsNumber" => $faker->vehicleSeatCount


        ];
    }
}