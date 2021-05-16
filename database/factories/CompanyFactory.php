<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "NIP"=> $this->faker->randomNumber(5, true),
            "REGON"=> $this->faker->randomNumber(5, true),
            "NAZWA"=> $this->faker->company(),
            "VAT"=> false,
            "ULICA"=> $this->faker->streetSuffix(),
            "NUMER_DOMU"=> $this->faker->buildingNumber(),
            "NUMER_MIESZKANIA"=> $this->faker->buildingNumber(),
        ];
    }
}
