<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'categoria' => 'Arte Realista',
            'descripcion' => ''
        ]);

        Categoria::create([
            'categoria' => 'Arte Figurativo',
            'descripcion' => ''
        ]);

        Categoria::create([
            'categoria' => 'Arte Abstracto',
            'descripcion' => ''
        ]);

        Categoria::create([
            'categoria' => 'Arte Impresionista',
            'descripcion' => ''
        ]);

        Categoria::create([
            'categoria' => 'Pop art',
            'descripcion' => ''
        ]);

        Categoria::create([
            'categoria' => 'Hiperrealismo',
            'descripcion' => ''
        ]);

        Categoria::factory(9)->create();
    }
}
