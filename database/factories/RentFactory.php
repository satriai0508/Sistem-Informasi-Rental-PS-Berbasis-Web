<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => mt_rand('5000','50000'),
            'waktu_sewa' => mt_rand('1','10'),
            'device_id' => mt_rand(1,30),
            'user_id' => mt_rand(1,10)
        ];
    }
}
