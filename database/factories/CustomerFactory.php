<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CompanyName' => $this->faker->firstName(),
			'FirstName' => $this->faker->unique()->lastName,
			'LastName' => $this->faker->name,
			'Phone number' => $this->faker->unique()->phoneNumber,
			'Address' => $this->faker->address,
        ];
    }
}
