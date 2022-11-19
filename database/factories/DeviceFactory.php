<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'serie' => $this->faker->randomElement(['PS3','PS4']),
            'joystick' => $this->faker->randomElement(['1','2','3','4'])
        ];
    }
}
