<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'birth_date' => $this->faker->date,
            'birth_place' => $this->faker->randomElement(['Jakarta', 'Bogor']),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
        ];
    }
}
