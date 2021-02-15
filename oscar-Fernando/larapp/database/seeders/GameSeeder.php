<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Metodo Insert
        DB::table('games')->insert([
            'name'          => "Luigi's Mansion 3",
            'description'   => "Luigi's Mansion 3 es un videojuego de acción-aventura desarrollado por Next Level Games y publicado por Nintendo para Nintendo Switch.",
            'user_id'       => 1,
            'category_id'   => 1,
            'slider'        => 1,
            'price'         => 59
        ]);

        // Metodo ORM
        $gm = new Game;
        $gm->name         = 'Halo Infinite';
        $gm->description  = 'Halo: Infinite es un videojuego de disparos en primera persona próximo a estrenarse de la franquicia de videojuegos de ciencia ficción creada por Bungie Studios y continuada por 343 Industries y Sperasoft.';
        $gm->user_id      = 1;
        $gm->category_id  = 2;
        $gm->slider       = 0;
        $gm->price        = 49;
        $gm->save();

        // Metodo ORM
        $gm = new Game;
        $gm->name         = "Demon's Souls";
        $gm->description  = "Traducción del inglés-Demon's Souls es un juego de rol de acción desarrollado por Bluepoint Games, con la ayuda de Japan Studio, y publicado por Sony Interactive Entertainment.";
        $gm->user_id      = 1;
        $gm->category_id  = 3;
        $gm->slider       = 0;
        $gm->price        = 79;
        $gm->save();
    }
}
