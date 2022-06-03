<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'ciencias';
        $category->description = 'preguntas relacionadas con la ciencia';
        $category->icon = 'ciencias.png';
        $category->save();

        $category = new Category();
        $category->name = 'geografía';
        $category->description = 'preguntas relacionadas con la geografía';
        $category->icon = 'geografia.png';
        $category->save();


        $category = new Category();
        $category->name = 'arte';
        $category->description = 'preguntas relacionadas con el arte';
        $category->icon = 'arte.png';
        $category->save();

        $category = new Category();
        $category->name = 'deporte';
        $category->description = 'preguntas relacionadas con el deporte';
        $category->icon = 'deporte.png';
        $category->save();

        $category = new Category();
        $category->name = 'historia';
        $category->description = 'preguntas relacionadas con la historia';
        $category->icon = 'historia.png';
        $category->save();

        $category = new Category();
        $category->name = 'entretenimiento';
        $category->description = 'preguntas relacionadas con el entretenimiento';
        $category->icon = 'entretenimiento.png';
        $category->save();

    }
}
