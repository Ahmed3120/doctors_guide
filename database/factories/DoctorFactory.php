<?php

namespace Database\Factories;

use Faker\Guesser\Name;
use Faker\Provider\ar_EG\Text;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'doctor_name' => fake()->name(),
            // 'doctor_lastname' => fake()->lastName(),
            // 'doctor_address' => fake()->address(),
            // 'specialize' => fake()->jobTitle(),
            // 'doctor_phone_number' => fake()->phoneNumber(),
            // 'note' => fake()->text(),
        ];
    }
}
