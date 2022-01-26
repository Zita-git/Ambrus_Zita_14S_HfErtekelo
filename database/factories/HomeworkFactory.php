<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomeworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'  => $this->faker->name(),
            'task' => $this->faker->words(3,true),
            'url'  => $this->faker->url(),
            'points'  => $this->faker->numberBetween(1, 100),
            'message'  => $this->faker->words(5, true),
        ];
    }
}
