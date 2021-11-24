<?php

namespace Database\Seeders;

use App\Models\CategoriaPublicacion;
use Illuminate\Database\Seeder;

class CategoriaPublicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriaPublicacion::create([
            'publicacion_id'=>1,
            'categoria_id'=>rand(1, 15),
        ]);
        CategoriaPublicacion::create([
            'publicacion_id'=>2,
            'categoria_id'=>rand(1, 15),
        ]);
        CategoriaPublicacion::create([
            'publicacion_id'=>3,
            'categoria_id'=>rand(1, 15),
        ]);
        CategoriaPublicacion::create([
            'publicacion_id'=>4,
            'categoria_id'=>rand(1, 15),
        ]);
        CategoriaPublicacion::create([
            'publicacion_id'=>5,
            'categoria_id'=>rand(1, 15),
        ]);
        CategoriaPublicacion::create([
            'publicacion_id'=>6,
            'categoria_id'=>rand(1, 15),
        ]);
        CategoriaPublicacion::create([
            'publicacion_id'=>7,
            'categoria_id'=>rand(1, 15),
        ]);
        CategoriaPublicacion::create([
            'publicacion_id'=>8,
            'categoria_id'=>rand(1, 15),
        ]);
        CategoriaPublicacion::create([
            'publicacion_id'=>9,
            'categoria_id'=>rand(1, 15),
        ]);
        CategoriaPublicacion::create([
            'publicacion_id'=>10,
            'categoria_id'=>rand(1, 15),
        ]);
    }
}
