<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service_id' => fake()->numberBetween(1, 10),
            'name' => fake()->name(),
            'phone' => $this->faker->phoneNumber,
            'date' => $this->faker->date,
            'time' => $this->faker->time,
            'value' => $this->faker->randomFloat(2, 10, 1000),
            'status' => $this->faker->randomElement(['pending', 'realized', 'confirmed', 'rejected']),
        ];
    }
}
