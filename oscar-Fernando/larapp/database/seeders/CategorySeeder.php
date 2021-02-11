<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Metodo Insert
        DB::table('categories')->insert([
            'name'          => 'Nintendo Switch',
            'description'   => 'Lorem ipsum dolor sit',
        ]);

        // Metodo ORM
        $cat = new Category;
        $cat->name         = 'Xbox Serie X';
        $cat->description  = 'Lorem ipsum dolor sit ';
        $cat->save();

        $cat = new Category;
        $cat->name         = 'Play Station 5';
        $cat->description  = 'Lorem ipsum dolor sit ';
        $cat->save();
    }
}