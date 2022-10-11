<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TypeFactory extends Factory
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
            'description' => $this->faker->sentence(),
            'type_code' => '001',
            'status_id' => 1,
            'module' => 'general',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
