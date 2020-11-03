<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;

class PokemonTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pokemon::factory()
            ->times(50)
            ->create();
    }
}
