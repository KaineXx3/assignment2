<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name,
                'email'=>$this->faker->safeEmail,
                'address'=>$this->faker->address,
                'phoneNumber'=>$this->faker->phoneNumber,
                'gender'=>$this->faker->randomElement(['Male','Female']),
                'birthday' => $this->faker->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),
        ];
    }
}
