<?php

namespace Database\Factories;

use App\Models\Travel;
use Illuminate\Database\Eloquent\Factories\Factory;

class TravelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Travel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'dateOfDeparture' => $this->faker->dateTimeThisMonth(),
            'arrivalDate' => $this->faker->dateTimeThisMonth('+12 days'),
            'placeOfDeparture' => $this->faker->city,
            'placeOfArrival' => $this->faker->city
        ];
    }
}
