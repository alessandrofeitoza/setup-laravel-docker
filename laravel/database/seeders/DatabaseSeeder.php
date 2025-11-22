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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $an1 = new Anuncio();
$an1->titulo = "Celtinha 2012 rebaixado";
$an1->descricao = "Carro novo, único dono";
$an1->preco = 18990;
$an1->save();

$an2 = new Anuncio();
$an2->titulo = "Notebook Dell i5 11ª geração";
$an2->descricao = "Perfeito para estudos e trabalho";
$an2->preco = 2899;
$an2->save();

$an3 = new Anuncio();
$an3->titulo = "iPhone 12 128GB";
$an3->descricao = "Aparelho conservado, bateria 87%";
$an3->preco = 3699;
$an3->save();

$an4 = new Anuncio();
$an4->titulo = "Casa 3 quartos - bairro Centro";
$an4->descricao = "Ótima localização, recém reformada";
$an4->preco = 320000;
$an4->save();

$an5 = new Anuncio();
$an5->titulo = "Moto CG 160 Fan 2019";
$an5->descricao = "Baixa quilometragem, documentação em dia";
$an5->preco = 13500;
$an5->save();

$an6 = new Anuncio();
$an6->titulo = "Sofá 3 lugares";
$an6->descricao = "Tecido suede, muito confortável";
$an6->preco = 800;
$an6->save();

$an7 = new Anuncio();
$an7->titulo = "Monitor LG 27 polegadas";
$an7->descricao = "Tela IPS, ótimo para programação";
$an7->preco = 1090;
$an7->save();

$an8 = new Anuncio();
$an8->titulo = "Teclado mecânico Redragon";
$an8->descricao = "Switch azul, pouco uso";
$an8->preco = 220;
$an8->save();

$an9 = new Anuncio();
$an9->titulo = "Cadeira gamer preta";
$an9->descricao = "Ergonômica, com ajustes de altura";
$an9->preco = 499;
$an9->save();

$an10 = new Anuncio();
$an10->titulo = "Terreno 12x30";
$an10->descricao = "Ideal para construção, bairro em expansão";
$an10->preco = 85000;
$an10->save();

$an11 = new Anuncio();
$an11->titulo = "Violão Yamaha";
$an11->descricao = "Som encorpado, perfeito para iniciantes";
$an11->preco = 650;
$an11->save();

$an12 = new Anuncio();
$an12->titulo = "Smart TV Samsung 55'";
$an12->descricao = "4K, HDR, ótimo estado";
$an12->preco = 2490;
$an12->save();

$an13 = new Anuncio();
$an13->titulo = "Ar-condicionado 12.000 BTUs";
$an13->descricao = "Inverter, super econômico";
$an13->preco = 1600;
$an13->save();

$an14 = new Anuncio();
$an14->titulo = "Bicicleta aro 29";
$an14->descricao = "Freio a disco, excelente para trilhas";
$an14->preco = 1200;
$an14->save();

$an15 = new Anuncio();
$an15->titulo = "Geladeira Brastemp";
$an15->descricao = "Frost-free, 375 litros";
$an15->preco = 2100;
$an15->save();

$an16 = new Anuncio();
$an16->titulo = "Cama box casal";
$an16->descricao = "Mola ensacada, semi-nova";
$an16->preco = 900;
$an16->save();

$an17 = new Anuncio();
$an17->titulo = "Xbox Series S";
$an17->descricao = "Com 1 controle e cabos";
$an17->preco = 1750;
$an17->save();

$an18 = new Anuncio();
$an18->titulo = "Coleção de quadrinhos Marvel";
$an18->descricao = "Mais de 40 edições";
$an18->preco = 600;
$an18->save();

$an19 = new Anuncio();
$an19->titulo = "Máquina de lavar 12kg";
$an19->descricao = "Funcionando perfeitamente";
$an19->preco = 1300;
$an19->save();

$an20 = new Anuncio();
$an20->titulo = "Drone DJI Mini";
$an20->descricao = "Excelente para filmagens aéreas";
$an20->preco = 2500;
$an20->save();


        
    }
}
