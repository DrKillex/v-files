<?php

namespace Database\Seeders;

use App\Models\Game;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Game::truncate();
        for ($i=0;$i<10;$i++){
            $newGame= new Game();
            $newGame->original_title= $faker->sentence(3);
            $newGame->title= $faker->sentence(3);
            $newGame->description= $faker->paragraph();
            $newGame->released= $faker->boolean();
            $newGame->release = $faker->date();
            $newGame->price = $faker->randomFloat(2, 0, 9999);
            $newGame->required_space = $faker->numberBetween(1, 254);
            $newGame->singleplayer= $faker->boolean();
            $newGame->multiplayer= $faker->boolean();
            $newGame->local_multiplayer= $faker->boolean();
            $newGame->cross_play= $faker->boolean();
            $newGame->dx_version = $faker->numberBetween(1, 254);
            $newGame->vote = $faker->numberBetween(0, 5);
            $newGame->pegi= $faker->numberBetween(3,18);
            $newGame->ram= $faker->numberBetween(1, 32);
            $newGame->discount_value = $faker->numberBetween(1,99);
            $newGame->realese_version= $faker->semver();
            $newGame->thumb= $faker->imageUrl(640, 480, 'animals', true);
            $newGame->save();
        }
    }
}
