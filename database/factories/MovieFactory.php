<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->word,
            'duration'=>$this->faker->numberBetween(30,240),
            'rating'=>$this->faker->randomFloat(2,1,5)
        ];
    }
}
