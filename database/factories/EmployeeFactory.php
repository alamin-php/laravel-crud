<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'position' => $this->faker->jobTitle(),
            'office' => $this->faker->city(),
            'age' => $this->faker->numberBetween($min = 18, $max = 40),
            'start_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'salary' => $this->faker->numberBetween($min = 30000, $max = 80000),
            'active' => $this->faker->numberBetween($min = 0, $max = 1),
        ];
    }
}
