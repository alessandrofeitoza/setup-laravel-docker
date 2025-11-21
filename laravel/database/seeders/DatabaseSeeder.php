<?php

namespace Database\Seeders;

use App\Models\Anuncio;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $an1 = new Anuncio();
        $an1->titulo = "Celtinha 2012 rebaixado";
        $an1->descricao = "Teste";
        $an1->preco = 18990;

        $an1->save();
    }
}
