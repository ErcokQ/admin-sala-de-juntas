<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Boardroom;

class BoardroomFactory extends Factory
{
    protected $model = Boardroom::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text($maxNbChars = 20),
            'status' => $this->faker->boolean(false)
        ];
    }
}
