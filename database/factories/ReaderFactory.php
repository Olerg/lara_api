<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReaderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'company' => $this->faker->word(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'birthday' => $this->faker->date(),
            'photo' => $this->faker->image()
        ];
    }
}
