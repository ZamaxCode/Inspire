<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PublicacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 2),
            'titulo' => $this->faker->sentence(3), 
            'descripcion' => $this->faker->sentence(7),
            'explicacion' => $this->faker->text(1000), 
            'pais' => 'Mexico',
            'imagen' => 'default' . $this->faker->numberBetween(1, 3) . '.jpeg'
        ];
    }
}