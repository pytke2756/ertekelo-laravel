<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FeladatokFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => $this->faker->url(),
            'szoveges_ert' => $this->faker->paragraph(),
            'pontszam' => $this->faker->numberBetween(0, 100)
        ];
    }
}
