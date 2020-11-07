<?php

namespace Database\Factories;

use App\Models\Pokemon;
use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\Factory;

class PokemonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pokemon::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName->unique(),
            'HP' => $this->faker->numberBetween(10,100),
            'Type' => $this->faker->randomElement(['fire','water','grass']),
            'trainer_id'=>Trainer::inRandomOrder()->first()->id
        ];
    }
}
