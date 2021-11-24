<?php

namespace Database\Seeders;

use App\Models\CategoriaPublicacion;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name'=>'Alejandro Zarate',
            'email'=>'ale.zm@nile.com',
            'password'=>Hash::make('inspirenile'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name'=>'Dalia Ponce',
            'email'=>'dal.pr@lerma.com',
            'password'=>Hash::make('inspirelerma'),
            'email_verified_at' => now(),
        ]);

        $this->call([
            CategoriaSeeder::class,
            PublicacionSeeder::class,
            CategoriaPublicacionSeeder::class
        ]);
    }
}
