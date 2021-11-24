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
            'descripcion' => 'Pintura que busca parecerse lo mas posible a la realidad.'
        ]);

        Categoria::create([
            'categoria' => 'Arte Figurativo',
            'descripcion' => 'Pintura que intenta figurar o simular culquiero objeto visible.'
        ]);

        Categoria::create([
            'categoria' => 'Arte Abstracto',
            'descripcion' => 'Arte que no representa objetos o cosas en concreto.'
        ]);

        Categoria::create([
            'categoria' => 'Arte Impresionista',
            'descripcion' => 'Arte que se observa desde lejos para una mejor impresión.'
        ]);

        Categoria::create([
            'categoria' => 'Pop art',
            'descripcion' => 'Tipo de arte moderno, surgió en la época de Marilyn Monroe.'
        ]);

        Categoria::create([
            'categoria' => 'Hiperrealismo',
            'descripcion' => 'Arte que supera al realismo.'
        ]);

        Categoria::factory(9)->create();
    }
}
